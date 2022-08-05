<?php

namespace App\Http\Controllers;

use App\Models\order;
use Dotenv\Validator;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }
    public function donte()
    {
        
        return view('site.donte');
    }
   

    public function blog()
    {
        return view('site.blog');
    }
    public function order(Request $request)
    {
       $validator= Validator($request->all(),[
           'name' => 'required',
           'email' =>'required',
       ]);
       if (! $validator->fails()) {
            order::create([
                'name' => $request->name,
                'email' =>$request->email,
                'phone' =>$request->phone,
                'description' =>$request->description,
            ]);
            return redirect()->back()->with('success','تم ارسال طلبك بنجاح');
        }else{
            return back()->with('errors', $validator->getMessageBag()->first());
        }
    }
}
