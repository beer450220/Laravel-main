@extends('layouts.appstudent')
{{-- @include('layouts.admincss2') --}}
 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
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
                                    <h2 class="fs-title col">ลงทะเบียนนักศึกษาสหกิจศึกษา:</h2>

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











                                @if ($student->isEmpty())
                                <div class="col-md-12 mb-4">
                                    {{-- <div class="accordion w-100" id="accordion1"> --}}
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                 @foreach ($student as $row)

                                         @if ($row->id === $row->id)
                                         <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                     @elseif ($row->id === 'ตรวจสอบแล้ว')
                                         <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                     @elseif ($row->id === 'ไม่ผ่าน')
                                         <span class="badge badge-pill badge-danger">{{ $row->id}}</span>
                                     @endif
                                         {{-- class="circle circle-sm bg-warning-light"> --}}
                                @endforeach




                                             <H2><strong>ข้อมูลนักศึกษา</strong> </a> <span class="">
                                                @foreach ($student as $row)
                                                @if ($row->id === 'รอตรวจสอบ')
                                                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                @elseif ($row->id === 'ตรวจสอบแล้ว')
                                                    <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                @elseif ($row->id === 'ไม่ผ่าน')
                                                    <span class="text-Danger ">{{ $row->id }}</span>



                                                    @endif
                                            @endforeach <span class="badge badge-pill badge-danger">(กรุณากรอกข้อมูลนักศึกษา)</span> </H2>
                                            {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}
                                            <a href="/personal1"  class=" btn btn-outline-success">เพิ่มข้อมูลนักศึกษา</a>

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
                                        @else

                                        @foreach ($student as $row)

                                        @if (Auth::user()->id === $row->user_id)

                                        <div class="col-md-12 mb-4">
                                            {{-- <div class="accordion w-100" id="accordion1"> --}}
                                              <div class="card shadow">
                                                <div class="card-header" id="heading1">
                                                  {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}
                                         {{-- @foreach ($student as $row)

                                                 @if ($row->id === $row->id)
                                                 <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                             @elseif ($row->id === 'ตรวจสอบแล้ว')
                                                 <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                             @elseif ($row->id === 'ไม่ผ่าน')
                                                 <span class="badge badge-pill badge-danger">{{ $row->id}}</span>
                                             @endif

                                        @endforeach --}}




                                                     <H2><strong>ข้อมูลนักศึกษา</strong> </a> <span class="">
                                                        {{-- @foreach ($student as $row)
                                                        @if ($row->id === 'รอตรวจสอบ')
                                                            <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                        @elseif ($row->id === 'ตรวจสอบแล้ว')
                                                            <span class="text-Success ">ตรวจสอบแล้ว</span>
                                                        @elseif ($row->id === 'ไม่ผ่าน')
                                                            <span class="text-Danger ">{{ $row->id }}</span>



                                                            @endif
                                                    @endforeach --}}
                                                     {{-- <span class="badge badge-pill badge-danger">(กรุณากรอกข้อมูลนักศึกษา)</span> --}}
                                                     </H2>
                                                    {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}

                                                    <a href="/personal2/{{$row->id}}"  class=" btn btn-outline-success">ดูข้อมูลนักศึกษา</a>
                                                  @foreach ($establishment as $row)

                                                  @if (Auth::user()->id === $row->user_id)

                                                  <a href="/personal4/{{$row->id}}"  class=" btn btn-outline-success">ดูข้อมูลสถานประกอบการ</a>
                                                  @endif

                                              @endforeach
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
                                        @elseif ($row->id === $row->id)
s
@else ()



@endif
{{-- class="circle circle-sm bg-warning-light"> --}}
@endforeach
@endif



