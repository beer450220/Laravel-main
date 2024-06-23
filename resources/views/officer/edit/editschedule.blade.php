






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
        <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูล</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>


      <div class="modal-body">

        <form method="POST"id="myForm" action="{{url('/officer/updateschedule1/'.$schedules->id)}}"enctype="multipart/form-data">
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
            <div class="form-group col-md-6">
              <label for="inputAddress">ชื่อเอกสาร</label>
       <input type="text" class="form-control" @error('namefile') is-invalid @enderror name="namefile" value="{{$schedules->namefile}} "  autofocus placeholder=""required>


              @error('namefile')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
            </div>
          <div class="form-group col-md-3">
            <label for="inputAddress">ไฟล์เอกสาร</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input"id="inputGroupFile01" @error('filess') is-invalid @enderror name="filess" value="{{$schedules->filess}}"  autofocus placeholder="">
                <label class="custom-file-label" for="inputGroupFile01">เลือกไฟล์PDF</label>
              </div>


            @error('filess')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>


        </div>
          <div class="row">




      </div>
      <div class="row">
      <div class="col-md-3">
        <label for="inputAddress"class="col-form-label ">สถานนะ</label>
        <select class="form-control "  name="status"required>
          <option value="">กรุณาเลือก</option>

        <option value="1"@if($schedules->status=="1") selected @endif required>สำหรับนักศึกษา </option>
          <option value="2"@if($schedules->status=="2") selected @endif required>สำหรับอาจารย์</option>
          <option value="3"@if($schedules->status=="3") selected @endif required>สำหรับสถานประกอบการ</option>
        </select>







        </select>
    </div>
    {{-- <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-select "  name="year" required> --}}
        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
        <option value="{{ $year }}">{{ $year }}</option>
    @endforeach --}}
    {{-- <option value="">กรุณาเลือกปีการศึกษา</option>
    @php
    $currentYear = date('Y') + 543; // ปีปัจจุบัน
    $startYear = 2566; // ปีเริ่มต้น
    $endYear = $currentYear + 50; // ปีสิ้นสุด
@endphp

@for ($i = $endYear; $i >= $startYear; $i--)
    @for ($j = 1; $j <= 1; $j++)
        <option value="{{ $i }}"@if($schedules->year==$i ) selected @endif>{{ $i }}</option>
    @endfor
@endfor

</select> --}}



      {{-- </select> --}}
  {{-- </div> --}}




</div>
      </div>
      <br>
      <br>
          <div class="modal-footer">
            <a href="/officer/schedule" type="submit" class="btn mb-2 btn-secondary" >ย้อนกลับ</a>
            <button href="" type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>


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
        // ตรวจสอบว่าฟอร์มถูกต้องหรือไม่
        let form = document.getElementById('myForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        Swal.fire({
            title: 'คุณแน่ใจหรือไม่?',
            text: "คุณต้องการแก้ไขข้อมูลนี้หรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, แก้ไขข้อมูล!',
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
