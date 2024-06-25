







@extends('layouts.appteacher3')

@section('content')
@yield('content')



<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

        <div class="col-md-12 mb-12">





            <div class=" " role="document">
              <div class="modal-content ">
                <div class="modal-header  text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลตรวจสอบเอกสาร</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST" action="{{url('/officer/updateregister1/'.$registers->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method("put") --}}
                    @if ($errors->any())


                <ul>
                    @foreach ($errors->all() as $error)

                    @endforeach
                </ul>
            </div>
        @endif
        @if ($registers)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ชื่อนักศึกษา  {{ $registers->fname }} </h5>
                {{-- <p class="card-text">User ID: {{ $registers->user_id }}</p> --}}
                <!-- แสดงข้อมูลเพิ่มเติมที่ต้องการ -->

        </div> </div>
    @endif
<br>

                      {{-- {{$registers->namefile}} --}}
                      @if ($registers2->isEmpty())
                      @else
                      <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                {{-- <th> <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAll" onclick="toggleSelectAll(this)">
                                    <label class="form-check-label" for="selectAll">เลือกอนุมัติทั้งหมด</label> </div>
                            </div></th> --}}
                                <th>ลำดับ</th>
                                <th>ชื่อไฟล์</th>
                                <th>สถานะ</th>
                                <th>ดูไฟล์เอกสาร</th>
                                <th>หมายเหตุ</th>
                                {{-- <th style="width:10%">ยืนยันข้อมูล</th> --}}

                            </tr>
                        </thead>
                        <tbody>

                      @foreach ($registers2 as $row)
                      <tr>
                        {{-- <td> @if ($row->Status_registers === 'รออนุมัติ')

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox1" name="Status_registers">
                                <label class="form-check-label" for="checkbox1">อนุมัติเอกสาร</label>
                            </div>@endif</td> --}}

                            <td>{{ $loop->iteration }}</td>

                        <td>{{ $row->namefile }}</td>


                        <td>  @if ($row->Status_informdetails === 'รออนุมัติ')
                            <h3><span class="badge badge-pill badge-warning">{{ $row->Status_informdetails }}</span></h3>
                        @elseif ($row->Status_informdetails === 'อนุมัติเอกสารแล้ว')
                        <h3> <span class="badge badge-pill badge-success">{{ $row->Status_informdetails }}</span></h3>
                        @elseif ($row->Status_informdetails === 'ไม่อนุมัติ')
                        <h3> <span class="badge badge-pill badge-danger">{{ $row->Status_informdetails }}</span></h3>
                        @endif</td>
                        <td>
                            <a href="../document/{{ $row->files }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a>
                        </td>
                            <td>{{ $row->annotation }}</td>
                        {{-- <td>
                            @if ($row->Status_registers === 'รออนุมัติ')




                            <a href="/officer/editregister02/{{$row->id}}"type="button"  class="btn btn-outline-danger fa-solid fa-circle-xmark fe-16">ไม่อนุมัติ</a>

                        </div>
                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                            <a href="/officer/editregister1/{{$row->id}}"type="button"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขข้อมูล</a></td>
                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                        <a href="/officer/editregister1/{{$row->id}}"type="button"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขข้อมูล</a></td> --}}

                        {{-- @endif --}}
                    </td>
                    </tr>
 @endforeach
                      @endif
                      {!! $registers2->links('pagination::bootstrap-5') !!}
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function toggleSelectAll(source) {
                checkboxes = document.getElementsByName('Status_registers');
                for(var i=0, n=checkboxes.length;i<n;i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
        </script>
                      {{-- @if ($row->user_id === $registers->id)
                      <span class="badge badge-pill badge-warning">ss</span>
                  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                    ss1
                  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                  2
                  @endif --}}



                <div class="modal-footer">
                    {{-- <a href="/officer/confirm2/{{$row->id}}"  onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-pen-to-square fe-16">อนุมัติข้อมูล</a> --}}
                  <a href="/teacher/informdetails1"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                  {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการอัพเดทข้อมูล !!');">อัพเดท</button> --}}
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>


<!-- Button to trigger modal -->


<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ยืนยันการส่งเอกสาร</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{url('/officer/updateregister01/'.$registers->id)}}" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputValue">หมายเหตุ:</label>{{$registers->id}}
            <input type="text" class="form-control" id="inputValue" required>
          </div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">ยืนยัน</button>
       </form></div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function showConfirmDialog() {
    $('#confirmModal').modal('show');
}

function submitForm() {
    var inputValue = document.getElementById('inputValue').value;
    if (inputValue) {
        // Process the input value and submit the form
        console.log('Input value:', inputValue);
        // Here you can submit the form or make an AJAX request with the input value
        $('#confirmModal').modal('hide');
        alert('Form submitted with input value: ' + inputValue);
        // ตัวอย่างการส่งข้อมูลไปยัง server ด้วย AJAX
        // $.post('/your-endpoint', { inputValue: inputValue }, function(response) {
        //     alert('Response from server: ' + response);
        // });
    } else {
        alert('กรุณากรอกข้อมูล');
    }
}
</script>








@endsection
