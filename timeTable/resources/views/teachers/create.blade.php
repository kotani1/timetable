<!-- 入力画面 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create.css">
    <title>教員登録(入力)</title>
</head>
<body>
    <form method="POST" action="{{teacher.store}}" onsubmit="return confirm()">
        @csrf
    <p>ユーザー名</p>
    <div class="inner">
    <input type="text" maxlength="100" placeholder="ユーザー名" id="user_name" name="user_name" class="inner">
    </div>
    <p>ログインID</p>
    <div class="inner">
    <input type="text" maxlength="200" id="login_id" name="login_id">
    </div>
    <p>パスワード</p>
    <div class="inner">
    <input type="password" maxlength="20" placeholder="半角英数8文字以上" id="password" name="password" class="inner">
    </div>
    <p>権限</p>
    <div class="inner">
    <select name="permit">
        <option value="main" class="inner">権限を選ぶ</option>
        <option value="first" class="inner">1</option>
        <option value="second" class="inner">2</option>
        <option value="third" class="inner">3</option>
    </select>
    </div>
    <p><input type="submit" value="会員登録を行う"></p> 
    </form>
    
</body>
<script>
    var select = confirm("本当に登録しますか？");
    return select;
</script>
</html>