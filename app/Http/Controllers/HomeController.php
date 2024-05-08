<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Courses;
use App\Models\category;
use App\Models\Testimonial;
use App\Models\Blogs;

class HomeController extends Controller
{
    public function index(){
     $blogs =  blogs::all();
     $testimonials=Testimonial::all();
      $categories =  category::all();
      $courses =  Courses::limit(6)->get();
        return view('forntend-pro.dashboard',compact('categories','courses','blogs','testimonials'));
    }
    public function create($params=null){
            
        $courses = Courses::whereSlug($params)->first();
            return view('forntend-pro.courses-detail',compact('courses'));
      
     
    }
    public function contact_us(){
      return view('forntend-pro.contact');
    }
    public function courses_list(){
      $categories=category::all();
      $courses=Courses::get();
      return view('forntend-pro.courses' ,compact('courses','categories'));
    }
    public function category($params=null){
      // dd($params);
      if($params!=null){
        
        $categories1 = category::whereSlug($params)->first();
        // DD($test);
        if($categories1){
          $courses = Courses::where('category_id',$categories1->id)->get();
          $categories = category::all();
          return view('forntend-pro.courses',compact('categories','courses'));
      }
    }
  
  }
  public function thankyou(){
    return view('forntend-pro.thankyou');
  }
  
public function about_us(){
    return view('forntend-pro.about-us');
  }
public function paymentSuccess(Request $request){
  $paymentId = $request->input('paymentId');
      $payerId = $request->input('PayerID');
      // dd($paymentId);
      
  return view('forntend-pro.success');
}
}