@extends('layouts.appteacher')

 {{-- @include('layouts.menutopstudent') --}}
{{-- @include('layouts.cssstudent') --}}
{{--@include('layouts.sidebarstudent') --}}
{{-- @include('layouts.scriptsstudent') --}}
@section('content')
<title>user</title>





          <main role="main" class="main-content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-12">
        <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">เอกสารสหกิจ(สำหรับอาจารย์)</h5>
                {{-- <p class="card-text">Add .table-hover to enable a hover state on table rows within a <tbody>
                </p> --}}
                <table class="table table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th>ลำดับ</th>
                      <th>ชื่อฟอร์ม</th>
                      <th></th>
                      <th></th>
                      
                      <th   class="text-end">ดาวน์โหลด</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($documents as $row)
                    <tr>
                      <td class="col-1 text center">{{$documents->firstItem()+$loop->index}}</td>

                      {{-- <td>แบบพิจารณาคุณสมบัตินักศึกษาสหกิจศึกษา (สก.01)</td> --}}
                     <td>{{$row->formname}}</td>
                     <td></td>
                     <td></td>
                     
                     <td><a  href="//{{ $row->filess }}"><i class="fe fe-arrow-down-circle fe-24"></i></a></td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {!!$documents->links('pagination::bootstrap-5')!!}
              </div>
            </div>
          </div> <!-- Bordered table -->
        </div> <!-- end section -->

@endsection
{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    {{ Auth::user()->name }}
</a>
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> --}}
