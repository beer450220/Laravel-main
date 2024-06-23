







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ข้อมูล</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST"id="myForm" action="{{url('/officer/updateEvaluate/'.$supervisions->supervision_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method("put") --}}
                    @if ($errors->any())
                    <div class="alert alert-danger col-md-4">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

            </div>
        @endif


        <div class="row">
            <div class="form-group col-md-4">
  <label for="inputAddress" >ชื่อนักศึกษา</label>
                {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
                <select class="form-select" id="single-select-field4" data-placeholder="Choose one thing" required name="user_id" required>
                  <option value="">Select state</option>
                  @foreach ($users as $row)
                  {{-- <optgroup label="Mountain Time Zone"> --}}
                    {{-- <option value="{{$row->id}}">{{$row->fname}}</option> --}}
                    <option value="{{$row->id}}"{{$row->id==$supervisions->user_id ?'selected':''}}>{{$row->fname}}</option>
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
              <select class="form-control" id="validationSelect1" name="namefile" required>
                <option value="">เลือกชื่อเอกสาร</option>
                {{-- @foreach ($establishment as $row) --}}
                {{-- <optgroup label="Mountain Time Zone"> --}}
                  <option value="แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)"@if($supervisions->namefile=="แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)") selected @endif required>แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)</option>
                  <option value="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)"@if($supervisions->namefile=="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)") selected @endif required>แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)</option>
                  <option value="แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)"@if($supervisions->namefile=="แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)") selected @endif required>แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)</option>
                  <option value="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)"@if($supervisions->namefile=="แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)") selected @endif required>แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)</option>
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
    $( '#single-select-field4' ).select2( {
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
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                         <input type="text" class="form-control" name="annotation" value="{{$supervisions->annotation}}" required>

                        @error('annotation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div>
                      {{-- <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">สถานะตรวจสอบเอกสาร</label>

                        <select class="form-select " aria-label=".form-select-sm example" name="Status_supervision"required>
                          <option selected>กรุณาเลือก</option>
                          <option value="ตรวจสอบเอกสารแล้ว"@if($supervisions->Status_supervision=="ตรวจสอบเอกสารแล้ว") selected @endif required>ตรวจสอบเอกสารแล้ว</option>
                          <option value="ไม่ผ่านตรวจสอบเอกสาร"@if($supervisions->Status_supervision=="ไม่ผ่านตรวจสอบเอกสาร") selected @endif required>ไม่ผ่านตรวจสอบเอกสาร</option>
                          <option value="รอตรวจสอบเอกสาร"@if($supervisions->Status_supervision=="รอตรวจสอบเอกสาร") selected @endif required >รอตรวจสอบเอกสาร</option>

                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div> --}}




                    </div>
                    <div class="row">
                        <div class=" col-md-4">
                          <label for="recipient-name" class="col-form-label">ไฟล์เอกสารประเมิน </label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"id="inputGroupFile01" @error('filess') is-invalid @enderror name="filess" value="{{$supervisions->filess}}"  autofocus placeholder="">
                            <label class="custom-file-label" for="inputGroupFile01">เลือกไฟล์PDF</label>
                          </div>
                        </div>





                                <div class="col-md-2">
                            <label for="inputAddress"class="col-form-label ">คะแนน</label>

                            {{-- <input type="text" class="form-control"id="scoreInput" @error('score') is-invalid @enderror name="score" value="{{$supervisions->score}}"maxlength="3"  autofocus placeholder="score" placeholder="Last name" aria-label="Last name"required> --}}

                            <input type="text" class="form-control" id="scoreInput" name="score" value="{{$supervisions->score}}"maxlength="3" autofocus placeholder="score"required>
          <div id="scoreFeedback" class="mt-2"></div>


                            <script>

                                document.getElementById('scoreInput').addEventListener('input', function() {
                                    const score = parseFloat(this.value);
                                    const feedback = document.getElementById('scoreFeedback');

                                    if (isNaN(score)) {
                            feedback.textContent = 'โปรดใส่คะแนนที่ถูกต้อง';
                            feedback.style.color = 'red';
                        } else if (score > 200) {
                            feedback.textContent = 'คะแนนเกินกำหนด (มากกว่า 200)';
                            feedback.style.color = 'red';
                        } else if (score >= 100) {
                            feedback.textContent = 'ผ่าน';
                            feedback.style.color = 'green';
                        } else if (score >= 80) {
                            feedback.textContent = 'ผ่าน';
                            feedback.style.color = 'green';
                        } else if (score >= 50) {
                            feedback.textContent = 'ผ่าน';
                            feedback.style.color = 'orange';
                        } else if (score < 50) {
                            feedback.textContent = 'ไม่ผ่าน';
                            feedback.style.color = 'red';
                        } else if (score < 40) {
                            feedback.textContent = 'ไม่ผ่าน';
                            feedback.style.color = 'red';
                        } else {
                            feedback.textContent = '';
                        }
                                });
                            </script>
                        </div>
                        {{-- <div class="col-md-2">
                            <label for="inputAddress"class="col-form-label ">สถานะ</label>
                            <select class="form-control"  name="Status_supervision" required>
                              <option value="">กรุณาเลือก</option>

                            <option value="ประเมินผลแล้ว"@if($supervisions->Status_supervision=="ประเมินผลแล้ว") selected @endif required>ประเมินผลแล้ว</option>
                              <option value="รอประเมินผล"@if($supervisions->Status_supervision=="รอประเมินผล") selected @endif required>รอประเมินผล</option>
                              <option value="ไม่ผ่าน"@if($supervisions->Status_supervision=="ไม่ผ่าน") selected @endif required>ไม่ผ่าน</option>



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
                          $startYear = 2500; // ปีเริ่มต้น
                          $endYear = $currentYear + 100; // ปีสิ้นสุด
                      @endphp

                      @for ($i = $endYear; $i >= $startYear; $i--)
                          @for ($j = 1; $j <= 1; $j++)
                              <option value="{{ $i }}"@if($supervisions->year==$i) selected @endif>{{ $i }}</option>
                          @endfor
                      @endfor
                      </select> --}}

                      {{-- </div> --}}
                     </div>
              </div>
                <div class="modal-footer">

                  <a href="/officer/Evaluate"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                  <button type="reset" class="btn mb-2 btn-danger">ยกเลิก</button>
                  {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button> --}}
                  <button  type="button" class="btn mb-2 btn-primary"id="confirmButton">แก้ไขข้อมูล</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>


        <script>
            document.getElementById('confirmButton').addEventListener('click', function(event) {
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
                        document.getElementById('myForm').submit();
                    }
                });
            });
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>









@endsection
