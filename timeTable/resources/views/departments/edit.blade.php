<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/classes.edit.css">
    <title>科目変更画面</title>
    <!-- @vite('resources/css/app.css') -->
</head>
<body>
    <h1 class="h1">科目変更画面</h1>
    <form action="{{route('departments.update',$department->id)}}" method="POST">

    
        <div class="return" >
            <button  type="" >戻る</button>
        </div>

        <p class="name" id="test">クラス名:
            <input type="text" name="department_name" id="name" value="{{$department->department_name}}">
        </p>

        <div class="send" id="test">
            <button  type="" >送信する</button>
        </div>
    </form>



</body>
</html>
