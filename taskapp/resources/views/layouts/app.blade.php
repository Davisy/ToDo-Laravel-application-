<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task App</title>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/mdb.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style1.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
</head>
<body>
    
        <nav class="navbar navbar-default">
         <div class="container" style="margin-top: 50px">
           <div class="navbar-header">
               <a class="navbar-brand" href="{{url('/')}}">
               TO-DO App</a>
           </div> 
             
         </div>
            <!--Navbar Connents-->
        </nav>
    </div>

    @yield('content')



 <!--JS SCRIPT-->
 <script src="{{URL::asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{URL::asset('js/popper.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/mdb.min.js')}}"></script>
</body>
</html>
