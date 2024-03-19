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
                            <a  href="/studenthome/calendar2confirm"> <li id="confirm"><strong>นิเทศงาน</strong></li></a>
                              <a  href="/studenthome/report"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a>
                    </ul>
                    <div class="progress">
                        {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title col">รายงานสถานะการเข้าปฏิบัติงาน:</h2>

                                </div>
                                <div class="col-4">
                                    <h2 class="steps">ขั้นตอน 2 - 4</h2>
                                </div>
                            </div><div class="col-6">
                              <div class=" alert alert-primary  " role="alert">

                                   <b> ขั้นตอนที่ 2 รายงานสถานะการเข้าปฏิบัติงาน:</b> ให้อัพโหลดไฟล์เอกสารให้เรียบร้อย
                                      <br>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07) <b>ภายในสัปดาห์แรก</b>
                                      <br>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08) <b>ภายในสัปดาห์ที่สอง</b>
                                      <br>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)<b>ภายในสัปดาห์ที่สาม</b>
                                      <br>

                                      {{-- <br>  <a href="/studenthome/calendar2confirm"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป --}}


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
                                    <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5>
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
                                        <p>
                                            <a class="btn btn-outline-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                ปฏิทินสหกิจ
                                            </a>
                                            <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                                ดาวน์โหลดไฟล์เอกสาร
                                            </button>
                                            <hr>
                                          </p>
                                          <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <table class="table table-hover">
                                                    <thead class="thead-dark">
                                                      <tr>
                                                          <th></th>
                                                            <th>ปฏิทินสหกิจ</th>


                                                        <th></th>


                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach ($activity as $row)
                                                      <tr>
                                                        <td class="col-1 text-center">{{ $activity->firstItem() + $loop->index }}.</td>
                                                        <td><a class="text-dark  "style="text-decoration: none;" href="/กำหนดการปฏิทิน/{{ $row->filess }}" target="_blank">{{$row->title}}  {{$row->term}} {{$row->year}}</a></td>



                                                       <td></td>
                                  {{-- download --}}<i class=" "></i>
                                                      </tr>
                                                      @endforeach

                                                    </tbody>
                                                  </table>
                                            </div>
                                          </div>

                                          <div class="collapse" id="collapseExample2">
                                            <div class="card card-body">
                                                <table class="table table-hover">
                                                    <thead class="thead-dark">
                                                        <tr class="">
                                                            <th>#</th>
                                                            <th>ชื่อฟอร์ม</th>
                                                            <th class="text-center">ดาวน์โหลด</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                                                                                                                <tr>
                                                                <th scope="row">1</th>
                                                                    <td>สก. 01 แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                                                    <td class="text-center"><a href="ไฟล์เอกสารดาวน์โหลด/สก.01.pdf" target="_blank"> <i class="fa fa-download" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                                                                    <tr>
                                                                <th scope="row">2</th>
                                                                    <td>สก.03 ใบสมัครงานสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                                                    <td class="text-center"> <a href="ไฟล์เอกสารดาวน์โหลด/สก.03.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                                                                    <tr>
                                                                <th scope="row">3</th>
                                                                    <td>สก 04 แบบคำขอหนักงสือขอความอนุเคราะห์รับนักศึกษา (สำหรับนักศึกษา)</td>
                                                                    <td class="text-center"> <a href="ไฟล์เอกสารดาวน์โหลด/สก.04.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                                                                    <tr>
                                                                <th scope="row">4</th>
                                                                    <td>สก 07 แบบแจ้งรายละเอียดการปฏิบัติงาน (สำหรับนักศึกษา)</td>
                                                                    <td class="text-center"> <a href="ไฟล์เอกสารดาวน์โหลด/สก.07.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                                                                    <tr>
                                                                <th scope="row">5</th>
                                                                    <td>สก 08 แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                                                    <td class="text-center"> <a href="ไฟล์เอกสารดาวน์โหลด/สก.01.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                                                                                    <tr>
                                                                <th scope="row">6</th>
                                                                    <td>สก 09 แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา (สำหรับนักศึกษา)</td>
                                                                    <td class="text-center"> <a href="ไฟล์เอกสารดาวน์โหลด/สก.01.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                                                </tr>
                                                    </tbody>
                                                  </table>
                                            </div>
                                          </div>
        </div>


                                                    </div>
                                            </div>

                                        </div>

                                    <br>


                                </div> <!-- end section -->
                            </div> <!-- end section -->
                                <br>
                                <br>
                                @if ($informdetails1->isEmpty())
                                <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                  @foreach ($informdetails1 as $row)

                                         @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails }}</span>
                                     @endif
                                         {{--  class="circle circle-sm bg-warning-light">

 --}}@endforeach



                                           <H2>  <strong>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</strong> <span class="">
                                               </a> @foreach ($informdetails1 as $row)
                                                @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                                    <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                                @else
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                @endif
                                            @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></H2>

                                            <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>

                                            </span>


                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">  <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>
                                          @foreach ($informdetails1 as $row)


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
                                                        <td><a href="../fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/editinformdetails/{{ $row->informdetails_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
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
                                      @foreach ($informdetails1 as $row)
   @if ($row->Status_informdetails === 'รอตรวจสอบ')
   <div class="col-md-12 mb-4">
    <div class="accordion w-100" id="accordion1">
      <div class="card shadow">
        <div class="card-header" id="heading1">
          {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
  @foreach ($informdetails1 as $row)

         @if ($row->Status_informdetails === 'รอตรวจสอบ')
         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
     @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
     @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
         <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails }}</span>
     @endif
         {{--  class="circle circle-sm bg-warning-light">

--}}@endforeach



           <H2>  <strong>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</strong> <span class="">
               </a> @foreach ($informdetails1 as $row)
                @if ($row->Status_informdetails === 'รอตรวจสอบ')
                    <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                    <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                @else
                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                @endif
            @endforeach</H2>

            {{-- <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}

            </span>


        </div>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
          <div class="card-body">  <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
          <br>

          </div>

        </div>
      </div>

                                      @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')

                                      <div class="col-md-12 mb-4">
                                        <div class="accordion w-100" id="accordion1">
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                      @foreach ($informdetails1 as $row)

                                             @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                         @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                         @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                             <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails }}</span>
                                         @endif
                                             {{--  class="circle circle-sm bg-warning-light">

                                    --}}@endforeach



                                               <H2>  <strong>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</strong> <span class="">
                                                   </a> @foreach ($informdetails1 as $row)
                                                    @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                                        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                                    @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                                        <span class="badge badge-pill badge-success ">ตรวจสอบเอกสารแล้ว</span>
                                                    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                                        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                                    @else
                                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                    @endif
                                                @endforeach</H2>

                                                {{-- <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}

                                                </span>


                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                              <div class="card-body">  <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                              <br>

                                              </div>

                                            </div>
                                          </div>

                    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                      <div class="col-md-12 mb-4">
                                        <div class="accordion w-100" id="accordion1">
                                          <div class="card shadow">
                                            <div class="card-header" id="heading1">
                                              {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                      @foreach ($informdetails1 as $row)

                                             @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                             <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                         @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                             <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                         @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                             <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails }}</span>
                                         @endif
                                             {{--  class="circle circle-sm bg-warning-light">

                                    --}}@endforeach



                                               <H2>  <strong>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</strong> <span class="">
                                                   </a> @foreach ($informdetails1 as $row)
                                                    @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                                        <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                                    @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                                        <span class="badge badge-pill badge-success ">ตรวจสอบเอกสารแล้ว</span>
                                                    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                                        <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                                    @else
                                                        <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                    @endif
                                                @endforeach</H2>

                                                <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>

                                                </span>


                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                              <div class="card-body">  <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                              <br>

                                              </div>

                                            </div>
                                          </div>
                                      @endif
                                      @endforeach
                                      @endif





                                      @if ($informdetails2->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($informdetails2 as $row)

                                            @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</strong>
                                          </a>
                                          @foreach ($informdetails2 as $row)
                                          @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                      <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>

                                          <br>
                                          @foreach ($informdetails2 as $row)


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
                                                        <td><a href="../fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/editinformdetails1/{{ $row->informdetails_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
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
                                    @foreach ($informdetails2 as $row)
 @if ($row->Status_informdetails === 'รอตรวจสอบ')

 <div class="card shadow">
    <div class="card-header" id="heading1">
      {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
        <span>  @foreach ($informdetails2 as $row)

        @if ($row->Status_informdetails === 'รอตรวจสอบ')
        <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
    @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
        <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
        <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
    @endif
    @endforeach

</span><h2><strong>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</strong>
      </a>
      @foreach ($informdetails2 as $row)
      @if ($row->Status_informdetails === 'รอตรวจสอบ')
          <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
      @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
          <span class="text-Success ">ตรวจสอบแล้ว</span>
      @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
          <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
      @else
          <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
      @endif
  @endforeach </h2>
  {{-- <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
    </div>
    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
      <div class="card-body"> <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>


    </div>

</div>


                                    @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')

                                    <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($informdetails2 as $row)

                                            @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</strong>
                                          </a>
                                          @foreach ($informdetails2 as $row)
                                          @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                              <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                              <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach </h2>
                                      {{-- <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>


                                        </div>

                                    </div>


                                    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')

                                    <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> --}}
                                            <span>  @foreach ($informdetails2 as $row)

                                            @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                        @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                            <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                        @endif
                                        @endforeach

                                    </span><h2><strong>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</strong>
                                          </a>
                                          @foreach ($informdetails2 as $row)
                                          @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                              <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                              <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach </h2>
                                      <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addinformdetail1"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a></div>


                                        </div>

                                    </div>

                                    @endif
                                    @endforeach
                                    @endif





                                    @if ($informdetails3->isEmpty())
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($informdetails3 as $row)

                                                @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach


                                            </span> <h2><strong>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</strong>
                                          </a>
                                          @foreach ($informdetails3 as $row)
                                          @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                              <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                              <span class="text-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach<span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span></h2>
                                      <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>
                                          <br>
                                          @foreach ($informdetails3 as $row)


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
                                                        <td><a href="../fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                                                        <td><a href="/studenthome/editinformdetails2/{{ $row->informdetails_id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
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
                                      @foreach ($informdetails3 as $row)
   @if ($row->Status_informdetails === 'รอตรวจสอบ')

   <div class="card shadow">
   <div class="card-header" id="heading1">
     {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
       <span>  @foreach ($informdetails3 as $row)

           @if ($row->Status_informdetails === 'รอตรวจสอบ')
           <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
       @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
           <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
       @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
           <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
       @endif
       @endforeach


       </span> <h2><strong>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</strong>
     </a>
     @foreach ($informdetails3 as $row)
     @if ($row->Status_informdetails === 'รอตรวจสอบ')
         <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
     @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
         <span class="text-Success ">ตรวจสอบแล้ว</span>
     @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
         <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
     @else
         <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
     @endif
 @endforeach</h2>
 {{-- <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
   </div>
   <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
     <div class="card-body"> <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

   </div>
 </div>


                                      @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')


                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($informdetails3 as $row)

                                                @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach


                                            </span> <h2><strong>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</strong>
                                          </a>
                                          @foreach ($informdetails3 as $row)
                                          @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                              <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                              <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</h2>
                                      {{-- <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>
                                      @elseif ($row->Status_informdetails === 'ไม่ผ่าน')




                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"> --}}
                                            <span>  @foreach ($informdetails3 as $row)

                                                @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                                <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                            @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                                <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                                <span class="circle circle-sm bg-danger-light "><i class="fe fe-16 fe-x-circle text-white "></i></span>
                                            @endif
                                            @endforeach


                                            </span> <h2><strong>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</strong>
                                          </a>
                                          @foreach ($informdetails3 as $row)
                                          @if ($row->Status_informdetails === 'รอตรวจสอบ')
                                              <span class="badge badge-pill badge-warning">รอตรวจสอบเอกสาร</span>
                                          @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                                              <span class="badge badge-pill badge-Success ">ตรวจสอบแล้ว</span>
                                          @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                                              <span class="text-Danger ">ไม่ผ่าน&nbsp;&nbsp;{{$row->annotation}}</span>
                                          @else
                                              <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                          @endif
                                      @endforeach</h2>
                                      <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">ลงทะเบียนเอกสารใหม่</a>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/addinformdetail2"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> </div>

                                        </div>
                                      </div>
                                      @endif
                                      @endforeach
                                      @endif

                                      </div>



{{----}} <main role="main" class="">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          {{-- @if(session("success"))
          <div class="alert alert-success col-4">{{session('success')}}
@endif
 @if(session("success1"))
          <div class="alert alert-danger col-4">{{session('success1')}}
@endif--}}
</div>
</div>
<div class="col-md-12 my-4">
    <div class="card shadow  ">
        <div class="card-body">
          <h5 class="card-title p-3 mb-2 bg-dark text-white">รายการแจ้งรายละเอียดการปฎิบัติงาน</h5>
          <div class="container">
              <div class="row">
                <div class="col-9">
                  <p class="card-text"> <tbody>
                  </p>
                </div>

        {{-- @foreach ($informdetails as $row)    @endforeach --}}
        {{-- <td><a href="/fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
        <td><a href="/studenthome/editinformdetails/{{ $row->informdetails_id}}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td> --}}

              {{-- <div class="d-grid gap-2 d-md-block">
                <a href="/studenthome/documents1" type="button" class="btn btn-outline-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">ดาวน์โหลดไฟล์เอกสาร</a>

                <a href="/studenthome/addinformdetail"  class=" btn btn-outline-success">เพิ่มข้อมูล</a>

              </div> --}}
            </div>

        </div>

<br>



<div class="container ">
    <div class="row ">

     @foreach ($informdetails as $row)


         <div  class="col-xs-20 col-sm-3 col-md-3 card  " style="margin-top:15px;  margin-left: 65px;">
            <div class="card mb-4 shadow">
            <div class="img_thumbnail productlist"><br>
                 {{-- <img src="{{ asset('/image') }}/" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;"> --}}
                 <h4 class="card-title text-center">ชื่อเอกสาร </h4>  <p class="text-center">{{ $row->namefile }}</p>
                 <hr>
                 <div class="caption card-body">
                    <p> สถานะ::   @if ($row->Status_informdetails === 'รอตรวจสอบ')
                        <span class="badge rounded-pill bg-warning text-dark">{{ $row->Status_informdetails}}</span>
                    @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')
                        <span class="badge rounded-pill bg-success text-dark ">{{ $row->Status_informdetails}}</span>
                    @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                        <span class="badge rounded-pill bg-danger ">{{ $row->Status_informdetails}}</span>
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
                            @if ($row->Status_informdetails === 'รอตรวจสอบ')

                            @elseif ($row->Status_informdetails === 'ตรวจสอบเอกสารแล้ว')

                            @elseif ($row->Status_informdetails === 'ไม่ผ่าน')
                            <a href="/studenthome/editinformdetails0/{{$row->informdetails_id}}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "> </a>
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


                            <a href="../fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a>
                      </div>
                     {{-- <p class="btn-holder text-center"><a href="/establishment/edit/" class="btn btn-primary btn-block text-center" role="button">ดูข้อมูล</a>
                        </p><br> --}}
                 </div>    </div>
             </div>
         </div>   </div>
     @endforeach
    </div>
</div>
<br>
<main role="main" class="text-center">
    <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12 my-4 " >
   </div>

  </div></div></div></div>  <br>
<div class="d-grid gap-2 text-center" >

    <h4>ขั้นตอนต่อไป</h4><a href="/studenthome/calendar2confirm"   class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>
    </div>
    {{-- id="show-alert" --}}
  <br>
<br>
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


          <form method="POST" action="{{ route('addinformdetails') }}"enctype="multipart/form-data">
            @csrf
            @if ($errors->any())


                <ul>
                    @foreach ($errors->all() as $error)

                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                <input type="text" class="form-control" name="establishment" >
              </div>
              @error('establishment')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror

              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="files" id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
            </div>
            <br>


            <div class="row">
              <div class="col-md-4">

                </div>
              </div>

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
