前提：Laravel環境が構築できている前提で以下の手順を記載する

[テーブル作成]
○ドッカー起動
docker-compose up -d

○テーブルの定義を行う
テーブル定義ファイルが存在することを確認する
　・factoriesファイル
　　・project/database/testMemberFactory.php
　
　・migrationsファイル
　　・project/database/migrations/2022_05_21_111056_create_department_ids_table.php
　　・project/database/migrations/2022_05_22_103846_create_test_members_table.php
　　
　・seedersファイル
　　・project/database/departmentIdSeeder.php
　　・project/database/testMemberSeeder.php

○テーブル作成実行
php artisan migrate

phpmyadminでテーブルが作成されていることを確認する
http://localhost:4501/index.php?route=/database/structure&db=laravel_db

○ダミーデータ作成実行
php artisan db:seed

phpmyadminでダミーデータが作成されていることを確認する
http://localhost:4501/index.php?route=/database/structure&db=laravel_db

〇Laravelお題ページを表示
「http://localhost:7008/」にアクセス

〇画面からテーブルを参照・更新・追加を行う
画面上のデータとテーブルのデータが一致しているかはphpmyadminで確認する

「axreq:All」：送信ボタンを押下し、testMemberテーブルの全データが表示されることを確認する
　　　　　　　 

「axreq:Single」：idのボックスに数値を入力して送信ボタンを押下する
　　　　　　　　　画面上に指定したidのデータが表示されていることを確認する

「axreq:Update」：画面上の「id」「name」「mail」「age」に値を入力し、送信ボタンを押下する
　　　　　　　　　入力した内容でテーブルの値が更新されていること

「axreq:AddSingle」：画面上の「name」「mail」「age」「department_id」に値を入力し、送信ボタンを押下する
　　　　　　　　　　入力した内容で新しいカラムが作成されていること

