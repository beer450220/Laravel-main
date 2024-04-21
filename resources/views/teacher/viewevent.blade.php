







@extends('layouts.officermin1')

@section('content')
@yield('content')


{{-- <div class="wrapper">

    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">

            <div class="row">

              <div class="col-md-12 my-4">

                <div class="card shadow">
                  <div class="card-body">
                    <div class="toolbar row mb-3">
                      <div class="col">
                           <h2 class="h4 mb-1">สถานประกอบการ</h2><br>
                        <form class="form-inline">
                          <div class="form-row">
                            <div class="form-group col-auto">

                              <label for="search" class="sr-only">Search</label>
                              <input type="text" class="form-control" id="search" value="" placeholder="Search">
                            </div>


                          </div>
                          <div class="col col-lg-2">
                            <a href="ss"  type="button"  class=" btn btn-outline-success"data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">เพิ่มข้อมูล</a>
                          </div>
                        </div>
                        </form>
                      </div>

                    </div>
                    @if(session("success"))
                <div class="alert alert-success">{{session('success')}}
@endif

                </div>

                    <table class="table table-bordered">
                      <thead class=table-dark>
                        <tr role="row">



                          <th >ลำดับ</th>
                          <th colspan="1">ชื่อสถานประกอบการ</th>
                          <th colspan="1">ที่อยู่</th>
                          <th colspan="1">เบอร์โทร</th>
                          <th colspan="1">ดูข้อมูล</th>
                          <th colspan="1">แก้ข้อมูล</th>
                          <th scope="col-2">ลบข้อมูล</th>
                        </tr>
                      </thead>
                      <tbody>


                        <tr>


                          <td class="col-1 "><a href="ss" class="btn mb btn-outline-primary fa-solid fa-eye  "data-toggle="modal" data-target="#varyModal1" data-whatever="@mdo"></a></td>
                          <td class="col-1 "><a href="" class="btn mb btn-outline-secondary fa-solid fa-pen-to-square  "data-toggle="modal" data-target="#varyModal2" data-whatever="@mdo"></a></td>
                          <td class="col-1"><a href="" class="btn mb btn-outline-danger fa-solid fa-trash-can "></a></td>


                        </tr>



                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="col-md-12 mb-12">





            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ดูข้อมูล</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div>


                <div class="modal-body">


                  <form method="POST" action="">
                    @csrf

                    {{-- <img src="/image/{{ $establishments->images }}" class="img-responsive rounded mx-auto d-block" style="max-height: 300px; max-width: 200px;" alt="" srcset=""> --}}
                    <br>


                    <div class="row">

                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">วันเวลาการนิเทศงาน</label><br>

                        <input type="text" class="form-control" name="annotation" value=" {{$establishments->start}}"disabled required>
                    </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อนักศึกษา</label><br>


                            <select class="form-control" id="validationSelect1" name="student_name" disabled>
                                <option value="">กรุณาเลือกหลักสูตร</option>
                                {{-- <option value="-"@if($users->major_id=="-") selected @endif required>-</option> --}}
                                @foreach ($users as $row)
                                {{-- <optgroup label="Mountain Time Zone"> --}}
                                  <option value="{{$row->id}}"{{$row->id==$establishments->student_name ?'selected':''}}> {{$row->fname}} {{$row->surname}}</option>
                                  {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                                </optgroup>

                                @endforeach
                              </select>
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่ออาจารย์นิเทศ</label><br>
                        {{-- <input type="text" class="form-control" name="annotation" value=" {{$establishments->teacher_name}}"disabled required> --}}

                        <select class="form-control select2"data-placeholder="Choose anything" id="small-select2-options-multiple-field1" multiple name="teacher_name[]"disabled >
                            <option value="">กรุณาเลือกหลักสูตร</option>
                            {{-- <option value="-"@if($users->major_id=="-") selected @endif required>-</option> --}}
                            @foreach ($teacher as $row)

                            @php
         $selectedIds = explode(',', $establishments->teacher_name);
              @endphp
                            {{-- <optgroup label="Mountain Time Zone"> --}}
                              {{-- <option value="{{$row->id}}"{{$row->id==$establishments->teacher_name ?'selected':''}}> --}}
                                <option value="{{ $row->id }}" {{ in_array($row->id, $selectedIds) ? 'selected' : '' }}>
                                {{$row->fname}} {{$row->surname}}</option>
                              {{-- <option value="{{$row->major_id}}">{{$row->major}}</option> --}}
                            </optgroup>

                            @endforeach
                          </select>
                          <script > $( '#small-select2-options-multiple-field' ).select2( {
                            theme: "bootstrap-5",
                            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                            placeholder: $( this ).data( 'placeholder' ),
                            closeOnSelect: false,
                            selectionCssClass: 'select2--small',
                            dropdownCssClass: 'select2--small',
                        } );
                        $( '#small-select2-options-multiple-field1' ).select2( {
                            theme: "bootstrap-5",
                            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                            placeholder: $( this ).data( 'placeholder' ),
                            closeOnSelect: false,
                            selectionCssClass: 'select2--small',
                            dropdownCssClass: 'select2--small',
                        } );



                $( '#small-bootstrap-class-single-field' ).select2( {
                    theme: "bootstrap-5",
                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    dropdownParent: $( '#small-bootstrap-class-single-field' ).parent(),
                } );

                $( '#multiple-select-field' ).select2( {
                    theme: "bootstrap-5",
                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    closeOnSelect: false,
                } );

                $( '#multiple-select-clear-field' ).select2( {
                    theme: "bootstrap-5",
                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    closeOnSelect: false,
                    allowClear: true,
                } );

                            </script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script>
    new MultiSelectTag('countries', {
       rounded: true,    // default true
       shadow: true,      // default false
       placeholder: 'Search',  // default Search...
       tagColor: {
           textColor: '#327b2c',
           borderColor: '#92e681',
           bgColor: '#eaffe6',
       }
       onChange: function(values) {
           console.log(values)
       }
   })

   </script>

                      </div>
                    </div>
                    <br>
                    <div class="row">


                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">สถานะรับทราบและยืนยันเวลานัด</label><br>
                        <input type="text" class="form-control" name="annotation" value="{{$establishments->Status_events}}"disabled required>

                      </div>
                    </div>

                    <div class="row">

                        <div class="col-md-2">
                            <label for="recipient-name" class="col-form-label">ขอเปลี่ยนเวลานัดนิเทศ</label><br>
                            <input type="text" class="form-control" name="annotation" value=" {{$establishments->appointment_time}}"disabled required>

                          </div>

                        <div class="col-md-4">
                          <label for="recipient-name" class="col-form-label">{{$establishments->namefiles}}</label><br>

                          {{-- <textarea  rows="4" cols="50" name="em_job" disabled readonly >
                        </textarea> --}}
                        {{-- <span>  <input type="text" class="form-control" name="annotation" value=" "disabled required></span> --}}


                        <span> <a href="../../ไฟล์เอกสารขออนุญาตนิเทศงาน/{{ $establishments->filess }}" target="_BLANK" class="btn btn-outline-primary fa-regular fa-circle-down"></a> </span>  </div>
                      </div>
                </div>
                <div class="modal-footer">

                  <a href="/teacher/supervision" class="btn mb-2 btn-primary">ย้อนกลับ</a>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



@endsection
