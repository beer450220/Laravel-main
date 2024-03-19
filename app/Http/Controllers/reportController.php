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
class reportController extends Controller
{
    public function addreport3()
    {

        return view('student.add.addreport3');
    }

    public function addreport4()
    {

        return view('student.add.addreport4');
    }
    public function addreport5()
    {

        return view('student.add.addreport5');
    }
    public function addreportuser3(Request $request) {
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

        $post->Status_report ="รอตรวจสอบ";
        $post->annotation ="-";
      //   $post->establishment ="-";
        $post->user_id = Auth::user()->id;
        $post->save();
        //  $data->save();
      }
        }
           return redirect('/studenthome/report')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
        }

        public function addreportuser4(Request $request) {
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

            $post->Status_report ="รอตรวจสอบ";
            $post->annotation ="-";
          //   $post->establishment ="-";
            $post->user_id = Auth::user()->id;
            $post->save();
            //  $data->save();
          }
            }
               return redirect('/studenthome/report')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
            }

            public function addreportuser5(Request $request) {
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

                $post->Status_report ="รอตรวจสอบ";
                $post->annotation ="-";
              //   $post->establishment ="-";
                $post->user_id = Auth::user()->id;
                $post->save();
                //  $data->save();
              }
                }
                   return redirect('/studenthome/report')->with('success', 'เพิ่มข้อมูลสำเร็จ.');
                }

        public function editreport3($report_id) {
            //ตรวจสอบข้อมูล
            //dd($report_id);
            $report=report::find($report_id);
            //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
            //dd($request->informdetails_id);

             return view('student.Edit.editreport3',compact('report'));

         }

         public function editreport4($report_id) {
            //ตรวจสอบข้อมูล
            //dd($report_id);
            $report=report::find($report_id);
            //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
            //dd($request->informdetails_id);

             return view('student.Edit.editreport4',compact('report'));

         }

         public function editreport5($report_id) {
            //ตรวจสอบข้อมูล
            //dd($report_id);
            $report=report::find($report_id);
            //$informdetails=DB::table('informdetails')->where('idinformdetails', $idinformdetails)->find($idinformdetails);
            //dd($request->informdetails_id);

             return view('student.Edit.editreport5',compact('report'));

         }
}

