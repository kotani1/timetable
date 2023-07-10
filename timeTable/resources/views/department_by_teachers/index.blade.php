<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach ($department_by_teachers as $department_by_teacher)
  <p>{{$department_by_teacher->teacher['user_name']}}</p>
  @endforeach
</body>
</html>
