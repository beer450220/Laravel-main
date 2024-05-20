






{{-- @extends('layouts.appteacher') --}}

@extends('layouts.officermin1')
@section('content')
@yield('content')



     {{-- เพิ่มข้อมูล --}}
{{-- <div class="col-md-4 mb-4">




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


          <form method="POST" action="{{ route('addregisteruser') }}"enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อนักศึกษา</label>
                <input type="text" class="form-control" name="name" >
              </div>
              @error('name')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                <input type="text" class="form-control"	name="establishment" placeholder="Last name" aria-label="Last name">
              </div>
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ss</label>
                <input type="text" class="form-control" name="" placeholder="Last name" aria-label="Last name">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div>


              </div>

            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="filess" id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
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
</div> --}}
<header class="bg-dark text-white d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

    <a  class="d-flex align-items-center col-md-3 mb-2 mb-md-0  text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>

    </a>
{{-- ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์ --}}
    <ul class="nav col-8 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="" class="nav-link px-2 text-white"><h3> ระบบสารสนเทศสหกิจศึกษา คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</h3></a></li>
      {{-- <li><a href="คู่มือการใช้งาน.pdf" target="_blank" class="nav-link px-2 text-white">คู่มือการใช้งาน</a></li> --}}
      {{-- <li><div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            สมัครสหกิจ
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="/cooperative1">เพิ่มข้อมูลสมัครสหกิจ</a></li>
          <li><a class="dropdown-item" href="/cooperative2">รายการสถานะสมัครสหกิจ</a></li>
        </ul>
      </div></li> --}}
      {{-- <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">About</a></li> --}}
    </ul>

    <div class="col-2 text-end">
      {{-- <a type="button"href="/cooperative1" class="btn btn-outline-primary me-2"> {{ Auth::user()->username }}</a>
      <a type="button" href="/login" class="btn btn-outline-warning me-2">ล็อกอิน</a> --}}
    </div>
  </header>
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-6">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">แก้ไข้ข้อมูล</strong>
      </div>
      <div class="card-body">
        <form method="POST" action="{{url('/teacher/updateteacher1/'.$major->id)}}"enctype="multipart/form-data">
          @csrf
          @if ($errors->any())
          <div class="alert alert-danger col-md-4">

              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <div class="form-row">
            <div class="form-group col-md-4">
              {{-- <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail5"> --}}
            </div>
            <div class="form-group col-md-4">
              {{-- <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword5"> --}}
            </div>
          </div>


        <div class="col-md-4">
          <label for="inputAddress"class="col-form-label ">ชื่ออาจารย์</label>
          <input type="text" class="form-control" @error('score') is-invalid @enderror name="fname" value="{{ $major->fname }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

      </div>

      <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">นามสกุล</label>
        <input type="text" class="form-control" @error('score') is-invalid @enderror name="surname" value="{{ $major->surname}}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>

    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">อีเมล์</label>
        <input type="text" class="form-control" @error('score') is-invalid @enderror name="email" value="{{ $major->email }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>

    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">หลักสูตร</label>
        <select class="form-select" id="validationSelect1" name="major_id" >
            <option value="">กรุณาเลือกหลักสูตร</option>
            @foreach ($major1 as $row)
            {{-- <optgroup label="Mountain Time Zone"> --}}
                 <option value="{{$row->major_id}}"{{$row->major_id==$major->major_id ?'selected':''}}>{{$row->name_major}}  ({{$row->faculty}})</option>
              {{-- <option value="{{$row->major_id}}">{{$row->name_major}}  ({{$row->faculty}})</option> --}}
              {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
          </optgroup>

            @endforeach
          </select>

    </div>

    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" @error('score') is-invalid @enderror name="telephonenumber" value="{{ $major->telephonenumber}}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>


    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">ที่อยู่</label>
        <input type="text" class="form-control" @error('score') is-invalid @enderror name="address" value="{{ $major->address }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>
      </div>
      <br>
          <div class="modal-footer">
            <a href="/teacher/teacher01" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" onclick="return confirm('ยืนยันการอัพเดทข้อมูล !!');" class="btn mb-2 btn-primary">อัพเดทข้อมูล</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->


<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a  class="nav-link px-2 text-muted">หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์</a></li>

    </ul>
    <p class="text-center text-muted">© 2024 Company, Inc</p>
  </footer>




@endsection
