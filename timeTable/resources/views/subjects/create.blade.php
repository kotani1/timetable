<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/subject.create.css">
    <title>科目登録画面</title>
</head>
<body>
    <form action="{{route('subjects.store')}}" method="POST">
        @csrf
        <p>科目名</p>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="科目名" id="subject_name" name="subject_name" class="inner">
        </div>

        <p>年度</p>
        <div class="inner">
            <input type="text" maxlength="100" placeholder="年度" id="year" name="year" class="inner">
        </div>


        <p>期</p>
        <div class="inner">
        <select name="period">
            <option value="前期" class="inner">前期</option>
            <option value="後期" class="inner">後期</option>
        </select>
        </div>

        <p>授業形態</p>
        <div class="inner">
        <select name="teaching_form">
            <option value="実習" class="inner">実習</option>
            <option value="講義" class="inner">講義</option>
        </select>
        </div>


        <p>単位数</p>
        <div class="inner">
        <select name="number_of_units">
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
            <input type="text" maxlength="100" placeholder="科目分類" id="subject_classification" name="subject_classification" class="inner">
        </div>

        <p>科目内容</p>
        <div class="inner">
            <textarea id="subject_content" name="subject_content" cols="50" rows="10" maxlength="20"></textarea>
        </div>

        <p><input type="submit" value="科目登録を行う"></p>
    </form>
</body>
</html>
