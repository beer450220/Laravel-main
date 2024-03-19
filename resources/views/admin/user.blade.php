{{-- @extends('layouts.app') --}}
@extends('layouts.adminmin')

{{-- @section('titlebar','home') --}}
    <title>admin</title>
  @section('content')

{{-- @include('layouts.adminsidebsr')

    @include('layouts.admintop') --}}
    @yield('content')


    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> --}}



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
</div>  --}}

{{-- <h1 class="text-center" ><strong>หน้าแรก</strong></h1>
    <h3 class="text-center">62042380105</h3> --}}






{{-- <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="" aria-labelledby="navbarDropdown">
        <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



  <div class="container-fluid">



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">จัดการผู้ใช้งาน</h6>

<br>



    <form action="{{ route('searchadmin') }}" method="GET"
                class="d-none d-sm-inline-block form-inline  my-md-0 mw-100 navbar-search   " >
                <div class="input-group">
                    <input type="text"name="keyword" id="keyword" class="form-control bg-light border-0 small" placeholder="Search for..."
                    value="{{ request('keyword') }}"  aria-label="Search" aria-describedby="basic-addon2">
                        {{-- <input type="text" name="keyword" id="keyword" class="form-control" value="{{ request('keyword') }}"> --}}
                    <div class="input-group-append">
                        {{-- <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button> --}}
                        &nbsp; &nbsp;
                    </div>
                    <div class="my-2 text-start"></div>
                                    <a  class="btn btn-primary btn-icon-split " href="/user/adduser">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">เพิ่มข้อมูล</span>
                                        <!-- <php echo isset($_GET['pasge']) && $_GET['page'] =='add'?'active':''?>"href="?page=add" -->
                                        <!-- href="../Admin/user/edit.php?update_id=<php echo $row["id"]; ?>" -->
                                    </a>
                </div>

                  </div>
                   </form>
{{-- จำนวน {{count($users)}} --}}

                  <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                                        <tr>

  <th><i class="" aria-hidden="true"></i>รหัสประจำตัว</th>
                                            <th><i class=""></i>ชื่อ</th>

                                             <th><i class="" aria-hidden="true"></i>อีเมล </th>


                                            {{-- <th ><i class="" aria-hidden="true"></i>เบอร์โทร</th> --}}

                                            <th><i class="" aria-hidden="true"></i>โปรไฟล์ </th>
                                            <th><i class="" aria-hidden="true"></i>บทบาทหน้าที่</th>
                                             {{-- <th ><i class="" aria-hidden="true"></i>จังหวัด</th> --}}
                                             <th><i class="" aria-hidden="true"></i>เริ่มใช้งานระบบ</th>
                                            <th>ระงับการใช้งาน</th>
                                            <th>แก้ไขข้อมูล</th>
                                            <th>ลบข้อมูล</th>
                                        </tr>
                                    </thead>
                                    <tbody>

               @foreach ($users as $row)


                                        <tr>







                                            <td>{{$row->username}}</td>
                                            <td>{{$row->fname}}</td>
                                            <td>{{$row->email}}</td>

                                            {{-- <td></td> --}}
                                            <td><img src="/รูปโปรไฟล์/{{ $row->images }}" class="rounded" style="max-height: 100px; max-width: 100px;" alt="" srcset=""></td>
                                            <td>{{$row->role}}</td>

                                            <td>{{Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</td>
                                            {{-- {{Carbon\Carbon::parse($row->created_at)->diffForHumans()}}
                                            {{$row['created_at']->diffForHumans()}} --}}
                                            {{-- <td></td> --}}
                                            <td>
                                                <input data-id="{{$row->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="ON" data-off="OFF" {{ $row->role ? 'checked' : '' }}>
                                                {{-- <div class="form-check form-switch text-center">
                                                <input class="form-check-input "for="flexSwitchCheckChecked" type="checkbox" role="switch" id="flexSwitchCheckChecked"id="switchOne"wire:model="isActive" checked></div> </td> --}}


                                            <td> <a href="/user/edituser/{{$row->id}}" class="fa fa-pencil btn btn-warning text-center " aria-hidden="true"></a></td>
                                            {{-- <td> <a href="/edituser/{{$row->id}}" class="fa fa-pencil btn btn-warning text-center " aria-hidden="true"></a></td> --}}
                                            <!-- <php echo isset($_GET['pasge']) && $_GET['page'] =='user'?'active':''?>"href="?page=edit?update_id=" -->
                                            <td> <a href="../Admin/Del.php?delete1_id=" class="fa fa-window-close btn btn-danger text-center"onclick="return confirm('ยืนยันการลบข้อมูล !!');" aria-hidden="true"></a></td>
                                        </tr>

                                     @endforeach
                                    </tbody>
                                </table>
                                {!!$users->links('pagination::bootstrap-5')!!}
                            </div>
                        </div>
                    </div>

                </div>


                {{-- @livewire('toggle-switch', [
                    'model' => $users,
                    'field' => 'active'
                    ]); --}}


                <script>
                    $(function() {
                      $('.toggle-class').change(function() {
                          var roles = $(this).prop('checked') == true ? 'student' : 0;
                          var id = $(this).data('id');

                          $.ajax({
                              type: "GET",
                              dataType: "json",
                              url: '/user1',
                              data: {'role': roles, 'id': id},
                              success: function(data){
                                console.log(data.success)
                              }
                          });
                      })
                    })
                  </script>

@endsection

