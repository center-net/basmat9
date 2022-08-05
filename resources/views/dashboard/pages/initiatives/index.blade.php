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
                    <div class="card-header binitiative-0" style="display: inline-flex;">
                        <h3 class="mb-0">جدول الفعاليات </h3>

                        <button type="button" class="button x-small" data-toggle="modal" data-target="#suppliers">
                            إضافة مورد
                        </button>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>العنوان</th>
                                    <th>الحالة</th>
                                    <th>الصورة</th>
                                    <th>العمليات </th>

                                </tr>
                            </thead>
                            <tbody class="list">


                                    @foreach ($initiatives as $initiative)
                                    <tr>
                                        <td>{{ $initiative->title }}</td>
                                        <td>{{ $initiative->active }}</td>
                                        <td>{{ $initiative->image }}</td>
                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#exampleModaldelete{{ $initiative->id }}" title=" حذف"><i
                                                    class="fa fa-close"></i> حذف</button>


                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#exampleModalconvert{{ $initiative->id }}" title=" تعديل"><i
                                                    class="fa fa-edit"></i> تعديل</button>

                                        </td>

                                        <div class="modal fade" id="exampleModaldelete{{ $initiative->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.initiative_delete', $initiative->id) }}"
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



                                        <div class="modal fade" id="exampleModalconvert{{ $initiative->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">

                                                    <div class="modal-body">

                                                        <form action="{{ route('admin.initiativeedit', $initiative->id) }}"
                                                            method="post">

                                                            @csrf
                                                            <div class="form-group">
                                                                <div class="col">
                                                                    <input id="Name" type="text" name="title" class="form-control" value="{{$initiative->title}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" name="description" value="{{$initiative->description}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col">
                                                                    <input type="file" class="form-control" name="image" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="text_news" id="exampleFormControlTextarea1"
                                                                    rows="3">{{$initiative->text_news}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col">

                                                                    @if ( $initiative->status == 'yes' )
                                                                        <input type="radio" name="status" id="status" value="yes" checked >فعال
                                                                        <input type="radio" name="status" id="status" value="no">موقوف
                                                                    @else
                                                                        <input type="radio" name="status" id="status" value="yes"  >فعال
                                                                        <input type="radio" name="status" id="status" value="no" checked>موقوف
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <br><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">إلغاء</button>
                                                        <button type="submit" class="btn btn-success">إرسال</button>
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
                                {{ $initiatives->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="suppliers" tabindex="-1" role="dialog" aria-labelledby="suppliersLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="suppliersLabel">
                        إضافة موظف
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('admin.addinitiatives') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                                <input id="Name" type="text" name="title" class="form-control" placeholder="عنوان المبادرة">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <input type="text" class="form-control" name="description" placeholder="وصف المبادرة">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <input type="file" class="form-control" name="image" placeholder="صورة المبادرة">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="text_news" id="exampleFormControlTextarea1" placeholder="نص المبادرة"
                                rows="3"></textarea>
                        </div>
                        <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">إلغاء</button>
                    <button type="submit" class="btn btn-success">إرسال</button>
                </div>
                </form>

            </div>
        </div>
    </div>

    </div>
@endsection
