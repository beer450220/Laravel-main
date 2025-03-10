<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Event;
use App\Models\schedule;
use App\Models\Evaluationdocument;
use App\Models\registers;
use Carbon\Carbon;
use App\Models\major;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\File;
use App\Models\test;
use App\Models\establishment;
use App\Models\informdetails;
use App\Models\report;
use App\Models\teacher;
use App\Models\category;
use App\Models\supervision;
use App\Models\acceptance;
use App\Models\permission;
use App\Models\schedules;
use App\Models\student;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function establishmentedit01($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);

         return view('cooperative.establishmentuserview',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

     public function establishmentedit02($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);

        // $establishments1=DB::table('establishment')->find($id);
        //  dd($establishments);
        $registers=DB::table('establishment')

        //  ->join('category', 'establishment.category_id', '=', 'category.id')
        //  ->select('establishment.*', 'category.name as category_name')
         ->join('category','establishment.id','category.category_id')
         ->select('establishment.*','category.name')
         ->paginate(5);

         $establishmentsWithSameCategory = DB::table('establishment')
    ->join('category', 'establishment.category_id', '=', 'category.category_id')
    ->where('establishment.category_id',[$establishments->category_id])
    ->select('establishment.*', 'category.name as category_name')
    ->paginate(5);
//dd($id,$establishmentsWithSameCategory);
    $registers=DB::table('establishment')

        //  ->join('category', 'establishment.category_id', '=', 'category.id')
        //  ->select('establishment.*', 'category.name as category_name')
         ->join('category','establishment.id','category.category_id')
         ->select('establishment.*','category.name')
         ->paginate(5);
         return view('cooperative.establishment01',compact('establishments','registers','establishmentsWithSameCategory'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

     public function establishmentedit03($category_id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        // $establishments=DB::table('category')->find($category_id);
        $major=category::find($category_id);
        // $establishments1=DB::table('establishment')->find($id);
        //  dd($establishments);
        $registers=DB::table('establishment')

        //  ->join('category', 'establishment.category_id', '=', 'category.id')
        //  ->select('establishment.*', 'category.name as category_name')
         ->join('category','establishment.id','category.category_id')
         ->select('establishment.*','category.name')
         ->paginate(5);

    //      $establishmentsWithSameCategory = DB::table('establishment')
    // ->join('category', 'establishment.category_id', '=', 'category.category_id')
    // ->where('establishment.category_id',[$establishments->category_id])
    // ->select('establishment.*', 'category.name as category_name')
    // ->paginate(5);

          $establishmentsWithSameCategory = DB::table('establishment')
    ->join('category', 'establishment.category_id', '=', 'category.category_id')
    ->where('establishment.category_id',[$major->category_id])
    ->select('establishment.*', 'category.name as category_name')
    ->paginate(5);
//dd($id,$establishmentsWithSameCategory);
    $registers=DB::table('establishment')

        //  ->join('category', 'establishment.category_id', '=', 'category.id')
        //  ->select('establishment.*', 'category.name as category_name')
         ->join('category','establishment.id','category.category_id')
         ->select('establishment.*','category.name')
         ->paginate(5);

         $registers1=DB::table('category')
         ->paginate(5);

        $registers2=DB::table('major')
        ->paginate(5);
         return view('cooperative.establishment01',compact('registers','major','establishmentsWithSameCategory','registers1','registers2'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }



//studentHome


    public function studentHome()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $establishment=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $acceptance=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')->where('user_id', auth()->id())
        // ->orderBy('namefile', 'asc')
        ->paginate(5);
    //     $establishment = DB::table('establishment')
    // ->join('student', 'establishment.student_id', '=', 'student.student_id')
    // ->get();
        // dd( $student);
//   dd( $establishment);
        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers8=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile','แบบตอบรับและเสนองานนักศึกสหกิจศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);



        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('student.studenthome',compact('registers','registers1','student','establishment','acceptance'


        ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8'));
    }

    public function in2()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $establishment=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $acceptance=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);
    //     $establishment = DB::table('establishment')
    // ->join('student', 'establishment.student_id', '=', 'student.student_id')
    // ->get();
        // dd( $student);
//   dd( $establishment);
        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')
        ->where('user_id', auth()->id())
        ->paginate(5);



        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers08=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers008=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers0008=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers8=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers9=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers10=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
        ->where('user_id', auth()->id())
        ->paginate(5);

$userId = auth()->user()->username;
        $registers12=DB::table('events')
        // ->join('users','events.student_name','users.id')
        ->select('events.*')
        ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
        // ->where('student_name', auth()->id())

->whereRaw("FIND_IN_SET('$userId', student_name)")
        ->get();
        // dd($registers12);
        $registers012=DB::table('events')
        // ->join('users','events.student_name','users.id')
        ->select('events.*')
        ->where('events.namefiles1', 'สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา')
        // ->where('student_name', auth()->id())
        ->whereRaw("FIND_IN_SET('$userId', student_name)")
        ->get();
        $registers13=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers14=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers15=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers16=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('student.in2',compact('registers','registers1','student','establishment','acceptance','registers2'
        ,'registers3','registers4','registers5','registers6','registers7','registers8','registers9','registers10'
        ,'registers12' ,'registers13','registers14','registers15','registers16','registers08','registers008','registers0008' ,'registers012'
       ));
    }

    public function in3()
    {
        $registers=DB::table('registers')
        ->join('users', 'registers.user_id', '=', 'users.id')
        ->join('acceptance', 'registers.user_id', '=', 'acceptance.user_id')
        // ->join('informdetails', 'registers.user_id', '=', 'informdetails.user_id')
        ->select(
            'registers.*',
        'users.fname',
        // 'users.surname',
        'acceptance.namefile AS acceptance_namefile',
        'acceptance.user_id AS acceptance_user_id',
        // 'acceptance.user_id AS acceptance_user_id',
        // 'informdetails.user_id AS informdetails_user_id',
        // 'informdetails.namefile AS informdetails_namefile'
        )


        // ->where('user_id', auth()->id())
        ->paginate(10);
        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        // ->where('user_id', auth()->id())
        ->where('role',"student")

        ->orderBy('registers.id', 'DESC')
        ->paginate(5);

        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);


        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $establishment=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $acceptance=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);


        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);



        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        // ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        // ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);

        $registers17=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('acceptance.acceptance_id', 'DESC')
        ->paginate(5);

        $registers017=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('acceptance.acceptance_id', 'DESC')
        ->paginate(5);
        $registers0017=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('acceptance.acceptance_id', 'DESC')
        ->paginate(5);

        $registers8=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('informdetails.informdetails_id', 'DESC')
        ->paginate(5);

        $registers9=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('informdetails.informdetails_id', 'DESC')
        ->paginate(5);
        $registers10=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('informdetails.informdetails_id', 'DESC')
        ->paginate(5);


        $registers12=DB::table('events')
        ->join('users','events.student_name','users.id')
        ->select('events.*','users.fname')
        ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
        // ->where('student_name', auth()->id())
        ->where('role',"student")
        ->orderBy('events.id', 'DESC')
        ->paginate(5);
        $registers012=DB::table('events')
        ->join('users','events.student_name','users.id')
        ->select('events.*','users.fname')
        ->where('events.namefiles1', 'สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา')
        // ->where('student_name', auth()->id())
        ->where('role',"student")
        ->orderBy('events.id', 'DESC')
        ->paginate(5);
        $registers13=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        $registers14=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        $registers15=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        $registers16=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('teacher.in2',compact('registers','registers1','student','establishment','acceptance','registers2'
        ,'registers3','registers4','registers5','registers6','registers7','registers8','registers9','registers10'
        ,'registers12' ,'registers13','registers14','registers15','registers16','registers17','registers017','registers0017','registers012'
       ));
    }


    public function in4()
    {
        $registers=DB::table('registers')
        ->join('users', 'registers.user_id', '=', 'users.id')
        ->join('acceptance', 'registers.user_id', '=', 'acceptance.user_id')
        // ->join('informdetails', 'registers.user_id', '=', 'informdetails.user_id')
        ->select(
            'registers.*',
        'users.fname',

        'acceptance.namefile AS acceptance_namefile',
        'acceptance.user_id AS acceptance_user_id',
        // 'acceptance.user_id AS acceptance_user_id',
        // 'informdetails.user_id AS informdetails_user_id',
        // 'informdetails.namefile AS informdetails_namefile'
        )


        // ->where('user_id', auth()->id())
        ->paginate(10);
        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);

        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);


        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $establishment=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $acceptance=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);


        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('registers.id', 'DESC')
        ->paginate(5);



        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->paginate(5);

        $registers17=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('acceptance.acceptance_id', 'DESC')
        ->paginate(5);

        $registers017=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('acceptance.acceptance_id', 'DESC')
        ->paginate(5);
        $registers0017=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile', 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('acceptance.acceptance_id', 'DESC')
        ->paginate(5);


        $registers8=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('informdetails.informdetails_id', 'DESC')
        ->paginate(5);

        $registers9=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('informdetails.informdetails_id', 'DESC')
        ->paginate(5);
        $registers10=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('informdetails.informdetails_id', 'DESC')
        ->paginate(5);


        $registers12=DB::table('events')
        ->join('users','events.student_name','users.id')
        ->select('events.*','users.fname')
        ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
        // ->where('student_name', auth()->id())
        ->where('role',"student")
        ->orderBy('events.id', 'DESC')
        ->paginate(5);
        $registers012=DB::table('events')
        ->join('users','events.student_name','users.id')
        ->select('events.*','users.fname')
        ->where('events.namefiles1', 'สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา')
        // ->where('student_name', auth()->id())
        ->where('role',"student")
        ->orderBy('events.id', 'DESC')
        ->paginate(5);
        $registers13=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        $registers14=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        $registers15=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
        // ->where('user_id', auth()->id())
        ->where('role',"student")
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        $registers16=DB::table('supervision')
        ->join('users','supervision.user_id','users.id')
        ->select('supervision.*','users.fname')
        ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
        ->where('role',"student")
        // ->where('user_id', auth()->id())
        ->orderBy('supervision.supervision_id', 'DESC')
        ->paginate(5);
        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('officer.in2',compact('registers','registers1','student','establishment','acceptance','registers2'
        ,'registers3','registers4','registers5','registers6','registers7','registers8','registers9','registers10'
        ,'registers12' ,'registers13','registers14','registers15','registers16','registers17','registers017','registers0017','registers012'
       ));
    }
    public function studentHome3()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);


        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers8=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile','แบบตอบรับและเสนองานนักศึกสหกิจศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);



        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('student.studenthome',compact('registers','registers1','student'


        ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8'));
    }


    public function studentHome1()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $registers01=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.Status_registers', 'รออนุมัติ','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $establishment=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

    //     $establishment = DB::table('establishment')
    // ->join('student', 'establishment.student_id', '=', 'student.student_id')
    // ->get();
        // dd( $student);
//   dd( $establishment);
        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers8=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile','แบบตอบรับและเสนองานนักศึกสหกิจศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);



        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('student.studenthome2',compact('registers','registers1','student','establishment'

        ,'registers01'
        ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8'));
    }

    public function personal()
    {
        return view('student.personal',["msg"=>"I am Editor role"]);
    }

    public function personal01()
    {
        return view('teacher.personal',["msg"=>"I am Editor role"]);
    }
    public function personal02()
    {
        return view('officer.personal',["msg"=>"I am Editor role"]);
    }
    public function personal04()
    {
        return view('admin.personal',["msg"=>"I am Editor role"]);
    }
    public function personal2($student_id)
    {
// dd($student_id);
    //  $users=student::find($student_id);
     $users = student::find($student_id);
//  dd($users);
     // $acceptances=DB::table('acceptance')->first();
      //$establishment=DB::table('establishment')
      // ->join('supervision','supervision.supervision_id')
       //->join('supervision', 'establishments.id', '=', 'supervision.id')
      // ->select('supervision.*','establishment.*')
     // ->get();
      //dd($acceptances);
       // dd($Evaluationdocuments);
       $major=DB::table('major')

       ->get();
       $major1=DB::table('notify')
       ->get();
        return view('student.personal2',["msg"=>"I am Editor role"],compact('users','major','major1'));
    }

    public function personal3()
    {

    //  $users=establishment::find($id);

     // $acceptances=DB::table('acceptance')->first();
      //$establishment=DB::table('establishment')
      // ->join('supervision','supervision.supervision_id')
       //->join('supervision', 'establishments.id', '=', 'supervision.id')
      // ->select('supervision.*','establishment.*')
     // ->get();
      //dd($acceptances);
       // dd($Evaluationdocuments);
       $major=DB::table('major')

       ->paginate(5);
       $student=DB::table('student')
       ->orderBy('student_id', 'desc')
       ->paginate(10);
        return view('student.personal02',["msg"=>"I am Editor role"],compact('major',"student"));
    }
    public function personal03()
    {

      $users=establishment::find($id);

     // $acceptances=DB::table('acceptance')->first();
      //$establishment=DB::table('establishment')
      // ->join('supervision','supervision.supervision_id')
       //->join('supervision', 'establishments.id', '=', 'supervision.id')
      // ->select('supervision.*','establishment.*')
     // ->get();
      //dd($acceptances);
       // dd($Evaluationdocuments);
       $major=DB::table('major')

       ->paginate(5);

        return view('student.personal2',["msg"=>"I am Editor role"],compact('users','major'));
    }
    public function personal1()
    {
       $major=DB::table('major')

        ->paginate(5);
        $major1=DB::table('notify')
        ->orderBy('updated_at','desc')
        ->get();
        return view('student.personal1',["msg"=>"I am Editor role"],compact('major','major1'));
    }
    public function personal4($id)
    {
        $users=establishment::find($id);
        $major=DB::table('major')

        ->paginate(5);
        // dd($users);
        $student=DB::table('student')
        ->orderBy('student_id', 'desc')
        ->get();
        return view('student.personal3',["msg"=>"I am Editor role"],compact('major','student','users'));
    }
    public function addToCart($id)
    {
        $product = establishment::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "images" => $product->images,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function cart()
    {
        $establishments=DB::table('establishment') ->orderBy('name','desc')->paginate(6);
        return view('student.cart',compact('establishments'));
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }


    public function search(Request $request){


        //$search = $request->input('search');

        // $establishments =establishment::where(function($query) use ($search){

        //     $query->where('name','like',"%$search%")
        //     ->orWhere('address','like',"%$search%");

        //     })

        //     ->get();


                // $establishments =establishment::where('name','like',"%$search%")
                // ->orWhere('address','like',"%$search%")->get();


                $keyword = $request->input('keyword');
//dd($request);
                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                $establishments = establishment::query()
                    ->where('em_name', 'LIKE', '%' . $keyword . '%')
                    //->get();
                    ->paginate(6);

                return view('student.establishmentuser4', ['establishments' => $establishments]);

           // return view('student.establishmentuser',compact('establishments','search'));

    }
    public function searchadmin(Request $request){

// dd($request);
        //$search = $request->input('search');

        // $establishments =establishment::where(function($query) use ($search){

        //     $query->where('name','like',"%$search%")
        //     ->orWhere('address','like',"%$search%");

        //     })

        //     ->get();


                // $establishments =establishment::where('name','like',"%$search%")
                // ->orWhere('address','like',"%$search%")->get();


                $keyword = $request->input('keyword');
//dd($request);
$users=DB::table('users')



                    ->paginate(5);
                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                $users = users::query()
                    ->where('username', 'LIKE', '%' . $keyword . '%')
                    ->where('fname', 'LIKE', '%' . $keyword . '%')
                    //->get();
        ->orderBy('users.updated_at', 'desc')

                    ->paginate(5);


                    // return view('admin.user',compact('users'),["msg"=>"I am Admin role"]);
                return view('admin.user', ['users' => $users]);

           // return view('student.establishmentuser',compact('establishments','search'));

    }
    public function searchuser(Request $request){

        // dd($request);
                //$search = $request->input('search');

                // $establishments =establishment::where(function($query) use ($search){

                //     $query->where('name','like',"%$search%")
                //     ->orWhere('address','like',"%$search%");

                //     })

                //     ->get();


                        // $establishments =establishment::where('name','like',"%$search%")
                        // ->orWhere('address','like',"%$search%")->get();


                        $keyword = $request->input('keyword');
        //dd($request);
        $users=DB::table('users')



                            ->paginate(5);
                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                        $users = users::query()
                            ->where('username', 'LIKE', '%' . $keyword . '%')
                            //->get();
                            ->paginate(5);


                            // return view('admin.user',compact('users'),["msg"=>"I am Admin role"]);
                        return view('teacher.user', ['users' => $users]);

                   // return view('student.establishmentuser',compact('establishments','search'));

            }
    public function search1(Request $request){


        //$search = $request->input('search');

        // $establishments =establishment::where(function($query) use ($search){

        //     $query->where('name','like',"%$search%")
        //     ->orWhere('address','like',"%$search%");

        //     })

        //     ->get();


                // $establishments =establishment::where('name','like',"%$search%")
                // ->orWhere('address','like',"%$search%")->get();


                $keyword = $request->input('keyword');
//dd($request);
                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล

                $establishments = establishment::query()
                    ->where('em_name', 'LIKE', '%' . $keyword . '%')
                    //->get();
                    ->paginate(6);
                    $registers=DB::table('establishment')
                     ->join('category','establishment.id','category.category_id')
                     ->select('establishment.*','category.name')
                     ->paginate(5);
                     $registers1=DB::table('category')
                     ->paginate(5);
                return view('cooperative.establishment', ['establishments' => $establishments,'registers' => $registers,'registers1' => $registers1]);

           // return view('student.establishmentuser',compact('establishments','search'));

    }
    public function searchcooperative2(Request $request){



                $keyword = $request->input('keyword');
//dd($request);
                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                $users=DB::table('users')

                -> where('role','student')
       ->orWhere('role', '=', '0')


               ->paginate(5);
                $users = users::query()
                ->where(function($query) use ($keyword) {
                    $query->where('role', 'student')
                        ->orWhere('role', '0');
                })
                ->where(function($query) use ($keyword) {
                    $query->where('username', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('fname', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('surname', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('year', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('term', 'LIKE', '%' . $keyword . '%');
                })
                    ->paginate(5);


                return view('cooperative.cooperative2', ['users' => $users,]);

           // return view('student.establishmentuser',compact('establishments','search'));

    }


    public function searchestablishment(Request $request){
//dd($request);

        //$search = $request->input('search');

        // $establishments =establishment::where(function($query) use ($search){

        //     $query->where('name','like',"%$search%")
        //     ->orWhere('address','like',"%$search%");

        //     })

        //     ->get();


                // $establishments =establishment::where('name','like',"%$search%")
                // ->orWhere('address','like',"%$search%")->get();


                $keyword = $request->input('keyword');
//dd($request);
                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                $establishments = establishment::query()
                    // ->where('em_name', 'LIKE', '%' . $keyword . '%')
                    // ->join('users', 'establishment.user_id', '=', 'users.id')
                    ->join('users', 'establishment.user_id', '=', 'users.id')
                    ->where(function ($query) use ($keyword) {
                        $query->where('establishment.em_name', 'LIKE', '%' . $keyword . '%')
                              ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                            //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                            //   ->orWhere('registers.term', 'LIKE', '%' . $keyword . '%')
                            //   ->orWhere('registers.year', 'LIKE', '%' . $keyword . '%');
                    })
                    ->select('establishment.*', 'users.fname')
                    ->paginate(5);
                    // $registers=DB::table('establishment')


                    //  ->join('category','establishment.id','category.category_id')
                    //  ->select('establishment.*','category.name')
                    //  ->paginate(5);



                    //  $registers1=DB::table('category')
                    //  ->paginate(5);

                     $searchTerm = $request->input('search');

        // ค้นหาผู้ใช้โดยใช้ Eloquent ORM
        $users = establishment::where('em_name', 'LIKE', "%{$searchTerm}%")
                     ->orWhere('em_name', 'LIKE', "%{$searchTerm}%")
                     ->get();


                return view('officer.establishmentuser1', compact('establishments','users'), ['establishments' => $establishments,]);

           // return view('student.establishmentuser',compact('establishments','search'));

    }


    public function searchestablishment1(Request $request){
        //dd($request);

                //$search = $request->input('search');

                // $establishments =establishment::where(function($query) use ($search){

                //     $query->where('name','like',"%$search%")
                //     ->orWhere('address','like',"%$search%");

                //     })

                //     ->get();


                        // $establishments =establishment::where('name','like',"%$search%")
                        // ->orWhere('address','like',"%$search%")->get();


                        $keyword = $request->input('keyword');
        //dd($request);
                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                        $establishments = establishment::query()
                            // ->where('em_name', 'LIKE', '%' . $keyword . '%')
                            // ->join('users', 'establishment.user_id', '=', 'users.id')
                            ->join('users', 'establishment.user_id', '=', 'users.id')
                            ->where(function ($query) use ($keyword) {
                                $query->where('establishment.em_name', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                                    //   ->orWhere('registers.term', 'LIKE', '%' . $keyword . '%')
                                    //   ->orWhere('registers.year', 'LIKE', '%' . $keyword . '%');
                            })
                            ->select('establishment.*', 'users.fname')
                            ->paginate(5);
                            // $registers=DB::table('establishment')


                            //  ->join('category','establishment.id','category.category_id')
                            //  ->select('establishment.*','category.name')
                            //  ->paginate(5);



                            //  $registers1=DB::table('category')
                            //  ->paginate(5);

                             $searchTerm = $request->input('search');

                // ค้นหาผู้ใช้โดยใช้ Eloquent ORM
                $users = establishment::where('em_name', 'LIKE', "%{$searchTerm}%")
                             ->orWhere('em_name', 'LIKE', "%{$searchTerm}%")
                             ->get();


                        return view('teacher.establishmentuser1', compact('establishments','users'), ['establishments' => $establishments,]);

                   // return view('student.establishmentuser',compact('establishments','search'));

            }


    public function searchstudent1(Request $request){
        //dd($request);

                //$search = $request->input('search');

                // $establishments =establishment::where(function($query) use ($search){

                //     $query->where('name','like',"%$search%")
                //     ->orWhere('address','like',"%$search%");

                //     })

                //     ->get();


                        // $establishments =establishment::where('name','like',"%$search%")
                        // ->orWhere('address','like',"%$search%")->get();


                        $keyword = $request->input('keyword');
        //dd($request);
                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                        $establishments = student::query()
                            // ->where('em_name', 'LIKE', '%' . $keyword . '%')
                            // ->join('users', 'establishment.user_id', '=', 'users.id')
                            ->join('users', 'student.user_id', '=', 'users.id')
                            ->where(function ($query) use ($keyword) {
                                $query->where('student.student_id', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                    //   ->orWhere('registers.term', 'LIKE', '%' . $keyword . '%')
                                    //   ->orWhere('registers.year', 'LIKE', '%' . $keyword . '%');
                            })
                            ->select('student.*', 'users.fname')
                            ->where('role',"student")
                                                            ->orderBy('id', 'desc')
                            ->paginate(5);
                            // $registers=DB::table('establishment')


                            //  ->join('category','establishment.id','category.category_id')
                            //  ->select('establishment.*','category.name')
                            //  ->paginate(5);



                            //  $registers1=DB::table('category')
                            //  ->paginate(5);

                             $searchTerm = $request->input('search');

                // ค้นหาผู้ใช้โดยใช้ Eloquent ORM
                $users = establishment::where('em_name', 'LIKE', "%{$searchTerm}%")
                             ->orWhere('em_name', 'LIKE', "%{$searchTerm}%")
                             ->get();


                        return view('officer.student', compact('establishments','users'), ['establishments' => $establishments,]);

                   // return view('student.establishmentuser',compact('establishments','search'));

            }
            public function searchstudent2(Request $request){
                //dd($request);

                        //$search = $request->input('search');

                        // $establishments =establishment::where(function($query) use ($search){

                        //     $query->where('name','like',"%$search%")
                        //     ->orWhere('address','like',"%$search%");

                        //     })

                        //     ->get();


                                // $establishments =establishment::where('name','like',"%$search%")
                                // ->orWhere('address','like',"%$search%")->get();


                                $keyword = $request->input('keyword');
                //dd($request);
                                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                $establishments = student::query()
                                    // ->where('em_name', 'LIKE', '%' . $keyword . '%')
                                    // ->join('users', 'establishment.user_id', '=', 'users.id')
                                    ->join('users', 'student.user_id', '=', 'users.id')
                                    ->where(function ($query) use ($keyword) {
                                        $query->where('student.student_id', 'LIKE', '%' . $keyword . '%')
                                              ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                                            //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                                            //   ->orWhere('registers.term', 'LIKE', '%' . $keyword . '%')
                                            //   ->orWhere('registers.year', 'LIKE', '%' . $keyword . '%');
                                    })
                                    ->select('student.*', 'users.fname')
                                    ->paginate(5);
                                    // $registers=DB::table('establishment')


                                    //  ->join('category','establishment.id','category.category_id')
                                    //  ->select('establishment.*','category.name')
                                    //  ->paginate(5);



                                    //  $registers1=DB::table('category')
                                    //  ->paginate(5);

                                     $searchTerm = $request->input('search');

                        // ค้นหาผู้ใช้โดยใช้ Eloquent ORM
                        $users = establishment::where('em_name', 'LIKE', "%{$searchTerm}%")
                                     ->orWhere('em_name', 'LIKE', "%{$searchTerm}%")
                                     ->get();


                                return view('teacher.student', compact('establishments','users'), ['establishments' => $establishments,]);

                           // return view('student.establishmentuser',compact('establishments','search'));

                    }
    public function searchregister1(Request $request){
        //dd($request);

                //$search = $request->input('search');

                // $establishments =establishment::where(function($query) use ($search){

                //     $query->where('name','like',"%$search%")
                //     ->orWhere('address','like',"%$search%");

                //     })

                //     ->get();


                        // $establishments =establishment::where('name','like',"%$search%")
                        // ->orWhere('address','like',"%$search%")->get();


                        $keyword = $request->input('keyword');
        //dd($request);
                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                        // $registers = registers::query()
                        //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                        //     ->where(function($query) use ($keyword) {
                        //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                        //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                        //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                        //     })
                        //     ->join('users','registers.user_id','users.id')
                        //      ->select('registers.*','users.fname')
                        //    // ->get();
                        //     ->paginate(10);

                            $registers = users::query()
                            ->join('registers', 'users.id', '=', 'registers.user_id')
                            ->join('student','users.id','student.user_id')
                            ->where(function ($query) use ($keyword) {



                                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('student.term', 'LIKE', '%' . $keyword . '%');
                                    //   ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
                                    //   $query = \Carbon\Carbon::parse($keyword)->addYears(543)->format('Y');
                            })
                        ->select('users.*','users.fname','student.term')
                            ->where('role',"student")
                            ->distinct()
                            ->orderBy('id', 'desc')
                            ->paginate(10);


                        return view('officer.register1',  ['registers' => $registers,]);
// compact('registers'),
                   // return view('student.establishmentuser',compact('establishments','search'));

            }
            public function searchregister3(Request $request){
                //dd($request);

                        //$search = $request->input('search');

                        // $establishments =establishment::where(function($query) use ($search){

                        //     $query->where('name','like',"%$search%")
                        //     ->orWhere('address','like',"%$search%");

                        //     })

                        //     ->get();


                                // $establishments =establishment::where('name','like',"%$search%")
                                // ->orWhere('address','like',"%$search%")->get();


                                $keyword = $request->input('keyword');
                //dd($request);
                                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                // $registers = registers::query()
                                //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                //     ->where(function($query) use ($keyword) {
                                //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                //     })
                                //     ->join('users','registers.user_id','users.id')
                                //      ->select('registers.*','users.fname')
                                //    // ->get();
                                //     ->paginate(10);

                                $registers = users::query()
                                ->join('registers', 'users.id', '=', 'registers.user_id')
                                ->join('student','users.id','student.user_id')
                                ->where(function ($query) use ($keyword) {



                                    $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                                        //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                        //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                          ->orWhere('student.term', 'LIKE', '%' . $keyword . '%');
                                        //   ->orWhere('student.term', 'LIKE', '%' . $keyword . '%')
                                        //   $query = \Carbon\Carbon::parse($keyword)->addYears(543)->format('Y');
                                })
                            ->select('users.*','users.fname','student.term','student.term')
                                ->where('role',"student")
                                ->distinct()
                                ->orderBy('id', 'desc')
                                ->paginate(10);
                                $major1=DB::table('notify')
                                ->orderBy('updated_at','desc')
                                ->get();
                                return view('teacher.register1',  ['registers' => $registers,'major1' => $major1,]);
        // compact('registers'),
                           // return view('student.establishmentuser',compact('establishments','search'));

                    }
            public function searchEvaluate(Request $request){
                //dd($request);
                                $keyword = $request->input('keyword');
                //dd($request);
                                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                // $supervision= supervision::query()
                                //     // ->where('namefile', 'LIKE', '%' . $keyword . '%',)
                                //     // ->where('users_id', 'LIKE', '%' . $keyword . '%')
                                //     //->get();
                                //     ->where(function($query) use ($keyword) {
                                //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                //     })
                                //     ->join('users','supervision.user_id','users.id')
                                //      ->select('supervision.*','users.fname')



                                //     ->paginate(5);
                                    $supervision = supervision::query()
                                    ->join('users', 'supervision.user_id', '=', 'users.id')
                                    ->where(function ($query) use ($keyword) {
                                        $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                                              ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                                            //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                            //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                                            //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
                                    })
                                    ->select('supervision.*', 'users.fname')
                                    ->where('role',"student")
                                                            ->orderBy('supervision_id', 'desc')
                                    ->paginate(10);

                                       // dd($request,$establishments,$supervision);
                                return view('officer.Evaluate',  ['supervision' => $supervision,]);
                                // compact('establishments','supervision'),'supervision' => $supervision,
                           // return view('student.establishmentuser',compact('establishments','search'));

                    }
                    public function searchacceptancedocument(Request $request){
                        //dd($request);
                                        $keyword = $request->input('keyword');
                        //dd($request);
                                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                        // $acceptances = acceptance::query()
                                        //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                        //     ->where(function($query) use ($keyword) {
                                        //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                        //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                        //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                        //     })
                                        //     ->join('users','acceptance.user_id','users.id')
                                        //      ->select('acceptance.*','users.fname')
                                           // ->get();
                                            // ->paginate(10);
                                            $acceptances = acceptance::query()
                                            ->join('users', 'acceptance.user_id', '=', 'users.id')
                                            ->join('student','users.id','student.user_id')
                                            ->where(function ($query) use ($keyword) {
                                                $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                                       ->orWhere('student.term', 'LIKE', '%' . $keyword . '%')
                                                       ->orWhere('student.year', 'LIKE', '%' . $keyword . '%');
                                            })
                                            ->select('acceptance.*','users.fname','student.year','student.term')
                                            ->where('role',"student")
                                                            ->orderBy('acceptance_id', 'desc')
                                            ->paginate(10);
                                        //     $acceptances=DB::table('acceptance')
                                        //     ->join('users','acceptance.user_id','users.id')
                                        //    // ->join('establishment','acceptance.establishment_id','establishment.id')
                                        //    ->join('student','users.id','student.user_id')
                                        //     ->select('acceptance.*','users.fname','student.year','student.term')
                                        //     ->where('role',"student")
                                        //                                                         ->orderBy('acceptance_id', 'desc')
                                        //     ->paginate(5);
                                        return view('officer.acceptancedocument1',  ['acceptances' => $acceptances,]);


                            }


                            public function searchacceptancedocument2(Request $request){
                                //dd($request);
                                                $keyword = $request->input('keyword');
                                //dd($request);
                                                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                                // $acceptances = acceptance::query()
                                                //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                //     ->where(function($query) use ($keyword) {
                                                //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                                //     })
                                                //     ->join('users','acceptance.user_id','users.id')
                                                //      ->select('acceptance.*','users.fname')
                                                   // ->get();
                                                    // ->paginate(10);
                                                    $acceptances = users::query()
                                                    ->join('acceptance','users.id','acceptance.user_id')
                                                    ->join('student','users.id','student.user_id')
                                                    ->where(function ($query) use ($keyword) {
                                                        $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                                                            //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                            //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                                                               ->orWhere('student.term', 'LIKE', '%' . $keyword . '%');
                                                            //   ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
                                                    })
                                                    ->select('users.*','users.fname','student.term')







                                                    ->where('role',"student")
                                                    ->distinct()
                                                    ->orderBy('users.updated_at', 'desc')
                                                    ->paginate(10);
                                                return view('teacher.acceptancedocument1',  ['acceptances' => $acceptances,]);


                                    }


                            public function searchinformdetails(Request $request){
                                //dd($request);
                                                $keyword = $request->input('keyword');
                                //dd($request);
                                                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                                // $informdetails = informdetails::query()
                                                //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                //     ->where(function($query) use ($keyword) {
                                                //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                                //     })
                                                //     ->join('users','informdetails.user_id','users.id')
                                                //      ->select('informdetails.*','users.fname')
                                                //    // ->get();
                                                //     ->paginate(10);

                                                    $informdetails = users::query()
                                                    ->join('informdetails','users.id','informdetails.user_id')
                                                    ->join('student','users.id','student.user_id')
                                                    ->where(function ($query) use ($keyword) {
                                                        $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                                                            //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                            //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                                                              ->orWhere('student.term', 'LIKE', '%' . $keyword . '%');
                                                            //    ->orWhere('student.year', 'LIKE', '%' . $keyword . '%');
                                                    })
                                                    ->select('users.*','users.fname','student.term')
                                                    ->where('role',"student")
                                                    ->distinct()
                                                    ->orderBy('users.updated_at', 'desc')
                                                    ->paginate(10);


                                                return view('officer.informdetails2',  ['informdetails' => $informdetails,]);
                                    }
                                    public function searches(Request $request){
                                        //dd($request);
                                                        $keyword = $request->input('keyword');
                                        //dd($request);
                                                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                                        // $supervision = events::query()
                                                        //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                        //     ->where(function($query) use ($keyword) {
                                                        //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                        //             //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                        //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                                        //     })
                                                        //     // ->join('users','informdetails.user_id','users.id')
                                                        //     //  ->select('informdetails.*','users.fname')
                                                        //    // ->get();
                                                        //     ->paginate(10);

                                                            $supervision = event::query()
                                                            // ->join('establishment', 'events.em_id', '=', 'establishment.id')
                                                            // ->join('users','events.student_name','users.id')
                                                            ->where(function ($query) use ($keyword) {
                                                                $query->where('events.student_name', 'LIKE', '%' . $keyword . '%');
                                                                    //   ->orWhere('establishment.em_name', 'LIKE', '%' . $keyword . '%')
                                                                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                                    //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                                                                    //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
                                                            })
                                                            // ->select('events.*', 'establishment.em_name','users.fname')

                                                            // ->where('role',"student")
                                                            ->orderBy('id', 'desc')

                                                            ->paginate(5);


                                                        return view('officer.es1',  ['supervision' => $supervision,]);
                                            }
                                            public function searchreport2(Request $request){
                                                //dd($request);
                                                                $keyword = $request->input('keyword');
                                                //dd($request);
                                                                // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                                                // $report = report::query()
                                                                //     // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                                //     ->where(function($query) use ($keyword) {
                                                                //         $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                                //               ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                                //               ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                                                //     })
                                                                //     ->join('users','report.user_id','users.id')
                                                                //      ->select('report.*','users.fname')
                                                                //    // ->get();
                                                                //     ->paginate(10);

                                                                    $report = report::query()
                                                                    ->join('users', 'report.user_id', '=', 'users.id')
                                                                    ->where(function ($query) use ($keyword) {
                                                                        $query->where('report.namefile', 'LIKE', '%' . $keyword . '%')
                                                                              ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                                              ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                                                              ->orWhere('report.term', 'LIKE', '%' . $keyword . '%')
                                                                              ->orWhere('report.year', 'LIKE', '%' . $keyword . '%');
                                                                    })
                                                                    ->select('report.*', 'users.fname', 'users.surname')
                                                                    ->paginate(10);

                                                                return view('officer.experiencereport2',  ['report' => $report,]);
                                                    }
     public function searchschedule(Request $request){
                //dd($request);
                $keyword = $request->input('keyword');
                                                        //dd($request);
                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                $schedules = schedule::query()
            // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                ->where(function($query) use ($keyword) {
                 $query->where('namefile', 'LIKE', '%' . $keyword . '%')
        // ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
        // ->orWhere('year', 'LIKE', '%' . $keyword . '%');
        ->orWhere('status', 'LIKE', '%' . $keyword . '%');
                             })
//     ->join('users','schedules.user_id','users.id')
//  ->select('schedules.*','users.fname')
                                                                           // ->get();
    ->paginate(10);
   return view('officer.schedule',  ['schedules' => $schedules,]);
 }

 public function searchinformdetails1(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $informdetails = users::query()
            ->join('informdetails','users.id','informdetails.user_id')
            ->join('student','users.id','student.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                      ->orWhere('student.term', 'LIKE', '%' . $keyword . '%');
                    //    ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
            })
            ->select('users.*','users.fname','student.term')
            ->where('role',"student")
            ->distinct()
            ->orderBy('users.updated_at', 'desc')
            ->paginate(10);

           // ->select('registers.*','users.fname','student.year')
           // ->select('users.*','users.fname','student.year')


// $users=DB::table('users')

// -> where('role','student')
// ->orWhere('role', '=', '0')


// ->paginate(5);
// $users = users::query()
// ->where(function($query) use ($keyword) {
//     $query->where('role', 'student')
//         ->orWhere('role', '0');
// })
// ->where(function($query) use ($keyword) {
//     $query->where('username', 'LIKE', '%' . $keyword . '%')
//     ->orWhere('fname', 'LIKE', '%' . $keyword . '%')
//     ->orWhere('surname', 'LIKE', '%' . $keyword . '%')
//         ->orWhere('year', 'LIKE', '%' . $keyword . '%')
//         ->orWhere('term', 'LIKE', '%' . $keyword . '%');
// })
//     ->paginate(5);
return view('teacher.informdetails1',  ['informdetails' => $informdetails,]);
}
public function searchreport01(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = users::query()
            ->join('student','users.id','student.user_id')
            ->join('establishment','users.id','establishment.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                      ->orWhere('student.term', 'LIKE', '%' . $keyword . '%')
                       ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
                       ->orWhere('establishment.em_name', 'LIKE', '%' . $keyword . '%');

            })
            ->select('users.*','student.student_id','student.term','student.year','establishment.em_name')
            ->where('role',"student") ->distinct()
                                                                ->orderBy('id', 'desc')
            ->paginate(5);



return view('teacher.report1',  ['supervision' => $supervision,]);
}
public function searchreport02(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = users::query()
            ->join('registers','users.id','registers.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('student.term', 'LIKE', '%' . $keyword . '%')
                    //    ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
                       ->orWhere('users.username', 'LIKE', '%' . $keyword . '%');

            })
            ->select('users.*','users.fname')
            ->distinct()
            ->orderBy('users.updated_at', 'desc')
            ->paginate(10);


            $registers2 = DB::table('registers')
            // ->join('users', 'registers.user_id', '=', 'users.id')
             ->select('registers.*')
            ->where('registers.user_id', $supervision)
            // ->orderBy('namefile', 'asc')
            ->orderBy('registers.updated_at', 'desc')
            ->paginate(10);

return view('teacher.report2',  ['supervision' => $supervision,'registers2' => $registers2,]);
}
public function searchreport03(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = event::query()
            ->join('student','events.student_name','student.user_id')
            ->join('establishment','events.em_id','establishment.id')
            ->where(function ($query) use ($keyword) {
                $query->where('student.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                      //->orWhere('student.fname', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('student.student_id', 'LIKE', '%' . $keyword . '%')
                       ->orWhere('establishment.em_name', 'LIKE', '%' . $keyword . '%');

            })
            ->select('events.*'
            ,'student.fname' ,'student.student_id'
           ,'establishment.em_name'

           )
            ->distinct()
            ->orderBy('id', 'desc')
            ->paginate(5);









             $users1=DB::table('users')
             ->where('role',"student")

             ->get();

return view('teacher.report3',  ['supervision' => $supervision,'users1']);
}
public function searchreport04(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = users::query()
            ->join('supervision','users.id','supervision.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                       ->orWhere('users.username', 'LIKE', '%' . $keyword . '%');
                      //->orWhere('student.fname', 'LIKE', '%' . $keyword . '%')
                    //     ->orWhere('student.student_id', 'LIKE', '%' . $keyword . '%')
                    //    ->orWhere('establishment.em_name', 'LIKE', '%' . $keyword . '%');

            })
            ->select('users.*','supervision.user_id')
            ->where('role',"student") ->distinct()
                                                                ->orderBy('id', 'desc')
            ->paginate(5);
return view('teacher.report4',  ['supervision' => $supervision]);
}


public function searchreport1(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = users::query()
            ->join('student','users.id','student.user_id')
            ->join('establishment','users.id','establishment.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                      ->orWhere('student.term', 'LIKE', '%' . $keyword . '%')
                    //    ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
                       ->orWhere('establishment.em_name', 'LIKE', '%' . $keyword . '%');

            })
            ->select('users.*','student.student_id','student.term','student.year','establishment.em_name')
            ->where('role',"student") ->distinct()
                                                                ->orderBy('id', 'desc')
            ->paginate(5);



return view('officer.report1',  ['supervision' => $supervision,]);
}
public function searchreport002(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = users::query()
            ->join('registers','users.id','registers.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('student.term', 'LIKE', '%' . $keyword . '%')
                    //    ->orWhere('student.year', 'LIKE', '%' . $keyword . '%')
                       ->orWhere('users.username', 'LIKE', '%' . $keyword . '%');

            })
            ->select('users.*','users.fname')
            ->distinct()
            ->orderBy('users.updated_at', 'desc')
            ->paginate(10);


            $registers2 = DB::table('registers')
            // ->join('users', 'registers.user_id', '=', 'users.id')
             ->select('registers.*')
            ->where('registers.user_id', $supervision)
            // ->orderBy('namefile', 'asc')
            ->orderBy('registers.updated_at', 'desc')
            ->paginate(10);

return view('officer.report2',  ['supervision' => $supervision,'registers2' => $registers2,]);
}
public function searchreport3(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = event::query()
            // ->join('student','events.student_name','student.user_id')
            // ->join('establishment','events.em_id','establishment.id')
            ->where(function ($query) use ($keyword) {
                $query->where('events.em_id', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                      //->orWhere('student.fname', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('events.student_name', 'LIKE', '%' . $keyword . '%');
                    //    ->orWhere('events.em_id', 'LIKE', '%' . $keyword . '%')

            })
            ->select('events.*'
        //     ,'student.fname' ,'student.student_id'
        //    ,'establishment.em_name'

           )
            ->distinct()
            ->orderBy('id', 'desc')
            ->paginate(5);









             $users1=DB::table('users')
             ->where('role',"student")

             ->get();

return view('officer.report3',  ['supervision' => $supervision,'users1']);
}
public function searchreport4(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $supervision = users::query()
            ->join('supervision','users.id','supervision.user_id')
            ->where(function ($query) use ($keyword) {
                $query->where('users.fname', 'LIKE', '%' . $keyword . '%')
                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                       ->orWhere('users.username', 'LIKE', '%' . $keyword . '%');
                      //->orWhere('student.fname', 'LIKE', '%' . $keyword . '%')
                    //     ->orWhere('student.student_id', 'LIKE', '%' . $keyword . '%')
                    //    ->orWhere('establishment.em_name', 'LIKE', '%' . $keyword . '%');

            })
            ->select('users.*','supervision.user_id')
            ->where('role',"student") ->distinct()
                                                                ->orderBy('id', 'desc')
            ->paginate(5);
return view('officer.report4',  ['supervision' => $supervision]);
}
public function searchrequest(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $users=DB::table('users')

            -> where('role','student')
   ->orWhere('role', '=', '0')


           ->paginate(5);
            $users = users::query()
            ->where(function($query) use ($keyword) {
                $query->where('role', 'student')
                    ->orWhere('role', '0');
            })
            ->where(function($query) use ($keyword) {
                $query->where('username', 'LIKE', '%' . $keyword . '%')
                ->orWhere('fname', 'LIKE', '%' . $keyword . '%')
                ->orWhere('surname', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('year', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('term', 'LIKE', '%' . $keyword . '%');
            })
                ->paginate(5);
return view('teacher.request',  ['users' => $users,]);
}


public function searchin3(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล


           $registers1=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers2=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers3=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')
           // ->where('user_id', auth()->id())
           ->paginate(5);



           $registers4=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'บัตรประชาชน')
           ->where('user_id', auth()->id())
           ->paginate(5);

           $registers5=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'บัตรนักศึกษา')
           ->where('user_id', auth()->id())
           ->paginate(5);

           $registers6=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'ผลการเรียน')
           ->where('user_id', auth()->id())
           ->paginate(5);
           $registers7=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
           ->where('user_id', auth()->id())
           ->paginate(5);

           $registers17=DB::table('acceptance')
           ->join('users','acceptance.user_id','users.id')
           ->select('acceptance.*','users.fname')
           ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers8=DB::table('informdetails')
           ->join('users','informdetails.user_id','users.id')
           ->select('informdetails.*','users.fname')
           ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers9=DB::table('informdetails')
           ->join('users','informdetails.user_id','users.id')
           ->select('informdetails.*','users.fname')
           ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers10=DB::table('informdetails')
           ->join('users','informdetails.user_id','users.id')
           ->select('informdetails.*','users.fname')
           ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
           // ->where('user_id', auth()->id())
           ->paginate(5);


           $registers12=DB::table('events')
           ->join('users','events.student_name','users.id')
           ->select('events.*','users.fname')
           ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
           // ->where('student_name', auth()->id())
           ->paginate(5);

           $registers13=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers14=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers15=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers16=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers1 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers2 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);
           $registers3 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers4 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'บัตรประชาชน','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers5 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'บัตรนักศึกษา','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers6 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'ผลการเรียน','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers7 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'ประวัติส่วนตัว(resume)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);


           $registers17 = acceptance::query()
           ->join('users', 'acceptance.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')

           // ->where('user_id', auth()->id())
           ->orderBy('acceptance.acceptance_id', 'DESC')
           ->select('acceptance.*', 'users.fname')
           ->paginate(10);
           $registers017 = acceptance::query()
           ->join('users', 'acceptance.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('acceptance.namefile', 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')

           // ->where('user_id', auth()->id())
           ->orderBy('acceptance.acceptance_id', 'DESC')
           ->select('acceptance.*', 'users.fname')
           ->paginate(10);

           $registers0017 = acceptance::query()
           ->join('users', 'acceptance.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('acceptance.namefile', 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')

           // ->where('user_id', auth()->id())
           ->orderBy('acceptance.acceptance_id', 'DESC')
           ->select('acceptance.*', 'users.fname')
           ->paginate(10);

           $registers8 = informdetails::query()
           ->join('users', 'informdetails.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')


           ->orderBy('informdetails.informdetails_id', 'DESC')
           ->select('informdetails.*', 'users.fname')
           ->paginate(10);


           $registers9 = informdetails::query()
           ->join('users', 'informdetails.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')


           ->orderBy('informdetails.informdetails_id', 'DESC')
           ->select('informdetails.*', 'users.fname')
           ->paginate(10);

           $registers10 = informdetails::query()
           ->join('users', 'informdetails.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')


           ->orderBy('informdetails.informdetails_id', 'DESC')
           ->select('informdetails.*', 'users.fname')
           ->paginate(10);

           $registers12 = Event::query()
           ->join('users', 'events.student_name', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('events.namefiles', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')


           ->orderBy('events.id', 'DESC')
           ->select('events.*', 'users.fname')
           ->paginate(10);

           $registers012 = Event::query()
           ->join('users', 'events.student_name', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('events.namefiles1', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('events.namefiles1', 'สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา')


           ->orderBy('events.id', 'DESC')
           ->select('events.*', 'users.fname')
           ->paginate(10);
           $registers13 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);

           $registers14 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);
           $registers15 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);

           $registers16 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);


