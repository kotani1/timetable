<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/edit.css">
    <title>教員登録画面の編集test</title>
</head>
<body>
    <div class="container">
        <img src="/img/edit.png" class="background-image">
        <h1>教員登録画面の編集test</h1>
        <form method="POST" action="{{route('teachers.update',$teacher->id)}}" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_name">ユーザーネームの変更</label>
                <input type="text" name="user_name" id="user_name" class="form-control" value="{{$teacher->user_name}}" placeholder="ユーザーネームを入力してください">
            </div>
            <input type="submit" value="決定" class="btn btn-primary">
            <input type="reset" value="戻る" class="btn btn-secondary" onclick='window.history.back(-1);'>
        </form>
    </div>
</body>
</html>
