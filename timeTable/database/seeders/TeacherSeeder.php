<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'login_id' => 'kotani',
            'user_name' => 'kotani',
            'password' => 'password',
            'permit' => 1,
        ]);
        Teacher::create([
            'login_id' => 'kamano',
            'user_name' => 'kamano',
            'password' => 'password',
            'permit' => 0,
        ]);
    }
}
