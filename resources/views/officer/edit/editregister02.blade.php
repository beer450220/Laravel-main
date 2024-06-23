







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ไม่อุมัติเอกสาร</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST"id="myForm" action="{{url('/officer/updateregister01/'.$registers->id)}}" enctype="multipart/form-data">
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
                      {{-- <div class="col-md-4">

                    <label for="recipient-name" class="col-form-label">สถานะตรวจสอบเอกสาร</label>

                    <select class="form-control " aria-label=".form-select-sm example" name="Status_registers"required>
                      <option selected>กรุณาเลือก</option>
                      <option value="อนุมัติเอกสารแล้ว"@if($registers->Status_registers=="อนุมัติเอกสารแล้ว") selected @endif required>อนุมัติเอกสารแล้ว</option>
                      <option value="ไม่อนุมัติ"@if($registers->Status_registers=="ไม่อนุมัติ") selected @endif required>ไม่อนุมัติ</option>
                      <option value="รออนุมัติ"@if($registers->Status_registers=="รออนุมัติ") selected @endif required >รออนุมัติ</option>

                    </select>
                    @error('Status_registers')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                      </div> --}}
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">หมายเหตุ</label>
                        <input type="text" class="form-control" name="annotation" value="{{$registers->annotation}}" required>

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
                  {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันข้อมูล !!');">ยืนยันข้อมูล</button> --}}
                  <button  type="button" class="btn mb-2 btn-primary"id="confirmButton">ยืนยันข้อมูล</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



     <script type="text/javascript">
        document.getElementById('confirmButton').addEventListener('click', function(event) {
            event.preventDefault(); // ป้องกันการลิงก์ทันที

            var link = this.href; // เก็บ URL จาก href ของลิงก์

            Swal.fire({
                title: 'ยืนยันการอนุมัติข้อมูล?',
                text: "คุณแน่ใจหรือไม่ว่าต้องการอนุมัติข้อมูลนี้",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่, อนุมัติ!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    // ถ้าผู้ใช้กด 'ใช่, อนุมัติ!'
                    window.location.href = link; // เปลี่ยนหน้าไปยัง URL ใน href ของลิงก์
                }
            })
        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>







@endsection
