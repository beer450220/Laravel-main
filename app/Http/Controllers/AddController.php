<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\establishment;
use App\Models\registers;
use App\Models\users;
use App\Models\informdetails;
use App\Models\report;
use App\Models\supervision;
use App\Models\acceptance;
use App\Models\advisor;
use App\Models\Event;
use App\Models\schedule;
use App\Models\Evaluationdocument;
use App\Models\report_results;
use App\Models\major;
use App\Models\teacher;
use App\Models\permission;
use App\Models\category;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
class AddController extends Controller
{
    public function ssHome()
    {
        return view('welcome');
    }


    public function addstudent()
    {

        return view('student.add.addstudent');
    }
    public function addregister()
    {

        return view('student.add.addregister');
    }


    public function addreport2()
    {

        return view('student.add.addreport');
    }
    public function addstudent1(Request $request) {
        //ตรวจสอบข้อมูล
        //  dd($request);
         $request->validate([
             'fname' => 'required'
            //  'email' => 'required',
            //  'username' => 'required',
            //  'password' => 'required'

             //'password' => Hash::make($request->password),
         ]);
         $data = [
            'fname' => $request->fname,
            // 'user_id' => Auth::user()->id
        ];
        //  $data =array();
        //  $data["fname"]= $request->fname;
        //  $data["user_id"] = Auth::user()->id;
       DB::table('studentinformation')->insert($data);
         return redirect('/studenthome/register')->with('success', 'สมัครสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


    public function register2(Request $request) {
        //ตรวจสอบข้อมูล
         // dd($request->username);
         $request->validate([
             'test' => 'required'
            //  'email' => 'required',
            //  'username' => 'required',
            //  'password' => 'required'

             //'password' => Hash::make($request->password),
         ]);

         $data =array();
         $data["test"]= $request->test;

       DB::table('test')->insert($data);
         return redirect('/studenthome/register')->with('success', 'สมัครสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


//สถานประกอบการ
     public function addestablishmentuser1()
     {
      // $users=users::all()->where('role',"student");
       //$users=users::all()->where('role',"student");
      // $users=DB::table('users')
     //  ->where('role',"student")
       //->join('establishment','establishment.id',"=",'users.id')
       //->select('users.*','establishment.*')
       //->get();
       //$establishment=DB::table('establishment')
       //->where('role',"student")
      // ->get();
      // dd($users);
      // ->paginate(5);
      $major=DB::table('major')->paginate(5);
      $major1=DB::table('category')->paginate(5);
         return view('officer.add.addestablishmentuser1',compact('major','major1'));
     }

     public function addestablishment(Request $request) {
        //ตรวจสอบข้อมูล
         // dd($request);
        $request->validate([
          'images' => 'required|mimes:jpg,jpeg,png',

      ]);
        if($request->hasFile("images")){
          $file=$request->file("images");
          $imageName=time().'_'.$file->getClientOriginalName();
          $file->move(\public_path("/image"),$imageName);

          $post =new establishment([

                "em_name" => $request->em_name,

             "em_address" => $request->em_address,
             'em_telephone' => $request->em_telephone,
             "em_email" => $request->em_email,
             'em_contact_name' => $request->em_contact_name,
             "em_Contact_email" => $request->em_Contact_email,
             'em_contactposition' => $request->em_contactposition,
             "em_job" => $request->em_job,

            //  "user_id" =>'0',
            //  "status" =>'0',
            //  "major_id" =>$request->major_id,
              "images" =>$imageName,
          ]);
           $post->major_id = $request->major_id;
           $post->category_id = $request->category_id;
           // dd($request->id);
         $post->save();
      }

          // if($request->hasFile("images")){
          //     $files=$request->file("images");
          //     foreach($files as $file){
          //         $imageName=time().'_'.$file->getClientOriginalName();
          //         $request['post_id']=$post->id;
          //         $request['image']=$imageName;
          //         $file->move(\public_path("/images"),$imageName);
          //         establishment::create($request->all());

             // }
         // }
          return redirect('/officer/establishmentuser1')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
        //  $request->validate([




            //  'name' => 'required',
            //  'address' => 'required',
            //  'phone' => 'required',
              // 'image' => 'required|mimes:jpg,ipeg,png',
            //  'username' => 'required',
            //  'password' => 'required'

             //'password' => Hash::make($request->password),
        //  ]);

        //  $data =array();
        //  $data["name"]= $request->name;
        //  $data["address"]= $request->address;
        //  $data["phone"]= $request->phone;
        //  $data= $request->file('image');
    // dd($data);
        //  $name_gen=hexdec(uniqid());
        //  $img_ext =strtolower($image->getClientOriginalExtension());
        //   $image=$name_gen.'.'.$img_ext;

        //  $upload_location='image';
        //  $full_path = $upload_location.$img_name;
        // $image->move($upload_location,$img_name);

      // DB::table('establishment')->insert($data);
        //  return redirect('/officer/establishmentuser1')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

     public function addregisteruser(Request $request) {
      //ตรวจสอบข้อมูล
      // dd($request);

    //   if (Auth::check()) {
    //     $user = Auth::user();


    //      $postCount = registers::where('user_id', $user->id)->count();

    //     //$existingPost = registers::where('user_id', $user->id)->first();
    //     // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง

    //     if (($postCount < 1 && $request->namefile === "แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)") || !Auth::user()->id)

        // ($postCount < 1)
        // ($postCount < 1 && $request->filled('user_id'))
        // (!$existingPost)
        // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
        {
            $request->validate([
                // 'filess' => 'required|mimes:pdf',
                'filess' => 'mimes:pdf|max:1024', // ตรวจสอบไฟล์รูปภาพที่มีขนาดไม่เกิน 2 MB (2048 KB)
                // 'filess' => 'required|mimes:jpeg,jpg,png',
                // 'filess' => 'mimes:jpeg,jpg,png',

                // 'namefile' => 'required|unique:namefile',
                // 'user_id' => 'required|unique:user_id',
              ],[
                    // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
                //    'namefile.required' => "กรุณาชื่อไฟล์",
                //    'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
                'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
                 'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
                ]
            );
              if($request->hasFile("filess")){
                $file=$request->file("filess");
                 $imageName=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("/document"),$imageName);


                $post =new registers([
                //   "user_id" => $request->user_id,
                     "namefile" => $request->namefile,
                    "filess" =>$imageName,
                    "annotation" => "-",
                    // "year" => $request->year,
                    // "term" => $request->term,

                    "Status_registers" => "รอยืนยันเอกสารทั้งหมด",
                ]);
            //   $post->annotation ="-";
            //   $post->Status_registers ="รอยืนยันเอกสารทั้งหมด";
              $post->user_id = Auth::user()->id;
              $post->save();
            }
            // else{  if(Auth::check()) {
            //     $user = Auth::user();
            //     $postCount = registers::where('user_id', $user->id)->count();

            //     if ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน") {
            //     $request->validate([
            //         'filess' => 'mimes:jpeg,jpg,png',
            //         // 'namefile' => 'required|unique:namefile',
            //         // 'user_id' => 'required|unique:user_id',
            //     ], [
            //         // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
            //         // 'namefile.required' => "กรุณาชื่อไฟล์",
            //         // 'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
            //     ]);

            //     if ($request->hasFile("filess")) {
            //         $file = $request->file("filess");
            //         $imageName = time() . '_' . $file->getClientOriginalName();
            //         $file->move(\public_path("/file"), $imageName);

            //         $post = new registers([
            //             "user_id" => $request->user_id,
            //             "namefile" => $request->namefile,
            //             "filess" => $imageName,
            //             "annotation" => "-",
            //             "Status_registers" => "รอยืนยันเอกสารทั้งหมด",
            //         ]);

            //         $post->user_id = Auth::user()->id;
            //         $post->save();


              return redirect('/studenthome1')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');

            // return redirect('/studenthome/register')
            //     ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');


            // return redirect('/studenthome/register')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
    }
}


    //   if (registers::count() >= 1) {
    //     return redirect('/studenthome/register')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
    // }




//         return redirect('/studenthome/register')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
// } else {
//     return redirect('/studenthome/register')
//         ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
// }
//}

      //  $data->save();





      public function addpersonal1(Request $request) {
        //ตรวจสอบข้อมูล
        //  dd($request);


          {
              $request->validate([
                  // 'filess' => 'required|mimes:pdf',
                  // 'filess' => 'required|mimes:jpeg,jpg,png',
                  // 'filess' => 'mimes:jpeg,jpg,png',

                  // 'namefile' => 'required|unique:namefile',
                   'student_id' => 'required|unique:student',
                ],[
                      // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
                  //    'namefile.required' => "กรุณาชื่อไฟล์",
                     'student_id.unique' => "ข้อมูลรหัสนักศึกษาซ้ำ",
                  ]
              );


                  $post =new student([
                    // "user_id" => $request->user_id,
                    "student_id" => $request->student_id,
                    "fname" => $request->fname,

                    //   "surname" => $request->surname,
                      "email" => $request->email,
                      "year" => $request->year,
                      "GPA" => $request->GPA,
                      "major_id" => $request->major_id,
                      "telephonenumber" => $request->telephonenumber,
                    //   "year" => $request->year,
                      "term" => $request->term,

                      "address" => $request->address,

                  ]);
              //   $post->annotation ="-";
              //   $post->Status_registers ="รอยืนยันเอกสารทั้งหมด";
                $post->user_id = Auth::user()->id;
                $post->save();


                return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');

              // return redirect('/studenthome/register')
              //     ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');


              // return redirect('/studenthome/register')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
      }
  }

  public function addpersonal3(Request $request) {
    //ตรวจสอบข้อมูล
    //   dd($request);


      {
          $request->validate([

            'images' => 'mimes:jpeg,jpg,png|max:1024',
              // 'filess' => 'required|mimes:pdf',
              // 'filess' => 'required|mimes:jpeg,jpg,png',
              // 'filess' => 'mimes:jpeg,jpg,png',

              // 'namefile' => 'required|unique:namefile',
              // 'user_id' => 'required|unique:user_id',
            ],[
                  // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
              //    'namefile.required' => "กรุณาชื่อไฟล์",
              //    'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
              'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
                 'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
              ]
          );
          if($request->hasFile("images")){
            $file=$request->file("images");
             $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/Establishment"),$imageName);


              $post =new establishment([
                // "user_id" => $request->user_id,
                "em_name" => $request->em_name,
                "em_address" => $request->em_address,

                  "em_telephone" => $request->em_telephone,
                  "em_email" => $request->em_email,
                  "em_contact_name" => $request->em_contact_name,
                  "em_Contact_email" => $request->em_Contact_email,
                  "em_contactposition" => $request->em_contactposition,
                  "student_id" => $request->student_id,
                  "em_job" => $request->em_job,
                  "website" => $request->website,


                  "images" =>$imageName,


              ]);
              $post->user_id = Auth::user()->id;
          //   $post->annotation ="-";
          //   $post->Status_registers ="รอยืนยันเอกสารทั้งหมด";
            // $post->user_id = Auth::user()->id;
            $post->save();
 }

            return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');

          // return redirect('/studenthome/register')
          //     ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');


          // return redirect('/studenthome/register')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
  }
}




     public function addinformdetails(Request $request) {
      //ตรวจสอบข้อมูล
    //   dd($request);
      $request->validate([
        // 'filess' => 'required|mimes:pdf',
        // 'user_id' => 'required|unique:user_id',
        // 'files' => 'mimes:jpeg,jpg,png',
        'files' => 'mimes:pdf|max:1024',
        'namefile' => 'required',
      ],[
          // 'name.required' => "กรุณา",
          'namefile.required' => "กรุณาชื่อไฟล์",
          'files.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
                 'files.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
        ]
    );
      if($request->hasFile("files")){
        $file=$request->file("files");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/document2"),$imageName);
{

        $post =new informdetails

      //  $post->Status = "student"
      //  $post->name = $request->name;
      //  $post->establishment = $request->establishment;
      // //  $post->filess =>$imageName;
      // $post ->filess= $request->$imageName;
      //  $post ->filess= $request->filess;
      // $post->save();
        ([
          // "user_id" => $request->user_id,
            "namefile" => $request->namefile,
        //    'establishment' => $request->establishment,
            "files" =>$imageName,
            // "year" => $request->year,
            // "term" => $request->term,

        ]);// dd($request);dd($request->Status);

      $post->Status_informdetails ="รอยืนยันเอกสารทั้งหมด";
      $post->annotation ="-";
    //   $post->establishment ="-";
      $post->user_id = Auth::user()->id;
      $post->save();
      //  $data->save();
    }



         return redirect('/studenthome/informdetails')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');





}

     }

     public function addreport(Request $request) {
      //ตรวจสอบข้อมูล
      //dd($request);
      $request->validate([
        // 'filess' => 'required|mimes:pdf',
        // 'user_id' => 'required|unique:user_id',
        'filess' => 'mimes:jpeg,jpg,png',

        'namefile' => 'required',
      ],[
          // 'name.required' => "กรุณา",
          'namefile.required' => "กรุณาชื่อไฟล์",
        ]
    );
      if($request->hasFile("filess")){
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารฝึกประสบการณ์"),$imageName);
{

        $post =new report

      //  $post->Status = "student"
      //  $post->name = $request->name;
      //  $post->establishment = $request->establishment;
      // //  $post->filess =>$imageName;
      // $post ->filess= $request->$imageName;
      //  $post ->filess= $request->filess;
      // $post->save();
        ([
          // "user_id" => $request->user_id,
            "namefile" => $request->namefile,
        //    'establishment' => $request->establishment,
            "filess" =>$imageName,
            "year" => $request->year,
            "term" => $request->term,

        ]);// dd($request);dd($request->Status);

      $post->Status_report ="รอยืนยันเอกสารทั้งหมด";
      $post->annotation ="-";
    //   $post->establishment ="-";
      $post->user_id = Auth::user()->id;
      $post->save();
      //  $data->save();
    }
      }
         return redirect('/studenthome/report')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
      }


public function calendar2add(Request $request,$id) {
  //ตรวจสอบข้อมูล
   dd($request);

   $request->validate([
    // 'title' => 'required|string'
]);
$post=Event::findOrFail($id);

$post->update([
  // 'title' => $request->title,
  //   'start' => $request->start,
  //   'end' => $request->end,
  //   'name' => $request->name,
    'Status' => $request->Status,
]);

//    $data =array();
//    $data["test"]= $request->test;
//    $data["test"]= $request->test;
//  DB::table('test')->insert($data);
   return redirect('/studenthome/calendar2')->with('success', 'สมัครสำเร็จ.');
   // return redirect("/welcome")->with('success', 'Company has been created successfully.');
}



#teacher

public function addSuperviseteacher()
{

    return view('teacher.add.addSupervise');
}

public function addSuperviseteacher1()
{

    return view('teacher.add.addSupervise1');
}
public function addSuperviseteacheruser(Request $request) {
    //ตรวจสอบข้อมูล
    // dd($request);

  //   if (Auth::check()) {
  //     $user = Auth::user();


  //      $postCount = registers::where('user_id', $user->id)->count();

  //     //$existingPost = registers::where('user_id', $user->id)->first();
  //     // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง

  //     if (($postCount < 1 && $request->namefile === "แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)") || !Auth::user()->id)

      // ($postCount < 1)
      // ($postCount < 1 && $request->filled('user_id'))
      // (!$existingPost)
      // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
      {
          $request->validate([
              // 'filess' => 'required|mimes:pdf',
              // 'filess' => 'required|mimes:jpeg,jpg,png',
              'filess' => 'mimes:jpeg,jpg,png',

              // 'namefile' => 'required|unique:namefile',
              // 'user_id' => 'required|unique:user_id',
            ],[
                  // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
              //    'namefile.required' => "กรุณาชื่อไฟล์",
              //    'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
              ]
          );
            if($request->hasFile("filess")){
              $file=$request->file("filess");
               $imageName=time().'_'.$file->getClientOriginalName();
              $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.12)"),$imageName);


              $post =new report_results([
                "user_id" => $request->user_id,
                   "namefile" => $request->namefile,
                  "filess" =>$imageName,
                  "annotation" => "-",
                  "Status_results" => "รอยืนยันเอกสารทั้งหมด",
              ]);
          //   $post->annotation ="-";
          //   $post->Status_registers ="รอยืนยันเอกสารทั้งหมด";
            $post->user_id = Auth::user()->id;
            $post->save();
          }
          // else{  if(Auth::check()) {
          //     $user = Auth::user();
          //     $postCount = registers::where('user_id', $user->id)->count();

          //     if ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน") {
          //     $request->validate([
          //         'filess' => 'mimes:jpeg,jpg,png',
          //         // 'namefile' => 'required|unique:namefile',
          //         // 'user_id' => 'required|unique:user_id',
          //     ], [
          //         // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
          //         // 'namefile.required' => "กรุณาชื่อไฟล์",
          //         // 'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
          //     ]);

          //     if ($request->hasFile("filess")) {
          //         $file = $request->file("filess");
          //         $imageName = time() . '_' . $file->getClientOriginalName();
          //         $file->move(\public_path("/file"), $imageName);

          //         $post = new registers([
          //             "user_id" => $request->user_id,
          //             "namefile" => $request->namefile,
          //             "filess" => $imageName,
          //             "annotation" => "-",
          //             "Status_registers" => "รอยืนยันเอกสารทั้งหมด",
          //         ]);

          //         $post->user_id = Auth::user()->id;
          //         $post->save();


            return redirect('/teacher/calendar5confirm')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');

          return redirect('/teacher/calendar5confirm')
              ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');


          return redirect('/teacher/calendar5confirm')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
  }
}

public function addSuperviseteacheruser1(Request $request) {
    //ตรวจสอบข้อมูล
    // dd($request);

  //   if (Auth::check()) {
  //     $user = Auth::user();


  //      $postCount = registers::where('user_id', $user->id)->count();

  //     //$existingPost = registers::where('user_id', $user->id)->first();
  //     // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง

  //     if (($postCount < 1 && $request->namefile === "แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)") || !Auth::user()->id)

      // ($postCount < 1)
      // ($postCount < 1 && $request->filled('user_id'))
      // (!$existingPost)
      // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
      {
          $request->validate([
              // 'filess' => 'required|mimes:pdf',
              // 'filess' => 'required|mimes:jpeg,jpg,png',
              'filess' => 'mimes:jpeg,jpg,png',

              // 'namefile' => 'required|unique:namefile',
              // 'user_id' => 'required|unique:user_id',
            ],[
                  // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
              //    'namefile.required' => "กรุณาชื่อไฟล์",
              //    'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
              ]
          );
            if($request->hasFile("filess")){
              $file=$request->file("filess");
               $imageName=time().'_'.$file->getClientOriginalName();
              $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.15)"),$imageName);


              $post =new report_results([
                "user_id" => $request->user_id,
                   "namefile" => $request->namefile,
                  "filess" =>$imageName,
                  "annotation" => "-",
                  "Status_results" => "รอยืนยันเอกสารทั้งหมด",
              ]);
          //   $post->annotation ="-";
          //   $post->Status_registers ="รอยืนยันเอกสารทั้งหมด";
            $post->user_id = Auth::user()->id;
            $post->save();
          }
          // else{  if(Auth::check()) {
          //     $user = Auth::user();
          //     $postCount = registers::where('user_id', $user->id)->count();

          //     if ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน") {
          //     $request->validate([
          //         'filess' => 'mimes:jpeg,jpg,png',
          //         // 'namefile' => 'required|unique:namefile',
          //         // 'user_id' => 'required|unique:user_id',
          //     ], [
          //         // 'filess.required' => "กรุณาใส่เป็นไฟล์รูปภาพ",
          //         // 'namefile.required' => "กรุณาชื่อไฟล์",
          //         // 'namefile.unique' => "ไม่สามารถเพิ่มข้อมูลได้",
          //     ]);

          //     if ($request->hasFile("filess")) {
          //         $file = $request->file("filess");
          //         $imageName = time() . '_' . $file->getClientOriginalName();
          //         $file->move(\public_path("/file"), $imageName);

          //         $post = new registers([
          //             "user_id" => $request->user_id,
          //             "namefile" => $request->namefile,
          //             "filess" => $imageName,
          //             "annotation" => "-",
          //             "Status_registers" => "รอยืนยันเอกสารทั้งหมด",
          //         ]);

          //         $post->user_id = Auth::user()->id;
          //         $post->save();


            return redirect('/teacher/calendar5confirm')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');

          return redirect('/teacher/calendar5confirm')
              ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');


          return redirect('/teacher/calendar5confirm')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
  }
}



public function addestimate1()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->orderBy('users.updated_at', 'DESC')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('teacher.add.addestimate1',compact('users'),compact('establishment'));
    }
    public function addestimate2()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addestimate1',compact('users'),compact('establishment'));
    }
    public function addes1()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('teacher.add.addes1',compact('users'),compact('establishment'));
    }
    public function addteacher1()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
      ->get();
      $major=DB::table('major')
      //->where('role',"student")
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('teacher.add.addteacher1',compact('users'),compact('establishment','major'));
    }

    public function addestimate(Request $request) {
      //ตรวจสอบข้อมูล
       //dd($request);

       $request->validate([
        'user_id' => 'required|unique:supervision',
        'namefile' => 'required|unique:supervision',
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
        'filess' => 'mimes:pdf|max:1024',

    ]
  ,[
    'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
    'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
    'user_id.unique' => "ชื่อนักศึกษาซ้ำ",
    'namefile.unique' => "ชื่อไฟล์เอกสารซ้ำ",
  ]

);

if($request->hasFile("filess"))
      {
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/document4"),$imageName);
    // $post=Event::findOrFail($id);

    $post =new supervision
    ([
        "user_id" => $request->user_id,
        // "term" => $request->term,
        'namefile' => $request->namefile,
        // "year" => $request->year,
        'score' => $request->score,
        // 'Status_supervision' => $request->Status_supervision,
        "filess" =>$imageName,
        'annotation' => $request->annotation,

    ]);

    // $post->annotation ="-";
    // $post->Status_supervision ="รอยืนยันเอกสารทั้งหมด";
    $post->save();
    $score = $request->input('score');
    $status = '';

    if ($score > 100) {
        $status = 'ผ่าน';
    } else if ($score >= 80) {
        $status = 'ผ่าน';
    } else if ($score >= 60) {
        $status = 'กลาง';
    } else if ($score < 50) {
        $status = 'ไม่ผ่าน';
    } else if ($score < 40) {
        $status = 'ไม่ผ่าน';
    }
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/teacher/estimate1')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');
       // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
}

