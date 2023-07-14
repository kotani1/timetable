<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <table border="1">
    <caption></caption>
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
        @if($weekly_time_table->day_of_week == '月')
          <tr><td>{{$weekly_time_table->period}}</td>
        @endif
        <td class="td">
          @if($weekly_time_table->subject_by_teacher_id != 0)
          <p>
              {{$weekly_time_table->subject_by_teacher->subject['subject_name']}}
            </p>
          <p>
          {{$weekly_time_table->subject_by_teacher->teacher['user_name']}}
          </p>
          @endif
        </td>
        @if($weekly_time_table->day_of_week == '金')
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
  <div id="mask" class="hidden"></div>
<section id="modal" class="hidden">
  @foreach ($subject_by_teachers as $subject_by_teacher)
  <div class="subject_by_teacher">
    <p>
      科目:{{$subject_by_teacher->subject['subject_name']}}
    </p>
     <p>
      教員:{{$subject_by_teacher->teacher['user_name']}}
    </p>
    <p>残りコマ数:</p>
  </div>

  @endforeach
</section>
</body>
<style>
  .btn-container {
  text-align: center;
}

button {
  width: 80%;
  height: 50px;
  font-size: 18px;
  font-weight: bold;

  /* ボタンにカーソルを当てると、カーソルがポインターに変わる */
  cursor: pointer;
}

/* ボタンにカーソルを当てたとき、ボタンを半透明にする */
button:hover {
 opacity: 0.7;
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
      mask.classList.remove('hidden');
      modal.classList.remove('hidden');
    });
  })


mask.addEventListener('click', () => {
  mask.classList.add('hidden');
  modal.classList.add('hidden');
});
</script>
</html>
