@extends('layouts.appstudent')

@section('content')
<title>ระบบสารสนเทศสหกิจศึกษา</title>
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
  /* content: "\f0f6" */

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
                      {{-- <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong></li></a> --}}
                      {{-- <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong></li></a> --}}
                        <a  href="/studenthome">  <li class="active" id="payment"><strong>ลงทะเบียนนักศึกษา
                            สหกิจศึกษา</strong></li></a>
                          {{-- <a  href="/studenthome/informdetails"> <li class="active" id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a> --}}
                            <a  href="/studenthome/calendar2confirm"> <li class="active" id="confirm"><strong>นิเทศงาน</strong></li></a>
                              {{-- <a  href="/studenthome/report"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a> --}}
                    </ul>
                    <div class="progress">
                        {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title col">นิเทศงาน:</h2>

                                </div>
                                <div class="col-4">
                                    <h2 class="steps">ขั้นตอน 2 - 2</h2>
                                </div>
                            </div><div class="col-6">
                              <div class=" alert alert-primary  " role="alert">

                                <b> ขั้นตอนที่ 2 นิเทศงาน:</b>
                                <br>ตารางนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษาและยืนยันเวลานัดนิเทศ
                                <br>


                                      {{-- <br>  <a href="/studenthome/report"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป --}}


                                    </div>
                          </div>
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
                                      <div class="alert alert-warning col-4">{{session('success5')}}
                            @endif
                                      </div>
                                      </div>

                                    <div class="col-md-12 my-4">
                                        <div class="card shadow">
                                          <div class="card-body">
                                        </span>
                                       <h5 class="card-title p-3 mb-2 bg-dark text-white"> <span>
                                         {{-- @foreach ($events as $row)

                                            @if ($row->Status_events === 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_events === 'รับทราบและยืนยันเวลานัดนิเทศแล้ว')
                                            <span class="circle circle-sm bg-success-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_events === 'ไม่ผ่าน')
                                            <span class="badge badge-pill badge-danger">{{ $row->Status_events }}
                                        @endif
                                        @endforeach --}}

                                        ตารางการนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษา</span></h5>
                                        {{-- <h5 class="card-title">นิเทศงาน</h5> --}}


                                </div>
                                 <!-- end section -->
                            </div> <!-- end section -->
                            <br>
                            @php
                            use Carbon\Carbon;

                            function formatThaiDate($date) {
                                $thaiMonths = [
                                    1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                                    5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                                    9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                                ];

                                $carbonDate = Carbon::parse($date)->setTimezone('Asia/Bangkok');
                                $year = $carbonDate->year + 543;
                                $month = $thaiMonths[$carbonDate->month];
                                $day = $carbonDate->day;
                                // $time = $carbonDate->format('เวลา H:i:s ');

                                return "$day $month $year ";
                            }
                        @endphp


                            <div class="container ">
                                <div class="row ">
                            @foreach ($events as $row)

                            <div  class="col-xs-20 col-sm-3 col-md-8 card  " style="margin-top:15px;  margin-left: 65px;">
                                <div class="card mb-4 shadow">
                                <div class="img_thumbnail productlist"><br>
                                      {{-- <a href="">
                                        <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                      </a> --}}
                                      <h4 class="card-title text-dark text-center">สถานประกอบการ::  {{ $row->em_id }}</h4>  <p class="text-center"></p>
                                      <hr>
                                      <div class="caption card-body">
                                    <div class="card-text my-2">

                                        <h4>  <p class=" text mb-0 text-dark ">วันการนิเทศ: {{ formatThaiDate($row->start) }}เวลา: {{ $row->time }}-{{ $row->time1 }}</p> </h4>
                                     <h4>  <p class=""><span class=" text-dark">อาจารย์นิเทศ:
                                    {{-- {{ $row->fname }}  {{ $row->surname }} --}}
                                    @foreach ($users2 as $teacherId)

                                    @php

                                    $teacherIds = explode(',', $row->teacher_name);
                                @endphp
                            @endforeach
                                     @foreach ($teacherIds as $teacherId)
                                     @php
                                         // ค้นหาข้อมูลของอาจารย์จากฐานข้อมูลตาม teacher_id ที่แยกไว้
                                         $teacher = App\Models\Teacher::find($teacherId);
                                     @endphp

                                     {{-- ทำสิ่งที่ต้องการกับข้อมูลของอาจารย์ที่พบ --}}
                                           {{ $teacher->fname }}  <a href="/studenthome/editteacher1/{{$teacher->id}}"  class=" btn btn-outline-success">ดูข้อมูล</a>
                                 @endforeach
                                </span></p></h4>
                                    {{-- @foreach ($users2 as $teacherId)
                                       @php
                                        $selectedIds = explode(',', $row->teacher_name);
                                    @endphp
 @php
 $teacher = App\Models\teacher::find($selectedIds);
@endphp --}}

{{-- แสดงข้อมูลของอาจารย์ --}}
{{-- {{ $teacher->fname }} {{ $teacher->surname }} --}}
                                        {{-- {{ $teacherId }} แสดง id ของอาจารย์ --}}
                                        {{-- หรือสามารถใช้วิธีดึงข้อมูลจากฐานข้อมูลได้ --}}
                                        {{-- @php
                                            $teacher = App\Models\teacher::find($teacherId);
                                        @endphp --}}
                                        {{-- {{ $row->id }}" {{ in_array($row->id, $selectedIds) ? 'selected' : '' }} --}}
                                        {{-- {{ in_array($row->id, $selectedIds) ? 'selected' : '' }} --}}
                                        {{-- {{ $row->fname }}  {{ $row->surname }} --}}
                                        {{-- @foreach ($selectedIds as $selectedId)

                                        {{ $selectedId}}
                                    @endforeach --}}
                                        {{-- {{ $teacherId->fname }} {{ $teacherId->surname }} --}}
                                    {{-- @endforeach --}}



                                        {{-- @php
                                        $selectedIds = explode(',', $events->teacher_name);
                                             @endphp {{ $row->fname}} {{ $row->surname}} --}}
                                        {{-- <select class="form-control select2"data-placeholder="Choose anything" id="small-select2-options-multiple-field1" multiple name="teacher_name[]" >
                                            <option value="">Select state</option>
                                        @foreach ($users2 as $row) --}}
                                            {{-- @php
                                        $selectedIds = explode(',', $events->teacher_name);
                                             @endphp --}}
  {{-- <option value="{{ $row->id }}" {{ in_array($row->id, $selectedIds) ? 'selected' : '' }}>
    {{ $row->fname }}  {{ $row->surname }}
  </option> --}}
{{-- </select>
  @endforeach --}}

  {{-- <script > $( '#small-select2-options-multiple-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
    selectionCssClass: 'select2--small',
    dropdownCssClass: 'select2--small',
} );
$( '#small-select2-options-multiple-field1' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
    selectionCssClass: 'select2--small',
    dropdownCssClass: 'select2--small',
} );



$( '#small-bootstrap-class-single-field' ).select2( {
theme: "bootstrap-5",
width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
placeholder: $( this ).data( 'placeholder' ),
dropdownParent: $( '#small-bootstrap-class-single-field' ).parent(),
} );

$( '#multiple-select-field' ).select2( {
theme: "bootstrap-5",
width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
placeholder: $( this ).data( 'placeholder' ),
closeOnSelect: false,
} );

$( '#multiple-select-clear-field' ).select2( {
theme: "bootstrap-5",
width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
placeholder: $( this ).data( 'placeholder' ),
closeOnSelect: false,
allowClear: true,
} );

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script> --}}



                                        {{-- {{ $row->fname}} {{ $row->surname}} --}}

                                    <h4>   <p class=""><span class=" text-dark">ไฟล์เอกสารสก.10:  <a href="/document3/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a></span></p> </h4>
                                      <h4>    <p class=""><span class=" text-dark">ไฟล์เอกสารสก.11:  <a href="/document3/{{ $row->filess1 }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a></span></p> </h4>
                                      <hr>
                                      <h4>   <p class=" text-dark ">รับทราบและยืนยันเวลานัดนิเทศ:</p></h4>@if ($row->Status_events === 'รอรับทราบและยืนยันเวลานัดนิเทศ')
                                    <h4>    <span class="badge badge-pill badge-warning">{{ $row->Status_events }}</span> </h4>
                                    @elseif ($row->Status_events === 'รับทราบและยืนยันเวลานัดนิเทศแล้ว')
                                    <h4>   <span class="badge badge-pill badge-success">{{ $row->Status_events}}</span> </h4>
                                    @elseif ($row->Status_events === 'ไม่ผ่าน')
                                    <h4>    <span class="badge badge-pill badge-danger">{{ $row->Status_events}}</span> </h4>
                                        @elseif ($row->Status_events === 'ขอเปลี่ยนเวลานัดนิเทศ')
                                        <h4>    <span class="badge badge-pill badge-danger">{{ $row->Status_events}}</span> </h4>
                                        @elseif ($row->Status_events === 'รับทราบขอเปลี่ยนเวลานัดนิเทศ')
                                        <h4>    <span class="badge badge-pill badge-danger">{{ $row->Status_events}}</span> </h4>
                                    @endif

                                    <h4>    <p class=" text-dark mb-0">ขอเปลี่ยนเวลานัดนิเทศ:{{ $row->appointment_time}}</p> </h4>
                                        <h4>    <p class=" text-dark mb-0">หมายเหตุ:{{ $row->annotation}}</p> </h4>

                                    </div>
                                  </div> <!-- ./card-text -->
                                  <div class="card-footer">
                                    <div class="row align-items-center justify-content-between">

                                      <div class="col-auto">
                                        <small>
                                       {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                         <td>
                                            @if ($row->Status_events === 'รอรับทราบและยืนยันเวลานัดนิเทศ')
                                            {{-- <a href="/studenthome/updateconfirm/{{$row->id}}" type="button"onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success  fa-solid fa-check fe-16">ยืนยันวันนิเทศ</a></td> --}}
                                            <a href="/studenthome/updateconfirm/{{$row->id}}"id="confirmButton" type="button" class="btn btn-outline-success  fa-solid fa-check fe-16">ยืนยันวันนิเทศ</a></td>

                                            {{-- <form method="POST"id="myForm" action="{{url('/studenthome/updateconfirm/'.$row->id)}}" enctype="multipart/form-data">
                                            <button type="button" class="btn btn-outline-success"id="confirmButton">ยืนยันวันนิเทศ</button>
                                        </form> --}}
                                            @elseif ($row->Status_events === 'รับทราบและยืนยันเวลานัดนิเทศแล้ว')



                                            @endif


                                          <td><a href="/studenthome/calendar2confirmedit/{{$row->id}}" type="button" class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">ขอเปลี่ยนเวลานัดนิเทศ</a></td>
                                        </div>

                                      <div class="col-auto">

                                      </div>
                                    </div>
                                  </div> <!-- /.card-footer -->

                              </div>@endforeach



                              <script type="text/javascript">
                                document.getElementById('confirmButton').addEventListener('click', function(event) {
                                    event.preventDefault(); // ป้องกันการลิงก์ทันที

                                    var link = this.href; // เก็บ URL จาก href ของลิงก์

                                    Swal.fire({
                                        title: 'ยืนยันข้อมูล?',
                                        text: "คุณแน่ใจหรือไม่ว่าต้องการยืนยันข้อมูลนี้",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'ใช่, ยืนยันข้อมูล!',
                                        cancelButtonText: 'ยกเลิก'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // ถ้าผู้ใช้กด 'ใช่, อนุมัติ!'
                                            window.location.href = link; // เปลี่ยนหน้าไปยัง URL ใน href ของลิงก์
                                        }
                                    })
                                });
                            </script>
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



                            </div>      </div>


                                        </div>
                                      </div>



                                      </div>
                                    </div>
                                    <main role="main" class="text-center">
                                        <div class="container-fluid">
                                      <div class="row justify-content-center">
                                        <div class="col-md-12 my-4 " >
                                       </div>

                                      </div></div></div></div>
                                    <div class="d-grid gap-2 text-center" >

                                        <h4></h4><a href="/studenthome"   class="btn btn-outline-warning " type="button">>ย้อนกลับ<</a>
                                        </div>
                                  </div>
                                <br>
                                <br>
                                <br>
                                <br>






{{-- <main role="main" class="">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          @if(session("success"))
          <div class="alert alert-success col-4">{{session('success')}}
@endif
 @if(session("success1"))
          <div class="alert alert-danger col-4">{{session('success1')}}
@endif
</div>
</div>
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">ตารางการนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษา</h5>


        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
                <div class="col">

                </div>
              </div>
              <i class=""></i>
              <div class="col col-lg-2">

              </div>
            </div>

        </div>

<br> --}}



        {{-- <table class="table table-hover text-center">
          <thead class="thead-dark ">
            <tr>
              <th>#</th>
              <th>วันเวลาการนิเทศ</th>
              <th>ชื่อสถานประกอบการ</th>
              <th>ชื่อนักศึกษา</th>
              <th>รายชื่ออาจารย์นิเทศ</th>

              <th>รับทราบและยืนยันเวลานัดนิเทศ</th>
              <th>ขอเปลี่ยนเวลานัดนิเทศ</th>



            </tr>
          </thead>
          <tbody>
            @foreach ($events as $row)
            <tr class="{{
                $row->Status_events === 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ' ? 'table-warning' : (
                    $row->Status_events === 'รับทราบและยืนยันเวลานัดนิเทศ' ? 'table-success' : (
                        $row->Status_events === 'ไม่ผ่าน' ? 'table-danger' : ''
                    )
                )
            }}">
              <td>{{$events->firstItem()+$loop->index}}</td> --}}
   <td> <?php
    // แปลงวันที่เป็น Carbon instance
   // $startDateTime = Carbon\Carbon::parse($row->start);

    // เพิ่ม 543 ปีเพื่อแปลงเป็น พ.ศ.
   // $buddhistYear = $startDateTime->addYear(543);