public function addestimate3(Request $request) {
    //ตรวจสอบข้อมูล
     //dd($request);

     $request->validate([
// 'user_id' => [
//         'required',
//         Rule::unique('supervision')->where(function ($query) use ($request) {
//             return $query->where('user_id', $request->user_id)
//                          ->where('namefile', $request->namefile);
//         })
//     ],
      //  'name' => 'required|unique:name',
      //  'test' => 'required|unique:test',
      'filess' => 'mimes:pdf|max:1024',
//   'user_id' => 'required',
  'user_id' => 'required|unique:supervision,user_id,NULL,id,namefile,' . $request->namefile,
    'namefile' => 'required|unique:supervision,namefile,NULL,id,user_id,' . $request->user_id,
      'score' => 'required|numeric|min:0|max:100',

  ]

,[

  // 'name.required'=>"กรุณากรอกชื่อ",
  // 'test.required'=>"กรุณาเทส",
  'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
                 'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
               'user_id.unique' => "ชื่อนักศึกษาซ้ำ",
                 'namefile.unique' => "ชื่อไฟล์เอกสารซ้ำ",
]

);

if($request->hasFile("filess"))
    {
      $file=$request->file("filess");
       $imageName=time().'_'.$file->getClientOriginalName();
      $file->move(\public_path("/document4"),$imageName);
  // $post=Event::findOrFail($id);

  $post =new supervision
  ([
      "user_id" => $request->user_id,
    //   "term" => $request->term,
      'namefile' => $request->namefile,
    //   "year" => $request->year,
      'score' => $request->score,
      "filess" =>$imageName,
    //   'Status_supervision' => $request->Status_supervision,


  ]);

  $post->annotation ="-";
//   $post->Status_supervision ="รอยืนยันเอกสารทั้งหมด";
  $post->save();
    //  $data =array();
    //  $data["test"]= $request->test;
  //    $data["test"]= $request->test;
  // DB::table('test')->insert($data);
  $score = $request->input('score');
  $status = '';

  if ($score > 201) {
      $status = 'คะแนนเกิน';
  } else if ($score >= 100) {
      $status = 'ผ่าน';
  } else if ($score >= 80) {
      $status = 'ผ่าน';
  } else if ($score >= 60) {
      $status = 'กลาง';
  } else if ($score < 50) {
      $status = 'ไม่ผ่าน';
  } else if ($score < 40) {
      $status = 'ไม่ผ่าน';
  }

  if ($score > 200) {
      $status = 'เกิน';
      // สามารถทำการแจ้งเตือนหรือประมวลผลเพิ่มเติมตามที่ต้องการได้
  }
     return redirect('/officer/Evaluate')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
  }
}

