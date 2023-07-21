<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/home.css">
  <title>ホーム画面</title>
</head>
<body>
  <div class="fullscreen-container">
    <img src="./img/images.png">
    <div class="message-container">
      <h2 class="name"><a href="{{route('teachers.index')}}">教員管理ページへ</a></h2>
      <h2 class="name"><a href="{{route('subjects.index')}}">科目管理ページへ</a></h2>
      <h2 class="name"><a href="{{route('departments.index')}}">クラス管理ページへ</a></h2>
    </div>
  </div>
</body>
</html>
