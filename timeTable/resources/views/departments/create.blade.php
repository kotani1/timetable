<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/subject.create.css">
    <title>クラス登録画面</title>
</head>
<body>
    <form action="{{route('departments.store')}}" method="POST" onsubmit="return confirm('本当に登録しますか？')">
        @csrf
        <p>科目名</p>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="クラス名" id="department_name" name="department_name" class="inner">
        </div>
        <p><input type="submit" value="科目登録を行う"></p>
    </form>
</body>
</html>
