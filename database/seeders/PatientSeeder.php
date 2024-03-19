<?php

namespace Database\Seeders;

use App\Models\patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run()
    {
        patient::factory()->count(20)->create();
    }
}
