<!DOCTYPE html>
<html>
    <head>
        <title>LaravelDBお題</title>
    </head>
    <body>
　　　　<h1>Single 指定したIDのデータ取得</h1>
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
            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['mail'] }}</td>
                <td>{{ $value['age'] }}</td>
                <td>{{ $value['department_id'] }}</td>
                <td>{{ $value['department']['department_name'] }}</td>
            </tr>
        </table>
    </body>
</html>
