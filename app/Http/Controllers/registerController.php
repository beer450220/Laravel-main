<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\major;
use Illuminate\Support\Facades\DB;


class registerController extends Controller
{
    public function index() {
        $data['register1'] = User::orderBy('id', 'asc')->paginate(5);
        return view('auth.Register1');
    }
    // public function create() {
    //     return view('auth.Register1');
    // }

    public function register2(Request $request) {
       //ตรวจสอบข้อมูล
        // dd($request->username);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'

            //'password' => Hash::make($request->password),
        ]);

        $user = new user;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = "student";
        $user->save();
        return redirect('/')->with('success', 'สมัครสำเร็จ.');
        // return redirect("/welcome")->with('success', 'Company has been created successfully.');
    }
    public function index2() {
        $data['add'] = User::orderBy('id', 'asc')->paginate(5);
        $major=DB::table('major')

        ->paginate(5);
        $rolegroup=DB::table('rolegroup')

        ->paginate(5);

        return view('admin.adduser',compact('major','rolegroup'));
    }
    public function adduser3() {
        $data['add'] = User::orderBy('id', 'asc')->paginate(5);
        $major=DB::table('major')

        ->paginate(5);
        $rolegroup=DB::table('rolegroup')

        ->paginate(5);
        return view('teacher.adduser',compact('major','rolegroup'));
    }
    public function adduser(Request $request) {
        //ตรวจสอบข้อมูล
          //dd($request);
         $request->validate([
            'username' => 'required|unique:users',
            //  'password' => 'required'
            'password' => 'required|confirmed|min:8',
             //'password' => Hash::make($request->password),
             'images' => 'mimes:jpeg,jpg,png|max:1024',
            //  'username' => 'required',
            //  'password' => 'required'

             //'password' => Hash::make($request->password),
             ] ,[
                'username.unique' => "ผู้ใช้งานซ้ำ",
                'password.confirmed' => "รหัสผ่านไม่ตรงกัน",
                'password.min' => "รหัสผ่านมากว่า8ตัว",
                'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
                 'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
            ]
        );
        if($request->hasFile("images")){
            $file=$request->file("images");
             $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/Profile"),$imageName);


            $post =new Users([


                "images" =>$imageName,


            ]);
         }
         $user = new Users;
        //  $user->code_id = $request->code_id;
        //  $user->major_id = $request->major_id;


         $user->fname = $request->fname;
        //  $user->surname = $request->surname;
        //  $user->telephonenumber = $request->telephonenumber;
        //  $user->address = $request->address;
        //  $user->GPA = $request->GPA;
        //  $user->em_name= $request->em_name;

        //  $user->term = $request->term;
        //  $user->year = $request->year;
         $user->images = $request->	images;
        $user->username = $request->username;
        //  $user->email = $request->email;

        //  $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->role = $request->role;
        //  $user-> status = $request->status;
        //  $user-> annotation = $request->annotation;

         $user->save();
         return redirect('/user')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }
     public function add5(Request $request) {
        //ตรวจสอบข้อมูล
          //dd($request);
         $request->validate([
             'username' => 'required|unique:users',
            //   'email' => 'required',
            //  'username' => 'required',
            //  'password' => 'required'
            'images' => 'mimes:jpeg,jpg,png|max:1024',
             //'password' => Hash::make($request->password),
             ] ,[
                'username.unique' => "ผู้ใช้งานซ้ำ",
                'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
                'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',

            ]
        );
        if($request->hasFile("images")){
            $file=$request->file("images");
             $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/Profile"),$imageName);


            $post =new Users([


                "images" =>$imageName,
                "username" =>$request->username,
                "fname" =>$request->fname,
                "password" => Hash::make($request->password),
                "role" =>$request->role,
            ]);
         }


         $post->save();
         return redirect('/teacher/user')->with('success6', 'เพิ่มข้อมูลสำเร็จ.');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }

     public function addcooperative1(Request $request) {
        //ตรวจสอบข้อมูล
          //dd($request);
         $request->validate([
            //  'code_id' => 'required|unique:users',
            //   'email' => 'required',
             'username' => 'required|unique:users',
            //  'password' => 'required'
            'password' => 'required|confirmed|min:8',
             //'password' => Hash::make($request->password),
             'images' => 'mimes:jpeg,jpg,png|max:1024',
             ] ,[
                // 'code_id.unique' => "รหัสประจำตัวซ้ำ",
                'username.unique' => "รหัสนักศึกษาซ้ำ",
                'password.confirmed' => "รหัสผ่านไม่ตรงกัน",
                'password.min' => "รหัสผ่านมากว่า8ตัว",
                'images.mimes' => 'ไฟล์ต้องเป็นรูปภาพเท่านั้น',
                 'images.max' => 'ขนาดไฟล์ต้องไม่เกิน 1 MB',
            ]
        );
        if($request->hasFile("images")){
            $file=$request->file("images");
             $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/Profile"),$imageName);


            $post =new Users([



                "images" =>$imageName,
                "username" =>$request->username,
                "fname" =>$request->fname,
                "password" => Hash::make($request->password),
                "role" =>"student",

            ]);
         }


        //  $user->code_id = $request->code_id;
        //  $user->major_id = $request->major_id;
        // //  $user->establishment_id = "ยังไม่มีสถานประกอบการ";

        //  $user->fname = $request->fname;
        // //  $user->surname = $request->surname;
        // //  $user->telephonenumber = $request->telephonenumber;
        // //  $user->address = $request->address;
        // //  $user->GPA = $request->GPA;
        // //  $user->em_name= $request->em_name;

        // //  $user->term = $request->term;
        // //  $user->year = $request->year;
        //  $user->images = $request->	images;
        // $user->username = $request->username;
        // //  $user->email = $request->email;
        //  $user->password = Hash::make($request->password);
        //  $user->role = "student";
        //  $user->code_id = "0";
        //  $user-> status = "รออนุมัติ";
        //  $user-> annotation = "-";

         $post->save();
         return redirect('/login')->with('success', 'สมัครสำเร็จ');
         // return redirect("/welcome")->with('success', 'Company has been created successfully.');
     }


}
