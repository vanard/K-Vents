@extends('layouts.mregister')

@section('title', 'K-Vents - Log In')

@section('content')

<body>

  <div id="login-box">
  <div class="left">
    <h1><b>Log In</b></h1>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="text" name="nim" placeholder="NIM" required autofocus/>
        <input type="password" name="password" placeholder="Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" required/>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        <input type="submit" name="login_submit" value="Login" />
    </form>
    
  </div>
  
  <div class="rightL">
    <img src="img/logo_kvents1.png" style="position:absolute; height:30px; top:22px; right:22px;">
    <span class="loginwith"><br /></span>

    <a class="btn btn-success btn-block" href="{{ route('register') }}">
        {{ __('Sign Up') }}
    </a>
    
    <a class="btn btn-primary btn-block" href="{{ route('login_facebook') }}">
        {{ __('Login with Facebook') }}
    </a>

    <a class="btn btn-danger btn-block" href="{{ route('login_google') }}">
        {{ __('Login with Google+') }}
    </a>
  </div>
  <div class="or">OR</div>
</div>
</body>

@endsection