public function addes2(Request $request) {
    //ตรวจสอบข้อมูล
     //dd($request);

     $request->validate([
      //  'name' => 'required|unique:name',
      //  'test' => 'required|unique:test',
  ]
,[

  // 'name.required'=>"กรุณากรอกชื่อ",
  // 'test.required'=>"กรุณาเทส",
]

);

if($request->hasFile("filess"))
    {
      $file=$request->file("filess");
       $imageName=time().'_'.$file->getClientOriginalName();
      $file->move(\public_path("/ไฟล์เอกสารขออนุญาตนิเทศงาน"),$imageName);
  // $post=Event::findOrFail($id);

  $post =new permission
  ([
    //   "user_id" => $request->user_id,
      "term" => $request->term,
      'namefile' => $request->namefile,
      "year" => $request->year,
    //   'score' => $request->score,
      "filess" =>$imageName,


  ]);

  $post->annotation ="-";
  $post->status ="รอยืนยันเอกสารทั้งหมด";
  $post->save();
    //  $data =array();
    //  $data["test"]= $request->test;
  //    $data["test"]= $request->test;
  // DB::table('test')->insert($data);
     return redirect('/teacher/es1')->with('success', 'สมัครสำเร็จ.');
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
  }
}


public function addteacher(Request $request) {
    //ตรวจสอบข้อมูล
     //dd($request);


     $request->validate([
          'fname' => 'required|unique:teacher',
      //  'name' => 'required|unique:name',
      //  'test' => 'required|unique:test',
  ]
,[
 'fname.unique' => "ขื่อซ้ำ",
  // 'name.required'=>"กรุณากรอกชื่อ",
  // 'test.required'=>"กรุณาเทส",
]

);



  $post =new teacher
  ([

    //   'name' => $request->name,

      'fname' => $request->fname,
    //   'surname' => $request->surname,
      'email' => $request->email,
      'major_id' => $request->major_id,
      'telephonenumber' => $request->telephonenumber,
      'address' => $request->address,

  ]);


  $post->save();
    //  $data =array();
    //  $data["test"]= $request->test;
  //    $data["test"]= $request->test;
  // DB::table('test')->insert($data);
     return redirect('/teacher/teacher01')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
  }



