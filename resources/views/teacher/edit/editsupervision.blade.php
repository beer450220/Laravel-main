






@extends('layouts.officermin1')
{{-- @extends('layouts.appteacher3') --}}
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
        <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลนิเทศงาน</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>


      <div class="modal-body">

        <form method="POST" action="{{url('/teacher/updatesupervision02/'.$supervisions->id)}}"enctype="multipart/form-data">
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
              {{-- <label for="inputAddress">หัวเรื่อง</label> --}}
       {{-- <input type="text" class="form-control" @error('title') is-invalid @enderror name="title"   autofocus placeholder="title"> --}}
       <label for="inputAddress">วันเวลาการนิเทศงาน</label>
       <input class="form-control" id="example-date" type="datetime-local" name="start"value="{{ \Carbon\Carbon::parse($supervisions->start)->format('Y-m-d\TH:i') }}"  autofocus placeholder="title">
       {{-- $startFormatted = Carbon::parse($supervisions->start)->format('Y-m-d\TH:i'); --}}
       {{-- {{$supervisions->start}} --}}
              @error('name')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
          <div class="form-group col-md-8">
            <label for="inputAddress" >  ขอเปลี่ยนเวลานัดนิเทศ</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}

            {{-- <input class="form-control" id="example-date" type="datetime-local" name="appointment_time"value="{{ \Carbon\Carbon::parse($supervisions->appointment_time)->format('Y-m-d\TH:i') }}"  autofocus placeholder="title"> --}}
            <input class="form-control" id="example-date" type="text" name="appointment_time"value="{{$supervisions->appointment_time}}"  autofocus placeholder="">

            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror



        </div>
            </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">ชื่อสถานประกอบการ</label>
            {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}"  autofocus placeholder="name"> --}}
            <select class="form-control select2" id="small-bootstrap-class-single-field" data-placeholder="Choose one thing" name="establishment_name" >
              <option value="">Select state</option>
              @foreach ($establishment as $row)
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="{{$row->em_name}}"{{$row->em_name==$supervisions->establishment_name ?'selected':''}}>{{$row->em_name}}</option>

              </optgroup>

              @endforeach
            </select>


            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>

          <div class="col-md-4">
            <label for="inputAddress" >ชื่อนักศึกษา</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-control select2"data-placeholder="Choose anything" id="small-select2-options-multiple-field" multiple name="student_name[]" >
              <option value="">Select state</option>

              @foreach ($users1 as $row)

              {{-- <optgroup label="Mountain Time Zone"> --}}
                {{-- <option value="{{$row->id}}"{{$row->id==$supervisions->student_name ?'selected':''}}>{{$row->fname}}</option> --}}

                @php
                $selectedIds = explode(',', $supervisions->student_name);
            @endphp
            <option value="{{ $row->id }}" {{ in_array($row->id, $selectedIds) ? 'selected' : '' }}>
                {{ $row->fname }}
            </option>


              </optgroup>

              @endforeach
            </select><br>
            <label for="inputAddress" >อาจารย์นิเทศ</label>
            <select class="form-control select2"data-placeholder="Choose anything" id="small-select2-options-multiple-field1" multiple name="teacher_name[]" >
                <option value="">Select state</option>

                @foreach ($users2 as $row)

                {{-- <optgroup label="Mountain Time Zone"> --}}
                  {{-- <option value="{{$row->id}}"{{$row->id==$supervisions->student_name ?'selected':''}}>{{$row->fname}}</option> --}}

                  @php
         $selectedIds = explode(',', $supervisions->teacher_name);
              @endphp
              <option value="{{ $row->name }}" {{ in_array($row->name, $selectedIds) ? 'selected' : '' }}>
                  {{ $row->name }}
              </option>


                </optgroup>

                @endforeach
              </select>
          <script > $( '#small-select2-options-multiple-field' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
            closeOnSelect: false,
            selectionCssClass: 'select2--small',
            dropdownCssClass: 'select2--small',
        } );
        $( '#small-select2-options-multiple-field1' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
            closeOnSelect: false,
            selectionCssClass: 'select2--small',
            dropdownCssClass: 'select2--small',
        } );



$( '#small-bootstrap-class-single-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    dropdownParent: $( '#small-bootstrap-class-single-field' ).parent(),
} );

$( '#multiple-select-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

$( '#multiple-select-clear-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
    allowClear: true,
} );

            </script>
            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror


          </div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
</div>

<script>
 new MultiSelectTag('countries', {
    rounded: true,    // default true
    shadow: true,      // default false
    placeholder: 'Search',  // default Search...
    tagColor: {
        textColor: '#327b2c',
        borderColor: '#92e681',
        bgColor: '#eaffe6',
    }
    onChange: function(values) {
        console.log(values)
    }
})

