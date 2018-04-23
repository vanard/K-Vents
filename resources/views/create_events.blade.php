@extends('layouts.master')

@section('title', 'Create K-Vents')

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
                              <a class="dropdown-item" href="{{ route('join') }}">Join Events</a>
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

    @if(count($errors) > 0)
    <div class="container">
      <div class="aler alert-danger">
        Upload validation error <br/><br/>
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif
    <form class="form-group" method="post" action="{{  route('insertingevent') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <!-- name address phone social  img_ktp -->
      <div class="container">
        <div class="form-group">
          <label for="exampleInputEmail1">Title Event</label>
          <input type="text" class="form-control" id="name" placeholder="Please Enter Title Event" name="title">
        </div>
        <div class="form-group"> 
          <label> Target Donasi</label> 
          <input type="text" class="form-control" id="name" placeholder="Rp." name="Target"> 
        </div> 
        <div class="form-group"> 
          <label> Deadline Event</label> 
          <input type="date" class="form-control" id="name" placeholder="Pilih tanggal" name="Deadline"> 
        </div> 

        <div class="form-group"> 
          <label>Deskripsi Singkat</label> </br>
          <textarea name="Deskripsi" cols="50" rows="2"> </textarea> 
        </div>

        <div class="row">
          <div class="col-md-5">
            <label>Image Event</label>
            <input type="file" name="img_thumb">
          </div>
          @if($message = Session::get('success'))
          <script>
            document.alert('Sucess')
          </script>
          @endif
        </div>
        <br/>
        <div class="row">
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary " style="width: 120px; height: 60px;">Submit</button>
          </div>
        </div>
      </div>
      </div>
    </form>

@endsection