<?php

namespace App\Http\Controllers;

use App\Models\Initiative;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInitiativeRequest;
use App\Http\Requests\UpdateInitiativeRequest;

use Illuminate\Support\Str;
use Image;

class InitiativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $initiatives = Initiative::paginate(12);
        // return $orders;
        return view('dashboard.pages.initiatives.index' ,['initiatives'=>$initiatives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInitiativeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= Validator($request->all(),[
            'title' => 'required',
            'description' =>'required',
            'text_news' =>'required',
            'image' =>'required',
        ]);
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/images/' . $request->image->hashName()));

                $image = $request->image->hashName();

        }//end of if
        if (! $validator->fails()) {
            Initiative::create([
                 'title' => $request->title,
                 'description' =>$request->description,
                 'text_news' =>$request->text_news,
                 'image' => $image,
             ]);
             return redirect()->back()->with('success','تم ارسال طلبك بنجاح');
         }else{
             return back()->with('errors', $validator->getMessageBag()->first());
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function show(Initiative $initiative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $validator= Validator($request->all(),[
            'title' => 'required',
            'description' =>'required',
            'text_news' =>'required',
            'image' =>'required',
        ]);
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/images/' . $request->image->hashName()));

                $image = $request->image->hashName();

        }//end of if
        Initiative::find($id)->update([
            'title' => $request->title,
            'description' =>$request->description,
            'text_news' =>$request->text_news,
            'image' =>$image,
        ]);
        return redirect()->back()->withSuccess('تم تعديل المبادرة بنجاح');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInitiativeRequest  $request
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator= Validator($request->all(),[
            'title' => 'required',
            'description' =>'required',
            'text_news' =>'required',
            'image' =>'required',
        ]);

        Initiative::find($id)->update([
            'title' => $request->title,
            'description' =>$request->description,
            'text_news' =>$request->text_news,
            'image' =>$request->image,
        ]);
        return redirect()->back()->withSuccess('تم تعديل المبادرة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Initiative  $initiative
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Initiative::find($id)->delete();
        return redirect()->back()->withSuccess('تم حذف الطلب بنجاح');
    }
}
