<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function admin()
    {
        $orders=order::count();
        // return $orders;
        return view('dashboard.pages.home',['orders'=>$orders]);
    }

    public function orders()
    {
        $orders = order::paginate(5);
        // return $orders;
        return view('dashboard.pages.order.index' ,['orders'=>$orders]);
    }

    public function order_delete($id)
    {
        // return $id ;
        order::find($id)->delete();
        return redirect()->back()->withSuccess('تم حذف الطلب بنجاح');
    }
    public function order_edit($id)
    {
        order::find($id)->update([
            'status' => 1
        ]);
        return redirect()->back()->withSuccess('تم مشاهدة الطلب بنجاح');

    }
}
