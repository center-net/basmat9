<?php $__env->startSection('content'); ?>
<?php phpinfo(); ?>
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="">
            <h6 class="h2 text-white d-inline-block mb-0"></h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">  لوحة التحكم  </a></li>
                <li class="breadcrumb-item active" aria-current="page"></li> الصفحة الرئيسية
              </ol>
            </nav>
          </div>
          <p class="mt-3 mb-0 text-sm">
            
          </p>
        </div>
        <!-- Card stats -->
        <div class="row">



          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">الطلبات</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo e($orders); ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-chart-bar-32"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\basmat\resources\views/dashboard/pages/home.blade.php ENDPATH**/ ?>