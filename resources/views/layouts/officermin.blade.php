{{-- @include('layouts.admintop') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>@yield('titlebar')</title> --}}
</head>
<body>
    

@include('layouts.admincss') @include('layouts.officersidebsr')
 @include('layouts.officertop')



     

   
        @yield('content')
        
      
</body>
</html>