<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at'];
<<<<<<< HEAD:app/Models/Subject.php

    public function department_by_teacher()
    {
        return $this->hasOne(DepartmentByTeacher::class);
    }
=======
>>>>>>> c69e358c21c5ed358324ccbe2ca6dd9fef54e968:timeTable/app/Models/Subject.php
}