{{-- <div class="col-md-12 mb-4"> --}}
    {{-- <div class="accordion w-100" id="accordion1"> --}}
      <div class="card shadow">
        <div class="card-header" id="heading2">
          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}





             <H2><strong>ข้อมูลสมัครสหกิจศึกษา</strong> </a> <span class="">
              {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
            </H2>
            {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}
            <a href="/studenthome1"  class=" btn btn-outline-success">สมัครสหกิจศึกษาใหม่</a>
            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
            </span>


        </div>
        <div id="collapse1" class="collapse" aria-labelledby="heading2" data-parent="#accordion1" style="">
          <div class="card-body">
            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
        </div>
        <br>




        </div>



        {{-- <div class="col-md-12 mb-4"> --}}
            {{-- <div class="accordion w-100" id="accordion1"> --}}
              <div class="card shadow">
                <div class="card-header" id="heading2">
                  {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}





                     <H2><strong>ข้อมูลเอกสารตอบรับ</strong> </a> <span class="">
                      {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                    </H2>
                    {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}

                    @foreach ($acceptance as $row)
                    {{-- @if (Auth::user()->id === $row->user_id) --}}
                    {{$row->namefile}}
                    @if ($row->namefile === 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
                    <a href="/document1/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a>

                 @if ($row->Status_acceptance === 'รอตรวจสอบ')
                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                    <span class="badge badge-pill badge-Success ">ตอบรับนักศึกษาแล้ว</span>
                @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
                    <span class="text-Danger ">{{ $row->Status_acceptance }}</span>
                @else (sss)
                    {{-- <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span> --}}

                    @endif
                @elseif ($row->namefile === 'แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)')
                <a href="/document1/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a>
                @if ($row->Status_acceptance === 'รอตรวจสอบ')
                   <span class="text-warning">รอตรวจสอบเอกสาร</span>
               @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                   <span class="badge badge-pill badge-Success ">ตอบรับนักศึกษาแล้ว</span>
               @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
                   <span class="text-Danger ">{{ $row->Status_acceptance }}</span>
               @else (sss)
                   {{-- <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span> --}}

                   @endif

                @elseif ($row->namefile === 'หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)')
                <a href="/document1/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a>
                @if ($row->Status_acceptance === 'รอตรวจสอบ')
                   <span class="text-warning">รอตรวจสอบเอกสาร</span>
               @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                   <span class="badge badge-pill badge-Success ">ตอบรับนักศึกษาแล้ว</span>
               @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
                   <span class="text-Danger ">{{ $row->Status_acceptance }}</span>
               @else (sss)
                   {{-- <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span> --}}

                   @endif
                @else (sss)
                    {{-- <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span> --}}

                    @endif
{{-- class="circle circle-sm bg-warning-light"> --}}
{{-- {{$row->Status_acceptance}} --}}

{{-- @endif --}}

{{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
</span> <br>
@endforeach
                    {{-- @if ($row->Status_acceptance === 'รอตรวจสอบ')
                                                    <span class="text-warning">รอตรวจสอบเอกสาร</span>
                                                @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                                                    <span class="badge badge-pill badge-Success ">ตอบรับนักศึกษาแล้ว</span>
                                                @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
                                                    <span class="text-Danger ">{{ $row->Status_acceptance }}</span>
                                                @else (sss)
                                                    <span class="text-Secondary">ยังไม่ได้อัปโหลดเอกสาร (กรุณาให้อัปโหลดไฟล์)</span>

                                                    @endif --}}
                    {{-- class="circle circle-sm bg-warning-light"> --}}
         {{-- {{$row->Status_acceptance}} --}}

                    {{-- @endif --}}

                    {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                    {{-- </span> <br><a href="/document1/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a>
 @endforeach --}}

                </div>
                <div id="collapse1" class="collapse" aria-labelledby="heading2" data-parent="#accordion1" style="">
                  <div class="card-body">
                    {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                </div>
                <br>


                  </div>

                </div>


                <div class="card shadow">
                    <div class="card-header" id="heading2">
                      {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}






                         <H2><strong>ข้อมูลเอกสารปฏิบัติงานนักศึกษา</strong> </a> <span class="">
                          {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                        </H2>
                        {{-- @foreach ($acceptance as $row)
  @if ($row->Status_acceptance === 'รอตรวจสอบ')

  @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว') --}}


  {{-- @endif --}}
                        {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}

                        {{-- class="circle circle-sm bg-warning-light"> --}}
             {{-- {{$row->Status_acceptance}} --}}
                        {{-- <a href="/ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a> --}}
                        <a href="/studenthome/informdetails"  class=" btn btn-outline-success">เอกสารปฏิบัติงานใหม่</a>
                        {{-- @endforeach --}}
                          {{-- @endif --}}

                        {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                        </span>


                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="heading2" data-parent="#accordion1" style="">
                      <div class="card-body">
                        {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                    </div>
                    <br>


                      </div>

                    </div>







                    <div class="card shadow">
                        <div class="card-header" id="heading2">
                          {{-- <a role="button" href="" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"> --}}






                             <H2><strong>ข้อมูลตรวจสอบเอกสาร</strong> </a> <span class="">
                              {{-- <span class="badge badge-pill badge-danger">(กรุณาอัปโหลดไฟล์เอกสาร)</span> --}}
                            </H2>
                            {{-- @foreach ($acceptance as $row)
      @if ($row->Status_acceptance === 'รอตรวจสอบ')

      @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว') --}}


      {{-- @endif --}}
                            {{-- <td><span class="badge badge-pill badge-warning">Hold</span></td> --}}

                            {{-- class="circle circle-sm bg-warning-light"> --}}
                 {{-- {{$row->Status_acceptance}} --}}
                            {{-- <a href="/ไฟล์เอกสารตอบรับนักศึกษา(สก.02)/{{ $row->filess }}"target="_BLANK"  class=" btn btn-outline-success">ดูเอกสาร</a> --}}
                            <a href="/studenthome/in2"  class=" btn btn-outline-success">ตรวจสอบเอกสาร</a>
                            {{-- @endforeach --}}
                              {{-- @endif --}}

                            {{-- <h1    class=" btn btn-outline-success">เพิ่มเอกสารใหม่</h1> --}}
                            </span>


                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading2" data-parent="#accordion1" style="">
                          <div class="card-body">
                            {{-- <a href="/studenthome/addregister"  class=" btn btn-outline-success">เพิ่มเอกสารใหม่</a> --}}
                        </div>
                        <br>


                          </div>

                        </div>



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
                                     @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
                                         <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                                     @endif

@endforeach




                                             <h2><strong>ประกาศผลการตอบรับ</strong> </a> <span class="">
                                                @foreach ($registers8 as $row)
                                                @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษา')
                                                    <span class="text-warning">ยังไม่ได้ตอบรับนักศึกษา</span>
                                                @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว')
                                                    <span class="text-Success ">ตอบรับนักศึกษาแล้ว</span>
                                                @elseif ($row->Status_acceptance === 'ไม่ผ่าน')
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









<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
//Swal.fire('Any fool can use a computer')

$(document).ready(function () {
        $('#show-alert').click(function () {
            Swal.fire({
                title: 'คุณแน่ใจหรือไม่?',
                text: 'คุณต้องการดำเนินการนี้หรือไม่?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ใช่',
                cancelButtonText: 'ไม่',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/studenthome/informdetails";
                }
            });
        });
    });
</script>

{{----}} <main role="main" class="">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            {{-- @if(session("success6"))
            <div class="alert alert-success col-4">{{session('success6')}}
  @endif
 @if(session("success5"))
          <div class="alert alert-success col-4">{{session('success5')}}
@endif --}}
          </div>
          </div>
          {{-- <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a></td>
                <td><a href="/studenthome/edit2register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fe fe-edit fe-16"></a></td> --}}
{{-- <div class="col-md-12 my-4">
    <div class="card shadow  ">
      <div class="card-body">
        <h5 class="card-title p-3 mb-2 bg-dark text-white">รายการอนุมัติลงทะเบียน</h5>
        <div class="container">
            <div class="row">
              <div class="col-9">
                <p class="card-text"> <tbody>
                </p>
              </div> --}}

            {{-- <div class="d-grid gap-2 d-md-block">
                <a href="/studenthome/Announcement"  class=" btn btn-outline-primary">ประกาศผลการตอบรับ</a>
                <a href="/studenthome/documents" type="button" class="btn btn-outline-primary"data-bs-toggle="modal" data-bs-target="#exampleModal">ดาวน์โหลดไฟล์เอกสาร</a>

                <a href="/studenthome/addregister"  class=" btn btn-outline-success">ลงทะเบียนใหม่</a> --}}
{{--
              </div>
            </div>

        </div>
        <br> --}}

        {{-- @foreach ($registers as $row) --}}
{{--
        <div class="col-md-3">
            <div class="card shadow mb-4">
              <div class="card-body text-center">
                <div class="avatar avatar-lg mt-4"> --}}
                  {{-- <a href="">
                    <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                  </a> --}}
                {{-- </div>
                <div class="card-text my-2">
                  <strong class="card-title my-0">ชื่อเอกสาร </strong> --}}
                  {{-- <p class="small text-muted mb-0">{{ $row->namefile}}</p> --}}
                  {{-- <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                </div> --}}
              {{-- </div> <!-- ./card-text --> --}}
              {{-- <div class="card-footer">
                <div class="row align-items-center justify-content-between">
                  <div class="col-auto">
                    <small> --}}
                      {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                      {{-- <td><a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td>
                      <td><a href="/studenthome/edit2register/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td> --}}
                    {{-- </div>

                  <div class="col-auto">

                  </div>
                </div> --}}


          {{-- @endforeach --}}

        {{-- {!!$registers1->links('pagination::bootstrap-5')!!} --}}


        {{-- <div class="container ">
            <div class="row ">

             @foreach ($registers as $row)


                 <div  class="col-xs-20 col-sm-3 col-md-3 card  " style="margin-top:15px;  margin-left: 65px;">
                    <div class="card mb-4 shadow">

                    <div class="img_thumbnail productlist"><br> --}}
                         {{-- <img src="{{ asset('/image') }}/" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;"> --}}
                         {{-- <h4 class="card-title text-center">ชื่อเอกสาร </h4>    <p class="text-center">{{ $row->namefile }}</p>
                         <hr>
                         <div class="caption card-body"> --}}
                             {{-- <h4 class="card-title">:{{ $row->namefile }}</h4> --}}


                             {{-- <p> สถานะ::   @if ($row->Status_registers === 'รอตรวจสอบ')
                            <span class="badge rounded-pill bg-warning text-dark">{{ $row->Status_registers}}</span>
                        @elseif ($row->Status_registers === 'ตรวจสอบเอกสารแล้ว')
                            <span class="badge rounded-pill bg-success text-dark ">{{ $row->Status_registers}}</span>
                        @elseif ($row->Status_registers === 'ไม่ผ่าน')
                            <span class="badge rounded-pill bg-danger ">{{ $row->Status_registers}}</span>
                        @endif
                    </p>

                            <span class="text- "> </span> --}}
                             {{-- <p  class="card-text"><strong>หลักสูตร --}}
                                 {{-- @foreach ($registers2 as $row1)
                                 @if ($row->major_id == $row1->major_id)
                                     {{ $row1->name_major }}
                                 @endif
                             @endforeach --}}
                            {{-- </strong> </p> --}}
                             {{-- หมายเหตุ ::   {{ $row->annotation}}
                            <div class="card-footer">
                            <div class="d-grid gap-2 d-md-block">
                                <p class="">
                                    @if ($row->Status_registers === 'รอตรวจสอบ')

                                @elseif ($row->Status_registers === 'ตรวจสอบเอกสารแล้ว')

                                @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                    <a href="/studenthome/edit9register/{{$row->id}}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "> </a>
                                @endif --}}


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

{{--
                                    <a href="../file/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a>
                              </div>
                             {{-- <p class="btn-holder text-center"><a href="/establishment/edit/" class="btn btn-primary btn-block text-center" role="button">ดูข้อมูล</a>
                                </p><br> --}}
                         {{-- </div>    </div>
                     </div>
                 </div> </div>
             @endforeach  --}}
 {{-- <div class="text-center"style="margin-top:15px;   margin-right: 190px;">
                {!!$registers->links('pagination::bootstrap-5')!!}</div>
            </div>
             <br>

     </div> --}}


<main role="main" class="text-center">
    <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12 my-4 " >
   </div>

  </div></div></div></div>  <br>
<div class="d-grid gap-2 text-center" >
    {{-- @foreach ($acceptance as $row) --}}
    {{-- @if (Auth::user()->id === $row->user_id) --}}


    {{-- @if ($row->Status_acceptance === 'ยังไม่ได้ตอบรับนักศึกษาแล้ว') --}}

                                {{-- @elseif ($row->Status_acceptance === 'ตอบรับนักศึกษาแล้ว') --}}
                                <h4>ขั้นตอนต่อไป</h4><a href="/studenthome/calendar2confirm"   class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>
                                {{-- @elseif ($row->Status_acceptance === 'ไม่ผ่าน') --}}

                                {{-- @else (sss) --}}


                                    {{-- @endif --}}
    {{-- class="circle circle-sm bg-warning-light"> --}}
{{-- {{$row->Status_acceptance}} --}}

    {{-- @endif --}}



     {{-- @endforeach --}}
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

