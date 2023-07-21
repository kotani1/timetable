<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('weekly_time_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('subject_by_teacher_id');
            $table->integer('department_by_teacher_id');
            $table->string('day_of_week', 30);
            $table->integer('period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_time_tables');
    }
};
