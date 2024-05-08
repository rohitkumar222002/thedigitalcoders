<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    
     */
    public function index()
    {
        $courses=Courses::all();
        return view('admin-pro.courses_list',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
    
     */
    public function create()
    {
        $categories=category::all();
        $subcategories=subcategory::all();
        return view('admin-pro.add_courses',compact('categories','subcategories'));
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
            'price' => 'required',
            'discription' => 'required',
            'status' => 'required',
        ]);
        $Courses = Courses::where('title', $request->title)->first();
         if($Courses==null){
            $Courses = new Courses;
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
        $Courses->title=$request->title;
        $Courses->category_id=$request->category_id;
        $Courses->subcategory_id=$request->subcategory_id;
        $Courses->discription=$request->discription;
        $Courses->price=$request->price;
        $Courses->discount_price=$request->discount_price;
        $Courses->status=$request->status;
        $Courses->photo=$imageName;
        $Courses->slug = Str::slug($request->title);
        $Courses->save();
        session()->flash('success', 'new Courses added successfully');
        return redirect()->back();

            }
            session()->flash('error', 'Courses already exist');
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
    
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
    
     */
    public function edit(string $id)
    {
        $courses=Courses::findOrfail($id);
        $categories=category::all();
        $subcategories=subcategory::all();
        return view('admin-pro.edit_courses',compact("courses",'categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
    
     */
    public function update(Request $request, Courses $courses)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'discription' => 'required',
            'status' => 'required',
            'photo' => 'required'
        ]);
        $courses = Courses::find($request->id);
        
        if(isset($request->photo))
        {
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
            $courses->photo=$imageName;
        }
        $courses->title=$request->title;
        $courses->category_id=$request->category_id;
        $courses->subcategory_id=$request->subcategory_id;
        $courses->discription=$request->discription;
        $courses->price=$request->price;
        $courses->discount_price=$request->discount_price;
        $courses->status=$request->status;
        $courses->slug = Str::slug($request->title);
        $courses->save();
        session()->flash('success', ' Courses Update successfully');

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
    
     */
    public function destroy(Courses $courses ,$id)
    {
        $courses=Courses::where('id',$id)->delete();
        return redirect()->route('products.index');
    }
}
