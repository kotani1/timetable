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

  <form action="{{route('department_by_teachers.store')}}" method="POST" onsubmit="return confirm('本当に登録しますか？')">
    @csrf
    <p>教員名</p>
    <div class="inner">
    <select class="teacher_id" name="teacher_id">
      <option value="" class="inner">-</option>
      @foreach ($teachers as $teacher)
        <option value="{{$teacher->id}}" class="inner">  {{$teacher->user_name}}
        </option>
      @endforeach
    </select>
    </div>

    <p>学科</p>
    <div class="inner">
    <select class="department_id" name="department_id">
      <option value="" class="inner">-</option>
      @foreach ($departments as $department)
        <option value="{{$department->id}}" class="inner">  {{$department->department_name}}
        </option>
      @endforeach
    </select>
    </div>

    <p>学年</p>
    <div class="inner">
      <select class="school_year" name="school_year">
        <option value="" class="inner">-</option>
        <option value="1" class="inner">1</option>
        <option value="2" class="inner">2</option>
        <option value="3" class="inner">3</option>
      </select>
    </div>

    <p><input type="submit" value="登録する" class="button"></p>
  </form>

</body>
</html>
