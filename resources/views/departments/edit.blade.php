<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/editclas.css">
    <title>科目変更画面</title>
</head>
<body>
    <div class="fullscreen-container">
        <img src="/img/edit.png" class="fullscreen-image" alt="背景画像">
    </div>
    <h1 class="h1" id="test">クラス変更画面</h1>
    <div class="return">
        <button onclick="location.href='{{route('departments.index')}}'" class="color">戻る</button>
    </div>
    <form action="{{route('departments.update',$department->id)}}" method="POST">
        @csrf
        @method('PUT')
        <p class="name" id="test">クラス名:
            <input type="text" size="30" name="department_name" placeholder="クラス名を入力してください" value="{{$department->department_name}}">
        </p>

        <div class="send" id="test">
            <button type="submit" class="changecolor">送信する</button>
        </div>
    </form>
</body>
</html>