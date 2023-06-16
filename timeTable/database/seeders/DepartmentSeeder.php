<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            "department_name"  => "情報システム",
        ]);
        Department::create([
            "department_name"  => "AIテクノロジー",
        ]);
        Department::create([
            "department_name"  => "ネットワークセキュリティ",
        ]);
    }
}
