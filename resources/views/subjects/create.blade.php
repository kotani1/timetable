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
    <div class="fullscreen-container">
        <img src="/img/home.png" class="fullscreen-image">
    </div>
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
            <select name="period" class="inner">
                <option value="前期">前期</option>
                <option value="後期">後期</option>
            </select>
        </div>

        <p>授業形態</p>
        <div class="inner">
            <select name="teaching_form" class="inner">
                <option value="実習">実習</option>
                <option value="講義">講義</option>
            </select>
        </div>

        <p>単位数</p>
        <div class="inner">
            <select name="number_of_units" class="inner">
                <option value="-">-</option>
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
