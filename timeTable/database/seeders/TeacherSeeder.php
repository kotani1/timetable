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
            'login_id' => 'admin',
            'user_name' => '管理者',
            'password' => 'password',
            'permit' => 3,
        ]);

        Teacher::create([
            'login_id' => 'shiota',
            'user_name' => '塩田　和正',
            'password' => 'password',
            'permit' => 1,
        ]);
        Teacher::create([
            'login_id' => 'hiramatsu',
            'user_name' => '平松　賢治',
            'password' => 'password',
            'permit' => 0,
        ]);
        Teacher::create([
            'login_id' => 'kajikawa',
            'user_name' => '梶河　やすこ',
            'password' => 'password',
            'permit' => 1,
        ]);
        Teacher::create([
            'login_id' => 'gouda',
            'user_name' => '合田　ゆりこ',
            'password' => 'password',
            'permit' => 0,
        ]);
        Teacher::create([
            'login_id' => 'kibe',
            'user_name' => '木部　克明',
            'password' => 'password',
            'permit' => 0,
        ]);
    }
}
