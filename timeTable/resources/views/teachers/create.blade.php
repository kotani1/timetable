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
    <form method="POST" action="{{route('teachers.store')}}" onsubmit="return confirm('本当に登録しますか？')">
        @csrf
    <p>ユーザー名:
    <input type="text" maxlength="100" placeholder="ユーザー名" id="user_name" name="user_name" class="inner">
    @if (!empty($errors['user_name']))
    </p>
    <p class="error">{{$errors['user_name']}}</p>
    @endif
    <p>ログインID:
    <input type="text" maxlength="200" id="login_id" name="login_id">
    @if (!empty($errors['login_id']))
    <p class="error">{{$errors['login_id']}}</p>
    @endif
    </p>
    <p>パスワード:
    <input type="password" maxlength="20" placeholder="半角英数8文字以上" id="password" name="password" class="inner">
    @if (!empty($errors['password']))
    <p class="error">{{$errors['password']}}</p>
    @endif
    @if (!empty($errors['password_short']))
    <p class="error">{{$errors['password_short']}}</p>
    @endif
    </p>
    <p>権限</p>
    <div class="inner">
    <select name="permit" >
        <option value="0" class="inner">0</option>
        <option value="1" class="inner">1</option>
        <option value="2" class="inner">2</option>
        <option value="3" class="inner">3</option>
    </select>
    </div>
    <p><input type="submit" value="会員登録を行う"></p>
    </form>

</body>
</html>
