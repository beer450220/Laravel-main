







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ขอเปลี่ยนเวลานัดนิเทศ</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">



                    {{-- @method("put") --}}
                    @if ($errors->any())


                <ul>
                    @foreach ($errors->all() as $error)

                    @endforeach
                </ul>
            </div>
        @endif



                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>

                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{url('/studenthome/calendar2confirmupdate/'.$events->id)}}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">ขอเปลี่ยนเวลานัดนิเทศ</label>
                                {{-- <input type="datetime-local" class="form-control" id="recipient-name" name="appointment_time" value="{{ \Carbon\Carbon::parse($events->appointment_time)->format('Y-m-d\TH:i') }}"> --}}
                                <input type="text" class="form-control" id="recipient-name" name="appointment_time" value="{{$events->appointment_time}}">
                                {{-- <input class="form-control" id="example-date" type="datetime-local" name="appointment_time"value="{{ \Carbon\Carbon::parse($events->appointment_time)->format('Y-m-d\TH:i') }}"  autofocus placeholder="title"> --}}
                                <br>
                              {{-- <label for="recipient-name" class="col-form-label">วันที่</label> --}}
                              <div class="row">
                              {{-- <div class="col-6"> <span>   <select class="form-control  required" name="Statustime3" > --}}
                                    {{-- <option selected>วัน</option>
                                    <option value="วันจันทร์"@if($events->Statusevents=="วันจันทร์") selected @endif required>วันจันทร์</option>
                                    <option value="วันอังคาร"@if($events->Statusevents=="วันอังคาร") selected @endif required>วันอังคาร</option>
                                    <option value="วันพุทธ"@if($events->Statusevents=="วันพุทธ") selected @endif required>วันพุทธ</option>
                                    <option value="วันพฤหัสบดี"@if($events->Statusevents=="วันพฤหัสบดี") selected @endif required>วันพฤหัสบดี</option>
                                    <option value="วันศุกร์"@if($events->Statusevents=="วันศุกร์") selected @endif required>วันศุกร์</option> --}}



                                  </select>
                                  {{-- <label for="recipient-name" class="col-form-label">เดือน</label> --}}

                                  {{-- <select class="form-control  required" name="Statustime1" >
                                    <option selected>เดือน</option>
                                    <option value="มกราคม"@if($events->Statusevents=="มกราคม") selected @endif required>มกราคม</option>
                                    <option value="กุมภาพันธ์"@if($events->Statusevents=="กุมภาพันธ์") selected @endif required>กุมภาพันธ์</option>
                                    <option value="มีนาคม"@if($events->Statusevents=="มีนาคม") selected @endif required>มีนาคม</option>
                                    <option value="เมษายน"@if($events->Statusevents=="เมษายน") selected @endif required>เมษายน</option>
                                    <option value="พฤษภาคม"@if($events->Statusevents=="พฤษภาคม") selected @endif required>พฤษภาคม</option>

                                    <option value="มิถุนายน"@if($events->Statusevents=="มิถุนายน") selected @endif required>มิถุนายน</option>
                                    <option value="กรกฎาคม"@if($events->Statusevents=="กรกฎาคม") selected @endif required>กรกฎาคม</option>
                                    <option value="สิงหาคม"@if($events->Statusevents=="สิงหาคม") selected @endif required>สิงหาคม</option>
                                    <option value="กันยายน"@if($events->Statusevents=="กันยายน") selected @endif required>กันยายน</option>
                                    <option value="ตุลาคม"@if($events->Statusevents=="ตุลาคม") selected @endif required>ตุลาคม</option>
                                    <option value="พฤศจิกายน"@if($events->Statusevents=="พฤศจิกายน") selected @endif required>พฤศจิกายน</option>
                                    <option value="ธันวาคม"@if($events->Statusevents=="ธันวาคม") selected @endif required>ธันวาคม</option>

                                  </select> --}}

                                  {{-- <label for="recipient-name" class="col-form-label">ปี</label> --}}
{{--
                                  <select class="form-control  required" name="buddhist_year" >
                                    <option selected>ปี</option>
                                    @for ($year = 2550; $year <= 2600; $year++)
        <option value="{{ $year }}"@if($events->Status_events==$year) selected @endif>{{ $year }}</option>
    @endfor
                                  </select> --}}
                                  </span>

                            </div>       </div>

                              {{-- <div class="mb-3">
                                <label for="message-text" class="col-form-label">รับทราบและยืนยันเวลานัดนิเทศ</label>
                                <select class="form-select form-select" name="Status" aria-label="Default select example">
                                  <option selected>กรุณายืนยันข้อมูล</option>



                                 <option value="รอยืนยัน"@if($events->Statusevents=="รอยืนยัน") selected @endif required >รอยืนยัน</option>
                                  <option value="ยืนยันแล้ว"@if($events->Statusevents=="ยืนยันแล้ว") selected @endif required >ยืนยันแล้ว</option>

                                </select>
                              </div> --}}

                          </div>
                          <div class="modal-footer">
                            <a href="/studenthome/calendar2confirm"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                            <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button>
                        </form>  </div>
                        </div>
                      </div>
                    </div>
              </div>
                <div class="modal-footer">


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>











@endsection
