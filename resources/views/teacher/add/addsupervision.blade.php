






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
      <div class="col-12">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">เพิ่มข้อมูล</strong>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('addsupervision02') }}"enctype="multipart/form-data">
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
              <label for="inputAddress">วันเวลาการนิเทศงาน</label>
       <input class="form-control" id="example-date" type="datetime-local" name="start"  autofocus placeholder="title"required>


              @error('name')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror





            </div>

          {{-- <div class="form-group col-md-4">
            <label for="inputAddress">ชื่อสถานประกอบการ</label>

            <select class="form-control select2" id="validationSelect1" name="" >
              <option value="">Select state</option>


              </optgroup>


            </select>




          </div> --}}

          <div class="col-md-4">
            <label for="inputAddress" >ชื่อสถานประกอบการ</label>
            <input class="form-control" id="example-date" type="text" name="establishment_name"  autofocus placeholder=""required>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            {{-- <select class="form-control select2" id="multiple-select-optgroup-field"data-placeholder="เลือกสถานประกอบการ"  multiple name="establishment_name" >
              <option value="">Select state</option>
              @foreach ($establishment as $row)

                <option value="{{$row->em_name}}">{{$row->em_name}}</option>

              </optgroup>

              @endforeach
            </select> --}}

            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-4">
            {{-- id="multiple-select-field" --}}
            <label for="inputAddress" >ชื่อนักศึกษา</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-control select2" id="multiple-select-optgroup-field" data-placeholder="เลือกรายชื่อ" multiple name="student_name[]"required >
              <option value="">เลือกรายชื่อ</option>
              {{-- @foreach ($users as $row) --}}
              {{-- <optgroup label="Mountain Time Zone"> --}}
                {{-- <option value="{{$row->id}}">{{$row->name}}</option> --}}
                @foreach ($users as $row)
                {{-- <optgroup label="Mountain Time Zone"> --}}
                  <option value="{{$row->id}} ">{{$row->fname}} </option>
                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}


                @endforeach
              </optgroup>

              {{-- @endforeach --}}
            </select>
            <script>
				$(document).ready(function() {
			$('.select2').select2({
			closeOnSelect: false
			});
			});


            $( '#multiple-select-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );
$( '#multiple-select-field1' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );
			</script>





<!-- Styles -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

<!-- Or for RTL support -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-4">
            <label for="inputAddress" >ชื่ออาจารย์นิเทศ</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-control select2" id="multiple-select-optgroup-field1"data-placeholder="เลือกรายชื่อ" multiple name="teacher_name" required>
              <option value="">Select state</option>
              @foreach ($users2 as $row)
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="{{$row->name}}">{{$row->name}}</option>

              </optgroup>

              @endforeach
            </select>

            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-4">
            <label for="inputAddress" >  ขอเปลี่ยนเวลานัดนิเทศ</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            {{-- <input class="form-control" id="example-date" type="datetime-local" name="appointment_time"  autofocus placeholder="title"> --}}
            <input class="form-control" id="example-date" type="text" name="appointment_time"  autofocus placeholder=""required>
            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>


        </div>
          <div class="row">


        <div class="col-md-3">
          <label for="inputAddress"class="col-form-label ">รับทราบและยืนยันเวลานัดนิเทศ</label>
          <select class="form-control select" id="validationSelect2" name="Status_events" required>
            <option value="">กรุณาเลือก</option>
            {{-- @foreach ($users as $row) --}}
            {{-- <optgroup label="Mountain Time Zone"> --}}
              <option value="รอรับทราบและยืนยันเวลานัดนิเทศ">รอรับทราบและยืนยันเวลานัดนิเทศ</option>
              <option value="รับทราบและยืนยันเวลานัดแล้ว">รับทราบและยืนยันเวลานัดแล้ว</option>
              <option value="ขอเปลี่ยนเวลานัดนิเทศ">ขอเปลี่ยนเวลานัดนิเทศ</option>
            </optgroup>


          </select>

      </div>
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
        <select class="form-control "  name="term"required>
          <option value="">กรุณาเลือกภาคเรียน</option>

        <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
          <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>




        </select>
    </div>
    <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-control "  name="year"required >
        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
        <option value="{{ $year }}">{{ $year }}</option>
    @endforeach --}}
    <option value="">กรุณาเลือกปีการศึกษา</option>
    @php
    $currentYear = date('Y') + 543; // ปีปัจจุบัน
    $startYear = 2500; // ปีเริ่มต้น
    $endYear = $currentYear + 100; // ปีสิ้นสุด
@endphp

@for ($i = $endYear; $i >= $startYear; $i--)
    @for ($j = 1; $j <= 1; $j++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
@endfor
</select>



      </select>
  </div>
  {{-- <div class="col-md-2">
    <label for="inputAddress"class="col-form-label ">หมายเหตุ</label>
     <input type="text" class="form-control" @error('annotation') is-invalid @enderror name="" value=""  autofocus placeholder="annotation" placeholder="Last name" aria-label="Last name">
</div> --}}



</div>
      </div>
      <div class="row-2">
      <div class="col-md-3">
        <label for="inputAddress"class="col-form-label ">ชื่อผู้บริหาร</label>

        {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"> --}}
        <textarea rows="4" cols="50" name="executive_name" required >
        </textarea>

        @error('test')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
      </div>
      <div class="col-md-3">
        {{-- <label for="inputAddress" >ชื่อผู้ติดต่อ</label> --}}
        <label for="inputAddress"class="col-form-label ">ชื่อผู้ติดต่อ</label>
        {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"> --}}
        <textarea rows="4" cols="50" name="contact_person"required  >
        </textarea>

        @error('test')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
      </div> </div>



      <br>
      <br>
          <div class="modal-footer">
            <a href="/teacher/supervision" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->







@endsection
