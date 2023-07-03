<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at'];

    public function departmentByTeacher()
    {
        return $this->hasOne(DepartmentByTeacher::class);
    }
}
