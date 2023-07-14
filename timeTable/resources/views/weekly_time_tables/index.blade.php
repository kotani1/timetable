<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>週間時間割</h1>
  <h2><a href="{{route('weekly_time_tables.create')}}">登録画面へ</a></h2>
  <table border="1">
    <caption></caption>
    <thead>
      <tr>
      <td>　</td>
      <td>月</td>
      <td>火</td>
      <td>水</td>
      <td>木</td>
      <td>金</td>
    </tr>
    </thead>
    <tbody>
      @foreach ($weekly_time_tables as $weekly_time_table)
        @if($weekly_time_table->day_of_week == '月')
          <tr><td>{{$weekly_time_table->period}}</td>
        @endif
        <td>
          @if($weekly_time_table->subject_by_teacher_id != 0)
          <p>
              {{$weekly_time_table->subject_by_teacher->subject['subject_name']}}
            </p>
          <p>
          {{$weekly_time_table->subject_by_teacher->teacher['user_name']}}
          </p>
          @endif
        </td>
        @if($weekly_time_table->day_of_week == '金')
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
</body>
</html>
