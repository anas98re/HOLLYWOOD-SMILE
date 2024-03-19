<?php

namespace App\Http\Controllers;

use App\Models\disease;
use App\Http\Requests\StorediseaseRequest;
use App\Http\Requests\UpdatediseaseRequest;
use App\Services\DiseaseService;

class DiseaseController extends BaseController
{
    private $MyServices;
    public function __construct(DiseaseService $MyServices)
    {
        $this->MyServices = $MyServices;
    }
    public function addAllDisease()
    {
        $data = [
            //سنة رابعة - فصل اول
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'الفحص السريري', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'فحص العقد اللمفاوية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'فحص المفصل الفكي الصدغي والعضلات الماضغة', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'فحص الغدد اللعابية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'فحص الأعصاب القحفية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'التشخيص الشعاعي لآفات وأمراض الفكين', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'التشخيص المخبري-ورقة إحالة', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'أمراض الشفاه واللسان', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 1', 'clinical_condition' => 'آفة تقرحية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية1', 'clinical_condition' => 'عمل مخبري', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => 'تخدير وقلع1', 'clinical_condition' => 'قلع أسنان ماعدا الأرحاء السفلية مع تخدير بالارتشاح', 'number' => '8'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم التعويضات المتحركة', 'subject' => 'تعويضات متحركة', 'clinical_condition' => 'بدلة جزئية', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم علم نسج حول سنية', 'subject' => 'أمراض نسج حول سنية', 'clinical_condition' => 'حالة تلقيح-درجة ثانية', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم علم نسج حول سنية', 'subject' => 'أمراض نسج حول سنية', 'clinical_condition' => 'حالة تلقيح-درجة أولى', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم علم نسج حول سنية', 'subject' => 'أمراض نسج حول سنية', 'clinical_condition' => 'تسوية جذور', 'number' => '8'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم التقويم', 'subject' => 'تقويم 1', 'clinical_condition' => 'Zik Zak', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم التقويم', 'subject' => 'تقويم 1', 'clinical_condition' => 'قناطر', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم التقويم', 'subject' => 'تقويم 1', 'clinical_condition' => 'قوس هولي', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم التقويم', 'subject' => 'تقويم 1', 'clinical_condition' => 'ضامات', 'number' => '3'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الأملغم:الصنف الأول رحى سفلية أو علوية', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الأملغم:الصنف الأول ضاحك علوي أو سفلي', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الأملغم:الصنف الثاني رحى أو ضاحك(بدون درد مجاور)', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الأملغم:الصنف الخامس رحى سفلية أو علوية', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت مع [تطبيق الحاجز المطاطي:الصنف الأول رحى أو ضاحك', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت مع تطبيق الحاجز المطاطي:الصنف الثالث (بدون درد مجاور)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت مع تطبيق الحاجز المطاطي:الصنف الرابع (بدون درد مجاور)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'first', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت مع تطبيق الحاجز المطاطي:الصنف الخامس', 'number' => '1'],

            //سنة رابعة فصل ثاني
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم 2', 'clinical_condition' => 'أعمال الكومبوزت مع تطبيق الحاجز المطاطي:الصنف الخامس', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'عمل مخبري', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم التقويم', 'subject' => 'تقويم 2', 'clinical_condition' => 'عمل مخبري', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => 'تخدير وقلع2', 'clinical_condition' => 'قلع أسنان ماعدا الأرحاء السفلية مع تخدير بالارتشاح', 'number' => '8'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم التعويضات المتحركة', 'subject' => 'تعويضات متحركة', 'clinical_condition' => 'بدلة كاملة', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم التعويضات الثابتة', 'subject' => 'تعويضات ثابتة', 'clinical_condition' => 'تاج مفرد', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم التعويضات الثابتة', 'subject' => 'تعويضات ثابتة', 'clinical_condition' => 'تاج مفرد', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'حفرة صنف ثاني على رحى مؤقتة إكريل', 'number' => '4'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بتر لب على رحى مؤقتة مقلوعة(علوية وسفلية)', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بطاقة تسخيص سريري', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بطاقة تشخيص شعاعي مع صورة بانورامية', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'تطبيق فلور موضعي(سريري)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'ترميم محافظ صنف ثاني على أرحاء مؤقتة(سريري)', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'تطبيق السيلانت', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بتر لب على أرحاء مؤقتة (سريري)', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'أمراض الشفاه واللسان', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'قرحات قلاعية ناكسة', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'التدرب على كتابة الوصفات الطبية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'التدرب على كتابة تقرير طبي', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'آفة فطرية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'آفة فموية صباغية فيزيولوجية أو مرضية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'المظاهر الفموية لمتلازمة  أو مرض مناعي', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'التشخيص الشعاعي لحالة مرضية', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'عقدة مجسوسة أو آفة محتملة الخباثة', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fourth', 'Semester' => 'second', 'Department' => 'قسم طب الفم', 'subject' => 'أمراض فم2', 'clinical_condition' => 'أعمال إضافية مميزة', 'number' => null],

            //سنة خامسة فصل اول
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => 'تخدير وقلع', 'clinical_condition' => 'حقن تخدير ناحي', 'number' => '8'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم التعويضات المتحركة', 'subject' => 'تعويضات متحركة', 'clinical_condition' => 'بدلة كاملة', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية', 'clinical_condition' => 'سن أمامي', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية', 'clinical_condition' => 'سن ضاحك', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية', 'clinical_condition' => 'رحى علوي وسفلي', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم التعويضات الثابتة', 'subject' => 'تعويضات ثابتة', 'clinical_condition' => ' جسر', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => 'زرع', 'clinical_condition' => 'دراسة حالة زرع', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'معالجة لبية على رحى مقلوعة', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بطاقة تشخيص سريري', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'معالجة لبية على رحى مؤقتة', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'سيلانت أو فلور', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بتر لب على أرحاء مؤقتة', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'ترميم محافظ على أرحاء مؤقتة(صنف ثاني)', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'بطاقة تشخيص شعاعي تدبير حافظة مسافة وفق الاستمارة والأشعة والأمثلة الجبسية', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'تطبيق حافظة المسافة في فم المريض(اختياري)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'ترميم تجميلي محافظ على سن مؤقتة (اختياري)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'first', 'Department' => 'قسم طب أسنان الأطفال', 'subject' => 'طب أسنان أطفال', 'clinical_condition' => 'تاج ستانلس ستيل', 'number' => '1'],


            //سنة خامسة فصل ثاني
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => 'تخدير وقلع', 'clinical_condition' => 'حقن تخدير ناحي', 'number' => '8'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم التعويضات الثابتة', 'subject' => 'تعويضات ثابتة', 'clinical_condition' => ' قلب ووتد معدني لسن مفرد القناة مع تتويج', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم التقويم', 'subject' => 'تقويم 3', 'clinical_condition' => 'عمل مخبري', 'number' => null],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم علم نسج حول سنية', 'subject' => 'أمراض نسج حول سنية', 'clinical_condition' => 'حالة تلقيح-درجة أولى', 'number' => '2'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم علم نسج حول سنية', 'subject' => 'أمراض نسج حول سنية', 'clinical_condition' => 'حالة تلقيح-درجة ثانية', 'number' => '4'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم علم نسج حول سنية', 'subject' => 'أمراض نسج حول سنية', 'clinical_condition' => 'تسوية جذور', 'number' => '8'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'سن أمامي', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'سن ضاحك', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'رحى علوي وسفلي', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'سن أمامي (عفنة إو إعادة معالجة)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'سن ضاحك(عفنة)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداواة', 'subject' => 'مداواة لبية2', 'clinical_condition' => 'رحى علوي وسفلي(عفنة)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الأملغم:الصنف الثاني رحى أو ضاحك(بدون درد مجاور)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الأملغم:واسعة تهدم(معالجة لبية – أوتاد)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت: الصنف الخامس(مع تطبيق حاجز مطاطي)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت: الصنف الثاني رحى أو ضاحك(دون درد مجاور- مع تطبيق حاجز مطاطي)', 'number' => '3'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت: الصنف الثالث(دون درد مجاور)', 'number' => '1'],
            ['type' => 'Bachelor_Degree', 'specialization' => null, 'year' => 'fifth', 'Semester' => 'second', 'Department' => 'قسم المداوة', 'subject' => 'ترميمية', 'clinical_condition' => 'أعمال الكومبوزت: الصنف الرابع(دون درد مجاور)', 'number' => '1'],


