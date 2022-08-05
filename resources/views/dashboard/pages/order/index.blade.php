@extends('dashboard.layout')

@section('content')
   
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="">
                        <h6 class="h2 text-white d-inline-block mb-0"></h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"> لوحة التحكم </a></li>
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
                                
                             
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->name }}</td>
                                        <td>
                                            <a href="mailto:example@mail.com">
                                                {{ $order->email }}
                                            </a>
                                        </td>


                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->description }}</td>
                                        <td>

                                            @if ($order->status == 1)
                                                <i style="    font-size: 19px;
                                                    padding: 2px;
                                                    margin-right: 16px;
                                                    /* text-align: center; */
                                                    color: #6074e0;" class="fa-solid fa-eye"></i>
                                            @else
                                                <i style="    font-size: 19px;
                                                padding: 2px;
                                                margin-right: 16px;
                                                /* text-align: center; */
                                                color: #6074e0;" class="fa-solid fa-eye-slash"></i>
                                            @endif
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#exampleModaldelete{{ $order->id }}" title=" حذف"><i
                                                    class="fa fa-close"></i> حذف</button>

                                                @if ($order->status == 0)
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#exampleModalconvert{{ $order->id }}" title=" تعديل"><i
                                                    class="fa fa-edit"></i> تعديل</button>
                                        @endif

                                        </td>

                                        <div class="modal fade" id="exampleModaldelete{{ $order->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.order_delete', $order->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <h5 class="modal-title" style="display: flex;"
                                                                id="exampleModalLabel"> حذف </h5>

                                                            {{-- هل تمت مشاهدة الطلب ؟ --}}

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


                                        
                                        <div class="modal fade" id="exampleModalconvert{{ $order->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    
                                                    <div class="modal-body">
                                                      
                                                        <form action="{{ route('admin.orderedit', $order->id) }}"
                                                            method="post">

                                                            @csrf
                                                            <h5 class="modal-title" style="display: flex;"
                                                                id="exampleModalLabel">تعديل الحالة </h5>

                                                            {{-- هل تمت مشاهدة الطلب ؟ --}}

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
                                    @endforeach 
                               




                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="row">
                        <div class="col-md-5 col-sm-5">

                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                {{ $orders->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
