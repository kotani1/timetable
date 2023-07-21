<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/editclas.css">
    <title>教員＆学科変更画面</title>
</head>
<body>
    <h1 class="h1" id="test">教員＆学科変更画面</h1>
    <div class="return" >
        <button  onclick="location.href='{{route('department_by_teachers.index')}}'" class="color">戻る</button>
    </div>
    <form action="{{route('department_by_teachers.update',$department_by_teacher->id)}}" method="POST">
        @csrf
        @method('PUT')
        <p class="name" id="test">学年:
            <input type="text"   font-size: 150%; size="30" name="school_year"  placeholder="学年を入力してください" value="{{$department_by_teacher->school_year}}">
        </p>
        <p class="name" id="test">教員名:
            <input type="text"   font-size: 150%; size="30" name="user_name"  placeholder="教員名を入力してください" value="{{$department_by_teacher->teacher['user_name']}}">
        </p>
        <p class="name" id="test">学科名:
            <input type="text"   size="30" name="department_name"  placeholder="学科を入力してください" value="{{$department_by_teacher->department['department_name']}}">
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
