@extends('layouts.master')

@section('title', 'K-Vents')

@section('content')

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="{{ route('home_admin') }}"><img width="120px" src="img/logo_kvents1.png" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
        @if (Route::has('login'))
        @auth
          <li><a href="{{ route('home_admin') }}" class="scroll-link">Home</a></li>
        @else
        <li><a href="{{ route('index') }}" class="scroll-link">Home</a></li>
        @endauth
        @endif
        <li><a href="#Portfolio" class="scroll-link">Events</a></li>
        @if (Route::has('login'))
                @auth
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('account') }}">Create Events</a>
            <a class="dropdown-item" href="{{ route('account') }}">Join Events</a>
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
        @else
          <li><a href="{{ route('login') }}">Login</a></li>
        @endauth
        @endif
			</ul>
      </div>
      
	 </nav>
    </div>
  </div>
</header>
<!--Header_section-->

<!-- Portfolio -->
<section id="Portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">
  
      <!-- Title -->
      <div class="section-title">
        <h2>Events</h2>
      </div>
      <!--/Title -->
  
    </div>
    <!-- Container -->
  
    <div class="portfolio-top"></div>
  
    <!-- Portfolio Filters -->
    <div class="portfolio">
  
      <div id="filters" class="sixteen columns">
        <ul class="clearfix">
          <li><a id="all" href="#" data-filter="*" class="active">
            <h5>All</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".birthday">
            <h5>Birthday</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".kevent">
            <h5>Event</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".anniv">
            <h5>Anniversary</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".livep">
            <h5>Live Perfomances</h5>
            </a></li>
        </ul>
      </div>
      <!--/Portfolio Filters -->
  
      <!-- Portfolio Wrapper -->
      <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four   livep isotope-item">
          <div class="portfolio_img"> <img src="img/tzuyu1.jpg"  alt="tzuyu1"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">TWICE</h3>
              </div>
            </a>
          </div>
          </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item-->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four  kevent isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink2.jpg" alt="BlackPink2"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four  kevent  isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink3.jpg" alt="BlackPink3"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item-->
  
        <!-- Portfolio Item-->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four  anniv  birthday web isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink4.png" alt="BlackPink4"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!-- Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four  kevent isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink5.jpg" alt="BlackPink5"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink6.jpg" alt="BlackPink6"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item  -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four  kevent web isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink7.jpg" alt="BlackPink7"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
         </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four   anniv isotope-item">
          <div class="portfolio_img"> <img src="img/momoland.jpg" alt="yeonwoo"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">MOMOLAND</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 480px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four   anniv isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink9.jpg" alt="BlackPink9"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 480px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four   anniv isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink10.jpg" alt="BlackPink10"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 480px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four   anniv isotope-item">
          <div class="portfolio_img"> <img src="img/tzuyu2.jpg" alt="tyuzu2"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">TWICE</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 480px, 0px) scale3d(1, 1, 1); height: 240px; width: 337px; opacity: 1;" class="portfolio-item one-four   anniv isotope-item">
          <div class="portfolio_img"> <img src="img/BlackPink12.jpg" alt="BlackPink12"> </div>
          <div class="item_overlay">
            <a href="{{ route('make_event') }}">
              <div class="item_info">
                <h3 class="project_name">BLACKPINK</h3>
              </div>
            </a>
          </div>
        </div>
        <!--/Portfolio Item -->
  
      </div>
      <!--/Portfolio Wrapper -->
  
    </div>
    <!--/Portfolio Filters -->
  
    <div class="portfolio_btm"></div>
  
  
    <div id="project_container">
      <div class="clear"></div>
      <div id="project_data"></div>
    </div>
  
  
  </section>
  <!--/Portfolio -->

@endsection