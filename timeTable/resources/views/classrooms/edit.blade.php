<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/department.edit.css">
    <title>時間割アプリ</title>
</head>
<body>
    <h1 class="h1" id="test">教室変更画面</h1>
    <div class="return" >
        <button  onclick="location.href='{{route('classrooms.index')}}'" class="color">戻る</button>
    </div>
    <form action="{{route('classrooms.update',$classroom->id)}}" method="POST">
        @csrf
        @method('PUT')
        <p class="name" id="test">教室名:
            <input type="text"   font-size: 150%; size="30" name="classroom_name"  placeholder="クラス名を入力してください" value="{{$classroom->classroom_name}}">
        </p>

        <p class="name" id="test">フロア:
            <input type="text"   size="30" name="floor"  placeholder="フロアを入力してください" value="{{$classroom->floor}}">
        </p>

        <p class="name" id="test">収容人数:
            <input type="text"  size="30" name="capacity"  placeholder="収容人数を入力してください" value="{{$classroom->capacity}}">
        </p>

        <div class="send" id="test">
            <button  type="" class="changecolor">送信する</button>
        </div>
    </form>

        <style>
        input[type="text"]{
        font-size: 80%;
        }
        </style>

</body>
</html>
