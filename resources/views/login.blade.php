@extends('layout')
@section('title','login')
@section('content')  
{{-- <style>
  body {
      background-color: rgb(34, 187, 238); /* Change the background color as desired */
  }
</style>
     <div class="container">
      <div class="mt-5">
        @if($errors->any())
         <div class="col-12">
           @foreach ($errors->all() as $error )
               <div class="alert alert-danger">{{$error}}</div>
           @endforeach
         </div>
         @endif
         @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
         @endif
         @if(session()->has('success'))
             <div class="alert alert-success">{{ session('success') }}</div>
         @endif          
       </div>
        <form action="{{ route('login.post') }}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
              </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Log In</button>
          </form>
     </div> --}}
     
{{-- <html lang="en">
<!-- This page is for registration  -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('cssfiles/login.css') }}">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <title>ADMIN Login</title>
</head>

<body> --}}
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <h2>USER LOGIN & REGISTRATION</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="{{ route('registration.post') }}" method="POST">
        @csrf
        <h1>Create Account</h1>
        <input type="text" name="name" id="name" placeholder="Username" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <button>Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="{{route('login.post')}}" method="POST">
        @csrf
        <h1>Sign in</h1>
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password" />
        
        <button>Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>LOGIN and EXPLORE the world of ART</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Welcome to the relam of Art</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
    
  </div>
  <div class="adminmessageconatiner">
      {{-- //USER?  --}}
      {{-- <a href="/homepage">ENTER</a> --}}
      
  </div>

  
  <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
 @endsection

