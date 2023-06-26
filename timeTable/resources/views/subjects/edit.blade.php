<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/edit.css">
    <title>科目変更画面</title>
    <!-- @vite('resources/css/app.css') -->
</head>
<body>
    <h1 class="h1">科目項目変更画面</h1>
    <form action="{{route('subjects.update',$subject->id)}}" method="POST">
        @csrf
        @method('PUT')
        <p class="name">科目名:
            <input type="text" name="subject_name" id="name" value="{{$subject->subject_name}}">
        </p>
        <p class="year">年度:
            <input type="text" name="year" id="year" value="{{$subject->year}}">
        </p>
        <p class="period">期:
            <select name="period" id="">
                <option value="前期">前期</option>
                <option value="後期">後期</option>
            </select>
        </p>
        <p class="name">授業形態:
            <select name="teaching_form" id="">
                <option value="実習">実習</option>
                <option value="講義">講義</option>
            </select>
        </p>
        <p class="number">単位数:
            <select name="number_of_units" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </p>

        <p class="classification">科目分類:
            <input type="text" name="subject_classification" id="classification" value="{{$subject->subject_classification}}">
        </p>

        <p class="content">科目内容:
            <textarea rows="10" cols="50" name="subject_content" id="content">{{$subject->subject_content}}
            </textarea>
        </p>
        <div class="send">
            <button  type="" >送信する</button>
        </div>
    </form>



</body>
</html>
