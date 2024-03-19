







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">รายชื่ออาจารย์นิเทศ</h5>
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
                            <h5 class="modal-title" id="exampleModalLabel">อาจารย์นิเทศ</h5>

                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{url('/studenthome/updatecalendar2confirm/'.$events->id)}}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">

                                <br>
                                {{-- @foreach ($events as $row)
                                {{$events->firstItem()+$loop->index}} --}}
                                {{$events->List_teacher}}
                                {{-- @endforeach --}}
                              </div>
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
                            {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button> --}}
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
