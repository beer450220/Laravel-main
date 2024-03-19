{{-- @extends('layouts.appteacher2') --}}

@section('content')
{{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/1.png') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


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






<div class="container h-100 ">
    <div class="row justify-content-sm-center h-100 ">
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-9">
        <div class="text-center my-5">

        </div>
        <div class="card shadow-lg">
                  <div class="card-footer py-2 border-0 menu-bartop3">

                          </div>
                          <div class="card-body p-5 menu-bar2">

                            <h1 class="fs-4 card-title fw-bold mb-4 text-center">ระบบสารสนเทศสหกิจศึกษา</h1>
                            <br>
                             <form method="POST" action="{{ route('login') }}"> @csrf
                              <div class=" input-group mb-3">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))

                                <div class=" alert alert-danger alert-dismissible fade show "  role="alert">

                                  <p>{{ $message }}</p>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif



                                     <h4 class="mb-2 input-group text-primary"  for="email">รอการอนุมัติก่อนจึงจะสามารถเข้าสู่ระบบได้</h4> <br>







                                <!-- <div class="invalid-feedback">
                                  Email is invalid
                                </div> -->
                              </div>






                              <div class="d-flex align-items-center">
                                <div class="form-check">
                                  {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                      {{ __('Remember Me') }}
                                  </label> --}}
                                </div>


                                {{-- <a type="submit"  class="btn btn-primary ms-auto text-white bg-dark"href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                                  เข้าสู่ระบบ
                                </a>--}} </form>

                                <div class="container">
                                    <div class="row">
                                      <div class="col">

                                      </div>
                                      <div class="col">
                                  <a class="btn btn-primary ms-auto text-white bg-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('ย้อนกลับ') }}

                             </a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                                      </div>
                                      <div class="col">

                                      </div>
                                    </div>
                                  </div>




                                {{-- name="submit" --}}
                              </div>
                                              {{-- <div class="d-flex align-items-center">

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                </div> --}}




                          </div>
        </div>

      </div>
    </div>
  </div>



{{-- @endsection --}}
