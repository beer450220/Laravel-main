<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Register2Controller;
use App\Http\Controllers\informdetailsController;
use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('companies', CompanyCRUDController::class);
Route::get('/', function () {
    return view('welcome');
});


// Route::resource('auth.register1', registerController::class);
Route::get('/register1', [registerController::class,'index'])->name('register1');
Route::post('/register1/add', [registerController::class,'register2'])->name('register2');

Route::get('/login', [HomeController::class,'login01'])->name('login01');

Route::get('/establishment', [HomeController::class,'establishment'])->name('establishment');
Route::get("/establishment/edit/{id}",[HomeController::class,'establishmentedit01'])->name('establishmentedit01');
Route::get("/establishment/edit02/{id}",[HomeController::class,'establishmentedit02'])->name('establishmentedit02');

Route::get("/establishment/edit03/{category_id}",[HomeController::class,'establishmentedit03'])->name('establishmentedit03');

Route::get('/cooperative', [HomeController::class,'cooperative'])->name('cooperative');

Route::get('/cooperative1', [HomeController::class,'cooperative1'])->name('cooperative1');
Route::post("/addcooperative1",[registerController::class,'addcooperative1'])->name('addcooperative1');


Route::get('/cooperative2', [HomeController::class,'cooperative2'])->name('cooperative2');
Route::get('/searchcooperative2',[HomeController::class,'searchcooperative2'])->name('searchcooperative2');


Route::get('/search1',[HomeController::class,'search1'])->name('search1');

Route::get('/test4', [HomeController::class,'changeStatus1'])->name('changeStatus1') ;
Route::POST("/test5",[HomeController::class,'changeStatus2'])->name('changeStatus2');

Route::get('/test6', [HomeController::class,'test6'])->name('test6') ;

// Route::resource('register1', registerController::class);
// {
//     return view('auth.Register1');
// };

// Auth::routes();
// // User Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/studenthome",[HomeController::class,'userHome'])->name('student.studenthome');
// });
/** set active sidebar */
// function set_active($route) {
//     if (is_array($route)) {
//         return in_array(Request::path(), $route) ? 'active' : '';
//     }
//     return Request::path() == $route ? 'active' : '';
// }

