<?php

namespace Database\Seeders;

use App\Models\patient_request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientRequestSeeder extends Seeder
{
    public function run()
    {
        patient_request::factory()->count(10)->create();
    }
}
