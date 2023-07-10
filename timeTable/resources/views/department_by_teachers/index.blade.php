{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @foreach ($department_by_teachers as $department_by_teacher)
  <p>{{$department_by_teacher->teacher['id']}}</p>
  <p>{{$department_by_teacher->teacher['user_name']}}</p>
  <p>{{$department_by_teacher->department['department_name']}}</p>
  @endforeach
</body>
</html> --}}

{{-- frontブランチで作業すること --}}
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    @vite('resources/css/app.css')
    <title>教員登録アプリ</title>
</head>

<body>
  <div class="container px-5 py-12 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">教員員＆科目</font>
        </font>
      </h1>
    </div>
  </div>
  <div class="flex justify-center items-center">
    <button onclick="location.href='{{route('department_by_teachers.create')}}'" class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">
    登録画面へ</button>
  </div>
  
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">

              <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead>
                  <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> 教員＆科目</font>
                      </font>
                    </th>
                    {{-- <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th> --}}
                  </tr>
                </thead>
                <tbody>
                  @if (!$department_by_teachers->isEmpty())
                  @foreach ($department_by_teachers as $department_by_teacher)
                  <tr>
                    <td class="px-4 py-3 divide-y divide-light-blue-700 border-4 border-gray-500/100">
                      <font style="vertical-align: inherit;">
                        <font class="text-2xl" style=" vertical-align: inherit;">教員ID：{{$department_by_teacher->teacher['id']}}</font><br>
                        <font class="text-2xl" style=" vertical-align: inherit;">教員名：{{$department_by_teacher->teacher['user_name']}}</font><br>
                        <font class="text-2xl" style=" vertical-align: inherit;">科目名：{{$department_by_teacher->department['department_name']}}</font><br>
                        {{-- <font class="text-2xl" style=" vertical-align: inherit;">授業形態：{{$department ->teaching_form}}</font><br>
                        <font class="text-2xl" style=" vertical-align: inherit;">科目内容：{{$department ->department_content}}</font><br>
                        <font class="text-2xl flex " style=" vertical-align: inherit;">科目分類：{{$department ->department_classification}} --}}
                          <div class="flex justify-end">
                            <button class="ml-auto mr-4 mt-4  text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" onclick="location.href='{{ route('department_by_teachers.edit', ['department_by_teacher' => $department_by_teacher->id])}}'">編集</button>
                            <form id="delete_{{ $department_by_teacher->id }}" method="post" action="{{route('department_by_teachers.destroy',$department_by_teacher->id)}}">
                              @csrf
                              @method('delete')
                              <button class="ml-auto mr-4 mt-4  text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded " href="#" data-id="{{ $department_by_teacher->id }}" onclick="deletePost(this)">削除</button>
                          </div>
                            </form>
                        </font><br>
                      </font>
                      @endforeach
                      @else
                      <td class="px-4 py-3 divide-y divide-light-blue-700">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">登録された科目が現在存在しません。
                      </font>
                    </td>
                      @endif
                    </td>
                </tbody>
              </table>
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
