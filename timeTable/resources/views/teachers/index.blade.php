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
                  <form id="delete_{{ $teacher->id }}" method="post" action="{{ route('teacher.destroy', ['teacher' => $teacher->id]) }}">
                    @csrf
                    @method('delete')
                  <td class="px-4 py-3">
                    <a href="#" data-id="{{ $teacher->id }}" onclick="deletePost(this)" class="">削除</a>
                  </td>
                  </form>
                @endforeach
            @else
                登録された教員は現在いません。
            @endif
           </div>
        </div>
    </div>
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