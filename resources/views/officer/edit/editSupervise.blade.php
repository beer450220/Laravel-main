


   
    


@extends('layouts.officermin1')

@section('content')
@yield('content') 


   <br>  
   <br>  
   <br>  
   <div class="col-md-12 mb-12">
 
   
      
     
         
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content ">
        <div class="modal-header bg-dark text-white ">
          <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลรายชื่ออาจาร์ย</h5>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div> 
      
          
        <div class="modal-body">
         
         
          <form method="POST" action="{{url('/officer/updatSupervise/'.$advisors->advisor_id)}}" enctype="multipart/form-data">
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
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่ออาจารย์</label>
                 <input type="text" class="form-control" name="name" value="{{$advisors->name}}" > 
                
                @error('annotation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
           
              </div>
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">หลักสูตร</label>
              
                <select class="form-select " aria-label=".form-select-sm example" name="course">
                  <option selected>กรุณาเลือกหลักสูตร</option>
                  <option value="วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ"@if($advisors->course=="วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ") selected @endif required>วิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ</option>
                  <option value="วิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์"@if($advisors->course=="วิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์") selected @endif required>วิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</option>
                  
                  
                  
                </select>
                @error('Status_report')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
           
              </div>
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">คณะ</label>
              
                <select class="form-select " aria-label=".form-select-sm example" name="faculty">
                  <option selected>กรุณาเลือกคณะ</option>
                  <option value="คณะวิทยาศาสตร์และเทคโนโลยี"@if($advisors->faculty=="คณะวิทยาศาสตร์และเทคโนโลยี") selected @endif required>คณะวิทยาศาสตร์และเทคโนโลยี</option>
                  
                
                </select>
                @error('Status_report')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
           
              </div>
              
        
             
            </div>
      </div>
        <div class="modal-footer">
     
          <a href="/officer/Supervise"  class="btn mb-2 btn-secondary" data-dismiss="modal">ย้อนกลับ</a>
          <button type="submit" class="btn mb-2 btn-primary"onclick="return confirm('ยืนยันการแก้ไขข้อมูล !!');">อัพเดท</button>
        </div></form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>





    

   
  
@endsection