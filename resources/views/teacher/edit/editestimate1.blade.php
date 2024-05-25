






@extends('layouts.appteacher3')

@section('content')
@yield('content')



{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}


{{-- <br> --}}

<div class="col-md-12 mb-12">





  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header text-white ">
        <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูล</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>


      <div class="modal-body">
{{-- <main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">เพิ่มข้อมูล</strong> --}}
      </div>
      <div class="card-body">
        <form method="POST" action="{{url('/studenthome/updateestimate1/'.$supervisions->supervision_id)}}"enctype="multipart/form-data">
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
            <label for="inputAddress">ชื่อเอกสาร</label>
            {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}"  autofocus placeholder="name"> --}}
            <select class="form-control select2" id="validationSelect1" name="namefile" required>
              <option >Select state</option>
              {{-- @foreach ($establishment as $row) --}}
              <option value="แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)"@if($supervisions->namefile=="แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)") selected @endif>แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)</option>
              <option value="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)"@if($supervisions->namefile=="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)") selected @endif>แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)</option>
              <option value="แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)"@if($supervisions->namefile=="แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)") selected @endif>แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)</option>
              <option value="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)"@if($supervisions->namefile=="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)") selected @endif>แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)</option>
              {{-- @if($establishment_id[0]['id'] == $row->id) --}}
              {{-- <option value="{{ $row->id }}" selected>{{$row->name}}</option> --}}
          {{-- @else --}}

          {{-- <option value="{{$supervisions->establishment_id}} "{{ ( $row->id == $row->id) ? 'selected' : '' }}>{{$row->address}}</option> --}}


              {{-- <option value="{{$row->id}} "selected>{{$row->address}}</option> --}}
          {{-- @endif --}}
              {{-- <optgroup label="Mountain Time Zone"> --}}
                {{-- <option value="{{$row->id}}"  @if ($row->id == $row->supervision_id ) selected @endif>{{$row->address}}</option> --}}
                 {{-- <option value="{{$row->id}}">{{$row->address}}</option>           --}}
                 {{-- <option value="{{$row->id}}"{{ ( $row->id == $row->id) ? 'selected' : '' }}>{{$row->address}}</option>           --}}
                {{-- <option value="{{ $row->id }}" {{ ( $row->id == $row->supervision_id) ? 'selected' : '' }}>
                  {{ $row->address }}  --}}
              </option>

              {{-- @endforeach --}}
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
            <select class="form-control" id="single-select-field1" data-placeholder="เลือกรายชื่อ" name="user_id" required>
              <option value="">Select state</option>
              @foreach ($users as $row)

                <option value="{{$row->id}}"{{$row->id==$supervisions->user_id ?'selected':''}}>{{$row->fname}}</option>

              </optgroup>

              @endforeach
            </select>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
            <!-- Or for RTL support -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
                $( '#single-select-field1' ).select2( {
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

        </div>
          <div class="row">
          <div class=" col-md-4">
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสารประเมิน</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="filess" value="{{$supervisions->filess}}"id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>

          </div>

        </div>

        <div class="col-md-2">
          <label for="inputAddress"class="col-form-label ">คะแนน</label>
          <input type="text" class="form-control" @error('score') is-invalid @enderror name="score" value="{{$supervisions->score}}"  autofocus placeholder="score" placeholder="Last name" aria-label="Last name">

      </div>
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">สถานะ</label>
        <select class="form-control"  name="Status_supervision" required>
          <option value="">กรุณาเลือก</option>

        <option value="ประเมินผลแล้ว"@if($supervisions->Status_supervision=="ประเมินผลแล้ว") selected @endif required>ประเมินผลแล้ว</option>
          <option value="รอประเมินผล"@if($supervisions->Status_supervision=="รอประเมินผล") selected @endif required>รอประเมินผล</option>
          <option value="ไม่ผ่าน"@if($supervisions->Status_supervision=="ไม่ผ่าน") selected @endif required>ไม่ผ่าน</option>



        </select>
    </div>
    {{-- <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-control "  name="year" required> --}}
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
        <option value="{{ $i }}"@if($supervisions->year==$i) selected @endif>{{ $i }}</option>
    @endfor
@endfor
</select>



      </select>
  </div> --}}
      </div>
      <br>
          <div class="modal-footer">
            <a href="/teacher/estimate1" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันข้อมูล !!');">ตกลง</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->







@endsection
