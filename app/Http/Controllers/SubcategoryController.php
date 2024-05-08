<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        $subcategories=subcategory::all();
        return view('admin-pro.subcategory_list',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        $categories=category::all();
        return view('admin-pro.add_subcategory',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);
        $subcategory = subcategory::where('title', $request->title)->first();
        if($subcategory==null){
            $subcategory = new subcategory;
       $subcategory->category_id=$request->category_id;
       $subcategory->title=$request->title;
       $subcategory->status=$request->status;
       $subcategory->slug = Str::slug($request->title);
       $subcategory->save();
       session()->flash('success', 'new subcategory added successfully');
       return redirect()->back();

           }
           session()->flash('error', 'Subcategory already exist');
           return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     
     */
    public function edit(string $id)
    {
        // dd('dhsah');
        $id=decrypt($id);
        $subcategories=subcategory::findOrfail($id);
        $categories=category::all();
        return view('admin-pro.edit_subcategory',compact('subcategories','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subcategory  $subcategory
     
     */
    public function update(Request $request, subcategory $subcategory)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);
       
        $subcategory = subcategory::find($request->id);
        $subcategory->category_id = $request->category_id;
        $subcategory->title = $request->title;
        $subcategory->status = $request->status;
        $subcategory->slug = Str::slug($request->title);

        $subcategory->save();
        session()->flash('success', ' subcategory Update successfully');

        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcategory  $subcategory
     
     */
    public function destroy(subcategory $subcategory,$id)
    {
        $subcategory=subcategory::where('id',$id)->delete();
        return redirect()->route('subcategories.index');
    }
    
}
