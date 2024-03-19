


   
    



@extends('layouts.officermin1')

@section('content')
@yield('content') 



     
        <div class="col-md-12 mb-12">
 
   
      
     
         
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header bg-dark text-white ">
                  <h5 class="modal-title text center " id="varyModalLabel">ดูข้อมูล</h5>
               
                </div> 
              
                  
                <div class="modal-body">
                 
                 
                  <form method="POST" action="">
                    @csrf
                    
                    <img src="/image/{{ $establishments->images }}" class="img-responsive rounded mx-auto d-block" style="max-height: 300px; max-width: 200px;" alt="" srcset="">
                    <br>
                  
                  
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label><br>
                        {{$establishments->name}}
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">ที่อยู่</label><br>
                        {{$establishments->address}}
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label><br>
                        {{$establishments->phone}}
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label><br>
                       ss
                      </div>
                      <div class="col-md-4">
                        <label for="recipient-name" class="col-form-label">เบอร์โทร</label><br>
                        sss
                      </div>
                     
                       
                    </div>

                    
                </div>
                <div class="modal-footer">
      
                  <a href="/studenthome/establishmentuser" class="btn mb-2 btn-primary">ย้อนกลับ</a>
                </div></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

   
  
@endsection