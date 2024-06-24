






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
        <form method="POST"id="myForm" action="{{ route('addsupervision02') }}"enctype="multipart/form-data">
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
       <input class="form-control" id="example-date" type="date" name="start"  autofocus placeholder="title"required>
       {{-- <input class="form-control" id="example-date" type="datetime-local" name="start"  autofocus placeholder="title"required> --}}
       <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var input = document.getElementById('example-date');
        //     var now = new Date();

        //     // Adjust the date format to "YYYY-MM-DDTHH:MM"
        //     var year = now.getFullYear();
        //     var month = (now.getMonth() + 1).toString().padStart(2, '0'); // Month is zero-based
        //     var day = now.getDate().toString().padStart(2, '0');
        //     var hours = now.getHours().toString().padStart(2, '0');
        //     var minutes = now.getMinutes().toString().padStart(2, '0');

        //     var minDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

        //     input.setAttribute('min', minDateTime);
        // });

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
    </script>
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
            {{-- <input class="form-control" id="example-date" type="text" name="establishment_name"  autofocus placeholder=""required> --}}
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            {{-- <select class="form-control select2" id="multiple-select-optgroup-field"data-placeholder="เลือกสถานประกอบการ"  multiple name="establishment_name" > --}}

                {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="student_name[]" value="{{$row->student_ids}}" > --}}
                {{-- <select class="form-control"id="state-dd" data-placeholder="เลือกสถานประกอบการ"   name="em_id[]"required > --}}
                    {{-- <option value="">-- เลือกหมวดหมู่ย่อย --</option> --}}
                    {{-- <option value="">Select state</option> --}}
              {{-- @foreach ($establishment as $row)

                <option value="{{$row->id}}">{{$row->em_name}}</option>

              </optgroup>

              @endforeach --}}
            {{-- </select> --}}
            <select class="form-control select2" id="multiple-select-optgroup-field" data-placeholder="เลือกรายชื่อ"  name="em_id[]"required >
                <option value="">เลือกรายชื่อ</option>

   @foreach ($establishment as $row)

                    <option value="{{$row->student_ids}} "> {{$row->em_name}} </option>




                {{-- </optgroup> --}}

   @endforeach
              </select>
            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-4">

            <label for="inputAddress" >ชื่อนักศึกษา</label>
{{-- id="multiple-select-optgroup-field" --}}
{{-- id="country-dd" --}}
            {{-- <select class="form-control select2" id="multiple-select-optgroup-field" data-placeholder="เลือกรายชื่อ"  name="student_name[]"required >
              <option value="">เลือกรายชื่อ</option>

 @foreach ($establishment as $row)

                  <option value="{{$row->student_ids}} "> {{$row->em_name}} </option>






 @endforeach --}}
            </select>
            <input type="text" class="form-control" id="studentIdsInput" name="student_name[]" readonly>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // เมื่อมีการเลือก option ใน select
        $('#multiple-select-optgroup-field').change(function() {
            // ดึงค่าของ option ที่ถูกเลือก
            var selectedStudentIds = $(this).val();
            // นำค่า student_ids ที่เลือกไปแสดงใน input text
            $('#studentIdsInput').val(selectedStudentIds);
        });
    });
