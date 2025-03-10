






@extends('layouts.appteacher3')
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





<div class="col-md-12 mb-12">





    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content ">
        <div class="modal-header  text-white ">
          <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูลหลักสูตรสาขา</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>


        <div class="modal-body">

          <form method="POST"id="myForm" action="{{url('/teacher/updatmajor/'.$major->major_id)}}"enctype="multipart/form-data">
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
             <div class="row">
              <div class="form-group col-md-4">
                <label for="inputAddress">ชื่อสาขา</label>
                <input type="text" class="form-control" @error('name_major') is-invalid @enderror value="{{$major->name_major}} " name="name_major" value="{{ old('name_major') }}"  autofocus placeholder="สาขา">


                @error('name')
                <span class="invalid-feedback" >
                    {{ $message }}
                </span>
            @enderror
              </div>
            <div class="form-group col-md-4">
              <label for="inputAddress">คณะ</label>
              {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}"  autofocus placeholder="name"> --}}
              <select class="form-control select2" id="validationSelect1" name="faculty" >
                <option value="">กรุณาเลือกคณะ</option>
                <option value="-">-</option>

                <option value="คณะเกษตรศาสตร์"@if($major->faculty=="คณะเกษตรศาสตร์") selected @endif required>คณะเกษตรศาสตร์</option>
                <option value="คณะครุศาสตร์"@if($major->faculty=="คณะครุศาสตร์") selected @endif required>คณะครุศาสตร์</option>
                <option value="คณะวิทยาศาสตร์และเทคโนโลยี"@if($major->faculty=="คณะวิทยาศาสตร์และเทคโนโลยี") selected @endif required>คณะวิทยาศาสตร์และเทคโนโลยี</option>
                <option value="คณะมนุษยศาสตร์และสังคมศาสตร์"@if($major->faculty=="คณะมนุษยศาสตร์และสังคมศาสตร์") selected @endif required>คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                <option value="คณะเทคโนโลยีอุตสาหกรรม"@if($major->faculty=="คณะเทคโนโลยีอุตสาหกรรม") selected @endif required>คณะเทคโนโลยีอุตสาหกรรม</option>
                <option value="คณะวิทยาการจัดการ"@if($major->faculty=="คณะวิทยาการจัดการ") selected @endif required>คณะวิทยาการจัดการ</option>

              </optgroup>


            </select>

              @error('name')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
            </div>


  </div>
        </div>
        <br>
        <br>
            <div class="modal-footer">
              <a href="/teacher/major" type="submit" class="btn mb-2 btn-secondary" >ย้อนกลับ</a>



              {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button> --}}
              <button  type="button" class="btn mb-2 btn-primary"id="confirmButton">แก้ไขข้อมูล</button>
            </div>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div> <!-- /. end-section -->

  <script>
    document.getElementById('confirmButton').addEventListener('click', function(event) {
        Swal.fire({
            // title: 'คุณแน่ใจหรือไม่?',',
            text: "คุณต้องการแก้ไขข้อมูลนี้หรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, แก้ไขข้อมูล!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('myForm').submit();
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
