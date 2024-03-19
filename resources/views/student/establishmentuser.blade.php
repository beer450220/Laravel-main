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
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../../icons/1.png') }}">

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
                        <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong>
                            <br><br>
                            <br>   @if (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                            <span class="circle circle-sm bg-success-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>

                                <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                            </span>
                            @elseif (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                            <span class="circle circle-sm bg-warning-light">

                                <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                                {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}



                        @endif



                        </li></a>
                        <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong>

                            <br><br>
                            <br>   @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                            <span class="circle circle-sm bg-success-light">

                                <i class="fe fe-16 fe-check text-white mb-0"></i>

                                <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                            </span>
                            @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                            <span class="circle circle-sm bg-warning-light">

                                <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                                {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                                @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                <span class="circle circle-sm bg-warning-light">

                                    <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>

                        @endif
                        </li></a>
                          <a  href="/studenthome/register">  <li id="payment"><strong>ลงทะเบียน</strong>

                          <br><br>
                          <br>   @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                          <span class="circle circle-sm bg-success-light">

                              <i class="fe fe-16 fe-check text-white mb-0"></i>

                              <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                          </span>
                          @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                          <span class="circle circle-sm bg-warning-light">

                              <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                              {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                              @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                              <span class="circle circle-sm bg-warning-light">

                                  <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>

                      @endif</li></a>
                            <a  href="/studenthome"> <li id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong>
                                <br><br>
                                  @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                                <span class="circle circle-sm bg-success-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>

                                    <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                                </span>
                                @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                <span class="circle circle-sm bg-warning-light">

                                    <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                                    {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                                    @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                    <span class="circle circle-sm bg-warning-light">

                                        <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>

                            @endif
                            </li></a>

                              <a  href="/studenthome"> <li id="confirm"><strong>นิเทศงาน</strong>

                                <br><br>
                                <br>   @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                                <span class="circle circle-sm bg-success-light">

                                    <i class="fe fe-16 fe-check text-white mb-0"></i>

                                    <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                                </span>
                                @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                <span class="circle circle-sm bg-warning-light">

                                    <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                                    {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                                    @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                    <span class="circle circle-sm bg-warning-light">

                                        <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>

                            @endif
                            </li></a>
                                <a  href="/studenthome"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong>

                                    <br><br>
                                     @if (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                                    <span class="circle circle-sm bg-success-light">

                                        <i class="fe fe-16 fe-check text-white mb-0"></i>

                                        <!-- เนื้อหาภายใน <span> element ที่ต้องการแสดง -->
                                    </span>
                                    @elseif (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                    <span class="circle circle-sm bg-warning-light">

                                        <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>
                                        {{-- <i class="fe fe-16 fe-alert-triangle text-white "></i> --}}

                                        @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                        <span class="circle circle-sm bg-warning-light">

                                            <i class="fe fe-16 fe-alert-triangle text-white mb-0"></i>

                                @endif
                                </li></a>
                      </ul>
                      <div class="progress">
                          {{-- <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div> --}}
                      </div> <br> <!-- fieldsets -->
                      <fieldset>
</form>

                          <div class="form-card">
                              <div class="row">
                                  <div class="col-7">
                                      <h2 class="fs-title col">ให้เลือกสถานประกอบการ:</h2>

                                  </div>
                                  <div class="col-4">
                                      <h2 class="steps">ขั้นตอน 2 - 6</h2>
                                  </div>
                              </div><div class="col-6">
                                <div class=" alert alert-primary  " role="alert">
                                    <b>ขั้นตอนที่ 2 สถานประกอบการ:</b> ให้เลือกสถานประกอบการและยืนยันได้สถานประกอบการแล้ว

                                        {{-- <br>  <a href="/studenthome/register"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>เพื่อขั้นตอนต่อไป --}}
                                                                </div>   <br>   <br>
                            </div>




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





                                <br>
                                <br>

                                <div class="col-md-12 mb-4">
                                    <div class="accordion w-100" id="accordion1">
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">

                                            {{-- @if (Auth::user()->status === 'ยังไม่ได้ยืนยันตัวตน')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif (Auth::user()->status === 'ยืนยันตัวตนแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>

                                        @endif --}}



                                           <h3> <strong>ให้ดูสถานประกอบการ</strong>
                                             <span class="text-primary ">( กรุณาดูสถานประกอบการ)</span></span>
                                             <span class=""></span>


                                                {{-- @if (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันสถานประกอบการ')
                                                <span class="text-warning">{{ Auth::user()->status }}
                                            @elseif (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                                                <span class="text-success  ">{{ Auth::user()->statusestablishment }}</span>

                                            @endif --}}


</h3>
                                          </a>
                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion1" style="">
                                          <div class="card-body">  <a href="/studenthome/establishmentuser4"  class=" btn btn-outline-success">ดูสถานประกอบการ</a> </div>
                                           <br>




                                          </div>

                                        </div>
                                      </div>
                                      <div class="card shadow">
                                        <div class="card-header" id="heading1">
                                          <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            @if (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันสถานประกอบการ')
                                            <span class="circle circle-sm bg-warning-light"><i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @elseif (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                                            <span class="circle circle-sm bg-success warning-light "><i class="fe fe-16 fe-check text-white "></i></span>
                                            @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                            <span class="circle circle-sm bg-warning-light  "> <i class="fe fe-16 fe-alert-triangle text-white "></i></span>
                                        @endif

                                    </span><h3 ><strong>ถ้าเลือกสถานประกอบการได้แล้ว คลิกที่นี่ เพื่อบันทึกข้อมูล</strong>  <span class="">
                                             @if (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันสถานประกอบการ')
                                            <span class="text-warning">{{ Auth::user()->status }} <span class="text-primary ">( กรุณายืนยันตัวตนด้วย)</span></span>
                                        @elseif (Auth::user()->statusestablishment === 'ยืนยันได้สถานประกอบการแล้ว')
                                            <span class="text-success  ">{{ Auth::user()->statusestablishment }}</span>
                                            @else (Auth::user()->statusestablishment === 'ยังไม่ได้ยืนยันตัวตน')
                                            <span class="text-Warning  "> ยังไม่ได้เลือกสถานประกอบการ </span>


                                        @endif  </span></h3>
                                          </a>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                                          <div class="card-body"> <a href="/studenthome/establishmentstatus/{{(Auth::user()->id )}}"  class=" btn btn-outline-success">>คลิกที่นี่เพื่อบันทึกข้อมูล<</a></div>

                                          <br>



                                          @foreach ($registers1 as $row)


                                          <div class="col-md-3">
                                              <div class="card shadow mb-4">
                                                <div class="card-body text-center">
                                                  <div class="avatar avatar-lg mt-4">
                                                    {{-- <a href="">
                                                      <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                    </a> --}}
                                                  </div>
                                                  <div class="card-text my-2">
                                                    <strong class="card-title my-0">ชื่อสถานประกอบการ </strong>
                                                    <p class="small text-muted mb-0">{{ $row->establishment_id}}</p>
                                                    <p class="small"><span class="badge badge-light text-muted"></span></p>
                                                  </div>
                                                </div> <!-- ./card-text -->
                                                <div class="card-footer">
                                                  <div class="row align-items-center justify-content-between">
                                                    <div class="col-auto">
                                                      <small>
                                                        {{-- <span class="dot dot-lg bg-success mr-1"></span> Online </small> --}}
                                                        {{-- <td><a href="../fileinformdetails/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down "></a></td> --}}
                                                        <td><a href="/studenthome/editestablishmentstatus/{{ $row->id }}" type="button" class="btn btn-outline-secondary fa-regular fe fe-edit "></a></td>
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
                                </div>     </div>

                                <main role="main" class="">
                                    <div class="container-fluid">
                                  <div class="row justify-content-center">
                                    <div class="col-md-12 my-4 " >
                                   </div>


                                  </div></div> <div class="d-grid gap-2">

                                    <h2>ขั้นตอนต่อไป</h2>
                                    <a href="/studenthome/test/{{Auth::user()->id}}"  id="show-alert" class="btn btn-outline-warning " type="button">>sssคลิกที่นี่<</a>




                                 <a href="/studenthome/register"  id="show-alert" class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>









              </div>
          </div>
      </div>
  </div>



@endsection
