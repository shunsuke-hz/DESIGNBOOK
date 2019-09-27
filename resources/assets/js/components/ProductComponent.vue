<template>
    <div class="row">
        <div class="sidebar col-sm-3 hidden-xs">
            <label>
                <input type="checkbox" v-model="check" value="住宅" />住宅
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="住宅リノベーション" />住宅リノベーション
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="オフィス" />オフィス
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="オフィスリノベーション" />オフィスリノベーション
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="店舗" />店舗
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="工場・倉庫" />工場・倉庫
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ホテル" />ホテル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="商業施設" />商業施設
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="文化・交流" />文化・交流
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="工場・倉庫" />工場・倉庫
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ランドスケープ" />ランドスケープ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="公共施設" />公共施設
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キッチン・ダイニング" />キッチン・ダイニング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="バスルーム" />バスルーム
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="トイレ・洗面" />トイレ・洗面
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ベッドルーム" />ベッドルーム
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="リビング" />リビング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="エクステリア・外構" />エクステリア・外構
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="外観" />外観
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="地下室" />地下室
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="収納" />収納
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="玄関" />玄関
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ガレージ" />ガレージ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="収納・クローゼット" />収納・クローゼット
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="廊下" />廊下
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ランドリー" />ランドリー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="階段" />階段
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="子供部屋" />子供部屋
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="和室" />和室
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="外観" />外観
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="オフィススペース" />オフィススペース
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ミーティングスペース" />ミーティングスペース
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ラウンジ" />ラウンジ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="休憩・食堂" />休憩・食堂
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="受付" />受付
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="バックヤード" />バックヤード
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="レクチャースペース" />レクチャースペース
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="店舗スペース" />店舗スペース
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="バックヤード" />バックヤード
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="飲食" />飲食
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="美容" />美容
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="アパレル" />アパレル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="カフェ" />カフェ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="本" />本
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="小売" />小売
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="モダン" />モダン
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="コンテンポラリー" />コンテンポラリー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="トラディショナル" />トラディショナル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="和風" />和風
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="北欧" />北欧
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="トランジショナル（ホテル、ラグジュアリー）" />トランジショナル（ホテル、ラグジュアリー）
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="アジアン" />アジアン
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="カントリー" />カントリー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ラスティック（田舎+現代ミックス）" />ラスティック（田舎+現代ミックス）
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="インダストリアル" />インダストリアル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="カジュアル" />カジュアル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="リゾート" />リゾート
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ミッドセンチュリー" />ミッドセンチュリー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="地中海" />地中海
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="大" />大
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="中" />中
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="小" />小
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value />
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="壁紙" />壁紙
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="フィルム" />フィルム
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="化粧パネル" />化粧パネル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="木質パネル" />木質パネル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="塗り壁" />塗り壁
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="タイル" />タイル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="サイディング" />サイディング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="人工大理石" />人工大理石
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="グラスウール吸音板" />グラスウール吸音板
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="金属板" />金属板
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="内装用ガラス" />内装用ガラス
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="鏡" />鏡
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="腰壁" />腰壁
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="壁面装飾" />壁面装飾
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="無垢フローリング" />無垢フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="複合フローリング" />複合フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="竹フローリング" />竹フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="コルクフローリング" />コルクフローリング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="タイルカーペット" />タイルカーペット
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ロールカーペット" />ロールカーペット
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ビニル床シート" />ビニル床シート
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="コルク床シート" />コルク床シート
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ビニル床タイル" />ビニル床タイル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="コルク床タイル" />コルク床タイル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="タイル" />タイル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="タタミ(畳)" />タタミ(畳)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="塗床" />塗床
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="せっこうボード" />せっこうボード
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="吸音せっこうボード" />吸音せっこうボード
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ロックウール吸音版" />ロックウール吸音版
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="グラスウール吸音板" />グラスウール吸音板
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ケイカル板" />ケイカル板
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="塩ビ化粧合板" />塩ビ化粧合板
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他の化粧パネル" />その他の化粧パネル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="木質パネル(無垢材)" />木質パネル(無垢材)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="木質パネル(複合材)" />木質パネル(複合材)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="コルク合板" />コルク合板
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="膜天井" />膜天井
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="開き戸" />開き戸
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="引戸" />引戸
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="折れ戸" />折れ戸
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="吹抜窓" />吹抜窓
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="間仕切り壁" />間仕切り壁
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="住宅用窓" />住宅用窓
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ガラス" />ガラス
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="建具金物" />建具金物
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="家具収納金物" />家具収納金物
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="電設金物" />電設金物
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="手すり" />手すり
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="外壁材" />外壁材
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="屋根材" />屋根材
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="断熱材" />断熱材
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="耐火被覆材" />耐火被覆材
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="防水材" />防水材
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="スラブ" />スラブ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キッチン家電" />キッチン家電
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キッチン設備（シンク、水栓）" />キッチン設備（シンク、水栓）
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キッチン付属" />キッチン付属
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キッチン家具" />キッチン家具
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="浴槽" />浴槽
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="シャワー" />シャワー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="トイレ" />トイレ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="洗面台" />洗面台
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="洗面ボウル" />洗面ボウル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="バスルーム水栓" />バスルーム水栓
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="バスルーム設備部品" />バスルーム設備部品
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="無垢フローリング" />無垢フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="複合フローリング" />複合フローリング
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="タイルカーペット" />タイルカーペット
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="床・壁タイル" />床・壁タイル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="和室の床（畳・竹）" />和室の床（畳・竹）
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ラミネート" />ラミネート
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="壁紙" />壁紙
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="塗装" />塗装
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ランプ" />ランプ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ホワイト" />ホワイト
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ブラウン" />ブラウン
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ベージュ" />ベージュ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ブラック" />ブラック
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="グレー" />グレー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="レッド" />レッド
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ピンク" />ピンク
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="オレンジ" />オレンジ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ブルー" />ブルー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="グリーン" />グリーン
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="イエロー" />イエロー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="パープル" />パープル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ミラー" />ミラー
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="無地" />無地
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="木目調" />木目調
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="石目調" />石目調
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="メタル調" />メタル調
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="モルタル・コンクリート調" />モルタル・コンクリート調
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="レザー調" />レザー調
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ストライプ柄" />ストライプ柄
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="波柄" />波柄
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="チェック・ブロック柄" />チェック・ブロック柄
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="幾何学模様" />幾何学模様
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="和柄" />和柄
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="自然モチーフ" />自然モチーフ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他" />その他
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ナラ/オーク (ブナ科 : 楢)" />ナラ/オーク (ブナ科 : 楢)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ウォールナット (クルミ科)" />ウォールナット (クルミ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="メープル (カエデ科)" />メープル (カエデ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="チェリー (バラ科 : 桜)" />チェリー (バラ科 : 桜)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="カバ/バーチ (カバノキ科 : 樺)" />カバ/バーチ (カバノキ科 : 樺)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="アカシア (マメ科)" />アカシア (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="アサダ (カバノキ科)" />アサダ (カバノキ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="アッシュ (モクセイ科)" />アッシュ (モクセイ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="アップル (バラ科)" />アップル (バラ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ウェンジ (マメ科)" />ウェンジ (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="エボニー (カキノキ科 : 黒檀)" />エボニー (カキノキ科 : 黒檀)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="エルム (ニレ科)" />エルム (ニレ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="オリーブ (モクセイ科)" />オリーブ (モクセイ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="カリン (マメ科 : 花梨)" />カリン (マメ科 : 花梨)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キャスター (ウコギ科 : 栓)" />キャスター (ウコギ科 : 栓)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="キリ (キリ科 : 桐)" />キリ (キリ科 : 桐)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="クスノキ (クスノキ科)" />クスノキ (クスノキ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="クロガキ (カキノキ科 : 黒柿)" />クロガキ (カキノキ科 : 黒柿)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ケヤキ (ニレ科)" />ケヤキ (ニレ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="サペリ (センダン科)" />サペリ (センダン科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="シカモア (カエデ科)" />シカモア (カエデ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="シダー (マツ科)" />シダー (マツ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="シナ (シナノキ科)" />シナ (シナノキ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="シロタガヤ (アオギリ科)" />シロタガヤ (アオギリ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ゼブラウッド (マメ科)" />ゼブラウッド (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="タモ (モクセイ科 : 梻)" />タモ (モクセイ科 : 梻)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="チーク (シソ科)" />チーク (シソ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="チェスナット (ブナ科 : 栗)" />チェスナット (ブナ科 : 栗)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="パイン (マツ科)" />パイン (マツ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="パリサンダー (マメ科)" />パリサンダー (マメ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="バンブー (タケ亜科 : 竹)" />バンブー (タケ亜科 : 竹)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ピーラ (マツ科 : 米松)" />ピーラ (マツ科 : 米松)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ヒッコリー (クルミ科)" />ヒッコリー (クルミ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ヒノキ (ヒノキ科 : 檜)" />ヒノキ (ヒノキ科 : 檜)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ブナ/ビーチ (ブナ科 : 楢)" />ブナ/ビーチ (ブナ科 : 楢)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="プラム (バラ科)" />プラム (バラ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="スギ (ヒノキ科 : 杉)" />スギ (ヒノキ科 : 杉)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ベイスギ (ヒノキ科 : 米杉)" />ベイスギ (ヒノキ科 : 米杉)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="マホガニー (センダン科)" />マホガニー (センダン科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ユーカリ (フトモモ科)" />ユーカリ (フトモモ科)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="ローズウッド (マメ科 : 紫檀)" />ローズウッド (マメ科 : 紫檀)
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="コルク" />コルク
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="古木" />古木
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他の木目調" />その他の木目調
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="トラバーチン" />トラバーチン
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="スレート" />スレート
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="マーブル" />マーブル
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="テラコッタ" />テラコッタ
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="砂岩" />砂岩
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="玄武岩" />玄武岩
            </label>
            <br />
            <label>
                <input type="checkbox" v-model="check" value="その他の石目調" />その他の石目調
            </label>
            <br />
        </div>
        <div class="col-sm-9 offset-sm-3">
            <div>
                <input type="text" v-model="keyword" />
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" v-for="value in filter" :key="value.id">
                            <div class="card mb-4 shadow-sm">
                                <div class="image">
                                    <a :href="'/product-detail?work='+value.id">
                                        <img
                                            class="img img-thumbnail"
                                            v-bind:src="'/storage/'+value.product_images[0].image"
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
export default {
    data: function() {
        return {
            keyword: "",
            products: [],
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

            for (let a in this.products) {
                let product = this.products[a];

                for (let n = 0; n < product.tags.length; n++) {
                    if (
                        product.tags[n].name.indexOf(this.keyword) !== -1 &&
                        product.tags[n].name.indexOf(this.check) !== -1
                    ) {
                        if (this.old_result == product) {
                        } else {
                            this.result.push(product);
                        }
                        this.old_result = product;
                    }
                }
            }
            return this.result;
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