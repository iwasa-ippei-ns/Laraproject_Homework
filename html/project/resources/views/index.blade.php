<!DOCTYPE html>
<html>
    <head>
        <title>LaravelDBお題</title>
    </head>
    <body>
　　　　<h1>DB操作</h1>
        <!-- practice -->
        <form action="/find" method="post" id="practice">
            @csrf
            <input type="submit" value="送信" form="practice">
        </form>
        <hr>
        <!-- All -->
        <form action="/test_members" method="post" id="All">
            @csrf
            <p>testMemberテーブルの全データ取得</p>
            axreq:All<input type="hidden" name="axreq" value="All">
            <input type="submit" value="送信" form="All"><br>
        </form>
        <hr>
        <!-- Single -->
        <form action="/test_members" method="post" id="Single">
            @csrf
            <p>testMemberテーブルの指定したIDのデータ取得</p>
            <p>1～10の間でIDを指定する</p>
            axreq:Single<input type="hidden" name="axreq" value="Single"><br>
            id:<input type="number" name="id" min="1" max="10">
            <input type="submit" value="送信" form="Single">
        </form>
        <hr>
        <!-- Update -->
        <form action="/test_members" method="post" id="Update">
            @csrf
            <p>testMemberテーブルの指定したIDのデータを、下記の入力内容で更新する</p>
            axreq:Update<input type="hidden" name="axreq" value="Update"><br>
            id:<input type="number" name="id" min="1" max="10"><br>
            name:<input type="lavel" name="name" value=""><br>
            mail:<input type="lavel" name="mail" value=""><br>
            age:<input type="number" name="age" min="1" max="100"><br>
            <input type="submit" value="送信" form="Update">
        </form>
        <hr>
        <!-- AddSingle -->
        <form action="/test_members" method="post" id="AddSingle">
            @csrf
            <p>testMemberテーブルに、下記の入力内容のレコードを追加する</p>
            axreq:AddSingle<input type="hidden" name="axreq" value="AddSingle"><br>
            name:<input type="lavel" name="name" value=""><br>
            mail:<input type="lavel" name="mail" value=""><br>
            age:<input type="number" name="age" min="1" max="100"><br>
            department_id(1～5の間で入力) :<input type="number" name="department_id" min="1" max="5"><br>
            <input type="submit" value="送信" form="AddSingle">
        </form>
    </body>
</html>
