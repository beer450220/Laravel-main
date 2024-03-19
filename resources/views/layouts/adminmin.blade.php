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
@include('layouts.adminsidebsr')
 @include('layouts.admintop')





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
