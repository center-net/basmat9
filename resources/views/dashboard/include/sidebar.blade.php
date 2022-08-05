<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{route('admin.home')}}">
                {{-- <img src="{{ asset('dashboard/img/logo-top.png') }}">
                <img src="{{ asset('dashboard/img/logo-name.png') }}"> --}}
                <h3>فريق بسمة مريض التطوعي</h3>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.home')}}">
                            <i class="ni ni-tv-2 text-primary" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> لوحة التحكم </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.initiatives')}}">
                            <i class="ni ni-planet text-orange" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> المبادرات </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.orders')}}">
                            <i class="ni ni-planet text-orange" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> الطلبات </span>
                        </a>
                    </li>





                </ul>
                <!-- Divider -->

                <!-- Navigation -->
                <hr>
                <ul class="navbar-nav mb-md-3 mt-8">


                    <li class="nav-item mt-9">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="ni ni-chart-pie-35" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> تسجيل الخروج </span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                    {{-- <a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 15px; padding-top:0px"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i
                            class="ni ni-chart-pie-35" style="padding-left: 10px;"></i>تسجيل خروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf --}}
                    </form>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
