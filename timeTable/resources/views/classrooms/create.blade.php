<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/classroom.create.css">
    <title>教室管理</title>
</head>
<body>
        <h1>教室管理登録</h1>

        <p><input type="submit" value="戻る" class="modoru"></p>

        <form action="{{route('classrooms.store')}}" method="POST">
                @csrf
                <p>教室名</p>
                <div class="inner">
                <input type="text" maxlength="100" placeholder="教室名" id="classroom_name" name="classroom_name" class="inner">
                </div>

                <p>フロア</P>
                <div class="inner">
                <input type="text" maxlength="100" placeholder="フロア" id="floor" name="floor" class="floor">
                </div>

                <p>収納人数</p>
                <div class="inner">
                <input type="text" maxlength="100" placeholder="収納人数" id="capacity" name="capacity" class="inner">
                </div>

                <p><input type="submit" value="登録を行う" class="button"></p>
        </form>
</body>
</html>