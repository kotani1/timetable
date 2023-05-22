{{-- frontブランチで作業すること --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 class="">
        登録教員一覧
    </h2>


<div class="">
    <div class="">
        <div class="">
          <div class="">
            @if (!$teachers->isEmpty())
                @foreach ($teachers as $teacher )
                  {{$teacher ->login_id}}<br>
                  {{$teacher ->user_name}}<br>
                  {{$teacher ->permit}}<br>
                  {{$teacher ->created_at}}<br>
                @endforeach
            @else
                登録された教員は現在いません。
            @endif
           </div>
        </div>
    </div>
</div>

</body>
</html>