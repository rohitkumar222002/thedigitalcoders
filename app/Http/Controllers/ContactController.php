<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
  
     */
    public function showForm()
    {
        return view('contact_form');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone'=>"required|string|min:8|max:11",
            'message'=>'',
        ]);
    
         $contacts = new Contact;
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->phone=$request->phone;
        $contacts->message=$request->message;
        $contacts->save();
        
        Mail::to('naveen.webadsmedia@gmail.com')->send(new ContactFormMail($data));
        // dd($send);
        return redirect()->route('thankyou');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
  
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
  
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required",
            'phone'=>"required|string|min:8|max:11",
            'email'=>'required',
        ]);
        $contacts = Contact::where('name', $request->name)->first();
        if($contacts==null){
         $contacts = new Contact;
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->phone=$request->phone;
        $contacts->message=$request->message;
        $contacts->save();
        // Mail::to('rohitdigitalcoder@mail.com')->send(new Contact($request));

        }
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
