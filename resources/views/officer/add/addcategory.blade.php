






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
        <strong class="card-title">เพิ่มข้อมูลจัดการแจ้งกำหนดการสหกิจ</strong>
      </div>
      <div class="card-body">
        <form method="POST"id="myForm" action="{{ route('addcategory1') }}"enctype="multipart/form-data">
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
              <label for="inputAddress">ประกาศนักศึกษาออกปฏิบัติงานสหกิจศึกษา</label>
       {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="ประกาศนักศึกษาออกปฏิบัติงานสหกิจศึกษา" readonly autofocus placeholder="ประเภท"> --}}


              @error('name_major')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
            </div></div><div class="row">
            <div class="form-group col-md-1">
                <label for="inputAddress">ภาคเรียนที่</label>
                <input type="text" class="form-control" @error('name') is-invalid @enderror name="year"maxlength="6" value=""  autofocus placeholder="2/25xx"required>
                {{-- <label for="inputAddress">รูปภาพ</label>
         <input type="file" class="form-control" @error('name') is-invalid @enderror name="images" value="{{ old('images') }}"  autofocus placeholder="ประเภท"> --}}


                @error('name_major')
                <span class="invalid-feedback" >
                    {{ $message }}
                </span>
            @enderror
              </div>
          <div class="form-group col-md-2">
            <label for="inputAddress">วันเริ่มปฏิบัติสหกิจ</label>
            <input type="date" class="form-control"id="example-date1" @error('name') is-invalid @enderror name="start_date" value=""  autofocus placeholder="2/25xx"required>
            {{-- <select class="form-control select2" id="validationSelect1" name="faculty" >
                <option value="">กรุณาเลือก</option>
                <option value="-">-</option>

                <option value="">คณะเกษตรศาสตร์</option>
                <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                <option value="คณะเทคโนโลยีอุตสาหกรรม">คณะเทคโนโลยีอุตสาหกรรม</option>
                <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>

              </optgroup>


            </select> --}}


            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>

          <div class="form-group col-md-2">
            <label for="inputAddress">วันสิ้นสุดปฏิบัติสหกิจ</label>
            <input type="date" class="form-control"id="example-date2" @error('name') is-invalid @enderror name="end_date" value=""  autofocus placeholder=""required>



            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>







      </div>
      <div class="row">
        <div class="form-group col-md-4">
          <label for="inputAddress">ประกาศกำหนดแจ้งข้อมูลสถานประกอบการ</label>
   {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name1" value="ประกาศกำหนดแจ้งข้อมูลสถานประกอบการ" readonly autofocus placeholder="ประเภท"> --}}


          @error('name_major')
          <span class="invalid-feedback" >
              {{ $message }}
          </span>
      @enderror
        </div> </div>
        <div class="row">
      <div class="form-group col-md-2">
        <label for="inputAddress">วันเริ่มแจ้ง</label>
        <input type="date" class="form-control"id="example-date3" @error('name') is-invalid @enderror name="start_notify" value=""  autofocus placeholder="2/25xx"required>
        {{-- <select class="form-control select2" id="validationSelect1" name="faculty" >
            <option value="">กรุณาเลือก</option>
            <option value="-">-</option>

            <option value="">คณะเกษตรศาสตร์</option>
            <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
            <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
            <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
            <option value="คณะเทคโนโลยีอุตสาหกรรม">คณะเทคโนโลยีอุตสาหกรรม</option>
            <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>

          </optgroup>


        </select> --}}


        @error('name')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
      </div>

      <div class="form-group col-md-2">
        <label for="inputAddress">วันสุดท้ายการแจ้ง</label>
        <input type="date" class="form-control"id="example-date" @error('name') is-invalid @enderror name="end_notify" value=""  autofocus placeholder=""required>



        @error('name')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
      </div>


      <script>


        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('example-date');
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            // const hours = String(now.getHours()).padStart(2, '0');
            // const minutes = String(now.getMinutes()).padStart(2, '0');

            const minDateTime = `${year}-${month}-${day}`;
            input.setAttribute('min', minDateTime);
        });
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('example-date1');
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            // const hours = String(now.getHours()).padStart(2, '0');
            // const minutes = String(now.getMinutes()).padStart(2, '0');

            const minDateTime = `${year}-${month}-${day}`;
            input.setAttribute('min', minDateTime);
        });
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('example-date2');
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            // const hours = String(now.getHours()).padStart(2, '0');
            // const minutes = String(now.getMinutes()).padStart(2, '0');

            const minDateTime = `${year}-${month}-${day}`;
            input.setAttribute('min', minDateTime);
        });
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('example-date3');
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            // const hours = String(now.getHours()).padStart(2, '0');
            // const minutes = String(now.getMinutes()).padStart(2, '0');

            const minDateTime = `${year}-${month}-${day}`;
            input.setAttribute('min', minDateTime);
        });
    </script>



</div>
      <br>
      <br>
          <div class="modal-footer">
            <a href="/officer/category" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="button" class="btn mb-2 btn-primary"id="confirmButton">เพิ่มข้อมูล</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->


<script>
    document.getElementById('confirmButton').addEventListener('click', function(event) {
        // ตรวจสอบว่าฟอร์มถูกต้องหรือไม่
        let form = document.getElementById('myForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        Swal.fire({
            // // title: 'คุณแน่ใจหรือไม่?',',
            text: "คุณต้องการเพิ่มข้อมูลนี้หรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, เพิ่มข้อมูล!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




@endsection
