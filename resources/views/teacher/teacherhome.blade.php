@extends('layouts.appteacher')

@section('content')
{{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/1.png') }}"> --}}

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/1.png') }}">

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }}
                    <br>
                    {{$msg}}
                </div>
            </div>
        </div>
    </div>
</div> --}}






{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }}
                    <br>
                    {{$msg}}
                </div>

            </div>
            {{-- sss --}}
        {{-- </div>
    </div>

</div>  --}}



<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4">
                 <a href="/teacher/request"><div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          {{-- <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span> --}}
                        </div>
                        <div class="col pr-0">
                          <p class=" text-muted mb-0">ยื่นประสงค์ฝึกประสบการณ์</p>
                          <span class="h3 mb-0"> @foreach ($users8 as $row)
                              {{$row->count}} @endforeach</span>

                          {{-- <span class="small text-success">+16.5%</span> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div></a>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                        </span> --}}
                      </div>
                      <div class="col pr-0">
                        <p class=" text-muted mb-0">รออนุมัติ</p>
                        <span class="h3 mb-0"> @foreach ($users6 as $row)
                          {{$row->count}} @endforeach</span>
                        {{-- <span class="small text-success">+16.5%</span> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-filter text-white mb-0"></i>
                        </span> --}}
                      </div>
                      <div class="col">
                        <p class=" text-muted mb-0">อนุมัติแล้ว</p>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="h3 mr-2 mb-0"> @foreach ($users7 as $row)
                              {{$row->count}} @endforeach </span>
                          </div>
                          <div class="col-md-12 col-lg">
                            {{-- <div class="progress progress-sm mt-2" style="height:3px">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-filter text-white mb-0"></i>
                        </span> --}}
                      </div>
                      <div class="col">
                        <p class=" text-muted mb-0">ไม่อนุมัติ</p>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="h3 mr-2 mb-0"> @foreach ($users9 as $row)
                              {{$row->count}} @endforeach </span>
                          </div>
                          <div class="col-md-12 col-lg">
                            {{-- <div class="progress progress-sm mt-2" style="height:3px">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-md-6 col-xl-3 mb-4">
               <a href="/teacher/supervision"><div class="card shadow border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-3 text-center">
                        {{-- <span class="circle circle-sm bg-primary">
                          <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                        </span> --}}
                      </div>
                      <div class="col pr-0">
                        <p class=" text-muted mb-0">นิเทศงาน</p>
                        <span class="h3 mb-0"> @foreach ($users1 as $row)
                            {{$row->count}} @endforeach</span>

                        {{-- <span class="small text-success">+16.5%</span> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div></a>
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card shadow border-0">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      {{-- <span class="circle circle-sm bg-primary">
                        <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                      </span> --}}
                    </div>
                    <div class="col pr-0">
                      <p class="small text-muted mb-0">ยังไม่ได้ยืนยัน</p>
                      <span class="h3 mb-0"> @foreach ($users2 as $row)
                        {{$row->count}} @endforeach</span>
                      {{-- <span class="small text-success">+16.5%</span> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card shadow border-0">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      {{-- <span class="circle circle-sm bg-primary">
                        <i class="fe fe-16 fe-filter text-white mb-0"></i>
                      </span> --}}
                    </div>
                    <div class="col">
                      <p class="small text-muted mb-0">ยืนยันแล้ว</p>
                      <div class="row align-items-center no-gutters">
                        <div class="col-auto">
                          <span class="h3 mr-2 mb-0"> @foreach ($users3 as $row)
                            {{$row->count}} @endforeach </span>
                        </div>
                        <div class="col-md-12 col-lg">
                          {{-- <div class="progress progress-sm mt-2" style="height:3px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- end section -->
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                   <a href="/teacher/informdetails1"><div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center">
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                            </span> --}}
                          </div>
                          <div class="col pr-0">
                            <p class=" text-muted mb-0">รายงานผลประเมิน</p>
                            <span class="h3 mb-0">@foreach ($users4 as $row)
                              {{$row->count}} @endforeach</span>
                            {{-- <span class="small text-success">+16.5%</span> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></a>
                  <div class="col-md-6 col-xl-3 mb-4">
                    <a href="/teacher/informdetails1"><div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center">
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                            </span> --}}
                          </div>
                          <div class="col pr-0">
                            <p class="small text-muted mb-0">เอกสารแจ้งรายละเอียด</p>
                            <span class="h3 mb-0"> @foreach ($users4 as $row)
                              {{$row->count}} @endforeach</span>
                            {{-- <span class="small text-success">+16.5%</span> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></a>
                  <div class="col-md-6 col-xl-3 mb-4">
                    <a href="/teacher/reportresults1">  <div class="card shadow border-0">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-3 text-center">
                            {{-- <span class="circle circle-sm bg-primary">
                              <i class="fe fe-16 fe-filter text-white mb-0"></i>
                            </span> --}}
                          </div>
                          <div class="col">
                            <p class="small text-muted mb-0">รายงานผลปฏิบัติงาน</p>
                            <div class="row align-items-center no-gutters">
                              <div class="col-auto">
                                <span class="h3 mr-2 mb-0"> @foreach ($users5 as $row)
                                  {{$row->count}} @endforeach </span>
                              </div>
                              <div class="col-md-12 col-lg">
                                {{-- <div class="progress progress-sm mt-2" style="height:3px">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></a>

                </div> <!-- end section -->
            {{-- <div class="row justify-content-center">
              <div class="col-12">
                <div class="row">
                  <div class="col-md-6 col-xl-3 mb-4">
                     <a href="/teacher/informdetails1"><div class="card shadow border-0">
                        <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-3 text-center">

                            </div>
                            <div class="col pr-0">
                              <p class=" text-muted mb-0">เอกสารแจ้งรายละเอียด</p>
                              <span class="h3 mb-0"></span>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div></a> --}}


                    {{-- <div class="container-fluid">
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-md-6 col-xl-3 mb-4">
                                 <a href="/teacher/reportresults1"><div class="card shadow border-0">
                                    <div class="card-body">
                                      <div class="row align-items-center">
                                        <div class="col-3 text-center">

                                        </div>
                                        <div class="col pr-0">
                                          <p class=" text-muted mb-0">รายงานผลปฏิบัติงาน</p>
                                          <span class="h3 mb-0"></span>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> --}}

@endsection
