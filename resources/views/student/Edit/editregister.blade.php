


   
    



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
                  <h5 class="modal-title text center " id="varyModalLabel">แก้ไขข้อมูล</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button> --}}
                </div> 
              
                  
                <div class="modal-body">
                 
                 
                  <form method="POST" action="{{url('/studenthome/update/'.$establishments->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method("put") --}}
                    @if ($errors->any())
            {{-- <div class="alert alert-danger"> --}}
               
                <ul>
                    @foreach ($errors->all() as $error)
                        {{-- <li>{{ $error }}</li> --}}
                    @endforeach
                </ul>
            </div>
        @endif
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control" name="name" value="{{$establishments->name}}" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control"	name="establishment" value="{{$establishments->establishment}}" placeholder="Last name" aria-label="Last name">
                        @error('establishment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                     
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" name=""value="" placeholder="Last name" aria-label="Last name">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                        <input type="file" class="form-control"@error('filess') is-invalid @enderror  name="filess"value="{{$establishments->filess}}" ><br>
                        {{-- <img src="/file/{{ $establishments->filess }}" class="img-responsive" style="max-height: 300px; max-width: 200px;" alt="" srcset=""> --}}
                  {{$establishments->filess}}
                        @error('filess')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                     
                    </div>
               
               


                  
                   
                

              </div>
                <div class="modal-footer">
             
                  <a href="/studenthome/register"  class="btn mb-2 btn-secondary" data-dismiss="modal">ยกเลิก</a>
                  <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">ตกลง</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>



    {{-- <div class="col-md-12 mb-12">
 
   
      
     
         
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content ">
          <div class="modal-header bg-dark text-white ">
            <h5 class="modal-title text center " id="varyModalLabel">ลบรูปภาพข้อมูล</h5>
           
          </div> 
        
            
          <div class="modal-body">
           
          
                
            
              <div class="row">
                <div class="col-md-4 ">
                  <div class="col-lg-3 ">
                    <br>
                    <img src="/image/{{ $establishments->images }}" class="img-responsive" style="max-height: 200px; max-width: 200px;" alt="" srcset="">
                 
                   <form action="/deleteimage/{{ $establishments->id }}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method('delete')
                    <div class="col">
                     
                    </div>
                    
                   
                
                   
                    <br>
                </div>
                <button class="   btn btn-outline-danger  ">X</button>    </form>
              </div>
            </div>
         


            
             
          

        </div>
          <div class="modal-footer">
       
            
          </div></form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div> --}}




    

   
  
@endsection