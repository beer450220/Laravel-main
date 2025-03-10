@extends('layouts.appstudent')
{{-- @include('layouts.admincss2') --}}
 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
{{-- <title>ระบบสารสนเทศสหกิจศึกษา</title> --}}
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }}
                    <br>
                    {{$msg}}
                </div>

            </div>
            {{-- sss --}}
        {{-- </div>
    </div>

</div>  --}}



<style>


  * {
      margin: 0;
      padding: 0
  }

  html {
      height: 100%
  }

  p {
      color: grey
  }

  #heading {
      text-transform: uppercase;
      color: #020508;
      font-weight: normal
  }

  #msform {
      text-align: center;
      position: relative;
      margin-top: 20px
  }

  #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 0.5rem;
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      padding-bottom: 20px;
      position: relative
  }

  .form-card {
      text-align: left
  }

  #msform fieldset:not(:first-of-type) {
      display: none
  }

  #msform input,
  #msform textarea {
      padding: 8px 15px 8px 15px;
      border: 1px solid #ccc;
      border-radius: 0px;
      margin-bottom: 25px;
      margin-top: 2px;
      width: 100%;
      box-sizing: border-box;
      font-family: montserrat;
      color: #2C3E50;
      background-color: #ECEFF1;
      font-size: 16px;
      letter-spacing: 1px
  }

  #msform input:focus,
  #msform textarea:focus {
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      border: 1px solid #673AB7;
      outline-width: 0
  }

  #msform .action-button {
      width: 100px;
      background: #673AB7;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 0px 10px 5px;
      float: right
  }

  #msform .action-button:hover,
  #msform .action-button:focus {
      background-color: #311B92
  }

  #msform .action-button-previous {
      width: 100px;
      background: #616161;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px 10px 0px;
      float: right
  }

  #msform .action-button-previous:hover,
  #msform .action-button-previous:focus {
      background-color: #000000
  }

  .card {
      z-index: 0;
      border: none;
      position: relative
  }

  .fs-title {
      font-size: 25px;
      color: #673AB7;
      margin-bottom: 15px;
      font-weight: normal;
      text-align: left
  }

  .purple-text {
      color: #673AB7;
      font-weight: normal
  }

  .steps {
      font-size: 25px;
      color: gray;
      margin-bottom: 10px;
      font-weight: normal;
      text-align: right
  }

  .fieldlabels {
      color: gray;
      text-align: left
  }

  #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      color: lightgrey
  }

  #progressbar .active {
      color: #030303
  }

  #progressbar li {
      list-style-type: none;
      font-size: 16px;
      width: 15%;
      float: left;
      position: relative;
      font-weight: 400
  }

  #progressbar #account:before {
      font-family: FontAwesome;
      content: "\f007"
  }

  #progressbar #personal:before {
      font-family: FontAwesome;
      content: "\f124"
  }

  #progressbar #payment:before {
      font-family: FontAwesome;
      content: "\f2c3"
  }

  #progressbar #confirm:before {
      font-family: FontAwesome;
      content: "\f0f6"


  }


  #progressbar li:before {
      width: 50px;
      height: 50px;
      line-height: 45px;
      display: block;
      font-size: 20px;
      color: #ffffff;
      background: lightgray;
      border-radius: 50%;
      margin: 0 auto 10px auto;
      padding: 2px
  }

  #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: lightgray;
      position: absolute;
      left: 0;
      top: 25px;
      z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
      background: #123bf1
  }

  .progress {
      height: 20px
  }

  .progress-bar {
      background-color: #26cf89
  }

  .fit-image {
      width: 100%;
      object-fit: cover
  }

  .fa-regular.fa-heart {
  color: gray; /* ตั้งค่าสีเริ่มต้นเป็นสีเทา */
  cursor: pointer;
}
.fa-solid.fa-heart {
  color: red; /* ตั้งค่าสีเมื่อเป็นสีแดงเมื่อคลิก */
}
.fa-heart.active {
  color: red; /* สีที่คุณต้องการเมื่อไอคอนมีสี */
}

.highlight {
        background-color: yellow; /* เปลี่ยนสีพื้นหลังเป็นสีเหลืองเมื่อเงื่อนไขเป็นจริง */
        color: black; /* เปลี่ยนสีข้อความในแถวที่เป็น highlight เป็นสีดำ */
    }



