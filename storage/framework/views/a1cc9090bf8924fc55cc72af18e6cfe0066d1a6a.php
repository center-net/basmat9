<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="<?php echo e(route('admin.home')); ?>">
                
                <h3>فريق بسمة مريض التطوعي</h3>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('admin.home')); ?>">
                            <i class="ni ni-tv-2 text-primary" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> لوحة التحكم </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.initiatives')); ?>">
                            <i class="ni ni-planet text-orange" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> المبادرات </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.orders')); ?>">
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
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="ni ni-chart-pie-35" style="padding-left: 10px;"></i>
                            <span class="nav-link-text"> تسجيل الخروج </span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>

                    
                    </form>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH E:\laravel\basmat\resources\views/dashboard/include/sidebar.blade.php ENDPATH**/ ?>