</script>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="student_name[]" value="{{$row->student_ids}}" > --}}
            {{--  <div class="form-group mb-3">
                                <select id="state-dd" class="form-control"></select>
                            </div> --}}
            {{-- <div class="form-group mb-3">
              <select id="country-dd" class="form-control">
               <option value="">Select Country</option>
                                @foreach($users1 as $data)
                                    <option value="{{$data->id}}">{{$data->fname}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <select id="state-dd" class="form-control"></select>
                            </div>

                            </form>
                       div --}}


                    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                        $('#multiple-select-optgroup-field').change(function(event) {
                            var idCountry = this.value;
                            $('#state-dd').html('');
                 
                            $.ajax({
                            url: "/api/fetch-state",
                            type: 'POST',
                            dataType: 'json',
                            data: {user_id: idCountry,_token:"{{ csrf_token() }}"},
                            success:function(response){
                //                 $('#state-dd').html('<option value="">Select State</option>');
                                $.each(response.states,function(index, val){
                                $('#state-dd').append('<option value="'+val.id+'"> '+val.fname+' </option>')
                                });
                                $('#city-dd').html('<option value="">Select City</option>');
                            }
                            })
                        });
                //         $('#state-dd').change(function(event) {
                //             var idState = this.value;
                //             $('#city-dd').html('');
                //             $.ajax({
                //             url: "/api/fetch-cities",
                //             type: 'POST',
                //             dataType: 'json',
                //             data: {state_id: idState,_token:"{{ csrf_token() }}"},
                //             success:function(response){
                //                 $('#city-dd').html('<option value="">Select State</option>');
                //                 $.each(response.cities,function(index, val){
                //                 $('#city-dd').append('<option value="'+val.id+'"> '+val.name+' </option>')
                //                 });
                //             }
                //             })
                //         });
                        });
                    </script>



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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#category').on('change', function(){
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: '{{ route('getSubcategories') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        category_id: category_id
                    },
                    success: function(data){
                        $('#subcategory').html(data);
                    }
                });
            } else {
                $('#subcategory').html('<option value="">-- เลือกหมวดหมู่ย่อย --</option>');
            }
        });
    });
</script>



            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-4">
            <label for="inputAddress" >ชื่ออาจารย์นิเทศ</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-control select2" id="multiple-select-optgroup-field1"data-placeholder="เลือกรายชื่อ" multiple name="teacher_name[]" required>
              <option value="">Select state</option>
              @foreach ($users2 as $row)
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="{{$row->id}}">{{$row->fname}} </option>

              </optgroup>

              @endforeach
            </select>

            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          {{-- <div class="col-md-4">
            <label for="inputAddress" >  ขอเปลี่ยนเวลานัดนิเทศ</label> --}}
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            {{-- <input class="form-control" id="example-date" type="datetime-local" name="appointment_time"  autofocus placeholder="title"> --}}
            {{-- <input class="form-control" id="example-date" type="text" name="appointment_time"  autofocus placeholder=""required>
            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div> --}}

          <div class=" col-md-4">
            <label for="inputAddress">เวลาเริ่มการนิเทศงาน</label>
     <input class="form-control" id="example-time" type="time" name="time"  autofocus placeholder="title"required>
     {{-- <input class="form-control" id="example-date" type="datetime-local" name="start"  autofocus placeholder="title"required> --}}
     <script>

document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('example-time');
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        // const minTime = '08:00';
        // const maxTime = '17:00';

        input.setAttribute('min', minTime);
        input.setAttribute('max', maxTime);});
  </script>
            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror





          </div>
          <div class=" col-md-4">
            <label for="inputAddress">เวลาสิ้นสุดการนิเทศงาน</label>
     <input class="form-control" id="example-time1" type="time" name="time1"  autofocus placeholder="title"required>
     {{-- <input class="form-control" id="example-date" type="datetime-local" name="start"  autofocus placeholder="title"required> --}}
     <script>

