<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function index()
    {
        $products=Product::all();
        return view('admin-pro.product_list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        $categories=category::all();
        $subcategories=subcategory::all();
        return view('admin-pro.add_product',compact('categories','subcategories'));
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
            'subcategory_id' => 'required',
            'price' => 'required',
            'discription' => 'required',
            'status' => 'required',
        ]);
        $products = Product::where('title', $request->title)->first();
         if($products==null){
            $products = new Product;
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
        $products->title=$request->title;
        $products->category_id=$request->category_id;
        $products->subcategory_id=$request->subcategory_id;
        $products->discription=$request->discription;
        $products->price=$request->price;
        $products->discount_price=$request->discount_price;
        $products->meta_title=$request->meta_title;
        $products->meta_discription=$request->meta_discription;
        $products->meta_keyword=$request->meta_keyword;
        $products->status=$request->status;
        $products->photo=$imageName;
        $products->slug = Str::slug($request->title);
        $products->save();
        session()->flash('success', 'new product added successfully');
        return redirect()->back();

            }
            session()->flash('error', 'product already exist');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     
     */
    public function edit(string $id)
    {
        $id=decrypt($id);
        $products=product::findOrfail($id);
        $categories=category::all();
        $subcategories=subcategory::all();
        return view('admin-pro.edit_product',compact("products",'categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     
     */
    public function update(Request $request, Product $product)
    {
       
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'price' => 'required',
            'discription' => 'required',
            'status' => 'required'
        ]);
        $products = Product::find($request->id);
        
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('img'),$imageName);
        $products->photo=$imageName;
        $products->title=$request->title;
        $products->category_id=$request->category_id;
        $products->subcategory_id=$request->subcategory_id;
        $products->discription=$request->discription;
        $products->price=$request->price;
        $products->discount_price=$request->discount_price;
        $products->meta_title=$request->meta_title;
        $products->meta_discription=$request->meta_discription;
        $products->meta_keyword=$request->meta_keyword;
        $products->status=$request->status;
        $products->slug = Str::slug($request->title);
        $products->save();
        session()->flash('success', ' Product Update successfully');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     
     */
    public function destroy(Product $product,$id)
    {
        $product=Product::where('id',$id)->delete();
        return redirect()->route('products.index');
    }
}