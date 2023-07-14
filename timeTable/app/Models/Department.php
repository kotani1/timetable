<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at'];
    public function department_by_teacher()
    {
        return $this->hasOne(DepartmentByTeacher::class);
    }
}