Auth::routes();
// student Route
Route::middleware(['auth','user-role:student'])->group(function()
{
    //ข้อมูลส่วนตัว
    Route::get("/studenthome",[HomeController::class,'studentHome'])->name('student.studenthome');
    Route::get("/studenthome/edituser1/{id}",[EditController::class,'edituser1'])->name('edituser1');

    Route::post("/studenthome/updateuser1/{id}",[EditController::class,'updateuser1'])->name('updateuser1');

    //ยืยยันตัวตน
    Route::get("/studenthome/updateuser2/{id}",[EditController::class,'updateuser2'])->name('updateuser2');

    Route::get("/personal/{id}",[HomeController::class,'personal'])->name('personal');
    //Route::get("/Studentinformation",[HomeController::class,'Student'])->name('Student');



    //สถานประกอบการ
    Route::get("/studenthome/establishmentuser",[HomeController::class,'establishmentuser'])->name('student.establishmentuser');

     //ดูสถานประกอบการ
       Route::get("/studenthome/establishmentuser4",[HomeController::class,'establishmentuser4'])->name('establishmentuser4');
       Route::get("/studenthome/establishmentuseredit/{id}",[EditController::class,'establishmentuseredit'])->name('establishmentuseredit');

       //ถูกใจ
       Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add_to_cart');
         Route::get('cart', [HomeController::class, 'cart'])->name('cart');
         Route::delete('remove-from-cart', [HomeController::class, 'remove'])->name('remove_from_cart');
         Route::patch('update-cart', [HomeController::class, 'update'])->name('update_cart');
         //ค้นหาข้อมูล
         Route::get('/search',[HomeController::class,'search'])->name('search');

         //ยืนยันสถานประกอบการ
         Route::get("/studenthome/establishmentstatus/{id}",[HomeController::class,'establishmentstatus'])->name('establishmentstatus');

         Route::get("/studenthome/editestablishmentstatus/{id}",[HomeController::class,'editestablishmentstatus'])->name('editestablishmentstatus');


         Route::post("/studenthome/establishmentstatusupdate/{id}",[EditController::class,'establishmentstatusupdate'])->name('establishmentstatusupdate');
            // Route::get("/studenthome/establishmentstatusedit/{id}",[EditController::class,'statusedit'])->name('statusedit');
            Route::get("/studenthome/test/{id}",[EditController::class,'test'])->name('test');
    // Route::get('/studenthome/view/{id}', [HomeController::class,'viewestablishmentuser'])->name('viewestablishmentuser');
    // Route::get("/studenthome/test",[HomeController::class,'test'])->name('test');
    // Route::post("/studenthome/test",[HomeController::class,'test2'])->name('test2');
    // Route::get("/studenthome/calendar",[HหomeController::class,'calendar'])->name('student.calendar');

    //ปฏิทินสหกิจ
    Route::get("/studenthome/Announcement",[HomeController::class,'Announcement'])->name('Announcement');

    //ลงทะเบียน
            //ประกาศตอบรับ
    //    Route::get("/studenthome/acceptancedocument",[HomeController::class,'acceptancedocument'])->name('student.acceptancedocument');


    Route::get("/studenthome/register",[HomeController::class,'registeruser'])->name('student.register');
    Route::get("/studenthome/edit9register/{id}",[Register2Controller::class,'edit9register'])->name('edit9register');
Route::post("/studenthome/update/{id}",[EditController::class,'updateregisteruser'])->name('updateregisteruser');
    // แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)
    Route::get("/studenthome/addregister",[AddController::class,'addregister'])->name('addregister');
    Route::post("/studenthome/addregisteruser",[AddController::class,'addregisteruser'])->name('addregisteruser');
    // Route::get("/studenthome/edit2register/{id}",[EditController::class,'edit2register'])->name('edit2register');


    // ใบสมัครงานสหกิจศึกษา(สก03)
    Route::get("/studenthome/addregister2",[Register2Controller::class,'addregister2'])->name('addregister2');
    Route::post("/studenthome/addregisteruser2",[Register2Controller::class,'addregisteruser2'])->name('addregisteruser2');
    // Route::get("/studenthome/edit3register/{id}",[Register2Controller::class,'edit3register'])->name('edit2register');
    // Route::post("/studenthome/update/{id}",[EditController::class,'updateregisteruser'])->name('updateregisteruser');

     // แบบคำรองขอหนังสือขอควำมอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)
     Route::get("/studenthome/addregister3",[Register2Controller::class,'addregister3'])->name('addregister3');
     Route::post("/studenthome/addregisteruser3",[Register2Controller::class,'addregisteruser3'])->name('addregisteruser3');
    //  Route::get("/studenthome/edit4register/{id}",[Register2Controller::class,'edit4register'])->name('edit2register');

      // บัตรชาชน
      Route::get("/studenthome/addregister4",[Register2Controller::class,'addregister4'])->name('addregister4');
      Route::post("/studenthome/addregisteruser4",[Register2Controller::class,'addregisteruser4'])->name('addregisteruser4');
    //   Route::get("/studenthome/edit5register/{id}",[Register2Controller::class,'edit5register'])->name('edit2register');

      // บัตรนักศึกษา
      Route::get("/studenthome/addregister5",[Register2Controller::class,'addregister5'])->name('addregister5');
      Route::post("/studenthome/addregisteruser5",[Register2Controller::class,'addregisteruser5'])->name('addregisteruser5');
    //   Route::get("/studenthome/edit6register/{id}",[Register2Controller::class,'edit6register'])->name('edit2register');

        // ผลการเรียน
      Route::get("/studenthome/addregister6",[Register2Controller::class,'addregister6'])->name('addregister6');
      Route::post("/studenthome/addregisteruser6",[Register2Controller::class,'addregisteruser6'])->name('addregisteruser6');
    //   Route::get("/studenthome/edit7register/{id}",[Register2Controller::class,'edit7register'])->name('edit2register');

       // ประวัติส่วนตัว(resume)
       Route::get("/studenthome/addregister7",[Register2Controller::class,'addregister7'])->name('addregister7');
       Route::post("/studenthome/addregisteruser7",[Register2Controller::class,'addregisteruser7'])->name('addregisteruser7');
    //    Route::get("/studenthome/edit8register/{id}",[Register2Controller::class,'edit8register'])->name('edit2register');

    // Route::get("/studenthome/edit/{id}",[EditController::class,'editregisteruser'])->name('editregisteruser');
    // Route::post("/studenthome/update/{id}",[EditController::class,'updateregisteruser'])->name('updateregisteruser');
    Route::get('/studenthome/delete/{id}', [EditController::class,'delregister'])->name('delregister');


    Route::post("/studenthome/register",[AddController::class,'sregister2'])->name('sregister2');

    Route::get("/studenthome/addstudent",[AddController::class,'addstudent'])->name('addstudent');
    Route::post("/studenthome/addstudent1",[AddController::class,'addstudent1'])->name('addstudent1');



    Route::post('/register1/add', [AddController::class,'register2'])->name('register2');
    Route::get("/studenthome/timeline",[HomeController::class,'timeline'])->name('student.timeline');

    Route::get("/studenthome/documents",[HomeController::class,'documents'])->name('student.documents');
    Route::get("/studenthome/documents1",[HomeController::class,'documents3'])->name('documents3');



    //เอกสารแจ้งรายละเอียดการปฎิบัติงาน
    Route::get("/studenthome/informdetails",[HomeController::class,'informdetails'])->name('student.informdetails');
    Route::get("/studenthome/editinformdetails0/{informdetails_id}",[EditController::class,'editinformdetails0'])->name('editinformdetails0');
    //แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)
    Route::get("/studenthome/addinformdetail",[HomeController::class,'addinformdetail'])->name('addinformdetail');
    Route::post("/studenthome/add",[AddController::class,'addinformdetails'])->name('addinformdetails');
    // Route::get("/studenthome/editinformdetails/{informdetails_id}",[EditController::class,'editinformdetails'])->name('editinformdetails');

    Route::post("/studenthome/updateinformdetails/{informdetails_id}",[EditController::class,'updateinformdetails'])->name('updateinformdetails');
    Route::get('/studenthome/deleteinformdetails/{informdetails_id}', [EditController::class,'delinformdetails'])->name('delinformdetails');

    //แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)
    Route::get("/studenthome/addinformdetail1",[informdetailsController::class,'addinformdetail1'])->name('addinformdetail1');
    Route::post("/studenthome/addinformdetailuser1",[informdetailsController::class,'addinformdetailuser1'])->name('addinformdetailuser1');
    // Route::get("/studenthome/editinformdetails1/{informdetails_id}",[informdetailsController::class,'editinformdetails1'])->name('editinformdetails1');

     //แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)
     Route::get("/studenthome/addinformdetail2",[informdetailsController::class,'addinformdetail2'])->name('addinformdetail2');
     Route::post("/studenthome/addinformdetailuser2",[informdetailsController::class,'addinformdetailuser2'])->name('addinformdetailuser2');
    //  Route::get("/studenthome/editinformdetails2/{informdetails_id}",[informdetailsController::class,'editinformdetails2'])->name('editinformdetails2');

    // Route::get("/studenthome/record",[HomeController::class,'record'])->name('student.record');

    //รายงานผลการปฏิบัติงาน
    Route::get("/studenthome/report",[HomeController::class,'report'])->name('student.report');
    Route::get("/studenthome/editreport6/{report_id}",[EditController::class,'editreport'])->name('editreport');
    //รายงานโครงการ
    Route::get("/studenthome/addreport2",[AddController::class,'addreport2'])->name('addreport2');
    Route::post("/studenthome/addreport",[AddController::class,'addreport'])->name('addreport');
    Route::get("/studenthome/editreport/{report_id}",[EditController::class,'editreport'])->name('editreport');
    Route::post("/studenthome/updatereport/{report_id}",[EditController::class,'updatereport'])->name('updatereport');
    // Route::get('/studenthome/deletereport/{report_id}', [EditController::class,'delreport'])->name('delreport');

   // PowerPoint การนำเสนอ
    Route::get("/studenthome/addreport3",[reportController::class,'addreport3'])->name('addreport3');
    Route::post("/studenthome/addreportuser3",[reportController::class,'addreportuser3'])->name('addreportuser3');
    Route::get("/studenthome/editreport3/{report_id}",[reportController::class,'editreport3'])->name('editreport3');

 // Onepage ของโครงการ (โปสเตอร์)
 Route::get("/studenthome/addreport4",[reportController::class,'addreport4'])->name('addreport4');
 Route::post("/studenthome/addreportuser4",[reportController::class,'addreportuser4'])->name('addreportuser4');
 Route::get("/studenthome/editreport4/{report_id}",[reportController::class,'editreport4'])->name('editreport4');

 // รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)
 Route::get("/studenthome/addreport5",[reportController::class,'addreport5'])->name('addreport5');
 Route::post("/studenthome/addreportuser5",[reportController::class,'addreportuser5'])->name('addreportuser5');
 Route::get("/studenthome/editreport5/{report_id}",[reportController::class,'editreport5'])->name('editreport5');


    Route::get("/studenthome/listofteachers",[HomeController::class,'listofteachers'])->name('student.listofteachers');

    Route::get("/studenthome/calendar2",[HomeController::class,'calendar2'])->name('student.calendar2');

    //นิเทศงาน
    Route::get("/studenthome/calendar2confirm",[HomeController::class,'calendar2confirm'])->name('calendar2confirm');
    Route::get("/studenthome/calendar2confirmedit/{id}",[EditController::class,'calendar2confirmedit'])->name('calendar2confirmedit');

    Route::post("/studenthome/calendar2confirmupdate/{id}",[EditController::class,'calendar2confirmupdate'])->name('calendar2confirmupdate');

    Route::get("/studenthome/calendar2confirmview/{id}",[EditController::class,'calendar2confirmview'])->name('calendar2confirmview');
    Route::post("/studenthome/updatecalendar2confirm/{id}",[EditController::class,'updatecalendar2confirm'])->name('updatecalendar2confirm');
    Route::get("/studenthome/updateconfirm/{id}",[EditController::class,'updateconfirm'])->name('updateconfirm');

    Route::post("/studenthome/calendar2add/{id}",[AddController::class,'calendar2add'])->name('calendar2add');


});


