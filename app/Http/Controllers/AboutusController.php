<?php

namespace App\Http\Controllers;
use App\Models\Aboutus;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    
     */
    public function index()
    {
        // dd('dsfsa');
       $aboutus=Aboutus::all();
       return view('admin-pro.aboutus-list',compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
    
     */
    public function create()
    {
       return view('admin-pro.add-aboutus');
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
        'status' => 'required',
    ]);
    $aboutus = Aboutus::where('title', $request->title)->first();
     if($aboutus==null){
        $aboutus = new Aboutus;
        $aboutus->title=$request->title;
        $aboutus->description=$request->description;
        $aboutus->status=$request->status;
        $aboutus->slug = Str::slug($request->title);
        $aboutus->save();
        session()->flash('success', 'new About added successfully');
        return redirect()->back();

        }
        session()->flash('error', 'About already exist');
        return redirect()->back();
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
    
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
    
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
    
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
    
     */
    public function destroy($id)
    {
        //
    }
}