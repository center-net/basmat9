<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>  - تسحيل الدخول</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('dashboard/assets/img/brand/favicon.png') }}" type="image/png">
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
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="dashboard.html">
            <img src="{{ asset('dashboard/img/logo-top.png') }}">
            <img src="{{ asset('dashboard/img/logo-name.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="dashboard.html">
                    <img src="{{ asset('dashboard/img/logo-top.png') }}">

                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">
                <span class="nav-link-inner--text" style="color:#fefefe">تسجيل دخول</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">
                <span class="nav-link-inner--text" style="color:#fefefe">تسجيل جديد</span>
              </a>
            </li>
          </ul>
          <hr class="d-lg-none">

        </div>
      </div>
    </nav>
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
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">

              <div class="card-body px-lg-5 py-lg-5">
                <h2 style="color:#004767" class="text-center">تسجيل جديد</h2><br>

                <form role="form" action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="hidden" name="status" value="user">
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input class="form-control" placeholder="اسم المستخدم" name="name" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="البريد الإلكتروني" name="email" type="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="كلمة المرور" name="password"type="password">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4" style="background-color: #004767; color:#fefefe">تسجيل </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('dashboard/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('dashboard/assets/js/argon.js?v=1.2.0') }}"></script><div class="backdrop d-xl-none" data-action="sidenav-unpin" data-target="undefined"></div>


  </body>
</html>
