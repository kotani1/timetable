<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyTimeTable extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at'];

    public function subject_by_teacher()
    {
        return $this->belongsTo(SubjectByTeacher::class);
    }
}
