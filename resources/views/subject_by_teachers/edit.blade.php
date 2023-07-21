<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>変更画面</h2>
    <form action="{{route('subject_by_teachers.store')}}" method="POST">
        @csrf
        <h3>教員</h3>
        <select name="teacher_id">
            <option value=" ">{{$subject_by_teacher->teacher['user_name']}}</option>
            @foreach ($teachers as $teacher)
            <option value="{{$teacher->id}}">  {{$teacher->user_name}}</option>
            @endforeach
    </select>
    <h3>科目</h3>
        <select name="subject_id">
            <option value="">{{$subject_by_teacher->subject['subject_name']}}</option>
            @foreach ($subjects as $subject)
            <option value="{{$subject->id}}">  {{$subject->subject_name}}</option>
            @endforeach
    </select>
    <button type="submit">変更</button>
  </form>
</body>
</html>
