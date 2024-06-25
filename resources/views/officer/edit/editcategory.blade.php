






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





<div class="col-md-12 mb-12">





    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content ">
        <div class="modal-header bg-dark text-white ">
          <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลแก้ไข</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>


        <div class="modal-body">

          <form method="POST"id="myForm" action="{{url('/officer/updatcategory/'.$major->notify_id)}}"enctype="multipart/form-data">
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
                {{-- <label for="inputAddress">ประเภท</label>
                <input type="text" class="form-control" @error('name') is-invalid @enderror value="{{$major->name}} " name="name" value="{{ old('name_major') }}"  autofocus placeholder="ประเภท"> --}}
                <label for="inputAddress">หัวเรื่อง</label>
                <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{$major->name}}"  autofocus placeholder=""required >

                @error('name')
                <span class="invalid-feedback" >
                    {{ $message }}
                </span>
            @enderror
              </div>
              <div class="form-group col-md-2">
                {{-- <label for="inputAddress">รูปภาพ</label>
         <input type="file" class="form-control" @error('name') is-invalid @enderror name="images" value="{{$major->images}}"  autofocus placeholder="ประเภท"> --}}
         <label for="inputAddress">ภาคเรียนที่</label>
         <input type="text" class="form-control" @error('name') is-invalid @enderror name="year"maxlength="6" value="{{$major->year}}"  autofocus placeholder="2/25xx"required>

                @error('name_major')
                <span class="invalid-feedback" >
                    {{ $message }}
                </span>
            @enderror
              </div>
              @php
              use Carbon\Carbon;

              function formatThaiDate($date) {
                  $thaiMonths = [
                      1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                      5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                      9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                  ];

                  $carbonDate = Carbon::parse($date)->setTimezone('Asia/Bangkok');
                  $year = $carbonDate->year + 543;
                  $month = $thaiMonths[$carbonDate->month];
                  $day = $carbonDate->day;
               //    $time = $carbonDate->format('เวลา H:i:s ');

                  return "$day $month $year";
              }
          @endphp
            <div class="form-group col-md-2">
                <label for="inputAddress">วันเริ่มปฏิบัติสหกิจ</label>
                <input type="date" class="form-control"id="example-date" @error('name') is-invalid @enderror name="start_date" value="{{ \Carbon\Carbon::parse($major->start_date)->format('Y-m-d') }}"  autofocus placeholder="2/25xx"required>

  </div>
  <div class="form-group col-md-2">
    <label for="inputAddress">วันสิ้นสุดปฏิบัติสหกิจ</label>
    <input type="date" class="form-control"id="example-date1" @error('name') is-invalid @enderror name="end_date" value="{{ \Carbon\Carbon::parse($major->end_date)->format('Y-m-d') }}"  autofocus placeholder=""required>



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
<div class="row">
<div class="form-group col-md-4">
  <label for="inputAddress">หัวเรื่อง1</label>
<input type="text" class="form-control" @error('name') is-invalid @enderror name="name1" value="{{$major->name1}}"  autofocus placeholder=""required >


  @error('name_major')
  <span class="invalid-feedback" >
      {{ $message }}
  </span>
@enderror
</div>

<div class="form-group col-md-2">
<label for="inputAddress">วันเริ่มแจ้ง</label>
<input type="date" class="form-control" @error('name') is-invalid @enderror name="start_notify"id="example-date2" value="{{ \Carbon\Carbon::parse($major->start_notify)->format('Y-m-d') }}"  autofocus placeholder="2/25xx"required>
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
<input type="date" class="form-control" @error('name') is-invalid @enderror name="end_notify"id="example-date3" value="{{ \Carbon\Carbon::parse($major->end_notify)->format('Y-m-d') }}"  autofocus placeholder=""required>



@error('name')
<span class="invalid-feedback" >
    {{ $message }}
</span>
@enderror
</div>
        </div>
        <br>
        <br>
            <div class="modal-footer">
              <a href="/officer/category" type="submit" class="btn mb-2 btn-secondary" >ย้อนกลับ</a>
              <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
              <button  type="button" class="btn mb-2 btn-primary"id="confirmButton">แก้ไขข้อมูล</button>
              {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button> --}}
            </div>
          </form>
        </div> <!-- /. card-body -->
      </div> <!-- /. card -->
    </div> <!-- /. col -->
  </div> <!-- /. end-section -->
  <script>
    document.getElementById('confirmButton').addEventListener('click', function(event) {
        Swal.fire({
            // // title: 'คุณแน่ใจหรือไม่?',',
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
