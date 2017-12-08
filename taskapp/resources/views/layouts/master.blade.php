<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> @yield('title') </title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/mdb.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style1.css')}}">
</head>
<body>
@include('includes.header')
  <div class="container">
   @yield('contents')
 </div>

 <!--JS SCRIPT-->
 <script src="{{URL::asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{URL::asset('js/popper.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/mdb.min.js')}}"></script>

</body>
</body>
</html>
