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
                        <a  href="/studenthome"><li class="active" id="account"><strong>ข้อมูลส่วนตัว</strong></li></a>
                        <a  href="/studenthome/establishmentuser">  <li class="active" id="personal"><strong>สถานประกอบการ</strong></li></a>
                          <a  href="/studenthome/register">  <li id="payment"><strong>ลงทะเบียน</strong></li></a>
                            <a  href="/studenthome"> <li id="confirm"><strong>รายงานสถานะการเข้าปฏิบัติงาน</strong></li></a>
                              <a  href="/studenthome"> <li id="confirm"><strong>นิเทศงาน</strong></li></a>
                                <a  href="/studenthome"> <li id="payment"><strong>รายงานผลการปฏิบัติงาน</strong></li></a>
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

                                        <br>  <a href="/studenthome/establishmentuser"  class="btn btn-outline-warning " type="button">>คลิกที่นี่<</a>ย้อนกลับ
                                                                </div>   <br>   <br>
                            </div>





                            <div class="row">
                                <!-- Striped rows -->
                                <div class="col-md-12 my-4">

                                  <div class="card shadow">
                                    <div class="card-body">
                                      <div class="toolbar row mb-3">
                                        <div class="col">
                                          {{-- <form class="form-inline"> --}}
                                            <form class="">
                                            {{-- <div class="form-row"> --}}
                                                <div class="">
                                              <div class="form-group col-auto">
                                                {{-- <form method="get" action="/search">

                                                    <div class="input-group">
                                                        <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </div>--}}
                                                </form>

                                                <form action="{{ route('search') }}" method="GET">
                                                    <div class="form-group">
                                                        {{-- <label for="keyword">คำค้นหา:</label> --}}
                                                        <input type="text" name="keyword" id="keyword" class="form-control" value="{{ request('keyword') }}">
                                                    </div>
                                                    {{-- <button type="submit" class="btn btn-primary">ค้นหา</button> --}}
                                                    </form>
                                              </div>
                                              <div class="col-3">
                                              <div class="form-group col-auto ml-3">
                                                <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                                                {{-- <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                  <option selected>Choose...</option>
                                                  <option value="1">Processing</option>
                                                  <option value="2">Success</option>
                                                  <option value="3">Pending</option>
                                                  <option value="3">Hold</option>
                                                </select> --}}
                                              </div>
                                            </div>
                                           </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                                                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i>  <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <div class="row total-header-section">
                                                        @php $total = 0 @endphp
                                                        @foreach((array) session('cart') as $id => $details)

                                                        @endforeach
                                                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                                            {{-- <p>Total: <span class="text-info">{{ $total }}</span></p> --}}
                                                        </div>
                                                    </div>
                                                    @if(session('cart'))
                                                        {{-- @foreach(session('cart') as $id => $details) --}}
                                                            <div class="row cart-detail">
                                                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                                    <img src="{{ asset('/image') }}/{{ $details['images'] }}"width="50" height="50"  />
                                                                </div><br><br>
                                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                                    <p></p>
                                                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                                </div>
                                                            </div>
                                                        {{-- @endforeach --}}
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>



                                    {{-- หมวดหมู่ --}}


                                      <div class="shopee-header-section__header"><div class="shopee-header-section__header__title"><h3>หมวดหมู่</h3></div>
                                      <br>

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4 "style="background-image: url(&quot;https://down-th.img.susercontent.com/file/c1c3ef22b08e9e92a820238900edc982_tn&quot;); background-size: contain; background-repeat: ">
                                                <a href="">
                                                  <img src="url(&quot;https://down-th.img.susercontent.com/file/c1c3ef22b08e9e92a820238900edc982_tn&quot;)" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                {{-- <strong class="card-title my-0">Bass Wendy </strong>
                                                <p class="small text-muted mb-0">Accumsan Consulting</p>
                                                <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p> --}}
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-success mr-1"></span> คอมพิวเตอร์ </small>
                                                </div>
                                                <div class="col-auto">

                                                </div>
                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">

                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-secondary mr-1"></span> Offline </small>
                                                </div>

                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-5.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                {{-- <strong class="card-title my-0">Higgins Uriah</strong>
                                                <p class="small text-muted mb-0">Suspendisse LLC</p>
                                                <p class="small"><span class="badge badge-light text-muted">Canada</span></p> --}}
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                                                </div>

                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                {{-- <strong class="card-title my-0">Brown Asher</strong>
                                                <p class="small text-muted mb-0">Orci Luctus Et Inc.</p>
                                                <p class="small"><span class="badge badge-dark">USA</span></p> --}}
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                                                </div>
                                                {{-- <div class="col-auto">
                                                  <div class="file-action">
                                                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu m-2">
                                                      <a class="dropdown-item" href="#"><i class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-message-circle fe-12 mr-4"></i>Chat</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                                    </div>
                                                  </div>
                                                </div> --}}
                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        {{-- <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                <strong class="card-title my-0">Bass Wendy </strong>
                                                <p class="small text-muted mb-0">Accumsan Consulting</p>
                                                <p class="small"><span class="badge badge-light text-muted">New York, USA</span></p>
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                                                </div>
                                                <div class="col-auto">
                                                  <div class="file-action">
                                                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu m-2">
                                                      <a class="dropdown-item" href="#"><i class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-message-circle fe-12 mr-4"></i>Chat</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                <strong class="card-title my-0">Leblanc Yoshio</strong>
                                                <p class="small text-muted mb-0">Tristique Ltd</p>
                                                <p class="small"><span class="badge badge-light text-muted">United Kingdom</span></p>
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-secondary mr-1"></span> Offline </small>
                                                </div>
                                                <div class="col-auto">
                                                  <div class="file-action">
                                                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu m-2">
                                                      <a class="dropdown-item" href="#"><i class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-message-circle fe-12 mr-4"></i>Chat</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-5.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                <strong class="card-title my-0">Higgins Uriah</strong>
                                                <p class="small text-muted mb-0">Suspendisse LLC</p>
                                                <p class="small"><span class="badge badge-light text-muted">Canada</span></p>
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                                                </div>

                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col -->
                                        <div class="col-md-3">
                                          <div class="card shadow mb-4">
                                            <div class="card-body text-center">
                                              <div class="avatar avatar-lg mt-4">
                                                <a href="">
                                                  <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                                                </a>
                                              </div>
                                              <div class="card-text my-2">
                                                <strong class="card-title my-0">Brown Asher</strong>
                                                <p class="small text-muted mb-0">Orci Luctus Et Inc.</p>
                                                <p class="small"><span class="badge badge-dark">USA</span></p>
                                              </div>
                                            </div> <!-- ./card-text -->
                                            <div class="card-footer">
                                              <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                  <small>
                                                    <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                                                </div>
                                                <div class="col-auto">
                                                  <div class="file-action">
                                                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu m-2">
                                                      <a class="dropdown-item" href="#"><i class="fe fe-meh fe-12 mr-4"></i>Profile</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-message-circle fe-12 mr-4"></i>Chat</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-mail fe-12 mr-4"></i>Contact</a>
                                                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> <!-- /.card-footer -->
                                          </div>
                                        </div> <!-- .col --> --}}
                                        <div class="col-md-9">
                                        </div> <!-- .col -->
                                      </div>
                                    </div>
<style>
/* .carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  border-radius: 50%;

  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';

  color: red;
}

.carousel-control-prev-icon:after {
  content: '<';

  color: red;
} */

.carousel-control-next-icon {
        background-color: #ff5733; /* เปลี่ยนสีของไอคอน */
        color: #ffffff; /* เปลี่ยนสีของสัญลักษณ์ตัวละครต่างๆ ในไอคอน */
        border-radius: 50%; /* เพิ่มวงกลมรอบไอคอน */
    }

    /* สีสำหรับปุ่มก่อนหน้า (Previous) */
    .carousel-control-prev-icon {
        background-color: #33ff57; /* เปลี่ยนสีของไอคอน */
        color: #ffffff; /* เปลี่ยนสีของสัญลักษณ์ตัวละครต่างๆ ในไอคอน */
        border-radius: 50%; /* เพิ่มวงกลมรอบไอคอน */
    }


</style>
                                    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                           sss
                                          </div>
                                          <div class="carousel-item">
                                            s,k
                                          </div>
                                          <div class="carousel-item">
                                            <img src="..." class="d-block w-100" alt="...">
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div> --}}
                              <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <div class="col-8">
                                            {{-- <h2 class="steps">ตรวจสอบข้อมูลและทำการยืนยันข้อมูล
                                              @if(session("success"))
                                          <div class="alert alert-success col-4">{{session('success')}}
                              @endif

                                      </h2> --}}

                                  </div>
                                  </h2>


                                    <div class="container ">
                                        <div class="row gx-8">
                                          <div class="col">
                                           {{-- <div class="p-3 border bg-light"><h2>สถานประกอบการ</h2></div> --}}

                                           <br>
                                           <br>
                                           <div class="shopee-header-section__header"><div class="shopee-header-section__header__title"><h3>สถานประกอบการ</h3></div>

                             <div >
                                <div >
                                    <div >
                                        <div >
                                           <div class="container ">
                                           <div class="row ">

                                            @foreach ($establishments as $row)


                                                <div  class="col-xs-20 col-sm-3 col-md-3 card  " style="margin-top:15px;  margin-left: 65px;">
                                                    <div class="img_thumbnail productlist"><br>
                                                        <img src="{{ asset('/image') }}/{{ $row->images }}" class="rounded mx-auto d-block" style="width:200px;height:200px; text-align:center;">
                                                        <hr>
                                                        <div class="caption card-body">
                                                            <h4 class="card-title">ชื่อ:{{ $row->em_name }}</h4>
                                                            <p  class="card-text"><strong>รายละเอียด:</strong>{{ $row->em_name }}</p>
                                                            <p  class="card-text"><strong>สาขาวิชา: </strong> ${{ $row->em_name }}</p>
                                                            <p class="btn-holder text-center"><a href="/studenthome/establishmentuseredit/{{ $row->id }}" class="btn btn-primary btn-block text-center" role="button">ดูข้อมูล</a>
                                                                <p class="btn-holder"><a href="{{ route('add_to_cart', $row->id) }}" class=" text-center" role="button">
                                                                    <span> <i
{{-- id="heart-icon" --}}
                                                                     class=" fa-regular fa-heart"></i></span></a> </p>
                                                                     {{-- <i class="far fa-heart" id="heart-icon"></i> --}}

                                                                     <a href="{{ route('add_to_cart', $row->id) }}" id="heart" class="{{ $row->id? 'active' : '' }} far fa-heart"></a>



                                                             </p><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <br>

                                    </div>
                                </div>
                            </div>
                            </div>
                                      <div class="text-center"style="margin-top:15px;   margin-right: 550px;">
                                            {!!$establishments->links('pagination::bootstrap-5')!!}</div>
                                        </div>


