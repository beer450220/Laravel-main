


   
    


@extends('layouts.officermin1')

@section('content')
@yield('content') 


     
     {{-- เพิ่มข้อมูล --}}
{{-- <div class="col-md-4 mb-4">
 
   
      
     
  <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content ">
        <div class="modal-header ">
          <h5 class="modal-title text center" id="varyModalLabel">เพิ่มข้อมูล</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
      
          
        <div class="modal-body">
          
         
          <form method="POST" action="{{ route('addregisteruser') }}"enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
               
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อนักศึกษา</label>
                <input type="text" class="form-control" name="name" >
              </div> 
              @error('name')
              <span class="invalid-feedback" >
                  {{ $message }}
              </span>
          @enderror
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ชื่อสถานประกอบการ</label>
                <input type="text" class="form-control"	name="establishment" placeholder="Last name" aria-label="Last name">
              </div>
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ss</label>
                <input type="text" class="form-control" name="" placeholder="Last name" aria-label="Last name">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">เบอร์โทร</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div>
             
             
              </div> 
           
            <div class="row">
              <div class="col-md-4">
                <label for="recipient-name" class="col-form-label">ไฟล์เอกสาร</label>
                <div class="custom-file mb-6">
                  <input type="file" class="custom-file-input" name="filess" id="validatedCustomFile" >
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
              </div>
            
            </div>
        </div>
        
        <div class="modal-footer">
          <button type="reset" class="btn mb-2 btn-secondary" >ยกเลิก</button>
          <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
        </div></form>
      </div>
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
        <h5 class="modal-title text center " id="varyModalLabel">ข้อมูลตรวจสอบเอกสาร</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="card-body">
        <form method="POST" action="{{url('/officer/updateEvaluationdocument/'.$Evaluationdocuments->Evaluationdocument_id)}}"enctype="multipart/form-data">
          @csrf 
          @if ($errors->any())
          <div class="alert alert-danger col-md-4">
             
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <div class="form-row">
            <div class="form-group col-md-4">
              {{-- <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail5"> --}}
            </div>
            <div class="form-group col-md-4">
              {{-- <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword5"> --}}
            </div>
          </div>
           <div class="row">
          <div class="form-group col-md-4">
            <label for="inputAddress">ชื่อสถานประกอบการ</label>
            {{-- <input type="text" class="form-control" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}"  autofocus placeholder="name"> --}}
            <select class="form-control select2" id="validationSelect1" name="" >
              <option value="">Select state</option>
              {{-- @foreach ($establishment as $row) --}}
              {{-- <optgroup label="Mountain Time Zone"> --}}
                {{-- <option value="{{$row->id}}">{{$row->address}}</option> --}}
               
              </optgroup>
           
              {{-- @endforeach --}}
            </select>
            
           
            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>

          <div class="col-md-4">
            <label for="inputAddress" >ชื่อนักศึกษา</label>
            {{-- <input type="text" class="form-control" @error('test') is-invalid @enderror name="test" value="{{ old('test') }}"  autofocus placeholder="test" placeholder="Last name" aria-label="Last name"> --}}
            <select class="form-control select2" id="validationSelect2" name="" >
              <option value="">Select state</option>
              {{-- @foreach ($users as $row) --}}
              {{-- <optgroup label="Mountain Time Zone"> --}}
                {{-- <option value="{{$row->id}}">{{$row->name}}</option> --}}
               
              </optgroup>
           
              {{-- @endforeach --}}
            </select>
            
            @error('test')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
        @enderror
          </div>
          <div class="col-md-2">
            <label for="inputAddress">ภาคเรียน</label>
            <select class="form-control  "  name="term" >
              <option value="">กรุณาเลือกภาคเรียน</option>
          
            <option value="ภาคเรียนที่1">ภาคเรียนที่:1 </option>
              <option value="ภาคเรียนที่2">ภาคเรียนที่:2 </option>
               
              
           
            
            </select>
            
        </div>
          <div class="col-md-2">
            <label for="inputAddress" >ปีการศึกษา</label>
            <select class="form-control "  name="year" >
              {{-- @foreach(range(date('Y'), date('Y') + 100) as $year)
              <option value="{{ $year }}">{{ $year }}</option>
          @endforeach --}}
          <option value="">กรุณาเลือกปีการศึกษา</option>
          @php
          $currentYear = date('Y') + 543; // ปีปัจจุบัน
          $startYear = 2500; // ปีเริ่มต้น
          $endYear = $currentYear + 100; // ปีสิ้นสุด
      @endphp
      
      @for ($i = $endYear; $i >= $startYear; $i--)
          @for ($j = 1; $j <= 1; $j++)
              <option value="{{ $i }}-{{ $j }}">{{ $i }}</option>
          @endfor
      @endfor
      </select>
              
           
            
            </select>
        </div>
          <div class=" col-md-4">
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสารประเมิน (สก.13)</label>
            <input class="form-control" type="file" name="files1"value="{{$Evaluationdocuments->files1}} "id="formFile"> 
                  
          </div>
          
      
         
          <div class=" col-md-4">
            <label for="recipient-name" class="col-form-label">ไฟล์เอกสารประเมิน (สก.14)</label>
            <input class="form-control" type="file" name="files2"value="{{$Evaluationdocuments->files2}} "id="formFile"> 
                  
          
          
        </div>
        
        {{-- <div class="col-md-2">
          <label for="inputAddress"class="col-form-label ">สถานะ</label>
          <select class="form-control select2" id="validationSelect2" name="Status_acceptance" required>
            <option value="">กรุณาเลือก</option>
           
              <option value="ตอบรับนักศึกษาแล้ว">ตอบรับนักศึกษาแล้ว</option>
              <option value="ยังไม่ได้ตอบรับนักศึกษาแล้ว">ยังไม่ได้ตอบรับนักศึกษา</option>
            </optgroup>
         
            
          </select>
          
      </div> --}}
      
    
  
  <div class="col-md-2">
    <label for="inputAddress"class="col-form-label ">คะแนน (สก.13)</label>
     <input type="text" class="form-control" @error('annotation') is-invalid @enderror name="" value="{{ old('annotation') }}"  autofocus placeholder="annotation" placeholder="Last name" aria-label="Last name"> 
</div>
     
    
    
      <div class="col-md-2">
        <label for="inputAddress"class="col-form-label ">คะแนน (สก.14)</label>
         <input type="text" class="form-control" @error('annotation') is-invalid @enderror name="" value="{{ old('annotation') }}"  autofocus placeholder="annotation" placeholder="Last name" aria-label="Last name"> 
    </div>
          </div>
    </div>
      <br> 
          <div class="modal-footer"><br>
            <a href="/officer/Evaluationdocuments" type="submit" class="btn mb-2 btn-success" >ย้อนกลับ</a>
            <button type="reset" class="btn mb-2 btn-danger" >ยกเลิก</button>
            <button type="submit" class="btn mb-2 btn-primary">ตกลง</button>
          </div>
        </form>
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div> <!-- /. end-section -->



    

   
  
@endsection