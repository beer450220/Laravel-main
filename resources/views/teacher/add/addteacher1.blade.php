






@extends('layouts.appteacher')

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
        <div class="col-6">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">เพิ่มข้อมูล</strong>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('addteacher') }}"enctype="multipart/form-data">
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
          <label for="inputAddress"class="col-form-label ">ชื่ออาจารย์-นามสกุล</label>
          <input type="text" class="form-control" @error('score') is-invalid @enderror name="fname" value="{{ old('fname') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

      </div>

    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">อีเมล์</label>
        <input type="email" class="form-control" @error('score') is-invalid @enderror name="email" value="{{ old('email') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>   <div class="col-md-8">
        <label for="inputAddress"class="col-form-label ">หลักสูตร</label>
        {{-- <input type="text" class="form-control" @error('score') is-invalid @enderror name="major_id" value="{{ old('major_id') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required> --}}
<select class="form-control" id="validationSelect1" name="major_id" >
                                    <option value="">กรุณาเลือกหลักสูตร</option>
                                    @foreach ($major as $row)
                                    {{-- <optgroup label="Mountain Time Zone"> --}}
                                      <option value="{{$row->major_id}}">{{$row->name_major}}  ({{$row->faculty}})</option>
                                      {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                  </optgroup>

                                    @endforeach
                                  </select>
    </div>
   <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" @error('score') is-invalid @enderror name="telephonenumber" value="{{ old('telephonenumber') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>
    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">ที่อยู่</label>
        <input type="text" class="form-control" @error('score') is-invalid @enderror name="address" value="{{ old('address') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"required>

    </div>
      </div>
      <br>
          <div class="modal-footer">
            <a href="/teacher/teacher01" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->








@endsection
