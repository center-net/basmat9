<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>  - تسجيل دخول</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('site/assets/images/logo.jpg')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('dashboard/assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <style>
      body{
          direction: rtl;
          text-align: right;
      }
  </style>
</head>

<body class="g-sidenav-show g-sidenav-pinned" style="background-color: #04adbc">
  <!-- Navbar -->
 
  <!-- Main content -->
  <div class="main-content">
    
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9" style="background-color: #004767;">

      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">

            <div class="card-body px-lg-5 py-lg-5">
              <h1 style="color:#004767" class="text-center"> فريق بسمة مريض التطوعي</h1><br>
              <h2 style="color:#004767" class="text-center">تسجيل دخول</h2><br>
              <form role="form" action="{{ route('login') }}" method="POST">
                  @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" placeholder="ايميل المستخدم" name="email" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="كلمة المرور" name="password" type="password">
                  </div>
                </div>
         

                <div class="text-center">
                  <button type="submit" class="btn " style="background-color: #004767; color:#fefefe"> دخول</button>
                </div>
              </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('dashboard/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dashboard/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('dashboard/assets/js/argon.js?v=1.2.0') }}"></script><div class="backdrop d-xl-none" data-action="sidenav-unpin" data-target="undefined"></div>


</body></html>
