







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูลตรวจสอบเอกสาร เอกสารปฏิบัติงานนักศึกษา</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST"id="myForm" action="{{url('/officer/updateinformdetails2/'.$informdetails->informdetails_id)}}" enctype="multipart/form-data">
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

                        <label for="recipient-name" class="col-form-label">สถานะตรวจสอบเอกสาร</label>

                        <select class="form-control " aria-label=".form-select-sm example" name="Status_informdetails">
                          {{-- <option selected>กรุณาเลือก</option> --}}

                          {{-- <option value="อนุมัติเอกสารแล้ว"@if($informdetails->Status_informdetails=="อนุมัติเอกสารแล้ว") selected @endif required>อนุมัติเอกสารแล้ว</option> --}}
                          <option value="ไม่อนุมัติ"@if($informdetails->Status_informdetails=="ไม่อนุมัติ") selected @endif required>ไม่อนุมัติ</option>
                          {{-- <option value="รออนุมัติ"@if($informdetails->Status_informdetails=="รออนุมัติ") selected @endif required >รออนุมัติ</option> --}}
                        </select>
                        @error('Status_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                         <input type="text" class="form-control" name="annotation" value="{{$informdetails->annotation}}"required >

                        @error('annotation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                      </div>




                    </div>
              </div>
                <div class="modal-footer">

                  <a href="{{ url()->previous() }}"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                  {{-- <button type="button" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันข้อมูล !!');">ยืนยันข้อมูล</button> --}}

                  <button type="button"id="confirmButton" class="btn mb-2 btn-primary">ยืนยันข้อมูล</button>
                </div></form>
              </div>
            </div>



    <script>
        document.getElementById('confirmButton').addEventListener('click', function(event) {
            Swal.fire({
                // title: 'คุณแน่ใจหรือไม่?',',
                text: "คุณต้องการยืนยันข้อมูลนี้หรือไม่?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่, ยืนยันข้อมูล!',
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
