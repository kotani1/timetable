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
    <button onclick="location.href='{{route('teachers.create')}}'">登録画面へ</button>
      @if (!$teachers->isEmpty())
        @foreach ($teachers as $teacher)
        <div class="flex mar_b_50">
          <div class="mar_r_30">
            教員名：{{$teacher ->user_name}}
          </div>
          <div class="mar_r_30">
            <button onclick="location.href='{{ route('teachers.edit', $teacher->id)}}'" class="">編集</button>
          </div>
          <div>
            <form id="delete_{{ $teacher->id }}" method="post" action="{{route('teachers.destroy',$teacher->id)}}" onsubmit="return confirm('本当に削除しますか？')">
              @csrf
              @method('delete')
              <button type="submit" class="delete_button">削除</button>
            </form>
          </div>
        </div>
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
