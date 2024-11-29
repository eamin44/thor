<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('Admin/images/logo.svg')}}" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('Admin/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset('Admin/images/faces/face15.jpg')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{Auth::user()->name }}</h5>
                  <span>Gold Member</span>
                </div>
              </div>
             
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="false" aria-controls="basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('hero.manage')}}">Hero Section</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('hero.create')}}">Booking</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ser" aria-expanded="false" aria-controls="ser">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Services</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ser">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('service.manage') }}">All Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('service.create') }}">Add New Service</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#des" aria-expanded="false" aria-controls="des">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Destination</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="des">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('destination.manage')}}">All Destination</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('destination.create')}}">Add New Destination</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#book" aria-expanded="false" aria-controls="book">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Booking</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="book">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('booking.manage')}}">All Booking</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('booking.create')}}">Add New Booking</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#test" aria-expanded="false" aria-controls="test">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Testimonial</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="test">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">All Testimonial</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Add New Testimonial</a></li>
              </ul>
            </div>
          </li>
        
        </ul>
      </nav>