// กำหนด Timezone (เช่น Asia/Bangkok)
// $buddhistYear->setTimezone('Asia/Bangkok');

    // แปลงชื่อเดือนให้เป็นภาษาไทย
   // $thaiMonth = $buddhistYear->locale('th')->monthName;

    // แสดงผลลัพธ์ในรูปแบบ "วันD เดือนMMMM พ.ศ.GGGG"
    // echo $buddhistYear->isoFormat('วันdddd', $thaiMonth) . 'ที่' . $buddhistYear->isoFormat('d MMMM พ.ศ.GGGG');
   // echo $buddhistYear->isoFormat('วันdddd ที่d  MMMM พ.ศ.GGGG', $thaiMonth);
    // echo $buddhistYear->Format('วันd ที่d M พ.ศ.Y', $thaiMonth);
    // echo strftime('วัน%A ที่%d %B พ.ศ.%Y', $buddhistYear->timestamp) . " " . $thaiMonth;
    ?>
    </td>
              {{-- <td>
        </td>


        <td></td>



        <td><a href="/studenthome/calendar2confirmview/{{$row->id}}" type="button" class="btn btn-outline-primary  fa-regular fa-eye fe-16"></a>  </td>


              <td> @if ($row->Status_events === 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ')
                <span class="badge badge-pill badge-warning">{{ $row->Status_events }}</span>
            @elseif ($row->Status_events === 'รับทราบและยืนยันเวลานัดนิเทศ')
                <span class="badge badge-pill badge-success">{{ $row->Status_events}}</span>
            @elseif ($row->Status_events === 'ไม่ผ่าน')
                <span class="badge badge-pill badge-danger">{{ $row->Status_events}}</span>
            @endif
            <br><a href="/studenthome/updateconfirm/{{$row->id}}" type="button"onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success  fa-solid fa-check fe-16"></a></td> --}}


              <td>
                <?php
                // แปลงวันที่เป็น Carbon instance
               // $startDateTime = Carbon\Carbon::parse($row->Statustime);

                // เพิ่ม 543 ปีเพื่อแปลงเป็น พ.ศ.
               // $buddhistYear = $startDateTime->addYear(543);

                // แปลงชื่อเดือนให้เป็นภาษาไทย
               // $thaiMonth = $buddhistYear->locale('th')->monthName;

                // แสดงผลลัพธ์ในรูปแบบ "วันD เดือนMMMM พ.ศ.GGGG"
                //echo $buddhistYear->isoFormat('วันdddd ที่d MMMM พ.ศ.GGGG เวลาHH:mm:ss', $thaiMonth);
                ?>


                {{-- {{$row->Statustime}} --}}
                {{-- <br><br><a href="/studenthome/calendar2confirmedit/{{$row->id}}" type="button" class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16"></a></td> --}}

            </tr>

            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->







@endsection
