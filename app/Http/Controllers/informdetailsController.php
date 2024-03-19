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
class informdetailsController extends Controller
{
    public function addinformdetail1()
    {

        return view('student.add.addinformdetails1',["msg"=>"I am student role"]);
    }

    public function addinformdetail2()
    {

        return view('student.add.addinformdetails2',["msg"=>"I am student role"]);
    }
    public function addinformdetailuser1(Request $request) {
        //ตรวจสอบข้อมูล
        //  dd($request);
        $request->validate([
          // 'filess' => 'required|mimes:pdf',
          // 'user_id' => 'required|unique:user_id',
        //   'files' => 'mimes:jpeg,jpg,png',

          'namefile' => 'required',
        ],[
            // 'name.required' => "กรุณา",
            'namefile.required' => "กรุณาชื่อไฟล์",
          ]
      );
        if($request->hasFile("files")){
          $file=$request->file("files");
           $imageName=time().'_'.$file->getClientOriginalName();
          $file->move(\public_path("/fileinformdetails"),$imageName);
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
            //  'establishment' => $request->establishment,
              "files" =>$imageName,
              "year" => $request->year,
              "term" => $request->term,

          ]);// dd($request);dd($request->Status);

        $post->Status_informdetails ="รอตรวจสอบ";
        $post->annotation ="-";
        // $post->establishment ="-";
        $post->user_id = Auth::user()->id;
        $post->save();
        //  $data->save();
      }



           return redirect('/studenthome/informdetails')->with('success', 'เพิ่มข้อมูลสำเร็จ.');




    }
  }
  public function addinformdetailuser2(Request $request) {
    //ตรวจสอบข้อมูล
    //  dd($request);
    $request->validate([
      // 'filess' => 'required|mimes:pdf',
      // 'user_id' => 'required|unique:user_id',
    //   'files' => 'mimes:jpeg,jpg,png',

      'namefile' => 'required',
    ],[
        // 'name.required' => "กรุณา",
        'namefile.required' => "กรุณาชื่อไฟล์",
      ]
  );
    if($request->hasFile("files")){
      $file=$request->file("files");
       $imageName=time().'_'.$file->getClientOriginalName();
      $file->move(\public_path("/fileinformdetails"),$imageName);
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
        //  'establishment' => $request->establishment,
          "files" =>$imageName,
          "year" => $request->year,
          "term" => $request->term,

      ]);// dd($request);dd($request->Status);

    $post->Status_informdetails ="รอตรวจสอบ";
    $post->annotation ="-";
    // $post->establishment ="-";
    $post->user_id = Auth::user()->id;
    $post->save();
    //  $data->save();
  }



       return redirect('/studenthome/informdetails')->with('success', 'เพิ่มข้อมูลสำเร็จ.');




}
}
  public function editinformdetails1($informdetails_id ) {
    //ตรวจสอบข้อมูล
   // dd($request);
    $informdetails = informdetails::findOrFail($informdetails_id);

    //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
    //dd($request->informdetails_id);
   // $informdetails = informdetails::where('informdetails_id', $informdetails_id)->first();
    //$informdetails=DB::table('informdetails')->get($informdetails_id);

   // $einformdetails=DB::table('informdetails')->find($id);
     return view('student.Edit.editinformdetails1',compact('informdetails'));

 }
 public function editinformdetails2($informdetails_id ) {
    //ตรวจสอบข้อมูล
   // dd($request);
    $informdetails = informdetails::findOrFail($informdetails_id);


     return view('student.Edit.editinformdetails2',compact('informdetails'));

 }
}
