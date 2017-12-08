@extends('layouts.master')

@section('title')
 Welcome
@endsection

@section('contents')
    <!--check error in signup form-->
    @if(count($errors) > 0)
    <div class="row" style="margin-top: 100px">
        <div class="col-md-4 col-md-offset-4">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li><span class="alert alert-danger">{{$error}}</span></li>
                    <br>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!--/end of checking errors in sign up form-->
    <div class="row" >
   <div class="col-md-6">
       <h3>SIGN UP</h3>
           <form action="{{route('signup') }}" method="post">
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                   <label for="first_name">Your First Name</label>
                   <input  class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
               </div>
                 <div class="form-group">
                   <label for="email">Your Email</label>
                   <input  class="form-control" type="email" name="email" id="email" value="{{Request::old('email')}}">
               </div>
               <div class="form-group">
                   <label for="password">Password</label>
                   <input  class="form-control" type="Password" name="password" id="password" value="{{Request::old('password')}}">
               </div>
               <button class="btn btn-sm btn-info">Register </button>
               <input type="hidden" name="_token" value="{{Session::token() }}">
           </form>
       </div><!--./end of regstration session-->

        <!--LIGIN SESSION-->
       <div class="col-md-6">
       <h3>SIGN IN</h3>
           <form action="{{route('signin') }}" method="post">
               <div class="form-group">
                   <label for="email">Your Email</label>
                   <input  class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
               </div>
               <div class="form-group">
                   <label for="password">Password</label>
                   <input  class="form-control" type="Password" name="password" id="password" value="{{Request::old('password')}}">
               </div>
               <button class="btn btn-sm btn-info">Sign in  </button>
               <input type="hidden" name="_token" value="{{Session::token() }}">
           </form>
       </div>
    </div> 
@endsection