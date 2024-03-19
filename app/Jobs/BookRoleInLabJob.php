<!-- <?php

namespace App\Jobs;

use App\Models\student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Repository\Eloquent\lab_appointmentsRepository;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class BookRoleInLabJob implements ShouldQueue
{
    protected $data;
    protected $studentId;
    protected $labAppointmentsRepository;

    public function __construct($data, $studentId, $labAppointmentsRepository)
    {
        $this->data = $data;
        $this->studentId = $studentId;
        $this->labAppointmentsRepository = $labAppointmentsRepository;
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

