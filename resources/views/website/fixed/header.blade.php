<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>LMS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="{{route('home')}}">Home</a></li>
          <li><a class="btn" style="color:white" id="scrollDownBtn">Available Book</a></li>
          <a class="nav-link" href="{{route('cart.get')}}">My Book ({{session()->has('cart') ? count(session()->get('cart')):0}})</a>
          <!-- <li><a class="btn" style="color:white" id="scrollDownBtn">My Book</a></li> -->

          @if(auth()->user())
           <li><a class="nav-item nav-link" href="">{{auth()->user()->name}}</a></li>
           <li><a class="nav-item nav-link" href=" {{route('customer.logout')}}">Logout</a></li>
           <li><a href="{{route('view.profile')}}">My Profile ({{$notify}})</a></li>
          
          @else
          <li class="dropdown"><a href=""><span>LogIn</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('customer.login')}}">User Login</a></li>
             
              <li><a href="{{route('admin.login')}}">Admin Login</a></li>
              
            </ul>
          </li>
          <li><a class="nav-item nav-link" href="{{route('user.signup')}}">SignUp</a></li>
          @endif
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Js ScrollDown -->
  <script>
       let btnScrolDown = document.getElementById("scrollDownBtn");
       btnScrolDown.addEventListener("click",function(){
            window.scrollTo({
               top:700,
               left:0,
               behavior: 'smooth'
            });
       });
    </script>