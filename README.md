# 目標管理ツール
目標を作成する為に作成したwebアプリです。
![スクリーンショット (644)](https://user-images.githubusercontent.com/116270960/222890387-304a4ba6-56f8-4b87-90ca-e965c08acb5b.png)

# 使用した技術
- 言語:PHP 8.0.26,HTML/CSS,JavaScript
- フレームワーク:Laravel9.x
- クラウドサービス:AWS
- データベース:MariaDB
- ライブラリ:Laravel Breeze

# データベース設計
- big_goals：id,,name,condition,start_season,end_season,create&update_at

- goals：id,name,condition,start_season,end_season,big_goal_id(big_goalsテーブルのidとリレーション),create&update&delete_at

- ifthens：id,then1,then2,then3,goal_id(goalsテーブルのidとリレーション),create&update_at
# 機能一覧
- 大目標作成
- 大目標を達成する為の小目標
- 小目標を達成できなかった際の別選択肢
- 各目標などの削除機能
