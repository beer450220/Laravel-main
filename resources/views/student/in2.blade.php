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
                                    <h2 class="fs-title col">ตรวจสอบเอกสาร:{{ Auth::user()->username }} {{ Auth::user()->fname }}</h2>

                                </div>
                                <div class="col-5">
                                    {{-- <i class="fa-solid fa-check"></i>มีเอกสารแล้ว  <i class="fa-solid fa-xmark"></i>ไม่มีเอกสาร --}}
                                    {{-- <h2 class="steps">ขั้นตอน 2 - 2</h2> --}}
                                </div>
                            </div><div class="col-6">
                              {{-- <div class=" alert alert-primary  " role="alert"> --}}

                                   {{-- <b> ขั้นตอนที่ 2 เอกสารปฏิบัติงานนักศึกษา:</b> ให้อัพโหลดไฟล์เอกสารให้เรียบร้อย
                                      <br>แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07) <b>ภายในสัปดาห์แรก</b>
                                      <br>แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08) <b>ภายในสัปดาห์ที่สอง</b>
                                      <br>แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)<b>ภายในสัปดาห์ที่สาม</b>
                                      <br> --}}

                                      {{-- <br>  <a href="/studenthome/calendar2confirm"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป --}}


                                    {{-- </div> --}}

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
                            {{-- <div class="col-md-12 my-4">
                                <div class="card shadow">
                                  <div class="card-body"> --}}
                                    {{-- <h5 class="card-title">เอกสารแจ้งรายละเอียดการปฎิบัติงาน</h5> --}}
                                    {{-- <div class="container">
                                        <div class="row">
                                          <div class="col-9">
                                            <p class="card-text"> <tbody>
                                            </p>
                                          </div> --}}
                                          {{-- <div class="col col-lg-2 ">
                                            <a href=""  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>

                                            <a href="/studenthome/addstudent"  class=" btn btn-outline-success">ดาวห์โหลด</a>
                                        </div> --}}



                                                    {{-- </div>
                                            </div>

                                        </div> --}}





   {{-- @foreach ($informdetails1 as $row) --}}
                                {{-- @if ($informdetails1->isEmpty()) --}}
                                <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                  {{-- @foreach ($informdetails1 as $row)

                                         @if ($row->Status_informdetails === 'รออนุมัติ')
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails }}</span>
                                     @endif
                                      @endforeach --}}



                                           <H2>  <strong></strong> <span class=""></H2>

                                               {{-- @foreach ($informdetails1 as $row)
                                                @if ($row->Status_informdetails === 'รออนุมัติ')
                                                    <span class="text-warning">รออนุมัติเอกสาร</span>
                                                @elseif ($row->Status_informdetails === 'ตรวจสอบแล้ว')
                                                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
                                                    <span class="text-Danger ">ไม่อนุมัติ&nbsp;&nbsp;{{$row->annotation}}</span>
                                                @else
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>
                                                @endif
                                            @endforeach <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                                            <table class="table table-hover">
                                                <thead class="thead-dark">
                                                  <tr>

                                                    {{-- <th>ชื่อเอกสาร</th> --}}
                                                    <th>ชื่อเอกสาร</th>
                                                    {{-- <th>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</th>
                                                    <th>ใบสมัครงานสหกิจศึกษา(สก03)</th> --}}
                                                     <th>สถานะ</th>
                                                     {{-- <th>หมายเหตุ</th> --}}

                                                    {{-- <th style="width:10%">ไฟล์เอกสาร</th>

                                                    <th style="width:10%">ดูข้อมูล</th> --}}
                                                    {{-- <th style="width:10%">ลบ</th> --}}
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  {{-- @foreach ($registers1 as $row) --}}
                                                  <tr>
                                                    {{-- <td class="col-1 text center">{{$registers->firstItem()+$loop->index}}</td> --}}
                                                {{-- <td >{{$row->fname}}</td> --}}
   {{-- <td >{{$row->namefile}} </td> --}}
   <tr>


  {{-- @endforeach --}}
  <td >แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</td>


<td >  @if ($registers1->isEmpty())



    <span class="badge badge-pill badge-danger">
        {{-- <i class="fa-solid fa-xmark"></i> --}}
        ไม่มีเอกสาร
    </span>
  @else

  @foreach ($registers1 as $row)
  @if ($row->Status_registers === 'รออนุมัติ')
                                                        <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                                                    @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                                                        <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
                                                    @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                                                        <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
                                                    @endif

                                                            {{-- @if ($row->namefile === 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)')
                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                            @else()
                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                        @endif --}}
                                                        @endforeach    @endif
</td>
{{-- <td >
    @foreach ($registers1 as $row)
    {{$row->annotation}} </td>@endforeach --}}
<tr>

{{-- <th scope="row">2</th> --}}
<th >ใบสมัครงานสหกิจศึกษา(สก03)</th>

<td >  @if ($registers2->isEmpty())
    <span class="badge badge-pill badge-danger">
        {{-- <i class="fa-solid fa-xmark"></i> --}}
        ไม่มีเอกสาร
    </span>
      @else

      @foreach ($registers2 as $row)
      @if ($row->Status_registers === 'รออนุมัติ')
      <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
      <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
      <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
  @endif
                                                                {{-- @if ($row->namefile === 'ใบสมัครงานสหกิจศึกษา(สก03)')
                                                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                @else()
                                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                            @endif --}}
                                                            @endforeach    @endif
    </td>
    {{-- <td >{{$row->annotation}} </td> --}}
    <tr>

    <th >แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)</th>

    <td >  @if ($registers3->isEmpty())
        <span class="badge badge-pill badge-danger">
            {{-- <i class="fa-solid fa-xmark"></i> --}}
            ไม่มีเอกสาร
        </span>
          @else

          @foreach ($registers3 as $row)
          @if ($row->Status_registers === 'รออนุมัติ')
          <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
          <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
          <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
      @endif
                                                                    {{-- @if ($row->namefile === 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)')
                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                    @else()
                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                @endif --}}
                                                                @endforeach    @endif
        </td>
        {{-- <td >{{$row->annotation}} </td> --}}
        <tr>

        <th >บัตรประชาชน</th>
        <td >  @if ($registers4->isEmpty())
            <span class="badge badge-pill badge-danger">
                {{-- <i class="fa-solid fa-xmark"></i> --}}
                ไม่มีเอกสาร
            </span>
              @else

              @foreach ($registers4 as $row)
              @if ($row->Status_registers === 'รออนุมัติ')
              <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
          @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
              <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
          @elseif ($row->Status_registers === 'ไม่อนุมัติ')
              <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
          @endif
                                                                        {{-- @if ($row->namefile === 'บัตรประชาชน')
                                                                        <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                        @else()
                                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                    @endif --}}
                                                                    @endforeach    @endif
            </td>

            {{-- <td >{{$row->annotation}} </td> --}}

            <tr>

            <th >บัตรนักศึกษา</th>
            <td >  @if ($registers5->isEmpty())
                <span class="badge badge-pill badge-danger">
                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                    ไม่มีเอกสาร
                </span>
                  @else

                  @foreach ($registers5 as $row)
                  @if ($row->Status_registers === 'รออนุมัติ')
                  <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
              @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                  <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
              @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                  <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
              @endif
                                                                            {{-- @if ($row->namefile === 'บัตรนักศึกษา')
                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                            @else()
                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                        @endif --}}
                                                                        @endforeach    @endif
                </td>
                {{-- <td >{{$row->annotation}} </td> --}}
                <tr>

                <th >ผลการเรียน</th>
                <td >  @if ($registers6->isEmpty())
                    <span class="badge badge-pill badge-danger">
                        {{-- <i class="fa-solid fa-xmark"></i> --}}
                        ไม่มีเอกสาร
                    </span>
                      @else

                      @foreach ($registers6 as $row)
                      @if ($row->Status_registers === 'รออนุมัติ')
                      <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                      <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
                  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                      <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
                  @endif
                                                                                {{-- @if ($row->namefile === 'ผลการเรียน')
                                                                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                @else()
                                                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                            @endif --}}
                                                                            @endforeach    @endif
                    </td>
                    {{-- <td >{{$row->annotation}} </td> --}}

                    <tr>

                    <th >ประวัติส่วนตัว(resume)</th>
                    <td >  @if ($registers7->isEmpty())
                        <span class="badge badge-pill badge-danger">
                            {{-- <i class="fa-solid fa-xmark"></i> --}}
                            ไม่มีเอกสาร
                        </span>
                          @else

                          @foreach ($registers7 as $row)
                          @if ($row->Status_registers === 'รออนุมัติ')
                          <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                      @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                          <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
                      @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                          <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
                      @endif
                                                                                    {{-- @if ($row->namefile === 'ประวัติส่วนตัว(resume)')
                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                    @else()
                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                @endif --}}
                                                                                @endforeach    @endif
                        </td>
                        {{-- <td >{{$row->annotation}} </td> --}}
                        <tr>

                        <th >แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)</th>
                        <td >  @if ($registers08->isEmpty())
                            <span class="badge badge-pill badge-danger">
                                {{-- <i class="fa-solid fa-xmark"></i> --}}
                                ไม่มีเอกสาร
                            </span>
                              @else

                              @foreach ($registers08 as $row)
                              @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษาแล้ว')
                              <span class="badge badge-pill badge-warning">{{ $row->Status_acceptance }}</span>
                          @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                              <span class="badge badge-pill badge-success">{{ $row->Status_acceptance}}</span>
                          @elseif ($row->Status_acceptance === 'ไม่อนุมัติ')
                              <span class="badge badge-pill badge-danger">{{ $row->Status_acceptance}}</span>
                          @endif
                                                                                        {{-- @if ($row->namefile === 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
                                                                                        <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                        @else()
                                                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                    @endif --}}
                                                                                    @endforeach    @endif
                            </td>


                            {{-- <td >{{$row->annotation}} </td> --}}
                        <tr>
                            <th >แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)</th>
                            <td >  @if ($registers008->isEmpty())
                                <span class="badge badge-pill badge-danger">
                                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                                    ไม่มีเอกสาร
                                </span>
                                  @else

                                  @foreach ($registers008 as $row)
                                  @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษาแล้ว')
                                  <span class="badge badge-pill badge-warning">{{ $row->Status_acceptance }}</span>
                              @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                                  <span class="badge badge-pill badge-success">{{ $row->Status_acceptance}}</span>
                              @elseif ($row->Status_acceptance === 'ไม่อนุมัติ')
                                  <span class="badge badge-pill badge-danger">{{ $row->Status_acceptance}}</span>
                              @endif
                                                                                            {{-- @if ($row->namefile === 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')
                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                            @else()
                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                        @endif --}}
                                                                                        @endforeach    @endif
                                </td>


                                {{-- <td >{{$row->annotation}} </td> --}}
                            <tr>
                                <th >หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)</th>
                                <td >  @if ($registers0008->isEmpty())
                                    <span class="badge badge-pill badge-danger">
                                        {{-- <i class="fa-solid fa-xmark"></i> --}}
                                        ไม่มีเอกสาร
                                    </span>
                                      @else

                                      @foreach ($registers0008 as $row)
                                      @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษาแล้ว')
                                      <span class="badge badge-pill badge-warning">{{ $row->Status_acceptance }}</span>
                                  @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                                      <span class="badge badge-pill badge-success">{{ $row->Status_acceptance}}</span>
                                  @elseif ($row->Status_acceptance === 'ไม่อนุมัติ')
                                      <span class="badge badge-pill badge-danger">{{ $row->Status_acceptance}}</span>
                                  @endif
                                                                                                {{-- @if ($row->namefile === 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')
                                                                                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                @else()
                                                                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                            @endif --}}
                                                                                            @endforeach    @endif
                                    </td>


                                    {{-- <td >{{$row->annotation}} </td> --}}
                                <tr>

                        <th >แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</th>
                        <td >  @if ($registers8->isEmpty())
                            <span class="badge badge-pill badge-danger">
                                {{-- <i class="fa-solid fa-xmark"></i> --}}
                                ไม่มีเอกสาร
                            </span>
                              @else

                              @foreach ($registers8 as $row)
                              @if ($row->Status_informdetails	 === 'รออนุมัติ')
                              <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails	 }}</span>
                          @elseif ($row->Status_informdetails	 === 'อนุมัติเอกสารแล้ว')
                              <span class="badge badge-pill badge-success">{{ $row->Status_informdetails	}}</span>
                          @elseif ($row->Status_informdetails	 === 'ไม่อนุมัติ')
                              <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails	}}</span>
                          @endif
                                                                                        {{-- @if ($row->namefile === 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
                                                                                        <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                        @else()
                                                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                    @endif --}}
                                                                                    @endforeach    @endif
                            </td>
                            {{-- <td >{{$row->annotation}} </td> --}}


                            <tr>

                            <th >แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</th>
                            <td >  @if ($registers9->isEmpty())
                                <span class="badge badge-pill badge-danger">
                                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                                    ไม่มีเอกสาร
                                </span>
                                  @else

                                  @foreach ($registers9 as $row)
                                  @if ($row->Status_informdetails	 === 'รออนุมัติ')
                                  <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails	 }}</span>
                              @elseif ($row->Status_informdetails	 === 'อนุมัติเอกสารแล้ว')
                                  <span class="badge badge-pill badge-success">{{ $row->Status_informdetails	}}</span>
                              @elseif ($row->Status_informdetails	 === 'ไม่อนุมัติ')
                                  <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails	}}</span>
                              @endif
                                                                                            {{-- @if ($row->namefile === 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                            @else()
                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                        @endif --}}
                                                                                        @endforeach    @endif
                                </td>
                                {{-- <td >{{$row->annotation}} </td> --}}
                                <tr>

                                <th >แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</th>
                                <td >  @if ($registers10->isEmpty())
                                    <span class="badge badge-pill badge-danger">
                                        {{-- <i class="fa-solid fa-xmark"></i> --}}
                                        ไม่มีเอกสาร
                                    </span>
                                      @else

                                      @foreach ($registers10 as $row)
                                      @if ($row->Status_informdetails	 === 'รออนุมัติ')
                                      <span class="badge badge-pill badge-warning">{{ $row->Status_informdetails	 }}</span>
                                  @elseif ($row->Status_informdetails	 === 'อนุมัติเอกสารแล้ว')
                                      <span class="badge badge-pill badge-success">{{ $row->Status_informdetails	}}</span>
                                  @elseif ($row->Status_informdetails	 === 'ไม่อนุมัติ')
                                      <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails	}}</span>
                                  @endif
                                                                                                {{-- @if ($row->namefile === 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
                                                                                                <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                @else()
                                                                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                            @endif --}}
                                                                                            @endforeach    @endif
                                    </td>
                                    {{-- <td >{{$row->annotation}} </td> --}}
                                    <tr>

                                    <th > แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา(สก.10)</th>
                                    <td >  @if ($registers12->isEmpty())
                                        <span class="badge badge-pill badge-danger">
                                            {{-- <i class="fa-solid fa-xmark"></i> --}}
                                            ไม่มีเอกสาร
                                        </span>
                                          @else

                                          @foreach ($registers12 as $row)
                                          @if ($row->Status_events	 === 'รอรับทราบและยืนยันเวลานัดนิเทศ')
                                          <span class="badge badge-pill badge-warning">{{ $row->Status_events	 }}</span>
                                      @elseif ($row->Status_events	 === 'รับทราบและยืนยันเวลานัดแล้ว')
                                          <span class="badge badge-pill badge-success">{{ $row->Status_events	}}</span>
                                      @elseif ($row->Status_events	 === 'ไม่อนุมัติ')
                                          <span class="badge badge-pill badge-danger">{{ $row->Status_events	}}</span>
                                      @endif
                                                                                                    {{-- @if ($row->namefiles === 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
                                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                    @else()
                                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                @endif --}}
                                                                                                @endforeach    @endif
                                        </td>
                                        {{-- <td >{{$row->appointment_time}} </td> --}}
                                        <tr>
                                            <th > แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา(สก.11)</th>
                                            <td >  @if ($registers012->isEmpty())
                                                <span class="badge badge-pill badge-danger">
                                                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                    ไม่มีเอกสาร
                                                </span>
                                                  @else

                                                  @foreach ($registers012 as $row)
                                                  @if ($row->Status_events	 === 'รอรับทราบและยืนยันเวลานัดนิเทศ')
                                                  <span class="badge badge-pill badge-warning">{{ $row->Status_events	 }}</span>
                                              @elseif ($row->Status_events	 === 'รับทราบและยืนยันเวลานัดแล้ว')
                                                  <span class="badge badge-pill badge-success">{{ $row->Status_events	}}</span>
                                              @elseif ($row->Status_events	 === 'ไม่อนุมัติ')
                                                  <span class="badge badge-pill badge-danger">{{ $row->Status_events	}}</span>
                                              @endif
                                                                                                            {{-- @if ($row->namefiles1 === 'สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา')
                                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                            @else()
                                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                        @endif --}}
                                                                                                        @endforeach    @endif
                                                </td>
                                                {{-- <td >{{$row->appointment_time}} </td> --}}
                                                <tr>
                                        <th > แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)</th>
                                        <td >  @if ($registers13->isEmpty())
                                            <span class="badge badge-pill badge-danger">
                                                {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                ไม่มีเอกสาร
                                            </span>
                                              @else

                                              @foreach ($registers13 as $row)
                                              @if ( Auth::user()->id === $row->user_id)
                                              sss
                                              {{-- <span class="badge badge-pill badge-warning">{{ $row->Status_supervision	 }}</span> --}}
                                          {{-- @elseif ($row->Status_supervision	 === 'ประเมินผลแล้ว')
                                              <span class="badge badge-pill badge-success">{{ $row->Status_supervision	}}</span>
                                          @elseif ($row->Status_supervision	 === 'ไม่อนุมัติ')
                                              <span class="badge badge-pill badge-danger">{{ $row->Status_supervision	}}</span> --}}
                                          @endif
                                                                                                        @if ($row->namefile === 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
                                                                                                        <span class="badge badge-pill badge-success">
                                                                                                            {{-- <i class="fa-solid fa-check"></i> --}}
                                                                                                            มีเอกสารแล้ว</span>


                                                                                                        @else()
                                                                                                        <span class="badge badge-pill badge-danger">
                                                                                                            {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                                                                            ไม่มีเอกสาร
                                                                                                        </span>
                                                                                                    @endif
{{-- {{$row->annotation}} --}}
                                                                                                    @endforeach    @endif
                                                                                                {{-- <td>-

                                                                                                    </td> --}}

                        <tr>


                                            <th > แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)</th>
                                            <td >  @if ($registers14->isEmpty())
                                                <span class="badge badge-pill badge-danger">
                                                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                    ไม่มีเอกสาร
                                                </span>
                                                  @else

                                                  @foreach ($registers14 as $row)
                                                  @if ( Auth::user()->id === $row->user_id)
                                                  {{-- <span class="badge badge-pill badge-warning">{{ $row->Status_supervision	 }}</span> --}}
                                              {{-- @elseif ($row->Status_supervision	 === 'ประเมินผลแล้ว')
                                                  <span class="badge badge-pill badge-success">{{ $row->Status_supervision	}}</span>
                                              @elseif ($row->Status_supervision	 === 'ไม่อนุมัติ')
                                                  <span class="badge badge-pill badge-danger">{{ $row->Status_supervision	}}</span> --}}
                                              @endif
                                                                                                            @if ($row->namefile === 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
                                                                                                            <span class="badge badge-pill badge-success">
                                                                                                                {{-- <i class="fa-solid fa-check"></i> --}}
                                                                                                                มีเอกสารแล้ว</span>


                                                                                                            @else()
                                                                                                            <span class="badge badge-pill badge-danger">
                                                                                                                {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                                                                                ไม่มีเอกสาร
                                                                                                            </span>
                                                                                                        @endif
                                                                                                        @endforeach    @endif
                                                                                                    </td>
                                                                                                    {{-- <td>-
                                                                                                       {{$row->annotation}}
                                                                                                    </td> --}}
                                                <tr>

                                                <th > แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)</th>
                                                <td >  @if ($registers15->isEmpty())
                                                    <span class="badge badge-pill badge-danger">
                                                        {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                        ไม่มีเอกสาร
                                                    </span>
                                                      @else

                                                      @foreach ($registers15 as $row)
                                                      @if ( Auth::user()->id === $row->user_id)ss
                                                      {{-- <span class="badge badge-pill badge-warning">{{ $row->Status_supervision	 }}</span> --}}
                                                  {{-- @elseif ($row->Status_supervision	 === 'ประเมินผลแล้ว')
                                                      <span class="badge badge-pill badge-success">{{ $row->Status_supervision	}}</span>
                                                  @elseif ($row->Status_supervision	 === 'ไม่อนุมัติ')
                                                      <span class="badge badge-pill badge-danger">{{ $row->Status_supervision	}}</span> --}}
                                                  @endif
                                                                                                                @if ($row->namefile === 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
                                                                                                                <span class="badge badge-pill badge-success">
                                                                                                                    {{-- <i class="fa-solid fa-check"></i> --}}
                                                                                                                    มีเอกสารแล้ว</span>


                                                                                                                @else()
                                                                                                                <span class="badge badge-pill badge-danger">
                                                                                                                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                                                                                    ไม่มีเอกสาร
                                                                                                                </span>
                                                                                                            @endif
                                                                                                            @endforeach    @endif
                                                    </td>

                                          {{--   <td>-
                                                {{$row->annotation}}
                                            </td>--}}
                                                    <tr>

                                                    <th > แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)</th>
                                                    <td >  @if ($registers16->isEmpty())
                                                        <span class="badge badge-pill badge-danger">
                                                            {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                            ไม่มีเอกสาร
                                                        </span>
                                                          @else

                                                          @foreach ($registers16 as $row)
                                                          @if ( Auth::user()->id === $row->user_id)sss
                                                          {{-- <span class="badge badge-pill badge-warning">{{ $row->Status_supervision	 }}</span>
                                                      @elseif ($row->Status_supervision	 === 'ประเมินผลแล้ว')
                                                          <span class="badge badge-pill badge-success">{{ $row->Status_supervision	}}</span>
                                                      @elseif ($row->Status_supervision	 === 'ไม่อนุมัติ')
                                                          <span class="badge badge-pill badge-danger">{{ $row->Status_supervision	}}</span> --}}
                                                      @endif
                                                                                                                    @if ($row->namefile === 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
                                                                                                                    <span class="badge badge-pill badge-success">
                                                                                                                        {{-- <i class="fa-solid fa-check"></i> --}}
                                                                                                                        มีเอกสารแล้ว</span>


                                                                                                                    @else()
                                                                                                                    <span class="badge badge-pill badge-danger">
                                                                                                                        {{-- <i class="fa-solid fa-xmark"></i> --}}
                                                                                                                        ไม่มีเอกสาร
                                                                                                                    </span>
                                                                                                                @endif
                                                                                                                @endforeach    @endif

                                                                                                            </td>

                                                                                                    {{--<td>-
                                                                                                     {{$row->annotation}}
                                                                                                </td>--}}
                                                    {{-- <td><a  href="/file/{{ $row->filess }}" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td> --}}
                                      {{-- download --}}
                                                    {{-- <td><a href="/teacher/viewregisters/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-regular fa-eye fe-16"></a></td> --}}
                                                   {{--  <td><a  href="/studenthome/delete/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
                                                  </tr>


                                                </tbody>
                                              </table>
                                              {{-- {!!$registers->links('pagination::bootstrap-5')!!} --}}
                                            </div>
                                          </div>
                                        </div> <!-- Bordered table -->
                                      </div> <!-- end section -->



                                            {{-- <a href="../ลงทะเบียน/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular ">ดูไฟล์เอกสาร</a> --}}
                                            </span>


                                        </div>
                                    </div>
                                 </div>
                                </div>         {{-- @endforeach --}}

                                        {{-- </div> --}}
                                      {{-- </div> --}}
{{--
                                    </td>
                                    <td class="">

                                     @if ($row->namefile === 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)')
                                     <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                     @else()
                                     <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                 @endif


                                    </td>

                                    <td class="">

                                     @if ($row->namefile === 'ใบสมัครงานสหกิจศึกษา(สก03)')
                                     <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>

                                     @else()
                                     <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                 @endif


                                    </td> --}}


<main role="main" class="text-center">
    <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12 my-4 " >
   </div>

  </div></div></div></div>
<div class="d-grid gap-2 text-center" >

    <h4></h4><a href="/studenthome"   class="btn btn-outline-warning " type="button">>ย้อนกลับ<</a>
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
