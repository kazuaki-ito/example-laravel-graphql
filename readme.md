## 環境のセットアップ

(初回のみ)git clone

```bash
git clone 
```

コンテナの起動
```bash
docker-compose up -d
# 起動確認(少し待ってから実行する)
docker-compose ps
```


ライブラリのインストール
```bash
docker-compose exec app composer install
```

マイグレーション & 初期データ投入
```
docker-compose exec app php artisan migrate

docker-compose exec app php artisan tinker
>>> factory('App\User', 5)->create();

```
 
(初回のみ)envファイルの作成
```bash
# 初回のみ
cp .env.example .env
docker-compose exec app php artisan key:generate
```

起動確認

```
# ブラウザで下記URLにアクセス。Laravelの初期ページが表示されればOK
http://localhost/
```


## Lighthouseの導入

```bash

# lighthouseのインストール
docker-compose exec app composer require nuwave/lighthouse


# デフォルトスキーマの準備 /graphql/schema.graphqlに作成される
docker-compose exec app php artisan vendor:publish --tag=lighthouse-schemDa


# phpstorm用にidehelperをセットアップ
docker-compose exec app php artisan lighthouse:ide-helper

```

## query, mutationの作成

```
docker-compose exec app php artisan lighthouse:query UserQuery
docker-compose exec app php artisan lighthouse:mutation UserMutation


```

## ツール等

* GraphQLのGUIクライアント
  * https://altair.sirmuel.design/
