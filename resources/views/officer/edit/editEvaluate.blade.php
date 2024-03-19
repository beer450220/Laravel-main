







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


                  <form method="POST" action="{{url('/officer/updateEvaluate/'.$supervisions->supervision_id)}}" enctype="multipart/form-data">
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
            <div class="form-group col-md-4">
              <label for="inputAddress">ชื่อเอกสาร</label>
              {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}"  autofocus placeholder="name"> --}}
              <select class="form-select" id="validationSelect1" name="namefile" required>
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


              @error('name')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
            </div>
            <div class="col-md-4">
                <label for="inputAddress" >ชื่อนักศึกษา</label>
                {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
                <select class="form-select" id="validationSelect2" name="user_id" required>
                  <option value="">Select state</option>
                  @foreach ($users as $row)
                  {{-- <optgroup label="Mountain Time Zone"> --}}
                    {{-- <option value="{{$row->id}}">{{$row->fname}}</option> --}}
                    <option value="{{$row->id}}"{{$row->id==$supervisions->user_id ?'selected':''}}>{{$row->fname}}</option>
                  </optgroup>

                  @endforeach
                </select>

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
                      <div class="col-md-4">
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

                      </div>




                    </div>
                    <div class="row">
                        <div class=" col-md-4">
                          <label for="recipient-name" class="col-form-label">ไฟล์เอกสารประเมิน </label>
                              <div class="custom-file mb-6">
                                <input class="form-control" type="file" id="formFile" name="filess">
                            </div>     </div>
                                <div class="col-md-2">
                            <label for="inputAddress"class="col-form-label ">คะแนน</label>

                            <input type="text" class="form-control" @error('score') is-invalid @enderror name="score" value="{{$supervisions->score}}"  autofocus placeholder="score" placeholder="Last name" aria-label="Last name"required>

                        </div>
                        <div class="col-md-2">
                            <label for="inputAddress"class="col-form-label ">ภาคเรียน</label>
                            <select class="form-select "  name="term" required>
                              <option value="">กรุณาเลือกภาคเรียน</option>

                            <option value="ภาคเรียนที่1"@if($supervisions->term=="ภาคเรียนที่1") selected @endif required>ภาคเรียนที่:1 </option>
                              <option value="ภาคเรียนที่2"@if($supervisions->term=="ภาคเรียนที่2") selected @endif required>ภาคเรียนที่:2 </option>




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

                      </div>  </div>
              </div>
                <div class="modal-footer">

                  <a href="/officer/Evaluate"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                  <button type="reset" class="btn mb-2 btn-danger">ยกเลิก</button>
                  <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>











@endsection
