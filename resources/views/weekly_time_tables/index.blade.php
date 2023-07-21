<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    ?>
  <h1>週間時間割</h1>
  <h2><a href="{{route('weekly_time_tables.create')}}">登録画面へ</a></h2>
  <form action="{{route('weekly_time_tables_searched')}}" method="POST">
    @csrf
    <select name="department_by_teacher_id" id="">
      <option value="">-</option>
      @foreach($department_by_teachers as $department_by_teacher)
        <option value="{{$department_by_teacher->id}}">
          {{$department_by_teacher->school_year}}年生
          {{$department_by_teacher->department['department_name']}}
        </option>
      @endforeach
    </select>
    <button>検索</button>
  </form>

  <table border="1">
    @if(!empty($weekly_time_tables))
    <caption>{{$class_name}}</caption>
    <thead>
      <tr>
      <td>　</td>
      <td>月</td>
      <td>火</td>
      <td>水</td>
      <td>木</td>
      <td>金</td>
    </tr>
    </thead>
    <tbody>
      @foreach ($weekly_time_tables as $weekly_time_table)
        @if($weekly_time_table->department_by_teacher_id != 4)
        @break
        @endif
        @if($weekly_time_table->day_of_week == '月')
          <tr><td>{{$weekly_time_table->period}}</td>
        @endif
        @if($weekly_time_table->subject_by_teacher_id != 0)
        <td class="td setting_data">
        <p>
            {{$weekly_time_table->subject_by_teacher->subject['subject_name']}}
          </p>
        <p>
        {{$weekly_time_table->subject_by_teacher->teacher['user_name']}}
        </p>
        </td>
        @else
        <td class="td"></td>
        @endif
        @if($weekly_time_table->day_of_week == '金')
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
   @else
   <h3>検索してください</h3>
   @endif
    <div id="mask" class="hidden"></div>
<section id="modal" class="hidden">
  <div id="submit_btn" class="hidden">
    <button>登録する</button>
  </div>
  <div id="edit_btn" class="hidden">
    <button>変更する</button>
  </div>
  <div id="delete_btn" class="hidden">
    <button>削除する</button>
  </div>
</section>
</body>
<style>
  .btn-container {
  text-align: center;
}



.hidden {
  display: none;
}

#mask {
  background: rgba(0, 0, 0, 0.7);
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: 1;
}

#modal {
  background: #fff;
  width: 50%;
  padding: 24px;
  border-radius: 4px;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  margin: 0 auto;
  z-index: 2;
}
.subject_by_teacher{
  border: 1px solid black;
  margin-bottom: 10px;
}
</style>
<script>
const tds = document.querySelectorAll(".td");
const mask = document.getElementById('mask');
const modal = document.getElementById('modal');

  tds.forEach(function(target) {
    target.addEventListener('click', () => {
      console.log(target.innerHTML)
      if(target.innerHTML == '' ){
        const submit_btn = document.getElementById('submit_btn');
        submit_btn.classList.remove('hidden');
        console.log('aaa')
      }else{
        const edit_btn = document.getElementById('edit_btn');
        edit_btn.classList.remove('hidden');
        const delete_btn = document.getElementById('delete_btn');
        delete_btn.classList.remove('hidden');
      }
      mask.classList.remove('hidden');
      modal.classList.remove('hidden');
    });
  })


mask.addEventListener('click', () => {
  mask.classList.add('hidden');
  modal.classList.add('hidden');
  submit_btn.classList.add('hidden');
  edit_btn.classList.add('hidden');
  delete_btn.classList.add('hidden');
});
</script>
</body>
</html>
