@extends('layouts.officermin')

@section('content')
<title>user</title>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
<div class="col-md-12 my-4">
    <div class="card shadow">
      <div class="card-body">
        <h5 class="card-title">ข้อมูลตรวจสอบเอกสาร</h5>
        <form action="{{ route('searchin03') }}" method="GET" class="form-inline">

            <div class="form-row">
              <div class="form-group col-auto">

                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="keyword"  id="keyword" value="{{ request('keyword') }}" placeholder="Search">

              </div>

            </div>

            <div class="">
              {{-- <a href="" name="keyword" value="{{ request('keyword') }}"  type="submit"  class=" btn btn-outline-warning">ค้นหาข้อมูล</a> --}}
            </form>
            </div>

        <div class="container">
            <div class="row">
              <div class="col-10">
                <p class="card-text"> <tbody>
                </p>
              </div>
              <div class="col col-lg-2">
                {{-- <button type="button" class=" btn btn-outline-success">เพิ่มข้อมูล</button> --}}
              </div>
            </div>

        </div>
        <br>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อนักศึกษา</th>
                <th>สมัครสหกิจศึกษา</th>

                {{-- <th>รูปภาพ</th> --}}
                {{-- <th>ปีการศึกษา</th>
                <th>ภาคเรียน</th> --}}
               <th>สถานะ</th>
               {{-- <th>หมายเหตุ</th> --}}
                {{-- <th style="width:10%">ดูไฟล์เอกสาร</th> --}}

                {{-- <th style="width:10%">ยืนยันข้อมูล</th> --}}
              {{-- <th style="width:10%">ลบ</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($registers1 as $row)
            {{-- <td ></td> --}}

            <td >{{ $row->fname   }}  </td>
            <td >แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)</td>
            <td >  @if ($registers1->isEmpty())
            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
              @else



                                                                        @if ($row->namefile === 'แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา(สก01)')
                                                                        <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                        @else()
                                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                    @endif
                                                                       @endif

                                                                       @if ($row->Status_registers === 'รอตรวจสอบ')
                                                                       <span class="badge badge-pill badge-warning">{{ $row->Status_registers }}</span>
                                                                   @elseif ($row->Status_registers === 'ตรวจสอบเอกสารแล้ว')
                                                                       <span class="badge badge-pill badge-success">{{ $row->Status_registers}}</span>
                                                                   @elseif ($row->Status_registers === 'ไม่ผ่าน')
                                                                       <span class="badge badge-pill badge-danger">{{ $row->Status_registers}}</span>
                                                                   @endif
            </td>
              {{-- <td>{{ $row->annotation }}</td> --}}

{{-- download --}}
              {{-- <td>
                @if ($row->Status_registers === 'รอตรวจสอบ')
                <div class="d-grid gap-2 d-md-block">
                <a href="/teacher/confirm02/{{$row->id}} " onclick="return confirm('ยืนยันข้อมูล !!');" class="btn btn-outline-success fa-solid fa-check fe-16">อนุมัติ</a><br>
                <a href="/teacher/editregister2/{{$row->id}}"type="button"  class="btn btn-outline-danger fa-solid fa-xmark fe-16">ไม่อนุมัติ</a></td>
            </div>
                @elseif ($row->Status_registers === 'ตรวจสอบเอกสารแล้ว')

            @elseif ($row->Status_registers === 'ไม่ผ่าน')

            @endif
        </td> --}}

             {{--  <td><a  href="/studenthome/delete/{{$row->id}}" class="btn btn-outline-danger fe fe-trash-2 fe-16"onclick="return confirm('ยืนยันการลบข้อมูล !!');"></a></td> --}}
            </tr>@endforeach

            <tr>
                @foreach ($registers2 as $row)
                {{-- <td ></td> --}}
                <td >{{ $row->fname   }}  </td>
            {{-- <th scope="row">2</th> --}}
            <th >ใบสมัครงานสหกิจศึกษา(สก03)</th>
            <td >  @if ($registers2->isEmpty())
                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                  @else



                                                                            @if ($row->namefile === 'ใบสมัครงานสหกิจศึกษา(สก03)')
                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                            @else()
                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                        @endif
                                                                           @endif
                </td>
                <tr>@endforeach

                    <tr>
                        @foreach ($registers3 as $row)
                        {{-- <td ></td> --}}
                        <td >{{ $row->fname   }}  </td>
                    {{-- <th scope="row">2</th> --}}
                    <th >แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)</th>
                    <td >  @if ($registers3->isEmpty())
                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                          @else



                                                                                    @if ($row->namefile === 'แบบคำรองขอหนังสือขอความอนุเคราะหรับนักศึกษาสหกิจศึกษา(สก04)')
                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                    @else()
                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                @endif
                                                                                   @endif
                        </td>
                        <tr>@endforeach

                            <tr>
                                @foreach ($registers17 as $row)
                                {{-- <td ></td> --}}
                                <td >{{ $row->fname   }} </td>
                            {{-- <th scope="row">2</th> --}}
                            <th >แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)</th>
                            <td >  @if ($registers17->isEmpty())
                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                  @else



                                                                                            @if ($row->namefile === 'แบบตอบรับและเสนองานนักศึกสหกิจศึกษา(สก.02)')
                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                            @else()
                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                        @endif
                                                                                           @endif
                                </td>
                                <tr>@endforeach
                            <tr>
                                @foreach ($registers8 as $row)
                                {{-- <td ></td> --}}
                                <td >{{ $row->fname   }}  </td>

                            <th >แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)</th>
                            <td >  @if ($registers8->isEmpty())
                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                  @else



                                                                                            @if ($row->namefile === 'แบบแจ้งรายละเอียดการปฏิบัติงาน(สก.07)')
                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                            @else()
                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                        @endif
                                                                                           @endif
                                </td>
                                <tr>@endforeach
                                    <tr>
                                        @foreach ($registers9 as $row)
                                        {{-- <td ></td> --}}
                                        <td >{{ $row->fname   }}  </td>

                                    <th >แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)</th>
                                    <td >  @if ($registers9->isEmpty())
                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                          @else



                                                                                                    @if ($row->namefile === 'แบบแจ้งแผนปฏิบัติงานสหกิจศึกษา(สก.08)')
                                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                    @else()
                                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                @endif
                                                                                                   @endif
                                        </td>
                                        <tr>@endforeach
                                            <tr>
                                                @foreach ($registers10 as $row)
                                                {{-- <td ></td> --}}
                                                <td >{{ $row->fname   }}  </td>

                                            <th >แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)</th>
                                            <td >  @if ($registers10->isEmpty())
                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                  @else



                                                                                                            @if ($row->namefile === 'แบบแจ้งโครงร่างรายงานการปฏิบัติงานสหกิจศึกษา(สก.09)')
                                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                            @else()
                                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                        @endif
                                                                                                           @endif
                                                </td>
                                                <tr>@endforeach
                                                    <tr>
                                                        @foreach ($registers12 as $row)
                                                        {{-- <td ></td> --}}
                                                        <td >{{ $row->fname   }} </td>

                                                    <th >แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา(สก.10)</th>
                                                    <td >  @if ($registers12->isEmpty())
                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                          @else



                                                                                                                    @if ($row->namefiles === 'สก.10 แบบฟอร์มขออนุญาตการออกนิเทศงานสหกิจศึกษา')
                                                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                                    @else()
                                                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                                @endif
                                                                                                                   @endif
                                                        </td>
                                                        <tr>@endforeach
                                                            <tr>
                                                                @foreach ($registers13 as $row)
                                                                {{-- <td ></td> --}}
                                                                <td >{{ $row->fname   }}   </td>

                                                            <th >แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)</th>
                                                            <td >  @if ($registers13->isEmpty())
                                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                  @else



                                                                                                                            @if ($row->namefile === 'แบบบันทึกการนิเทศสหกิจศึกษา(สก.12)')
                                                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                                            @else()
                                                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                                        @endif
                                                                                                                           @endif
                                                                </td>
                                                                <tr>@endforeach

                                                                    <tr>
                                                                        @foreach ($registers14 as $row)
                                                                        {{-- <td ></td> --}}
                                                                        <td >{{ $row->fname   }}  </td>

                                                                    <th >แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)</th>
                                                                    <td >  @if ($registers14->isEmpty())
                                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                          @else



                                                                                                                                    @if ($row->namefile === 'แบบประเมินผลนักศึกษาสหกิจศึกษา(สก.13)')
                                                                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                                                    @else()
                                                                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                                                @endif
                                                                                                                                   @endif
                                                                        </td>
                                                                        <tr>@endforeach

                                                                            <tr>
                                                                                @foreach ($registers15 as $row)
                                                                                {{-- <td ></td> --}}
                                                                                <td >{{ $row->fname   }}   </td>

                                                                            <th >แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)</th>
                                                                            <td >  @if ($registers15->isEmpty())
                                                                                <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                  @else



                                                                                                                                            @if ($row->namefile === 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.14)')
                                                                                                                                            <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                                                            @else()
                                                                                                                                            <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                                                        @endif
                                                                                                                                           @endif
                                                                                </td>
                                                                                <tr>@endforeach
                                                                                    <tr>
                                                                                        @foreach ($registers16 as $row)
                                                                                        {{-- <td ></td> --}}
                                                                                        <td >{{ $row->fname   }}  </td>

                                                                                    <th >แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)</th>
                                                                                    <td >  @if ($registers16->isEmpty())
                                                                                        <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                          @else



                                                                                                                                                    @if ($row->namefile === 'แบบประเมินรายงานนักศึกษาสหกิจศึกษา(สก.15)')
                                                                                                                                                    <span class="badge badge-pill badge-success"><i class="fa-solid fa-check"></i></span>


                                                                                                                                                    @else()
                                                                                                                                                    <span class="badge badge-pill badge-danger"><i class="fa-solid fa-xmark"></i></span>
                                                                                                                                                @endif
                                                                                                                                                   @endif
                                                                                        </td>
                                                                                        <tr>@endforeach
            {{-- @endforeach --}}
            {{-- @foreach ($registers1 as $row) --}}
            {{-- @foreach ($registers as $row)
        <tr class="">
            <td></td>
            <td>{{ $row->fname }} {{ $row->surname }}</td>
            <td>

                </td>
            <td></td>
            <td></td>
        </tr>
        <tr class="">
            <td></td>
            <td></td>
            {{-- <td>{{ $row->informdetails_namefile }}</td> --}}
            {{-- <td></td>
            <td></td>
        </tr>
        @endforeach --}}
          </tbody>
        </table>
         {!!$registers1->links('pagination::bootstrap-5')!!}
       {{-- {!! $registers2->links('pagination::bootstrap-5') !!}--}}
      </div>
    </div>
  </div> <!-- Bordered table -->
</div> <!-- end section -->







{{--
<table class="table table-hover">
    <thead class="thead-dark">
      <tr>
          <th>ลำดับ</th>
          <th>ชื่อนักศึกษา</th>
          <th>สมัครสหกิจศึกษา</th>
          <th>ตอบรับ</th>

         <th>สถานะ</th>

          <th style="width:10%">ดูไฟล์เอกสาร</th>


      </tr>
    </thead>
    <tbody>
      @foreach ($registers as $row)
      <td ></td>

      <td >{{ $row->fname   }}</td>
      <td >{{ $row->namefile   }}    {{ $row->acceptance_namefile  }}</td>
      <td >
      </td>

        <td></td>

      </tr>@endforeach --}}



                      {{-- <tr> --}}

      {{-- @endforeach --}}
      {{-- @foreach ($registers1 as $row) --}}
      {{-- @foreach ($registers as $row)
  <tr class="">
      <td></td>
      <td>{{ $row->fname }} {{ $row->surname }}</td>
      <td>

          </td>
      <td></td>
      <td></td>
  </tr>
  <tr class="">
      <td></td>
      <td></td>
      {{-- <td>{{ $row->informdetails_namefile }}</td> --}}
      {{-- <td></td>
      <td></td>
  </tr>
  @endforeach --}}
    {{-- </tbody>
  </table> --}}
  {{-- {!!$registers->links('pagination::bootstrap-5')!!}
  {!! $registers2->links('pagination::bootstrap-5') !!} --}}
{{-- </div>
</div> --}}
{{-- </div> <!-- Bordered table -->
</div> <!-- end section --> --}}

{{-- @foreach ($registers as $row)
{{ $row->namefile }}
@endforeach --}}
@endsection
