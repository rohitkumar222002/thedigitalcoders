<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;
use App\Models\subcategory;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        $categories=category::all();
        $subcategories=subcategory::all();
        return view('admin-pro.add_blog',compact('categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        $blogs=Blogs::all();
        return view('admin-pro.blog_list',compact('blogs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'photo' => 'required',
        ]);
        $blogs = blogs::where('title', $request->title)->first();
        if($blogs==null){
            $blogs = new Blogs;
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
        $blogs->title=$request->title;
        $blogs->category_id=$request->category_id;
        $blogs->subcategory_id=$request->subcategory_id;
        $blogs->description=$request->discription;
        $blogs->status=$request->status;
        $blogs->photo=$imageName;
        $blogs->slug = Str::slug($request->title);
        $blogs->save();
        session()->flash('success', 'new blogs added successfully');
        return redirect()->back();
            }
            session()->flash('error', 'blogs already exist');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogs  $blogs
     
     */
    public function show(Blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogs  $blogs
     
     */
    public function edit(string $id)
    {
        $blogs=Blogs::findOrfail($id);
        $categories=category::all();
        $subcategories=subcategory::all();
        return view('admin-pro.edit_blogs',compact("blogs",'categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogs  $blogs
     
     */
    public function update(Request $request, Blogs $blogs)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
        ]);
        $blogs = Blogs::find($request->id);
        if(isset($request->photo)){
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
            $blogs->photo=$imageName;
        }
        $blogs->title=$request->title;
        $blogs->category_id=$request->category_id;
        $blogs->subcategory_id=$request->subcategory_id;
        $blogs->description=$request->discription;
        $blogs->status=$request->status;
        $blogs->slug = Str::slug($request->title);
        $blogs->save();
        session()->flash('success', ' Blogs Update successfully');

        return redirect()->route('blogs.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogs  $blogs
     
     */
    public function destroy(Blogs $blogs,$id)
    {
        $blogs=Blogs::where('id',$id)->delete();
        return redirect()->route('products.index');
    }
}