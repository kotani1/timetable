<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/teacher.class.css">
  <title>Document</title>
</head>
<body>
  <p><input type="submit" value="戻る" class="modoru"></p>

  <p>教員名</p>
  <select>
    <option value="" class="inner">-</option>
    @foreach ($teachers as $teacher)
    <option value="{{$teacher->id}}" class="inner">  {{$teacher->user_name}}
</option>
  @endforeach
  </select>

  <p>クラス</p>
  <div class="inner">
  <select>
    <option value="" class="inner">-</option>
    <option value="" class="inner">情報システム</option>
    <option value="" class="inner">AIテクノロジー</option>
    <option value="" class="inner">ネットワークセキュリティ</option>
  </select>
  </div>

  <p>学年</p>
  <div class="inner">
  <select>
    <option value="" class="inner">-</option>
    <option value="" class="inner">1</option>
    <option value="" class="inner">2</option>
    <option value="" class="inner">3</option>
  </select>
  </div>

  <p><input type="submit" value="登録する" class="button"></p>

</body>
</html>