{{-- /studenthome/updateuser2/{{Auth::user()->id}} --}}



                                                      {{-- </form> --}}


                                                  {{-- <button id="btn">Button</button> --}}

                                                      {{-- <script src="index.js"></script> --}}





                                                                <div class="col text-center">
                                                <div class="d-grid gap-2 d-md-flex   ">
                                                    {{-- <a href="/studenthome"  class="btn btn-outline-primary fe-16" type="button">ย้อนกลับ</a> --}}
                                                    &nbsp;&nbsp;

                                                </div>
                                                    </div> </div>
                                                </div>
                                            </div> <!-- / .card -->
                                          </div>
                                        </div>

                                      </div>
                                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

                                      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
                                      <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
                                      <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
                                      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                            <script type="text/javascript">

// const btn = document.getElementById('btn');

// btn.addEventListener('click', function onClick() {
//   document.body.style.backgroundColor = 'salmon';
// });
document.addEventListener("DOMContentLoaded", function () {
  const heartIcon = document.getElementById("heart");
  let isFavorite = {{ $row->id ? 'true' : 'false' }};

  // ตรวจสอบค่า isFavorite เพื่อกำหนดคลาสเริ่มต้น
  if (isFavorite) {
    heartIcon.classList.remove("far");
    heartIcon.classList.add("fas");
    heartIcon.classList.add("active");
  }

  // เพิ่ม Event Listener เมื่อคลิกที่ไอคอน
  heartIcon.addEventListener("click", function () {
    // สลับสถานะ isFavorite
    isFavorite = !isFavorite;

    // ตรวจสอบค่า isFavorite เพื่อกำหนดคลาส
    if (isFavorite) {
      heartIcon.classList.remove("far");
      heartIcon.classList.add("fas");
      heartIcon.classList.add("active");
    } else {
      heartIcon.classList.remove("fas");
      heartIcon.classList.add("far");
      heartIcon.classList.remove("active");
    }
  });
});






