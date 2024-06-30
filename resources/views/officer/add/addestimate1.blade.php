






{{-- @extends('layouts.appteacher') --}}
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
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">


<div class="row">
  <div class="col-md-12">
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title text-dark">เพิ่มข้อมูล เอกสารผลประเมินสหกิจศึกษา</strong>
      </div>
      <div class="card-body">
        <form method="POST"id="myForm" action="{{ route('addestimate3') }}"enctype="multipart/form-data">
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
            <label for="inputAddress" >ชื่อนักศึกษา</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-select" id="single-select-field3" data-placeholder="เลือกรายชื่อ" id="validationSelect2" name="user_id" required>
              <option value="">Select state</option>
              @foreach ($users as $row)
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="{{$row->id}}">{{$row->fname}}</option>

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

            <label for="inputAddress">ชื่อเอกสาร</label>
            {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}"  autofocus placeholder="name"> --}}
            <select class="form-control select" id="validationSelect1" name="namefile"required >
              <option value="">เลือกชื่อเอกสาร</option>
              {{-- @foreach ($establishment as $row) --}}
              {{-- <optgroup label="Mountain Time Zone"> --}}
                <option value="แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)">แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)</option>
                <option value="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)">แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)</option>
                <option value="แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)">แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)</option>
                <option value="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)">แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)</option>
              </optgroup>

              {{-- @endforeach --}}
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
    $( '#single-select-field3' ).select2( {
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
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสารประเมิน </label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="filess" id="validatedCustomFile" required>
                  <label class="custom-file-label" for="validatedCustomFile">เลือไฟล์PDF</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>

          </div>

        </div>
        @if(session('status'))
        <div class="alert alert-info mt-3">
            {{ session('status') }}
        </div>
    @endif
        <div class="col-md-2">
          <label for="inputAddress"class="col-form-label ">คะแนน</label>
          {{-- <input type="text" class="form-control" @error('score') is-invalid @enderror name="score" value="{{ old('score') }}"  autofocus placeholder="score" placeholder="Last name" aria-label="Last name"> --}}
          <input type="text" class="form-control" id="scoreInput" name="score" value="{{ old('score') }}"maxlength="3" autofocus placeholder="score"required>
          <div id="scoreFeedback" class="mt-2"></div>
        </div>

      <script>
        // document.getElementById('scoreInput').addEventListener('input', function() {
        //     const score = parseFloat(this.value);
        //     const feedback = document.getElementById('scoreFeedback');


//             if (isNaN(score)) {
//     feedback.textContent = 'โปรดใส่คะแนนที่ถูกต้อง';
//     feedback.style.color = 'red';
// } else if (score > 200) {
//     feedback.textContent = 'คะแนนเกินกำหนด (มากกว่า 200)';
//     feedback.style.color = 'red';
// } else if (score >= 100) {
//     feedback.textContent = 'ผ่าน';
//     feedback.style.color = 'green';
// } else if (score >= 80) {
//     feedback.textContent = 'ผ่าน';
//     feedback.style.color = 'green';
// } else if (score >= 50) {
//     feedback.textContent = 'ผ่าน';
//     feedback.style.color = 'orange';
// } else if (score < 50) {
//     feedback.textContent = 'ไม่ผ่าน';
//     feedback.style.color = 'red';
// } else if (score < 40) {
//     feedback.textContent = 'ไม่ผ่าน';
//     feedback.style.color = 'red';
// } else {
//     feedback.textContent = '';
// }
//         });

document.getElementById('validationSelect1').addEventListener('change', function() {
    const selectedValue = this.value;
    const scoreInput = document.getElementById('scoreInput');
    const feedback = document.getElementById('scoreFeedback');

    scoreInput.addEventListener('input', function() {
        const score = parseFloat(this.value);

        if (selectedValue === "แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)") {
            if (isNaN(score)) {
                feedback.textContent = 'โปรดใส่คะแนนที่ถูกต้อง';
                feedback.style.color = 'red';
            } else if (score > 200) {
                feedback.textContent = 'คะแนนเกินกำหนด (มากกว่า 200)';
                feedback.style.color = 'red';
            } else if (score > 100) {
                feedback.textContent = 'ผ่าน';
                feedback.style.color = 'green';
            }else if (score >= 100) {
                feedback.textContent = 'ไม่ผ่าน';
                feedback.style.color = 'red';
            }

            else {
                feedback.textContent = 'ไม่ผ่าน';
                feedback.style.color = 'red';
            }
        } else {
            if (isNaN(score)) {
                feedback.textContent = 'โปรดใส่คะแนนที่ถูกต้อง';
                feedback.style.color = 'red';
            } else if (score > 100) {
                feedback.textContent = 'คะแนนเกินกำหนด (มากกว่า 100)';
                feedback.style.color = 'red';
            } else if (score >= 80) {
                feedback.textContent = 'ผ่าน';
                feedback.style.color = 'green';
            } else if (score >= 50) {
                feedback.textContent = 'ผ่าน';
                feedback.style.color = 'orange';
            } else {
                feedback.textContent = 'ไม่ผ่าน';
                feedback.style.color = 'red';
            }
        }
    });
});
    </script>

      {{-- <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">สถานะ</label>
        <select class="form-control "  name="Status_supervision" required>
          <option value="">กรุณาเลือก</option>

        <option value="ประเมินผลแล้ว">ประเมินผลแล้ว </option>
          <option value="รอประเมินผล ">รอประเมินผล </option>
          <option value="ไม่ผ่าน ">ไม่ผ่าน</option>




        </select>
    </div> --}}
    {{-- <div class="col-md-2">
      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
      <select class="form-control "  name="year" required>
        <option value="">กรุณาเลือกปีการศึกษา</option> --}}
        {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
        <option value="{{ $year }}">{{ $year }}</option>
    @endforeach --}}
    {{-- @php
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
  </div> --}}
      </div>
      <br>
          <div class="modal-footer">
            <a href="/officer/Evaluate" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="button" class="btn mb-2 btn-primary"id="confirmButton">เพิ่มข้อมูล</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->


{{-- onclick="return confirm('ยืนยันการเพิ่มข้อมูล !!');" --}}
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
