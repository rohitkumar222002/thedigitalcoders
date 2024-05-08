<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   
     */
    public function index()
    {
       $testimonials=Testimonial::all();
       return view('admin-pro.testimonials_list',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
   
     */
    public function create()
    {
        return view('admin-pro.add-testimonial');
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
            'photo' => 'required',
        ]);
        $Testimonial = Testimonial::where('title', $request->title)->first();
         if($Testimonial==null){
            $Testimonial = new Testimonial;
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
        $Testimonial->title=$request->title;
        $Testimonial->description=$request->description;
        $Testimonial->photo=$imageName;
        $Testimonial->slug = Str::slug($request->title);
        $Testimonial->save();
        session()->flash('success', 'new Testimonial added successfully');
        return redirect()->back();

            }
            session()->flash('error', 'Testimonial already exist');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
   
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
   
     */
    public function edit(string $id)
    {
        $testimonial=Testimonial::findOrfail($id);
       
        return view('admin-pro.edit_testimonial',compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
   
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'description'=>'required'
        ]);
        $testimonial = Testimonial::find($request->id);
        
        if(isset($request->photo))
        {
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
            $testimonial->photo=$imageName;
        }
        $testimonial->title=$request->title;
        $testimonial->description=$request->description;
        $testimonial->slug = Str::slug($request->title);
        $testimonial->save();
        session()->flash('success', ' testimonial Update successfully');

        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
   
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
