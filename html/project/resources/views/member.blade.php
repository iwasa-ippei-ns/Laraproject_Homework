<!DOCTYPE html>
<html>
    <head>
        <title>LaravelDBお題</title>
    </head>
    <body>
　　　　<h1>取得データ</h1>
        <p>testMemberテーブルの値</p>
        <p>{{ $value['id'] }}</p>
        <p>{{ $value['name'] }}</p>
        <p>{{ $value['mail'] }}</p>
        <p>{{ $value['age'] }}</p>
        <p>{{ $value['department_id'] }}</p>
        <p>{{ $valueSub['department_id'] }}</p>
        <p>{{ $valueSub['department_name'] }}</p>
    </body>
</html>
