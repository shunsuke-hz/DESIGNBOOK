<template>
    <div class="flex-center position-ref">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <label>
                <input type="checkbox" :value="check" />住宅
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />住宅リノベーション
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />オフィス
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />オフィスリノベーション
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />店舗
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />工場・倉庫
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ホテル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />商業施設
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />文化・交流
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />工場・倉庫
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ランドスケープ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />公共施設
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キッチン・ダイニング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />バスルーム
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />トイレ・洗面
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ベッドルーム
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />リビング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />エクステリア・外構
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />外観
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />地下室
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />収納
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />玄関
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ガレージ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />収納・クローゼット
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />廊下
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ランドリー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />階段
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />子供部屋
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />和室
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />外観
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />オフィススペース
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ミーティングスペース
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ラウンジ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />休憩・食堂
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />受付
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />バックヤード
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />レクチャースペース
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />店舗スペース
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />バックヤード
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />飲食
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />美容
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />アパレル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />カフェ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />本
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />小売
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />モダン
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />コンテンポラリー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />トラディショナル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />和風
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />北欧
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />トランジショナル（ホテル、ラグジュアリー）
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />アジアン
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />カントリー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ラスティック（田舎+現代ミックス）
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />インダストリアル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />カジュアル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />リゾート
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ミッドセンチュリー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />地中海
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />大
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />中
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />小
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />壁紙
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />フィルム
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />化粧パネル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />木質パネル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />塗り壁
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />タイル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />サイディング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />人工大理石
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />グラスウール吸音板
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />金属板
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />内装用ガラス
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />鏡
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />腰壁
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />壁面装飾
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />無垢フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />複合フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />竹フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />コルクフローリング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />タイルカーペット
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ロールカーペット
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ビニル床シート
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />コルク床シート
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ビニル床タイル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />コルク床タイル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />タイル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />タタミ(畳)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />塗床
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />せっこうボード
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />吸音せっこうボード
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ロックウール吸音版
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />グラスウール吸音板
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ケイカル板
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />塩ビ化粧合板
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他の化粧パネル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />木質パネル(無垢材)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />木質パネル(複合材)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />コルク合板
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />膜天井
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />開き戸
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />引戸
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />折れ戸
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />吹抜窓
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />間仕切り壁
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />住宅用窓
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ガラス
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />建具金物
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />家具収納金物
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />電設金物
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />手すり
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />外壁材
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />屋根材
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />断熱材
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />耐火被覆材
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />防水材
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />スラブ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キッチン家電
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キッチン設備（シンク、水栓）
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キッチン付属
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キッチン家具
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />浴槽
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />シャワー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />トイレ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />洗面台
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />洗面ボウル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />バスルーム水栓
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />バスルーム設備部品
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />無垢フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />複合フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />タイルカーペット
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />床・壁タイル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />和室の床（畳・竹）
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ラミネート
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />壁紙
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />塗装
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ランプ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ホワイト
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ブラウン
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ベージュ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ブラック
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />グレー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />レッド
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ピンク
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />オレンジ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ブルー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />グリーン
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />イエロー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />パープル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ミラー
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />無地
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />木目調
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />石目調
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />メタル調
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />モルタル・コンクリート調
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />レザー調
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ストライプ柄
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />波柄
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />チェック・ブロック柄
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />幾何学模様
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />和柄
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />自然モチーフ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ナラ/オーク (ブナ科 : 楢)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ウォールナット (クルミ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />メープル (カエデ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />チェリー (バラ科 : 桜)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />カバ/バーチ (カバノキ科 : 樺)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />アカシア (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />アサダ (カバノキ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />アッシュ (モクセイ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />アップル (バラ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ウェンジ (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />エボニー (カキノキ科 : 黒檀)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />エルム (ニレ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />オリーブ (モクセイ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />カリン (マメ科 : 花梨)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キャスター (ウコギ科 : 栓)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />キリ (キリ科 : 桐)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />クスノキ (クスノキ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />クロガキ (カキノキ科 : 黒柿)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ケヤキ (ニレ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />サペリ (センダン科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />シカモア (カエデ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />シダー (マツ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />シナ (シナノキ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />シロタガヤ (アオギリ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ゼブラウッド (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />タモ (モクセイ科 : 梻)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />チーク (シソ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />チェスナット (ブナ科 : 栗)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />パイン (マツ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />パリサンダー (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />バンブー (タケ亜科 : 竹)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ピーラ (マツ科 : 米松)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ヒッコリー (クルミ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ヒノキ (ヒノキ科 : 檜)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ブナ/ビーチ (ブナ科 : 楢)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />プラム (バラ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />スギ (ヒノキ科 : 杉)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ベイスギ (ヒノキ科 : 米杉)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />マホガニー (センダン科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ユーカリ (フトモモ科)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />ローズウッド (マメ科 : 紫檀)
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />コルク
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />古木
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他の木目調
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />トラバーチン
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />スレート
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />マーブル
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />テラコッタ
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />砂岩
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />玄武岩
            </label>
            <br />
            <label>
                <input type="checkbox" :value="check" />その他の石目調
            </label>
            <br />
        </nav>
        <div class="content">
            <div class="container">
                <div>
                    <input type="text" v-model="keyword" />
                </div>
                <div id="tag">
                    <label v-for="tag in tags" :key="tag.id">
                        <input type="checkbox" :value="tag.name" v-model="check" />
                        {{ tag.name }}
                    </label>
                </div>
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4" v-for="value in filter" :key="value.id">
                                <div class="card mb-4 shadow-sm">
                                    <div class="image">
                                        <a :href="'/project-detail?work='+value.id">
                                            <img
                                                class="img img-thumbnail"
                                                v-bind:src="'/storage/'+value.project_images[0].image"
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
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            keyword: "",
            projects: [],
            tags: [],
            images: [],
            check: [],
            result: [],
            old_result: []
        };
    },

    computed: {
        // 検索機能
        filter: function() {
            this.result = [];
            this.old_result = [];

            for (let i in this.projects) {
                let project = this.projects[i];
                this.images = project.project_images;

                for (let n in this.images) {
                    let image = this.images[n];
                    let tagArray = image.tags.map(obj => obj.name);
                    let checkArray = this.check;

                    if (checkArray.every(v => tagArray.includes(v)) == true) {
                        if (this.old_result == project) {
                        } else {
                            this.result.push(project);
                        }
                        this.old_result = project;
                    }
                }
            }
            return this.result;
        }
    },

    mounted: function() {
        axios.get("/api/").then(response => (this.projects = response.data));
        axios.get("/api/tags").then(response => (this.tags = response.data));
    }
};
</script>

<style>
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