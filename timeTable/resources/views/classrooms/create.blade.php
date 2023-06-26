<!DOCTYPE html>
<html lang="jn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/class.create.css">
    <title>教室名登録画面</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="{{route('classrooms.store')}}" method="POST" onsubmit="return confirm('本当に登録しますか？')">
        @csrf
        <p>クラス名</p>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="教室名" id="classroom_name" name="classroom_name" class="inner">
        </div>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="フロア" id="floor" name="floor" class="inner">
        </div>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="収納人数" id="capacity" name="capacity" class="inner">
        </div>
        <p><input type="submit" value="登録" class="button"></p>
    </form>
</body>
</html>