// officer Route
Route::middleware(['auth','user-role:officer'])->group(function()
{
    Route::get("/officer/home",[HomeController::class,'officerHome'])->name('officer.officerhome');
    Route::get("/officer/user1",[HomeController::class,'user1'])->name('officer.user1');

    //สถานประกอบการ
//ค้นหา
    Route::get('/officer/search',[HomeController::class,'searchestablishment'])->name('searchestablishment');
    Route::get("/officer/establishmentuser1",[HomeController::class,'establishmentuser1'])->name('officer.establishmentuser1');
//เพิ่ม
    Route::get("/officer/addestablishmentuser1",[addController::class,'addestablishmentuser1'])->name('addestablishmentuser1');
    Route::post('/officer/establishmentuser1', [AddController::class,'addestablishment'])->name('addestablishment');

    Route::get('/officer/establishmentuser1/{id}', [EditController::class,'editestablishment'])->name('editestablishment');
 // Route::post('/officer/update/{id}', [EditController::class,'updateestablishment'])->name('updateestablishment');



    Route::post('/officer/update/{id}', [EditController::class,'updateestablishment'])->name('updateestablishment');
    Route::get('/officer/delete/{id}', [EditController::class,'delestablishment'])->name('delestablishment');
    Route::delete('/deleteimage/{id}',[EditController::class,'deleteimage'])->name('deleteimage');
    Route::get('/officer/view/{id}', [HomeController::class,'viewestablishment'])->name('viewestablishment');


    //หลักสูตรสาขา
    Route::get("/officer/major",[HomeController::class,'major'])->name('major');
    Route::get("/officer/addmajor",[addController::class,'addmajor'])->name('addmajor');
    Route::post("/officer/addmajor1",[addController::class,'addmajor1'])->name('addmajor1');
    Route::get("/officer/editmajor/{major_id}",[EditController::class,'editmajor'])->name('editmajor');
    Route::post("/officer/updatmajor/{major_id}",[EditController::class,'updatmajor'])->name('updatmajor');
    Route::get('/officer/deletmajor/{major_id}', [EditController::class,'delmajor'])->name('delmajor');


     //หมวดหมู่
     Route::get("/officer/category",[HomeController::class,'category'])->name('category');
     Route::get("/officer/addcategory",[addController::class,'addcategory'])->name('addcategory');
     Route::post("/officer/addcategory1",[addController::class,'addcategory1'])->name('addcategory1');
     Route::get("/officer/editcategory/{category_id}",[EditController::class,'editcategory'])->name('editcategory');
     Route::post("/officer/updatcategory/{category_id}",[EditController::class,'updatcategory'])->name('updatcategory');
     Route::get('/officer/deletcategory/{category_id}', [EditController::class,'delcategory'])->name('delcategory');



//ลงทะเบียน
//ค้นหา
    Route::get('/officer/search1',[HomeController::class,'searchregister1'])->name('searchregister1');
    Route::get("/officer/register1",[HomeController::class,'register1'])->name('officer.register1');
    Route::get("/officer/editregister1/{id}",[EditController::class,'editregister1'])->name('editregister1');
    Route::post("/officer/updateregister1/{id}",[EditController::class,'updateregister1'])->name('updateregister1');

    Route::get("/officer/confirm2/{id}",[EditController::class,'confirm2'])->name('confirm2');


    // Route::get("/officer/timeline2",[HomeController::class,'timeline2']);
    // Route::get("/officer/viwetimeline2/{timeline_id}",[EditController::class,'viwetimeline2'])->name('viwetimeline2');

    //ตอบรับนักศึกษา
    //ค้นหา
    Route::get('/officer/search3',[HomeController::class,'searchacceptancedocument'])->name('searchacceptancedocument');
    Route::get("/officer/acceptancedocument1",[HomeController::class,'acceptancedocument1']);
    Route::get("/officer/addacceptancedocument1",[addController::class,'addacceptancedocument1'])->name('addacceptancedocument1');
    Route::post("/officer/addacceptancedocument1",[addController::class,'addacceptancedocument'])->name('addacceptancedocument');
    Route::get("/officer/editacceptancedocument1/{acceptance_id}",[EditController::class,'editacceptance'])->name('editacceptance');
    Route::post("/officer/updateacceptance/{acceptance_id}",[EditController::class,'updateacceptance'])->name('updateacceptance');
    Route::get('/officer/deletacceptance/{acceptance_id}', [EditController::class,'delacceptance'])->name('delacceptance');

//เอกสารแจ้งรายละเอียดการปฎิบัติงาน
//ค้นหา
    Route::get('/officer/search4',[HomeController::class,'searchinformdetails'])->name('searchinformdetails');
    Route::get("/officer/informdetails2",[HomeController::class,'informdetails2']);
    Route::get("/officer/editinformdetails2/{informdetails_id}",[EditController::class,'editinformdetails2'])->name('editinformdetails2');
    Route::post("/officer/updateinformdetails2/{informdetails_id}",[EditController::class,'updateinformdetails2'])->name('updateinformdetails2');

    Route::get("/officer/confirm3/{id}",[EditController::class,'confirm3'])->name('confirm3');
    // Route::get("/officer/record2",[HomeController::class,'record2']);

//เอกสารฝึกประสบการณ์
//ค้นหา
Route::get('/officer/search6',[HomeController::class,'searchreport2'])->name('searchreport2');
    Route::get("/officer/experiencereport2",[HomeController::class,'experiencereport2']);
    Route::get("/teacher/editexperiencereport2/{report_id}",[EditController::class,'editexperiencereport2'])->name('editexperiencereport2');
    Route::post("/teacher/updateexperiencereport2/{report_id}",[EditController::class,'updateexperiencereport2'])->name('updateexperiencereport2');


    // Route::get("/officer/assessmentreport2",[HomeController::class,'assessmentreport2']);
    // Route::get("/officer/advisor2",[HomeController::class,'advisor2']);
    // Route::get("/officer/practice",[HomeController::class,'practice']);
    // Route::get("/officer/documents2",[HomeController::class,'documents2']);

//เอกสารประเมินผล
//ค้นหา
Route::get('/officer/search2',[HomeController::class,'searchEvaluate'])->name('searchEvaluate');
    Route::get("/officer/Evaluate",[HomeController::class,'Evaluate']);
    Route::get("/officer/addestimate2",[addController::class,'addestimate2'])->name('addestimate2');
    Route::post("/officer/addestimate",[addController::class,'addestimate3'])->name('addestimate3');
    // Route::get("/teacher/editestimate1/{supervision_id}",[EditController::class,'editestimate1'])->name('editestimate1');
    // Route::post("/studenthome/updateestimate1/{supervision_id}",[EditController::class,'updateestimate1'])->name('updateestimate1');

    Route::get("/officer/editEvaluate/{supervision_id}",[EditController::class,'editEvaluate'])->name('editEvaluate');
    Route::post("/officer/updateEvaluate/{supervision_id}",[EditController::class,'updateEvaluate'])->name('updateEvaluate');



    // Route::get("/officer/Supervise",[HomeController::class,'Supervise']);
    // Route::get("/officer/addSupervise",[addController::class,'addSupervise'])->name('addSupervise');
    // Route::post("/officer/addSupervise1",[addController::class,'addSupervise1'])->name('addSupervise1');
    // Route::get("/officer/editSupervise/{advisor_id}",[EditController::class,'editSupervise'])->name('editSupervise');
    // Route::post("/officer/updatSupervise/{advisor_id}",[EditController::class,'updateSupervise'])->name('updatSupervise');
    // Route::get('/officer/deletSupervise/{advisor_id}', [EditController::class,'delSupervise'])->name('delSupervise');




    Route::get("/officer/supervision",[HomeController::class,'supervision']);
    Route::get('/officer/pdf', [FileController::class, 'createPDF'])->name('createPDF');
    Route::get('/officer/Excel', [FileController::class, 'export'])->name('export');

    // Route::get("/officer/addsupervision",[addController::class,'addsupervision'])->name('addsupervision');
    // Route::post("/officer/addsupervision1",[addController::class,'addsupervision1'])->name('addsupervision1');
    // Route::get("/officer/editsupervision1/{id}",[EditController::class,'editsupervision1'])->name('editsupervision1');
    // Route::post("/officer/updatesupervision1/{id}",[EditController::class,'updatesupervision1'])->name('updatesupervision1');

    // Route::get('/officer/deletacceptance/{acceptance_id}', [EditController::class,'delacceptance'])->name('delacceptance');

    // Route::get("/officer/calendar5",[HomeController::class,'calendar5']);
    // Route::get("/officer/calendar6",[HomeController::class,'calendar6']);



//กำหนดการปฏิทินสหกิจ
//ค้นหา
Route::get('/officer/search7',[HomeController::class,'searchschedule'])->name('searchschedule');
    Route::get("/officer/schedule",[HomeController::class,'schedule']);
    Route::get("/officer/addschedule",[addController::class,'addschedule'])->name('addschedule');
    Route::post("/officer/addschedule1",[addController::class,'addschedule1'])->name('addschedule1');
    Route::get("/officer/editschedule1/{schedule_id}",[EditController::class,'editschedule1'])->name('editschedule1');
    Route::post("/officer/updateschedule1/{schedule_id}",[EditController::class,'updateschedule1'])->name('updateschedule1');
    Route::get('/officer/deleschedule1/{schedule_id}', [EditController::class,'delschedule1'])->name('delschedule1');

    // Route::get('/officer/viewschedule/{schedule_id}', [HomeController::class,'viewschedule'])->name('viewschedule');

    // Route::get("/officer/Evaluationdocuments",[HomeController::class,'Evaluationdocuments']);

    // Route::get("/officer/addEvaluationdocuments",[addController::class,'addEvaluationdocuments'])->name('addEvaluationdocuments');
    // Route::post("/officer/addEvaluationdocument",[addController::class,'addEvaluationdocument'])->name('addEvaluationdocument');
    // Route::get("/officer/editEvaluationdocument/{Evaluationdocument_id}",[EditController::class,'editEvaluationdocument'])->name('editEvaluationdocument');
    // Route::post("/officer/updateEvaluationdocument/{Evaluationdocument_id}",[EditController::class,'updateEvaluationdocument'])->name('updateEvaluationdocument');

    // Route::get('/officer/deleEvaluationdocument/{Evaluationdocument_id}', [EditController::class,'deleEvaluationdocument'])->name('deleEvaluationdocument');


//เอกสารขออนุญาตนิเทศงาน(สก10)
//ค้นหา
Route::get('/officer/search5',[HomeController::class,'searches'])->name('searches');
Route::get("/officer/es1",[HomeController::class,'es2'])->name('es2');
// Route::get("/teacher/addes1",[addController::class,'addes1'])->name('addes1');
// Route::post("/teacher/addes2",[addController::class,'addes2'])->name('addes2');
Route::get("/officer/edites1/{id}",[EditController::class,'edites2'])->name('edites2');
Route::post("officer/updatees2/{id}",[EditController::class,'updatees2'])->name('updatees2');
Route::get('/teacher/deletes1/{id}', [EditController::class,'deles1'])->name('deles1');

Route::get("/officer/confirm4/{id}",[EditController::class,'confirm4'])->name('confirm4');
});


