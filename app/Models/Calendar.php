<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
<<<<<<< HEAD:timeTable/app/Models/Calendar.php
=======
<<<<<<<< HEAD:timeTable/app/Models/Subject.php
    protected $guarded = ['id', 'created_at'];
<<<<<<< HEAD:app/Models/Subject.php

    public function department_by_teacher()
    {
        return $this->hasOne(DepartmentByTeacher::class);
    }
=======
>>>>>>> c69e358c21c5ed358324ccbe2ca6dd9fef54e968:timeTable/app/Models/Subject.php
========
>>>>>>>> 72e26ed945979189523a1a93d4ad10312f6ac3fb:app/Models/Calendar.php
>>>>>>> 72e26ed945979189523a1a93d4ad10312f6ac3fb:app/Models/Calendar.php
}
