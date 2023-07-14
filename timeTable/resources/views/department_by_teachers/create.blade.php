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
  <h1>教員&クラス登録</h1>

  <p><input type="submit" value="戻る" class="modoru"></p>

  <p>教員名</p>
  <div class="inner">
  <select>
    <option value="" class="inner">-</option>
    @foreach ($teachers as $teacher)
    <option value="{{$teacher->id}}" class="inner">  {{$teacher->user_name}}
</option>
  @endforeach
  </select>
  </div>

  <p>学科</p>
  <div class="inner">
  <select>
    <option value="" class="inner">-</option>
    @foreach ($departments as $department)
    <option value="{{$department->id}}" class="inner">  {{$department->department_name}}
</option>
  @endforeach
  </select>
  </div>

  <p>学年</p>
  <div class="inner">
  <select class="select1">
    <option value="" class="inner">-</option>
    <option value="" class="inner">1</option>
    <option value="" class="inner">2</option>
    <option value="" class="inner">3</option>
  </select>
  </div>

  <p><input type="submit" value="登録する" class="button"></p>

</body>
</html>
