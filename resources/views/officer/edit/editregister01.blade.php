







@extends('layouts.officermin1')

@section('content')
@yield('content')




        <div class="col-md-12 mb-12">





            <div class=" " role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
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
                <h5 class="card-title">{{ $registers->fname }} </h5>
                {{-- <p class="card-text">User ID: {{ $registers->user_id }}</p> --}}
                <!-- แสดงข้อมูลเพิ่มเติมที่ต้องการ -->
            </div>
        </div>
    @endif


                      {{$registers->namefile}}
                      @if ($registers2->isEmpty())
                      @else
                      <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อไฟล์</th>
                                <th>สถานะ</th>
                                <th>ดูไฟล์เอกสาร</th>
                                <th>หมายเหตุ</th>
                                <th style="width:10%">ยืนยันข้อมูล</th>
                            </tr>
                        </thead>
                        <tbody>

                      @foreach ($registers2 as $row)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->namefile }}</td>
                        <td>  @if ($row->Status_registers === 'รออนุมัติ')
                            <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                        @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                            <span class="badge badge-pill badge-success">{{ $row->Status_registers }}</span>
                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                            <span class="badge badge-pill badge-danger">{{ $row->Status_registers }}</span>
                        @endif</td>
                        <td>
                            <a href="../document/{{ $row->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a>
                        </td>
                            <td>{{ $row->annotation }}</td>
                        <td>
                            @if ($row->Status_registers === 'รออนุมัติ')
                            <div class="d-grid gap-2 d-md-block">
                            <a href="/officer/confirm2/{{$row->id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>

                            <a href="/officer/editregister02/{{$row->id}}"type="button"  class="btn btn-outline-danger fa-solid fa-circle-xmark fe-16">ไม่อนุมัติ</a></td>
                        </div>
                            @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                            <a href="/officer/editregister1/{{$row->id}}"type="button"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขข้อมูล</a></td>
                        @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                        <a href="/officer/editregister1/{{$row->id}}"type="button"  class="btn btn-outline-warning fa-solid fa-pen-to-square fe-16">แก้ไขข้อมูล</a></td>
                        @endif
                    </td>
                    </tr>
 @endforeach
                      @endif
                      {!! $registers2->links('pagination::bootstrap-5') !!}
            </tbody>
        </table>


                      {{-- @if ($row->user_id === $registers->id)
                      <span class="badge badge-pill badge-warning">ss</span>
                  @elseif ($row->Status_registers === 'อนุมัติเอกสารแล้ว')
                    ss1
                  @elseif ($row->Status_registers === 'ไม่อนุมัติ')
                  2
                  @endif --}}



                <div class="modal-footer">

                  <a href="/officer/register1"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
                  {{-- <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการอัพเดทข้อมูล !!');">อัพเดท</button> --}}
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>











@endsection
