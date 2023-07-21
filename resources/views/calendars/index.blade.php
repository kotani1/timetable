<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calendar</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>{{ $currentYear }}年のカレンダー</h1>
        
        <!-- 月ごとのカレンダーの表示 -->
        @for ($month = 1; $month <= 12; $month++)
            <?php $monthName = date('F', mktime(0, 0, 0, $month, 1)); ?>
            
            <h3>{{ $monthName }}</h3>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- カレンダーデータの表示 -->
                    <?php $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $currentYear); ?>
                    
                    @for ($day = 1; $day <= $daysInMonth; $day++)
                        <tr>
                            <td>{{ $day }}</td>
                            <td>
                                @foreach ($calendars as $calendar)
                                    @if (date('m', strtotime($calendar->date)) == $month && date('d', strtotime($calendar->date)) == $day)
                                        {{ $calendar->event }}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        @endfor
    </div>
</body>
</html>