document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('example-time1');
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        // const minTime = '08:00';
        // const maxTime = '17:00';

        input.setAttribute('min', minTime);
        input.setAttribute('max', maxTime);});
  </script>
            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror





          </div>
        </div>
          <div class="row">


        <div class="col-md-3">
          <label for="inputAddress"class="col-form-label ">สถานะรับทราบและยืนยันเวลานัดนิเทศ</label>
          <select class="form-control select" id="validationSelect2" name="Status_events" required>
            <option value="">กรุณาเลือก</option>
            {{-- @foreach ($users as $row) --}}
            {{-- <optgroup label="Mountain Time Zone"> --}}
              <option value="รอรับทราบและยืนยันเวลานัดนิเทศ">รอรับทราบและยืนยันเวลานัดนิเทศ</option>
              {{-- <option value="รับทราบและยืนยันเวลานัดนิเทศแล้ว">รับทราบและยืนยันเวลานัดนิเทศแล้ว</option>
              <option value="ขอเปลี่ยนเวลานัดนิเทศ">ขอเปลี่ยนเวลานัดนิเทศ</option>
              <option value="ไม่สาสามารถขอเปลี่ยนเวลานัดนิเทศ">ไม่สาสามารถขอเปลี่ยนเวลานัดนิเทศ</option>
              รับทราบขอเปลี่ยนเวลานัดนิเทศ --}}
            </optgroup>


          </select>

      </div>
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">ไฟล์เอกสาร</label>
        <input class="form-control" id="example-date" type="file" name="filess"  autofocus placeholder=""required>
        {{-- <div class="custom-file">
            <input type="file" class="custom-file-input"name="filess" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"required>
            <label class="custom-file-label" for="inputGroupFile01">เลือกไฟล์PDF</label>
          </div> --}}
        {{-- <select class="form-control "  name="term"required>
          <option value="">กรุณาเลือกภาคเรียน</option>

        <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
          <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>




        </select> --}}



    </div>

    <div class="col-md-4">
      <label for="inputAddress"class="col-form-label ">ชื่อไฟล์เอกสาร</label>
      <input class="form-control" id="example-date" type="text" name="namefiles" value="สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา" readonly  placeholder="">
      {{-- <select class="form-control select" id="validationSelect2" name="namefiles" required>
        <option value="">กรุณาเลือก</option> --}}
        {{-- @foreach ($users as $row) --}}
        {{-- <optgroup label="Mountain Time Zone"> --}}
          {{-- <option value="สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา">สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา</option>

        </optgroup>


      </select> --}}
      {{-- <select class="form-control "  name="year"required > --}}
        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
        <option value="{{ $year }}">{{ $year }}</option>
    @endforeach --}}
    {{-- <option value="">กรุณาเลือกปีการศึกษา</option>
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
      <div class="row">
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">ไฟล์เอกสาร1</label>
        <input class="form-control" id="example-date" type="file" name="filess1"  autofocus placeholder=""required>
        {{-- <div class="custom-file">
            <input type="file" class="custom-file-input"name="filess" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"required>
            <label class="custom-file-label" for="inputGroupFile01">เลือกไฟล์PDF</label>
          </div> --}}
        {{-- <select class="form-control "  name="term"required>
          <option value="">กรุณาเลือกภาคเรียน</option>

        <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
          <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>




        </select> --}}



    </div>
    <div class="col-md-4">
        <label for="inputAddress"class="col-form-label ">ชื่อไฟล์เอกสาร1</label>
        <input class="form-control" id="example-date" type="text" name="namefiles1" value="สก.11 แบบแจ้งยืนยันการนิเทศงานนักศึกษาสหกิจศึกษา" readonly  placeholder="">
</div></div>
      {{-- <div class="row-2">
      <div class="col-md-3">
        <label for="inputAddress"class="col-form-label ">ชื่อผู้บริหาร</label> --}}

        {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"> --}}
        {{-- <textarea rows="4" cols="50" name="executive_name" required >
        </textarea>

        @error('test')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
      </div> --}}
      {{-- <div class="col-md-3"> --}}
        {{-- <label for="inputAddress" >ชื่อผู้ติดต่อ</label> --}}
        {{-- <label for="inputAddress"class="col-form-label ">ชื่อผู้ติดต่อ</label> --}}
        {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"> --}}
        {{-- <textarea rows="4" cols="50" name="contact_person"required  >
        </textarea>

        @error('test')
        <span class="invalid-feedback" >
            {{ $message }}
        </span>
    @enderror
      </div> </div> --}}



      <br>
      <br>
          <div class="modal-footer">
            <a href="/teacher/supervision" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');">เพิ่มข้อมูล</button> --}}
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
