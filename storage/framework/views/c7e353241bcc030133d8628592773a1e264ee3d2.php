

<?php $__env->startSection('content'); ?>
   
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="">
                        <h6 class="h2 text-white d-inline-block mb-0"></h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>"> لوحة التحكم </a></li>
                                <li class="breadcrumb-item active" aria-current="page"></li>  الطلبات
                            </ol>
                        </nav>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0" style="display: inline-flex;">
                        <h3 class="mb-0">جدول الطلبات </h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>الإسم</th>
                                    <th>الإيميل</th>
                                    <th>رقم الجوال</th>

                                    <th>الوصف</th>
                                    <th>حالة الطلب</th>
                                    <th>العمليات </th>

                                </tr>
                            </thead>
                            <tbody class="list">
                                
                             
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($order->name); ?></td>
                                        <td>
                                            <a href="mailto:example@mail.com">
                                                <?php echo e($order->email); ?>

                                            </a>
                                        </td>


                                        <td><?php echo e($order->phone); ?></td>
                                        <td><?php echo e($order->description); ?></td>
                                        <td>

                                            <?php if($order->status == 1): ?>
                                                <i style="    font-size: 19px;
                                                    padding: 2px;
                                                    margin-right: 16px;
                                                    /* text-align: center; */
                                                    color: #6074e0;" class="fa-solid fa-eye"></i>
                                            <?php else: ?>
                                                <i style="    font-size: 19px;
                                                padding: 2px;
                                                margin-right: 16px;
                                                /* text-align: center; */
                                                color: #6074e0;" class="fa-solid fa-eye-slash"></i>
                                            <?php endif; ?>
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#exampleModaldelete<?php echo e($order->id); ?>" title=" حذف"><i
                                                    class="fa fa-close"></i> حذف</button>

                                                <?php if($order->status == 0): ?>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#exampleModalconvert<?php echo e($order->id); ?>" title=" تعديل"><i
                                                    class="fa fa-edit"></i> تعديل</button>
                                        <?php endif; ?>

                                        </td>

                                        <div class="modal fade" id="exampleModaldelete<?php echo e($order->id); ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="<?php echo e(route('admin.order_delete', $order->id)); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <h5 class="modal-title" style="display: flex;"
                                                                id="exampleModalLabel"> حذف </h5>

                                                            

                                                            <div class="modal-body" style="display: flex;">
                                                                هل انت متاكد من عملية الحذف ؟
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">اغلاق</button>
                                                                <button type="submit" class="btn btn-danger">تأكيد</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>


                                        
                                        <div class="modal fade" id="exampleModalconvert<?php echo e($order->id); ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    
                                                    <div class="modal-body">
                                                      
                                                        <form action="<?php echo e(route('admin.orderedit', $order->id)); ?>"
                                                            method="post">

                                                            <?php echo csrf_field(); ?>
                                                            <h5 class="modal-title" style="display: flex;"
                                                                id="exampleModalLabel">تعديل الحالة </h5>

                                                            

                                                            <div class="modal-body" style="display: flex;">
                                                                هل تمت مشاهدة الطلب ؟
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">اغلاق</button>
                                                                <button type="submit" class="btn btn-danger">تأكيد</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                               




                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="row">
                        <div class="col-md-5 col-sm-5">

                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                <?php echo e($orders->links('pagination::bootstrap-4')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\basmat\resources\views/dashboard/pages/order/index.blade.php ENDPATH**/ ?>