{{-- @extends('layouts.officermin') --}}


{{-- @include('layouts.admincss') --}}
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
{{-- @section('content') --}}
<title>user</title>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
<br>
<style>
 @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

   body,html {
       font-family: "THSarabunNew";
       font-size: 16pt;
       
   }table
   {
border-collapse: collapse;
   }
   td,thead,H1,tr,table{
      border:1px solid;
      font-family: "THSarabunNew";
      text-align: center;}
      
   th,{
    background-color:lightgray;
    border:1px solid;
    font-family: "THSarabunNew";
   }
   
</style>

  ตารางนิเทศงาน
  <br>
  
        <table >
        
            <tr>
              <th>ลำดับ</th>
              <th>หัวเรื่อง</th>
              <th>ชื่อนักศึกษา</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>สถานะ</th>
            
            </tr>
         
          
            @foreach ($users as $users)
            <tr>
              <td >{{$users->id}}</td>
              <td>{{$users->title}}</td>
              <td>{{$users->start}}</td>
              <td>{{$users->end}}</td>
              <td>{{$users->title}}</td>
             
            </tr>

            @endforeach
        
        </table>
     
</body>
</html>