<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/department.edit.css">
    <title>科目変更画面</title>
</head>
<body>
    <h1 class="h1" id="test">教室変更画面</h1>
    <div class="return" >
        <button  onclick="location.href='{{route('departments.index')}}'" class="color">戻る</button>
    </div>


        <p class="name" id="test">教室名:
            <input type="text"   font-size: 150%; size="30" name="department_name"  placeholder="クラス名を入力してください" >
        </p>

        <p class="name" id="test">フロア:
            <input type="text"   size="30" name="department_name"  placeholder="フロアを入力してください" >
        </p>

        <p class="name" id="test">収容人数:
            <input type="text"  size="30" name="department_name"  placeholder="収容人数を入力してください" >
        </p>    

        <div class="send" id="test">
            <button  type="" class="changecolor">送信する</button>
        </div>

        <style>
        input[type="text"]{
        font-size: 80%;
        }
        </style>

</body>
</html>
