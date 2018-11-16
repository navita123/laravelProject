<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel @yield('title')</title>
        <!-- Fonts -->
        <!--****add css files****-->
        <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"> 
          <!--****add js files****-->
        <script src="../js/jquery.min.js"></script> 
        <script src="../js/bootstrap.min.js"></script>     
    </head>
    <body>
    	@section('body')
            
        @show

        
    </body>
</html>
