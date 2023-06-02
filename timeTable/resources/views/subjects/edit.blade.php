<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>科目変更画面</title>
</head>
<body>
    <form action= ""method="post">
        @csrf
        <p>user_name: <input type="text" name="user_name"></p>
        <p>login_id: <input type="text" name="login_id"></p>
        <p>password: <input type="text" name="password"></p>
        
        <p>permit:
            <select name="permit" id="">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </p>
        <button type="">送信する</button>
    </form>


    
</body>
</html>