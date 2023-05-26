{{-- frontブランチで作業すること --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <title>教員登録アプリ</title>
</head>

<body>

  <div class="inner">
    {{-- <a href="{{route('teachers.create')}}">登録画面へ</a> --}}
    <button onclick="location.href='{{route('teachers.create')}}'">登録画面へ</button>
  </div>

         <div class="inner">
            @if (!$teachers->isEmpty())
                @foreach ($teachers as $teacher )
                  {{-- <p>{{$teacher ->login_id}}</p><br> --}}
                  <p class="flex">教員名：{{$teacher ->user_name}}</p>
                  {{-- <p>{{$teacher ->permit}}</p><br> --}}
                  {{-- <p>{{$teacher ->created_at}}</p><br> --}}
                  <button onclick="location.href='{{ route('teachers.edit', $teacher->id)}}'" class="">編集</button>
                  <form id="delete_{{ $teacher->id }}" method="post" action="{{route('teachers.destroy',$teacher->id)}}">
                    @csrf
                    @method('delete')
                   <td>
                    <div class="del">
                    <a href="#" data-id="{{ $teacher->id }}" onclick="deletePost(this)" class="">削除</a>
                    </div>
                  </td>
                  </form>
                @endforeach
            @else
                登録された教員は現在いません。
            @endif
        </div>

</body>

<script>
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除してもいいですか？')) {
      document.getElementById('delete_' + e.dataset.id).submit();
    }
  }
</script>

</html>
