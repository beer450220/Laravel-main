{{-- @include('layouts.admintop') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    {{-- <title>@yield('titlebar')</title> --}}
</head>
<body>
    
    {{-- <div class="be-wrapper"> --}}
@include('layouts.admincss') 
{{-- @include('layouts.adminsidebsr')
 @include('layouts.admintop') --}}

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
     

    @yield('content')
{{-- <div class="be-content">
    <div class="main-content container-fluid">
    
    </div>
  </div> --}}
        
  {{-- <script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
  <script src="/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="/assets/js/app.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        //-initialize the javascript
        App.init();
    });
    
  </script> --}}

  
</body>
</html>