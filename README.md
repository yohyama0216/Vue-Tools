Vueで作ったものをまとめておく。


# 作成したもの
ペッカ攻城対戦動画検索サイト

# VueのTips
## Vueの導入
jQueryを少しずつ置き換えていくのが現実的で良いらしい。

## Vue用語
### methodとcomputedの違い
methodはキャッシュされない。computedはキャッシュされる。
税率を掛けた値を出すとか、そういう計算結果を保持する目的の場合はcomputed。

### ツール類
#### Vue-Cli
コマンドで色々な作業が出来るようになるツール。

#### Vuex
状態管理として使う。
単純にdataみたいな変数だけだと色々な個所で参照されたり、代入したりする際にデータがカオスになる
そのために安全にデータを取りまわすために使う。
ざっくりとまとめると基本的にVuexのstoreを通じて値のやり取りをする。

#### VueRouter
ルーター。URLと表示したいページの内容あたりの処理をする。SPAでは必須。

#### Nuxt.js
以上のツールなどが入ったVueのフレームワーク。