</script>






          <div class="row">


        <div class="col-md-4">
          <label for="inputAddress"class="col-form-label ">รับทราบและยืนยันเวลานัดนิเทศ</label>
          <select class="form-control select" id="validationSelect2" name="Status_events" >
            <option value="">กรุณาเลือก</option>
            {{-- @foreach ($users as $row) --}}
            {{-- <optgroup label="Mountain Time Zone"> --}}
              <option value="รอรับทราบและยืนยันเวลานัดนิเทศ"@if($supervisions->Status_events=="รอรับทราบและยืนยันเวลานัดนิเทศ") selected @endif required>รอรับทราบและยืนยันเวลานัดนิเทศ</option>
              <option value="รับทราบและยืนยันเวลานัดแล้ว"@if($supervisions->Status_events=="รับทราบและยืนยันเวลานัดแล้ว") selected @endif required>รับทราบและยืนยันเวลานัดแล้ว</option>
              <option value="ขอเปลี่ยนเวลานัดนิเทศ"@if($supervisions->Status_events=="ขอเปลี่ยนเวลานัดนิเทศ") selected @endif required>รับทราบและยืนยันเวลานัดแล้ว</option>
            </optgroup>


          </select>

      </div>
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
        <select class="form-select "  name="term">
          <option value="">กรุณาเลือกภาคเรียน</option>


           <option value="ภาคเรียนที่1"@if($supervisions->term=="ภาคเรียนที่1") selected @endif required>ภาคเรียนที่1</option>
          <option value="ภาคเรียนที่2"@if($supervisions->term=="ภาคเรียนที่2") selected @endif required>ภาคเรียนที่2</option>



        </select>
    </div>
    <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-select "  name="year" >
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
        <option value="{{ $i }}"@if($supervisions->year==$i ) selected @endif>{{ $i }}</option>
    @endfor
@endfor

</select>

</div>


      <div class="row">
        <div class="col-md-2">
          <label for="inputAddress"class="col-form-label ">ชื่อผู้บริหาร</label>

          {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"> --}}
          <textarea rows="4" cols="50" name="executive_name" >{{$supervisions->executive_name}}
          </textarea>

          @error('test')
          <span class="invalid-feedback" >
              {{ $message }}
          </span>
      @enderror
        </div>
       </div>
        <div class="col-md-3">
          {{-- <label for="inputAddress" >ชื่อผู้ติดต่อ</label> --}}
          <label for="inputAddress"class="col-form-label ">ชื่อผู้ติดต่อ</label>
          {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="" placeholder="Last name" aria-label="Last name"> --}}
          <textarea rows="4" cols="50" name="contact_person" > {{$supervisions->contact_person}}
          </textarea>

          @error('test')
          <span class="invalid-feedback" >
              {{ $message }}
          </span>
      @enderror
        </div>
  {{-- <div class="col-md-2">
    <label for="inputAddress"class="col-form-label ">หมายเหตุ</label>
     <input type="text" class="form-control" @error('annotation') is-invalid @enderror name="" value="{{$supervisions->annotation}} " autofocus placeholder="annotation" placeholder="Last name" aria-label="Last name">
</div> --}}
{{-- <div class="row">
 <div class="col-md-4">
  <label for="inputAddress"class="col-form-label ">เริ่มต้น</label>
  <input class="form-control" id="example-date" type="datetime-local" name="start"value="{{$supervisions->start}}">


</div> --}}
{{-- <div class="col-md-2">

  <label for="inputAddress"class="col-form-label ">เวลาเริ่มต้น</label>
  <input class="form-control" id="example-date" type="date" name="date">
  <input class="form-control col-form-label" id="example-date" type="time" name="">
</div> --}}

{{-- <div class="col-md-4">

  <label for="inputAddress"class="col-form-label ">สิ้นสุด</label>
  <input class="form-control" id="example-date" type="datetime-local" name="end"value="{{$supervisions->end}}">
  {{-- <input class="form-control col-form-label" id="example-date" type="time" name="time"> --}}
{{-- </div> --}}
{{-- <div class="col-md-2">

  <label for="inputAddress"class="col-form-label ">เวลาสิ้นสุด</label>
  <input class="form-control" id="example-date" type="date" name="date">
  <input class="form-control col-form-label" id="example-date" type="time" name="">
  <br>
</div> --}}


      </div>
      <br>
      <br>
          <div class="modal-footer">
            <a href="/teacher/supervision" type="submit" class="btn mb-2 btn-secondary" >ย้อนกลับ</a>



            <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->







@endsection
