@extends('layouts.appstudent')

@section('content')
<title>ระบบสารสนเทศสหกิจศึกษา</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../public/icons/1.png') }}">

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
                      <a  href="/teacher/home"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong></li></a>
                      {{-- <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong></li></a>
                        <a  href="/studenthome/register">  <li class="active" id="payment"><strong>ลงทะเบียน</strong></li></a>
                          <a  href="/studenthome/informdetails"> <li class="active" id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a> --}}
                            <a  href="/teacher/calendar5confirm"> <li class="active" id="confirm"><strong>นิเทศงาน</strong></li></a>
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


                                    </div>   <br>   <br>
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
                                      <div class="alert alert-success col-4">{{session('success5')}}
                            @endif
                                      </div>
                                      </div>
                            <div class="col-md-12 my-4">
                                <div class="card shadow">
                                  <div class="card-body">


                                    {{-- <h5 class="card-title">ตารางการนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษา</h5> --}}
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-9">
                                            <p class="card-text"> <tbody>
                                            </p>
                                          </div>

                                        <div class="col-9">




                                          </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="col-md-12 my-4">
                                        <div class="card shadow">
                                          <div class="card-body">
                                        </span><div class="card-header" id="heading1">
                                            <a role="button" href="#collapses" data-toggle="collapse" data-target="#collapses" aria-expanded="false" aria-controls="collapses" class="collapsed ">
                                        <strong class=""> <h5 class="card-title"> <span>

                                        ตารางการนิเทศนักศึกษาฝึกปฏิบัติงานสหกิจศึกษา</span></h5></strong> </a>
                                        {{-- <h5 class="card-title">นิเทศงาน</h5> --}}








                              <div id="collapses" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                <br>
                            <table class="table table-hover text-center">
                                <thead class="thead-dark ">
                                  <tr>
                                    <th>#</th>
                                    <th>วันเวลานิเทศ</th>
                                    <th>นักศึกษา</th>
                                    <th>สถานประกอบการ</th>
                                    <th>อาจาร์ยนิเทศงาน</th>
                                    <th>รับทราบและยืนยันเวลานัดนิเทศ</th>
                                    <th>ขอเปลี่ยนเวลานัดนิเทศ</th>
                                    {{-- <th>ลบ</th> --}}
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $row)
                                  <tr>
                                    <td>{{$events->firstItem()+$loop->index}}</td>
                                    <td>{{$row->fname}}</td>
                                    <td></td>
                                    <td><a href="/fileinformdetails/" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
                                    <td class="text-danger"></td>
                                    <td><a href="/teacher/viewinformdetails1/" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td>

                                    {{-- <td><button type="button" class="btn btn-outline-danger fe fe-trash-2 fe-16"></td> --}}
                                  </tr>

                                  @endforeach
                                </tbody>
                              </table>
 {!!$events->links('pagination::bootstrap-5')!!}
                                <br>
                                <br>
