<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Psy\VersionUpdater\Downloader;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   
     */
    public function index()
    {
        category::withTrashed()->restore();
        // category::withTrashed()->forceDelete();
        
       $categories=category::all();
       $users=User::all();
    //    dd($users);
       return view('admin-pro.category_list',compact('categories','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
   
     */
    public function create()
    {
        return view('admin-pro.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
   
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'status' => 'required',
        ]);
        $category = category::where('title', $request->category)->first();
         if($category==null){
            $category = new category;
        $category->title=$request->category;
        $category->status=$request->status;
        $category->slug = Str::slug($request->category);
        $category->save();
        session()->flash('success', 'new category added successfully');
        return redirect()->back();

            }
            session()->flash('error', 'category already exist');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
   
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
   
     */
    public function edit(string $id)
    {
        $id=decrypt($id);
        $categories=category::findOrfail($id);
        return view('admin-pro.edit_category',compact("categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
   
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'category' => 'required',
        ]);
       
        $category = category::find($request->id);
        $category->title = $request->category;
        $category->status = $request->status;
        $category->slug = Str::slug($request->category);
        $category->save();
        session()->flash('success', ' category Update successfully');
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
   
     */
    public function destroy(category $category,$id)
    {
        $category=category::where('id',$id)->delete();
        return redirect()->route('categories.index');
    }
 

}