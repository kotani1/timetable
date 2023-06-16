<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/department.edit.css">
    <title>科目変更画面</title>
    <!-- @vite('resources/css/app.css') -->
</head>
<body>
    <h1 class="h1" id="test">科目変更画面</h1>
    <form action="{{route('departments.update',$department->id)}}" method="POST">

    
        <div class="return" >
            <button  type="" class="color">戻る</button>
        </div>

        <p class="name" id="test">クラス名:
            <input type="text"  size="30" name="department_name"  placeholder="クラス名を入力してください" value="{{$department->department_name}}">
        </p>

        <div class="send" id="test">
            <button  type="" class="changecolor">送信する</button>
        </div>
    </form>



</body>
</html>
