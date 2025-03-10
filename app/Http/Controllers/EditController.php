<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\establishment;
use App\Models\registers;
use App\Models\users;
use App\Models\informdetails;
use App\Models\report;
use App\Models\Event;
use App\Models\supervision;
use App\Models\acceptance;
use App\Models\advisor;
use App\Models\schedule;
use App\Models\Evaluationdocument;
use App\Models\report_results;
use App\Models\major;
use App\Models\teacher;
use App\Models\permission;
use App\Models\category;
use App\Models\student;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
class EditController extends Controller
{


    public function editestablishment($id) {
        //ตรวจสอบข้อมูล

        $establishments=establishment::find($id);
        // $major=DB::table('major')
        // $establishments=establishment::find($id);
        // $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);
        $major=DB::table('major')->paginate(5);
        // $major1=DB::table('category')->paginate(5);
         return view('officer.editestablishmentuser1',compact('establishments','major'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


     public function establishmentuseredit($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);

         return view('student.Edit.establishmentuserview',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
     public function editregisteruser($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('registers')->find($id);
        //  dd($establishments);

         return view('student.Edit.editregister',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

     public function edit2register($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('registers')->find($id);
        //  dd($establishments);

         return view('student.Edit.edit2register',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


     public function   updateestablishment(Request $request,$id) {
        //ตรวจสอบข้อมูล
//dd($request);
        // $establishments=establishment::find($id);
        // $establishments=DB::table('establishment')->find($id);
        //  dd($id,$request);
        //  $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'phone' => 'required',

        // ]);
        $request->validate([
            // 'images' => ['required','mimes:jpg,jpeg,png'],
            // 'name' => ['required','min:5'],
            'images' => 'mimes:jpg,jpeg,png|max:1024',
        ]
    ,[

        'images.mimes' => 'ไฟล์ต้องเป็นjpg,jpeg,pngเท่านั้น',
        'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
    ]
    );




        $post=establishment::findOrFail($id);

        if($request->hasFile("images")){
            if (File::exists("image/".$post->images)) {
                File::delete("image/".$post->images);
            }
            $file=$request->file("images");
            $post->images=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/image"),$post->images);
            $request['images']=$post->images;
        }


        $post->update
        ([
            // "major_id" =>$request->major_id,
           //"username" =>$request->username,
           "em_name" => $request->em_name,
           "em_address" => $request->em_address,
           'em_telephone' => $request->em_telephone,
           "em_email" => $request->em_email,
           'em_contact_name' => $request->em_contact_name,
           "em_Contact_email" => $request->em_Contact_email,
           'em_contactposition' => $request->em_contactposition,
           "em_job" => $request->em_job,
        //    "status" =>'0',
        //    "user_id" =>'0',

//  $post->major_id = $request->major_id,
//  $post->category_id = $request->category_id,
           "images"=>$post->images,
        ]);


     //   $post->major_id = $request->major_id;

    //   DB::table('establishment')($data);
        return redirect('/officer/establishmentuser1')->with('error','success', 'แก้ไขข้อมูลสำเร็จ.');
        //  return view('officer.editestablishmentuser1',compact('establishments'));
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


     public function delestablishment($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        // DB::table('establishment')->where('id',$id)->delete();

        $posts=establishment::findOrFail($id);

         if (File::exists("image/".$posts->images)) {
             File::delete("image/".$posts->images);
         }

        //  dd($posts);
         $posts->delete();
        //  return view('officer.editestablishmentuser1',compact('establishments'));
         return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
     }

    //  public function deletecover($id){
    //     $cover=Post::findOrFail($id)->cover;
    //     if (File::exists("cover/".$cover)) {
    //        File::delete("cover/".$cover);
    //    }
    //    return back();
    // }


    public function deleteimage($id){
        // $cover=Post::findOrFail($id)->images;
       dd($id,);
        $images=establishment::findOrFail($id)->images;
        if (File::exists("/image".$images)) {
           File::delete("/image".$images);
       }
       return back();
}


public function   updateregisteruser(Request $request,$id) {
    //ตรวจสอบข้อมูล

// dd($request);

    $request->validate([

        // 'filess' => 'mimes:jpeg,jpg,png',
        'filess' => 'mimes:pdf|max:1024',
        //'filess' => 'sometimes|required|mimes:jpeg,jpg,png',
        // 'name' => ['required'],
        // 'namefile' => 'required',
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],
    [
        // 'namefile.required' => "กรุณาชื่อไฟล์",
            // 'establishment.required' => "กรุณา",
            'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
            // 'name.required' => "กรุณากรอกชื่อไฟล์",
        ]
    );
    $post=registers::findOrFail($id);
    $post->user_id = Auth::user()->id;
    $post->Status_registers ="รออนุมัติ";
    $post->annotation ="-";

    if($request->hasFile("filess")){
        // if (File::exists(public_path("file/".$post->filess))) {
        //     File::delete(public_path("file/".$post->filess));
        // }
        if (File::exists("document/".$post->filess)) {
            File::delete("document/".$post->filess);
        }
        $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/document"),$post->filess);
        $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
        // "establishment"=>$request->establishment,

        // "filess"=>$request->filess,
        "filess"=>$post->filess,
        "namefile" => $request->namefile,
        // "year" => $request->year,
        // "term" => $request->term,
        // "filess" => $post->filess
    ]);

    return redirect('/studenthome1')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }


 public function delregister($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=registers::findOrFail($id);

     if (File::exists("file/".$posts->filess)) {
         File::delete("file/".$posts->filess);
     }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }




 #informdetails

 public function editinformdetails($informdetails_id) {
    //ตรวจสอบข้อมูล
    //dd($informdetails_id);
    $informdetails=informdetails::find($informdetails_id);
    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);

     return view('student.Edit.editinformdetails',compact('informdetails'));

 }
 public function editinformdetails0($informdetails_id) {
    //ตรวจสอบข้อมูล
    //dd($informdetails_id);
    $informdetails=informdetails::find($informdetails_id);
    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);

     return view('student.Edit.editinformdetails0',compact('informdetails'));

 }
 public function   updateinformdetails(Request $request,$informdetails_id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'files' => 'mimes:pdf|max:1024',
    ],[
            'establishment.required' => "กรุณา",
            'files.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'files.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );
    $post=informdetails::findOrFail($informdetails_id);
    $post->user_id = Auth::user()->id;
    $post->Status_informdetails ="รออนุมัติ";
    // $post->establishment ="-";
    $post->annotation ="-";
    if($request->hasFile("files")){
        if (File::exists("document2/".$post->files)) {
            File::delete("document2/".$post->files);
        }
        $file=$request->file("files");
        $post->files=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/document2"),$post->files);
        $request['files']=$post->files;
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
       // "establishment"=>$request->establishment,
        // "phone"=>$request->phone,

        "files"=>$post->files,
        "namefile" => $request->namefile,

    ]);


    return redirect('/studenthome/informdetails')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }



 public function delinformdetails($informdetails_id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=informdetails::findOrFail($informdetails_id);

     if (File::exists("เอกสารปฏิบัติงานนักศึกษา/".$posts->files)) {
         File::delete("เอกสารปฏิบัติงานนักศึกษา/".$posts->files);
     }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }



#report

public function editreport($report_id) {
    //ตรวจสอบข้อมูล
    //dd($report_id);
    $report=report::find($report_id);
    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);

     return view('student.Edit.editreport',compact('report'));

 }
 public function editreport6($report_id) {
    //ตรวจสอบข้อมูล
    //dd($report_id);
    $report=report::find($report_id);
    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);

     return view('student.Edit.editreport6',compact('report'));

 }
 public function   updatereport(Request $request,$report_id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([

        'filess' => 'mimes:jpeg,jpg,png',
        //'filess' => 'sometimes|required|mimes:jpeg,jpg,png',
        // 'name' => ['required'],
        'namefile' => 'required',
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],
    [
        'namefile.required' => "กรุณาชื่อไฟล์",
            // 'establishment.required' => "กรุณา",
           // 'filess.required' => "กรุณาใส่รูปภาพ",
            // 'name.required' => "กรุณากรอกชื่อไฟล์",
        ]
    );
    $post=report::findOrFail($report_id);
    $post->user_id = Auth::user()->id;
    $post->Status_report ="รออนุมัติ";
    $post->annotation ="-";

    if($request->hasFile("filess")){
        // if (File::exists(public_path("file/".$post->filess))) {
        //     File::delete(public_path("file/".$post->filess));
        // }
        if (File::exists("ไฟล์เอกสารฝึกประสบการณ์/".$post->filess)) {
            File::delete("ไฟล์เอกสารฝึกประสบการณ์/".$post->filess);
        }
        $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารฝึกประสบการณ์"),$post->filess);
        $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
        // "establishment"=>$request->establishment,

        // "filess"=>$request->filess,
        "filess"=>$post->filess,
        "namefile" => $request->namefile,

        // "filess" => $post->filess
    ]);

    return redirect('/studenthome/report')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }



 public function delreport($report_id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=report::findOrFail($report_id);

     if (File::exists("รายงานโครงการ/".$posts->projects)) {
         File::delete("รายงานโครงการ/".$posts->projects);
     }
     if (File::exists("การนำเสนอ/".$posts->presentation)) {
        File::delete("การนำเสนอ/".$posts->presentation);
    }
    if (File::exists("โปสเตอร์/".$posts->poster)) {
        File::delete("โปสเตอร์/".$posts->poster);
    }
    if (File::exists("รายงานสรุปโครงการ/".$posts->projectsummary)) {
        File::delete("รายงานสรุปโครงการ/".$posts->projectsummary);
    }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }


#calendar2confirm

 public function calendar2confirmedit($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $events=DB::table('events')->find($id);
    //  dd($establishments);

     return view('student.edit.calendar2confirmedit',compact('events'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }
 public function  calendar2confirmview($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $events=DB::table('events')->find($id);
    //  dd($establishments);

     return view('student.edit.calendar2confirmview',compact('events'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }


 public function   updatecalendar2confirm(Request $request,$id) {
    //ตรวจสอบข้อมูล

   dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    $post=Event::findOrFail($id);


    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);

    $post->update
    ([
    //    "name2" =>$request->name2,
        //"establishment"=>$request->establishment,
        // "phone"=>$request->phone,
       // "files"=>$request->files,
        // "projects"=>$post->projects,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        "appointment_time"=>$request->appointment_time,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/studenthome/calendar2confirm')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function   updateconfirm(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
     $post->Status_events ="รับทราบและยืนยันเวลานัดนิเทศแล้ว";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);

    $post->update
    ([
    //    "name2" =>$request->name2,
        //"establishment"=>$request->establishment,
        // "phone"=>$request->phone,
       // "files"=>$request->files,
        // "projects"=>$post->projects,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        // "Statusevents"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/studenthome/calendar2confirm')->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function   updateconfirm1(Request $request) {
    //ตรวจสอบข้อมูล

    //  dd($request);

    $userId = auth()->id();

    // อัปเดตทุกเรคคอร์ดที่มี user_id ตรงกับผู้ใช้ที่เข้าสู่ระบบและ Status_registers เป็น 'รออนุมัติ'
    DB::table('registers')
        ->where('user_id', $userId)
        ->where('Status_registers', 'รอยืนยันเอกสารทั้งหมด')
        ->update(['Status_registers' => 'รออนุมัติ']);

    return redirect('/studenthome1')->with('success6', 'ยืนยันการส่งเอกสารสำเร็จ.');
 }

 public function   updateconfirm2(Request $request) {
    //ตรวจสอบข้อมูล

    //  dd($request);

    $userId = auth()->id();

    // อัปเดตทุกเรคคอร์ดที่มี user_id ตรงกับผู้ใช้ที่เข้าสู่ระบบและ Status_registers เป็น 'รออนุมัติ'
    DB::table('informdetails')
        ->where('user_id', $userId)
        ->where('Status_informdetails', 'รอยืนยันเอกสารทั้งหมด')
        ->update(['Status_informdetails' => 'รออนุมัติ']);

    return redirect('/studenthome/informdetails')->with('success6', 'ยืนยันการส่งเอกสารสำเร็จ.');
 }
public function   calendar2confirmupdate(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
     //$post->Statustime ="รับทราบและยืนยันเวลานัดนิเทศ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post->Status_events ="ขอเปลี่ยนเวลานัดนิเทศ";
$post->update

    ([
     "appointment_time" =>$request->appointment_time,
     "annotation" =>$request->annotation,
     "time" =>$request->time,
     "time1" =>$request->time1
        //"establishment"=>$request->establishment,
        // "phone"=>$request->phone,
       // "files"=>$request->files,
        // "projects"=>$post->projects,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        // "Statusevents"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/studenthome/calendar2confirm')->with('success5', 'ขอเปลี่ยนเวลานิเทศสำเร็จ.');
 }

# teacher

 public function viewregisters($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $registers=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('teacher.viewregister',compact('registers'));

 }
 public function edituser2($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($Evaluationdocuments);
     return view('teacher.Edit.edituser1',compact('users'));

 }

 public function deletsupervision($id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=Event::findOrFail($id);

     if (File::exists("document3/".$posts->filess)) {
         File::delete("document3/".$posts->filess);
     }
     if (File::exists("document3/".$posts->filess1)) {
        File::delete("document3/".$posts->filess1);
    }
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('error', 'ลบข้อมูลสำเร็จ.');
 }

 public function deletuser($id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=Users::findOrFail($id);

     if (File::exists("Profile/".$posts->images)) {
         File::delete("Profile/".$posts->images);
     }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }

 public function   updateuser4(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        'images' => 'mimes:jpg,jpeg,png|max:1024',
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",
            'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
            'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

   if($request->hasFile("images")){
       if (File::exists("Profile/".$post->images)) {
           File::delete("Profile/".$post->images);
       }
       $file=$request->file("images");
        $post->images=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/Profile"),$post->images);
        $request['images']=$post->images;
     // dd($post);
   }
    $post->update
    ([
    //    "username" =>$request->username,
       "fname" =>$request->fname,
    //    "surname" =>$request->surname,
    //    "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
         "images"=>$post->images
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
       // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/teacher/home')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser00004(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        'images' => ['required','mimes:jpg,jpeg,png'],
        'password' => 'required|confirmed|min:8',
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->update
    ([
    //    "username" =>$request->username,
    //    "fname" =>$request->fname,
    //    "surname" =>$request->surname,
       "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
        //  "images"=>$post->images
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
       // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/teacher/home')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser04(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'images' => 'mimes:jpg,jpeg,png|max:1024',
    ],[
            //'establishment.required' => "กรุณา",

            'images.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

   if($request->hasFile("images")){
       if (File::exists("Profile/".$post->images)) {
           File::delete("Profile/".$post->images);
       }
       $file=$request->file("images");
        $post->images=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/Profile"),$post->images);
        $request['images']=$post->images;
     // dd($post);
   }
    $post->update
    ([
    //    "username" =>$request->username,
       "fname" =>$request->fname,
    //    "surname" =>$request->surname,
    //    "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
         "images"=>$post->images
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
       // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/officer/home')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser05(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'images' => 'mimes:jpg,jpeg,png|max:1024',
    ],[
            //'establishment.required' => "กรุณา",

            'images.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

   if($request->hasFile("images")){
       if (File::exists("Profile/".$post->images)) {
           File::delete("Profile/".$post->images);
       }
       $file=$request->file("images");
        $post->images=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/Profile"),$post->images);
        $request['images']=$post->images;
     // dd($post);
   }
    $post->update
    ([
    //    "username" =>$request->username,
       "fname" =>$request->fname,
    //    "surname" =>$request->surname,
    //    "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
         "images"=>$post->images
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
       // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/adminhome')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser004(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        'password' => 'required|confirmed|min:8',

        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);


    $post->update
    ([

       "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,

        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
       // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/officer/home')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser005(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        'password' => 'required|confirmed|min:8',

        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            // 'establishment.required' => "กรุณา",
            'password.confirmed' => "รหัสผ่านไม่ตรงกัน",
            'password.min' => "รหัสผ่านมากว่า8ตัว",
        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);


    $post->update
    ([

       "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,

        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
       // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/adminhome')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser3(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status ="ยืนยันตัวตนแล้ว";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/teacher/home')->with('success', 'ยืนยันตัวตนสำเร็จ.');
 }

 public function  viewinformdetails1($informdetails_id) {
    //ตรวจสอบข้อมูล
    // $informdetails=report::find($informdetails_id)->join('users','informdetails.user_id','users.id')
    // ->select('informdetails.*','users.name');
  //  $informdetails=informdetails::find($informdetails_id);
    $informdetails=DB::table('informdetails')->where('informdetails_id',$informdetails_id)
    ->join('users','informdetails.user_id','users.id')
    ->select('informdetails.*','users.name')
    // ->find($informdetails_id);
    ->first();
     //dd($informdetails);

     return view('teacher.viewinformdetails1',compact('informdetails'));

 }


 public function editestimate1($supervision_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);

    //$supervisions=DB::table('supervision')->first();
     $supervisions=supervision::find($supervision_id);
    $users=DB::table('users')
    ->where('role',"student")
    ->get();

    $major=DB::table('major')

    ->paginate(5);

    $establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
    ->get();
    //dd($establishment);
     //dd($supervisions);
     return view('teacher.edit.editestimate1', compact('supervisions','users','major'));

 }

 public function edites1($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);

    //$supervisions=DB::table('supervision')->first();
     $supervisions=permission::find($id);
    $users=DB::table('users')
    ->where('role',"student")
    ->get();

    $major=DB::table('major')

    ->paginate(5);

    $establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
    ->get();
    //dd($establishment);
     //dd($supervisions);
     return view('teacher.edit.edites1', compact('supervisions','users','major'));

 }

 public function edites2($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);

    //$supervisions=DB::table('supervision')->first();
     $supervisions=permission::find($id);
    // $users=DB::table('users')
    // ->where('role',"student")
    // ->get();

    // $major=DB::table('major')

    // ->paginate(5);

    // $establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
    // ->get();
    //dd($establishment);
     //dd($supervisions);
     return view('officer.edit.edites1', compact('supervisions'));

 }
 public function editteacher1($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
// dd($teacher_id);
    //$supervisions=DB::table('supervision')->first();
    // $establishments=DB::table('teacher')->find($teacher_id);
    //  $teacher=teacher::find($teacher_id);
    // $major=major::find($major_id);
    $major=teacher::find($id);
    //  $teacher = DB::table('teacher')
    //  //->get();
    //  ->find($teacher_id);
    //  $major=major::find($major_id);
    // $users=DB::table('users')
    // ->where('role',"student")
    // ->get();
    $major1=DB::table('major')

    ->paginate(5);
    // $major=DB::table('major')

    // ->paginate(5);

    // $establishment=DB::table('establishment')
    // // ->join('supervision','supervision.supervision_id')
    //  //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // // ->select('supervision.*','establishment.*')
    // ->get();
    //dd($establishment);
     //dd($supervisions);
     return view('teacher.edit.editteacher1', compact('major','major1'));

 }
 public function editteacher2($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
// dd($teacher_id);
    //$supervisions=DB::table('supervision')->first();
    // $establishments=DB::table('teacher')->find($teacher_id);
    //  $teacher=teacher::find($teacher_id);
    // $major=major::find($major_id);
    $major=teacher::find($id);
    //  $teacher = DB::table('teacher')
    //  //->get();
    //  ->find($teacher_id);
    //  $major=major::find($major_id);
    // $users=DB::table('users')
    // ->where('role',"student")
    // ->get();
    $major1=DB::table('major')

    ->paginate(5);
    // $major=DB::table('major')

    // ->paginate(5);

    // $establishment=DB::table('establishment')
    // // ->join('supervision','supervision.supervision_id')
    //  //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // // ->select('supervision.*','establishment.*')
    // ->get();
    //dd($establishment);
     //dd($supervisions);
     return view('student.editteacher1', compact('major','major1'));

 }
 public function view1($id) {
    //ตรวจสอบข้อมูล

    $users=users::find($id);
    $major=DB::table('major')

    ->paginate(5);
     return view('teacher.viwe.view1',compact('users','major'));
    //

 }
 public function editconfirm1($id) {
    //ตรวจสอบข้อมูล

    $users=users::find($id);
    $major=DB::table('major')

    ->paginate(5);
     return view('teacher.edit.editconfirm1',compact('users','major'));
    //

 }
 public function   updateSuperviseteacheruser(Request $request,$id) {
    //ตรวจสอบข้อมูล

//dd($request);

    $request->validate([

        'filess' => 'mimes:jpeg,jpg,png',
        //'filess' => 'sometimes|required|mimes:jpeg,jpg,png',
        // 'name' => ['required'],
        'namefile' => 'required',
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],
    [
        'namefile.required' => "กรุณาชื่อไฟล์",
            // 'establishment.required' => "กรุณา",
           // 'filess.required' => "กรุณาใส่รูปภาพ",
            // 'name.required' => "กรุณากรอกชื่อไฟล์",
        ]
    );
    $post=report_results::findOrFail($id);
    $post->user_id = Auth::user()->id;
    $post->Status_results ="รออนุมัติ";
    $post->annotation ="-";

    if($request->hasFile("filess")){
        // if (File::exists(public_path("file/".$post->filess))) {
        //     File::delete(public_path("file/".$post->filess));
        // }
        if (File::exists("ไฟล์เอกสารประเมิน(สก.12)/".$post->filess)) {
            File::delete("ไฟล์เอกสารประเมิน(สก.12)/".$post->filess);
        }
        $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.12)"),$post->filess);
        $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
        // "establishment"=>$request->establishment,

        // "filess"=>$request->filess,
        "filess"=>$post->filess,
        "namefile" => $request->namefile,

        // "filess" => $post->filess
    ]);

    return redirect('/teacher/calendar5confirm')->with('success6', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function   updateSuperviseteacheruser1(Request $request,$id) {
    //ตรวจสอบข้อมูล

//dd($request);

    $request->validate([

        'filess' => 'mimes:jpeg,jpg,png',
        //'filess' => 'sometimes|required|mimes:jpeg,jpg,png',
        // 'name' => ['required'],
        'namefile' => 'required',
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],
    [
        'namefile.required' => "กรุณาชื่อไฟล์",
            // 'establishment.required' => "กรุณา",
           // 'filess.required' => "กรุณาใส่รูปภาพ",
            // 'name.required' => "กรุณากรอกชื่อไฟล์",
        ]
    );
    $post=report_results::findOrFail($id);
    $post->user_id = Auth::user()->id;
    $post->Status_results ="รออนุมัติ";
    $post->annotation ="-";

    if($request->hasFile("filess")){
        // if (File::exists(public_path("file/".$post->filess))) {
        //     File::delete(public_path("file/".$post->filess));
        // }
        if (File::exists("ไฟล์เอกสารประเมิน(สก.15)/".$post->filess)) {
            File::delete("ไฟล์เอกสารประเมิน(สก.15)/".$post->filess);
        }
        $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.15)"),$post->filess);
        $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    }
    // dd($request);

    $post->update
    ([
        // "name" =>$request->name,
        // "establishment"=>$request->establishment,

        // "filess"=>$request->filess,
        "filess"=>$post->filess,
        "namefile" => $request->namefile,

        // "filess" => $post->filess
    ]);

    return redirect('/teacher/calendar5confirm')->with('success6', 'แก้ไขข้อมูลสำเร็จ.');
 }




 public function   updateestimate1(Request $request,$supervision_id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'filess' => 'mimes:pdf|max:1024',
        // 'user_id' => 'required|unique:supervision,user_id,NULL,id,namefile,' . $request->namefile,
    // 'namefile' => 'required|unique:supervision,namefile,NULL,id,user_id,' . $request->user_id,
    ],[
            //'establishment.required' => "กรุณา",
            'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
            'user_id.unique' => "ชื่อนักศึกษาซ้ำ",
                 'namefile.unique' => "ชื่อไฟล์เอกสารซ้ำ",
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=supervision::findOrFail($supervision_id);
//    $post->user_id = Auth::user()->id;
//    $post->Status_supervision ="รออนุมัติ";
   if($request->hasFile("filess")){
       if (File::exists("document4/".$post->filess)) {
           File::delete("document4/".$post->filess);
       }
       $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/document4"),$post->filess);
        $request['filess']=$post->filess;
     // dd($post);
   }
    $post->update
    ([
        "namefile" =>$request->namefile,
        "user_id" =>$request->user_id,
    //    "year" =>$request->year,
        //"establishment"=>$request->establishment,
        //  "term"=>$request->term,
        "score"=>$request->score,
         "filess"=>$post->filess,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        //"Status"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/teacher/estimate1')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }


 public function   updatees1(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=permission::findOrFail($id);
//    $post->user_id = Auth::user()->id;
//    $post->Status_supervision ="รออนุมัติ";
   if($request->hasFile("filess")){
       if (File::exists("ไฟล์เอกสารขออนุญาตนิเทศงาน/".$post->filess)) {
           File::delete("ไฟล์เอกสารขออนุญาตนิเทศงาน/".$post->filess);
       }
       $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารขออนุญาตนิเทศงาน"),$post->filess);
        $request['filess']=$post->filess;
     // dd($post);
   }
   $post->status ="รออนุมัติ";
    $post->update
    ([
        "namefile" =>$request->namefile,
        // "user_id" =>$request->user_id,
       "year" =>$request->year,
        //"establishment"=>$request->establishment,
         "term"=>$request->term,
        // "score"=>$request->score,
         "filess"=>$post->filess,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        //"Status"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/teacher/es1')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function   updatees2(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=permission::findOrFail($id);
//    $post->user_id = Auth::user()->id;
//    $post->Status_supervision ="รออนุมัติ";
//    if($request->hasFile("filess")){
//        if (File::exists("ไฟล์เอกสารขออนุญาตนิเทศงาน/".$post->filess)) {
//            File::delete("ไฟล์เอกสารขออนุญาตนิเทศงาน/".$post->filess);
//        }
//        $file=$request->file("filess");
//         $post->filess=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/ไฟล์เอกสารขออนุญาตนิเทศงาน"),$post->filess);
//         $request['filess']=$post->filess;

//    }
    $post->update
    ([
        // "namefile" =>$request->namefile,
        // "user_id" =>$request->user_id,
    //    "year" =>$request->year,
        "status"=>$request->status,
     "annotation"=>$request->annotation,
        // "score"=>$request->score,
        //  "filess"=>$post->filess,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        //"Status"=>$request->Status,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/officer/es1')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function   updateteacher1(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=teacher::findOrFail($id);
//    $post->user_id = Auth::user()->id;

    $post->update
    ([
        // "name" =>$request->name,
        'fname' => $request->fname,
        'surname' => $request->surname,
        'email' => $request->email,
        'major_id' => $request->major_id,
        'telephonenumber' => $request->telephonenumber,
        'address' => $request->address,
    ]);


    return redirect('/teacher/teacher01')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function edit2Superviseteacheruser($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('report_results')->find($id);
    //  dd($establishments);

     return view('teacher.Edit.edit2Superviseteacheruser',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }

 public function edit2Superviseteacheruser1($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('report_results')->find($id);
    //  dd($establishments);

     return view('teacher.Edit.edit2Superviseteacheruser1',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }


 public function viwetimeline($timeline_id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $timelines=DB::table('timeline')
    //->get();
    //->first();
   // dd($timelines);
    // $all=DB::table('registers')
     ->join('users','timeline.user_id','users.id')
     ->join('registers','timeline.register_id','registers.id')
     ->join('report','timeline.report_id','report.report_id')
     ->join('informdetails','timeline.informdetails_id','informdetails.informdetails_id')

     ->select('timeline.*','users.name','registers.Status'
     ,'report.Status_report','informdetails.Status_informdetails')
     //->where('user_id')

     //->paginate(5);
     ->where('timeline_id',$timeline_id)
    // ->first();
       ->get();
    // dd($timelines);

     return view('teacher.viwe.viwetimeline',compact('timelines'));

 }





 ##officer


//หลักสูตรสาขา
 public function editmajor($major_id) {

     $major=major::find($major_id);

    //dd($acceptances);
     // dd($supervisions);
     return view('officer.edit.editmajor',compact('major'));

 }
//หลักสูตรสาขา
public function editmajor2($major_id) {

    $major=major::find($major_id);

   //dd($acceptances);
    // dd($supervisions);
    return view('teacher.edit.editmajor',compact('major'));

}
//หลักสูตรสาขา
public function editcategory($notify_id) {

    $major=category::find($notify_id);

   //dd($acceptances);
    // dd($supervisions);
    return view('officer.edit.editcategory',compact('major'));

}


 public function   updatmajor(Request $request,$major_id) {
    //ตรวจสอบข้อมูล

    ///dd($request);

    $request->validate([
        'name_major' => 'required|unique:major',
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",
            'name_major.unique' => "ชื่อสาขาซ้ำ",
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=major::findOrFail($major_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);

    $post->update
    ([
       "name_major" =>$request->name_major,


        "faculty"=>$request->faculty,

    ]);


    return redirect('/officer/major')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function   updatmajor2(Request $request,$major_id) {
    //ตรวจสอบข้อมูล

    ///dd($request);

    $request->validate([
        'name_major' => 'required|unique:major',
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",
            'name_major.unique' => "ชื่อสาขาซ้ำ",
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=major::findOrFail($major_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);

    $post->update
    ([
       "name_major" =>$request->name_major,


        "faculty"=>$request->faculty,

    ]);


    return redirect('/teacher/major')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }



 public function   updatcategory(Request $request,$notify_id) {
    //ตรวจสอบข้อมูล

    ///dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        // 'year' => 'required|unique:notify',
    ],[
            //'establishment.required' => "กรุณา",
            // 'year.unique' => "ภาคเรียนซ้ำ",
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=category::findOrFail($notify_id);
//    $post=acceptance::findOrFail($acceptance_id);
   // $post->user_id = Auth::user()->id;
   // $post->Status ="รออนุมัติ";
    // if($request->hasFile("images")){
    //     if (File::exists("หมวดหมู่/".$post->images)) {
    //         File::delete("หมวดหมู่/".$post->images);
    //     }
    //     $file=$request->file("images");
    //      $post->images=time()."_".$file->getClientOriginalName();
    //      $file->move(\public_path("/หมวดหมู่"),$post->images);
    //      $request['images']=$post->images;
    //   // dd($post);
    // }
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);

    $post->update
    ([
    //    "name" =>$request->name,
    //    "name1" =>$request->name1,
       "year" =>$request->year,
       "start_date" =>$request->start_date,
       "end_date" =>$request->end_date,
       "start_notify" =>$request->start_notify,
       "end_notify" =>$request->end_notify,
    //    "images"=>$post->images,



    ]);


    return redirect('/officer/category')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function delmajor($major_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=major::findOrFail($major_id);
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }

 public function delmajor2($major_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=major::findOrFail($major_id);
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('error', 'ลบข้อมูลสำเร็จ.');
 }


 public function delcategory($category_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=category::findOrFail($category_id);
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }


 public function delteacher($id) {
    //ตรวจสอบข้อมูล
   // dd($id);
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=teacher::findOrFail($id);
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('error', 'ลบข้อมูลสำเร็จ.');
 }

 public function deles1($id) {
    //ตรวจสอบข้อมูล
   // dd($id);
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();





    $posts=permission::findOrFail($id);
    //  dd($posts);
    if (File::exists("ไฟล์เอกสารขออนุญาตนิเทศงาน/".$posts->filess)) {
         File::delete("ไฟล์เอกสารขออนุญาตนิเทศงาน/".$posts->filess);
     }
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }
 public function deles7($id) {
    //ตรวจสอบข้อมูล
   // dd($id);
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();





    $posts=supervision::findOrFail($id);
    //  dd($posts);
    if (File::exists("document4/".$posts->filess)) {
         File::delete("document4/".$posts->filess);
     }
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('error', 'ลบข้อมูลสำเร็จ.');
 }

 public function editexperiencereport2($report_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $reports=DB::table('report')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('officer.edit.editexperiencereport2',compact('reports'));

 }

 public function   updateexperiencereport2(Request $request,$report_id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";

   //dd($request->Status);
   $post=report::findOrFail($report_id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รออนุมัติ";

    $post->update

    ([

       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_report"=>$request->Status_report,

    ]);
     // dd($request);

    return redirect('/officer/experiencereport2')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }



 public function editEvaluate($supervision_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    $supervisions=supervision::find($supervision_id);
    // $supervisions=DB::table('supervision')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     $users=DB::table('users')
      ->where('role',"student")

      ->get();
     return view('officer.edit.editEvaluate',compact('supervisions','users'));

 }

 public function   updateEvaluate(Request $request,$supervision_id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'filess' => 'mimes:pdf|max:1024',
    ],[
            //'establishment.required' => "กรุณา",
            'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";

   //dd($request->Status);
//    $post=supervision::findOrFail($supervision_id);
   $post=supervision::findOrFail($supervision_id);
   //    $post->user_id = Auth::user()->id;
    //   $post->Status_supervision ="รออนุมัติ";
      if($request->hasFile("filess")){
          if (File::exists("document4/".$post->filess)) {
              File::delete("document4/".$post->filess);
          }
          $file=$request->file("filess");
           $post->filess=time()."_".$file->getClientOriginalName();
           $file->move(\public_path("/document4"),$post->filess);
           $request['filess']=$post->filess;
        // dd($post);
      }
       $post->update
       ([
           "namefile" =>$request->namefile,
           "user_id" =>$request->user_id,
        //   "year" =>$request->year,
           //"establishment"=>$request->establishment,
            // "term"=>$request->term,
           "score"=>$request->score,
            "filess"=>$post->filess,
           // "presentation"=>$post->presentation,
           // "appointmenttime"=>$post->appointmenttime,
           //"Status"=>$request->Status,
          // "projects" =>$imageName,
          // "presentation" =>$image,
         //  "poster" =>$images,
          // "projectsummary" =>$images1,
          "annotation" =>$request->annotation,
          //"establishment"=>$request->establishment,
           "Status_supervision"=>$request->Status_supervision,
       ]);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รออนุมัติ";


     // dd($request);

    return redirect('/officer/Evaluate')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }


 public function editinformdetails2($informdetails_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    // $informdetails=DB::table('informdetails')->first();
    $informdetails=informdetails::find($informdetails_id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($informdetails);
     // dd($supervisions);
     return view('officer.edit.editinformdetails2',compact('informdetails'));

 }
 public function editinformdetails002($informdetails_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    // $informdetails=DB::table('informdetails')->first();
    $informdetails=informdetails::find($informdetails_id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($informdetails);
     // dd($supervisions);
     return view('officer.edit.editinformdetails002',compact('informdetails'));

 }
 public function editinformdetails03($id) {

    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    // $informdetails=DB::table('informdetails')->first();
    // $registers=informdetails::find($informdetails_id);
    $registers=users::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($informdetails);
     // dd($supervisions);
     $registers2 = DB::table('informdetails')
        ->join('users', 'informdetails.user_id', '=', 'users.id')
        ->select('informdetails.*', 'users.fname')
        ->where('informdetails.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('informdetails.updated_at', 'desc')
        ->paginate(10);
     return view('officer.edit.editinformdetails02',compact('registers','registers2'));

 }
 public function editinformdetails02($informdetails_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
    // $informdetails=DB::table('informdetails')->first();
    $informdetails=informdetails::find($informdetails_id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($informdetails);
     // dd($supervisions);
     return view('teacher.edit.editinformdetails2',compact('informdetails'));

 }

 public function   updateinformdetails2(Request $request,$informdetails_id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',

    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";

   //dd($request->Status);
   $post=informdetails::findOrFail($informdetails_id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รออนุมัติ";

    $post->update

    ([

       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_informdetails"=>$request->Status_informdetails,

    ]);
     // dd($request);

    return redirect('/officer/informdetails2')->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
 }


 public function   updateinformdetails02(Request $request,$informdetails_id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',

    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";

   //dd($request->Status);
   $post=informdetails::findOrFail($informdetails_id);
  // $post->user_id = Auth::user()->id;
   //$post->Status ="รออนุมัติ";

    $post->update

    ([

       "annotation" =>$request->annotation,
        //"establishment"=>$request->establishment,
         "Status_informdetails"=>$request->Status_informdetails,

    ]);
     // dd($request);

    return redirect('/teacher/informdetails1')->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
 }

 public function editregister1($id) {
    //ตรวจสอบข้อมูล
 // dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
   // $registers=DB::table('registers')->first();

    $registers=registers::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('officer.edit.editregister1',compact('registers','id'));

 }
 public function editregister02($id) {
    //ตรวจสอบข้อมูล
 // dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
   // $registers=DB::table('registers')->first();

    $registers=registers::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('officer.edit.editregister02',compact('registers','id'));

 }
 public function editregister01($id) {
    //ตรวจสอบข้อมูล
 // dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
   // $registers=DB::table('registers')->first();

    $registers=users::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     $registers1=DB::table('users')

     ->join('registers','users.id','registers.id')
    //  ->join('student','users.id','student.user_id')
    //  ->join('users','student.user_id','users.id')
    //  ->select('registers.*','users.fname','student.year')
     ->select('users.*','registers.user_id')
    //  ->where('role',"student")
    //  ->orderBy('student.updated_at', 'desc')
     ->paginate(10);

     $registers2 = DB::table('registers')
        ->join('users', 'registers.user_id', '=', 'users.id')
        ->select('registers.*', 'users.fname')
        ->where('registers.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('registers.updated_at', 'desc')
        ->paginate(10);
// dd($registers2);
//      $registers2 = DB::table('registers')
//   ->join('users','registers.user_id','users.id')
//         ->select('registers.*','users.fname')

//         ->where('role',"student")
//         ->orderBy('registers.updated_at', 'desc')
//         ->paginate(10);
     return view('officer.edit.editregister01',compact('registers','registers1','registers2'));

 }
 public function editregister001($id) {
    //ตรวจสอบข้อมูล
 // dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
   // $registers=DB::table('registers')->first();

    $registers=users::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     $registers1=DB::table('users')

     ->join('registers','users.id','registers.id')
    //  ->join('student','users.id','student.user_id')
    //  ->join('users','student.user_id','users.id')
    //  ->select('registers.*','users.fname','student.year')
     ->select('users.*','registers.user_id')
    //  ->where('role',"student")
    //  ->orderBy('student.updated_at', 'desc')
     ->paginate(10);

     $registers2 = DB::table('registers')
        ->join('users', 'registers.user_id', '=', 'users.id')
        ->select('registers.*', 'users.fname')
        ->where('registers.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('registers.updated_at', 'desc')
        ->paginate(10);
// dd($registers2);
//      $registers2 = DB::table('registers')
//   ->join('users','registers.user_id','users.id')
//         ->select('registers.*','users.fname')

//         ->where('role',"student")
//         ->orderBy('registers.updated_at', 'desc')
//         ->paginate(10);
     return view('teacher.edit.editregister01',compact('registers','registers1','registers2'));

 }

 public function editacceptancedocument1($id) {
    //ตรวจสอบข้อมูล
 // dd($id);


    $registers=users::find($id);

     $registers1=DB::table('users')

     ->join('acceptance','users.id','acceptance.acceptance_id')

     ->select('users.*','acceptance.user_id')

     ->paginate(10);

     $registers2 = DB::table('acceptance')
        ->join('users', 'acceptance.user_id', '=', 'users.id')
        ->select('acceptance.*', 'users.fname')
        ->where('acceptance.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('acceptance.updated_at', 'desc')
        ->paginate(10);

     return view('teacher.edit.editacceptancedocument1',compact('registers','registers1','registers2'));

 }
 public function editinformdetails01($id) {
    //ตรวจสอบข้อมูล
 // dd($id);


    $registers=users::find($id);

     $registers1=DB::table('users')

     ->join('informdetails','users.id','informdetails.informdetails_id')

     ->select('users.*','informdetails.user_id')

     ->paginate(10);

     $registers2 = DB::table('informdetails')
        ->join('users', 'informdetails.user_id', '=', 'users.id')
        ->select('informdetails.*', 'users.fname')
        ->where('informdetails.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('informdetails.updated_at', 'desc')
        ->paginate(10);

     return view('teacher.edit.editinformdetails1',compact('registers','registers1','registers2'));

 }
 public function editreport2($id) {
    //ตรวจสอบข้อมูล
 // dd($id);


    $registers=users::find($id);

     $registers1=DB::table('users')

     ->join('registers','users.id','registers.id')
    //  ->join('student','users.id','student.user_id')
    //  ->join('users','student.user_id','users.id')
    //  ->select('registers.*','users.fname','student.year')
     ->select('users.*','registers.user_id')
    //  ->where('role',"student")
    //  ->orderBy('student.updated_at', 'desc')
     ->paginate(10);

     $registers2 = DB::table('registers')
        ->join('users', 'registers.user_id', '=', 'users.id')
        ->select('registers.*', 'users.fname')
        ->where('registers.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('registers.updated_at', 'desc')
        ->paginate(10);

     return view('officer.edit.editreport2',compact('registers','registers1','registers2'));

 }
 public function editreport02($id) {
    //ตรวจสอบข้อมูล
 // dd($id);


    $registers=users::find($id);

     $registers1=DB::table('users')

     ->join('registers','users.id','registers.id')
    //  ->join('student','users.id','student.user_id')
    //  ->join('users','student.user_id','users.id')
    //  ->select('registers.*','users.fname','student.year')
     ->select('users.*','registers.user_id')
    //  ->where('role',"student")
    //  ->orderBy('student.updated_at', 'desc')
     ->paginate(10);

     $registers2 = DB::table('registers')
        ->join('users', 'registers.user_id', '=', 'users.id')
        ->select('registers.*', 'users.fname')
        ->where('registers.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('registers.updated_at', 'desc')
        ->paginate(10);

     return view('teacher.edit.editreport2',compact('registers','registers1','registers2'));

 }
 public function editreport4($id) {
    //ตรวจสอบข้อมูล
 // dd($id);


    $registers=users::find($id);

     $registers1=DB::table('users')

     ->join('supervision','users.id','supervision.supervision_id')
    //  ->join('student','users.id','student.user_id')
    //  ->join('users','student.user_id','users.id')
    //  ->select('registers.*','users.fname','student.year')
     ->select('users.*','supervision.user_id')
    //  ->where('role',"student")
    //  ->orderBy('student.updated_at', 'desc')
     ->paginate(10);

     $registers2 = DB::table('supervision')
        ->join('users', 'supervision.user_id', '=', 'users.id')
        ->select('supervision.*', 'users.fname')
        ->where('supervision.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('supervision.updated_at', 'desc')
        ->paginate(10);

     return view('officer.edit.editreport4',compact('registers','registers1','registers2'));

 }
 public function editreport04($id) {
    //ตรวจสอบข้อมูล
 // dd($id);


    $registers=users::find($id);

     $registers1=DB::table('users')

     ->join('supervision','users.id','supervision.supervision_id')
    //  ->join('student','users.id','student.user_id')
    //  ->join('users','student.user_id','users.id')
    //  ->select('registers.*','users.fname','student.year')
     ->select('users.*','supervision.user_id')
    //  ->where('role',"student")
    //  ->orderBy('student.updated_at', 'desc')
     ->paginate(10);

     $registers2 = DB::table('supervision')
        ->join('users', 'supervision.user_id', '=', 'users.id')
        ->select('supervision.*', 'users.fname')
        ->where('supervision.user_id', $registers->id)
        // ->orderBy('namefile', 'asc')
        ->orderBy('supervision.updated_at', 'desc')
        ->paginate(10);

     return view('teacher.edit.editreport4',compact('registers','registers1','registers2'));

 }
 public function editregister2($id) {
    //ตรวจสอบข้อมูล
 // dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
   // $registers=DB::table('registers')->first();

    $registers=registers::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('teacher.edit.editregister1',compact('registers'));

 }

 public function editsupervision002($id) {
    //ตรวจสอบข้อมูล
//   dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    // $establishments=establishment::find($id);
   // $registers=DB::table('registers')->first();

    $registers=Event::find($id);
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
   // dd($reports);
     // dd($supervisions);
     return view('teacher.edit.editsupervision002',compact('registers'));

 }
 public function   updateregister1(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // if($request->hasFile("filess")){
    //     // if (File::exists(public_path("file/".$post->filess))) {
    //     //     File::delete(public_path("file/".$post->filess));
    //     // }
    //     if (File::exists("file/".$post->filess)) {
    //         File::delete("file/".$post->filess);
    //     }
    //     $file=$request->file("filess");
    //     $post->filess=time()."_".$file->getClientOriginalName();
    //     $file->move(\public_path("/file"),$post->filess);
    //     $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    // }
//     $post=[
//             "annotation" =>$request->annotation,

//          "Status_registers"=>$request->Status_registers,
//     ] ;
// DB::table('registers')->where('id',$id)->update($post);
   $post=registers::findOrFail($id);


$post->update
([
    // "name" =>$request->name,
    // "establishment"=>$request->establishment,

    // "filess"=>$request->filess,
    // "filess"=>$post->filess,
    //"namefile" => $request->namefile,
    "annotation" =>$request->annotation,

        "Status_registers"=>$request->Status_registers,
    // "filess" => $post->filess
]);

// return redirect()->back()->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
return redirect('/officer/register1')->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
 }


 public function   updateregister01(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // if($request->hasFile("filess")){
    //     // if (File::exists(public_path("file/".$post->filess))) {
    //     //     File::delete(public_path("file/".$post->filess));
    //     // }
    //     if (File::exists("file/".$post->filess)) {
    //         File::delete("file/".$post->filess);
    //     }
    //     $file=$request->file("filess");
    //     $post->filess=time()."_".$file->getClientOriginalName();
    //     $file->move(\public_path("/file"),$post->filess);
    //     $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    // }
//     $post=[
//             "annotation" =>$request->annotation,

//          "Status_registers"=>$request->Status_registers,
//     ] ;
// DB::table('registers')->where('id',$id)->update($post);
   $post=registers::findOrFail($id);

$post->Status_registers ="ไม่อนุมัติ";
$post->update
([
    // "name" =>$request->name,
    // "establishment"=>$request->establishment,

    // "filess"=>$request->filess,
    // "filess"=>$post->filess,
    //"namefile" => $request->namefile,
    "annotation" =>$request->annotation,

        // "Status_registers"=>$request->'sss',
    // "filess" => $post->filess
]);

// return redirect()->back()->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
return redirect('/officer/register1')->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
 }



 public function   updateregister2(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    if($request->hasFile("filess")){
        // if (File::exists(public_path("file/".$post->filess))) {
        //     File::delete(public_path("file/".$post->filess));
        // }
        if (File::exists("file/".$post->filess)) {
            File::delete("file/".$post->filess);
        }
        $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/file"),$post->filess);
        $request['filess']=$post->filess;
        // $file = $request->file("filess");
        // $post->filess = time() . "_" . $file->getClientOriginalName();
        // $file->move(public_path("/file"), $post->filess);
    }
//     $post=[
//             "annotation" =>$request->annotation,

//          "Status_registers"=>$request->Status_registers,
//     ] ;
// DB::table('registers')->where('id',$id)->update($post);
   $post=registers::findOrFail($id);


$post->update
([
    // "name" =>$request->name,
    // "establishment"=>$request->establishment,

    // "filess"=>$request->filess,
    "filess"=>$post->filess,
    //"namefile" => $request->namefile,
    "annotation" =>$request->annotation,

        "Status_registers"=>$request->Status_registers,
    // "filess" => $post->filess
]);


    return redirect('/teacher/register1')->with('success7', 'อัพเดทข้อมูลสำเร็จ.');
 }
 public function viwetimeline2($timeline_id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $timelines=DB::table('timeline')
    //->get();
    //->first();
   // dd($timelines);
    // $all=DB::table('registers')
     ->join('users','timeline.user_id','users.id')
     ->join('registers','timeline.register_id','registers.id')
     ->join('report','timeline.report_id','report.report_id')
     ->join('informdetails','timeline.informdetails_id','informdetails.informdetails_id')

     ->select('timeline.*','users.name','registers.Status_registers'
     ,'report.Status_report','informdetails.Status_informdetails')
     //->where('user_id')

     //->paginate(5);
     ->where('timeline_id',$timeline_id)
    // ->first();
       ->get();
    // dd($timelines);

     return view('officer.viwe.viwetimeline',compact('timelines'));

 }
 public function editacceptance($acceptance_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $acceptances=acceptance::find($acceptance_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($supervisions);
     $user=DB::table('users')
     ->where('role',"student")
     ->ORDERBY('users.created_at' ,'DESC')
      ->get();
     return view('officer.edit.editacceptancedocument1',compact('acceptances','user'));

 }

 public function   updateacceptance(Request $request,$acceptance_id) {
    //ตรวจสอบข้อมูล

    ///dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        'filess' => 'mimes:pdf|max:1024',
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        // 'user_id' => 'required|unique:acceptance,user_id,NULL,id,namefile,' . $request->namefile,
        'namefile' => 'required|unique:acceptance,namefile,NULL,id,user_id,' . $request->user_id,
    ],[
            //'establishment.required' => "กรุณา",

            'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
            'user_id.unique' => "ชื่อนักศึกษาซ้ำ",
                 'namefile.unique' => "ชื่อไฟล์เอกสารซ้ำ",
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=acceptance::findOrFail($acceptance_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";
   if($request->hasFile("filess")){
       if (File::exists("document1/".$post->filess)) {
           File::delete("document1/".$post->filess);
       }
       $file=$request->file("filess");
        $post->filess=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/document1"),$post->filess);
        $request['filess']=$post->filess;
     // dd($post);
   }
    $post->update
    ([
    //    "year" =>$request->year,
       "user_id" =>$request->user_id,
        //"establishment"=>$request->establishment,
         "namefile"=>$request->namefile,
        "annotation"=>$request->annotation,
         "filess"=>$post->filess,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/officer/acceptancedocument1')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function delacceptance($acceptance_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=acceptance::findOrFail($acceptance_id);

     if (File::exists("ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/".$posts->filess)) {
         File::delete("ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/".$posts->filess);
     }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('error', 'ลบข้อมูลสำเร็จ.');
 }


 public function delEvaluate($supervision_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=supervision::findOrFail($supervision_id);

     if (File::exists("ไฟล์เอกสารประเมิน/".$posts->filess)) {
         File::delete("ไฟล์เอกสารประเมิน/".$posts->filess);
     }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('error', 'ลบข้อมูลสำเร็จ.');
 }



 public function editSupervise($advisor_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $advisors=advisor::find($advisor_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($supervisions);
     return view('officer.edit.editSupervise',compact('advisors'));

 }

 public function   updateSupervise(Request $request,$advisor_id) {
    //ตรวจสอบข้อมูล

    ///dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=advisor::findOrFail($advisor_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);

    $post->update
    ([
       "name" =>$request->name,

         "course"=>$request->course,
        "faculty"=>$request->faculty,

    ]);


    return redirect('/officer/Supervise')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function delSupervise($advisor_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=advisor::findOrFail($advisor_id);
    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }


 public function editsupervision1($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();

     $supervisions=Event::find($id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
  //dd($supervisions);
     // dd($supervisions);
     return view('officer.edit.editsupervision',compact('supervisions'));

 }

 public function editsupervision02($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
    //   $startFormatted = Carbon::parse($supervisions->start)->format('Y-m-d\TH:i');
     $supervisions=Event::find($id);
     $users1=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $users2=DB::table('teacher')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
    //    ->where('id','user_id')
    // ->select('em_name', DB::raw('GROUP_CONCAT(student_id) AS student_ids'))
    // ->groupBy('em_name')
    // ->havingRaw('COUNT(*) > 1')
    // ->orderBy('id', 'desc')

      ->get();
      $users3=DB::table('student')
      //->where('role',"student")
    //    ->where('id','user_id')
      ->get();

    //  $data['states'] = establishment::where('user_id',$request->user_id)->get(['em_name','id']);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
  //dd($supervisions);
     // dd($supervisions);
     return view('teacher.edit.editsupervision',compact('supervisions','establishment','users1','users3','users2'));

 }


 public function   updatesupervision1(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    if($request->hasFile("filess"))
    {
      $file=$request->file("filess");
       $imageName=time().'_'.$file->getClientOriginalName();
      $file->move(\public_path("/ไฟล์เอกสารขออนุญาตนิเทศงาน"),$imageName);
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=Event::findOrFail($id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);

    $post->update
    ([
    //    "term" =>$request->term,
    //    "title" =>$request->title,
         "start"=>$request->start,
        "end"=>$request->end,
        "year"=>$request->year,

    ]);


    return redirect('/officer/supervision')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 }
 public function   updatesupervision02(Request $request,$id) {
    //ตรวจสอบข้อมูล

    // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'filess' => 'mimes:pdf|max:1024',
        'filess1' => 'mimes:pdf|max:1024',
    ],[
            //'establishment.required' => "กรุณา",
            'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
            'filess1.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess1.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
 $post=Event::findOrFail($id);
   if($request->hasFile("filess")){
    // if (File::exists(public_path("file/".$post->filess))) {
    //     File::delete(public_path("file/".$post->filess));
    // }
    if (File::exists("document3/".$post->filess)) {
        File::delete("document3/".$post->filess);
    }
    $file=$request->file("filess");
    $post->filess=time()."_".$file->getClientOriginalName();
    $file->move(\public_path("/document3"),$post->filess);
    $request['filess']=$post->filess;
    // $file = $request->file("filess");
    // $post->filess = time() . "_" . $file->getClientOriginalName();
    // $file->move(public_path("/file"), $post->filess);
}

if($request->hasFile("filess1")){
    // if (File::exists(public_path("file/".$post->filess))) {
    //     File::delete(public_path("file/".$post->filess));
    // }
    if (File::exists("document3/".$post->filess1)) {
        File::delete("document3/".$post->filess1);
    }
    $file=$request->file("filess1");
    $post->filess1=time()."_".$file->getClientOriginalName();
    $file->move(\public_path("/document3"),$post->filess1);
    $request['filess1']=$post->filess1;
    // $file = $request->file("filess");
    // $post->filess = time() . "_" . $file->getClientOriginalName();
    // $file->move(public_path("/file"), $post->filess);
}

  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);

    $post->update
    ([
    //    "term" =>$request->term,
    //    "establishment_name" =>$request->establishment_name,
    //      "start"=>$request->start,
    //     // "end"=>$request->end,
    //     "year"=>$request->year,
    //     "student_name" => implode(",",$request->student_name),

    "start" => $request->start,
    "time" => $request->time,
    "time1" => $request->time1,
    "namefiles" => $request->namefiles,
    "namefiles1" => $request->namefiles1,
    // 'end' => $request->end,
  //   "term" => $request->term,
  //   "year" => $request->year,
    // "appointment_time" => $request->appointment_time,
  //   "executive_name" => $request->executive_name,
  //   "contact_person" => $request->contact_person,
    "em_id" => $request->em_id,
  "Status_events" => $request->Status_events,
     "student_name" => implode(",",$request->student_name),
     //$request->student_name,
   "filess"=>$post->filess,
   "filess1"=>$post->filess1,
     "teacher_name" => implode(",",$request->teacher_name),
        //    "teacher_name" => $request->teacher_name,
    ]);


    return redirect('/teacher/supervision')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');

 }
 public function editschedule1($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();

     $schedules=schedule::find($id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
  //dd($supervisions);
     // dd($supervisions);
     return view('officer.edit.editschedule',compact('schedules'));

 }


 public function   updateschedule1(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',

 'filess' => 'mimes:pdf|max:1024',
    ],[
            //'establishment.required' => "กรุณา",
            'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
            'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=schedule::findOrFail($id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";

     // dd($post);
     if($request->hasFile("filess")){
        if (File::exists("download/".$post->filess)) {
            File::delete("download/".$post->filess);
        }
        $file=$request->file("filess");
         $post->filess=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/download"),$post->filess);
         $request['filess']=$post->filess;
      // dd($post);
    }
     $post->update
     ([
//         "year" =>$request->year,
//  "title" =>$request->title,
//           "term"=>$request->term,
          "namefile" =>$request->namefile,
          "status"=>$request->status,
          "filess"=>$post->filess,



     ]);



    return redirect('/officer/schedule')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function delschedule1($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=schedule::findOrFail($id);


    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success5', 'ลบข้อมูลสำเร็จ.');
 }


 public function editEvaluationdocument($Evaluationdocument_id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $Evaluationdocuments=Evaluationdocument::find($Evaluationdocument_id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($supervisions);
     return view('officer.edit.editEvaluationdocuments',compact('Evaluationdocuments'));

 }

 public function   updateEvaluationdocument(Request $request,$Evaluationdocument_id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );
    // $post=Event::findOrFail($id);
    // $post->user_id = Auth::user()->id;
    // $post->Status ="รออนุมัติ";
    // $post->Status ="รออนุมัติ";
   //dd($request->Status);
   $post=Evaluationdocument::findOrFail($Evaluationdocument_id);
  // $post->user_id = Auth::user()->id;
  // $post->Status ="รออนุมัติ";
   if($request->hasFile("files1")){
       if (File::exists("ไฟล์เอกสารประเมิน(สก.13)/".$post->files1)) {
           File::delete("ไฟล์เอกสารประเมิน(สก.13)/".$post->files1);
       }
       $file=$request->file("files1");
        $post->files1=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.13)"),$post->files1);
        $request['files1']=$post->files1;
     // dd($post);
   }
   if($request->hasFile("files2")){
    if (File::exists("ไฟล์เอกสารประเมิน(สก.14)/".$post->files2)) {
        File::delete("ไฟล์เอกสารประเมิน(สก.14)/".$post->files2);
    }
    $file=$request->file("files2");
     $post->files2=time()."_".$file->getClientOriginalName();
     $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.14)"),$post->files2);
     $request['files2']=$post->files2;
  // dd($post);
}
    $post->update
    ([
    //    "year" =>$request->year,
        //"establishment"=>$request->establishment,
        //  "term"=>$request->term,
        // "annotation"=>$request->annotation,
         "files1"=>$post->files1,
         "files2"=>$post->files2,
        // "presentation"=>$post->presentation,
        // "appointmenttime"=>$post->appointmenttime,
        // "Status_acceptance"=>$request->Status_acceptance,
       // "projects" =>$imageName,
       // "presentation" =>$image,
      //  "poster" =>$images,
       // "projectsummary" =>$images1,
    ]);


    return redirect('/officer/Evaluationdocuments')->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function deleEvaluationdocument($Evaluationdocument_id) {
    //ตรวจสอบข้อมูล
    //dd();
    // $establishments=establishment::find($id);
    // DB::table('establishment')->where('id',$id)->delete();

    $posts=Evaluationdocument::findOrFail($Evaluationdocument_id);

     if (File::exists("ไฟล์เอกสารประเมิน(สก.13)/".$posts->files1)) {
         File::delete("ไฟล์เอกสารประเมิน(สก.13)/".$posts->files1);
     }

     if (File::exists("ไฟล์เอกสารประเมิน(สก.14)/".$posts->files2)) {
        File::delete("ไฟล์เอกสารประเมิน(สก.14)/".$posts->files2);
    }

    //  dd($posts);
     $posts->delete();
    //  return view('officer.editestablishmentuser1',compact('establishments'));
     return redirect()->back()->with('success1', 'ลบข้อมูลสำเร็จ.');
 }

 public function   updateuser(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'username' => 'required|unique:users',
        //   'email' => 'required',
        //  'username' => 'required',
        //  'password' => 'required'
        'images' => 'mimes:jpeg,jpg,png|max:1024',
'password' => 'required|confirmed|min:8',
    ],[
            //'establishment.required' => "กรุณา",
// 'username.unique' => "ผู้ใช้งานซ้ำ",
                'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
                'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
                'password.confirmed' => "รหัสผ่านไม่ตรงกัน",
                'password.min' => "รหัสผ่านมากว่า8ตัว",
        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

   if($request->hasFile("images")){
       if (File::exists("Profile/".$post->images)) {
           File::delete("Profile/".$post->images);
       }
       $file=$request->file("images");
        $post->images=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/Profile"),$post->images);
        $request['images']=$post->images;
     // dd($post);
   }
    $post->update
    ([
    //    "username" =>$request->username,


    //    "code_id" =>$request->code_id,
       "major_id" =>$request->major_id,
    //    "establishment_id" =>$request->establishment_id,
       "fname" =>$request->fname,
    //    "surname" =>$request->surname,
    //    "telephonenumber" =>$request->telephonenumber,
    //    "address" =>$request->address,
    //    "GPA" =>$request->GPA,
    //    "em_name" =>$request->em_name,
    //    "year" =>$request->year,
    //    "term" =>$request->term,

    //    "email" =>$request->email,

       "password" => Hash::make($request->password),
         "images"=>$post->images,
       "role" =>$request->role,
    //    "status" =>$request->status,
    //    "username" =>$request->username,
        // $user->establishment_id = "ยังไม่มีสถานประกอบการ";

        // $user->username = $request->username;

        // $user->password = Hash::make($request->password);

        //  $user-> status = "ยังไม่ได้ยืนยันตัวตน";
    ]);


    return redirect('/user')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function   updateuser8(Request $request,$id) {
    //ตรวจสอบข้อมูล

    //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

   if($request->hasFile("images")){
       if (File::exists("Profile/".$post->images)) {
           File::delete("Profile/".$post->images);
       }
       $file=$request->file("images");
        $post->images=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/Profile"),$post->images);
        $request['images']=$post->images;
     // dd($post);
   }
    $post->update
    ([
       "username" =>$request->username,


    //    "code_id" =>$request->code_id,
    //    "major_id" =>$request->major_id,
    //    "establishment_id" =>$request->establishment_id,
       "fname" =>$request->fname,
       "surname" =>$request->surname,
    //    "telephonenumber" =>$request->telephonenumber,
    //    "address" =>$request->address,
    //    "GPA" =>$request->GPA,
    //    "em_name" =>$request->em_name,
    //    "year" =>$request->year,
    //    "term" =>$request->term,

    //    "email" =>$request->email,

       "password" => Hash::make($request->password),
         "images"=>$post->images,
       "role" =>$request->role,
    //    "status" =>$request->status,
    //    "username" =>$request->username,
        // $user->establishment_id = "ยังไม่มีสถานประกอบการ";

        // $user->username = $request->username;

        // $user->password = Hash::make($request->password);

        //  $user-> status = "ยังไม่ได้ยืนยันตัวตน";
    ]);


    return redirect('/teacher/user')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function edituser1($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('student.Edit.edituser1',compact('users','major'));

 }
 public function edituser002($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('student.Edit.edituser4',compact('users','major'));

 }
 public function edituser01($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('teacher.Edit.edituser1',compact('users','major'));

 }
 public function edituser0001($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('teacher.Edit.edituser2',compact('users','major'));

 }
 public function edituser02($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('officer.Edit.edituser1',compact('users','major'));

 }
 public function edituser04($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);

     $major=DB::table('major')

     ->paginate(5);
     return view('admin.edituser1',compact('users','major'));

 }
 public function edituser0002($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('officer.Edit.edituser2',compact('users','major'));

 }
 public function edituser0004($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
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
     return view('admin.edituser2',compact('users','major'));

 }
 public function editpersonal2($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      $users=student::find($id);

    //   $acceptances=acceptance::find($acceptance_id);
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
        ->orderBy('updated_at','desc')
        ->get();
    //  dd($id);
     return view('student.Edit.edituser2',compact('users','major','major1'));

 }
 public function editpersonal4($id) {
    //ตรวจสอบข้อมูล
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
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
     $student=DB::table('student')
     ->orderBy('student_id', 'desc')
     ->get();
    //  ->paginate(5);
     return view('student.Edit.edituser3',compact('users','major',"student"));

 }
 public function   updateuser001(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        'images' => 'mimes:jpg,jpeg,png|max:1024',
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",
            'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
            'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );

   //dd($request->Status);
    $post=Users::findOrFail($id);

   if($request->hasFile("images")){
       if (File::exists("Profile/".$post->images)) {
           File::delete("Profile/".$post->images);
       }
       $file=$request->file("images");
        $post->images=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/Profile"),$post->images);
        $request['images']=$post->images;
     // dd($post);
   }
    $post->update
    ([
        // "username" =>$request->username,
        "fname" =>$request->fname,
        // "surname" =>$request->surname,
        // "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
         "images"=>$post->images,

    //    "username" =>$request->username,


    //    "code_id" =>$request->code_id,
    //    "major_id" =>$request->major_id,
    //    "establishment_id" =>$request->establishment_id,
    //    "fname" =>$request->fname,
    //    "surname" =>$request->surname,
    //    "telephonenumber" =>$request->telephonenumber,
    //    "address" =>$request->address,

    //    "em_name" =>$request->em_name,
    //    "year" =>$request->year,
    //    "term" =>$request->term,

    //    "email" =>$request->email,

    //    "password" => Hash::make($request->password),

    //    "role" =>$request->role,
    //    "status" =>$request->status,
    ]);


    return redirect('/studenthome')->with('success6', 'แก้ไขข้อมูลสำเร็จ.');
 }
 public function   updateuser002(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'password' => 'required|confirmed|min:8',
    ],[
            //'establishment.required' => "กรุณา",
'password.confirmed' => "รหัสผ่านไม่ตรงกัน",
                'password.min' => "รหัสผ่านมากว่า8ตัว",
        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
     // dd($post);
//    }
    $post->update
    ([
        // "username" =>$request->username,
        // "fname" =>$request->fname,
        // "surname" =>$request->surname,
        "password" => Hash::make($request->password),
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
        //  "images"=>$post->images,

    //    "username" =>$request->username,


    //    "code_id" =>$request->code_id,
    //    "major_id" =>$request->major_id,
    //    "establishment_id" =>$request->establishment_id,
    //    "fname" =>$request->fname,
    //    "surname" =>$request->surname,
    //    "telephonenumber" =>$request->telephonenumber,
    //    "address" =>$request->address,

    //    "em_name" =>$request->em_name,
    //    "year" =>$request->year,
    //    "term" =>$request->term,

    //    "email" =>$request->email,

    //    "password" => Hash::make($request->password),

    //    "role" =>$request->role,
    //    "status" =>$request->status,
    ]);


    return redirect('/studenthome')->with('success', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function   updatepersonal2(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=student::findOrFail($id);


    $post->update
    ([
       "GPA" =>$request->GPA,
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
        //  "images"=>$post->images,

    //    "username" =>$request->username,


    //    "code_id" =>$request->code_id,
       "major_id" =>$request->major_id,
    //    "establishment_id" =>$request->establishment_id,
       "fname" =>$request->fname,
    //    "surname" =>$request->surname,
       "telephonenumber" =>$request->telephonenumber,
       "address" =>$request->address,

    //    "em_name" =>$request->em_name,
    //    "year" =>$request->year,
       "term" =>$request->term,

       "email" =>$request->email,

    //    "password" => Hash::make($request->password),

    //    "role" =>$request->role,
    //    "status" =>$request->status,
    ]);


    return redirect('/studenthome')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function   updatepersonal4(Request $request,$id) {
    //ตรวจสอบข้อมูล

   // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
        'images' => 'mimes:jpg,jpeg,png|max:1024',
    ],[
            //'establishment.required' => "กรุณา",
            'images.mimes' => 'ไฟล์ต้องเป็นรูปเท่านั้น',
            'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );

   //dd($request->Status);
   $post=establishment::findOrFail($id);

   if($request->hasFile("images")){
    if (File::exists("Establishment/".$post->images)) {
        File::delete("Establishment/".$post->images);
    }
    $file=$request->file("images");
     $post->images=time()."_".$file->getClientOriginalName();
     $file->move(\public_path("/Establishment"),$post->images);
     $request['images']=$post->images;
  // dd($post);
}
    $post->update
    ([
       "em_name" =>$request->em_name,
        //"establishment"=>$request->establishment,
       //  "term"=>$request->term,
       // "annotation"=>$request->annotation,
          "images"=>$post->images,

    //    "username" =>$request->username,


    //    "code_id" =>$request->code_id,
       "em_address" =>$request->em_address,
    //    "establishment_id" =>$request->establishment_id,
       "em_telephone" =>$request->em_telephone,
       "em_email" =>$request->em_email,
       "em_contact_name" =>$request->em_contact_name,
       "em_Contact_email" =>$request->em_Contact_email,

    //    "em_name" =>$request->em_name,
       "em_contactposition" =>$request->em_contactposition,
       "em_job" =>$request->em_job,

       "Student_id" =>$request->Student_id,

    //    "password" => Hash::make($request->password),

       "website" =>$request->website,
    //    "status" =>$request->status,

    ]);


    return redirect('/studenthome')->with('success7', 'แก้ไขข้อมูลสำเร็จ.');
 }

 public function   updateuser2(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status ="ยืนยันตัวตนแล้ว";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/studenthome')->with('success', 'ยืนยันตัวตนสำเร็จ.');
 }

 public function   confirm(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status ="อนุมัติแล้ว";
    $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/teacher/request')->with('success', 'ยืนยันตัวตนสำเร็จ.');
 }

 public function   confirm2(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request,$id);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=registers::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status_registers ="อนุมัติเอกสารแล้ว";
    // $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    // return redirect('/officer/editregister01')->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
    return redirect()->back()->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
    // return redirect()->route('editregister01', ['id' => $post->user_id])->with('success', 'ยืนยันข้อมูลสำเร็จ.');
 }


 public function   confirm02(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=registers::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status_registers ="อนุมัติเอกสารแล้ว";
    // $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/teacher/register1')->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function   confirm05(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=Event::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status_events ="รับทราบขอเปลี่ยนเวลานัดนิเทศ";
    // $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/teacher/supervision')->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function   confirm005(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=Event::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    // $post->Status_events ="รับทราบขอเปลี่ยนเวลานัดนิเทศ";
    // $post->role ="student";
    $post->update
    ([
       "Status_events" =>$request->Status_events,
       "annotation" =>$request->annotation,
    ]);


    return redirect('/teacher/supervision')->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
 }

 public function   confirm003(Request $request,$informdetails_id) {
    //ตรวจสอบข้อมูล

//    dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=informdetails::findOrFail($informdetails_id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status_informdetails ="อนุมัติเอกสารแล้ว";
    // $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect()->back()->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function   confirm03(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=informdetails::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status_informdetails ="อนุมัติเอกสารแล้ว";
    // $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/teacher/informdetails1')->with('success6', 'ยืนยันข้อมูลสำเร็จ.');
 }
 public function   confirm4(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=permission::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->status ="อนุมัติแล้ว";
    // $post->role ="student";
    $post->update
    ([
    //    "status" =>$request->"",

    ]);


    return redirect('/officer/es1')->with('success', 'ยืนยันตัวตนสำเร็จ.');
 }


 public function   confirm1(Request $request,$id) {
    //ตรวจสอบข้อมูล

   //dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);

//    if($request->hasFile("images")){
//        if (File::exists("Profile/".$post->images)) {
//            File::delete("Profile/".$post->images);
//        }
//        $file=$request->file("images");
//         $post->images=time()."_".$file->getClientOriginalName();
//         $file->move(\public_path("/Profile"),$post->images);
//         $request['images']=$post->images;
//      // dd($post);
//    }
    $post->Status ="ไม่อนุมัติ";
    $post->role ="0";
    $post->update
    ([
       "annotation" =>$request->annotation,

    ]);


    return redirect('/teacher/request')->with('success', 'ยืนยันตัวตนสำเร็จ.');
 }


 public function   establishmentstatusupdate(Request $request,$id) {
    //ตรวจสอบข้อมูล

  // dd($request);

    $request->validate([
        // 'images' => ['required','mimes:jpg,jpeg,png'],
        // 'name' => ['required','min:5'],
        // 'filess' => 'required|mimes:pdf',
        // 'establishment' => 'required',
    ],[
            //'establishment.required' => "กรุณา",

        ]
    );

   //dd($request->Status);
   $post=users::findOrFail($id);


    // $post->establishment ="ยืนยันได้สถานประกอบการแล้ว";
    $post->update
    ([
        "establishment_id" =>$request->establishment_id,

    ]);


    return redirect('/studenthome/establishmentuser')->with('success', 'ยืนยันสำเร็จ.');
 }
public function statusedit($id) {
    //ตรวจสอบข้อมูล
    //dd($id);
    //$users=DB::table('users')
      //->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
     $users=users::find($id);
   // $acceptances=DB::table('acceptance')->first();
    //$establishment=DB::table('establishment')
    // ->join('supervision','supervision.supervision_id')
     //->join('supervision', 'establishments.id', '=', 'supervision.id')
    // ->select('supervision.*','establishment.*')
   // ->get();
    //dd($acceptances);
     // dd($Evaluationdocuments);
     return view('student.Edit.establishmentstatus',compact('users'));

 }

 public function test($id) {


    $statusestablishment = Auth::user()->statusestablishment;
    if ($statusestablishment === 'ยังไม่ได้ยืนยันสถานประกอบการ') {
        return redirect('/studenthome/establishmentuser')->with('success', 'ยืนยันสำเร็จ.');
    } elseif ($statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว') {
        return redirect('/studenthome/register')->with('success', 'ยืนยันสำเร็จ.');
    } elseif ($statusestablishment === 'ยังไม่ได้ยืนยันตัวตน') {
        return redirect('/studenthome/establishmentuser')->with('success', 'ยืนยันสำเร็จ.');
    }
    return redirect('/studenthome/establishmentuser')->with('success', 'ยืนยันสำเร็จ.');
}
 }








