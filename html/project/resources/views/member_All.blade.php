<!DOCTYPE html>
<html>
    <head>
        <title>LaravelDBお題</title>
    </head>
    <body>
　　　　<h1>ALL 全件データ取得</h1>
        <p>testMemberテーブルの値と外部キーから取得した、department_idsテーブルの値</p>
        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>mail</th>
                <th>age</th>
                <th>department_id</th>
                <th>department_name</th>
            </tr>
            @foreach ($value as $val)
                <tr>
                    <td>{{ $val['id'] }}</td>
                    <td>{{ $val['name'] }}</td>
                    <td>{{ $val['mail'] }}</td>
                    <td>{{ $val['age'] }}</td>
                    <td>{{ $val['department_id'] }}</td>
                    <td>{{ $val['department']['department_name'] }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