// teacher Route
Route::middleware(['auth','user-role:teacher'])->group(function()
{
    Route::get("/teacher/home",[HomeController::class,'teacherHome'])->name('teacher.teacherhome');


    //ยื่นประสงค์ฝึกประสบการณ์
    //ค้นหา
Route::get('/teacher/search8',[HomeController::class,'searchrequest'])->name('searchrequest');
    Route::get("/teacher/request",[HomeController::class,'request'])->name('request');
    // Route::get("/teacher/addteacher1",[addController::class,'addteacher1'])->name('addteacher1');
    // Route::post("/teacher/addteacher",[addController::class,'addteacher'])->name('addteacher');
    Route::get("/teacher/view1/{id}",[EditController::class,'view1'])->name('view1');
    Route::get("/teacher/confirm/{id}",[EditController::class,'confirm'])->name('confirm');
    Route::post("/teacher/confirm1/{id}",[EditController::class,'confirm1'])->name('confirm1');

    Route::get("/teacher/editconfirm1/{id}",[EditController::class,'editconfirm1'])->name('editconfirm1');
    // Route::post("/teacher/updateteacher1/{id}",[EditController::class,'updateteacher1'])->name('updateteacher1');
    // Route::get('/teacher/deletteacher/{id}', [EditController::class,'delteacher'])->name('delteacher');

    // Route::get("/teacher/edituser2/{id}",[EditController::class,'edituser2'])->name('edituser2');

    // Route::post("/teacher/updateuser4/{id}",[EditController::class,'updateuser4'])->name('updateuser4');

    //ยืยยันตัวตน
  // Route::get("/teacher/updateuser2/{id}",[EditController::class,'updateuser3'])->name('updateuser3');

   //นิเทศงาน
  //  Route::get("/teacher/calendar5confirm",[HomeController::class,'calendar5confirm'])->name('calendar5confirm');

 // แบบบันทึกการนิเทศงานสหกิจศึกษา(สก12)

//  Route::get("/teacher/addSuperviseteacher",[AddController::class,'addSuperviseteacher'])->name('addSuperviseteacher');
//  Route::post("/teacher/addSuperviseteacheruser",[AddController::class,'addSuperviseteacheruser'])->name('addSuperviseteacheruser');
//  Route::get("/teacher/edit2Superviseteacheruser/{id}",[EditController::class,'edit2Superviseteacheruser'])->name('edit2Superviseteacheruser');
//  Route::post("/teacher/update/{id}",[EditController::class,'updateSuperviseteacheruser'])->name('updateSuperviseteacheruser');

 // แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก15)
//  Route::get("/teacher/addSuperviseteacher1",[AddController::class,'addSuperviseteacher1'])->name('addSuperviseteacher1');
//  Route::post("/teacher/addSuperviseteacheruser1",[AddController::class,'addSuperviseteacheruser1'])->name('addSuperviseteacheruser1');
//  Route::get("/teacher/edit2Superviseteacheruser1/{id}",[EditController::class,'edit2Superviseteacheruser1'])->name('edit2Superviseteacheruser1');
//  Route::post("/teacher/update1/{id}",[EditController::class,'updateSuperviseteacheruser1'])->name('updateSuperviseteacheruser1');


    // Route::get("/teacher/documents1",[HomeController::class,'documents1'])->name('teacher.documents1');

    // Route::get("/teacher/timeline1",[HomeController::class,'timeline1'])->name('teacher.documents1');
    // Route::get("/teacher/viwetimeline/{timeline_id}",[EditController::class,'viwetimeline'])->name('viwetimeline');
//ค้นหา
Route::get('/teacher/search',[HomeController::class,'searchinformdetails0'])->name('searchinformdetails0');
    Route::get("/teacher/informdetails1",[HomeController::class,'informdetails1'])->name('teacher.informdetails1');
    Route::get("/teacher/viewinformdetails1/{informdetails_id}",[EditController::class,'viewinformdetails1'])->name('viewinformdetails1');

    // Route::get("/teacher/record1",[HomeController::class,'record1'])->name('teacher.record1');
    // Route::get("/teacher/listofteachers1",[HomeController::class,'listofteachers1'])->name('teacher.listofteachers1');

//เอกสารประเมิน
//ค้นหา
Route::get('/teacher/search3',[HomeController::class,'searchestimate1'])->name('searchestimate1');
    Route::get("/teacher/estimate1",[HomeController::class,'estimate1'])->name('teacher.estimate1');
    Route::get("/teacher/addestimate1",[addController::class,'addestimate1'])->name('addestimate1');
    Route::post("/teacher/addestimate",[addController::class,'addestimate'])->name('addestimate');
    Route::get("/teacher/editestimate1/{supervision_id}",[EditController::class,'editestimate1'])->name('editestimate1');
    Route::post("/studenthome/updateestimate1/{supervision_id}",[EditController::class,'updateestimate1'])->name('updateestimate1');

//รายชื่ออาจารย์
    Route::get("/teacher/teacher01",[HomeController::class,'teacher01'])->name('teacher01');
    Route::get("/teacher/addteacher1",[addController::class,'addteacher1'])->name('addteacher1');
    Route::post("/teacher/addteacher",[addController::class,'addteacher'])->name('addteacher');
    Route::get("/teacher/editteacher1/{id}",[EditController::class,'editteacher1'])->name('editteacher1');
    Route::post("/teacher/updateteacher1/{id}",[EditController::class,'updateteacher1'])->name('updateteacher1');
    Route::get('/teacher/deletteacher/{id}', [EditController::class,'delteacher'])->name('delteacher');



    Route::get("/teacher/calendar2",[HomeController::class,'calendar3'])->name('calendar3');

    Route::get("/teacher/calendar",[HomeController::class,'calendar4'])->name('calendar4');

    Route::get("/teacher/register",[HomeController::class,'registeruser1'])->name('registeruser1');
    Route::get("/teacher/viewregisters/{id}",[EditController::class,'viewregisters'])->name('viewregisters');

    Route::get("/teacher/advisor1",[HomeController::class,'advisor1'])->name('teacher.advisor1');
    //ค้นหา
    Route::get('/teacher/search4',[HomeController::class,'searchreportresults'])->name('searchreportresults');
    Route::get("/teacher/reportresults1",[HomeController::class,'reportresults1'])->name('teacher.reportresults1');


//นิเทศงาน
//ค้นหา
Route::get('/teacher/search1',[HomeController::class,'searchsupervision0'])->name('searchsupervision0');
    Route::get("/teacher/supervision",[HomeController::class,'supervision1']);
    // Route::get('/officer/pdf', [FileController::class, 'createPDF'])->name('createPDF');
     //Route::get('/teacher/Excel', [FileController::class, 'export1'])->name('export1');
    //  Route::get('/teacher/Excel', [FileController::class, 'exportUsers'])->name(' exportUsers');

    Route::get("/teacher/addsupervision",[addController::class,'addsupervision01'])->name('addsupervision01');
    Route::post("/teacher/addsupervision02",[addController::class,'addsupervision02'])->name('addsupervision02');
    Route::get("/teacher/editsupervision02/{id}",[EditController::class,'editsupervision02'])->name('editsupervision02');
    Route::post("/teacher/updatesupervision02/{id}",[EditController::class,'updatesupervision02'])->name('updatesupervision02');
    Route::get('/teacher/deletsupervision/{id}', [EditController::class,'deletsupervision'])->name('deletsupervision');


//เอกสารขออนุญาตนิเทศงาน(สก10)
//ค้นหา
Route::get('/teacher/search2',[HomeController::class,'searches1'])->name('searches1');
Route::get("/teacher/es1",[HomeController::class,'es1'])->name('es1');
Route::get("/teacher/addes1",[addController::class,'addes1'])->name('addes1');
Route::post("/teacher/addes2",[addController::class,'addes2'])->name('addes2');
Route::get("/teacher/edites1/{id}",[EditController::class,'edites1'])->name('edites1');
Route::post("teacher/updatees1/{id}",[EditController::class,'updatees1'])->name('updatees1');
Route::get('/teacher/deletes1/{id}', [EditController::class,'deles1'])->name('deles1');



});




