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

        // return view('student.register',compact('registers','registers1'


        // ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
        return view('student.studenthome',compact('registers','registers1'


        ,'registers2','registers3','registers4','registers5','registers6','registers7','registers8','activity'));
    }

    public function personal()
    {
        return view('student.personal',["msg"=>"I am Editor role"]);
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
                    //->get();
                    ->paginate(5);


                    // return view('admin.user',compact('users'),["msg"=>"I am Admin role"]);
                return view('admin.user', ['users' => $users]);

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
                    ->where('em_name', 'LIKE', '%' . $keyword . '%')
                    //->get();
                    ->paginate(5);
                    $registers=DB::table('establishment')


                     ->join('category','establishment.id','category.category_id')
                     ->select('establishment.*','category.name')
                     ->paginate(5);
                     $registers1=DB::table('category')
                     ->paginate(5);

                     $searchTerm = $request->input('search');

        // ค้นหาผู้ใช้โดยใช้ Eloquent ORM
        $users = establishment::where('em_name', 'LIKE', "%{$searchTerm}%")
                     ->orWhere('em_name', 'LIKE', "%{$searchTerm}%")
                     ->get();


                return view('officer.establishmentuser1', compact('establishments','users'), ['establishments' => $establishments,'registers' => $registers,'registers1' => $registers1]);

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

                            $registers = registers::query()
                            ->join('users', 'registers.user_id', '=', 'users.id')
                            ->where(function ($query) use ($keyword) {
                                $query->where('registers.namefile', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('registers.term', 'LIKE', '%' . $keyword . '%')
                                      ->orWhere('registers.year', 'LIKE', '%' . $keyword . '%');
                            })
                            ->select('registers.*', 'users.fname', 'users.surname')
                            ->paginate(10);
                        return view('officer.register1',  ['registers' => $registers,]);
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
                                              ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                              ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                              ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
                                              ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
                                    })
                                    ->select('supervision.*', 'users.fname', 'users.surname')
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
                                            ->where(function ($query) use ($keyword) {
                                                $query->where('acceptance.namefile', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('acceptance.term', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('acceptance.year', 'LIKE', '%' . $keyword . '%');
                                            })
                                            ->select('acceptance.*', 'users.fname', 'users.surname')
                                            ->paginate(10);

                                        return view('officer.acceptancedocument1',  ['acceptances' => $acceptances,]);


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

                                                    $informdetails = informdetails::query()
                                            ->join('users', 'informdetails.user_id', '=', 'users.id')
                                            ->where(function ($query) use ($keyword) {
                                                $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('informdetails.term', 'LIKE', '%' . $keyword . '%')
                                                      ->orWhere('informdetails.year', 'LIKE', '%' . $keyword . '%');
                                            })
                                            ->select('informdetails.*', 'users.fname', 'users.surname')
                                            ->paginate(10);


                                                return view('officer.informdetails2',  ['informdetails' => $informdetails,]);
                                    }
                                    public function searches(Request $request){
                                        //dd($request);
                                                        $keyword = $request->input('keyword');
                                        //dd($request);
                                                        // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
                                                        $supervision = permission::query()
                                                            // ->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                            ->where(function($query) use ($keyword) {
                                                                $query->where('namefile', 'LIKE', '%' . $keyword . '%')
                                                                    //   ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                                                                      ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                                                            })
                                                            // ->join('users','informdetails.user_id','users.id')
                                                            //  ->select('informdetails.*','users.fname')
                                                           // ->get();
                                                            ->paginate(10);
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
                 $query->where('title', 'LIKE', '%' . $keyword . '%')
        // ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
        ->orWhere('year', 'LIKE', '%' . $keyword . '%');
                             })