#officer

public function addacceptancedocument1()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      ->ORDERBY('users.created_at' ,'DESC')
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
      ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addacceptancedocument1',compact('users'),compact('establishment'));
    }

//หลักสูตรสาขา
    public function addmajor()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student")
     // ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addmajor');
    }

//หลักสูตรสาขา
public function addmajor2()
{
 // $users=users::all()->where('role',"student");
  //$users=users::all()->where('role',"student");
 // $users=DB::table('users')
//  ->where('role',"student")
  //->join('establishment','establishment.id',"=",'users.id')
  //->select('users.*','establishment.*')
  //->get();
  //$establishment=DB::table('establishment')
  //->where('role',"student")
 // ->get();
 // dd($users);
 // ->paginate(5);
    return view('teacher.add.addmajor');
}

//หลักสูตรสาขา
public function addcategory()
{
 // $users=users::all()->where('role',"student");
  //$users=users::all()->where('role',"student");
 // $users=DB::table('users')
//  ->where('role',"student")
  //->join('establishment','establishment.id',"=",'users.id')
  //->select('users.*','establishment.*')
  //->get();
  //$establishment=DB::table('establishment')
  //->where('role',"student")
 // ->get();
 // dd($users);
 // ->paginate(5);
    return view('officer.add.addcategory');
}

    public function addmajor1(Request $request) {
        //ตรวจสอบข้อมูล
        // dd($request);

         $request->validate([
            'name_major' => 'required|unique:major',
            // 'faculty' => 'required|unique:major',
          //  'name' => 'required|unique:name',
          //  'test' => 'required|unique:test',
      ]
    ,[
        'name_major.unique' => "ชื่อสาขาซ้ำ",
        // 'faculty.unique' => "คณะซ้ำ",
      // 'name.required'=>"กรุณากรอกชื่อ",
      // 'test.required'=>"กรุณาเทส",
    ]

  );
      $post =new major
      ([
          "name_major" => $request->name_major,
          "faculty" => $request->faculty,



      ]);
     // $post->Status ="รอยืนยันเอกสารทั้งหมด";
      $post->save();
        //  $data =array();
        //  $data["test"]= $request->test;
      //    $data["test"]= $request->test;
      // DB::table('test')->insert($data);
         return redirect('/officer/major')->with('success', 'สมัครสำเร็จ.');

      }


      public function addmajor3(Request $request) {
        //ตรวจสอบข้อมูล
        // dd($request);

         $request->validate([
            'name_major' => 'required|unique:major',
          //  'name' => 'required|unique:name',
          //  'test' => 'required|unique:test',
      ]
    ,[
        'name_major.unique' => "ชื่อสาขาซ้ำ",
      // 'name.required'=>"กรุณากรอกชื่อ",
      // 'test.required'=>"กรุณาเทส",
    ]

  );
      $post =new major
      ([
          "name_major" => $request->name_major,
          "faculty" => $request->faculty,



      ]);
     // $post->Status ="รอยืนยันเอกสารทั้งหมด";
      $post->save();
        //  $data =array();
        //  $data["test"]= $request->test;
      //    $data["test"]= $request->test;
      // DB::table('test')->insert($data);
         return redirect('/teacher/major')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');

      }

      public function addcategory1(Request $request) {
        //ตรวจสอบข้อมูล
        // dd($request);

         $request->validate([
           'year' => 'required|unique:notify',
          //  'test' => 'required|unique:test',
      ]
    ,[
        'year.unique' => "ภาคเรียนซ้ำ",
    //    'name.required'=>"กรุณากรอกชื่อ",
      // 'test.required'=>"กรุณาเทส",
    ]

  );

//   if($request->hasFile("images"))
//   {
//     $file=$request->file("images");
//      $imageName=time().'_'.$file->getClientOriginalName();
//     $file->move(\public_path("/หมวดหมู่"),$imageName);
// $post=Event::findOrFail($id);

$post =new category
([
//     "name" => $request->name,
// "name1" => $request->name1,
"year" => $request->year,
"start_date" => $request->start_date,
"end_date" => $request->end_date,
"start_notify" => $request->start_notify,
"end_notify" => $request->end_notify,
    // "images" =>$imageName,
    // 'name', 'name1', 'year', 'start_date', 'end_date', 'start_notify', 'end_notify',
]);
// }

    //    $user = new Users;
    // $post = new category;
    //    $post->name = $request->name;
     // $post->Status ="รอยืนยันเอกสารทั้งหมด";
      $post->save();

        //  $data =array();
        //  $data["test"]= $request->test;
      //    $data["test"]= $request->test;
      // DB::table('test')->insert($data);
         return redirect('/officer/category')->with('success', 'สมัครสำเร็จ.');

      }
    public function addacceptancedocument(Request $request) {
      //ตรวจสอบข้อมูล
       //dd($request);

       $request->validate([
        'filess' => 'mimes:pdf|max:1024', // ตรวจสอบไฟล์รูปภาพที่มีขนาดไม่เกิน 2 MB (2048 KB)
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
        'user_id' => 'required|unique:acceptance,user_id,NULL,id,namefile,' . $request->namefile,
    'namefile' => 'required|unique:acceptance,namefile,NULL,id,user_id,' . $request->user_id,

    // 'Status_acceptance' => 'required|unique:acceptance,Status_acceptance,NULL,id,user_id,' . $request->user_id,
    ]
  ,[
    'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
    'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
    'user_id.unique' => "ชื่อนักศึกษาซ้ำ",
                 'namefile.unique' => "ชื่อไฟล์เอกสารซ้ำ",
                //  'Status_acceptance.unique' => "ชื่อซ้ำ",
    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);

if($request->hasFile("filess"))
      {
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/document1"),$imageName);
    // $post=Event::findOrFail($id);

    $post =new acceptance
    ([
        "user_id" => $request->user_id,
        // "term" => $request->term,
        // 'establishment_id' => $request->establishment_id,
        // "year" => $request->year,
        'annotation' => $request->annotation,
        "filess" =>$imageName,
        'Status_acceptance'=>$request->Status_acceptance,
        'namefile' => $request->namefile ,
    ]);
   // $post->Status ="รอยืนยันเอกสารทั้งหมด";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/acceptancedocument1')->with('success6', 'เพื่มข้อมูลสำเร็จ.');
       // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
}



public function addsupervision()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
      $users=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")

      ->get();
     // dd($users);
     // ->paginate(5);
     $major=DB::table('users')->paginate(5);
        return view('officer.add.addsupervision',compact('users'),compact('establishment','major'));
    }


    public function addsupervision01()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
    //   $users=DB::table('users')
    //   ->where('role',"student")
    //   //->join('establishment','establishment.id',"=",'users.id')
    //   //->select('users.*','establishment.*')
    //   ->get();

      $users=DB::table('student')
    //   ->where('role',"student")
    //
      ->get();
      $users2=DB::table('teacher')
    //   ->where('role',"student")
    ->orderBy('teacher.updated_at', 'desc')
      ->get();
      $users1=DB::table('users')
      ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      ->get();
      $establishment=DB::table('establishment')
      //->where('role',"student")
    //   ->select('em_name', DB::raw('GROUP_CONCAT(student_id) AS student_ids'))
    // ->groupBy('em_name')
    // ->havingRaw('COUNT(*) > 1')
     ->orderBy('establishment.updated_at', 'desc')

    // ->select( 'student_id','em_name')
    // ->groupBy('em_name','student_id')
    // ->havingRaw('COUNT(*) > 1')
    // ->orderBy('em_id', 'desc')

    // ->select('em_name', DB::raw('GROUP_CONCAT(student_id) AS student_ids'))
    // ->groupBy('em_name')
    // ->havingRaw('COUNT(*) > 1')
    // ->orderByDesc('em_id')

    // ->select('em_name')
    // ->groupBy('em_name')
    // ->havingRaw('COUNT(*) > 1')
      ->get();

      //  dd( $establishment);
    //   $establishmen = establishment::select(DB::raw("COUNT(DISTINCT em_name) as count"))
    //   ->get();
     // dd($users);
     // ->paginate(5);
     $major=DB::table('users')->paginate(5);
        return view('teacher.add.addsupervision',compact('users1','users','users2','establishment'),compact('major'));
    }



    public function getSubcategories(Request $request)
    {
        $id = $request->id;
        $subcategories = establishment::where('id', $id)->get();

        $output = '<option value="">-- เลือกหมวดหมู่ย่อย --</option>';
        foreach ($subcategories as $subcategory) {
            $output .= '<option value="'.$subcategory->id.'">'.$subcategory->em_name.'</option>';
        }
        return $output;
    }
    public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(DB::table('sub_categories')->where('category_id', $id)->get());
    }
    public function getStudentCount(Request $request)
    {
        $emName = $request->input('em_name');

        // ค้นหา establishment ที่มี em_name เท่ากับ $emName และ student_id ไม่ซ้ำกัน
        $establishments = DB::table('establishment')
            ->selectRaw('GROUP_CONCAT(student_id) AS student_ids')
            ->where('em_name', $emName)
            ->groupBy('em_name')
            ->havingRaw('COUNT(DISTINCT student_id) > 0')
            ->get();

        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($establishments->isEmpty()) {
            return response()->json(['student_ids' => 'ไม่มีข้อมูล']);
        }

        // รวม student_id ที่ซ้ำกันเป็น string แยกด้วยเครื่องหมายคอมมา
        $studentIds = $establishments->first()->student_ids;
    // ส่งกลับเป็น JSON response
    return response()->json(['student_ids' => $studentIds]);
}

