<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;
use App\Models\category;
use App\Models\Courses;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   
     */
    public function index()
    {
     $search=$_REQUEST['property'];

        switch($search){
            case 'category':
                $search_text = $_GET['search'];
                $categories = category::where('title', 'LIKE', '%'.$search_text.'%')->get();

                 return view('admin-pro.category_list',compact('categories'));
            case 'subcategory':
                $search_text = $_GET['search'];
                 $subcategories = subcategory::where('title', 'LIKE', '%'.$search_text.'%')->get();

                return view('admin-pro.subcategory_list',compact('subcategories'));
            case 'courses':
                $search_text = $_GET['search'];
                $courses = Courses::where('title', 'LIKE', '%'.$search_text.'%')->get();

                return view('admin-pro.courses_list',compact('courses'));
            default:
                abort(404);


        }
    }

    /**
     * Show the form for creating a new resource.
     *
   
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
   
     */
    public function store(Request $request)
    {
        //
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