const heartIcon = document.getElementById('heart-icon');
let isFavorite = false;

heartIcon.addEventListener('click', function () {
  if (isFavorite) {
    // ถ้าไอคอนเป็นสีแดง (Favorite) ให้เปลี่ยนเป็นสีปรกติ
    heartIcon.classList.remove('fas', 'fa-heart');
    heartIcon.classList.add('far', 'fa-heart');
  } else {
    // ถ้าไอคอนไม่มีสี (ไม่ใช่ Favorite) ให้เปลี่ยนเป็นสีแดง
    heartIcon.classList.remove('far', 'fa-heart');
    heartIcon.classList.add('fas', 'fa-heart');
  }

  // สลับค่า isFavorite
  isFavorite = !isFavorite;
});





 $(".delete-btn").click(function(e) {
             var userId = $(this).data('id');
            e.preventDefault();
             deleteConfirm(userId);
        })

        function deleteConfirm(userId) {
            Swal.fire({
                title: 'ยืนยันข้อมูลส่วนตัว',
                text: "แน่ใจจะยืนยันข้อมูลส่วนตัว?",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ยืนยันข้อมูล',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        // $.ajax({
                        //         // url: '',
                        //         // type: 'get',
                        //         // data: 'delete=' + userId,
                        //     })
                        //     .done(function() {
                        //         Swal.fire({
                        //             title: 'success',
                        //             text: 'ยืนยันข้อมูลส่วนตัวสำเร็จ',
                        //             icon: 'success',
                        //         }).then(() => {
                        //             document.location.href = '/studenthome';
                        //         })
                        //     })
                        //     .fail(function() {
                        //         Swal.fire( 'เกิดความผิดพลาด')
                        //         window.location.reload();
                        //     });
                        // $.ajax({
                        //       type: "GET",
                        //       dataType: "json",
                        //       url: '/studenthome/updateuser2',
                        //       data: {'status': status, 'id': id+ userId},
                        //       success: function(data){
                        //         console.log(data.success)
                        //       }
                        //   });
                    });
                },
            });
          }
          $(function() {
                      $('.toggle-class').change(function() {
                          var roles = $(this).prop('checked') == true ? 'student' : 0;
                          var id = $(this).data('id');

                          $.ajax({
                              type: "GET",
                              dataType: "json",
                              url: '/user1',
                              data: {'role': roles, 'id': id},
                              success: function(data){
                                console.log(data.success)
                              }
                          });
                      })
                    })



                    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });



    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '',
              method: 'post',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });


// update employee ajax request
$("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);

        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url: '',
          method: 'get',
          data: fd,
          cache: false,
          showCancelButton: true,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Employee Updated Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Update Employee');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });





                              </script>

              </div>
          </div>
      </div>
  </div>

  <script>

  $(document).ready(function(){

  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  $(".next").click(function(){

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  //Add Class Active
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  //show the next fieldset
  next_fs.show();
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  next_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(++current);
  });

  $(".previous").click(function(){

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

  //Remove class active
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  //show the previous fieldset
  previous_fs.show();

  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
  step: function(now) {
  // for making fielset appear animation
  opacity = 1 - now;

  current_fs.css({
  'display': 'none',
  'position': 'relative'
  });
  previous_fs.css({'opacity': opacity});
  },
  duration: 500
  });
  setProgressBar(--current);
  });

  function setProgressBar(curStep){
  var percent = parseFloat(100 / steps) * curStep;
  percent = percent.toFixed();
  $(".progress-bar")
  .css("width",percent+"%")
  }

  $(".submit").click(function(){
  return false;
  })

  });

  </script>

@endsection
