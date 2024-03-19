





{{--
@extends('layouts.appteacher')

@section('content')
@yield('content') --}}



{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../student/css/simplebar.css">

{{-- <br> --}}

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
        <form method="POST" action="{{url('/teacher/updatees1/'.$supervisions->id)}}"enctype="multipart/form-data">
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
              <option value="แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา(สก.10)"@if($supervisions->namefile=="แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา(สก.10)") selected @endif>แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา
            (สก.10)</option>

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

          {{-- <div class="col-md-4">
            <label for="inputAddress" >ชื่อนักศึกษา</label>

            <select class="form-control select2" id="validationSelect2" name="user_id" required>
              <option value="">Select state</option>
              @foreach ($users as $row)

                <option value="{{$row->id}}"{{$row->id==$supervisions->user_id ?'selected':''}}>{{$row->fname}}</option>

              </optgroup>

              @endforeach
            </select>

            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div> --}}

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

        {{-- <div class="col-md-2">
          <label for="inputAddress"class="col-form-label ">คะแนน</label>
          <input type="text" class="form-control" @error('score') is-invalid @enderror name="score" value="{{$supervisions->score}}"  autofocus placeholder="score" placeholder="Last name" aria-label="Last name">

      </div> --}}
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
        <select class="form-control "  name="term" required>
          <option value="">กรุณาเลือกภาคเรียน</option>

        <option value="ภาคเรียนที่1"@if($supervisions->term=="ภาคเรียนที่1") selected @endif>ภาคเรียนที่:1 </option>
          <option value="ภาคเรียนที่2"@if($supervisions->term=="ภาคเรียนที่2") selected @endif>ภาคเรียนที่:2 </option>




        </select>
    </div>
    <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-control "  name="year" required>
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
        <option value="{{ $i }}"@if($supervisions->year==$i) selected @endif>{{ $i }}</option>
    @endfor
@endfor
</select>



      </select>
  </div>
      </div>
      <br>
          <div class="modal-footer">
            <a href="/teacher/es1" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->







{{-- @endsection --}}