            //ماستر- اختصاص طب أسنان الأطفال –سنة أولى
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'إجراءات وقائية', 'number' => '15'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'بتر اللب(مؤقت)', 'number' => '20'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'بتر اللب(دائم)', 'number' => '4'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'معالجة لبية كاملة(مؤقت)', 'number' => '4'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'معالجة لبية كاملة(دائم)', 'number' => '4'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'ترميمات مختلفة', 'number' => '30'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'حافظة مسافة', 'number' => '5'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'تدبير العادات الفموية', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'الإجراءات التقويمية', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'جراحة وقلع', 'number' => '15'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'اضطرابات تطورية', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'تدبير حالات احتياجات الخاصة', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'تدبير رضوض الأسنان', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'أعمال إضافية متنوعة', 'number' => null],

            //ماستر- اختصاص طب أسنان الأطفال –سنة ثانية
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => ' إجراءات وقائية', 'number' => '35'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'بتر اللب(مؤقت)', 'number' => '50'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'بتر اللب(دائم)', 'number' => '6'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'معالجة لبية كاملة(مؤقت)', 'number' => '6'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'معالجة لبية كاملة(دائم)', 'number' => '10'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'ترميمات مختلفة', 'number' => '100'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'حافظة مسافة', 'number' => '15'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'تدبير العادات الفموية', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'الإجراءات التقويمية', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'جراحة وقلع', 'number' => '50'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'اضطرابات تطورية', 'number' => '6'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'تدبير حالات احتياجات الخاصة', 'number' => '6'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'تدبير رضوض الأسنان', 'number' => '8'],
            ['type' => 'Master_Degree', 'specialization' => 'طب أسنان الأطفال', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب أسنان الأطفال', 'subject' => null, 'clinical_condition' => 'أعمال إضافية متنوعة', 'number' => null],

            //ماستر- اختصاص تعويضات ثابتة –سنة أولى
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'تيجان', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'جسور', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'قلوب', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'أوتاد فايبر', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'inlay', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'onlay', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'اندوكروان', 'number' => null],

            //ماستر- اختصاص تعويضات ثابتة –سنة ثانية
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'حالة رفع بعد', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'حالة إعادة تأهيل', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'حالات تجميل', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات الثابتة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات الثابتة', 'subject' => null, 'clinical_condition' => 'تعويض فوق زرع', 'number' => null],


            //ماستر- اختصاص تعويضات متحركة –سنة أولى
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة كاملة(علوي أو سفلي أو كليهما)', 'number' => '8'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة جزئية أكريلية', 'number' => '5'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة جزئية معدنية', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'متابعة حالة زرعتين مع أوفردننشر بكل مراحلها(الجراحية والتعويضية)مع أحد طلاب الدراسات السنة الثانية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:جهاز كامل لمريض مقعد خارج الكلية', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:تعويض فكي وجهي', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:تعويض فوق الجذور مع أو بدون وصلات', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:تعويض فوق غرسات(متحرك أو ثابت طويل)', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:إعادة تأهيل الفم(حالات تشمل معالجات لبية + أوتاد وقلوب+ تيجان +جهاو متحرك)', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:جهاز فوري ', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أعمال أخرى:تبطين قاسي أو مرن', 'number' => '1'],


            //ماستر- اختصاص تعويضات متحركة –سنة ثانية
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة كاملة (علوي أو سفلي أو كليهما)', 'number' => '5'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة جزئية إكريلية', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة جزئية معدنية', 'number' => '4'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'جهاز كامل لمريض مقعد خارج الكلية', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'تعويض فكي وجهي', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'تعويض فوق الغرسات(متحرك أو ثابت طويل يشمل أكثر من 3 أسنان)', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'أجهزة فوق الجذور (مع أو بدون وصلات )', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'حالات الإصلاح (تبطين أو إضافة سن أو ضامة)', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'إعادة تأهيل الفم', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'جهاز فوري', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'تعويضات المتحركة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التعويضات المتحركة', 'subject' => null, 'clinical_condition' => 'زرعتين في الفك السفلي مع أوفردنشر (المراحل الجراحية والتعويضية )', 'number' => null],

            //ماستر- اختصاص لثة –سنة أولى
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'تقليح+تسوية جذور', 'number' => 20],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'قطع لثة', 'number' => 2],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'قطع لجام', 'number' => 2],

            //ماستر- اختصاص لثة –سنة ثانية
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'تجريف مفتوح', 'number' => 20],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'شرائح مزاحة', 'number' => 10],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'طعم ضام', 'number' => 10],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'طعم بشروي (تعميق ميزاب)', 'number' => 10],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'GTR', 'number' => 2],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'GBR او رفع جيب', 'number' => 2],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'كشف ناب منطمر', 'number' => 5],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'قطع لثة', 'number' => 10],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'زرع', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'تدبير التصبغات اللثوية', 'number' => 10],
            ['type' => 'Master_Degree', 'specialization' => 'لثة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم علم نسج حول سنية', 'subject' => null, 'clinical_condition' => 'تطويل تيجان', 'number' => 10],


            //ماستر- اختصاص جراحة –سنة أولى و ثانية
            ['type' => 'Master_Degree', 'specialization' => 'جراحة', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => null, 'clinical_condition' => 'أي حالة تحتاج جراحة', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'جراحة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم جراحة الوجه والفكين', 'subject' => null, 'clinical_condition' => 'أي حالة تحتاج جراحة', 'number' => null],

            //ماستر- اختصاص تقويم –سنة أولى و ثانية
            ['type' => 'Master_Degree', 'specialization' => 'تقويم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم التقويم', 'subject' => null, 'clinical_condition' => 'أي حالة تحتاج نقويم', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'جراحة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم التقويم', 'subject' => null, 'clinical_condition' => 'أي حالة تحتاج تقويم', 'number' => null],

            //ماستر- اختصاص لبية –سنة أولى و ثانية
            ['type' => 'Master_Degree', 'specialization' => 'لبية', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'أي حالة تحتاج معالجة لبية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'جراحة', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'أي حالة تحتاج مداواة', 'number' => null],

            //ماستر- اختصاص أمراض الفم –سنة أولى
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'طريقة الفحص السريري', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'آفة فموية بيضاء(خزعة أو مسحة+متابعة)', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'آفة فموية حمراء(خزعة +متابعة)', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'آفة فموية تقرحية(متابعة حالة)', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'آفة حلئية(متابعة حالة)', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'أمراض اللسان(متابعة حالة)', 'number' => '3'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'اضطراب المفصل الفكي الصدغي(تشخيص +معالجة)', 'number' => '2'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'آفة فموية صباغية (تشخيص)', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'آفة فموية صباغية (معالجة بالليزر)', 'number' => '1'],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'معالجة وقائية للأسنان (دراسة حالة –حافظات مسافة)', 'number' => '2'],

            //ماستر- اختصاص أمراض الفم –سنة ثانية
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'جراحات صغرى', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'قلوع جراحية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'اسئصال آفات ورمية قبل الانتشار', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'زرع', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'قطع لثة', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'إزالة تصبغات لثوية بالليزر', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'طب الفم', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم طب الفم', 'subject' => null, 'clinical_condition' => 'حالات متنوعة', 'number' => null],

            //ماستر- اختصاص التجميل –سنة أولى
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تنظيف أسنان', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تقليح أسنان', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تبييض أسنان', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'ترميمات كومبوزيت مباشرة', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'ترميمات كومبوزيت غير مباشرة', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تغطيات ومعالجات لبية بكافة أشكالها', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'فايبر بوست', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'first', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تيجان وجسور', 'number' => null],

            //ماستر- اختصاص التجميل –سنة ثانية
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تيجان وجسور بكل أنواعها', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'ترميمات ضمنية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'مغطية خزفية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'اندوكراون', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'فينير', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'أوتاد الفايبر', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'قلب ووتد معدني', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'قطع لثة', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تطويل تيجان تعويضي', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'إزالة تصبغات لثوية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'معالجة ابتسامات لثوية بسيطة', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'قطع لجام', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'second', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'زرع', 'number' => null],

            //ماستر- اختصاص التجميل –سنة ثالثة
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'third', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'حالة إعادة تأهيل', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'third', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'فينير', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'third', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'تيجان تجميلية', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'third', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'وجوه كومبوزيت', 'number' => null],
            ['type' => 'Master_Degree', 'specialization' => 'تجميل', 'year' => 'third', 'Semester' => null, 'Department' => 'قسم المداواة', 'subject' => null, 'clinical_condition' => 'بوتوكس و فيلر', 'number' => null],

        ];

        disease::insert($data);
        return $this->sendResponse($data, 'Diseases added successfully');
    }

    public function getAllClinicalCondetionsInfo()
    {
        $ClinicalCondetions  = $this->MyServices->getAllClinicalCondetionsInfo();
        return $this->sendResponse($ClinicalCondetions, 'These are all Clinical Conditions Info');
    }

    public function getClinicalCondetionsInfoByDepartment($department)
    {
        $ClinicalCondetions  = $this->MyServices->getClinicalCondetionsInfoByDepartment($department);
        return $this->sendResponse($ClinicalCondetions, 'These are Clinical Conditions Info');
    }
}
