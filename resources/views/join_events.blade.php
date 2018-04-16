@extends('layouts.master')

@section('title', 'Join K-Vents')

@section('content')

<!--Header_section-->
<header id="header_wrapper">
        <div class="container">
          <div class="header_box">
            <div class="logo"><a href="#"><img width="120px" src="img/logo_kvents1.png" alt="logo"></a></div>
            <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
              <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div id="main-nav" class="collapse navbar-collapse navStyle">
                  <ul class="nav navbar-nav" id="mainNav">
                    <li><a href="{{ route('home_admin') }}" class="scroll-link">Home</a></li>
             
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
              
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('account') }}">Create Events</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
              
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                </div>
                </ul>
            </div>
           </nav>
          </div>
        </div>
      </header>
      <!--Header_section-->

@endsection