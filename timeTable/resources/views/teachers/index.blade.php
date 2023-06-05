{{-- frontブランチで作業すること --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    @vite('resources/css/app.css')
    <title>教員登録アプリ(test)</title>
</head>

<body>
  <div class="container px-5 py-12 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">教員登録一覧</font>
        </font>
      </h1>
    </div>
  </div>
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">

              <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                  <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">教員名</font>
                      </font>
                    </th>
                    <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                  </tr>
                </thead>
                <tbody>
                  @if (!$teachers->isEmpty())
                  @foreach ($teachers as $teacher )
                  <tr>
                    <td class="px-4 py-3 divide-y divide-light-blue-700">
                      <font style="vertical-align: inherit;">
                        <font class="text-xl" style=" vertical-align: inherit;">{{$teacher ->user_name}}</font>
                      </font>
                      <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" onclick="location.href='{{ route('teachers.edit', ['teacher' => $teacher->id])}}'" class="">編集</button>
                      <form id="delete_{{ $teacher->id }}" method="post" action="{{route('teachers.destroy',$teacher->id)}}">
                        @csrf
                        @method('delete')
                       <td>
                        <a class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded" href="#" data-id="{{ $teacher->id }}" onclick="deletePost(this)" class="">削除</a>
                      </td>
                      </form>
                      @endforeach
                      @else
                      <td class="px-4 py-3 divide-y divide-light-blue-700">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">登録された教員が現在存在しません。
                      </font>
                    </td>
                      @endif
                    </td>
                </tbody>
              </table>
            </div>
            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
              <button onclick="location.href='{{route('teachers.create')}}'" class="flex ml-auto my-8 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
              登録画面へ</button>
            </div>
          </div>
        </section>

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
