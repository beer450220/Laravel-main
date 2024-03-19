






@extends('layouts.officermin')

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
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">เพิ่มข้อมูล</strong>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('addestablishment') }}"enctype="multipart/form-data">
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
      <div class="row">
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
          <input type="text" class="form-control " name="em_name" placeholder="" aria-label="First name "required autocomplete="fname">
        </div>
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">ที่อยู่</label>
          <input type="text" class="form-control"	name="em_address" placeholder="" aria-label="Last name"required autocomplete="fname">
        </div>
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
          <input type="text" class="form-control" name="em_telephone" placeholder="" aria-label="Last name"required autocomplete="fname">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">อีเมล์</label>
          <input type="email" class="form-control" placeholder=""name="em_email" aria-label="First name"required autocomplete="fname">
        </div>
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">ชื่อผู้ติดต่อ</label>
          <input type="text" class="form-control" placeholder=""name="em_contact_name" aria-label="Last name"required autocomplete="fname">
        </div>
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">อีเมล์ผู้ติดต่อ</label>
          <input type="text" class="form-control" placeholder="" name="em_Contact_email" aria-label="Last name"required autocomplete="fname">
        </div>

      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">รูปภาพสถานประกอบการ</label>
          <input type="file" class="form-control"name="images" placeholder="" aria-label="First name"required autocomplete="fname">
        </div>
        @error('images')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
    <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">ตำแหน่งผู้ติดต่อ</label>
          <input type="text" class="form-control" placeholder=""name="em_contactposition" aria-label="Last name"required autocomplete="fname">
        </div>
        <div class="col-md-4">
          <label for="recipient-name" class="col-form-label">หลักสูตร</label>
          <select class="form-control" id="validationSelect1" name="major_id" >
              <option value="">กรุณาเลือกหลักสูตร</option>
              @foreach ($major as $row)
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="{{$row->major_id}}">{{$row->name_major}}  ({{$row->faculty}})</option>
                {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
              </optgroup>

              @endforeach
            </select>
        </div>


      </div>  <div class="row">
        <div class="col-md-4">
            <label for="recipient-name" class="col-form-label">หมวดหมู่</label>
             <select class="form-control" id="validationSelect1" name="category_id" >
                <option value="">กรุณาเลือกหมวดหมู่</option>
                @foreach ($major1 as $row)
                {{-- <optgroup label="Mountain Time Zone"> --}}
                  <option value="{{$row->category_id}}">{{$row->name}} </option>
                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                    {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                </optgroup>

                @endforeach
              </select>
                </div>
          </div>


      <div class="row">
<div class="col-md-4">
          <label for="recipient-name" class="col-form-label">รายละเอียดงาน</label>
          <textarea rows="4" cols="50" name="em_job"  >
              </textarea>
        </div>
  </div>

</div>








      <br>
      <br>
          <div class="modal-footer">
            <a href="/officer/schedule" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->







@endsection
