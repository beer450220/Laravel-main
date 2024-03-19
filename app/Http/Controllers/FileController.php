<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use PDF;
use Dompdf\Options;
use Dompdf\Dompdf;
use App\Exports\ExportUser;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Users;
class FileController extends Controller
{
    //
    public function createPDF() {
      $options = new Options();
      $options->set('defaultFont', 'fonts/THSarabunNew.ttf', 12); // เปลี่ยนเป็นเส้นทางไปยังฟอนต์ภาษาไทยที่คุณต้องการใช้งาน
     //dd($options);
      $dompdf = new Dompdf($options);
        // // retreive all records from db
        // $data = Event::all();
        // // share data to view
        // view()->share('employee',$data);
        // $pdf = PDF::loadView('pdf_view', $data);
        // // download PDF file with download method
         // return $pdf->download('pdf_file.pdf');
         $users=DB::table('events')

        ->get();
         //$users = Event::all();
//dd($users);
// $data = [
//   'name'=>'อะไรสักอย่าง ไม่รู้นามสกุลอะไร'
// ];
//$pdf = PDF::loadView('invoice', $data);
        $pdf = PDF::loadView('pdf.example',compact('users'));
       // $css = file_get_contents(public_path('css/css.css'));
      //  $pdf->loadHtml($css .$pdf );
        //->setPaper('a4', 'portrait');
        //  dd($pdf);

     //   return $pdf->download('example1-list.pdf');

     //return $pdf->stream('example-list.pdf');

      return $pdf->stream('example.pdf');

      // return view('pdf.example',compact('users'));
       // return $pdf->download('pdf.example', compact('users', 'pdf'));
      }


      public function export1()
    {
        return Excel::download(new Event, 'users.xlsx');
        $users=DB::table('events')

         ->get();
        $pdf=PDF::loadView('',compact('users'))->setPaper('a4','landscape');

$test='Excel';
        return $pdf->download('');
return Excel::download(''.'xlsx');
        // $options = new Options();
        // $options->set('defaultFont', 'fonts/THSarabunNew.ttf', 12); // เปลี่ยนเป็นเส้นทางไปยังฟอนต์ภาษาไทยที่คุณต้องการใช้งาน

        // $dompdf = new Dompdf($options);

        //    $users=DB::table('events')

        //   ->get();

        //   $pdf = PDF::loadView('xlsx.example1',compact('users'));


        // return $pdf->stream('example1.xlsx');


         }



      //  return Excel::download(new Event, 'users.xlsx');
    //}

    public function exportUsers(Request $request){
        return Excel::download(new Users, 'users.xlsx');
    }
}
