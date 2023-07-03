<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/editclas.css">
    <title>科目変更画面</title>

</head>
<body>
    <h1 class="inner" >科目項目変更画面</h1>
    <form action="{{route('subjects.update',$subject->id)}}" method="POST">
        @csrf
        @method('PUT')

        <p>科目名</p>
        <div class="inner" >
            <input type="text" maxlength="100" placeholder="科目名" id="name" name="subject_name" class="inner" value="{{$subject->subject_name}}">
        </div>

        <p>年度</p>
        <div class="inner" >
            <input type="text" maxlength="100" placeholder="年度" id="year" name="year" class="inner" value="{{$subject->year}}">
        </div>

        <p>期</p>
        <div class="inner">
        <select name="period" id="">
            <option value="前期" class="inner">前期</option>
            <option value="後期" class="inner">後期</option>
        </select>
        </div>

        <p>授業形態</p>
        <div class="inner">
        <select name="teaching_form" id="">
            <option value="実習" class="inner">実習</option>
            <option value="講義" class="inner">講義</option>
        </select>
        </div>

        <p>単位数</p>
        <div class="inner">
        <select name="number_of_units" id="">
            <option value="-" class="inner">-</option>
            <option value="1" class="inner">1</option>
            <option value="2" class="inner">2</option>
            <option value="3" class="inner">3</option>
            <option value="4" class="inner">4</option>
            <option value="5" class="inner">5</option>
            <option value="6" class="inner">6</option>
            <option value="7" class="inner">7</option>
            <option value="8" class="inner">8</option>
            <option value="9" class="inner">9</option>
            <option value="10" class="inner">10</option>
        </select>
        </div>

        <p>科目分類</p>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="科目分類" id="classification" name="subject_classification" class="inner" value="{{$subject->subject_classification}}">
        </div>

        <p>科目内容</p>
        <div class="inner">
            <textarea id="content" name="subject_content" cols="50" rows="10" maxlength="50">{{$subject->subject_content}}</textarea>
        </div>

        <p><input type="submit" value="送信する"></p>
    </form>



</body>
</html>

