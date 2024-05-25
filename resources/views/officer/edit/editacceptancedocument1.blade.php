







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลตรวจสอบเอกสาร</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST" action="{{url('/officer/updateacceptance/'.$acceptances->acceptance_id)}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method("put") --}}
                    @if ($errors->any())


                <ul>
                    @foreach ($errors->all() as $error)

                    @endforeach
                </ul>
            </div>
        @endif
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อนักศึกษา</label>

                        <select class="form-select" id="single-select-field2" data-placeholder="เลือกรายชื่อ" name="user_id"  required>
                            <option value="">กรุณาเลือกชื่อ</option>
                            <option value="-"@if($acceptances->user_id=="-") selected @endif required>-</option>
                            @foreach ($user as $row)
                            {{-- <optgroup label="Mountain Time Zone"> --}}
                              <option value="{{$row->id}}"{{$row->id==$acceptances->user_id ?'selected':''}}>{{$row->fname}}  </option>
                              {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}



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
    $( '#single-select-field2' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );

    </script>


                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div>


                      {{-- <div class="col-md-2">
                        <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
                        <select class="form-select"  name="term" required>
                          <option value="">กรุณาเลือกภาคเรียน</option>


                          <option value="ภาคเรียนที่1"@if($acceptances->term=="ภาคเรียนที่1") selected @endif>ภาคเรียนที่:1 </option>
                          <option value="ภาคเรียนที่2"@if($acceptances->term=="ภาคเรียนที่2") selected @endif>ภาคเรียนที่:2 </option>



                        </select>

                    </div> --}}
                    {{-- <div class="col-md-2">
                      <label for="inputAddress"class="col-form-label ">ปีการศึกษา</label>
                      <select class="form-select "  name="year" required> --}}
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

                        <option value="{{ $i }}"@if($acceptances->year==$i ) selected @endif>{{ $i }}</option>
                    @endfor
                @endfor
                </select>



                      </select>
                  </div> --}}
                         <div class="row">
          <div class=" col-md-4">
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสารตอบรับ (สก.02)</label>

            <div class="custom-file">
                <input class="form-control" type="file" name="filess"value="{{$acceptances->filess}} "id="formFile">
                <label class="custom-file-label" for="inputGroupFile01">เลือกไฟล์PDF</label>
              </div>

        </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                         <input type="text" class="form-control" name="annotation" value="{{$acceptances->annotation}}" required >

                        @error('annotation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">สถานะตรวจสอบเอกสาร</label>

                        <select class="form-control " aria-label=".form-select-sm example" name="Status_acceptance" required>
                          <option selected>กรุณาเลือก</option>

                          <option value="ตอบรับนักศึกษาแล้ว"@if($acceptances->Status_acceptance=="ตอบรับนักศึกษาแล้ว") selected @endif required>ตอบรับนักศึกษาแล้ว</option>
                          <option value="ยังไม่ได้ตอบรับนักศึกษาแล้ว"@if($acceptances->Status_acceptance=="ยังไม่ได้ตอบรับนักศึกษาแล้ว") selected @endif required>ยังไม่ได้ตอบรับนักศึกษา</option>
                          <option value="ไม่ผ่าน"@if($acceptances->Status_acceptance=="ไม่ผ่าน") selected @endif required>ไม่ผ่าน</option>
                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                      </div>




                    </div>
              </div> <br>
                <div class="modal-footer">

                  <a href="/officer/acceptancedocument1"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>

                  <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>












@endsection
