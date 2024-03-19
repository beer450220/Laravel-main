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
                        <a  href="/studenthome">  <li class="active" id="payment"><strong>ลงทะเบียน</strong></li></a>
                          <a  href="/studenthome/informdetails"> <li class="active" id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a>
                            <a  href="/studenthome/calendar2confirm"> <li class="active" id="confirm"><strong>นิเทศงาน</strong></li></a>
                              <a  href="/studenthome/report"> <li class="active" id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a>
                    </ul>
                    <div class="progress">
                        {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title col">รายงานผลการปฏิบัติงาน:</h2>

                                </div>
                                <div class="col-4">
                                    <h2 class="steps">ขั้นตอน 4 - 4</h2>
                                </div>
                            </div><div class="col-6">
                              <div class=" alert alert-primary  " role="alert">

                                <b> ขั้นตอนที่ 4 รายงานผลการปฏิบัติงาน:</b>
                                <br>อัพโหลดเอกสารฝึกประสบการณ์
                                <br>    -รายงานโครงการ
                                <br>    -PowerPoint การนำเสนอ
                                <br>    -Onepage ของโครงการ (โปสเตอร์)
                                <br>    -รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)

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
                                    <h5 class="card-title">เพิ่มข้อมูลรายงานผลการฝึกประสบการณ์</h5>
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-9">
                                            <p class="card-text"> <tbody>
                                            </p>
                                          </div>
                                          {{-- <div class="col col-lg-2 ">
                                            <a href=""  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>

                                            <a href="/studenthome/addstudent"  class=" btn btn-outline-success">ดาวห์โหลด</a>
                                        </div> --}}
                                        <div class="col-9">
                                            {{-- <a href="/studenthome/documents1"  class=" btn btn-outline-primary">ดาวน์โหลดไฟล์เอกสาร</a> --}}
                                            {{-- <a href="/studenthome/documents1" type="button" class="btn btn-outline-primary">ดาวน์โหลดไฟล์เอกสาร</a> --}}



                                          </div>
                                        </div>

                                    </div>
                                    <br>


                                </div> <!-- end section -->
                            </div> <!-- end section -->
                                <br>
                                <br>
                                @if ($report1->isEmpty())
                                <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                  @foreach ($report1 as $row)

                                         @if ($row->Status_report === 'รอตรวจสอบ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_report === 'ไม่ผ่าน')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_report }}</span>
                                     @endif
                                     @endforeach
                                         {{--  class="circle circle-sm bg-warning-light">

 --}}



                                             <h2><strong>รายงานโครงการ</strong> <span class="">
</a>
@foreach ($report1 as $row)
@if ($row->Status_report === 'รอตรวจสอบ')
    <span class="text-warning">รอตรวจสอบเอกสาร</span>
@elseif ($row->Status_report === 'ตรวจสอบแล้ว')
    <span class="text-Success ">ตรวจสอบแล้ว</span>
@elseif ($row->Status_report=== 'ไม่ผ่าน')
    <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
@else
    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
@endif
@endforeach<span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>

<a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                            </span>


                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">  <a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                        <br>

                                        @foreach ($report1 as $row)

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
                                                      <td><a href="../ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                      <td><a href="/studenthome/editreport/{{ $row->report_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                    </div>

                                                  <div class="col-auto">

                                                  </div>
                                                </div>
                                              </div> <!-- /.card-footer -->
                                            </div>
                                          </div>@endforeach
                                          </div>

                                        </div>
                                      </div>
                                      @else
                                      @foreach ($report1 as $row)
                     @if ($row->Status_report === 'รอตรวจสอบ')
                                      <div class="col-md-12 mb-4">
                                        <div class="accordion w-100" id="accordion1">
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                      @foreach ($report1 as $row)

                                             @if ($row->Status_report === 'รอตรวจสอบ')
                                             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                         @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                         @elseif ($row->Status_report === 'ไม่ผ่าน')
                                             <span class="badge badge-pill badge-danger">{{ $row->Status_report }}</span>
                                         @endif
                                         @endforeach
                                             {{--  class="circle circle-sm bg-warning-light">

     --}}



                                                 <h2><strong>รายงานโครงการ</strong> <span class="">
    </a>
    @foreach ($report1 as $row)
    @if ($row->Status_report === 'รอตรวจสอบ')
        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
    @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
        <span class="text-Success ">ตรวจสอบแล้ว</span>
    @elseif ($row->Status_report=== 'ไม่ผ่าน')
        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
    @else
        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
    @endif
    @endforeach</h2>

    {{-- <a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                </span>


                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                              <div class="card-body">  <a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                              </div>

                                            </div>
                                          </div>



                                      @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')



                                      <div class="col-md-12 mb-4">
                                        <div class="accordion w-100" id="accordion1">
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                      @foreach ($report1 as $row)

                                             @if ($row->Status_report === 'รอตรวจสอบ')
                                             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                         @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                         @elseif ($row->Status_report === 'ไม่ผ่าน')
                                             <span class="badge badge-pill badge-danger">{{ $row->Status_report }}</span>
                                         @endif
                                         @endforeach
                                             {{--  class="circle circle-sm bg-warning-light">

     --}}



                                                 <h2><strong>รายงานโครงการ</strong> <span class="">
    </a>
    @foreach ($report1 as $row)
    @if ($row->Status_report === 'รอตรวจสอบ')
        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
    @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
        <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
    @elseif ($row->Status_report=== 'ไม่ผ่าน')
        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
    @else
        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
    @endif
    @endforeach</h2>

    {{-- <a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                                </span>


                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                              <div class="card-body">  <a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                              </div>

                                            </div>
                                          </div>
                                      @elseif ($row->Status_report === 'ไม่ผ่าน')

                                      <div class="col-md-12 mb-4">
                                        <div class="accordion w-100" id="accordion1">
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                      @foreach ($report1 as $row)

                                             @if ($row->Status_report === 'รอตรวจสอบ')
                                             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                         @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                         @elseif ($row->Status_report === 'ไม่ผ่าน')
                                             <span class="badge badge-pill badge-danger">{{ $row->Status_report }}</span>
                                         @endif
                                         @endforeach
                                             {{--  class="circle circle-sm bg-warning-light">

     --}}



                                                 <h2><strong>รายงานโครงการ</strong> <span class="">
    </a>
    @foreach ($report1 as $row)
    @if ($row->Status_report === 'รอตรวจสอบ')
        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
    @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
        <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
    @elseif ($row->Status_report=== 'ไม่ผ่าน')
        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
    @else
        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
    @endif
    @endforeach</h2>

    <a href="/studenthome/addreport2"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>
                                                </span>


                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                              <div class="card-body">  <a href="/studenthome/addreport2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                              </div>

                                            </div>
                                          </div>


                                      @endif
                                      @endforeach
                                      @endif





                                      @if ($report2->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($report2 as $row)

                                            @if ($row->Status_report === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_report === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>PowerPoint การนำเสนอ</strong>
                                          </a>
                                          @foreach ($report2 as $row)
                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                        <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                    @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                        <span class="text-Success ">ตรวจสอบแล้ว</span>
                                    @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                    @else
                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                    @endif
                                    @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                    <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>

                                          <br>

                                        @foreach ($report2 as $row)

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
                                                      <td><a href="../ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                      <td><a href="/studenthome/editreport3/{{ $row->report_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
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
                                      @foreach ($report2 as $row)
                                      @if ($row->Status_report === 'รอตรวจสอบ')
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($report2 as $row)

                                            @if ($row->Status_report === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_report === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>PowerPoint การนำเสนอ</strong>
                                          </a>
                                          @foreach ($report2 as $row)
                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                    @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                        <span class="text-Success ">ตรวจสอบแล้ว</span>
                                    @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                    @else
                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                    @endif
                                    @endforeach</h2>
                                    {{-- <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>



                                        </div>
                                      </div>



                                      @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($report2 as $row)

                                            @if ($row->Status_report === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_report === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>PowerPoint การนำเสนอ</strong>
                                          </a>
                                          @foreach ($report2 as $row)
                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                    @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                        <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                                    @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                    @else
                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                    @endif
                                    @endforeach</h2>
                                    {{-- <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>



                                        </div>
                                      </div>

                                      @elseif ($row->Status_report === 'ไม่ผ่าน')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($report2 as $row)

                                            @if ($row->Status_report === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_report === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>PowerPoint การนำเสนอ</strong>
                                          </a>
                                          @foreach ($report2 as $row)
                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                    @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                        <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                                    @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                    @else
                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                    @endif
                                    @endforeach</h2>
                                    <a href="/studenthome/addreport3"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport3"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>



                                        </div>
                                      </div>

                                      @endif
                                      @endforeach
                                      @endif




                                      @if ($report3->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($report3 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span> <h2><strong>Onepage ของโครงการ (โปสเตอร์)</strong>
                                          </a>
                                          @foreach ($report3 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="text-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                  <span class="text-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                              <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>

                                          @foreach ($report3 as $row)

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
                                                        <td><a href="../ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/editreport4/{{ $row->report_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
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
                                      @foreach ($report3 as $row)
                                      @if ($row->Status_report === 'รอตรวจสอบ')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($report3 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span> <h2><strong>Onepage ของโครงการ (โปสเตอร์)</strong>
                                          </a>
                                          @foreach ($report3 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                  <span class="text-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach </h2>
                              {{-- <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>

                                      @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($report3 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span> <h2><strong>Onepage ของโครงการ (โปสเตอร์)</strong>
                                          </a>
                                          @foreach ($report3 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                  <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach </h2>
                              {{-- <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>

                                      @elseif ($row->Status_report === 'ไม่ผ่าน')

                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($report3 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span> <h2><strong>Onepage ของโครงการ (โปสเตอร์)</strong>
                                          </a>
                                          @foreach ($report3 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                  <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach </h2>
                              <a href="/studenthome/addreport4"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport4"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>

                                      @endif
                                      @endforeach
                                      @endif


                                      @if ($report4->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
                                            <span>  @foreach ($report4 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span><h2> <strong>รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)</strong>
                                          </a>
                                          @foreach ($report4 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="text-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                  <span class="text-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                              <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>

                                          @foreach ($report4 as $row)

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
                                                        <td><a href="../ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/editreport5/{{ $row->report_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
                                                      </div>

                                                    <div class="col-auto">

                                                    </div>
                                                  </div>
                                                </div> <!-- /.card-footer -->
                                              </div>
                                            </div>@endforeach
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                    @else
                                    @foreach ($report4 as $row)
                                    @if ($row->Status_report === 'รอตรวจสอบ')
                                    <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
                                            <span>  @foreach ($report4 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span><h2> <strong>รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)</strong>
                                          </a>
                                          @foreach ($report4 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบแล้ว')
                                  <span class="text-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach </h2>
                              {{-- <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>
                                      </div>
                                    </div>


                                    @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')

                                    <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
                                            <span>  @foreach ($report4 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span><h2> <strong>รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)</strong>
                                          </a>
                                          @foreach ($report4 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                  <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach </h2>
                              {{-- <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>
                                      </div>
                                    </div>


                                    @elseif ($row->Status_report === 'ไม่ผ่าน')


                                    <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> --}}
                                            <span>  @foreach ($report4 as $row)

                                                @if ($row->Status_report === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach

                                            </span><h2> <strong>รายงานสรุปโครงการ(ไม่เกิน 5 หน้า)</strong>
                                          </a>
                                          @foreach ($report4 as $row)
                                          @if ($row->Status_report === 'รอตรวจสอบ')
                                  <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                              @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                  <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                              @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                  <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                              @else
                                  <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                              @endif
                              @endforeach </h2>
                              <a href="/studenthome/addreport5"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addreport5"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>
                                      </div>
                                    </div>

                                    @endif
                                    @endforeach
                                    @endif



                                    {{-- <main role="main" class="">
                                        <div class="container-fluid">
                                      <div class="row justify-content-center">
                                        <div class="col-md-12 my-4 " >
                                       </div>


                                      </div></div></div></div> <div class="d-grid gap-2">

                                        <h2>ขั้นตอนต่อไป</h2>
                                        </div>   <a href="/studenthome/calendar2confirm"  id="show-alert" class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>
                                  </div> --}}
                                <br>
                                <br>


{{----}} <main role="main" class="">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">

        <h5 class="card-title p-3 mb-2 bg-dark text-white">รายการผลการฝึกประสบการณ์</h5>
        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              {{-- <div class="col col-lg-2">
                <a href="/studenthome/addreport2" type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</a>
              </div> --}}
              {{-- <td><a href="../ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
                <td><a href="/studenthome/editreport/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td> --}}
                {{-- @foreach ($report as $row) --}}
            </div>

        </div>
        <br>
        <div class="container ">
            <div class="row ">

             @foreach ($report as $row)


                 <div  class="col-xs-20 col-sm-3 col-md-3 card  " style="margin-top:15px;  margin-left: 65px;">
                    <div class="card mb-4 shadow">
                    <div class="img_thumbnail productlist"><br>
                         {{-- <img src="{{ asset('/image') }}/" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;"> --}}
                         <h4 class="card-title text-center">ชื่อเอกสาร </h4><p class="text-center">{{ $row->namefile }}</p>
                         <hr>
                         <div class="caption card-body">
                            <p> สถานะ::   @if ($row->Status_report === 'รอตรวจสอบ')
                                <span class="badge rounded-pill bg-warning text-dark">{{ $row->Status_report}}</span>
                            @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')
                                <span class="badge rounded-pill bg-success text-dark ">{{ $row->Status_report}}</span>
                            @elseif ($row->Status_report === 'ไม่ผ่าน')
                                <span class="badge rounded-pill bg-danger ">{{ $row->Status_report}}</span>
                            @endif
                        </p>
                        หมายเหตุ ::   {{ $row->annotation}}
                             {{-- <h4 class="card-title">:{{ $row->namefile }}</h4> --}}

                             {{-- <p  class="card-text"><strong>หลักสูตร --}}
                                 {{-- @foreach ($registers2 as $row1)
                                 @if ($row->major_id == $row1->major_id)
                                     {{ $row1->name_major }}
                                 @endif
                             @endforeach --}}
                            {{-- </strong> </p> --}}
                            <div class="card-footer">
                            <div class="d-grid gap-2 d-md-block">
                                <p class="">
                                    @if ($row->Status_report=== 'รอตรวจสอบ')

                                    @elseif ($row->Status_report === 'ตรวจสอบเอกสารแล้ว')

                                    @elseif ($row->Status_report=== 'ไม่ผ่าน')
                                    <a href="/studenthome/editreport6/{{$row->report_id}}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "> </a>
                                    @endif


                                    {{-- @foreach ($registers as $row)
                                    @if ($row->namefile === 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)')
                                    <a href="/studenthome/edit2register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a>
                                    @elseif ($row->namefile === 'ใบสมัครงานสหกิจศึกษา(สก03)')
                                    <a href="/studenthome/edit3register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a>

                                        @elseif ($row->namefile === 'ประวัติส่วนตัว(resume)')
                                        <a href="/studenthome/edit8register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a>
                                        @else (Auth::user()->Status_acceptance)

                                    @endif
                                @endforeach --}}


                                    <a href="../ไฟล์เอกสารฝึกประสบการณ์/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a>
                              </div>
                             {{-- <p class="btn-holder text-center"><a href="/establishment/edit/" class="btn btn-primary btn-block text-center" role="button">ดูข้อมูล</a>
                                </p><br> --}}
                         </div>    </div>
                     </div>
                 </div>    </div>
             @endforeach





{{-- เพิ่มข้อมูล --}}
<div class="col-md-4 mb-4">




  <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content ">
        <div class="modal-header ">
          <h5 class="modal-title text center" id="varyModalLabel">เพิ่มข้อมูล</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">


          <form method="POST" action="{{ route('addreport') }}"enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            {{-- <div class="alert alert-danger"> --}}

                <ul>
                    @foreach ($errors->all() as $error)
                        {{-- <li>{{ $error }}</li> --}}
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
              {{-- <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                <input type="text" class="form-control" name="establishment" >
              </div>  --}}
              {{-- @error('establishment')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror --}}


          <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">รายงานโครงการ</label>
            <div class="custom-file mb-6">

              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
              <input type="file" class=" form-control" name="projects" id="validatedCustomFile" >

          </div>
          </div>
          <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">การนำเสนอ</label>
            <div class="custom-file mb-6">
              <input type="file" class="custom-file-input" name="presentation" id="validatedCustomFile1" >
              <label class="custom-file-label" for="validatedCustomFile1">Choose file...</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
          </div>
          </div>

              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">โปสเตอร์</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="poster" id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
              </div>
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">รายงานสรุปโครงการ</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="projectsummary" id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
            </div>
            <br>
            {{-- <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div> --}}

              {{-- <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">รูปหน่วยงาน</label>
                <input type="file" class="form-control"name="filess" placeholder="First name" aria-label="First name">--}}
              {{-- </div>  --}}

            <div class="row">
              <div class="col-md-4">

                </div>
              </div>
              {{-- @error('')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror --}}
            </div>
        </div>

        <div class="modal-footer">
          <button type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>
          <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
        </div></form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

@endsection