// Admin Route
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/adminhome",[HomeController::class,'adminHome' ])->name('admin.adminhome');
    Route::get('/searchadmin',[HomeController::class,'searchadmin'])->name('searchadmin');
    Route::get("/user",[HomeController::class,'user'])->name('admin.user');
    Route::get("/user/adduser",[registerController::class,'index2'])->name('adduser2');
    Route::post("/user/add",[registerController::class,'adduser'])->name('adduser');

    Route::get("/user/edituser/{id}",[HomeController::class,'edituser'])->name('admin.edituser');
    Route::post("/user/updateuser/{id}",[EditController::class,'updateuser'])->name('updateuser');

    Route::get("/user1",[HomeController::class,'changeStatus'])->name('changeStatus');
   // Route::get('/status/update', [HomeController::class, 'updateStatus'])->name('update.status');
});

// test1 Route
Route::middleware(['auth','user-role:0'])->group(function()
{
    Route::get("/testhome",[HomeController::class,'testhome' ])->name('test1.home');
    // Route::get('/searchadmin',[HomeController::class,'searchadmin'])->name('searchadmin');
    // Route::get("/user",[HomeController::class,'user'])->name('admin.user');
    // Route::get("/user/adduser",[registerController::class,'index2'])->name('adduser2');
    // Route::post("/user/add",[registerController::class,'adduser'])->name('adduser');

    // Route::get("/user/edituser/{id}",[HomeController::class,'edituser'])->name('admin.edituser');
    // Route::post("/user/updateuser/{id}",[EditController::class,'updateuser'])->name('updateuser');

    // Route::get("/user1",[HomeController::class,'changeStatus'])->name('changeStatus');
   // Route::get('/status/update', [HomeController::class, 'updateStatus'])->name('update.status');
});


Route::controller(BasicController::class)->group(function () {
    Route::get('/tabelist', 'tabelist_fn');
    Route::get('/addlist', 'addlist_fn');
    Route::post('/addlist', 'postlist');
    Route::get('/deltel/{id}','deltel_fn');

    // Route::get('/edit/{id}','edit_fn');
    Route::post('/post_edit', 'post_edit_fn');

});