//     ->join('users','schedules.user_id','users.id')
//  ->select('schedules.*','users.fname')
                                                                           // ->get();
    ->paginate(10);
   return view('officer.schedule',  ['schedules' => $schedules,]);
 }

 public function searchinformdetails0(Request $request){
    //dd($request);
    $keyword = $request->input('keyword');
                                            //dd($request);
            // สร้างคำสั่งคิวรีเพื่อค้นหาข้อมูล
            $informdetails = Informdetails::query()
            ->join('users', 'informdetails.user_id', '=', 'users.id')
            ->where(function ($query) use ($keyword) {
                $query->where('informdetails.namefile', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('informdetails.term', 'LIKE', '%' . $keyword . '%')
                      ->orWhere('informdetails.year', 'LIKE', '%' . $keyword . '%');
            })
            ->select('informdetails.*', 'users.fname', 'users.surname')
            ->paginate(10);

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
->join('users', 'events.student_name', '=', 'users.id')
->where(function ($query) use ($keyword) {
    $query->Where('events.term', 'LIKE', '%' . $keyword . '%')
          ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
          ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')

          ->orWhere('events.year', 'LIKE', '%' . $keyword . '%');
})
->select('events.*', 'users.fname', 'users.surname')
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
public function searchestimate1(Request $request){
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
          ->orWhere('users.fname', 'LIKE', '%' . $keyword . '%')
          ->orWhere('users.surname', 'LIKE', '%' . $keyword . '%')
          ->orWhere('supervision.term', 'LIKE', '%' . $keyword . '%')
          ->orWhere('supervision.year', 'LIKE', '%' . $keyword . '%');
})
->select('supervision.*', 'users.fname', 'users.surname')
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



    public function viewestablishmentuser($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
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

        $activity=DB::table('schedule')
        // ->join('users','registers.user_id','users.id')
        // ->select('registers.*','users.name')->where('user_id', auth()->id())
        ->paginate(5);
       ;
        return view('student.informdetails',compact('informdetails','informdetails1','informdetails2','informdetails3','activity'));
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
        $events=DB::table('events')
        // ->join('users','events.user_id','users.id')
        // ->select('events.*','users.fname')
        ->where('student_name', auth()->id())
        ->paginate(5);
        return view('student.calendar2confirm',compact('events'));
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
        return view('student.documents',["msg"=>"I am student role"]);
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
    $users = registers::select(DB::raw("COUNT(DISTINCT user_id) as count"), DB::raw("YEAR(created_at) as year_name"))
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->pluck('count', 'year_name');
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
       $labels = $users->keys();
        //$data = $users->values();
        $data = $users->values();

        return view('officer.officerhome',compact('users','users1'), compact('labels','data'),["msg"=>"I am Editor role"]);
    }

    public function user1()
    {
        return view('officer.user1',["msg"=>"I am Editor role"]);
    }

    public function establishmentuser1()
    {
        $establishments=DB::table('establishment')->paginate(5);
        $major=DB::table('major')->paginate(5);
        return view('officer.establishmentuser1',compact('establishments','major'),["msg"=>"I am Editor role"]);
    }







    public function viewestablishment($id) {
        //ตรวจสอบข้อมูล

        // $establishments=establishment::find($id);
        $establishments=DB::table('establishment')->find($id);
        //  dd($establishments);

         return view('officer.viewestablishmentuser1',compact('establishments'));
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

        $registers=DB::table('registers')

        ->join('users','registers.user_id','users.id')
        ->select('registers.*','users.fname','users.surname')
        ->paginate(10);
//dd($registers);
        return view('officer.register1',compact('registers'));
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
//หมวด
public function category()
{
    $major=DB::table('category')
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
        ->select('acceptance.*','users.fname','users.surname')
        ->paginate(5);
        return view('officer.acceptancedocument1',compact('acceptances'));
    }
    public function informdetails2()
    {
        $informdetails=DB::table('informdetails')
        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname','users.surname')
        ->paginate(5);
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
                        ->select('supervision.*','users.fname','users.surname')
        ->paginate(5);
        return view('officer.Evaluate',compact('supervision'));
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
         ->join('users','events.student_name','users.id')
         ->select('events.*','users.fname','users.surname')
        ->paginate(5);
    //     $users=DB::table('users')
    //   ->where('role',"student")->paginate(5);
        // $major=DB::table('users')->paginate(5);
        // $studentNameFromDatabase = $events; // ให้เปลี่ยนเป็นการดึงจากฐานข้อมูลตามการใช้งานของคุณ

        // // แปลง JSON string เป็น PHP array
        // $phpArrayFromDatabase = json_decode($studentNameFromDatabase);
        return view('teacher.supervision',compact('events'));
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
        $schedules=DB::table('schedule')
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
        //นิเทศงาน
        $users1 = Event::select(DB::raw("COUNT(DISTINCT id) as count"))
    ->get();
    $users2 = Event::select(DB::raw("COUNT(*) as count"))
    ->where('Status_events', 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ')
    ->get();
    $users3 = Event::select(DB::raw("COUNT(*) as count"))
    ->where('Status_events', 'รับทราบและยืนยันเวลานัดนิเทศแล้ว')
    ->get();
//เอกสารแจ้งรายละเอียด
    $users4 = informdetails::select(DB::raw("COUNT(DISTINCT informdetails_id) as count"))
    ->get();
    //เอกสารแจ้งรายละเอียด
    $users5 = report::select(DB::raw("COUNT(DISTINCT report_id) as count"))
    ->get();

 //ยื่นประสงค์
 $users6 = users::select(DB::raw("COUNT(*) as count"))
 ->where('status', 'รออนุมัติ')
 ->get();
 $users7 = users::select(DB::raw("COUNT(*) as count"))
 ->where('status', 'อนุมัติแล้ว')
 ->get();
 $users8 = users::select(DB::raw("COUNT(*) as count"))
 ->where('role', '0')
 ->get();
 $users9 = users::select(DB::raw("COUNT(*) as count"))
 ->where('status', 'ไม่อนุมัติ')
 ->get();
        return view('teacher.teacherhome',compact('users1','users2','users3','users4','users5','users6','users7','users8','users9'),["msg"=>"I am teacher role"]);
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
        // $users=DB::table('users')

        // -> where('role','student')
        // ->orWhere('role', '=', '0')
        // ->paginate(10);
        $informdetails=DB::table('informdetails')

        ->join('users','informdetails.user_id','users.id')
        ->select('informdetails.*','users.fname','users.surname')
        ->paginate(10);

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
        ->select('supervision.*','users.fname','users.surname')
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
        $supervision=DB::table('permission')
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


        ->paginate(5);
        //->get();
        #แสดงข้อมูลเฉพาะ
        // $users = DB::table('users')->where('role', 'student')->get();
        // $users=Users::get();
        return view('admin.user',compact('users'),["msg"=>"I am Admin role"]);

    }

    public function changeStatus(Request $request)
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
        return view('cooperative.cooperative',["msg"=>"I am Admin role"]);

    }

    public function cooperative1()
    {
        $major=DB::table('major')

        ->paginate(5);

        return view('cooperative.cooperative1',["msg"=>"I am Admin role"],compact('major'));

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