div.second {
  background: rgba(0, 0, 0, 0.3);
}





  </style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-16 col-lg-8 col-xl-7 text-center p-0 mt-3 mb-2">
        {{-- <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"> --}}
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                {{-- <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p> --}}
                <form id="msform">
                    <!-- progressbar -->

                    <ul id="progressbar">
                      {{-- <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong>

                        <br><br>
                        <br>
                         @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                         <span class="circle circle-sm bg-success-light">

                            <i class="fe fe-16 fe-check text-white mb-0"></i> --}}

                            <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                        {{-- </span><span class="text-Success" >ยืนยันตัวตนแล้ว  </span>
                        @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                        <span class="circle circle-sm bg-warning-light">

                            <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i> --}}
                            {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                    {{-- @endif
                    </li></a> --}}
                      {{-- <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong>

                        <br><br>
                        <br>   @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                        <span class="circle circle-sm bg-success-light">

                            <i class="fe fe-16 fe-check text-white mb-0"></i>

                            <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                        </span><span class="text-Success" >ยืนยันได้สถานประกอบการแล้ว </span>
                        @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                        <span class="circle circle-sm bg-warning-light">

                            <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                            {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                            {{-- @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                            <span class="circle circle-sm bg-warning-light">

                                <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i> --}}
{{--  --}}
                    {{-- @endif
                    </li></a> --}}
                        <a  href="/studenthome">  <li class="active" id="payment"><strong>ลงทะเบียนนักศึกษา
                            สหกิจศึกษา</strong></li></a>
                          {{-- <a  href="/studenthome/informdetails"> <li id="confirm"><strong>เอกสารปฏิบัติงานนักศึกษา</strong></li></a> --}}
                            <a  href="/studenthome/calendar2confirm"> <li id="confirm"><strong>นิเทศงาน</strong></li></a>
                              {{-- <a  href="/studenthome/report"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a> --}}
                    </ul>
                    <div class="progress">
                        {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title col">ลงทะเบียน:</h2>

                                </div>
                                <div class="col-4">
                                    <h2 class="steps">ขั้นตอน 1 - 2</h2>
                                </div>
                            </div><div class="col-6">
                              <div class=" alert alert-primary  " role="alert">
                                  <b>ขั้นตอนที่ 1 ลงทะเบียน:</b>
                                      <br> ให้อัพโหลดไฟล์เอกสารเพื่อลงทะเบียนให้เรียบร้อย
                                      {{-- <br>  <a href="/studenthome/informdetails"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป --}}
                                                              </div>   <br>   <br>
                          </div>
                          <div class="col-12">
                            <h2 class="steps">
                                {{-- <form method="POST" action="{{ route('updateconfirm1') }}" >
                                    @csrf --}}
                                    {{-- @if ($registers01->isEmpty()) --}}
                                    {{-- @foreach ($registers01 as $row) --}}
                                    {{-- @if ($row->user_id === Auth::user()->id) --}}
                                    {{-- Auth::user()->id --}}
                                {{-- <a href="/studenthome/updateconfirm1/{{$row->id}}"  class=" btn btn-outline-success"onclick="return confirm('ยืนยันการส่งเอกสาร !!');">ยืนยันการส่งเอกสาร</a></h2> --}}
                                {{-- @elseif ($row->Status_registers === 'ไม่อนุมัติ') --}}

                                {{-- @endif --}}
                                {{-- @endforeach --}}
                                {{-- <button type="submit" class="btn btn-outline-success"onclick="return confirm('ยืนยันการส่งเอกสาร !!');">ยืนยันการส่งเอกสารทั้งหมด</button> --}}
                            </form>
                                {{-- <button id="update-status-btn" class="btn btn-outline-success"onclick="return confirm('ยืนยันการส่งเอกสาร !!');">ยืนยันการส่งเอกสารทั้งหมด</button> --}}
                                <form method="POST"id="myForm" action="{{ route('updateconfirm1') }}"enctype="multipart/form-data">
                                    @csrf
                                <button type="button" class="btn btn-outline-success"id="confirmButton">ยืนยันการส่งเอกสารทั้งหมด</button>
                            </form>
                                {{-- @endif --}}

                                {{-- </form> --}}



                                <script>
                                    document.getElementById('confirmButton').addEventListener('click', function(event) {
                                        // ตรวจสอบว่าฟอร์มถูกต้องหรือไม่
                                        let form = document.getElementById('myForm');
                                        if (!form.checkValidity()) {
                                            form.reportValidity();
                                            return;
                                        }

                                        Swal.fire({
                                            // title: 'คุณแน่ใจหรือไม่?',',
                                            text: "คุณต้องการยืนยันการส่งเอกสารนี้หรือไม่?",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'ใช่, ยืนยันการส่งเอกสาร!',
                                            cancelButtonText: 'ยกเลิก'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                form.submit();
                                            }
                                        });
                                    });
                                </script>
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                 $(document).ready(function() {
        $('#update-status-btn').click(function(event) {
            // ป้องกันการคลิกปุ่มหลายครั้งโดยไม่ได้ตั้งใจ
            event.preventDefault();

            if (confirm('ยืนยันการส่งเอกสาร !!')) {
                $.ajax({
                    url: '{{ route("updateconfirm1") }}', // URL สำหรับเรียกใช้ route
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // ส่งค่า CSRF token เพื่อป้องกัน CSRF
                    },
                    success: function(response) {
                        alert('สถานะถูกอัปเดตเรียบร้อยแล้ว');
                        location.reload(); // รีเฟรชหน้าเว็บเพื่อดูการเปลี่ยนแปลง
                    },
                    error: function(xhr) {
                        alert('เกิดข้อผิดพลาดในการอัปเดตสถานะ');
                    }
                });
            }
        });
    });
                            </script>
                        <br>
                          {{-- <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <div class="col-7">
                                      <h1 class="steps">ให้กรอกข้อมูลนักศึกษา<br><h2 class="steps text-success">{{ Auth::user()->status}}</h2></h1>


                      </h2> --}}



{{--
                              <br>
                              <br> --}}

                              <main role="main" class="">
                                <div class="container-fluid">
                                  <div class="row justify-content-center">
                                    <div class="col-12">
                                        @if(session("success6"))
                                        <div class="alert alert-success col-4">{{session('success6')}}
                              @endif
                             @if(session("success5"))
                                      <div class="alert alert-success col-4">{{session('success5')}}
                            @endif
                              @if(session("success7"))
                            <div class="alert alert-warning col-4">{{session('success7')}}
                  @endif
                                 @if(session("error"))
                            <div class="alert alert-danger col-4">{{session('error')}}
                                @endif
                                      </div>
                                      </div> </div>

                                          {{-- <div class="col col-lg-2 ">
                                            <a href=""  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>

                                            <a href="/studenthome/addstudent"  class=" btn btn-outline-success">ดาวห์โหลด</a>
                                        </div> --}}

                                            {{-- <a href="/studenthome/Announcement"  class=" btn btn-outline-primary">ปฏิทินสหกิจ</a> --}}





 {{-- <a href="/studenthome/documents"  class=" btn btn-outline-primary">ดาวน์โหลดไฟล์เอกสาร</a> --}}
















                                @if ($registers1->isEmpty())
                                <div class="col-md-12 mb-4">
                                    {{-- <div class="accordion w-100" id="accordion1"> --}}
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                 @foreach ($registers1 as $row)

                                         @if ($row->Status_registers === 'รออนุมัติ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                     @endif
                                         {{-- class="circle circle-sm bg-warning-light"> --}}
                                @endforeach




                                             <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                                                @foreach ($registers1 as $row)
                                                @if ($row->Status_registers === 'รออนุมัติ')
                                                    <span class="text-warning">รออนุมัติเอกสาร</span>
                                                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                    <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                    <span class="text-Danger ">{{ $row->Status_registers }}</span>



                                                    @endif
                                            @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> </H2>
                                            {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}
                                            <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                                            </span>


                                        </div>

                            @else
@foreach ($registers1 as $row)

@if ($row->Status_registers === 'รออนุมัติ')
<div class="col-md-12 mb-4">
    {{-- <div class="accordion w-100" id="accordion1"> --}}
      <div class="card shadow">
        <div class="card-header" id="heading1">
          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
 @foreach ($registers1 as $row)

         @if ($row->Status_registers === 'รออนุมัติ')
         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
     @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
     @elseif ($row->Status_registers === 'ไม่อนุมัติ')
         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
     @endif
         {{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach




             <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                @foreach ($registers1 as $row)
                @if ($row->Status_registers === 'รออนุมัติ')
                    <span class="text-warning">รออนุมัติเอกสาร</span>
                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                    <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                    <span class="text-Danger ">{{ $row->Status_registers }}</span>
                @else (sss)


                    @endif
            @endforeach</H2>
            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
            <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
            </span>


        </div>




@elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
<div class="col-md-12 mb-4">
    {{-- <div class="accordion w-100" id="accordion1"> --}}
      <div class="card shadow">
        <div class="card-header" id="heading1">
          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
 @foreach ($registers1 as $row)

         @if ($row->Status_registers === 'รออนุมัติ')
         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
     @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
     @elseif ($row->Status_registers === 'ไม่อนุมัติ')
         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
     @endif
         {{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach




             <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                @foreach ($registers1 as $row)
                @if ($row->Status_registers === 'รออนุมัติ')
                    <span class="text-warning">รออนุมัติเอกสาร</span>
                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                       <span class="text-Success ">อนุมัติเอกสารแล้ว</span>

                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                    <span class="text-Danger ">{{ $row->Status_registers }}</span>
                @else (sss)


                    @endif
            @endforeach</H2>
            <a href="../../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
            </span>


        </div>

        @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
        <div class="col-md-12 mb-4">
            {{-- <div class="accordion w-100" id="accordion1"> --}}
              <div class="card shadow">
                <div class="card-header" id="heading1">
                  {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
         @foreach ($registers1 as $row)

                 @if ($row->Status_registers === 'รออนุมัติ')
                 <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
             @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                 <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                 @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                 <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
             @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                 <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
             @endif
                 {{-- class="circle circle-sm bg-warning-light"> --}}
        @endforeach




                     <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                        @foreach ($registers1 as $row)
                        @if ($row->Status_registers === 'รออนุมัติ')
                            <span class="text-warning">รออนุมัติเอกสาร</span>
                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                            <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                            @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                            <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                            <span class="text-Danger ">{{ $row->Status_registers }}</span>
                        @else (sss)


                            @endif
                    @endforeach</H2>
                    {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                    <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                        <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                    {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                    </span>

                </div>




@elseif ($row->Status_registers === 'ไม่อนุมัติ')
<div class="col-md-12 mb-4">
    {{-- <div class="accordion w-100" id="accordion1"> --}}
      <div class="card shadow">
        <div class="card-header" id="heading1">
          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
 @foreach ($registers1 as $row)

         @if ($row->Status_registers === 'รออนุมัติ')
         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
     @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
     @elseif ($row->Status_registers === 'ไม่อนุมัติ')
     <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
     @endif
         {{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach




             <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                @foreach ($registers1 as $row)
                @if ($row->Status_registers === 'รออนุมัติ')
                    <span class="text-warning">รออนุมัติเอกสาร</span>
                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                    <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                    <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>


                    @endif
            @endforeach</H2>
            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a> --}}
            <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>

            </a>
            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
            </span>

        </div>




@endif
{{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach
@endif






                                {{-- <div class="col-md-12 mb-4"> --}}
                                    {{-- <div class="accordion w-100" id="accordion1"> --}}
                                      {{-- <div class="card shadow">
                                        <div class="card-header" id="heading1"> --}}
                                          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                 {{-- @foreach ($registers1 as $row)

                                         @if ($row->Status_registers === 'รออนุมัติ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                     @endif --}}
                                         {{-- class="circle circle-sm bg-warning-light"> --}}
{{-- @endforeach --}}




                                             {{-- <H2><strong>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</strong> </a> <span class="">
                                                @foreach ($registers1 as $row)
                                                @if ($row->Status_registers === 'รออนุมัติ')
                                                    <span class="text-warning">รออนุมัติเอกสาร</span>
                                                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                    <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                    <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                @else (sss)
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>

                                                    @endif
                                            @endforeach</H2>
                                            <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                            </span>


                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">
                                            <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <br>


                                          </div>

                                        </div> --}}
                                      {{-- </div> --}}
                                      @if ($registers2->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>
                                                @foreach ($registers2 as $row)



                                            @if ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @else (ss)
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @endif
                                        @endforeach

                                    </span><h2><strong>ใบสมัครงานสหกิจศึกษา(สก03)</strong>

                                          </a><span>
                                            @foreach ($registers2 as $row)
                                            @if ($row->Status_registers === 'รออนุมัติ')
                                                <span class="text-warning">รออนุมัติเอกสาร</span>
                                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                            @else ()
                                                <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                            @endif
                                        @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2></span>
                            <a href="/studenthome/addregister2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>

                                        </div></div>



                                      @else
                                      @foreach ($registers2 as $row)

                                      @if ($row->Status_registers === 'รออนุมัติ')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>
                                                @foreach ($registers2 as $row)



                                            @if ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @else (ss)
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @endif
                                        @endforeach

                                    </span><h2><strong>ใบสมัครงานสหกิจศึกษา(สก03)</strong>

                                          </a><span>
                                            @foreach ($registers2 as $row)
                                            @if ($row->Status_registers === 'รออนุมัติ')
                                            <span class="text-warning">รออนุมัติเอกสาร</span>
                                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                   <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                            @else ()
                                                <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                            @endif
                                        @endforeach</h2>
                                        <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                            <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                        {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                            {{-- <a href="/studenthome/addregister2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}

                                        </div>     </div>

                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                        <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                                <span>
                                                    @foreach ($registers2 as $row)



                                                @if ($row->Status_registers === 'รออนุมัติ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                                @else (ss)
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                @endif
                                            @endforeach

                                        </span><h2><strong>ใบสมัครงานสหกิจศึกษา(สก03)</strong>

                                              </a><span>
                                                @foreach ($registers2 as $row)
                                                @if ($row->Status_registers === 'รออนุมัติ')
                                                    <span class="badge badge-pill badge-warning">รออนุมัติเอกสาร</span>
                                                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                       <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                    <span class="badge badge-pill badge-Danger ">{{ $row->Status_registers }}</span>
                                                @else ()
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                @endif
                                            @endforeach</h2>
                                            <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                        </span>
                                            {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                                {{-- <a href="/studenthome/addregister2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}

                                            </div>   </div>



                                                @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')

                                                    {{-- <div class="accordion w-100" id="accordion1"> --}}
                                                      <div class="card shadow">
                                                        <div class="card-header" id="heading1">
                                                          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                                 @foreach ($registers2 as $row)

                                                         @if ($row->Status_registers === 'รออนุมัติ')
                                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                     @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                                         @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                     @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                                     @endif
                                                         {{-- class="circle circle-sm bg-warning-light"> --}}
                                                @endforeach




                                                             <H2><strong>ใบสมัครงานสหกิจศึกษา(สก03)</strong> </a> <span class="">
                                                                @foreach ($registers2 as $row)
                                                                @if ($row->Status_registers === 'รออนุมัติ')
                                                                    <span class="text-warning">รออนุมัติเอกสาร</span>
                                                                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                                    <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                                    @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                                    <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                                                                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                                    <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                                @else (sss)


                                                                    @endif
                                                            @endforeach</H2>
                                                            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                            <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                                                <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                                            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                                                            </span>

                                                        </div>







                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <div class="card shadow">
                                                <div class="card-header" id="heading1">
                                                  {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                                    <span>
                                                        @foreach ($registers2 as $row)



                                                    @if ($row->Status_registers === 'รออนุมัติ')
                                                    <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                    <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                                @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                    <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                                    @else (ss)
                                                    <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                    @endif
                                                @endforeach

                                            </span><h2><strong>ใบสมัครงานสหกิจศึกษา(สก03)</strong>

                                                  </a><span>
                                                    @foreach ($registers2 as $row)
                                                    @if ($row->Status_registers === 'รออนุมัติ')
                                                        <span class="badge badge-pill badge-warning">รออนุมัติเอกสาร</span>
                                                    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                           <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                        <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                                    @else ()
                                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                    @endif
                                                @endforeach</h2></span>
                                                {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                                    {{-- <a href="/studenthome/addregister2"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a> --}}
                                    <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                        <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                                </div>


                                      @endif
                                      @endforeach
                                      @endif





                                      @if ($registers3->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($registers3 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach

                                            </span> <span> </span> <h2><strong>แบบคำรองขอหนังสือขอความอนุเคราะห์รับนักศึกษาสหกิจศึกษา(สก04)</strong>
                                          </a> @foreach ($registers3 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)
                                                </span>
                                          @endif
                                      @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                <a href="/studenthome/addregister3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>


                                      @else
                                      @foreach ($registers3 as $row)

                                      @if ($row->Status_registers === 'รออนุมัติ')
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($registers3 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach

                                            </span> <span> </span> <h2><strong>แบบคำรองขอหนังสือขอความอนุเคราะห์รับนักศึกษาสหกิจศึกษา(สก04)</strong>
                                          </a> @foreach ($registers3 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)
                                                </span>
                                          @endif
                                      @endforeach </h2>
                                      <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                        <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                {{-- <a href="/studenthome/addregister3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                 @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                        <div class="card shadow">
                                          <div class="card-header" id="heading1">
                                            {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                              <span>  @foreach ($registers3 as $row)
                                                  @if (empty($row->Status_registers))
                                              <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                              <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                              @elseif ($row->Status_registers === 'รออนุมัติ')
                                              <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                              @endif
                                          @endforeach

                                              </span> <span> </span> <h2><strong>แบบคำรองขอหนังสือขอความอนุเคราะห์รับนักศึกษาสหกิจศึกษา(สก04)</strong>
                                            </a> @foreach ($registers3 as $row)
                                            @if ($row->Status_registers === 'รออนุมัติ')
                                                <span class="text-warning">รออนุมัติเอกสาร</span>
                                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                            @else
                                                <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)
                                                  </span>
                                            @endif
                                        @endforeach </h2>
                                        <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                  {{-- <a href="/studenthome/addregister3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                          </div>




                                          @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                          {{-- <div class="col-md-12 mb-4"> --}}
                                              {{-- <div class="accordion w-100" id="accordion1"> --}}
                                                <div class="card shadow">
                                                  <div class="card-header" id="heading1">
                                                    {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                           @foreach ($registers3 as $row)

                                                   @if ($row->Status_registers === 'รออนุมัติ')
                                                   <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                               @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                   <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                                   @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                   <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                               @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                   <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                               @endif
                                                   {{-- class="circle circle-sm bg-warning-light"> --}}
                                          @endforeach




                                                       <H2><strong>แบบคำรองขอหนังสือขอความอนุเคราะห์รับนักศึกษาสหกิจศึกษา(สก04)</strong> </a> <span class="">
                                                          @foreach ($registers3 as $row)
                                                          @if ($row->Status_registers === 'รออนุมัติ')
                                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                              @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                              <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                              <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                          @else (sss)


                                                              @endif
                                                      @endforeach</H2>
                                                      {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                      <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                                          <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                                      {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                                                      </span>


                                                  </div>
                                                  <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                                    <div class="card-body">
                                                      {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                  </div>
                                                  <br>


                                                    </div>

                                                  </div>



                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                                <span>  @foreach ($registers3 as $row)
                                                    @if (empty($row->Status_registers))
                                                <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                                @elseif ($row->Status_registers === 'รออนุมัติ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                                @endif
                                            @endforeach

                                                </span> <span> </span> <h2><strong>แบบคำรองขอหนังสือขอความอนุเคราะห์รับนักศึกษาสหกิจศึกษา(สก04)</strong>
                                              </a> @foreach ($registers3 as $row)
                                              @if ($row->Status_registers === 'รออนุมัติ')
                                                  <span class="text-warning">รออนุมัติเอกสาร</span>
                                              @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                  <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                              @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                  <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                              @else
                                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)
                                                    </span>
                                              @endif
                                          @endforeach </h2>
                                    {{-- <a href="/studenthome/addregister3"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a> --}}
                                    <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                        <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                </div>
                                      @endif
                                      @endforeach
                                      @endif






                                      @if ($registers4->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
                                            <span>  @foreach ($registers4 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach

                                            </span> <h2><strong>บัตรประชาชน</strong>
                                          </a>
                                          @foreach ($registers4 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach<span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                      <a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                                          <div class="card-body"><a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>
                                          <br>

                                        </div>
                                      </div>

                                      @else
                                      @foreach ($registers4 as $row)
   @if ($row->Status_registers === 'รออนุมัติ')
                  <div class="card shadow">
                    <div class="card-header" id="heading1">
                      {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
                        <span>  @foreach ($registers4 as $row)
                            @if (empty($row->Status_registers))
                        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                        @elseif ($row->Status_registers === 'รออนุมัติ')
                        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                        @endif
                    @endforeach

                        </span> <h2><strong>บัตรประชาชน</strong>
                      </a>
                      @foreach ($registers4 as $row)
                      @if ($row->Status_registers === 'รออนุมัติ')
                      <span class="text-warning">รออนุมัติเอกสาร</span>
                      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                      @else
                          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                      @endif
                  @endforeach</h2>
                  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                  {{-- <a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                      <div class="card-body"><a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>
                      <br>

                    </div>
                  </div>
 @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
 <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
        <span>  @foreach ($registers4 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach

        </span> <h2><strong>บัตรประชาชน</strong>
      </a>
      @foreach ($registers4 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
          <span class="badge badge-pill badge-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
             <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach</h2>
  <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
  {{-- <a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
      <div class="card-body"><a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>
      <br>

    </div>
  </div>


  @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                     {{-- <div class="col-md-12 mb-4"> --}}
                                              {{-- <div class="accordion w-100" id="accordion1"> --}}
                                                <div class="card shadow">
                                                  <div class="card-header" id="heading1">
                                                    {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                           @foreach ($registers4 as $row)

                                                   @if ($row->Status_registers === 'รออนุมัติ')
                                                   <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                               @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                   <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                                   @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                   <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                               @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                   <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                               @endif
                                                   {{-- class="circle circle-sm bg-warning-light"> --}}
                                          @endforeach




                                                       <H2><strong>บัตรประชาชน</strong> </a> <span class="">
                                                          @foreach ($registers4 as $row)
                                                          @if ($row->Status_registers === 'รออนุมัติ')
                                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                              @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                              <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                              <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                          @else (sss)


                                                              @endif
                                                      @endforeach</H2>
                                                      {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                      <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                                          <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                                      {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                                                      </span>


                                                  </div>
                                                  <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                                    <div class="card-body">
                                                      {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                  </div>
                                                  <br>


                                                    </div>

                                                  </div>




  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
  <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
        <span>  @foreach ($registers4 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach

        </span> <h2><strong>บัตรประชาชน</strong>
      </a>
      @foreach ($registers4 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
          <span class="badge badge-pill badge-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
             <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach</h2>
  {{-- <a href="/studenthome/addregister4"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a> --}}
  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
      <div class="card-body"><a href="/studenthome/addregister4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>
      <br>

    </div>
  </div>


                                      @endif
                                      @endforeach
                                      @endif







                                      @if ($registers5->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> --}}
                                            <span>  @foreach ($registers5 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach


                                            </span> <h2><strong>บัตรนักศึกษา</strong>
                                          </a>
                                          @foreach ($registers5 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                      <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>
                                          @foreach ($registers5 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit6register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>




                                      @else
                                      @foreach ($registers5 as $row)
   @if ($row->Status_registers === 'รออนุมัติ')
   <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> --}}
        <span>  @foreach ($registers5 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach


        </span> <h2><strong>บัตรนักศึกษา</strong>
      </a>
      @foreach ($registers5 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
      <span class="text-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach </h2>
  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
  {{-- <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
      <div class="card-body"> <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
    </div>
      <br>

    </div>
  </div>
  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
  <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> --}}
        <span>  @foreach ($registers5 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach


        </span> <h2><strong>บัตรนักศึกษา</strong>
      </a>
      @foreach ($registers5 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
          <span class="badge badge-pill badge-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
             <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach </h2>
  <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
  {{-- <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
      <div class="card-body"> <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
    </div>
      <br>

    </div>
  </div>



  @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
  {{-- <div class="col-md-12 mb-4"> --}}
      {{-- <div class="accordion w-100" id="accordion1"> --}}
        <div class="card shadow">
          <div class="card-header" id="heading1">
            {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
   @foreach ($registers5 as $row)

           @if ($row->Status_registers === 'รออนุมัติ')
           <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
       @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
           <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
           @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
           <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
       @elseif ($row->Status_registers === 'ไม่อนุมัติ')
           <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
       @endif
           {{-- class="circle circle-sm bg-warning-light"> --}}
  @endforeach




               <H2><strong>บัตรนักศึกษา</strong> </a> <span class="">
                  @foreach ($registers5 as $row)
                  @if ($row->Status_registers === 'รออนุมัติ')
                      <span class="text-warning">รออนุมัติเอกสาร</span>
                  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                      <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                      @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                      <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                      <span class="text-Danger ">{{ $row->Status_registers }}</span>
                  @else (sss)


                      @endif
              @endforeach</H2>
              {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
              <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                  <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
              {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
              </span>


          </div>
          <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
            <div class="card-body">
              {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
          </div>
          <br>


            </div>

          </div>




 @elseif ($row->Status_registers === 'ไม่อนุมัติ')
 <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> --}}
        <span>  @foreach ($registers5 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach


        </span> <h2><strong>บัตรนักศึกษา</strong>
      </a>
      @foreach ($registers5 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
          <span class="badge badge-pill badge-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
             <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach </h2>
  {{-- <a href="/studenthome/addregister5"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a> --}}
  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
      <div class="card-body"> <a href="/studenthome/addregister5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
    </div>
      <br>

    </div>
  </div>

                                      @endif
                                      @endforeach
                                      @endif






                                      @if ($registers6->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"> --}}
                                            <span>  @foreach ($registers6 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach


                                            </span> <h2><strong>ผลการเรียน</strong>
                                          </a>
                                          @foreach ($registers6 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                      <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>
                                          @foreach ($registers6 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                    <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/edit7register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>

                                      @else
                                      @foreach ($registers6 as $row)
   @if ($row->Status_registers === 'รออนุมัติ')
   <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"> --}}
        <span>  @foreach ($registers6 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach


        </span> <h2><strong>ผลการเรียน</strong>
      </a>
      @foreach ($registers6 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
          <span class="text-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach </h2>
  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
  {{-- <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
    </div>
    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
      <div class="card-body"> <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
      <br>

    </div>
  </div>

                                      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"> --}}
                                            <span>  @foreach ($registers6 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach


                                            </span> <h2><strong>ผลการเรียน</strong>
                                          </a>
                                          @foreach ($registers6 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach </h2>
                                      <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                      {{-- <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>

                                        </div>
                                      </div>


                                      @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                      {{-- <div class="col-md-12 mb-4"> --}}
                                          {{-- <div class="accordion w-100" id="accordion1"> --}}
                                            <div class="card shadow">
                                              <div class="card-header" id="heading1">
                                                {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                       @foreach ($registers6 as $row)

                                               @if ($row->Status_registers === 'รออนุมัติ')
                                               <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                           @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                               <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                               @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                               <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                           @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                               <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                           @endif
                                               {{-- class="circle circle-sm bg-warning-light"> --}}
                                      @endforeach




                                                   <H2><strong>ผลการเรียน</strong> </a> <span class="">
                                                      @foreach ($registers6 as $row)
                                                      @if ($row->Status_registers === 'รออนุมัติ')
                                                          <span class="text-warning">รออนุมัติเอกสาร</span>
                                                      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                          @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                          <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                                                      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                          <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                      @else (sss)


                                                          @endif
                                                  @endforeach</H2>
                                                  {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                                      <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                                  {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                                                  </span>


                                              </div>
                                              <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                                <div class="card-body">
                                                  {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                              </div>
                                              <br>


                                                </div>

                                              </div>



                                      @elseif ($row->Status_registers === 'ไม่อนุมัติ')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"> --}}
                                            <span>  @foreach ($registers6 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach


                                            </span> <h2><strong>ผลการเรียน</strong>
                                          </a>
                                          @foreach ($registers6 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                 <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach </h2>
                                      {{-- <a href="/studenthome/addregister6"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a> --}}
                                      <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                        <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                    </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addregister6"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>

                                        </div>
                                      </div>

                                      @endif
                                      @endforeach
                                      @endif





                                      @if ($registers7->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7"> --}}
                                            <span>  @foreach ($registers7 as $row)
                                                @if (empty($row->Status_registers))
                                            <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @elseif ($row->Status_registers === 'รออนุมัติ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                            @endif
                                        @endforeach



                                            </span> <H2><strong>ประวัติส่วนตัว(resume)</strong>
                                          </a>
                                           @foreach ($registers7 as $row)
                                          @if ($row->Status_registers === 'รออนุมัติ')
                                              <span class="text-warning">รออนุมัติเอกสาร</span>
                                          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                              <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                              <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></H2>
                                      <a href="/studenthome/addregister7"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">

                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>








                                  @else
                                  @foreach ($registers7 as $row)
@if ($row->Status_registers === 'รออนุมัติ')
<div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7"> --}}
        <span>  @foreach ($registers7 as $row)
            @if (empty($row->Status_registers))
        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @elseif ($row->Status_registers === 'รออนุมัติ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

        @endif
    @endforeach



        </span> <H2><strong>ประวัติส่วนตัว(resume)</strong>
      </a>
       @foreach ($registers7 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
          <span class="text-warning">รออนุมัติเอกสาร</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach
  {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร) --}}
    </span></H2>
  {{-- <a href="/studenthome/addregister7"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
    </div>
    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">

              </div>
            </div> <!-- /.card-footer -->

    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                  <div class="card shadow">
                                    <div class="card-header" id="heading1">
                                      {{-- <a role="button" href="#collapse7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7"> --}}
                                        <span>  @foreach ($registers7 as $row)
                                            @if (empty($row->Status_registers))
                                        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                        @elseif ($row->Status_registers === 'รออนุมัติ')
                                        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                        @endif
                                    @endforeach



                                        </span> <H2><strong>ประวัติส่วนตัว(resume)</strong>
                                      </a>
                                       @foreach ($registers7 as $row)
                                      @if ($row->Status_registers === 'รออนุมัติ')
                                          <span class="text-warning">รออนุมัติเอกสาร</span>
                                      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                      @else
                                          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                      @endif
                                  @endforeach </H2>
                                  {{-- <a href="/studenthome/addregister7"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                  <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                    </div>
                                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">

                                              </div>
                                            </div> <!-- /.card-footer -->



                                            @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                            {{-- <div class="col-md-12 mb-4"> --}}
                                                {{-- <div class="accordion w-100" id="accordion1"> --}}
                                                  <div class="card shadow">
                                                    <div class="card-header" id="heading1">
                                                      {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                             @foreach ($registers7 as $row)

                                                     @if ($row->Status_registers === 'รออนุมัติ')
                                                     <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                 @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                     <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                                     @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                     <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                 @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                     <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                                 @endif
                                                     {{-- class="circle circle-sm bg-warning-light"> --}}
                                            @endforeach




                                                         <H2><strong>ประวัติส่วนตัว(resume)</strong> </a> <span class="">
                                                            @foreach ($registers7 as $row)
                                                            @if ($row->Status_registers === 'รออนุมัติ')
                                                                <span class="text-warning">รออนุมัติเอกสาร</span>
                                                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                                <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                                                @elseif ($row->Status_registers === 'รอยืนยันเอกสารทั้งหมด')
                                                                <span class="text-warning ">รอยืนยันเอกสารทั้งหมด</span>
                                                            @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                                <span class="text-Danger ">{{ $row->Status_registers }}</span>
                                                            @else (sss)


                                                                @endif
                                                        @endforeach</H2>
                                                        {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                        <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                                            <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                                        {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                                                        </span>


                                                    </div>
                                                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                                      <div class="card-body">
                                                        {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                    </div>
                                                    <br>


                                                      </div>

                                                    </div>



                                  @elseif ($row->Status_registers === 'ไม่อนุมัติ')

                                  <div class="card shadow">
                                    <div class="card-header" id="heading1">
                                      {{-- <a role="button" href="#collapse7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7"> --}}
                                        <span>  @foreach ($registers7 as $row)
                                            @if (empty($row->Status_registers))
                                        <!-- แสดงข้อความเมื่อ $row->Status_registers ไม่มีค่า (null) -->
                                        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                        @elseif ($row->Status_registers === 'รออนุมัติ')
                                        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>

                                        @endif
                                    @endforeach



                                        </span> <H2><strong>ประวัติส่วนตัว(resume)</strong>
                                      </a>
                                       @foreach ($registers7 as $row)
                                      @if ($row->Status_registers === 'รออนุมัติ')
                                          <span class="text-warning">รออนุมัติเอกสาร</span>
                                      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                          <span class="text-Success ">อนุมัติเอกสารแล้ว</span>
                                      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                          <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                      @else
                                          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                      @endif
                                  @endforeach </H2>
                                  {{-- <a href="/studenthome/addregister7"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                  {{-- <a href="../ลงทะเบียน/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a> --}}
                                  <a href="/studenthome/edit9register/{{ $row->id }}"  class=" btn btn-outline-warning">แก้ไขข้อมูล
                                    <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a>
                                </div>
                                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">

                                              </div>
                                            </div> <!-- /.card-footer -->


                                  @endif
                                  @endforeach
                                  @endif

                                  {{-- <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse0" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0" class="collapsed">
                                 @foreach ($registers8 as $row)

                                         @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษา')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_acceptance === 'ไม่อนุมัติ')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                     @endif

@endforeach




                                             <h2><strong>ประกาศผลการตอบรับ</strong> </a> <span class="">
                                                @foreach ($registers8 as $row)
                                                @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษา')
                                                    <span class="text-warning">ยังไม่ได้ตอบรับนักศึกษา</span>
                                                @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                                                    <span class="text-Success ">ตอบรับนักศึกษาแล้ว</span>
                                                @elseif ($row->Status_acceptance === 'ไม่อนุมัติ')
                                                    <span class="text-Danger ">{{ $row->Status_acceptance }}</span>


                                                    @else (Auth::user()->Status_acceptance)
                                                    <span class="text-Secondary">ยังไม่ได้ตอบรับนักศึกษา (กรุณารอการตอบรับ)</span>
                                                @endif
                                            @endforeach</h2>

                                            </span>


                                        </div>
                                        <div id="collapse0" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">


                                         </div>
                                        <br>

                                        @foreach ($registers8 as $row)

                                        <div class="col-md-3">
                                            <div class="card shadow mb-4">
                                              <div class="card-body text-center">
                                                <div class="avatar avatar-lg mt-4">

                                                </div>
                                                <div class="card-text my-2">
                                                  <strong class="card-title my-0">ชื่อเอกสาร </strong>
                                                  <p class="small text-muted mb-0">{{ $row->namefile}}</p>
                                                  <p class="small"><span class="badge badge-light text-muted"></span></p>
                                                </div>
                                              </div> <!-- ./card-text -->
                                              <div class="card-footer">
                                                <div class="row align-items-center justify-content-between">
                                                  <div class="col-auto">
                                                    <small>

                                                      <td><a href="../ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>

                                                    </div>

                                                  <div class="col-auto">

                                                  </div>
                                                </div>
                                              </div> <!-- /.card-footer -->
                                            </div>
                                          </div>
                                          @endforeach --}}
                                          {{-- </div>

                                        </div> --}}









                                    </div>



<main role="main" class="text-center">
    <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12 my-4 " >
   </div>

  </div></div></div></div>
<div class="d-grid gap-2 text-center" >

    <h4></h4><a href="/studenthome"   class="btn btn-outline-warning " type="button">>ย้อนกล้บ<</a>
    {{-- <h4>ขั้นตอนต่อไป</h4><a href="/studenthome/informdetails"   class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a> --}}
    </div>
    {{-- id="show-alert" --}}



@endsection
{{-- <script src="../student/js/jquery.min.js"></script> --}}


{{-- <script src="../student/js/simplebar.min.js"></script> --}}







{{-- <script src="../student/js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag()
  {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-56159088-1');
</script> --}}

