@extends('layouts.mregister')

@section('title', 'K-Vents - Sign Up')

@section('content')

<body>

  <div id="register-box">
  <div class="left">
    <h1>Sign up</h1>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="nim" placeholder="NIM" required autofocus/>
        <input type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nama" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        <input type="text" name="email" placeholder="E-mail" required/>
        <input type="password" name="password" placeholder="Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" required/>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        <input type="password" name="password_confirmation" placeholder="Ulangi Password" required/>
        
        <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
    
  </div>
  
  <div class="rightR">
    <img src="img/logo_kvents1.png" style="position:absolute; height:35px; top:22px; right:22px;">
    <span class="registerwith"><br /></span>
    </br>
    </br>
    </br>
    </br>
    <a class="btn btn-primary btn-block" href="{{ route('login_facebook') }}">
        {{ __('Sign up with Facebook') }}
    </a>

    <a class="btn btn-danger btn-block" href="{{ route('login_google') }}">
        {{ __('Sign up with Google+') }}
    </a>
    <a class="btn btn-success btn-block" href="{{ route('login') }}">
        {{ __('Log In') }}
    </a>
  </div>
  <div class="or">OR</div>
</div>
</body>
@endsection
