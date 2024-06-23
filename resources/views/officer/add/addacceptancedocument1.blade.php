






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
        <form method="POST"id="myForm" action="{{ route('addacceptancedocument') }}"enctype="multipart/form-data">
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
          {{-- <div class="form-group col-md-4">
            <label for="inputAddress">ชื่อสถานประกอบการ</label>

            <select class="form-control select2" id="validationSelect1" name="establishment_id" required>
              <option value="">Select state</option>
              @foreach ($establishment as $row)

                <option value="{{$row->id}}">{{$row->address}}</option>

              </optgroup>

              @endforeach
            </select>



          </div> --}}

          <div class="col-md-4">
            <label for="inputAddress" >ชื่อนักศึกษา</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-select" id="single-select-field" data-placeholder="เลือกรายชื่อ" name="user_id" required>
              <option value="">Select state</option>
              @foreach ($users as $row)
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="{{$row->id}}">{{$row->fname}}</option>

              </optgroup>

              @endforeach
            </select>
<!-- Styles -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>


<script>
    $( '#single-select-field' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );

    </script>

@error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-4">
            <label for="inputAddress"class="col-form-label ">ชื่อไฟล์เอกสาร</label>
            <select class="form-control select2" id="validationSelect2" name="namefile" required>
              <option value="">กรุณาเลือก</option>
              {{-- @foreach ($users as $row) --}}
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)">แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)</option>
                <option value="แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)">แบบยืนยันการตอบรับนักศึกษาสหกิจศึกษา(สก.05)</option>
                <option value="หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)">หนังสือการเข้ารับการปฏิบัติงานของนักศึกษาสหกิจศึกษา(สก.06)</option>
              </optgroup>


            </select>

        </div>
        </div>
        {{-- <input type="hidden" id="custId" name="namefile" value="แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)"> --}}
          <div class="row">
          <div class=" col-md-4">
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="filess" id="validatedCustomFile"required >
                  <label class="custom-file-label" for="validatedCustomFile"required>เลือกไฟล์PDF</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>

          </div>

        </div>

        <div class="col-md-2">
          <label for="inputAddress"class="col-form-label ">สถานะ</label>
          <select class="form-control select2" id="validationSelect2" name="Status_acceptance" required>
            <option value="">กรุณาเลือก</option>
            {{-- @foreach ($users as $row) --}}
            {{-- <optgroup label="Mountain Time Zone"> --}}
              <option value="ตอบรับนักศึกษาแล้ว">ตอบรับนักศึกษาแล้ว</option>
              <option value="รอการตอบรับนักศึกษา">รอตอบรับนักศึกษา</option>
              <option value="ไม่รับนักศึกษา">ไม่รับนักศึกษา</option>
            </optgroup>


          </select>

      </div>
      {{-- <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
        <select class="form-control "  name="term" required>
          <option value="">กรุณาเลือกภาคเรียน</option>

        <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
          <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>




        </select>
    </div> --}}
    {{-- <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-control "  name="year" required> --}}
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
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
@endfor
</select>



      </select> --}}
  {{-- </div> --}}
  <div class="col-md-2">
    <label for="inputAddress"class="col-form-label ">หมายเหตุ</label>
     <input type="text" class="form-control" @error('annotation') is-invalid @enderror name="annotation" value="-"  autofocus placeholder="annotation" placeholder="Last name" aria-label="Last name"required>
</div>
      </div>
      <br>
          <div class="modal-footer">
            <a href="/officer/acceptancedocument1" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');">เพิ่มข้อมูล </button> --}}
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
            title: 'คุณแน่ใจหรือไม่?',
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
