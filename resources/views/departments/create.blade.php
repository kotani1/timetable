<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/class.create.css">
    <title>クラス登録画面</title>
</head>
<body>
    <div class="fullscreen-container">
        <img src="/img/home.png" class="fullscreen-image">
    </div>
    <div class="form-container">
        <form action="{{route('departments.store')}}" method="POST" onsubmit="return confirm('本当に登録しますか？')">
            @csrf
            <p>クラス名</p>
            <div class="inner">
                <input type="text" maxlength="100" placeholder="クラス名" id="department_name" name="department_name" class="inner">
            </div>
            <p><input type="submit" value="クラス項目登録を行う" class="button"></p>
        </form>
    </div>
</body>
</html>