return view('teacher.in2',  ['registers1' => $registers1,'registers2' => $registers2,'registers3' => $registers3,
'registers4' => $registers4,'registers5' => $registers5,'registers6' => $registers6,'registers7' => $registers7
,'registers8' => $registers8,'registers9' => $registers9,'registers10' => $registers10,'registers12' => $registers12
,'registers13' => $registers13,'registers14' => $registers14,'registers15' => $registers15,'registers16' => $registers16,
'registers17' => $registers17,'registers017' => $registers017,'registers0017' => $registers0017,'registers012' => $registers012,
]);
}

public function searchin03(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล


           $registers1=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers2=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers3=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')
           // ->where('user_id', auth()->id())
           ->paginate(5);



           $registers4=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'บัตรประชาชน')
        //    ->where('user_id', auth()->id())
           ->paginate(5);

           $registers5=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'บัตรนักศึกษา')
        //    ->where('user_id', auth()->id())
           ->paginate(5);

           $registers6=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'ผลการเรียน')
        //    ->where('user_id', auth()->id())
           ->paginate(5);
           $registers7=DB::table('registers')
           ->join('users','registers.user_id','users.id')
           ->select('registers.*','users.fname')
           ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        //    ->where('user_id', auth()->id())
           ->paginate(5);

           $registers17=DB::table('acceptance')
           ->join('users','acceptance.user_id','users.id')
           ->select('acceptance.*','users.fname')
           ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers017 = acceptance::query()
           ->join('users', 'acceptance.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('acceptance.namefile', 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')

           // ->where('user_id', auth()->id())
           ->orderBy('acceptance.acceptance_id', 'DESC')
           ->select('acceptance.*', 'users.fname')
           ->paginate(10);

           $registers0017 = acceptance::query()
           ->join('users', 'acceptance.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('acceptance.namefile', 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')

           // ->where('user_id', auth()->id())
           ->orderBy('acceptance.acceptance_id', 'DESC')
           ->select('acceptance.*', 'users.fname')
           ->paginate(10);
           $registers8=DB::table('informdetails')
           ->join('users','informdetails.user_id','users.id')
           ->select('informdetails.*','users.fname')
           ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers9=DB::table('informdetails')
           ->join('users','informdetails.user_id','users.id')
           ->select('informdetails.*','users.fname')
           ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers10=DB::table('informdetails')
           ->join('users','informdetails.user_id','users.id')
           ->select('informdetails.*','users.fname')
           ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
           // ->where('user_id', auth()->id())
           ->paginate(5);


           $registers12=DB::table('events')
           ->join('users','events.student_name','users.id')
           ->select('events.*','users.fname')
           ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
           // ->where('student_name', auth()->id())
           ->paginate(5);
           $registers012 = Event::query()
           ->join('users', 'events.student_name', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('events.namefiles1', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('events.namefiles1', 'สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา')


           ->orderBy('events.id', 'DESC')
           ->select('events.*', 'users.fname')
           ->paginate(10);
           $registers13=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers14=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers15=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
           // ->where('user_id', auth()->id())
           ->paginate(5);
           $registers16=DB::table('supervision')
           ->join('users','supervision.user_id','users.id')
           ->select('supervision.*','users.fname')
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
           // ->where('user_id', auth()->id())
           ->paginate(5);

           $registers1 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers2 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);
           $registers3 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers4 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'บัตรประชาชน','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers5 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'บัตรนักศึกษา','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers6 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'ผลการเรียน','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);

           $registers7 = registers::query()
           ->join('users', 'registers.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('registers.namefile', 'ประวัติส่วนตัว(resume)','')

           // ->where('user_id', auth()->id())
           ->orderBy('registers.id', 'DESC')
           ->select('registers.*', 'users.fname')
           ->paginate(10);
           $registers17 = acceptance::query()
           ->join('users', 'acceptance.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                   //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
           })
           ->where('acceptance.namefile', 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')

           // ->where('user_id', auth()->id())
           ->orderBy('acceptance.acceptance_id', 'DESC')
           ->select('acceptance.*', 'users.fname')
           ->paginate(10);


           $registers8 = informdetails::query()
           ->join('users', 'informdetails.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')


           ->orderBy('informdetails.informdetails_id', 'DESC')
           ->select('informdetails.*', 'users.fname')
           ->paginate(10);


           $registers9 = informdetails::query()
           ->join('users', 'informdetails.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')


           ->orderBy('informdetails.informdetails_id', 'DESC')
           ->select('informdetails.*', 'users.fname')
           ->paginate(10);

           $registers10 = informdetails::query()
           ->join('users', 'informdetails.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')


           ->orderBy('informdetails.informdetails_id', 'DESC')
           ->select('informdetails.*', 'users.fname')
           ->paginate(10);

           $registers12 = Event::query()
           ->join('users', 'events.student_name', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('events.namefiles', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('events.namefiles', 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')


           ->orderBy('events.id', 'DESC')
           ->select('events.*', 'users.fname')
           ->paginate(10);

           $registers13 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);

           $registers14 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname' )
           ->paginate(10);
           $registers15 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);

           $registers16 = supervision::query()
           ->join('users', 'supervision.user_id', '=', 'users.id')
           ->where(function ($query) use ($keyword) {
               $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
                     ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
                    //  ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

           })
           ->where('supervision.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')


           ->orderBy('supervision.supervision_id', 'DESC')
           ->select('supervision.*', 'users.fname')
           ->paginate(10);


return view('officer.in2',  ['registers1' => $registers1,'registers2' => $registers2,'registers3' => $registers3,
'registers4' => $registers4,'registers5' => $registers5,'registers6' => $registers6,'registers7' => $registers7
,'registers8' => $registers8,'registers9' => $registers9,'registers10' => $registers10,'registers12' => $registers12
,'registers13' => $registers13,'registers14' => $registers14,'registers15' => $registers15,'registers16' => $registers16,
'registers17' => $registers17,'registers017' => $registers017,'registers0017' => $registers0017,'registers012' => $registers012,
]);
}

public function searchsupervision0(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
//     $events = Event::query()
// // ->where('namefile', 'LIKE', '%' . $keyword . '%')
//     ->where(function($query) use ($keyword) {
//      $query->where('student_name', 'LIKE', '%' . $keyword . '%')
// //  ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
// ->orWhere('year', 'LIKE', '%' . $keyword . '%');
//                  })
// //     ->join('users','events.student_name','users.id')
// //   ->select('events.*','users.fname')
//                                                                // ->get();
// ->paginate(10);
//dd($events);

$events = Event::query()
// ->join('users', 'events.student_name', '=', 'users.id')
->where(function ($query) use ($keyword) {
    $query
     ->Where('events.student_name', 'LIKE', '%' . $keyword . '%');
       //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
        //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
        //   ->orWhere('events.namefiles', 'LIKE', '%' . $keyword . '%');

        //   ->orWhere('events.year', 'LIKE', '%' . $keyword . '%');
})
// ->select('events.*', 'users.fname')
->orderBy('id', 'desc')
->paginate(10);

return view('teacher.supervision',  ['events' => $events,]);
}

public function searches1(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
    $supervision = permission::query()
// ->where('namefile', 'LIKE', '%' . $keyword . '%')
    ->where(function($query) use ($keyword) {
     $query->where('namefile', 'LIKE', '%' . $keyword . '%')
//  ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
->orWhere('year', 'LIKE', '%' . $keyword . '%');
                 })
//     ->join('users','events.student_name','users.id')
//   ->select('events.*','users.fname')
                                                               // ->get();
->paginate(10);
//dd($events);
return view('teacher.es1',  ['supervision' => $supervision,]);
}
public function searchestimate2(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
//     $supervision = supervision::query()

//     ->where(function($query) use ($keyword) {
//      $query->where('namefile', 'LIKE', '%' . $keyword . '%')
//   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
// ->orWhere('year', 'LIKE', '%' . $keyword . '%');
//                  })

//      ->join('users','supervision.user_id','users.id')
//    ->select('supervision.*','users.fname')
//                                                                // ->get();
// ->paginate(10);

$supervision = supervision::query()
->join('users', 'supervision.user_id', '=', 'users.id')
->where(function ($query) use ($keyword) {
    $query->where('supervision.namefile', 'LIKE', '%' . $keyword . '%')
          ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%');
        //   ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%');
        //   ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
        //   ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
})
->select('supervision.*', 'users.fname')
->paginate(10);


//dd($events);
return view('teacher.estimate1',  ['supervision' => $supervision,]);
}


public function searchreportresults(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
//     $report = report::query()
// // ->where('namefile', 'LIKE', '%' . $keyword . '%')
//     ->where(function($query) use ($keyword) {
//      $query->where('namefile', 'LIKE', '%' . $keyword . '%')
//   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
// ->orWhere('year', 'LIKE', '%' . $keyword . '%');
//                  })

//      ->join('users','report.user_id','users.id')
//    ->select('report.*','users.fname')
//                                                                // ->get();
// ->paginate(10);
$report = report::query()
->join('users', 'report.user_id', '=', 'users.id')
->where(function ($query) use ($keyword) {
    $query->where('report.namefile', 'LIKE', '%' . $keyword . '%')
          ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
          ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
          ->orWhere('report.term', 'LIKE', '%' . $keyword . '%')
          ->orWhere('report.year', 'LIKE', '%' . $keyword . '%');
})
->select('report.*', 'users.fname', 'users.surname')
->paginate(10);
//dd($events);
return view('teacher.reportresults1',  ['report' => $report,]);
}

    public function  Student()
    {
        return view('student.Studentinformation',);
    }

    public function establishmentuser()
    {
        // $users=DB::table('users')->get();
        $users=DB::table('establishment')->paginate(5);
        $users1=DB::table('users')->paginate(5);
        // $users=users::paginate(5);
        $establishments=DB::table('establishment') ->orderBy('em_name','desc')

        ->paginate(6);

        $registers1=DB::table('users')
        // ->join('users','users.id')
        // ->select('registers.*','users.name')
        // ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)')
        ->where('id',
         auth()->id())
        ->paginate(5);
        return view('student.establishmentuser',compact('users','establishments','users1','registers1'));
    }


    public function establishmentstatus(Request $request,$id)
    {
       // dd($request);
        // $users=DB::table('users')->get();
        // $users=DB::table('establishment')->paginate(5);
        $users1=users::find($id);
    // dd($request);
     $events=DB::table('users')->find($id);
    //  $events1=users::pluck('establishment', 'id'); ->where('id',
    //  auth()->id())
   // $events1 = users::pluck('establishment', 'id');
     $events1=DB::table('users')->paginate(5);
        // $users = establishment::pluck('em_name', 'id'); // ดึงรายชื่อของผู้ใช้และ ID จากฐานข้อมูล

        $users=DB::table('establishment')

        ->paginate(5);
        $major=DB::table('users')

        ->paginate(5);

    //     $users = DB::table('users')
    //     ->select('users.id', 'users.establishment', 'establishment.name')
    //     ->join('establishment', 'users.id', '=', 'establishment.id')
    //    // ->where('users.something', '=', 'something')
    //    // ->where('users.otherThing', '=', 'otherThing')
    //     ->get();
        // $users=users::paginate(5);
        $establishments=DB::table('users') ->orderBy('fname','desc')

        ->paginate(6);
        return view('student.establishmentstatus',compact('users','establishments','events','users1','events1','major' ));
    }

    public function editestablishmentstatus(Request $request,$id)
    {
       // dd($request);
        // $users=DB::table('users')->get();
        // $users=DB::table('establishment')->paginate(5);
        $users1=users::find($id);
    // dd($request);
     $events=DB::table('users')->find($id);
    //  $events1=users::pluck('establishment', 'id'); ->where('id',
    //  auth()->id())
   // $events1 = users::pluck('establishment', 'id');
     $events1=DB::table('users')->paginate(5);
        $users = establishment::pluck('em_name', 'id'); // ดึงรายชื่อของผู้ใช้และ ID จากฐานข้อมูล

        $major=DB::table('establishment')

        ->paginate(5);

    //     $users = DB::table('users')
    //     ->select('users.id', 'users.establishment', 'establishment.name')
    //     ->join('establishment', 'users.id', '=', 'establishment.id')
    //    // ->where('users.something', '=', 'something')
    //    // ->where('users.otherThing', '=', 'otherThing')
    //     ->get();
        // $users=users::paginate(5);
        $establishments=DB::table('users') ->orderBy('fname','desc')

        ->paginate(6);
        return view('student.edit.editestablishmentstatus',compact('users','establishments','events','users1','events1','major' ));
    }
    public function establishmentuser4()
    {
        // $users=DB::table('users')->get();
        $users=DB::table('establishment')->paginate(5);
        // $users=users::paginate(5);
        $establishments=DB::table('establishment') ->orderBy('em_name','desc')

        ->paginate(6);
        return view('student.establishmentuser4',compact('users','establishments'));
    }



    public function viewestablishmentuser($em_id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($em_id);
        //  dd($establishments);

         return view('student.viewestablishmentuser1',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


    public function calendar()
    {
        return view('student.calendar',["msg"=>"I am student role"]);
    }

    public function timeline()
    {
        $all=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);

        return view('student.timeline',compact('all'));
    }
    public function registeruser()
    {
        //$registers=DB::table('registers')->paginate(5);
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $registers1=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers2=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ใบสมัครงานสหกิจศึกษา(สก03)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers3=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers4=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรประชาชน')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers5=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'บัตรนักศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers6=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ผลการเรียน')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $registers7=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname')
        ->where('registers.namefile', 'ประวัติส่วนตัว(resume)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $registers8=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
        ->select('acceptance.*','users.fname')
        ->where('acceptance.namefile','แบบตอบรับและเสนองานนักศึกสหกิจศึกษา')
        ->where('user_id', auth()->id())
        ->paginate(5);



        $activity=DB::table('schedule')
        // ->join('users','registers.user_id','users.id')
        // ->select('registers.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);

        return view('student.register',compact('registers','registers1'


        ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
    }


    public function acceptancedocument()
    {
        return view('student.acceptancedocument',["msg"=>"I am student role"]);
    }

    public function informdetails()
    {
        $informdetails=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);

        $informdetails1=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $informdetails2=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $informdetails3=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname')
        ->where('informdetails.namefile', 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
        ->where('user_id', auth()->id())
        ->paginate(5);

        // $activity=DB::table('schedule')
        // // ->join('users','registers.user_id','users.id')
        // // ->select('registers.*','users.name')->where('user_id', auth()->id())
        // ->paginate(5);
       ;
        return view('student.informdetails',compact('informdetails','informdetails1','informdetails2','informdetails3'));
    }

    public function addinformdetail()
    {
        return view('student.add.addinformdetails',["msg"=>"I am student role"]);
    }


     public function record()
    {
        return view('student.record',["msg"=>"I am student role"]);
    }

      public function report()
    {
        $report=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname')->where('user_id', auth()->id())
        ->paginate(5);


        $report1=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname')
        ->where('report.namefile', 'รายงานโครงการ')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $report2=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname')
        ->where('report.namefile', 'PowerPoint การนำเสนอ')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $report3=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname')
        ->where('report.namefile', 'Onepage ของโครงการ (โปสเตอร์)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        $report4=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname')
        ->where('report.namefile', 'รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)')
        ->where('user_id', auth()->id())
        ->paginate(5);
        return view('student.report',compact('report','report1','report2','report3','report4'));
    }

       public function listofteachers()
    {
        return view('student.listofteachers',["msg"=>"I am student role"]);
    }

    public function calendar2confirm()
    {
        // $username = auth()->user()->username;
        $userId = auth()->user()->username;
        $events=DB::table('events')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.fname')

        ->join('teacher','events.teacher_name','teacher.id')
        //  ->join('establishment','events.em_id','establishment.id')
        // ->select('events.*','teacher.fname','establishment.em_name')
        // ->where('student_name', auth()->id())
        // ->paginate(5);

//         ->join('users', 'events.student_name', 'users.id')
//         ->select('events.*', 'users.fname')
//         ->where('users.username', $username) // ตรวจสอบ username
//         ->where(function ($query) {
//             $query->where('events.student_name', 'LIKE', )
//                   ->orWhere('events.student_name', 'LIKE', );
//         })
//         ->orderBy('events.id', 'desc')
// ->get();
// foreach ($events as $event) {
//     $event->selectedIds = explode(',', $event->student_name);
// }
->select('events.*','teacher.fname')
->whereRaw("FIND_IN_SET('$userId', student_name)")

->get();
//dd($events);
        $users2=DB::table('teacher')
        ->get();
        return view('student.calendar2confirm',compact('events','users2'));
    }

      public function calendar2(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('student.calendar2',['events' => $events]);
    }
    public function documents()
    {
        $registers=DB::table('download')
        ->where('status',"1")
        // ->paginate(5);
        ->get();
        return view('student.documents',["msg"=>"I am student role"],compact('registers'));
    }
    public function Announcement()
    {
        $registers=DB::table('activity')
        // ->join('users','registers.user_id','users.id')
        // ->select('registers.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);
        return view('student.Announcement',compact('registers'));
    }
    public function documents3()
    {
        return view('student.documents1',["msg"=>"I am student role"]);
    }

    // public function sendMessage(Request $request)
    // {
    //     $message["text"]="text";
    //     $message["text"]=$request->message;
    //     $line_msg["message"][0]=$message;
    //     $line_msg["to"][0]=$request->line_id;
    //     $this->putMessageLine($line_msg,'push');
    //     return response()->json9 ([
    //         'code'=>0,
    //         'status' =>'success',
    //         'msg'=>'ส่งข้อความเรียบร้อยแล้ว',
    //         'callFunction'=>'sendSuccess',
    //     ]);
        // return view('student.register',["msg"=>"I am student role"]);
    // }




    public function Home()
    {
        return view('welcome');
    }


// officerHome
    public function officerHome()
    {
    //     $users = registers::select(DB::raw("COUNT(user_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    // //->whereYear('created_at', date('Y'))
    // ->groupBy(DB::raw("YEAR(created_at)"))
    // ->pluck('count', 'year_name');
    // $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    // ->groupBy(DB::raw("YEAR(created_at)"))
    // ->pluck('count', 'year_name');

    // $users2 = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"))
    // ->get();
    $users3 =  acceptance::select(DB::raw("COUNT(DISTINCT user_id) as count"))
    ->get();

    $users4 =  event::select(DB::raw("COUNT(DISTINCT student_name) as count"))
    ->get();
    $users5 =  informdetails::select(DB::raw("COUNT(DISTINCT user_id) as count"))
    ->get();
    $users1 = registers::select(DB::raw("COUNT(DISTINCT id) as count"))
    ->get();
    // $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at ) AS year_name "))
    // ->groupBy(DB::raw("YEAR(created_at)"))
    // ->pluck('count', 'year_name');



// $labels = $users->keys()->map(function ($month) {
//     return Carbon::createFromDate(null, $month, null)->format('F Y');
// });

// $labels = $users->keys()->map(function ($monthName) {
    //     return ucfirst($monthName);
    // });
  //dd($users);
 //year
 //YEAR

        $users02 = Users::where('role', 'student')
        ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $labels = $users02->keys();
        $labels = $labels->map(function($year) {
            return $year + 543;
        });
        $data = $users02->values();
//dd($users02);
        $registers02 = registers::
        where('Status_registers', 'อนุมัติเอกสารแล้ว')
        ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');

        $registers03 = registers::
        where('Status_registers','รออนุมัติ')
        ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $registers04 = registers::
        where('Status_registers','ไม่อนุมัติ')
        ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $registers05 = registers::

        select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        // $labels01 = $registers02->keys();
        // $labels01 = $labels01->map(function($year) {
        //     return $year + 543;
        // });
        // $data01 = $registers02->values();
// dd($registers03);
// ปีที่ใช้ใน labels
$labels01 = $registers02->keys()
 ->merge($registers03->keys())
 ->merge($registers04->keys())
 ->merge($registers05->keys())
// ->merge($supervision14->keys())
// ->merge($supervision15->keys())
// ->merge($supervision16->keys())
// ->merge($supervision17->keys())
// ->merge($supervision18->keys())
// ->merge($supervision19->keys())
->unique()
->sort()
->map(function($year) {
    return $year + 543;
});

// เตรียมข้อมูลสำหรับ dataset
$data01 = $labels01->map(function($year) use ($registers02) {
    return $registers02->get($year - 543);
});
$data20 = $labels01->map(function($year) use ($registers03) {
    return $registers03->get($year - 543);
});
$data21 = $labels01->map(function($year) use ($registers04) {
    return $registers04->get($year - 543);
});
$data021 = $labels01->map(function($year) use ($registers05) {
    return $registers05->get($year - 543);
});
// $data12 = $labels04->map(function($year) use ($supervision12) {
//     return $supervision12->get($year - 543);
// });




//  dd($data);
$supervision = Event::where('Status_events', 'รอรับทราบและยืนยันเวลานัดนิเทศ')
->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $labels02 = $supervision->keys();
        $labels02 = $labels02->map(function($year) {
            return $year + 543;
        });
        $data02 = $supervision->values();


        $events1 = Event::where('Status_events', 'รับทราบและยืนยันเวลานัดแล้ว')
        ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');

$events2 = Event::where('Status_events', 'ขอเปลี่ยนเวลานัดนิเทศ')
        ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $events3 = Event::
        select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');

// Merge and sort years for labels
$labels05 = $events1->keys()
->merge($events2->keys())
    ->merge($supervision->keys())
    ->merge($events3->keys())
    ->unique()
    ->sort()
->map(function($year) {
return $year + 543;
});
    // dd($labels05);
// Get counts for each year
$data05 = $labels05->map(function($year) use ($events1) {
return $events1->get($year - 543, 0);
});

$data06 = $labels05->map(function($year) use ($events2) {
return $events2->get($year - 543, 0);
});
$data07 = $labels05->map(function($year) use ($supervision) {
    return $supervision->get($year - 543, 0);
    });
    $data007 = $labels05->map(function($year) use ($events3) {
        return $events3->get($year - 543, 0);
        });

        $supervision1 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $labels03 = $supervision1->keys();
        $labels03 = $labels03->map(function($year) {
            return $year + 543;
        });
        $data03 = $supervision1->values();





// ข้อมูลแบบประเมินผลนักศึกษาสหกิจศึกษา (สก.13)
$supervision13 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
    ->where('score', '>', 100)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
    $supervision14 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
    ->where('score', '<', 100)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
// dd($supervision13);
// ข้อมูลแบบบันทึกการนิเทศสหกิจศึกษา (สก.12)
$supervision12 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
    ->where('score', '>', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
    $supervision15 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
    ->where('score', '<', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');


    $supervision16 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
    ->where('score', '>', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
    $supervision17 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
    ->where('score', '<', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');

    $supervision18 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
    ->where('score', '>', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
    $supervision19 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
    ->where('score', '<', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
    $supervision20 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    // ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
    // ->where('score', '<', 50)
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
// ปีที่ใช้ใน labels
$labels04 = $supervision13->keys()
->merge($supervision12->keys())
->merge($supervision14->keys())
->merge($supervision15->keys())
->merge($supervision16->keys())
->merge($supervision17->keys())
->merge($supervision18->keys())
->merge($supervision19->keys())
->merge($supervision20->keys())
->unique()
->sort()
->map(function($year) {
    return $year + 543;
});

// เตรียมข้อมูลสำหรับ dataset
$data13 = $labels04->map(function($year) use ($supervision13) {
    return $supervision13->get($year - 543);
});

$data12 = $labels04->map(function($year) use ($supervision12) {
    return $supervision12->get($year - 543);
});
$data14 = $labels04->map(function($year) use ($supervision14) {
    return $supervision14->get($year - 543);
});
$data15 = $labels04->map(function($year) use ($supervision15) {
    return $supervision15->get($year - 543);
});
$data16 = $labels04->map(function($year) use ($supervision16) {
    return $supervision16->get($year - 543);
});
$data17 = $labels04->map(function($year) use ($supervision17) {
    return $supervision17->get($year - 543);
});
$data18 = $labels04->map(function($year) use ($supervision18) {
    return $supervision18->get($year - 543);
});
$data19 = $labels04->map(function($year) use ($supervision19) {
    return $supervision19->get($year - 543);
});
$data20 = $labels04->map(function($year) use ($supervision20) {
    return $supervision20->get($year - 543);
});
        // $data1=

        // users::select(
        //     DB::raw('YEAR(created_at) as year'),
        //     DB::raw('COUNT(DISTINCT id) as count')
        // )
        // ->where('role', "student")
        // ->groupBy(DB::raw('YEAR(created_at)'))
        // ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
        // ->get();







    // $data2=

    // registers::select(
    //     DB::raw('YEAR(created_at) as year'),
    //     DB::raw('COUNT(DISTINCT user_id) as count')
    // )
    // // ->where('role', "student")
    // ->groupBy(DB::raw('YEAR(created_at)'))
    // ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
    // ->get();

    // $data3 = DB::table('acceptance')
    // ->join('events', 'acceptance.user_id', '=', 'events.student_name')
    // ->select(
    //     DB::raw('YEAR(acceptance.created_at) as year'),
    //     DB::raw('COUNT(DISTINCT acceptance.user_id) as count')
    // )
    // ->groupBy(DB::raw('YEAR(acceptance.created_at)'))
    // ->orderBy(DB::raw('YEAR(acceptance.created_at)'), 'desc')
    // ->get();


    // $data4=

    // supervision::select(
    //     DB::raw('YEAR(created_at) as year'),
    //     DB::raw('COUNT(DISTINCT user_id) as count')
    // )

    // ->groupBy(DB::raw('YEAR(created_at)'))
    // ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
    // ->get();
        return view('officer.officerhome',compact(
            // 'users','users1','users2'


        'users02','users3','users4','users5'

        ,'labels01','data01','registers02','registers03','data20','registers04','data21','registers05','data021'
        ,'labels02','data02','supervision'
        ,'labels03','data03','supervision1',
        'labels04', 'data13', 'data12','supervision13','supervision12','data14','supervision15','data15'

,'supervision16','data16','supervision17','data17','supervision18','data18','supervision19','data19','supervision20','data20',

        'labels05', 'data05', 'data06','data07','events1','events2','events3','data007'
        ), compact('labels','data'

        ),["msg"=>"I am Editor role"]);
    }


    public function search01(Request $request)
    {

        $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');

        $users2 = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();
        $users3 =  acceptance::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();

        $users4 =  event::select(DB::raw("COUNT(DISTINCT student_name) as count"))
        ->get();
        $users5 =  informdetails::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();
        $users1 = registers::select(DB::raw("COUNT(DISTINCT id) as count"))
        ->get();


        $month = $request->input('month');
        $year = $request->input('year');

        // ตรวจสอบว่ามีการเลือกเดือนและปีหรือไม่
        if ($month && $year) {
            // ดึงข้อมูลจากฐานข้อมูลตามเงื่อนไข
            $data1 = users::whereYear('created_at', $year)
                             ->whereMonth('created_at', $month)
                             ->where('role', 'student')
                             ->get();
        } else {
            // ถ้าไม่มีการเลือกเดือนหรือปี ดึงข้อมูลทั้งหมด
            $data1=
            // DB::table('users')

            // ->join('student','registers.user_id','student.user_id')

            // ->join('student','users.id','student.user_id')
            // ->select('registers.*','users.fname','student.year')
            // ->select('users.*','users.fname','student.year')

            // ->join('registers','users.id','registers.user_id')
            // ->select('users.*','users.fname','registers.Status_registers')
            // ->where('role',"student")
            // ->distinct()
            // ->orderBy('users.updated_at', 'desc')
            // ->paginate(10);

            users::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('COUNT(DISTINCT id) as count')
            )
            ->where('role', "student")
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->get();


        }
        $month2 = $request->input('month2');
        $year2 = $request->input('year2');

        // ตรวจสอบว่ามีการเลือกเดือนและปีหรือไม่
        if ($month2 && $year2) {
            // ดึงข้อมูลจากฐานข้อมูลตามเงื่อนไข
            $data2 = registers::whereYear('created_at', $year2)
                             ->whereMonth('created_at', $month2)
                            //  ->where('role', 'student')
                             ->get();
        } else {
            // ถ้าไม่มีการเลือกเดือนหรือปี ดึงข้อมูลทั้งหมด
            $data2=


            registers::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('COUNT(DISTINCT user_id) as count')
            )
            // ->where('role', "student")
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->get();


        }
        $month3 = $request->input('month3');
        $year3 = $request->input('year3');

        // ตรวจสอบว่ามีการเลือกเดือนและปีหรือไม่
        if ($month3 && $year3) {
            // ดึงข้อมูลจากฐานข้อมูลตามเงื่อนไข
            $data3 = acceptance::whereYear('acceptance.created_at', $year3)
                             ->whereMonth('acceptance.created_at', $month3)
                            //  ->join('events', 'acceptance.user_id', '=', 'events.student_name')
                            //  ->select('acceptance.*', 'events.*')
                             ->get();
        } else {
            // ถ้าไม่มีการเลือกเดือนหรือปี ดึงข้อมูลทั้งหมด
            // $data3=
            // DB::table('users')

            // ->join('student','registers.user_id','student.user_id')

            // ->join('student','users.id','student.user_id')
            // ->select('registers.*','users.fname','student.year')
            // ->select('users.*','users.fname','student.year')

            // ->join('registers','users.id','registers.user_id')
            // ->select('users.*','users.fname','registers.Status_registers')
            // ->where('role',"student")
            // ->distinct()
            // ->orderBy('users.updated_at', 'desc')
            // ->paginate(10);

            $data3 = DB::table('acceptance')
    ->join('events', 'acceptance.user_id', '=', 'events.student_name')
    ->select(
        DB::raw('YEAR(acceptance.created_at) as year'),
        DB::raw('COUNT(DISTINCT acceptance.user_id) as count')
    )
    ->groupBy(DB::raw('YEAR(acceptance.created_at)'))
    ->orderBy(DB::raw('YEAR(acceptance.created_at)'), 'desc')
    ->get();


        }

        $data4=
        // =DB::registers
        // table('users')
        supervision::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('COUNT(DISTINCT user_id) as count')
        )
        // ->where('role', "student")
        ->groupBy(DB::raw('YEAR(created_at)'))
        ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
        ->get();
        $labels = $users->keys();
        //$data = $users->values();
        $data = $users->values();
        return view('officer.officerhome', compact('data1','users','users1','users2','users3','users4','users5'), compact('labels','data','data1','data2','data3','data4'),["msg"=>"I am Editor role"]);
    }

    public function search001(Request $request)
    {

        $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');

        $users2 = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();
        $users3 =  acceptance::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();

        $users4 =  event::select(DB::raw("COUNT(DISTINCT student_name) as count"))
        ->get();
        $users5 =  informdetails::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();
        $users1 = registers::select(DB::raw("COUNT(DISTINCT id) as count"))
        ->get();

        $month = $request->input('month');
        $year = $request->input('year');

        // ตรวจสอบว่ามีการเลือกเดือนและปีหรือไม่
        if ($month && $year) {
            // ดึงข้อมูลจากฐานข้อมูลตามเงื่อนไข
            $data1 = users::whereYear('created_at', $year)
                             ->whereMonth('created_at', $month)
                             ->where('role', 'student')
                             ->get();
        } else {
            // ถ้าไม่มีการเลือกเดือนหรือปี ดึงข้อมูลทั้งหมด
            $data1=
            // DB::table('users')

            // ->join('student','registers.user_id','student.user_id')

            // ->join('student','users.id','student.user_id')
            // ->select('registers.*','users.fname','student.year')
            // ->select('users.*','users.fname','student.year')

            // ->join('registers','users.id','registers.user_id')
            // ->select('users.*','users.fname','registers.Status_registers')
            // ->where('role',"student")
            // ->distinct()
            // ->orderBy('users.updated_at', 'desc')
            // ->paginate(10);

            users::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('COUNT(DISTINCT id) as count')
            )
            ->where('role', "student")
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->get();


        }

        $month2 = $request->input('month2');
        $year2 = $request->input('year2');

        // ตรวจสอบว่ามีการเลือกเดือนและปีหรือไม่
        if ($month2 && $year2) {
            // ดึงข้อมูลจากฐานข้อมูลตามเงื่อนไข
            $data2 = registers::whereYear('created_at', $year2)
                             ->whereMonth('created_at', $month2)
                            //  ->where('role', 'student')
                             ->get();
        } else {
            // ถ้าไม่มีการเลือกเดือนหรือปี ดึงข้อมูลทั้งหมด
            $data2=
            // DB::table('users')

            // ->join('student','registers.user_id','student.user_id')

            // ->join('student','users.id','student.user_id')
            // ->select('registers.*','users.fname','student.year')
            // ->select('users.*','users.fname','student.year')

            // ->join('registers','users.id','registers.user_id')
            // ->select('users.*','users.fname','registers.Status_registers')
            // ->where('role',"student")
            // ->distinct()
            // ->orderBy('users.updated_at', 'desc')
            // ->paginate(10);

            registers::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('COUNT(DISTINCT user_id) as count')
            )
            // ->where('role', "student")
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->get();


        }
        $labels = $users->keys();
        //$data = $users->values();
        $data = $users->values();
        return view('officer.officerhome', compact('data1','users','users1','users2','users3','users4','users5'), compact('labels','data','data1','data2'),["msg"=>"I am Editor role"]);
    }

    public function user1()
    {
        return view('officer.user1',["msg"=>"I am Editor role"]);
    }

    public function establishmentuser1()
    {
        $establishments=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')
        ->paginate(5);
        $major=DB::table('major')->paginate(5);
        return view('officer.establishmentuser1',compact('establishments','major'),["msg"=>"I am Editor role"]);
    }
    public function establishmentuser7()
    {
        $establishments=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')
        ->paginate(5);
        $major=DB::table('major')->paginate(5);
        return view('teacher.establishmentuser1',compact('establishments','major'),["msg"=>"I am Editor role"]);
    }

    public function student1()
    {
        $establishments=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')
        ->where('role',"student")
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
        $major=DB::table('major')->paginate(5);
        return view('officer.student',compact('establishments','major'),["msg"=>"I am Editor role"]);
    }

    public function student2()
    {
        $establishments=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')
        ->paginate(5);
        $major=DB::table('major')->paginate(5);
        return view('teacher.student',compact('establishments','major'),["msg"=>"I am Editor role"]);
    }



    public function viewestablishment($em_id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        // $establishments=DB::table('establishment')

        // ->find($em_id);
        $establishments=establishment::find($em_id);
        //  dd($establishments);
        $establishments1=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')
        ->paginate(5);
        $student=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')
        ->paginate(5);
        $users=DB::table('users')
      ->where('role',"student")

      ->get();
         return view('officer.viewestablishmentuser1',compact('establishments','users','establishments1','student',));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
     public function viewestablishment1($em_id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')

        ->find($em_id);
        //  dd($establishments);
        $establishments1=DB::table('establishment')
        ->join('users','establishment.user_id','users.id')
        ->select('establishment.*','users.fname')
        ->paginate(5);
        $users=DB::table('users')
      ->where('role',"student")

      ->get();
         return view('teacher.viewestablishmentuser1',compact('establishments','users','establishments1'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
     public function viewevents($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('events')

        ->find($id);
        //  dd($establishments);
        $establishments1=DB::table('establishment')
        // ->join('users','establishment.user_id','users.id')
        // ->select('establishment.*','users.fname')
        // ->paginate(5);
          ->select('em_name', DB::raw('GROUP_CONCAT(student_id) AS student_ids'))
    ->groupBy('em_name')
    ->havingRaw('COUNT(*) > 1')
    ->orderBy('id', 'desc')
        ->get();
        $users=DB::table('users')
      ->where('role',"student")

      ->get();
      $teacher=DB::table('teacher')
    //   ->where('role',"student")

      ->get();
      $users3=DB::table('student')

      ->get();
     //dd($establishments1);
         return view('teacher.viewevent',compact('establishments','users','users3','establishments1','teacher'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
     public function viewevents1($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('events')

        ->find($id);
        //  dd($establishments);
        $establishments1=DB::table('establishment')
        // ->join('users','establishment.user_id','users.id')
        // ->select('establishment.*','users.fname')
        // ->paginate(5);
        ->get();
        $users=DB::table('users')
      ->where('role',"student")

      ->get();
      $teacher=DB::table('teacher')
    //   ->where('role',"student")

      ->get();
         return view('officer.viewevent',compact('establishments','users','establishments1','teacher'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
     public function viewstudent($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('student')

        ->find($id);
        //  dd($establishments);
        $establishments1=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')
        ->paginate(5);
    //     $users=DB::table('users')
    //   ->where('role',"student")

    //   ->get();
      $users=DB::table('major')
    //   ->where('role',"student")

      ->get();
         return view('officer.viewstudent',compact('establishments','users','establishments1'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

     public function viewstudent1($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('student')

        ->find($id);
        //  dd($establishments);
        $establishments1=DB::table('student')
        ->join('users','student.user_id','users.id')
        ->select('student.*','users.fname')
        ->paginate(5);
    //     $users=DB::table('users')
    //   ->where('role',"student")

    //   ->get();
      $users=DB::table('major')
    //   ->where('role',"student")

      ->get();
         return view('teacher.viewstudent',compact('establishments','users','establishments1'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


    // public function editestablishmentuser1()
    // {
    //     // $establishments=DB::table('establishment')->paginate(5);

    //     return view('officer.editestablishmentuser1');
    // }

    #officer


    public function register1()
    {

        $registers=DB::table('users')

        // ->join('student','registers.user_id','student.user_id')
        ->join('registers','users.id','registers.user_id')
        ->join('student','users.id','student.user_id')
       // ->select('registers.*','users.fname','student.year')
       // ->select('users.*','users.fname','student.year')
       ->select('users.*','users.fname','student.term')
       ->where('role',"student")
       ->distinct()
       ->orderBy('users.updated_at', 'desc')
       ->paginate(10);
//dd($registers);
        return view('officer.register1',compact('registers'));
    }
    public function register3()
    {
        $registers=DB::table('users')

        // ->join('student','registers.user_id','student.user_id')
         ->join('registers','users.id','registers.user_id')
         ->join('student','users.id','student.user_id')
        // ->select('registers.*','users.fname','student.year')
        // ->select('users.*','users.fname','student.year')
        ->select('users.*','users.fname','student.term','student.term')
        ->where('role',"student")
        ->distinct()
        ->orderBy('users.updated_at', 'desc')
        ->paginate(10);
        $major1=DB::table('notify')
        ->orderBy('updated_at','desc')
        ->get();
//dd($registers);
        return view('teacher.register1',compact('registers','major1'));
    }
//หลักสูตรสาขา
    public function major()
    {
        $major=DB::table('major')
        // ->join('users','registers.user_id','users.id')
        // ->select('registers.*','users.fname')
        ->paginate(5);

        return view('officer.major',compact('major'));
    }

    //หลักสูตรสาขา
    public function major2()
    {
        $major=DB::table('major')
        // ->join('users','registers.user_id','users.id')
        // ->select('registers.*','users.fname')
        ->paginate(5);

        return view('teacher.major',compact('major'));
    }
//หมวด
public function category()
{
    $major=DB::table('notify')
    // ->join('users','registers.user_id','users.id')
    // ->select('registers.*','users.fname')
    ->paginate(5);

    return view('officer.category',compact('major'));
}
    public function timeline2()
    {
        $timelines=DB::table('timeline')
        ->join('users','timeline.user_id','users.id')
        ->select('timeline.*','users.name')
        ->paginate(5);

        return view('officer.timeline2',compact('timelines'));
    }
    public function acceptancedocument1()
    {
        $acceptances=DB::table('acceptance')
        ->join('users','acceptance.user_id','users.id')
       // ->join('establishment','acceptance.establishment_id','establishment.id')
    //    ->join('student','users.id','student.user_id')
        ->select('acceptance.*','users.fname'
        // ,'student.year','student.term'
        )
        ->where('role',"student")
                                                            ->orderBy('acceptance_id', 'desc')
        ->paginate(5);

    //     $informdetails=DB::table('users')


    //     ->join('informdetails','users.id','informdetails.user_id')
    //     ->join('student','users.id','student.user_id')
    //    // ->select('registers.*','users.fname','student.year')
    //    // ->select('users.*','users.fname','student.year')
    //    ->select('users.*','users.fname','student.year','student.term')
    //    ->where('role',"student")
    // //    ->distinct()
    //    ->orderBy('users.updated_at', 'desc')
    //    ->paginate(10);
        return view('officer.acceptancedocument1',compact('acceptances'));
    }

    public function acceptancedocument4()
    {
    //     $acceptances=DB::table('acceptance')
    //     ->join('users','acceptance.user_id','users.id')
    //    // ->join('establishment','acceptance.establishment_id','establishment.id')
    //     ->select('acceptance.*','users.fname')
    //     ->paginate(5);

        $acceptances=DB::table('users')

        // ->join('student','registers.user_id','student.user_id')
         ->join('acceptance','users.id','acceptance.user_id')
         ->join('student','users.id','student.user_id')
        // ->select('registers.*','users.fname','student.year')
        // ->select('users.*','users.fname','student.year')
        ->select('users.*','users.fname','student.term')
        ->where('role',"student")
        ->distinct()
        ->orderBy('users.updated_at', 'desc')
        ->paginate(10);
        return view('teacher.acceptancedocument1',compact('acceptances'));
    }

    public function informdetails2()
    {
        // $informdetails=DB::table('informdetails')
        // ->join('users','informdetails.user_id','users.id')
        // ->select('informdetails.*','users.fname')
        // ->orderBy('informdetails.updated_at', 'desc')
        // ->where('role',"student")
        // ->distinct()
        // ->orderBy('users.updated_at', 'desc')
        // ->paginate(5);

        $informdetails=DB::table('users')


        ->join('informdetails','users.id','informdetails.user_id')
        ->join('student','users.id','student.user_id')
       // ->select('registers.*','users.fname','student.year')
       // ->select('users.*','users.fname','student.year')
       ->select('users.*','users.fname','student.term')
       ->where('role',"student")
       ->distinct()
       ->orderBy('users.updated_at', 'desc')
       ->paginate(10);



        return view('officer.informdetails2',compact('informdetails'));
    }
    public function record2()
    {
        return view('officer.record2');
    }

    public function experiencereport2()
    {
        $report=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname','users.surname')
        ->paginate(5);

        return view('officer.experiencereport2',compact('report'));
    }
    public function assessmentreport2()
    {
        return view('officer.assessmentreport2');
    }
    public function advisor2()
    {
        return view('officer.advisor2');
    }
    public function practice()
    {
        return view('officer.practice');
    }
    public function documents2()
    {
        return view('officer.documents2');
    }
    public function Evaluate()
    {
        $supervision=DB::table('supervision')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
       ->join('users','supervision.user_id','users.id')
                        ->select('supervision.*','users.fname')
                        ->where('role',"student")
                                                            ->orderBy('supervision_id', 'desc')
        ->paginate(5);
        return view('officer.Evaluate',compact('supervision'));
    }
    public function report1()
    {
        $supervision=DB::table('users')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
      ->join('student','users.id','student.user_id')
      ->join('establishment','users.id','establishment.user_id')
                        ->select('users.*','student.student_id','student.term','establishment.em_name')
                        // ->select('users.*','users.fname')
                        ->where('role',"student") ->distinct()
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
        return view('officer.report1',compact('supervision'));
    }
    public function report01()
    {
        $supervision=DB::table('users')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
      ->join('student','users.id','student.user_id')
      ->join('establishment','users.id','establishment.user_id')
                        ->select('users.*','student.student_id','student.term','student.year','establishment.em_name')
                        // ->select('users.*','users.fname')
                        ->where('role',"student") ->distinct()
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
        return view('teacher.report1',compact('supervision'));
    }
    public function report2()
    {
    //     $supervision=DB::table('users')
    //     // ->join('users','supervision.user_id','users.id')
    //     // ->join('establishment','supervision.user_id','establishment.id')
    //     // ->select('supervision.*','users.fname','establishment.address')
    //     //->select('supervision.*')
    //    // ->where('establishment.establishment_id')
    //   ->join('registers','users.id','registers.user_id')
    // //   ->join('student','users.id','student.user_id')
    // //   ->join('establishment','users.id','establishment.user_id')
    //                     // ->select('users.*')
    //                      ->select('users.*','registers.namefile')
    //                     // ->select('users.*','users.fname')
    //                     ->where('role',"student")
    //     ->distinct()
    //                                                         ->orderBy('id', 'desc')
    //     ->paginate(5);
        // $supervision = DB::table('users')
        // ->join('registers', 'users.id', '=', 'registers.user_id')
        // ->select('users.id', 'users.username', 'users.fname', 'registers.namefile')
        // ->where('users.role', 'student')
        // ->orderBy('users.id', 'desc')->distinct()
        // ->paginate(5);
        $supervision = DB::table('users')
        // ->join('registers', 'users.id', '=', 'registers.user_id')
        // ->select('users.id', 'users.username', 'users.fname', 'registers.namefile')
        // ->select( 'registers.namefile')
        // ->where('users.role', "student")
        // ->distinct()  // ทำให้ผลลัพธ์ไม่ซ้ำกัน
        // ->orderBy('users.id', 'desc')
        // ->paginate(5);
        ->join('registers','users.id','registers.user_id')

        ->select('users.*','users.fname')
        ->where('role',"student")
        ->distinct()
        ->orderBy('users.updated_at', 'desc')
        ->paginate(10);

        $registers2 = DB::table('registers')
        // ->join('users', 'registers.user_id', '=', 'users.id')
         ->select('registers.*')
        ->where('registers.user_id', $supervision)
        // ->orderBy('namefile', 'asc')
        ->orderBy('registers.updated_at', 'desc')
        ->paginate(10);
        return view('officer.report2',compact('supervision','registers2'));
    }
    public function report02()
    {

        $supervision = DB::table('users')

        ->join('registers','users.id','registers.user_id')

        ->select('users.*','users.fname')
        ->where('role',"student")
        ->distinct()
        ->orderBy('users.updated_at', 'desc')
        ->paginate(10);

        $registers2 = DB::table('registers')
        // ->join('users', 'registers.user_id', '=', 'users.id')
         ->select('registers.*')
        ->where('registers.user_id', $supervision)
        // ->orderBy('namefile', 'asc')
        ->orderBy('registers.updated_at', 'desc')
        ->paginate(10);
        return view('teacher.report2',compact('supervision','registers2'));
    }
    public function getUserData(Request $request)
    {
        $user = user::find($request->id);
        return response()->json($user);
    }
    public function report3()
    {
        $supervision=DB::table('events')
       //  ->join('users','events.student_name','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')events
       // ->where('establishment.establishment_id')
    //  ->join('student','events.student_name','student.student_id')
    //  ->join('establishment','events.em_id','establishment.em_name')
                        ->select('events.*'
                        //  ,'student.fname' ,'student.student_id'
                        // ,'establishment.em_name'
                    //    ,'users.fname'
                        )
                        // ->select('users.*','users.fname')
                      //  ->where('role',"student")
                        // ->distinct()
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
       // dd($supervision);
        $users1=DB::table('users')
        ->where('role',"student")

        ->get();
        return view('officer.report3',compact('supervision','users1'));
    }
    public function report03()
    {
        $supervision=DB::table('events')
       //  ->join('users','events.student_name','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')events
       // ->where('establishment.establishment_id')
     ->join('student','events.student_name','student.user_id')
     ->join('establishment','events.em_id','establishment.id')
                        ->select('events.*'
                         ,'student.fname' ,'student.student_id'
                        ,'establishment.em_name'
                    //    ,'users.fname'
                        )
                        // ->select('users.*','users.fname')
                      //  ->where('role',"student")
                        ->distinct()
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
        $users1=DB::table('users')
        ->where('role',"student")

        ->get();
        return view('teacher.report3',compact('supervision','users1'));
    }
    public function report4()
    {
        $supervision=DB::table('users')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
      ->join('supervision','users.id','supervision.user_id')
    //   ->join('establishment','users.id','establishment.user_id')
                        ->select('users.*','supervision.user_id')
                        // ->select('users.*','users.fname')
                        ->where('role',"student") ->distinct()
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
        return view('officer.report4',compact('supervision'));
    }
    public function report04()
    {
        $supervision=DB::table('users')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','supervision.user_id','establishment.id')
        // ->select('supervision.*','users.fname','establishment.address')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
      ->join('supervision','users.id','supervision.user_id')
    //   ->join('establishment','users.id','establishment.user_id')
                        ->select('users.*','supervision.user_id')
                        // ->select('users.*','users.fname')
                        ->where('role',"student") ->distinct()
                                                            ->orderBy('id', 'desc')
        ->paginate(5);
        return view('teacher.report4',compact('supervision'));
    }
    public function Supervise()
    {
        $advisors=DB::table('advisor')
        //->join('users','events.user_id','users.id')
        //->select('events.*','users.name')
        ->paginate(5);
        return view('officer.Supervise',compact('advisors'));
    }
    public function supervision()
    {
        $events=DB::table('events')
        ->join('users','events.user_id','users.id')
        ->select('events.*','users.fname','users.surname')
        ->paginate(5);
        return view('officer.supervision',compact('events'));
    }

    public function supervision1()
    {
        $events=DB::table('events')
        // ->join('users', 'events.student_name', 'users.id')
        //  ->select('events.*', 'users.fname', 'users.surname')
        //  ->join('users','events.student_name','users.id')
        //  ->select('events.*','users.username')
         ->orderBy('events.updated_at','desc')

        ->paginate(10);
        $users2=DB::table('student')
        ->get();
    //     $users=DB::table('users')
    //   ->where('role',"student")->paginate(5);
        // $major=DB::table('users')->paginate(5);
        // $studentNameFromDatabase = $events; // ให้เปลี่ยนเป็นการดึงจากฐานข้อมูลตามการใช้งานของคุณ

        // // แปลง JSON string เป็น PHP array
        // $phpArrayFromDatabase = json_decode($studentNameFromDatabase);
        return view('teacher.supervision',compact('events','users2'));
    }



// ,'major','phpArrayFromDatabase','users'




    public function calendar5(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('officer.calendar4',['events' => $events]);
    }

    public function calendar6(Request $request)
    {

        $events = array();
        $bookings = schedule::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('officer.calendar6',['events' => $events]);
    }


    public function schedule()
    {
        $schedules=DB::table('download')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.name')
        ->paginate(5);
        return view('officer.schedule',compact('schedules'));
    }

    public function viewschedule($schedule_id) {
        //ตรวจสอบข้อมูล
        // $advisors=advisor::find($advisor_id);
        // $establishments=establishment::find($id);
        $establishments=schedule::find($schedule_id);
        //  dd($establishments);

         return view('officer.viwe.viewschedule',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


    public function Evaluationdocuments()
    {
        $evaluationdocuments=DB::table('evaluationdocument')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.name')
        ->paginate(5);
        return view('officer.Evaluationdocuments',compact('evaluationdocuments'));
    }







// teacherHome
    public function teacherHome()
    {
        // $users5 = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        // ->get();
        // $users10 = registers::select(DB::raw("COUNT(*) as count"))
        // ->where('Status_registers', 'รอตรวจสอบ')
        // ->get();
        // $users11 = registers::select(DB::raw("COUNT(*) as count"))
        // ->where('Status_registers', 'ตรวจสอบเอกสารแล้ว')
        // ->get();

        // $users6 = acceptance::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        // ->get();
        // $users7 = informdetails::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        // ->get();
        // $users9 = supervision::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        // ->get();

        $users3 =  acceptance::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();

        $users4 =  event::select(DB::raw("COUNT(DISTINCT student_name) as count"))
        ->get();
        $users5 =  informdetails::select(DB::raw("COUNT(DISTINCT user_id) as count"))
        ->get();
        $users1 = registers::select(DB::raw("COUNT(DISTINCT id) as count"))
        ->get();
        // $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at ) AS year_name "))
        // ->groupBy(DB::raw("YEAR(created_at)"))
        // ->pluck('count', 'year_name');



    // $labels = $users->keys()->map(function ($month) {
    //     return Carbon::createFromDate(null, $month, null)->format('F Y');
    // });

    // $labels = $users->keys()->map(function ($monthName) {
        //     return ucfirst($monthName);
        // });
      //dd($users);
     //year
     //YEAR

            $users02 = Users::where('role', 'student')
            ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');
            $labels = $users02->keys();
            $labels = $labels->map(function($year) {
                return $year + 543;
            });
            $data = $users02->values();
    //dd($users02);
            $registers02 = registers::
            where('Status_registers', 'อนุมัติเอกสารแล้ว')
            ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');

            $registers03 = registers::
            where('Status_registers','รออนุมัติ')
            ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');
            $registers04 = registers::
            where('Status_registers','ไม่อนุมัติ')
            ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');
            $registers05 = registers::

            select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');
            // $labels01 = $registers02->keys();
            // $labels01 = $labels01->map(function($year) {
            //     return $year + 543;
            // });
            // $data01 = $registers02->values();
    // dd($registers03);
    // ปีที่ใช้ใน labels
    $labels01 = $registers02->keys()
     ->merge($registers03->keys())
     ->merge($registers04->keys())
     ->merge($registers05->keys())
    // ->merge($supervision14->keys())
    // ->merge($supervision15->keys())
    // ->merge($supervision16->keys())
    // ->merge($supervision17->keys())
    // ->merge($supervision18->keys())
    // ->merge($supervision19->keys())
    ->unique()
    ->sort()
    ->map(function($year) {
        return $year + 543;
    });

    // เตรียมข้อมูลสำหรับ dataset
    $data01 = $labels01->map(function($year) use ($registers02) {
        return $registers02->get($year - 543);
    });
    $data20 = $labels01->map(function($year) use ($registers03) {
        return $registers03->get($year - 543);
    });
    $data21 = $labels01->map(function($year) use ($registers04) {
        return $registers04->get($year - 543);
    });
    $data021 = $labels01->map(function($year) use ($registers05) {
        return $registers05->get($year - 543);
    });
    // $data12 = $labels04->map(function($year) use ($supervision12) {
    //     return $supervision12->get($year - 543);
    // });




    //  dd($data);
    $supervision = Event::where('Status_events', 'รอรับทราบและยืนยันเวลานัดนิเทศ')
    ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');
            $labels02 = $supervision->keys();
            $labels02 = $labels02->map(function($year) {
                return $year + 543;
            });
            $data02 = $supervision->values();


            $events1 = Event::where('Status_events', 'รับทราบและยืนยันเวลานัดแล้ว')
            ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');

    $events2 = Event::where('Status_events', 'ขอเปลี่ยนเวลานัดนิเทศ')
            ->select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');

            $events3 = Event::
            select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');

    // Merge and sort years for labels
    $labels05 = $events1->keys()
    ->merge($events2->keys())
        ->merge($supervision->keys())
        ->merge($events3->keys())
        ->unique()
        ->sort()
    ->map(function($year) {
    return $year + 543;
    });
        // dd($labels05);
    // Get counts for each year
    $data05 = $labels05->map(function($year) use ($events1) {
    return $events1->get($year - 543, 0);
    });

    $data06 = $labels05->map(function($year) use ($events2) {
    return $events2->get($year - 543, 0);
    });
    $data07 = $labels05->map(function($year) use ($supervision) {
        return $supervision->get($year - 543, 0);
        });
        $data007 = $labels05->map(function($year) use ($events3) {
            return $events3->get($year - 543, 0);
            });

            $supervision1 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
            ->groupBy(DB::raw("YEAR(created_at)"))
            ->pluck('count', 'year_name');
            $labels03 = $supervision1->keys();
            $labels03 = $labels03->map(function($year) {
                return $year + 543;
            });
            $data03 = $supervision1->values();





    // ข้อมูลแบบประเมินผลนักศึกษาสหกิจศึกษา (สก.13)
    $supervision13 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
        ->where('score', '>', 100)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $supervision14 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
        ->where('score', '<', 100)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
    // dd($supervision13);
    // ข้อมูลแบบบันทึกการนิเทศสหกิจศึกษา (สก.12)
    $supervision12 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
        ->where('score', '>', 50)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $supervision15 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
        ->where('score', '<', 50)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');


        $supervision16 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
        ->where('score', '>', 50)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $supervision17 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
        ->where('score', '<', 50)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');

        $supervision18 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
        ->where('score', '>', 50)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $supervision19 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->where('namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
        ->where('score', '<', 50)
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
        $supervision20 = supervision::select(DB::raw("COUNT(DISTINCT supervision_id) as count"), DB::raw("YEAR(created_at) as year_name"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('count', 'year_name');
    // ปีที่ใช้ใน labels
    $labels04 = $supervision13->keys()
    ->merge($supervision12->keys())
    ->merge($supervision14->keys())
    ->merge($supervision15->keys())
    ->merge($supervision16->keys())
    ->merge($supervision17->keys())
    ->merge($supervision18->keys())
    ->merge($supervision19->keys())
    ->merge($supervision20->keys())
    ->unique()
    ->sort()
    ->map(function($year) {
        return $year + 543;
    });

    // เตรียมข้อมูลสำหรับ dataset
    $data13 = $labels04->map(function($year) use ($supervision13) {
        return $supervision13->get($year - 543);
    });

    $data12 = $labels04->map(function($year) use ($supervision12) {
        return $supervision12->get($year - 543);
    });
    $data14 = $labels04->map(function($year) use ($supervision14) {
        return $supervision14->get($year - 543);
    });
    $data15 = $labels04->map(function($year) use ($supervision15) {
        return $supervision15->get($year - 543);
    });
    $data16 = $labels04->map(function($year) use ($supervision16) {
        return $supervision16->get($year - 543);
    });
    $data17 = $labels04->map(function($year) use ($supervision17) {
        return $supervision17->get($year - 543);
    });
    $data18 = $labels04->map(function($year) use ($supervision18) {
        return $supervision18->get($year - 543);
    });
    $data19 = $labels04->map(function($year) use ($supervision19) {
        return $supervision19->get($year - 543);
    });
    $data20 = $labels04->map(function($year) use ($supervision20) {
        return $supervision20->get($year - 543);
    });
        return view('teacher.teacherhome',compact(
            // 'users1','users2','users3','users4','users8'

            'users02','users3','users4','users5'

            ,'labels01','data01','registers02','registers03','data20','registers04','data21','registers05','data021'
            ,'labels02','data02','supervision'
            ,'labels03','data03','supervision1',
            'labels04', 'data13', 'data12','supervision13','supervision12','data14','supervision15','data15'

    ,'supervision16','data16','supervision17','data17','supervision18','data18','supervision19','data19','supervision20','data20',

            'labels05', 'data05', 'data06','data07','events1','events2','data007','events3'
            ), compact('labels','data'

            ),["msg"=>"I am teacher role"]);
    }
    public function documents1()
    {
        $documents=DB::table('documents')
        // ->join('users','report.user_id','users.id')
        // ->select('report.*','users.name')
        ->paginate(5);

        return view('teacher.documents1',compact('documents'));
    }
    public function timeline1()
    {
        $timelines=DB::table('timeline')
        ->join('users','timeline.user_id','users.id')
        ->select('timeline.*','users.name')
        ->paginate(5);
        return view('teacher.timeline1',compact('timelines'));
    }
    public function informdetails1()
    {
        $informdetails=DB::table('users')

        // ->join('student','registers.user_id','student.user_id')
         ->join('informdetails','users.id','informdetails.user_id')
         ->join('student','users.id','student.user_id')
        // ->select('registers.*','users.fname','student.year')
        // ->select('users.*','users.fname','student.year')
        ->select('users.*','users.fname','student.term')
        ->where('role',"student")
        ->distinct()
        ->orderBy('users.updated_at', 'desc')
        ->paginate(10);
        // $informdetails=DB::table('informdetails')

        // ->join('users','informdetails.user_id','users.id')
        // ->select('informdetails.*','users.fname')
        // -> where('role','student')
        // ->orderBy('informdetails.updated_at', 'DESC')
        // ->paginate(10);

        //return view('student.informdetails',compact('informdetails'));

        return view('teacher.informdetails1',compact('informdetails'));
    }
    public function record1()
    {
        return view('teacher.record1');
    }
    public function listofteachers1()
    {
        return view('teacher.listofteachers1');
    }
    public function estimate1()
    {
        $supervision=DB::table('supervision')
       // ->join('users','users.id','=','users.id')
        ->join('users','supervision.user_id','users.id')
        // ->join('establishment','establishment.id','=','establishment_id')
        ->select('supervision.*','users.fname')
        -> where('role','student')
        ->orderBy('supervision.updated_at', 'DESC')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
        ->paginate(10);
        return view('teacher.estimate1',compact('supervision'));
    }
    public function es1()
    {
        $supervision=DB::table('permission')
       // ->join('users','users.id','=','users.id')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','establishment.id','=','establishment_id')
        // ->select('supervision.*','users.fname')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
        ->paginate(5);
        return view('teacher.es1',compact('supervision'));
    }

    public function es2()
    {
        $supervision=DB::table('events')
        // ->join('users','events.student_name','users.id')
        // ->join('establishment','events.em_id','establishment.id')
        // ->select('events.*','establishment.em_name','users.fname')
        // ->select('events.*','users.fname')
        //  ->where('role',"student")
        ->orderBy('id', 'desc')
       // ->join('users','users.id','=','users.id')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','establishment.id','=','establishment_id')
        // ->select('supervision.*','users.fname')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
        ->paginate(5);
        return view('officer.es1',compact('supervision'));
    }


    public function teacher01()
    {
        $supervision=DB::table('teacher')
       // ->join('users','users.id','=','users.id')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','establishment.id','=','establishment_id')
        // ->select('supervision.*','users.fname')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
       ->orderBy('teacher.updated_at', 'DESC')
        ->paginate(5);
        return view('teacher.teacher1',compact('supervision'));
    }


    public function request()
    {
        $users=DB::table('users')

        -> where('role','student')
        ->orWhere('role', '=', '0')
       // ->join('users','users.id','=','users.id')
        // ->join('users','supervision.user_id','users.id')
        // ->join('establishment','establishment.id','=','establishment_id')
        // ->select('supervision.*','users.fname')
        //->select('supervision.*')
       // ->where('establishment.establishment_id')
        ->paginate(5);
        return view('teacher.request',compact('users'));
    }



    public function advisor1()
    {
        return view('teacher.advisor1');
    }
    public function reportresults1()
    {
        $report=DB::table('report')
        ->join('users','report.user_id','users.id')
        ->select('report.*','users.fname','users.surname')
        ->paginate(5);
        return view('teacher.reportresults1',compact('report'));
    }

    public function registeruser1()
    {
        $registers=DB::table('registers')
        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.name')
        ->paginate(5);
        return view('teacher.register',compact('registers'));
    }

    public function calendar3(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('teacher.calendar2',['events' => $events]);
    }

    public function calendar4(Request $request)
    {

        $events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Test') {
                $color = '#924ACE';
            }
            if($booking->title == 'Test 1') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'name'   => $booking->name,
                'title' => $booking->title,
                'start' => $booking->start,
                'end' => $booking->end,
                'color' => $color,
                'Status' => $booking->Status,
            ];
        }

        return view('teacher.calendar',['events' => $events]);
    }



    public function calendar5confirm()
    {
        $events=DB::table('events')
        ->join('users','events.user_id','users.id')
        ->select('events.*','users.fname')
        //->where('user_id', auth()->id())
        ->paginate(3);
        $report_results=DB::table('report_results')
        ->join('users','report_results.user_id','users.id')
        ->select('report_results.*','users.fname')
        ->where('report_results.namefile', 'แบบบันทึกการนิเทศงานสหกิจศึกษา(สก12)','')
        ->where('user_id', auth()->id())
        ->paginate(5);

        $report_results1=DB::table('report_results')
        ->join('users','report_results.user_id','users.id')
        ->select('report_results.*','users.fname')
        ->where('report_results.namefile', 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก15)','')
        ->where('user_id', auth()->id())
        ->paginate(5);
        return view('teacher.calendar2confirm',compact('events','report_results','report_results1'));
    }

    public function testhome()
    {

        return view('test1.testhome',);

    }






    public function adminHome()
    {
        // $users=DB::table('users')->get();
      //  $users=Users::get();
       // $users = Users::select(DB::raw("COUNT(*) as count")
       // , DB::raw("MONTHNAME(created_at) as month_name"))
                   // ->whereYear('created_at', date('Y'))
                   //->groupBy(DB::raw("Month(created_at)"))
                   // ->pluck('count', 'month_name');
                    //->get();
                   // $users=DB::table('registers')

                    //->select(DB::raw("COUNT(*)(created_at)id"))
                   // ->select(DB::raw("COUNT(created_at),id"))
                   // -> whereYear('created_at', date('Y'))
                   // ->groupBy('created_at')
                   // ->pluck('id', 'created_at');

                  // ->groupBy('id')
                   // ->orderBy('created_at','desc')
                   // ->get();
            //      //->paginate(5);
       // $labels = $users->keys();

//  $users = registers::selectraw('MONTH(created_at)as month,COUNT(*) as count')
//    -> whereYear('created_at', date('Y'))
//  ->groupBy('month')
//   ->orderBy('month')
//   ->get();

// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
//                     ->whereYear('created_at', date('Y'))
//                     ->groupBy(DB::raw("Month(created_at)"))
//                     ->pluck('count', 'month_name');

// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("YEAR_NAME(created_at) as year_name"))

//     ->whereYear('created_at', date('Y'))
//     ->groupBy(DB::raw("YEAR(created_at)"))
//     ->pluck('count', 'year_name');



// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
// ->whereYear('created_at', date('Y'))
// ->groupBy(DB::raw("Month(created_at)"))
// ->pluck('count', 'month_name');

// $users = registers::select(DB::raw("COUNT(*) as count"), DB::raw("YEAR(created_at) as year_name"))
//     //->whereYear('created_at', date('Y'))
//     ->groupBy(DB::raw("YEAR(created_at)"))
//     ->pluck('count', 'year_name');

// $users1 = Users::select('id')
//     ->get();
    // $users1=DB::table('users')

    // ->select('users.*')  ->paginate(5);
    $users1 = Users::select(DB::raw("COUNT(DISTINCT id) as count"))
    ->get();

    // $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    // ->groupBy(DB::raw("YEAR(created_at)"))
    // ->pluck('count', 'year_name');

    $users = Users::select(DB::raw("COUNT(DISTINCT id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
// $labels = $users->keys()->map(function ($month) {
//     return Carbon::createFromDate(null, $month, null)->format('F Y');
// });

// $labels = $users->keys()->map(function ($monthName) {
    //     return ucfirst($monthName);
    // });
  //dd($users);
 //year
 //YEAR
       $labels = $users->keys();
        //$data = $users->values();
        $data = $users->values();
        return view('admin.adminhome',compact('users','users1'), compact('labels','data'),["msg"=>"I am Admin role"]);

    }

    public function user()
    {
        $users=DB::table('users')

        //  -> where('role','student')
// ->orWhere('role', '=', '0')

        // ->orWhere('role', '=', 'test')
        //-> where('role','1',)

        ->orderBy('users.updated_at', 'desc')
        ->paginate(5);
        //->get();
        #แสดงข้อมูลเฉพาะ
        // $users = DB::table('users')->where('role', 'student')->get();
        // $users=Users::get();
        return view('admin.user',compact('users'),["msg"=>"I am Admin role"]);

    }
    public function user2()
    {
        $users=DB::table('users')

        //  -> where('role','student')
// ->orWhere('role', '=', '0')

        // ->orWhere('role', '=', 'test')
        //-> where('role','1',)


        ->paginate(5);
        //->get();
        #แสดงข้อมูลเฉพาะ
        // $users = DB::table('users')->where('role', 'student')->get();
        // $users=Users::get();
        return view('teacher.user',compact('users'),["msg"=>"I am Admin role"]);

    }

    public function changeStatus(Request $request)
    {
        $user = Users::find($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function changeStatus3(Request $request)
    {
        $user = Users::find($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function updateStatus(Request $request)
    {
        dd($request);
        $product = Users::find($request->id);
        $product->role = $request->role;
        $product->save();
        return response()->json(['success'=>'Status change successfully.']);
    }


    public function edituser($id)
    {
        $users=Users::find($id);
        $major=DB::table('major')
        // ->join('users','acceptance.user_id','users.id')
        // ->join('establishment','acceptance.establishment_id','establishment.id')
        // ->select('acceptance.*','users.name','establishment.address')
        ->paginate(5);
        return view('admin.edituser',compact('users','major'),["msg"=>"I am Admin role"]);

    }
    public function edituser3($id)
    {
        $users=Users::find($id);
        $major=DB::table('major')
        // ->join('users','acceptance.user_id','users.id')
        // ->join('establishment','acceptance.establishment_id','establishment.id')
        // ->select('acceptance.*','users.name','establishment.address')
        ->paginate(5);
        return view('teacher.edit.edituser',compact('users','major'),["msg"=>"I am Admin role"]);

    }
    public function test(Request $request)
    {
        // $users=DB::table('users')->get();
        //$users=Users::get();

        if($request->ajax()) {
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
            return response()->json($data);
        }

        return view('student.test',["msg"=>"I am student role"]);

    }

    public function test2(Request $request)
    {
        // $users=DB::table('users')->get();
       // $path = public_path('test/');
//dd($request);
    // if(!File::isDirectory($path)){
    //     File::makeDirectory($path, 0777, true, true);


    // }
//     if($request->hasFile("files")){
//         $file=$request->file("files");
//          $imageName=time().'_'.$file->getClientOriginalName();
//         $file->move(\public_path("/fileinformdetails"),$imageName);
//     }
//     ([


//            "name" =>$request->name,

//       ]);
//     $path = public_path().'/test'.$request->name ;
// File::makeDirectory($path, $mode = 0777, true, true);
   return view('student.test',["msg"=>"I am student role"]);
    }


    public function test1(Request $request){
        // $ch =curl_init("https://notify-api.line.me/api/notify")
        // $authorization ="Authorization: Bearer"('line_token');
        // $payload = json_encode($line_mge);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);

        // curl_setopt($ch, CURLOPT_HTTPHEADER,$array('Content-Type:application/json',$authorization));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        // $result=curl_exec($ch);
        // curl_exec($ch);
        // $line_token = "NnBcVp0RwWJZsbE7GTdjE96g3F68wxz1KANBrOSTf80";
//    dd($request->message1);

		$request->validate([
			'message1' => 'required'



		]);

    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");
    // QCMCPw8g9sW980Gz3OkyjGA3qQI6mljDIQ581rXgQcs
	$sToken = "QCMCPw8g9sW980Gz3OkyjGA3qQI6mljDIQ581rXgQcs";
	$sMessage = "มีรายการสั่งซื้อเข้าจ้า....";
    $sMessage .= "มีรายการสั่งซื้อเข้าจ้า....".$request->message1."\n";

	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt( $chOne, CURLOPT_POST, 1);
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $chOne );
    return redirect('/studenthome/test')->with('success', 'สมัครสำเร็จ.');
    // if($result){
    //     $
    // }
	//Result error
	if(curl_error($chOne))
	{
		echo 'error:' . curl_error($chOne);
	}
	else {
		$result_ = json_decode($result, true);
		echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	}
	curl_close( $chOne );
   }



    public Model $model;
    public string $field;

    public bool $isActive;

    public function mount()
    {
        $this->isActive = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.toggle-switch');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }






    public function cooperative()
    {
        $download=DB::table('download')
            -> where('status','1')
            ->orderBy('namefile', 'asc')
        // ->orderBy('em_name','desc')
        //->pluck('name')
   // ->implode(', ');
        //->select('name')
        // ->join('major','establishment.id','major.major_id')
        // ->select('establishment.*','major.name_major')
        ->paginate(6);
        $download1=DB::table('download')
            -> where('status','2')
            ->orderBy('namefile', 'asc')
        ->paginate(6);
        $download2=DB::table('download')

        -> where('status','3')
->orderBy('namefile', 'asc')
    ->paginate(6);
        return view('cooperative.cooperative',["msg"=>"I am Admin role"],compact('download','download1','download2'));

    }
    public function welcome()
    {
        $major=DB::table('notify')
            // -> where('status','1')
            // ->orderBy('namefile', 'asc')
        ->orderBy('updated_at','desc')
        //->pluck('name')
   // ->implode(', ');
        //->select('name')
        // ->join('major','establishment.id','major.major_id')
        // ->select('establishment.*','major.name_major')
        // ->get();
        ->paginate(1);
        $download1=DB::table('download')
            -> where('status','2')
            ->orderBy('namefile', 'asc')
        ->paginate(6);
        $download2=DB::table('download')

        -> where('status','3')
->orderBy('namefile', 'asc')
    ->paginate(6);
        return view('welcome',["msg"=>"I am Admin role"],compact('major','download1','download2'));

    }
    public function cooperative1()
    {
        // $major=DB::table('major')

        // ->paginate(5);

        return view('cooperative.cooperative1',["msg"=>"I am Admin role"]);
// ,compact('major')
    }
    public function cooperative2()
    {
        $users=DB::table('users')

         -> where('role','student')
->orWhere('role', '=', '0')

        // ->orWhere('role', '=', 'test')
        //-> where('role','1',)


        ->paginate(5);
        //->get();
        #แสดงข้อมูลเฉพาะ
        // $users = DB::table('users')->where('role', 'student')->get();
        // $users=Users::get();
        return view('cooperative.cooperative2',["msg"=>"I am Admin role"],compact('users'));

    }
    public function establishment()
    {

        $establishments=DB::table('establishment') ->orderBy('em_name','desc')
        //->pluck('name')
   // ->implode(', ');
        //->select('name')
        // ->join('major','establishment.id','major.major_id')
        // ->select('establishment.*','major.name_major')
        ->paginate(6);
        //->get();
        //  dd($establishments);
         // $users=DB::table('users')->get();
         $registers=DB::table('establishment')

        //  ->join('category', 'establishment.category_id', '=', 'category.id')
        //  ->select('establishment.*', 'category.name as category_name')
         ->join('category','establishment.id','category.category_id')
         ->select('establishment.*','category.*')
        //  ->join('category', 'establishment.id', '=', 'category.category_id')
        //  ->select('establishment.*', 'category.name as category_name')
         ->paginate(5);

        // //  $registers1=DB::table('registers')
        // //  ->join('users','registers.user_id','users.id')
        // //  ->select('registers.*','users.fname')
//dd($registers);
        //  ->paginate(5);


        $registers1=DB::table('category')
        ->get();
         //->paginate(5);

        $registers2=DB::table('major')
        ->paginate(5);
        return view('cooperative.establishment',compact('establishments','registers','registers1','registers2'));

    }
    public function login01()
    {

        $establishments=DB::table('establishment') ->orderBy('em_name','desc')
        //->pluck('name')
   // ->implode(', ');
        //->select('name')
        ->paginate(6);
        //->get();
        //  dd($establishments);
         // $users=DB::table('users')->get();

        return view('login',compact('establishments'));

    }

    public function changeStatus2(Request $request)
    {
     // dd();
        $user = test::find($request->id);
        $user->role = $request->role;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function changeStatus1()
    {
        $establishments=DB::table('test')->get();

        return view('test4',compact('establishments'));

    }

    public function test6()
    {
        $establishments=DB::table('test')->get();

        return view('test6',compact('establishments'));

    }



}
?>
