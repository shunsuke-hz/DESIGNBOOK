<template>
    <el-tree class="filter-tree" :data="tags" show-checkbox node-key="id" ref="tree" accordion></el-tree>
</template>

<script>
export default {
    name: "project-tag",
    data: function() {
        return {
            tags: [
                {
                    id: 485,
                    label: "内壁・天井",
                    children: [
                        {
                            id: 486,
                            label: "タイル",
                            children: [
                                {
                                    id: 487,
                                    label: "セラミックタイル"
                                },
                                {
                                    id: 488,
                                    label: "磁器タイル"
                                },
                                {
                                    id: 489,
                                    label: "テラコッタタイル"
                                },
                                {
                                    id: 490,
                                    label: "石タイル"
                                },
                                {
                                    id: 491,
                                    label: "モザイクタイル"
                                },
                                {
                                    id: 492,
                                    label: "タイル付属品"
                                },
                                {
                                    id: 493,
                                    label: "タイルその他"
                                }
                            ]
                        },
                        {
                            id: 494,
                            label: "壁装材",
                            children: [
                                {
                                    id: 495,
                                    label: "化粧パネル"
                                },
                                {
                                    id: 496,
                                    label: "ウッドパネル"
                                },
                                {
                                    id: 497,
                                    label: "壁紙"
                                },
                                {
                                    id: 498,
                                    label: "吸音板"
                                },
                                {
                                    id: 499,
                                    label: "金属パネル"
                                },
                                {
                                    id: 500,
                                    label: "グリーンウォール"
                                },
                                {
                                    id: 501,
                                    label: "壁装材その他"
                                }
                            ]
                        },
                        {
                            id: 502,
                            label: "天井",
                            children: [
                                {
                                    id: 503,
                                    label: "壁紙天井"
                                },
                                {
                                    id: 504,
                                    label: "吸音天井"
                                },
                                {
                                    id: 505,
                                    label: "木天井"
                                },
                                {
                                    id: 506,
                                    label: "装飾天井"
                                },
                                {
                                    id: 507,
                                    label: "ルーパー天井"
                                },
                                {
                                    id: 508,
                                    label: "天井その他"
                                }
                            ]
                        },
                        {
                            id: 509,
                            label: "塗料/石膏ボード",
                            children: [
                                {
                                    id: 510,
                                    label: "塗料"
                                },
                                {
                                    id: 511,
                                    label: "石膏ボード"
                                },
                                {
                                    id: 512,
                                    label: "塗料その他"
                                }
                            ]
                        },
                        {
                            id: 513,
                            label: "パーティション",
                            children: [
                                {
                                    id: 514,
                                    label: "パーティション"
                                },
                                {
                                    id: 515,
                                    label: "ガラスパーティション"
                                },
                                {
                                    id: 516,
                                    label: "パーティションその他"
                                }
                            ]
                        },
                        {
                            id: 517,
                            label: "システム壁・天井",
                            children: [
                                {
                                    id: 518,
                                    label: "壁下地"
                                },
                                {
                                    id: 519,
                                    label: "天井下地"
                                },
                                {
                                    id: 520,
                                    label: "システム壁"
                                },
                                {
                                    id: 521,
                                    label: "システム天井"
                                },
                                {
                                    id: 522,
                                    label: "システム壁・天井その他"
                                }
                            ]
                        },
                        {
                            id: 523,
                            label: "断熱材・被覆材",
                            children: [
                                {
                                    id: 524,
                                    label: "断熱材"
                                },
                                {
                                    id: 525,
                                    label: "被覆材"
                                }
                            ]
                        },

                        {
                            id: 526,
                            label: "サイン/サイネージ"
                        },
                        {
                            id: 527,
                            label: "内壁・天井その他"
                        }
                    ]
                },
                {
                    id: 528,
                    label: "床",
                    children: [
                        {
                            id: 529,
                            label: "ウッドフローリング",
                            children: [
                                {
                                    id: 530,
                                    label: "無垢フローリング"
                                },
                                {
                                    id: 531,
                                    label: "複合フローリング"
                                },
                                {
                                    id: 532,
                                    label: "エンジニアドウッドフローリング"
                                },
                                {
                                    id: 533,
                                    label: "ウッドラミネートフローリング"
                                },
                                {
                                    id: 534,
                                    label: "その他ウッドフローリング"
                                }
                            ],
                            id: 535,
                            label: "タイル床",
                            children: [
                                {
                                    id: 536,
                                    label: "セラミック床タイル"
                                },
                                {
                                    id: 537,
                                    label: "磁器石器床タイル"
                                },
                                {
                                    id: 538,
                                    label: "テラコッタ床タイル"
                                },
                                {
                                    id: 539,
                                    label: "石床タイル"
                                },
                                {
                                    id: 540,
                                    label: "コンクリート床タイル"
                                },
                                {
                                    id: 541,
                                    label: "モザイク床タイル"
                                },
                                {
                                    id: 542,
                                    label: "キッチン床タイル"
                                },
                                {
                                    id: 543,
                                    label: "浴室床タイル"
                                },
                                {
                                    id: 544,
                                    label: "プール床タイル"
                                },
                                {
                                    id: 545,
                                    label: "その他床タイル"
                                }
                            ],
                            id: 546,
                            label: "床仕上材",
                            children: [
                                {
                                    id: 547,
                                    label: "ビニル床"
                                },
                                {
                                    id: 548,
                                    label: "置式ビニル床"
                                },
                                {
                                    id: 549,
                                    label: "ビニル床シート"
                                },
                                {
                                    id: 550,
                                    label: "リノリウム床"
                                },
                                {
                                    id: 551,
                                    label: "樹脂・塗床"
                                },
                                {
                                    id: 552,
                                    label: "コンクリート・モルタル床"
                                },
                                {
                                    id: 553,
                                    label: "コルクフローリング"
                                },
                                {
                                    id: 554,
                                    label: "ラバーフローリング"
                                },
                                {
                                    id: 555,
                                    label: "人工芝"
                                },
                                {
                                    id: 556,
                                    label: "その他床仕上材"
                                }
                            ],
                            id: 557,
                            label: "カーペット",
                            children: [
                                {
                                    id: 558,
                                    label: "タイルカーペット"
                                },
                                {
                                    id: 559,
                                    label: "フロアカーペット"
                                },
                                {
                                    id: 560,
                                    label: "玄関マット"
                                }
                            ],
                            id: 561,
                            label: "舗装",
                            children: [
                                {
                                    id: 562,
                                    label: "ウッド舗装"
                                },
                                {
                                    id: 563,
                                    label: "セラミック舗装"
                                },
                                {
                                    id: 564,
                                    label: "テラコッタ舗装"
                                },
                                {
                                    id: 565,
                                    label: "ストーン舗装"
                                },
                                {
                                    id: 566,
                                    label: "コンクリート舗装機"
                                },
                                {
                                    id: 567,
                                    label: "その他舗装"
                                }
                            ],
                            id: 568,
                            label: "巾木",
                            children: [
                                {
                                    id: 569,
                                    label: "巾木"
                                },
                                {
                                    id: 570,
                                    label: "廻縁"
                                }
                            ],
                            id: 571,
                            label: "鋼製床・フロアシステム",
                            children: [
                                {
                                    id: 572,
                                    label: "鋼製床"
                                },
                                {
                                    id: 573,
                                    label: "システムフロア"
                                },
                                {
                                    id: 574,
                                    label: "その他フロアシステム"
                                }
                            ],
                            id: 575,
                            label: "床その他"
                        }
                    ]
                },
                {
                    id: 576,
                    label: "階段・昇降設備",
                    children: [
                        {
                            id: 577,
                            label: "階段",
                            children: [
                                {
                                    id: 578,
                                    label: "直線階段"
                                },
                                {
                                    id: 579,
                                    label: "螺旋階段"
                                },
                                {
                                    id: 580,
                                    label: "屋内階段"
                                },
                                {
                                    id: 581,
                                    label: "屋外階段"
                                },
                                {
                                    id: 582,
                                    label: "非常階段"
                                },
                                {
                                    id: 583,
                                    label: "その他階段"
                                },
                                {
                                    id: 584,
                                    label: "手すり"
                                },
                                {
                                    id: 585,
                                    label: "階段付属品"
                                }
                            ]
                        },
                        {
                            id: 586,
                            label: "エレベーター/エスカレーター",
                            children: [
                                {
                                    id: 587,
                                    label: "エレベーター"
                                },
                                {
                                    id: 588,
                                    label: "ホームエレベーター"
                                },
                                {
                                    id: 589,
                                    label: "カーエレベーター"
                                },
                                {
                                    id: 590,
                                    label: "動く歩道"
                                },
                                {
                                    id: 591,
                                    label: "エスカレーター"
                                }
                            ]
                        },
                        {
                            id: 592,
                            label: "階段・昇降設備その他"
                        }
                    ]
                },
                {
                    id: 593,
                    label: "キッチン・サニタリー",
                    children: [
                        {
                            id: 594,
                            label: "キッチン",
                            children: [
                                {
                                    id: 595,
                                    label: "キッチン・シンク"
                                },
                                {
                                    id: 596,
                                    label: "システムキッチン"
                                },
                                {
                                    id: 597,
                                    label: "キッチン水栓"
                                },
                                {
                                    id: 598,
                                    label: "IHシステム"
                                },
                                {
                                    id: 599,
                                    label: "キッチン付属品"
                                }
                            ]
                        },
                        {
                            id: 600,
                            label: "サニタリー",
                            children: [
                                {
                                    id: 601,
                                    label: "バスタブ"
                                },
                                {
                                    id: 602,
                                    label: "シャワー"
                                },
                                {
                                    id: 603,
                                    label: "トイレ"
                                },
                                {
                                    id: 604,
                                    label: "洗面台"
                                },
                                {
                                    id: 605,
                                    label: "洗面水栓"
                                },
                                {
                                    id: 606,
                                    label: "浴室棚・キャビネット"
                                },
                                {
                                    id: 607,
                                    label: "浴室付属品"
                                },
                                {
                                    id: 608,
                                    label: "バリアフリーバスルーム"
                                },
                                {
                                    id: 609,
                                    label: "ユニットシャワー"
                                },
                                {
                                    id: 610,
                                    label: "ユニットバス"
                                }
                            ]
                        },
                        {
                            id: 611,
                            label: "キッチン・サニタリーその他"
                        }
                    ]
                },
                {
                    id: 612,
                    label: "ファサード",
                    children: [
                        {
                            id: 613,
                            label: "外装仕上げ",
                            children: [
                                {
                                    id: 614,
                                    label: "金属"
                                },
                                {
                                    id: 615,
                                    label: "セラミック"
                                },
                                {
                                    id: 616,
                                    label: "コンクリート"
                                },
                                {
                                    id: 617,
                                    label: "プレキャストコンクリート"
                                },
                                {
                                    id: 618,
                                    label: "石"
                                },
                                {
                                    id: 619,
                                    label: "複合材料"
                                },
                                {
                                    id: 620,
                                    label: "サイディング"
                                },
                                {
                                    id: 621,
                                    label: "メタルメッシュ"
                                },
                                {
                                    id: 622,
                                    label: "木"
                                },
                                {
                                    id: 623,
                                    label: "レンガ"
                                }
                            ]
                        },
                        {
                            id: 624,
                            label: "ファサードシステム",
                            children: [
                                {
                                    id: 625,
                                    label: "カーテンウォール"
                                },
                                {
                                    id: 626,
                                    label: "コンクリートファサード"
                                },
                                {
                                    id: 627,
                                    label: "連続ファサードシステム"
                                },
                                {
                                    id: 628,
                                    label: "ルーバー/日除け"
                                },
                                {
                                    id: 629,
                                    label: "グリーンファサード"
                                },
                                {
                                    id: 630,
                                    label: "ファサード支持構造"
                                }
                            ]
                        },
                        {
                            id: 631,
                            label: "ファサードその他"
                        }
                    ]
                },
                {
                    id: 632,
                    label: "窓とドア",
                    children: [
                        {
                            id: 633,
                            label: "サッシ",
                            children: [
                                {
                                    id: 634,
                                    label: "アルミサッシ"
                                },
                                {
                                    id: 635,
                                    label: "木製サッシ"
                                },
                                {
                                    id: 636,
                                    label: "複合サッシ"
                                },
                                {
                                    id: 637,
                                    label: "サッシその他"
                                }
                            ]
                        },
                        {
                            id: 638,
                            label: "ウィンドウシステム",
                            children: [
                                {
                                    id: 639,
                                    label: "フレーム"
                                },
                                {
                                    id: 640,
                                    label: "窓台"
                                },
                                {
                                    id: 641,
                                    label: "窓付属品"
                                }
                            ]
                        },
                        {
                            id: 642,
                            label: "トップライト"
                        },
                        {
                            id: 643,
                            label: "ドア",
                            children: [
                                {
                                    id: 644,
                                    label: "室内ドア"
                                },
                                {
                                    id: 645,
                                    label: "屋外ドア"
                                },
                                {
                                    id: 646,
                                    label: "レバーハンドル"
                                },
                                {
                                    id: 647,
                                    label: "ドアロック"
                                },
                                {
                                    id: 648,
                                    label: "丁番"
                                },
                                {
                                    id: 649,
                                    label: "レターボックス"
                                },
                                {
                                    id: 650,
                                    label: "ドア付属品"
                                }
                            ]
                        },
                        {
                            id: 651,
                            label: "ガラス",
                            children: [
                                {
                                    id: 652,
                                    label: "ペアガラス"
                                },
                                {
                                    id: 653,
                                    label: "強化ガラス"
                                },
                                {
                                    id: 654,
                                    label: "網入りガラス"
                                },
                                {
                                    id: 655,
                                    label: "耐熱ガラス"
                                },
                                {
                                    id: 656,
                                    label: "合わせガラス"
                                },
                                {
                                    id: 657,
                                    label: "ガラスブロック"
                                },
                                {
                                    id: 658,
                                    label: "ガラス付属品"
                                },
                                {
                                    id: 659,
                                    label: "ガラスその他"
                                }
                            ]
                        },
                        {
                            id: 660,
                            label: "ブラインド・日除け・フィルム",
                            children: [
                                {
                                    id: 661,
                                    label: "ブラインド"
                                },
                                {
                                    id: 662,
                                    label: "カーテン"
                                },
                                {
                                    id: 663,
                                    label: "ロールスクリーン"
                                },
                                {
                                    id: 664,
                                    label: "カーテンレール"
                                },
                                {
                                    id: 665,
                                    label: "カーテン付属品"
                                },
                                {
                                    id: 666,
                                    label: "シェード"
                                },
                                {
                                    id: 667,
                                    label: "フィルム"
                                },
                                {
                                    id: 668,
                                    label: "シャッター"
                                }
                            ]
                        },
                        {
                            id: 669,
                            label: "窓とドアその他"
                        }
                    ]
                },
                {
                    id: 670,
                    label: "屋根",
                    children: [
                        {
                            id: 671,
                            label: "金属葺屋根",
                            children: [
                                {
                                    id: 672,
                                    label: "アルミ屋根"
                                },
                                {
                                    id: 673,
                                    label: "ガルバリウム屋根"
                                },
                                {
                                    id: 674,
                                    label: "ステンレス屋根"
                                },
                                {
                                    id: 675,
                                    label: "スチール屋根"
                                },
                                {
                                    id: 676,
                                    label: "チタン屋根"
                                },
                                {
                                    id: 677,
                                    label: "銅屋根"
                                },
                                {
                                    id: 678,
                                    label: "金属葦屋根その他"
                                }
                            ]
                        },
                        {
                            id: 679,
                            label: "葦屋根",
                            children: [
                                {
                                    id: 680,
                                    label: "セラミック屋根"
                                },
                                {
                                    id: 681,
                                    label: "スレート屋根"
                                },
                                {
                                    id: 682,
                                    label: "コンクリート屋根"
                                },
                                {
                                    id: 683,
                                    label: "瓦屋根"
                                },
                                {
                                    id: 684,
                                    label: "葦屋根その他"
                                }
                            ]
                        },
                        {
                            id: 685,
                            label: "ルーフシステム",
                            children: [
                                {
                                    id: 686,
                                    label: "屋上緑化"
                                },
                                {
                                    id: 687,
                                    label: "ソーラーパネル"
                                }
                            ]
                        },
                        {
                            id: 688,
                            label: "屋根構造",
                            children: [
                                {
                                    id: 689,
                                    label: "金属トラス"
                                },
                                {
                                    id: 690,
                                    label: "木材トラス"
                                },
                                {
                                    id: 691,
                                    label: "プレハブ"
                                }
                            ]
                        },
                        {
                            id: 692,
                            label: "防水",
                            children: [
                                {
                                    id: 693,
                                    label: "塗膜防水"
                                },
                                {
                                    id: 694,
                                    label: "シート防水"
                                },
                                {
                                    id: 695,
                                    label: "アスファルト防水"
                                },
                                {
                                    id: 696,
                                    label: "FRP防水"
                                },
                                {
                                    id: 697,
                                    label: "防水その他"
                                }
                            ]
                        },
                        {
                            id: 698,
                            label: "屋根要素",
                            children: [
                                {
                                    id: 699,
                                    label: "水切り・笠木"
                                },
                                {
                                    id: 700,
                                    label: "煙突"
                                },
                                {
                                    id: 701,
                                    label: "雨樋"
                                },
                                {
                                    id: 702,
                                    label: "屋根要素その他"
                                }
                            ]
                        },
                        {
                            id: 703,
                            label: "庇",
                            children: [
                                {
                                    id: 704,
                                    label: "アルミ庇"
                                },
                                {
                                    id: 705,
                                    label: "ステンレス庇"
                                },
                                {
                                    id: 706,
                                    label: "スチール庇"
                                },
                                {
                                    id: 707,
                                    label: "ガラス庇"
                                },
                                {
                                    id: 708,
                                    label: "庇その他"
                                }
                            ]
                        },
                        {
                            id: 709,
                            label: "その他屋根"
                        }
                    ]
                },
                {
                    id: 710,
                    label: "構造",
                    children: [
                        {
                            id: 711,
                            label: "鉄骨構造",
                            children: [
                                {
                                    id: 712,
                                    label: "木材"
                                },
                                {
                                    id: 713,
                                    label: "コンクリート造"
                                },
                                {
                                    id: 714,
                                    label: "トラス構造"
                                },
                                {
                                    id: 715,
                                    label: "梁・柱"
                                },
                                {
                                    id: 716,
                                    label: "ブレース"
                                },
                                {
                                    id: 717,
                                    label: "組積造"
                                },
                                {
                                    id: 718,
                                    label: "基礎"
                                },
                                {
                                    id: 719,
                                    label: "免震"
                                },
                                {
                                    id: 720,
                                    label: "構造その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 721,
                    label: "機械設備",
                    children: [
                        {
                            id: 722,
                            label: "空調ユニット",
                            children: [
                                {
                                    id: 723,
                                    label: "エアコン"
                                },
                                {
                                    id: 724,
                                    label: "吹出口"
                                },
                                {
                                    id: 725,
                                    label: "給水・給湯ユニット"
                                },
                                {
                                    id: 726,
                                    label: "再生可能エネルギーシステム"
                                },
                                {
                                    id: 727,
                                    label: "モニタリングシステム"
                                },
                                {
                                    id: 728,
                                    label: "防火・安全"
                                },
                                {
                                    id: 729,
                                    label: "消音器"
                                },
                                {
                                    id: 730,
                                    label: "機械設備その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 731,
                    label: "電気設備",
                    children: [
                        {
                            id: 732,
                            label: "スイッチ",
                            children: [
                                {
                                    id: 733,
                                    label: "コンセント"
                                },
                                {
                                    id: 734,
                                    label: "ケーブルラック"
                                },
                                {
                                    id: 735,
                                    label: "火災報知器・非常照明"
                                },
                                {
                                    id: 736,
                                    label: "スピーカー"
                                },
                                {
                                    id: 737,
                                    label: "防犯カメラ"
                                },
                                {
                                    id: 738,
                                    label: "スクリーン"
                                },
                                {
                                    id: 739,
                                    label: "プロジェクター"
                                },
                                {
                                    id: 740,
                                    label: "スマートホーム"
                                },
                                {
                                    id: 741,
                                    label: "セキュリティ"
                                },
                                {
                                    id: 742,
                                    label: "AVシステム"
                                },
                                {
                                    id: 743,
                                    label: "ソフトウェア"
                                },
                                {
                                    id: 744,
                                    label: "電気設備その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 745,
                    label: "照明",
                    children: [
                        {
                            id: 746,
                            label: "インテリア照明",
                            children: [
                                {
                                    id: 747,
                                    label: "シーリングライト"
                                },
                                {
                                    id: 748,
                                    label: "スポットライト"
                                },
                                {
                                    id: 749,
                                    label: "ペンダント"
                                },
                                {
                                    id: 750,
                                    label: "テーブルライト"
                                },
                                {
                                    id: 751,
                                    label: "フロアライト"
                                },
                                {
                                    id: 752,
                                    label: "ライン照明"
                                },
                                {
                                    id: 753,
                                    label: "レール照明システム"
                                },
                                {
                                    id: 754,
                                    label: "ネオン"
                                },
                                {
                                    id: 755,
                                    label: "インテリア照明付属品"
                                },
                                {
                                    id: 756,
                                    label: "インテリア照明その他"
                                }
                            ]
                        },
                        {
                            id: 757,
                            label: "屋外照明",
                            children: [
                                {
                                    id: 758,
                                    label: "屋外ペンダントライト"
                                },
                                {
                                    id: 759,
                                    label: "屋外スポットライト"
                                },
                                {
                                    id: 760,
                                    label: "屋外シーリングライト"
                                },
                                {
                                    id: 761,
                                    label: "屋外フロアライト"
                                },
                                {
                                    id: 762,
                                    label: "ファサードライト"
                                },
                                {
                                    id: 763,
                                    label: "地下ライト"
                                },
                                {
                                    id: 764,
                                    label: "ボラードライト"
                                },
                                {
                                    id: 765,
                                    label: "街路灯"
                                },
                                {
                                    id: 766,
                                    label: "ガーデンライト"
                                },
                                {
                                    id: 767,
                                    label: "アウトドアステップライト"
                                },
                                {
                                    id: 768,
                                    label: "投光器"
                                },
                                {
                                    id: 769,
                                    label: "その他屋外照明"
                                }
                            ]
                        },
                        {
                            id: 770,
                            label: "照明その他"
                        }
                    ]
                },
                {
                    id: 771,
                    label: "家具",
                    children: [
                        {
                            id: 772,
                            label: "椅子",
                            children: [
                                {
                                    id: 773,
                                    label: "アームチェア"
                                },
                                {
                                    id: 774,
                                    label: "フットレスト付きアームチェア"
                                },
                                {
                                    id: 775,
                                    label: "折りたたみ椅子"
                                },
                                {
                                    id: 776,
                                    label: "スタッキングチェアー"
                                },
                                {
                                    id: 777,
                                    label: "ダイニングチェア"
                                },
                                {
                                    id: 778,
                                    label: "ロッキングチェア"
                                },
                                {
                                    id: 779,
                                    label: "バーチェア"
                                },
                                {
                                    id: 780,
                                    label: "チェアその他"
                                }
                            ]
                        },
                        {
                            id: 781,
                            label: "ソファ",
                            children: [
                                {
                                    id: 782,
                                    label: "ストレートソファ"
                                },
                                {
                                    id: 783,
                                    label: "コーナーソファ"
                                },
                                {
                                    id: 784,
                                    label: "ユニットソファ"
                                },
                                {
                                    id: 785,
                                    label: "ソファベッド"
                                },
                                {
                                    id: 786,
                                    label: "屋内デイベッド"
                                },
                                {
                                    id: 787,
                                    label: "ソファその他"
                                },
                                {
                                    id: 789,
                                    label: "ベンチ"
                                },
                                {
                                    id: 790,
                                    label: "ベンチその他"
                                }
                            ]
                        },
                        {
                            id: 791,
                            label: "テーブル",
                            children: [
                                {
                                    id: 792,
                                    label: "カフェテーブル"
                                },
                                {
                                    id: 793,
                                    label: "ダイニングテーブル"
                                },
                                {
                                    id: 794,
                                    label: "バーテーブル"
                                },
                                {
                                    id: 795,
                                    label: "サイドテーブル"
                                },
                                {
                                    id: 796,
                                    label: "ネストテーブル"
                                },
                                {
                                    id: 797,
                                    label: "サイドボードテーブル"
                                },
                                {
                                    id: 798,
                                    label: "住宅デスク"
                                },
                                {
                                    id: 799,
                                    label: "デスク"
                                },
                                {
                                    id: 800,
                                    label: "ドレッシングテーブル"
                                },
                                {
                                    id: 801,
                                    label: "テーブルその他"
                                }
                            ]
                        },
                        {
                            id: 802,
                            label: "ベッド",
                            children: [
                                {
                                    id: 803,
                                    label: "シングルベッド"
                                },
                                {
                                    id: 804,
                                    label: "ダブルベッド"
                                },
                                {
                                    id: 805,
                                    label: "キングベッド"
                                },
                                {
                                    id: 806,
                                    label: "二段ベッド"
                                },
                                {
                                    id: 807,
                                    label: "ヘッドボード"
                                },
                                {
                                    id: 808,
                                    label: "ベッド付属品"
                                },
                                {
                                    id: 809,
                                    label: "ベッドその他"
                                }
                            ]
                        },
                        {
                            id: 810,
                            label: "収納・棚",
                            children: [
                                {
                                    id: 811,
                                    label: "棚"
                                },
                                {
                                    id: 812,
                                    label: "TV /マルチメディアユニット"
                                },
                                {
                                    id: 813,
                                    label: "ワードローブ"
                                },
                                {
                                    id: 814,
                                    label: "食器棚"
                                },
                                {
                                    id: 815,
                                    label: "書棚"
                                },
                                {
                                    id: 816,
                                    label: "ラック"
                                },
                                {
                                    id: 817,
                                    label: "陳列棚"
                                },
                                {
                                    id: 818,
                                    label: "ワードローブキャビネット"
                                },
                                {
                                    id: 819,
                                    label: "靴ラック"
                                },
                                {
                                    id: 820,
                                    label: "収納ボックス"
                                },
                                {
                                    id: 821,
                                    label: "家具ハンドル・ノブ"
                                },
                                {
                                    id: 822,
                                    label: "家具丁番"
                                },
                                {
                                    id: 823,
                                    label: "収納・棚その他"
                                }
                            ]
                        },
                        {
                            id: 824,
                            label: "テキスタイル",
                            children: [
                                {
                                    id: 825,
                                    label: "壁テキスタイル"
                                },
                                {
                                    id: 826,
                                    label: "室内装飾テキスタイル"
                                },
                                {
                                    id: 827,
                                    label: "テキスタイルその他"
                                }
                            ]
                        },
                        {
                            id: 828,
                            label: "子供家具",
                            children: [
                                {
                                    id: 829,
                                    label: "ベビーベッド"
                                },
                                {
                                    id: 830,
                                    label: "子供椅子"
                                },
                                {
                                    id: 831,
                                    label: "子供テーブル"
                                },
                                {
                                    id: 832,
                                    label: "子供壁紙"
                                },
                                {
                                    id: 833,
                                    label: "子供家具その他"
                                }
                            ]
                        },
                        {
                            id: 834,
                            label: "インテリア付属品",
                            children: [
                                {
                                    id: 835,
                                    label: "鏡"
                                },
                                {
                                    id: 836,
                                    label: "フリースタンディングミラー"
                                },
                                {
                                    id: 837,
                                    label: "テーブルミラー"
                                },
                                {
                                    id: 838,
                                    label: "ラグ"
                                },
                                {
                                    id: 839,
                                    label: "クッション"
                                },
                                {
                                    id: 840,
                                    label: "壁掛けコートラック"
                                },
                                {
                                    id: 841,
                                    label: "コートフック"
                                },
                                {
                                    id: 842,
                                    label: "時計"
                                },
                                {
                                    id: 843,
                                    label: "絵画"
                                },
                                {
                                    id: 844,
                                    label: "彫刻"
                                },
                                {
                                    id: 845,
                                    label: "花瓶"
                                },
                                {
                                    id: 846,
                                    label: "インテリア付属品その他"
                                }
                            ]
                        },
                        {
                            id: 847,
                            label: "家具その他"
                        }
                    ]
                },
                {
                    id: 848,
                    label: "オフィス家具",
                    children: [
                        {
                            id: 849,
                            label: "オフィス",
                            children: [
                                {
                                    id: 850,
                                    label: "オフィスデスク"
                                },
                                {
                                    id: 851,
                                    label: "オフィスワークステーション"
                                },
                                {
                                    id: 852,
                                    label: "オフィスチェア"
                                },
                                {
                                    id: 853,
                                    label: "エグゼクティブチェア"
                                },
                                {
                                    id: 854,
                                    label: "オフィススツール"
                                },
                                {
                                    id: 855,
                                    label: "その他オフィスチェア"
                                },
                                {
                                    id: 856,
                                    label: "オフィスブース"
                                },
                                {
                                    id: 857,
                                    label: "オフィスパーティション"
                                },
                                {
                                    id: 858,
                                    label: "ファイリングキャビネット"
                                },
                                {
                                    id: 859,
                                    label: "書架"
                                },
                                {
                                    id: 860,
                                    label: "ミーティングテーブル"
                                },
                                {
                                    id: 861,
                                    label: "オフィスレセプションデスク"
                                },
                                {
                                    id: 862,
                                    label: "オフィス収納棚"
                                },
                                {
                                    id: 863,
                                    label: "オフィス引出ユニット"
                                },
                                {
                                    id: 864,
                                    label: "オフィス付属品"
                                }
                            ]
                        },
                        {
                            id: 865,
                            label: "パブリック",
                            children: [
                                {
                                    id: 866,
                                    label: "ラウンジチェア"
                                },
                                {
                                    id: 867,
                                    label: "パブリックベンチ"
                                },
                                {
                                    id: 868,
                                    label: "待合室ソファ"
                                },
                                {
                                    id: 869,
                                    label: "待合椅子"
                                },
                                {
                                    id: 870,
                                    label: "ラウンジテーブル"
                                },
                                {
                                    id: 871,
                                    label: "パブリックデスク"
                                },
                                {
                                    id: 872,
                                    label: "レセプションデスク"
                                },
                                {
                                    id: 873,
                                    label: "ホール椅子"
                                },
                                {
                                    id: 874,
                                    label: "教室椅子"
                                },
                                {
                                    id: 875,
                                    label: "ボール"
                                },
                                {
                                    id: 876,
                                    label: "セキュリティゲート"
                                },
                                {
                                    id: 877,
                                    label: "ロッカー"
                                },
                                {
                                    id: 878,
                                    label: "金庫"
                                },
                                {
                                    id: 879,
                                    label: "ディスプレイケース"
                                }
                            ]
                        },
                        {
                            id: 880,
                            label: "ホスピタリティー",
                            children: [
                                {
                                    id: 881,
                                    label: "レストラン椅子"
                                },
                                {
                                    id: 882,
                                    label: "レストランテーブル"
                                },
                                {
                                    id: 882,
                                    label: "バーカウンター"
                                },
                                {
                                    id: 883,
                                    label: "ハイスツール"
                                },
                                {
                                    id: 884,
                                    label: "レストランブース"
                                },
                                {
                                    id: 885,
                                    label: "ハイテーブル"
                                },
                                {
                                    id: 886,
                                    label: "ホテルベッド"
                                },
                                {
                                    id: 887,
                                    label: "ホテルソファ"
                                },
                                {
                                    id: 888,
                                    label: "ホテルデスク"
                                },
                                {
                                    id: 889,
                                    label: "ホテルベッドサイドテーブル"
                                },
                                {
                                    id: 890,
                                    label: "ホテルワードローブ"
                                },
                                {
                                    id: 891,
                                    label: "ユニットキッチン"
                                },
                                {
                                    id: 892,
                                    label: "ホテル家具付属品"
                                }
                            ]
                        },
                        {
                            id: 893,
                            label: "オフィス家具その他"
                        }
                    ]
                },
                {
                    id: 894,
                    label: "屋外",
                    children: [
                        {
                            id: 895,
                            label: "屋外ウッドデッキ",
                            children: [
                                {
                                    id: 896,
                                    label: "屋外用家具"
                                },
                                {
                                    id: 897,
                                    label: "屋外暖炉・ヒーター"
                                },
                                {
                                    id: 898,
                                    label: "フェンス"
                                },
                                {
                                    id: 899,
                                    label: "日除け"
                                },
                                {
                                    id: 900,
                                    label: "ガーデニング付属品"
                                },
                                {
                                    id: 901,
                                    label: "スイミングプール"
                                },
                                {
                                    id: 902,
                                    label: "屋外シャワー"
                                },
                                {
                                    id: 903,
                                    label: "ストリートファーニチャー"
                                },
                                {
                                    id: 904,
                                    label: "屋外その他"
                                }
                            ]
                        }
                    ]
                }
            ]
        };
    },
    methods: {
        resetChecked() {
            this.$refs.tree.setCheckedKeys([]);
        }
    }
};
</script>

<style>
</style>