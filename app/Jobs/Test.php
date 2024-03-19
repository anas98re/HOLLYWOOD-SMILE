<?php

namespace App\Jobs;

use App\Models\disease;
use App\Models\student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Repository\Eloquent\lab_appointmentsRepository;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class Test implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $studentId;
    protected $labAppointmentsRepository;

    public function __construct()
    {

    }


    public function handle()
    {
        $data = [
            //سنة رابعة - فصل اول
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'third', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'حالة إعادة تأهيل', 'number' => null],
        ];
        disease::insert($data)->delay(now()->addMinutes(1));
    }
//     public function handle()
//     {
//         $bookrole = $this->labAppointmentsRepository->create(array_merge($this->data, [
//             'is_end' => 'no',
//             'student_id' => $this->studentId,
//         ]));

//         // send notification to student

//         return $bookrole;
//     }
// }

}

