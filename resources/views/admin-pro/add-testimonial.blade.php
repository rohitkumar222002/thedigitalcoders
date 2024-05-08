@extends('admin-pro.admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            @if(session()->has('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                            @endif
                            @if(session()->has('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                            @endif

                            Testimonial
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Testimonial</h3>
                            </div>
                            <hr>
                            <form action="{{route('testimonials.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Name<span
                                            style="color:red;">*</span></label>
                                    @error('title')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <input name="title" type="text" class="form-control cc-name valid">


                                </div>
                              
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">discription<span
                                            style="color:red;">*</span></label>
                                    @error('discription')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <textarea name="description"  class="form-control cc-name valid"></textarea>
                                </div>
                              
                              
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Photo<span
                                            style="color:red;">*</span></label>
                                    @error('photo')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <input name="photo" type="file" class="form-control cc-name valid">
                                </div>
                                    <input type="submit" value="Save" name="save" class="btn btn-lg btn-info btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
       