public function getStudentNames(Request $request)
{
    $emName = $request->input('em_name');

    // Query to retrieve establishment with student_ids
    $establishments = DB::table('establishment')
        ->selectRaw('GROUP_CONCAT(student_id) AS student_ids')
        ->where('em_name', $emName)
        ->groupBy('em_name')
        ->havingRaw('COUNT(DISTINCT student_id) > 0')
        ->first(); // Get first result

    // Check if establishment exists
    if (empty($establishments)) {
        return response()->json(['error' => 'ไม่พบข้อมูลสถานประกอบการ']);
    }

    // Extract student_ids from string to array
    $studentIds = explode(',', $establishments->student_ids);

    // Query to retrieve student names based on student_ids
    $students = DB::table('student')
        ->where('student_id', $studentIds)
        ->select('fname')
        ->get();

    // Return JSON response with student names
    return response()->json(['students' => $students]);
}


    public function fatchState(Request $request)
    {
        // $data['states'] = establishment::where('user_id',$request->user_id)->get(['em_name','id']);

          $data['states'] = student::where('student_id',$request->student_id)->get(['fname','id']);
        //  dd($request, $data);
        return response()->json($data);
    }
    // public function fatchCity(Request $request)
    // {
    //     $data['cities'] = City::where('state_id',$request->state_id)->get(['name','id']);

    //     return response()->json($data);
    // }

    // public function fatchCity(Request $request)
    // {
    //     $data['cities'] = City::where('state_id',$request->state_id)->get(['name','id']);

    //     return response()->json($data);
    // }


    public function addsupervision1(Request $request) {
      //ตรวจสอบข้อมูล
      // dd($request);

       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);
    $post =new Event
    ([
        // "title" => $request->title,
        "start" => $request->start,
        // 'end' => $request->end,
        "term" => $request->term,
        "year" => $request->year,
        // "student_name" => $request->student_name,



    ]); $post->user_id = "0";
    $post-> Statusevents = "student";
    $post-> List_teacher = "List_teacher";
    $post-> Statustime = "List_teacher";
    $post['student_name'] = json_encode($request->student_name);
   // $post->Status ="รอยืนยันเอกสารทั้งหมด";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/supervision')->with('success', 'สมัครสำเร็จ.');

    }

    public function addsupervision02(Request $request) {
        //ตรวจสอบข้อมูล
        //   dd($request);

         $request->validate([
          //  'name' => 'required|unique:name',
          //  'test' => 'required|unique:test',
          'student_name' => 'required|unique:events',
          'filess' => 'mimes:pdf|max:1024',
          'filess1' => 'mimes:pdf|max:1024',
      ]
    ,[

      // 'name.required'=>"กรุณากรอกชื่อ",
      // 'test.required'=>"กรุณาเทส",
      'student_name.unique' => "ชื่อนักศึกษาซ้ำ",
      'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
                 'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
                 'filess1.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
                 'filess1.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
    ]

  );
  if($request->hasFile("filess"))
    {
      $file=$request->file("filess");
       $imageName=time().'_'.$file->getClientOriginalName();
      $file->move(\public_path("/document3"),$imageName);

      if($request->hasFile("filess1"))
      {
        $file=$request->file("filess1");
         $imageName1=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/document3"),$imageName1);
      $post =new Event
      ([
          // "title" => $request->title,
          "start" => $request->start,
"time" => $request->time,
"time1" => $request->time1,

          "namefiles" => $request->namefiles,
          "namefiles1" => $request->namefiles1,
          // 'end' => $request->end,
        //   "term" => $request->term,
        //   "year" => $request->year,
        //   "appointment_time" => $request->"0000-00-00 00:00:00",
        //   "executive_name" => $request->executive_name,
        //   "contact_person" => $request->contact_person,
          "em_id" => implode(",",$request->em_id),
        "Status_events" => $request->Status_events,
           "student_name" => implode(",",$request->student_name),
           //$request->student_name,
           "filess" =>$imageName,
           "filess1" =>$imageName1,
           "teacher_name" => implode(",",$request->teacher_name),

      ]);
  $post-> annotation =  '-';
    //    $post->user_id = "0";  // $post->Status ="รอยืนยันเอกสารทั้งหมด";
    //   $post-> appointment_time =  null;
      //$post-> List_teacher = "List_teacher";
    //   $post-> Statustime = "List_teacher";
      //$post['student_name'] = json_encode($request->student_name);

     //$data['tags'] = json_encode($request->tags);
    //  $post = Event::create($data);

      $post->save();


        //  $data =array();
        //  $data["test"]= $request->test;
      //    $data["test"]= $request->test;
      // DB::table('test')->insert($data);
         return redirect('/teacher/supervision')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');

      }
    }
    }

    public function addSupervise()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student")
     // ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addSupervise');
    }



    public function addSupervise1(Request $request) {
      //ตรวจสอบข้อมูล
      // dd($request);

       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);
    $post =new advisor
    ([
        "name" => $request->name,
        "course" => $request->course,
        'faculty' => $request->faculty,


    ]);
   // $post->Status ="รอยืนยันเอกสารทั้งหมด";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/Supervise')->with('success', 'สมัครสำเร็จ.');

    }


    public function addschedule()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student")
     // ->get();
     // dd($users);
     // ->paginate(5);
        return view('officer.add.addschedule');
    }



    public function addschedule1(Request $request) {
      //ตรวจสอบข้อมูล
      //dd($request);

       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
        'filess' => 'mimes:pdf|max:1024',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
    'filess.mimes' => 'ไฟล์ต้องเป็นPDFเท่านั้น',
    'filess.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
  ]

);
if($request->hasFile("filess"))
      {
        $file=$request->file("filess");
         $imageName=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/download"),$imageName);
    // $post=Event::findOrFail($id);

    $post =new  schedule
    ([
        // "title" => $request->title,
        "namefile" => $request->namefile,
        // "term" => $request->term,
        // "year" => $request->year,
"status" => $request->status,
        "filess" =>$imageName,


    ]);
   // $post->Status ="รอยืนยันเอกสารทั้งหมด";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
    return redirect('/officer/schedule')->with('success6', 'สมัครสำเร็จ.');
       // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
}





    public function addEvaluationdocuments()
    {
     // $users=users::all()->where('role',"student");
      //$users=users::all()->where('role',"student");
     // $users=DB::table('users')
    //  ->where('role',"student")
      //->join('establishment','establishment.id',"=",'users.id')
      //->select('users.*','establishment.*')
      //->get();
      //$establishment=DB::table('establishment')
      //->where('role',"student")
     // ->get();
     // dd($users);
     // ->paginate(5);
     $users=DB::table('users')
    ->where('role',"student")->get();
      $establishment=DB::table('establishment')
       ->get();
        return view('officer.add.addEvaluationdocuments',compact('users'),compact('establishment'));

    }




    public function addEvaluationdocument(Request $request) {
      //ตรวจสอบข้อมูล
      //dd($request);

       $request->validate([
        //  'name' => 'required|unique:name',
        //  'test' => 'required|unique:test',
    ]
  ,[

    // 'name.required'=>"กรุณากรอกชื่อ",
    // 'test.required'=>"กรุณาเทส",
  ]

);

if($request->hasFile("files1"))
      {
        $file=$request->file("files1");
         $files1=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.13)"),$files1);
    // $post=Event::findOrFail($id);
      }
    if($request->hasFile("files2"))
      {
        $file=$request->file("files2");
         $files2=time().'_'.$file->getClientOriginalName();
        $file->move(\public_path("/ไฟล์เอกสารประเมิน(สก.14)"),$files2);
      }
    $post =new Evaluationdocument
    ([
        // "user_id" => $request->user_id,
        // "term" => $request->term,
        // 'establishment_id' => $request->establishment_id,
        // "year" => $request->year,
        // 'annotation' => $request->annotation,
        "files1" =>$files1,
        "files2" =>$files2,
        // 'Status_acceptance'=>$request->Status_acceptance,

    ]);
   // $post->Status ="รอยืนยันเอกสารทั้งหมด";
    $post->save();
      //  $data =array();
      //  $data["test"]= $request->test;
    //    $data["test"]= $request->test;
    // DB::table('test')->insert($data);
       return redirect('/officer/Evaluationdocuments')->with('success', 'สมัครสำเร็จ.');

    }
}



