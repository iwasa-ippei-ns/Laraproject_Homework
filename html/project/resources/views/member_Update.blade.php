<!DOCTYPE html>
<html>
    <head>
        <title>LaravelDBお題</title>
    </head>
    <body>
　　　　<h1>Update 指定したIDのデータ更新</h1>
        <p>testMemberテーブルの値を指定した値で更新</p>
        <p>更新前の値</p>
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
                <td>{{ $befoValue['id'] }}</td>
                <td>{{ $befoValue['name'] }}</td>
                <td>{{ $befoValue['mail'] }}</td>
                <td>{{ $befoValue['age'] }}</td>
                <td>{{ $befoValue['department_id'] }}</td>
                <td>{{ $befoValue['department']['department_name'] }}</td>
            </tr>
        </table><br>
        <p>更新後の値</p>
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
                <td>{{ $afterValue['id'] }}</td>
                <td>{{ $afterValue['name'] }}</td>
                <td>{{ $afterValue['mail'] }}</td>
                <td>{{ $afterValue['age'] }}</td>
                <td>{{ $afterValue['department_id'] }}</td>
                <td>{{ $afterValue['department']['department_name'] }}</td>
            </tr>
        </table>
    </body>
</html>
