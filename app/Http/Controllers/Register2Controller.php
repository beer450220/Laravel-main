<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class Register2Controller extends Controller
{
    //
    public function addregister2()
    {

        return view('student.add.addregister2');
    }
    public function addregister3()
    {

        return view('student.add.addregister3');
    }

    public function addregister4()
    {

        return view('student.add.addregister4');
    }
    public function addregister5()
    {

        return view('student.add.addregister5');
    }
    public function addregister6()
    {

        return view('student.add.addregister6');
    }
    public function addregister7()
    {

        return view('student.add.addregister7');
    }
    public function addregister8()
    {

        return view('student.add.addregister8');
    }

    public function addregisteruser2(Request $request) {
        //ตรวจสอบข้อมูล
        // dd($request);

       // if (Auth::check()) {
       //   $user = Auth::user();


           //$postCount = registers::where('user_id', $user->id)->count();
        //  $existingPost = registers::where('user_id', $user->id)->first();
          // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
        //  if
          //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
          // ($postCount < 1)
          // ($postCount < 1 && $request->filled('user_id'))
          // (!$existingPost)
          // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
       //   {
              $request->validate([
                  // 'filess' => 'required|mimes:pdf',
                  // 'filess' => 'required|mimes:jpeg,jpg,png',
                //   'filess' => 'mimes:jpeg,jpg,png',

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
                  $file->move(\public_path("/file"),$imageName);


                  $post =new registers([
                    "user_id" => $request->user_id,
                       "namefile" => $request->namefile,
                      "filess" =>$imageName,
                      "annotation" => "-",
                      "Status_registers" => "รอตรวจสอบ",
                      "year" => $request->year,
                      "term" => $request->term,
                  ]);
              //   $post->annotation ="-";
              //   $post->Status_registers ="รอตรวจสอบ";
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
              //             "Status_registers" => "รอตรวจสอบ",
              //         ]);

              //         $post->user_id = Auth::user()->id;
              //         $post->save();


                return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
          }
    //        else {
    //           return redirect('/studenthome/register')
    //               ->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
    //       }
    //   }else
    //    {
    //           return redirect('/studenthome/register')->with('error', 'ไม่สามารถเพิ่มข้อมูลได้');
    //   }
//   }
public function addregisteruser3(Request $request) {
    //ตรวจสอบข้อมูล
    // dd($request);

   // if (Auth::check()) {
   //   $user = Auth::user();


       //$postCount = registers::where('user_id', $user->id)->count();
    //  $existingPost = registers::where('user_id', $user->id)->first();
      // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
    //  if
      //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
      // ($postCount < 1)
      // ($postCount < 1 && $request->filled('user_id'))
      // (!$existingPost)
      // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
   //   {
          $request->validate([
              // 'filess' => 'required|mimes:pdf',
              // 'filess' => 'required|mimes:jpeg,jpg,png',
            //   'filess' => 'mimes:jpeg,jpg,png',

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
              $file->move(\public_path("/file"),$imageName);


              $post =new registers([
                "user_id" => $request->user_id,
                   "namefile" => $request->namefile,
                  "filess" =>$imageName,
                  "annotation" => "-",
                  "Status_registers" => "รอตรวจสอบ",
                  "year" => $request->year,
                  "term" => $request->term,
              ]);
          //   $post->annotation ="-";
          //   $post->Status_registers ="รอตรวจสอบ";
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
          //             "Status_registers" => "รอตรวจสอบ",
          //         ]);

          //         $post->user_id = Auth::user()->id;
          //         $post->save();


            return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
      }
      public function addregisteruser4(Request $request) {
        //ตรวจสอบข้อมูล
        // dd($request);

       // if (Auth::check()) {
       //   $user = Auth::user();


           //$postCount = registers::where('user_id', $user->id)->count();
        //  $existingPost = registers::where('user_id', $user->id)->first();
          // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
        //  if
          //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
          // ($postCount < 1)
          // ($postCount < 1 && $request->filled('user_id'))
          // (!$existingPost)
          // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
       //   {
              $request->validate([
                  // 'filess' => 'required|mimes:pdf',
                  // 'filess' => 'required|mimes:jpeg,jpg,png',
                //   'filess' => 'mimes:jpeg,jpg,png',

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
                  $file->move(\public_path("/file"),$imageName);


                  $post =new registers([
                    "user_id" => $request->user_id,
                       "namefile" => $request->namefile,
                      "filess" =>$imageName,
                      "annotation" => "-",
                      "Status_registers" => "รอตรวจสอบ",
                      "year" => $request->year,
                      "term" => $request->term,
                  ]);
              //   $post->annotation ="-";
              //   $post->Status_registers ="รอตรวจสอบ";
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
              //             "Status_registers" => "รอตรวจสอบ",
              //         ]);

              //         $post->user_id = Auth::user()->id;
              //         $post->save();


                return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
          }
          public function addregisteruser5(Request $request) {
            //ตรวจสอบข้อมูล
            // dd($request);

           // if (Auth::check()) {
           //   $user = Auth::user();


               //$postCount = registers::where('user_id', $user->id)->count();
            //  $existingPost = registers::where('user_id', $user->id)->first();
              // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
            //  if
              //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
              // ($postCount < 1)
              // ($postCount < 1 && $request->filled('user_id'))
              // (!$existingPost)
              // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
           //   {
                  $request->validate([
                      // 'filess' => 'required|mimes:pdf',
                      // 'filess' => 'required|mimes:jpeg,jpg,png',
                    //   'filess' => 'mimes:jpeg,jpg,png',

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
                      $file->move(\public_path("/file"),$imageName);


                      $post =new registers([
                        "user_id" => $request->user_id,
                           "namefile" => $request->namefile,
                          "filess" =>$imageName,
                          "annotation" => "-",
                          "Status_registers" => "รอตรวจสอบ",
                          "year" => $request->year,
                      "term" => $request->term,
                      ]);
                  //   $post->annotation ="-";
                  //   $post->Status_registers ="รอตรวจสอบ";
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
                  //             "Status_registers" => "รอตรวจสอบ",
                  //         ]);

                  //         $post->user_id = Auth::user()->id;
                  //         $post->save();


                    return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
              }
              public function addregisteruser6(Request $request) {
                //ตรวจสอบข้อมูล
                // dd($request);

               // if (Auth::check()) {
               //   $user = Auth::user();


                   //$postCount = registers::where('user_id', $user->id)->count();
                //  $existingPost = registers::where('user_id', $user->id)->first();
                  // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
                //  if
                  //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
                  // ($postCount < 1)
                  // ($postCount < 1 && $request->filled('user_id'))
                  // (!$existingPost)
                  // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
               //   {
                      $request->validate([
                          // 'filess' => 'required|mimes:pdf',
                          // 'filess' => 'required|mimes:jpeg,jpg,png',
                        //   'filess' => 'mimes:jpeg,jpg,png',

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
                          $file->move(\public_path("/file"),$imageName);


                          $post =new registers([
                            "user_id" => $request->user_id,
                               "namefile" => $request->namefile,
                              "filess" =>$imageName,
                              "annotation" => "-",
                              "Status_registers" => "รอตรวจสอบ",
                              "year" => $request->year,
                              "term" => $request->term,
                          ]);
                      //   $post->annotation ="-";
                      //   $post->Status_registers ="รอตรวจสอบ";
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
                      //             "Status_registers" => "รอตรวจสอบ",
                      //         ]);

                      //         $post->user_id = Auth::user()->id;
                      //         $post->save();


                        return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
                  }
                  public function addregisteruser7(Request $request) {
                    //ตรวจสอบข้อมูล
                    // dd($request);

                   // if (Auth::check()) {
                   //   $user = Auth::user();


                       //$postCount = registers::where('user_id', $user->id)->count();
                    //  $existingPost = registers::where('user_id', $user->id)->first();
                      // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
                    //  if
                      //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
                      // ($postCount < 1)
                      // ($postCount < 1 && $request->filled('user_id'))
                      // (!$existingPost)
                      // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
                   //   {
                          $request->validate([
                              // 'filess' => 'required|mimes:pdf',
                              // 'filess' => 'required|mimes:jpeg,jpg,png',
                            //   'filess' => 'mimes:jpeg,jpg,png',

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
                              $file->move(\public_path("/file"),$imageName);


                              $post =new registers([
                                "user_id" => $request->user_id,
                                   "namefile" => $request->namefile,
                                  "filess" =>$imageName,
                                  "annotation" => "-",
                                  "Status_registers" => "รอตรวจสอบ",
                              ]);
                          //   $post->annotation ="-";
                          //   $post->Status_registers ="รอตรวจสอบ";
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
                          //             "Status_registers" => "รอตรวจสอบ",
                          //         ]);

                          //         $post->user_id = Auth::user()->id;
                          //         $post->save();


                            return redirect('/studenthome')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
                      }
                      public function addregisteruser8(Request $request) {
                        //ตรวจสอบข้อมูล
                        // dd($request);

                       // if (Auth::check()) {
                       //   $user = Auth::user();


                           //$postCount = registers::where('user_id', $user->id)->count();
                        //  $existingPost = registers::where('user_id', $user->id)->first();
                          // ตรวจสอบว่าผู้ใช้เพิ่มข้อมูลได้ไม่เกิน 2 ครั้ง
                        //  if
                          //(($postCount < 1 && $request->namefile === "ใบสมัครงานสหกิจศึกษา(สก03)") || !Auth::user()->id)
                          // ($postCount < 1)
                          // ($postCount < 1 && $request->filled('user_id'))
                          // (!$existingPost)
                          // ($postCount < 1 && $user->Status_registers == "ไม่ผ่าน")
                       //   {
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
                                  $file->move(\public_path("/file"),$imageName);


                                  $post =new registers([
                                    "user_id" => $request->user_id,
                                       "namefile" => $request->namefile,
                                      "filess" =>$imageName,
                                      "annotation" => "-",
                                      "Status_registers" => "รอตรวจสอบ",
                                  ]);
                              //   $post->annotation ="-";
                              //   $post->Status_registers ="รอตรวจสอบ";
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
                              //             "Status_registers" => "รอตรวจสอบ",
                              //         ]);

                              //         $post->user_id = Auth::user()->id;
                              //         $post->save();


                                return redirect('/studenthome/register')->with('success5', 'เพิ่มข้อมูลสำเร็จ.');
                          }
public function edit3register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit3register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }

 public function edit9register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit9register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }


 public function edit4register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit4register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }
 public function edit5register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit5register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }
 public function edit6register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit6register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }
 public function edit7register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit7register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }
 public function edit8register($id) {
    //ตรวจสอบข้อมูล

    // $establishments=establishment::find($id);
    $establishments=DB::table('registers')->find($id);
    //  dd($establishments);

     return view('student.Edit.edit8register',compact('establishments'));
     // return redirect("/welcome")->with('success', 'Company has been created successfully.');
 }
}