</div>



                                <div class="text-center"style="margin-top:15px;   margin-right: 550px;">

                                </div>








                                </div> <!-- end section -->
                            </div> <!-- end section -->



                                    <div class="col-md-12 mb-4">
                                        <div class="accordion w-100" id="accordion1">
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                                     @foreach ($report_results as $row)

                                             @if ($row->Status_results === 'รอตรวจสอบ')
                                             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                         @elseif ($row->Status_results === 'ตรวจสอบแล้ว')
                                             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                         @elseif ($row->Status_results === 'ไม่ผ่าน')
                                             <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                         @endif

    @endforeach




                                                 <H2><strong> แบบบันทึกการนิเทศงานสหกิจศึกษา</strong> </a> <span class="">
                                                    @foreach ($report_results as $row)
                                                    @if ($row->Status_results === 'รอตรวจสอบ')
                                                        <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                    @elseif ($row->Status_results === 'ตรวจสอบแล้ว')
                                                        <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                    @elseif ($row->Status_results === 'ไม่ผ่าน')
                                                        <span class="text-Danger ">{{ $row->Status_results }}</span>
                                                    @else (sss)
                                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>

                                                        @endif
                                                @endforeach
                                            </H2>

                                                </span>


                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                              <div class="card-body">
                                                <a href="/teacher/addSuperviseteacher"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                             </div>
                                            <br>

                                            @foreach ($report_results as $row)

                                            <div class="col-md-3">
                                                <div class="card shadow mb-4">
                                                  <div class="card-body text-center">
                                                    <div class="avatar avatar-lg mt-4">
                                                      {{-- <a href="">
                                                        <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                      </a> --}}
                                                    </div>
                                                    <div class="card-text my-2">
                                                      <strong class="card-title my-0">วันเวลาการนิเทศ:{{ $row->namefile}} </strong>
                                                      <p class="small text-muted mb-0">สถานประกอบการ:</p>
                                                      <p class="small text-muted mb-0">นักศึกษา:</p>
                                                      <p class="small"><span class="badge badge-light text-muted">อาจารย์นิเทศ:</span></p>
                                                      {{-- <p class="small text-muted mb-0">รับทราบและยืนยันเวลานัดนิเทศ:@if ($row->Statusevents === 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ')
                                                        <span class="badge badge-pill badge-warning">{{ $row->Statusevents }}</span>
                                                    @elseif ($row->Statusevents === 'รับทราบและยืนยันเวลานัดนิเทศแล้ว')
                                                        <span class="badge badge-pill badge-success">{{ $row->Statusevents}}</span>
                                                    @elseif ($row->Statusevents === 'ไม่ผ่าน')
                                                        <span class="badge badge-pill badge-danger">{{ $row->Statusevents}}</span>
                                                    @endif</p>
                                                      <p class="small text-muted mb-0">ขอเปลี่ยนเวลานัดนิเทศ:{{ $row->Statustime}}</p> --}}

                                                    </div>
                                                  </div> <!-- ./card-text -->
                                                  <div class="card-footer">
                                                    <div class="row align-items-center justify-content-between">
                                                      <div class="col-auto">
                                                        <small>
                                                          {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                          <td><a href="../ไฟล์เอกสารประเมิน(สก.12)/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                          <td><a href="/teacher/edit2Superviseteacheruser/{{ $row->id}}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                        </div>

                                                      <div class="col-auto">

                                                      </div>
                                                    </div>
                                                  </div> <!-- /.card-footer -->
                                                </div>
                                              </div>
                                              @endforeach
                                              </div>
{{--
                                              <div class="text-center"style="margin-top:15px;   margin-right: 550px;">
                                                {!!$events->links('pagination::bootstrap-5')!!}</div>
                                            </div> --}}
                                            </div>
                                          </div>
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                <span>
                                                     @foreach ($report_results1 as $row)



                                                @if ($row->Status_results === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_results === 'ตรวจสอบแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_results === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                                @else (ss)
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                                @endif
                                            @endforeach

                                        </span>
                                        <h2><strong>แบบประเมินรายงานนักศึกษาสหกิจศึกษา</strong>

                                              </a><span>
                                                @foreach ($report_results1 as $row)
                                                @if ($row->Status_results === 'รอตรวจสอบ')
                                                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                @elseif ($row->Status_results === 'ตรวจสอบแล้ว')
                                                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                @elseif ($row->Status_results === 'ไม่ผ่าน')
                                                    <span class="text-Danger ">{{ $row->Status_results }}</span>
                                                @else ()
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                @endif
                                            @endforeach
                                        </h2>

                                        </span>
                                            </div>
                                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                              <div class="card-body"> <a href="/teacher/addSuperviseteacher1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>

                                              <br>
                                              @foreach ($report_results1 as $row)


                                              <div class="col-md-3">
                                                  <div class="card shadow mb-4">
                                                    <div class="card-body text-center">
                                                      <div class="avatar avatar-lg mt-4">
                                                        {{-- <a href="">
                                                          <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                        </a> --}}
                                                      </div>
                                                      <div class="card-text my-2">
                                                        <strong class="card-title my-0">วันเวลาการนิเทศ:{{ $row->namefile}} </strong>
                                                        <p class="small text-muted mb-0">สถานประกอบการ:</p>
                                                        <p class="small text-muted mb-0">นักศึกษา:</p>
                                                        <p class="small"><span class="badge badge-light text-muted">อาจารย์นิเทศ:</span></p>
                                                      </div>
                                                    </div> <!-- ./card-text -->
                                                    <div class="card-footer">
                                                      <div class="row align-items-center justify-content-between">
                                                        <div class="col-auto">
                                                          <small>
                                                            {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                            <td><a href="../ไฟล์เอกสารประเมิน(สก.15)/{{ $row->filess}}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                            <td><a href="/teacher/edit2Superviseteacheruser1/{{ $row->id}}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                          </div>

                                                        <div class="col-auto">

                                                        </div>
                                                      </div>
                                                    </div> <!-- /.card-footer -->
                                                  </div>
                                                </div>
                                                @endforeach

                                            </div>
                                          </div>


                                    <main role="main" class="">
                                        <div class="container-fluid">
                                      <div class="row justify-content-center">
                                        <div class="col-md-12 my-4 " >
                                       </div>


                                      </div></div></div></div> <div class="d-grid gap-2">

                                        {{-- <h2>ขั้นตอนต่อไป</h2>
                                        </div>   <a href="/studenthome/calendar2confirm"  id="show-alert" class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a> --}}
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
                $row->Statusevents === 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ' ? 'table-warning' : (
                    $row->Statusevents === 'รับทราบและยืนยันเวลานัดนิเทศ' ? 'table-success' : (
                        $row->Statusevents === 'ไม่ผ่าน' ? 'table-danger' : ''
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


              <td> @if ($row->Statusevents === 'ยังไม่ได้รับทราบและยืนยันเวลานัดนิเทศ')
                <span class="badge badge-pill badge-warning">{{ $row->Statusevents }}</span>
            @elseif ($row->Statusevents === 'รับทราบและยืนยันเวลานัดนิเทศ')
                <span class="badge badge-pill badge-success">{{ $row->Statusevents}}</span>
            @elseif ($row->Statusevents === 'ไม่ผ่าน')
                <span class="badge badge-pill badge-danger">{{ $row->Statusevents}}</span>
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
