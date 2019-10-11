<template>
    <div class="row">
        <div class="sidebar col-sm-3 hidden-xs">
            <el-button type="primary" @click="setCheck">検索</el-button>
            <el-button @click="resetChecked">リセット</el-button>

            <el-tree
                class="filter-tree"
                :data="tags"
                show-checkbox
                node-key="id"
                ref="tree"
                accordion
                check-strictly="true"
            ></el-tree>
        </div>
        <div class="col-sm-9 offset-sm-3">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" v-for="value in filter" :key="value.id">
                            <div class="card mb-4 shadow-sm">
                                <div class="image">
                                    <a :href="'/product-detail?work='+value.id">
                                        <img
                                            v-if="value.product_images[0].image.indexOf('http') == -1"
                                            class="img img-thumbnail"
                                            :src="'/storage/'+value.product_images[0].image"
                                        />
                                        <img
                                            v-if="value.product_images[0].image.indexOf('http') != -1"
                                            class="img img-thumbnail"
                                            :src="value.product_images[0].image"
                                        />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ value.title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProductTag from "./ProductTag.vue";
export default {
    components: {
        ProductTag
    },
    data: function() {
        return {
            keyword: "",
            products: [],
            // tags: [],
            images: [],
            check: [],
            result: [],
            old_result: [],
            tags: [
                {
                    id: 489,
                    label: "内壁・天井",
                    children: [
                        {
                            id: 490,
                            label: "タイル",
                            children: [
                                {
                                    id: 491,
                                    label: "セラミックタイル"
                                },
                                {
                                    id: 492,
                                    label: "磁器タイル"
                                },
                                {
                                    id: 493,
                                    label: "テラコッタタイル"
                                },
                                {
                                    id: 494,
                                    label: "石タイル"
                                },
                                {
                                    id: 495,
                                    label: "モザイクタイル"
                                },
                                {
                                    id: 496,
                                    label: "タイル付属品"
                                },
                                {
                                    id: 497,
                                    label: "タイルその他"
                                }
                            ]
                        },
                        {
                            id: 498,
                            label: "壁装材",
                            children: [
                                {
                                    id: 499,
                                    label: "化粧パネル"
                                },
                                {
                                    id: 500,
                                    label: "ウッドパネル"
                                },
                                {
                                    id: 501,
                                    label: "壁紙"
                                },
                                {
                                    id: 502,
                                    label: "吸音板"
                                },
                                {
                                    id: 503,
                                    label: "金属パネル"
                                },
                                {
                                    id: 504,
                                    label: "グリーンウォール"
                                },
                                {
                                    id: 505,
                                    label: "壁装材その他"
                                }
                            ]
                        },
                        {
                            id: 506,
                            label: "天井",
                            children: [
                                {
                                    id: 507,
                                    label: "壁紙天井"
                                },
                                {
                                    id: 508,
                                    label: "吸音天井"
                                },
                                {
                                    id: 509,
                                    label: "木天井"
                                },
                                {
                                    id: 510,
                                    label: "装飾天井"
                                },
                                {
                                    id: 511,
                                    label: "ルーパー天井"
                                },
                                {
                                    id: 512,
                                    label: "天井その他"
                                }
                            ]
                        },
                        {
                            id: 513,
                            label: "塗料/石膏ボード",
                            children: [
                                {
                                    id: 514,
                                    label: "塗料"
                                },
                                {
                                    id: 515,
                                    label: "石膏ボード"
                                },
                                {
                                    id: 516,
                                    label: "塗料その他"
                                }
                            ]
                        },
                        {
                            id: 517,
                            label: "パーティション",
                            children: [
                                {
                                    id: 518,
                                    label: "パーティション"
                                },
                                {
                                    id: 519,
                                    label: "ガラスパーティション"
                                },
                                {
                                    id: 520,
                                    label: "パーティションその他"
                                }
                            ]
                        },
                        {
                            id: 521,
                            label: "システム壁・天井",
                            children: [
                                {
                                    id: 522,
                                    label: "壁下地"
                                },
                                {
                                    id: 523,
                                    label: "天井下地"
                                },
                                {
                                    id: 524,
                                    label: "システム壁"
                                },
                                {
                                    id: 525,
                                    label: "システム天井"
                                },
                                {
                                    id: 526,
                                    label: "システム壁・天井その他"
                                }
                            ]
                        },
                        {
                            id: 527,
                            label: "断熱材・被覆材",
                            children: [
                                {
                                    id: 528,
                                    label: "断熱材"
                                },
                                {
                                    id: 529,
                                    label: "被覆材"
                                }
                            ]
                        },

                        {
                            id: 530,
                            label: "サイン/サイネージ"
                        },
                        {
                            id: 531,
                            label: "内壁・天井その他"
                        }
                    ]
                },
                {
                    id: 532,
                    label: "床",
                    children: [
                        {
                            id: 533,
                            label: "ウッドフローリング",
                            children: [
                                {
                                    id: 534,
                                    label: "無垢フローリング"
                                },
                                {
                                    id: 535,
                                    label: "複合フローリング"
                                },
                                {
                                    id: 536,
                                    label: "エンジニアドウッドフローリング"
                                },
                                {
                                    id: 537,
                                    label: "ウッドラミネートフローリング"
                                },
                                {
                                    id: 538,
                                    label: "その他ウッドフローリング"
                                }
                            ],
                            id: 539,
                            label: "タイル床",
                            children: [
                                {
                                    id: 540,
                                    label: "セラミック床タイル"
                                },
                                {
                                    id: 541,
                                    label: "磁器石器床タイル"
                                },
                                {
                                    id: 542,
                                    label: "テラコッタ床タイル"
                                },
                                {
                                    id: 543,
                                    label: "石床タイル"
                                },
                                {
                                    id: 544,
                                    label: "コンクリート床タイル"
                                },
                                {
                                    id: 545,
                                    label: "モザイク床タイル"
                                },
                                {
                                    id: 546,
                                    label: "キッチン床タイル"
                                },
                                {
                                    id: 547,
                                    label: "浴室床タイル"
                                },
                                {
                                    id: 548,
                                    label: "プール床タイル"
                                },
                                {
                                    id: 549,
                                    label: "その他床タイル"
                                }
                            ],
                            id: 550,
                            label: "床仕上材",
                            children: [
                                {
                                    id: 551,
                                    label: "ビニル床"
                                },
                                {
                                    id: 552,
                                    label: "置式ビニル床"
                                },
                                {
                                    id: 553,
                                    label: "ビニル床シート"
                                },
                                {
                                    id: 554,
                                    label: "リノリウム床"
                                },
                                {
                                    id: 555,
                                    label: "樹脂・塗床"
                                },
                                {
                                    id: 556,
                                    label: "コンクリート・モルタル床"
                                },
                                {
                                    id: 557,
                                    label: "コルクフローリング"
                                },
                                {
                                    id: 558,
                                    label: "ラバーフローリング"
                                },
                                {
                                    id: 559,
                                    label: "人工芝"
                                },
                                {
                                    id: 560,
                                    label: "その他床仕上材"
                                }
                            ],
                            id: 561,
                            label: "カーペット",
                            children: [
                                {
                                    id: 562,
                                    label: "タイルカーペット"
                                },
                                {
                                    id: 563,
                                    label: "フロアカーペット"
                                },
                                {
                                    id: 564,
                                    label: "玄関マット"
                                }
                            ],
                            id: 565,
                            label: "舗装",
                            children: [
                                {
                                    id: 566,
                                    label: "ウッド舗装"
                                },
                                {
                                    id: 567,
                                    label: "セラミック舗装"
                                },
                                {
                                    id: 568,
                                    label: "テラコッタ舗装"
                                },
                                {
                                    id: 569,
                                    label: "ストーン舗装"
                                },
                                {
                                    id: 570,
                                    label: "コンクリート舗装機"
                                },
                                {
                                    id: 571,
                                    label: "その他舗装"
                                }
                            ],
                            id: 572,
                            label: "巾木",
                            children: [
                                {
                                    id: 573,
                                    label: "巾木"
                                },
                                {
                                    id: 574,
                                    label: "廻縁"
                                }
                            ],
                            id: 575,
                            label: "鋼製床・フロアシステム",
                            children: [
                                {
                                    id: 576,
                                    label: "鋼製床"
                                },
                                {
                                    id: 577,
                                    label: "システムフロア"
                                },
                                {
                                    id: 578,
                                    label: "その他フロアシステム"
                                }
                            ],
                            id: 579,
                            label: "床その他"
                        }
                    ]
                },
                {
                    id: 580,
                    label: "階段・昇降設備",
                    children: [
                        {
                            id: 581,
                            label: "階段",
                            children: [
                                {
                                    id: 582,
                                    label: "直線階段"
                                },
                                {
                                    id: 583,
                                    label: "螺旋階段"
                                },
                                {
                                    id: 584,
                                    label: "屋内階段"
                                },
                                {
                                    id: 585,
                                    label: "屋外階段"
                                },
                                {
                                    id: 586,
                                    label: "非常階段"
                                },
                                {
                                    id: 587,
                                    label: "その他階段"
                                },
                                {
                                    id: 588,
                                    label: "手すり"
                                },
                                {
                                    id: 589,
                                    label: "階段付属品"
                                }
                            ]
                        },
                        {
                            id: 590,
                            label: "エレベーター/エスカレーター",
                            children: [
                                {
                                    id: 591,
                                    label: "エレベーター"
                                },
                                {
                                    id: 592,
                                    label: "ホームエレベーター"
                                },
                                {
                                    id: 593,
                                    label: "カーエレベーター"
                                },
                                {
                                    id: 594,
                                    label: "動く歩道"
                                },
                                {
                                    id: 595,
                                    label: "エスカレーター"
                                }
                            ]
                        },
                        {
                            id: 596,
                            label: "階段・昇降設備その他"
                        }
                    ]
                },
                {
                    id: 597,
                    label: "キッチン・サニタリー",
                    children: [
                        {
                            id: 598,
                            label: "キッチン",
                            children: [
                                {
                                    id: 599,
                                    label: "キッチン・シンク"
                                },
                                {
                                    id: 600,
                                    label: "システムキッチン"
                                },
                                {
                                    id: 601,
                                    label: "キッチン水栓"
                                },
                                {
                                    id: 602,
                                    label: "IHシステム"
                                },
                                {
                                    id: 603,
                                    label: "キッチン付属品"
                                }
                            ]
                        },
                        {
                            id: 604,
                            label: "サニタリー",
                            children: [
                                {
                                    id: 605,
                                    label: "バスタブ"
                                },
                                {
                                    id: 606,
                                    label: "シャワー"
                                },
                                {
                                    id: 607,
                                    label: "トイレ"
                                },
                                {
                                    id: 608,
                                    label: "洗面台"
                                },
                                {
                                    id: 609,
                                    label: "洗面水栓"
                                },
                                {
                                    id: 610,
                                    label: "浴室棚・キャビネット"
                                },
                                {
                                    id: 611,
                                    label: "浴室付属品"
                                },
                                {
                                    id: 612,
                                    label: "バリアフリーバスルーム"
                                },
                                {
                                    id: 613,
                                    label: "ユニットシャワー"
                                },
                                {
                                    id: 614,
                                    label: "ユニットバス"
                                }
                            ]
                        },
                        {
                            id: 615,
                            label: "キッチン・サニタリーその他"
                        }
                    ]
                },
                {
                    id: 616,
                    label: "ファサード",
                    children: [
                        {
                            id: 617,
                            label: "外装仕上げ",
                            children: [
                                {
                                    id: 618,
                                    label: "金属"
                                },
                                {
                                    id: 619,
                                    label: "セラミック"
                                },
                                {
                                    id: 620,
                                    label: "コンクリート"
                                },
                                {
                                    id: 621,
                                    label: "プレキャストコンクリート"
                                },
                                {
                                    id: 622,
                                    label: "石"
                                },
                                {
                                    id: 623,
                                    label: "複合材料"
                                },
                                {
                                    id: 624,
                                    label: "サイディング"
                                },
                                {
                                    id: 625,
                                    label: "メタルメッシュ"
                                },
                                {
                                    id: 626,
                                    label: "木"
                                },
                                {
                                    id: 627,
                                    label: "レンガ"
                                }
                            ]
                        },
                        {
                            id: 628,
                            label: "ファサードシステム",
                            children: [
                                {
                                    id: 629,
                                    label: "カーテンウォール"
                                },
                                {
                                    id: 630,
                                    label: "コンクリートファサード"
                                },
                                {
                                    id: 631,
                                    label: "連続ファサードシステム"
                                },
                                {
                                    id: 632,
                                    label: "ルーバー/日除け"
                                },
                                {
                                    id: 633,
                                    label: "グリーンファサード"
                                },
                                {
                                    id: 634,
                                    label: "ファサード支持構造"
                                }
                            ]
                        },
                        {
                            id: 635,
                            label: "ファサードその他"
                        }
                    ]
                },
                {
                    id: 636,
                    label: "窓とドア",
                    children: [
                        {
                            id: 637,
                            label: "サッシ",
                            children: [
                                {
                                    id: 638,
                                    label: "アルミサッシ"
                                },
                                {
                                    id: 639,
                                    label: "木製サッシ"
                                },
                                {
                                    id: 640,
                                    label: "複合サッシ"
                                },
                                {
                                    id: 641,
                                    label: "サッシその他"
                                }
                            ]
                        },
                        {
                            id: 642,
                            label: "ウィンドウシステム",
                            children: [
                                {
                                    id: 643,
                                    label: "フレーム"
                                },
                                {
                                    id: 644,
                                    label: "窓台"
                                },
                                {
                                    id: 645,
                                    label: "窓付属品"
                                }
                            ]
                        },
                        {
                            id: 646,
                            label: "トップライト"
                        },
                        {
                            id: 647,
                            label: "ドア",
                            children: [
                                {
                                    id: 648,
                                    label: "室内ドア"
                                },
                                {
                                    id: 649,
                                    label: "屋外ドア"
                                },
                                {
                                    id: 650,
                                    label: "レバーハンドル"
                                },
                                {
                                    id: 651,
                                    label: "ドアロック"
                                },
                                {
                                    id: 652,
                                    label: "丁番"
                                },
                                {
                                    id: 653,
                                    label: "レターボックス"
                                },
                                {
                                    id: 654,
                                    label: "ドア付属品"
                                }
                            ]
                        },
                        {
                            id: 655,
                            label: "ガラス",
                            children: [
                                {
                                    id: 656,
                                    label: "ペアガラス"
                                },
                                {
                                    id: 657,
                                    label: "強化ガラス"
                                },
                                {
                                    id: 658,
                                    label: "網入りガラス"
                                },
                                {
                                    id: 659,
                                    label: "耐熱ガラス"
                                },
                                {
                                    id: 660,
                                    label: "合わせガラス"
                                },
                                {
                                    id: 661,
                                    label: "ガラスブロック"
                                },
                                {
                                    id: 662,
                                    label: "ガラス付属品"
                                },
                                {
                                    id: 663,
                                    label: "ガラスその他"
                                }
                            ]
                        },
                        {
                            id: 664,
                            label: "ブラインド・日除け・フィルム",
                            children: [
                                {
                                    id: 665,
                                    label: "ブラインド"
                                },
                                {
                                    id: 666,
                                    label: "カーテン"
                                },
                                {
                                    id: 667,
                                    label: "ロールスクリーン"
                                },
                                {
                                    id: 668,
                                    label: "カーテンレール"
                                },
                                {
                                    id: 669,
                                    label: "カーテン付属品"
                                },
                                {
                                    id: 670,
                                    label: "シェード"
                                },
                                {
                                    id: 671,
                                    label: "フィルム"
                                },
                                {
                                    id: 672,
                                    label: "シャッター"
                                }
                            ]
                        },
                        {
                            id: 673,
                            label: "窓とドアその他"
                        }
                    ]
                },
                {
                    id: 674,
                    label: "屋根",
                    children: [
                        {
                            id: 675,
                            label: "金属葺屋根",
                            children: [
                                {
                                    id: 676,
                                    label: "アルミ屋根"
                                },
                                {
                                    id: 677,
                                    label: "ガルバリウム屋根"
                                },
                                {
                                    id: 678,
                                    label: "ステンレス屋根"
                                },
                                {
                                    id: 679,
                                    label: "スチール屋根"
                                },
                                {
                                    id: 680,
                                    label: "チタン屋根"
                                },
                                {
                                    id: 681,
                                    label: "銅屋根"
                                },
                                {
                                    id: 682,
                                    label: "金属葦屋根その他"
                                }
                            ]
                        },
                        {
                            id: 683,
                            label: "葦屋根",
                            children: [
                                {
                                    id: 684,
                                    label: "セラミック屋根"
                                },
                                {
                                    id: 685,
                                    label: "スレート屋根"
                                },
                                {
                                    id: 686,
                                    label: "コンクリート屋根"
                                },
                                {
                                    id: 687,
                                    label: "瓦屋根"
                                },
                                {
                                    id: 688,
                                    label: "葦屋根その他"
                                }
                            ]
                        },
                        {
                            id: 689,
                            label: "ルーフシステム",
                            children: [
                                {
                                    id: 690,
                                    label: "屋上緑化"
                                },
                                {
                                    id: 691,
                                    label: "ソーラーパネル"
                                }
                            ]
                        },
                        {
                            id: 692,
                            label: "屋根構造",
                            children: [
                                {
                                    id: 693,
                                    label: "金属トラス"
                                },
                                {
                                    id: 694,
                                    label: "木材トラス"
                                },
                                {
                                    id: 695,
                                    label: "プレハブ"
                                }
                            ]
                        },
                        {
                            id: 696,
                            label: "防水",
                            children: [
                                {
                                    id: 697,
                                    label: "塗膜防水"
                                },
                                {
                                    id: 698,
                                    label: "シート防水"
                                },
                                {
                                    id: 699,
                                    label: "アスファルト防水"
                                },
                                {
                                    id: 700,
                                    label: "FRP防水"
                                },
                                {
                                    id: 701,
                                    label: "防水その他"
                                }
                            ]
                        },
                        {
                            id: 702,
                            label: "屋根要素",
                            children: [
                                {
                                    id: 703,
                                    label: "水切り・笠木"
                                },
                                {
                                    id: 704,
                                    label: "煙突"
                                },
                                {
                                    id: 705,
                                    label: "雨樋"
                                },
                                {
                                    id: 706,
                                    label: "屋根要素その他"
                                }
                            ]
                        },
                        {
                            id: 707,
                            label: "庇",
                            children: [
                                {
                                    id: 708,
                                    label: "アルミ庇"
                                },
                                {
                                    id: 709,
                                    label: "ステンレス庇"
                                },
                                {
                                    id: 710,
                                    label: "スチール庇"
                                },
                                {
                                    id: 711,
                                    label: "ガラス庇"
                                },
                                {
                                    id: 712,
                                    label: "庇その他"
                                }
                            ]
                        },
                        {
                            id: 713,
                            label: "その他屋根"
                        }
                    ]
                },
                {
                    id: 714,
                    label: "構造",
                    children: [
                        {
                            id: 715,
                            label: "鉄骨構造",
                            children: [
                                {
                                    id: 716,
                                    label: "木材"
                                },
                                {
                                    id: 717,
                                    label: "コンクリート造"
                                },
                                {
                                    id: 718,
                                    label: "トラス構造"
                                },
                                {
                                    id: 719,
                                    label: "梁・柱"
                                },
                                {
                                    id: 720,
                                    label: "ブレース"
                                },
                                {
                                    id: 721,
                                    label: "組積造"
                                },
                                {
                                    id: 722,
                                    label: "基礎"
                                },
                                {
                                    id: 723,
                                    label: "免震"
                                },
                                {
                                    id: 724,
                                    label: "構造その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 725,
                    label: "機械設備",
                    children: [
                        {
                            id: 726,
                            label: "空調ユニット",
                            children: [
                                {
                                    id: 727,
                                    label: "エアコン"
                                },
                                {
                                    id: 728,
                                    label: "吹出口"
                                },
                                {
                                    id: 729,
                                    label: "給水・給湯ユニット"
                                },
                                {
                                    id: 730,
                                    label: "再生可能エネルギーシステム"
                                },
                                {
                                    id: 731,
                                    label: "モニタリングシステム"
                                },
                                {
                                    id: 732,
                                    label: "防火・安全"
                                },
                                {
                                    id: 733,
                                    label: "消音器"
                                },
                                {
                                    id: 734,
                                    label: "機械設備その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 735,
                    label: "電気設備",
                    children: [
                        {
                            id: 736,
                            label: "スイッチ",
                            children: [
                                {
                                    id: 737,
                                    label: "コンセント"
                                },
                                {
                                    id: 738,
                                    label: "ケーブルラック"
                                },
                                {
                                    id: 739,
                                    label: "火災報知器・非常照明"
                                },
                                {
                                    id: 740,
                                    label: "スピーカー"
                                },
                                {
                                    id: 741,
                                    label: "防犯カメラ"
                                },
                                {
                                    id: 742,
                                    label: "スクリーン"
                                },
                                {
                                    id: 743,
                                    label: "プロジェクター"
                                },
                                {
                                    id: 744,
                                    label: "スマートホーム"
                                },
                                {
                                    id: 745,
                                    label: "セキュリティ"
                                },
                                {
                                    id: 746,
                                    label: "AVシステム"
                                },
                                {
                                    id: 747,
                                    label: "ソフトウェア"
                                },
                                {
                                    id: 748,
                                    label: "電気設備その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 749,
                    label: "照明",
                    children: [
                        {
                            id: 750,
                            label: "インテリア照明",
                            children: [
                                {
                                    id: 751,
                                    label: "シーリングライト"
                                },
                                {
                                    id: 752,
                                    label: "スポットライト"
                                },
                                {
                                    id: 753,
                                    label: "ペンダント"
                                },
                                {
                                    id: 754,
                                    label: "テーブルライト"
                                },
                                {
                                    id: 755,
                                    label: "フロアライト"
                                },
                                {
                                    id: 756,
                                    label: "ライン照明"
                                },
                                {
                                    id: 757,
                                    label: "レール照明システム"
                                },
                                {
                                    id: 758,
                                    label: "ネオン"
                                },
                                {
                                    id: 759,
                                    label: "インテリア照明付属品"
                                },
                                {
                                    id: 760,
                                    label: "インテリア照明その他"
                                }
                            ]
                        },
                        {
                            id: 761,
                            label: "屋外照明",
                            children: [
                                {
                                    id: 762,
                                    label: "屋外ペンダントライト"
                                },
                                {
                                    id: 763,
                                    label: "屋外スポットライト"
                                },
                                {
                                    id: 764,
                                    label: "屋外シーリングライト"
                                },
                                {
                                    id: 765,
                                    label: "屋外フロアライト"
                                },
                                {
                                    id: 766,
                                    label: "ファサードライト"
                                },
                                {
                                    id: 767,
                                    label: "地下ライト"
                                },
                                {
                                    id: 768,
                                    label: "ボラードライト"
                                },
                                {
                                    id: 769,
                                    label: "街路灯"
                                },
                                {
                                    id: 770,
                                    label: "ガーデンライト"
                                },
                                {
                                    id: 771,
                                    label: "アウトドアステップライト"
                                },
                                {
                                    id: 772,
                                    label: "投光器"
                                },
                                {
                                    id: 773,
                                    label: "その他屋外照明"
                                }
                            ]
                        },
                        {
                            id: 774,
                            label: "照明その他"
                        }
                    ]
                },
                {
                    id: 775,
                    label: "家具",
                    children: [
                        {
                            id: 776,
                            label: "椅子",
                            children: [
                                {
                                    id: 777,
                                    label: "アームチェア"
                                },
                                {
                                    id: 778,
                                    label: "フットレスト付きアームチェア"
                                },
                                {
                                    id: 779,
                                    label: "折りたたみ椅子"
                                },
                                {
                                    id: 780,
                                    label: "スタッキングチェアー"
                                },
                                {
                                    id: 781,
                                    label: "ダイニングチェア"
                                },
                                {
                                    id: 782,
                                    label: "ロッキングチェア"
                                },
                                {
                                    id: 783,
                                    label: "バーチェア"
                                },
                                {
                                    id: 784,
                                    label: "チェアその他"
                                }
                            ]
                        },
                        {
                            id: 785,
                            label: "ソファ",
                            children: [
                                {
                                    id: 786,
                                    label: "ストレートソファ"
                                },
                                {
                                    id: 787,
                                    label: "コーナーソファ"
                                },
                                {
                                    id: 788,
                                    label: "ユニットソファ"
                                },
                                {
                                    id: 789,
                                    label: "ソファベッド"
                                },
                                {
                                    id: 790,
                                    label: "屋内デイベッド"
                                },
                                {
                                    id: 791,
                                    label: "ソファその他"
                                },
                                {
                                    id: 792,
                                    label: "ベンチ"
                                },
                                {
                                    id: 793,
                                    label: "ベンチその他"
                                }
                            ]
                        },
                        {
                            id: 794,
                            label: "テーブル",
                            children: [
                                {
                                    id: 795,
                                    label: "カフェテーブル"
                                },
                                {
                                    id: 796,
                                    label: "ダイニングテーブル"
                                },
                                {
                                    id: 797,
                                    label: "バーテーブル"
                                },
                                {
                                    id: 798,
                                    label: "サイドテーブル"
                                },
                                {
                                    id: 799,
                                    label: "ネストテーブル"
                                },
                                {
                                    id: 800,
                                    label: "サイドボードテーブル"
                                },
                                {
                                    id: 801,
                                    label: "住宅デスク"
                                },
                                {
                                    id: 802,
                                    label: "デスク"
                                },
                                {
                                    id: 803,
                                    label: "ドレッシングテーブル"
                                },
                                {
                                    id: 804,
                                    label: "テーブルその他"
                                }
                            ]
                        },
                        {
                            id: 805,
                            label: "ベッド",
                            children: [
                                {
                                    id: 806,
                                    label: "シングルベッド"
                                },
                                {
                                    id: 807,
                                    label: "ダブルベッド"
                                },
                                {
                                    id: 808,
                                    label: "キングベッド"
                                },
                                {
                                    id: 809,
                                    label: "二段ベッド"
                                },
                                {
                                    id: 810,
                                    label: "ヘッドボード"
                                },
                                {
                                    id: 811,
                                    label: "ベッド付属品"
                                },
                                {
                                    id: 812,
                                    label: "ベッドその他"
                                }
                            ]
                        },
                        {
                            id: 813,
                            label: "収納・棚",
                            children: [
                                {
                                    id: 814,
                                    label: "棚"
                                },
                                {
                                    id: 815,
                                    label: "TV /マルチメディアユニット"
                                },
                                {
                                    id: 816,
                                    label: "ワードローブ"
                                },
                                {
                                    id: 817,
                                    label: "食器棚"
                                },
                                {
                                    id: 818,
                                    label: "書棚"
                                },
                                {
                                    id: 819,
                                    label: "ラック"
                                },
                                {
                                    id: 820,
                                    label: "陳列棚"
                                },
                                {
                                    id: 821,
                                    label: "ワードローブキャビネット"
                                },
                                {
                                    id: 822,
                                    label: "靴ラック"
                                },
                                {
                                    id: 823,
                                    label: "収納ボックス"
                                },
                                {
                                    id: 824,
                                    label: "家具ハンドル・ノブ"
                                },
                                {
                                    id: 825,
                                    label: "家具丁番"
                                },
                                {
                                    id: 826,
                                    label: "収納・棚その他"
                                }
                            ]
                        },
                        {
                            id: 827,
                            label: "テキスタイル",
                            children: [
                                {
                                    id: 828,
                                    label: "壁テキスタイル"
                                },
                                {
                                    id: 829,
                                    label: "室内装飾テキスタイル"
                                },
                                {
                                    id: 830,
                                    label: "テキスタイルその他"
                                }
                            ]
                        },
                        {
                            id: 831,
                            label: "子供家具",
                            children: [
                                {
                                    id: 832,
                                    label: "ベビーベッド"
                                },
                                {
                                    id: 833,
                                    label: "子供椅子"
                                },
                                {
                                    id: 834,
                                    label: "子供テーブル"
                                },
                                {
                                    id: 835,
                                    label: "子供壁紙"
                                },
                                {
                                    id: 836,
                                    label: "子供家具その他"
                                }
                            ]
                        },
                        {
                            id: 837,
                            label: "インテリア付属品",
                            children: [
                                {
                                    id: 838,
                                    label: "鏡"
                                },
                                {
                                    id: 839,
                                    label: "フリースタンディングミラー"
                                },
                                {
                                    id: 840,
                                    label: "テーブルミラー"
                                },
                                {
                                    id: 841,
                                    label: "ラグ"
                                },
                                {
                                    id: 842,
                                    label: "クッション"
                                },
                                {
                                    id: 843,
                                    label: "壁掛けコートラック"
                                },
                                {
                                    id: 844,
                                    label: "コートフック"
                                },
                                {
                                    id: 845,
                                    label: "時計"
                                },
                                {
                                    id: 846,
                                    label: "絵画"
                                },
                                {
                                    id: 847,
                                    label: "彫刻"
                                },
                                {
                                    id: 848,
                                    label: "花瓶"
                                },
                                {
                                    id: 849,
                                    label: "インテリア付属品その他"
                                }
                            ]
                        },
                        {
                            id: 850,
                            label: "家具その他"
                        }
                    ]
                },
                {
                    id: 851,
                    label: "オフィス家具",
                    children: [
                        {
                            id: 852,
                            label: "オフィス",
                            children: [
                                {
                                    id: 853,
                                    label: "オフィスデスク"
                                },
                                {
                                    id: 854,
                                    label: "オフィスワークステーション"
                                },
                                {
                                    id: 855,
                                    label: "オフィスチェア"
                                },
                                {
                                    id: 856,
                                    label: "エグゼクティブチェア"
                                },
                                {
                                    id: 857,
                                    label: "オフィススツール"
                                },
                                {
                                    id: 858,
                                    label: "その他オフィスチェア"
                                },
                                {
                                    id: 859,
                                    label: "オフィスブース"
                                },
                                {
                                    id: 860,
                                    label: "オフィスパーティション"
                                },
                                {
                                    id: 861,
                                    label: "ファイリングキャビネット"
                                },
                                {
                                    id: 862,
                                    label: "書架"
                                },
                                {
                                    id: 863,
                                    label: "ミーティングテーブル"
                                },
                                {
                                    id: 864,
                                    label: "オフィスレセプションデスク"
                                },
                                {
                                    id: 865,
                                    label: "オフィス収納棚"
                                },
                                {
                                    id: 866,
                                    label: "オフィス引出ユニット"
                                },
                                {
                                    id: 867,
                                    label: "オフィス付属品"
                                }
                            ]
                        },
                        {
                            id: 868,
                            label: "パブリック",
                            children: [
                                {
                                    id: 869,
                                    label: "ラウンジチェア"
                                },
                                {
                                    id: 870,
                                    label: "パブリックベンチ"
                                },
                                {
                                    id: 871,
                                    label: "待合室ソファ"
                                },
                                {
                                    id: 872,
                                    label: "待合椅子"
                                },
                                {
                                    id: 873,
                                    label: "ラウンジテーブル"
                                },
                                {
                                    id: 874,
                                    label: "パブリックデスク"
                                },
                                {
                                    id: 875,
                                    label: "レセプションデスク"
                                },
                                {
                                    id: 876,
                                    label: "ホール椅子"
                                },
                                {
                                    id: 877,
                                    label: "教室椅子"
                                },
                                {
                                    id: 878,
                                    label: "ボール"
                                },
                                {
                                    id: 879,
                                    label: "セキュリティゲート"
                                },
                                {
                                    id: 880,
                                    label: "金庫"
                                },
                                {
                                    id: 881,
                                    label: "ロッカー"
                                },
                                {
                                    id: 882,
                                    label: "ディスプレイケース"
                                }
                            ]
                        },
                        {
                            id: 883,
                            label: "ホスピタリティー",
                            children: [
                                {
                                    id: 884,
                                    label: "レストラン椅子"
                                },
                                {
                                    id: 885,
                                    label: "レストランテーブル"
                                },
                                {
                                    id: 886,
                                    label: "バーカウンター"
                                },
                                {
                                    id: 887,
                                    label: "ハイスツール"
                                },
                                {
                                    id: 888,
                                    label: "レストランブース"
                                },
                                {
                                    id: 889,
                                    label: "ハイテーブル"
                                },
                                {
                                    id: 890,
                                    label: "ホテルベッド"
                                },
                                {
                                    id: 891,
                                    label: "ホテルソファ"
                                },
                                {
                                    id: 892,
                                    label: "ホテルデスク"
                                },
                                {
                                    id: 893,
                                    label: "ホテルベッドサイドテーブル"
                                },
                                {
                                    id: 894,
                                    label: "ホテルワードローブ"
                                },
                                {
                                    id: 895,
                                    label: "ユニットキッチン"
                                },
                                {
                                    id: 896,
                                    label: "ホテル家具付属品"
                                }
                            ]
                        },
                        {
                            id: 897,
                            label: "オフィス家具その他"
                        }
                    ]
                },
                {
                    id: 898,
                    label: "屋外",
                    children: [
                        {
                            id: 899,
                            label: "屋外ウッドデッキ",
                            children: [
                                {
                                    id: 900,
                                    label: "屋外用家具"
                                },
                                {
                                    id: 901,
                                    label: "屋外暖炉・ヒーター"
                                },
                                {
                                    id: 902,
                                    label: "フェンス"
                                },
                                {
                                    id: 903,
                                    label: "日除け"
                                },
                                {
                                    id: 904,
                                    label: "ガーデニング付属品"
                                },
                                {
                                    id: 905,
                                    label: "スイミングプール"
                                },
                                {
                                    id: 906,
                                    label: "屋外シャワー"
                                },
                                {
                                    id: 907,
                                    label: "ストリートファーニチャー"
                                },
                                {
                                    id: 908,
                                    label: "屋外その他"
                                }
                            ]
                        }
                    ]
                }
            ]
        };
    },
    computed: {
        // 検索機能
        filter: function() {
            this.result = [];
            this.old_result = [];

            for (let i in this.products) {
                let product = this.products[i];
                let tagArray = product.tags.map(obj => obj.id);

                if (this.check.every(v => tagArray.includes(v)) == true) {
                    if (this.old_result == product) {
                    } else {
                        this.result.push(product);
                    }
                }
                this.old_result = product;
            }
            // for (let a in this.products) {
            //     let product = this.products[a];

            //     for (let n = 0; n < product.tags.length; n++) {
            //         if (
            //             product.tags[n].name.indexOf(this.keyword) !== -1 &&
            //             product.tags[n].name.indexOf(this.check) !== -1
            //         ) {
            //             if (this.old_result == product) {
            //             } else {
            //                 this.result.push(product);
            //             }
            //             this.old_result = product;
            //         }
            //     }
            // }
            return this.result;
        }
    },
    methods: {
        resetChecked() {
            this.$refs.tree.setCheckedKeys([]);
            this.check = [];
        },
        setCheck() {
            this.check = this.$refs.tree.getCheckedKeys();
        }
    },
    mounted: function() {
        axios
            .get("/api/product")
            .then(response => (this.products = response.data));
    }
};
</script>

<style>
.sidebar {
    display: none;
    margin-top: 5rem;
}

@media screen and (min-width: 768px) {
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        display: block;
        overflow-x: hidden;
        overflow-y: auto;
    }
}

.card {
    width: 264px;
    height: 264px;
    border: none;
    border-radius: 0;
}

.image {
    overflow: hidden;
    width: 264px;
    height: 210px;
}

.image img {
    display: block;
    transition-duration: 0.3s;
    height: 100%;
    border: none;
    margin: auto;
}

.image img:hover {
    transform: scale(1.1);
    transition-duration: 0.3s;
}

.img-thumbnail {
    padding: 0;
    border-radius: 0;
}

.card-body {
    width: 264px;
    height: 54px;
    padding: 0.5rem;
}
</style>