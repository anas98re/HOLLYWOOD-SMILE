<?php

namespace Database\Seeders;

use App\Models\student_request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentRequestSeeder extends Seeder
{
    public function run()
    {
        student_request::factory()->count(6)->create();
    }
}
