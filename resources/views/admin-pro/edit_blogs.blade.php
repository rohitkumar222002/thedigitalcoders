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

                            Blogs
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit-blog</h3>
                            </div>
                            <hr>
                            <form action="{{route('blogs.update',[$blogs->id])}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="id" value="{{$blogs->id}}" />

                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Title<span
                                            style="color:red;">*</span></label>
                                    @error('title')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <input name="title" value="{{$blogs['title']}}" type="text"
                                        class="form-control cc-name valid">


                                </div>
                                <div class="form-group has-success">
                                    <section>
                                        <label>Add category <span style="color:red;">*</span></label>
                                        @error('category_id')
                                        <span style="color:red;"> {{$message}}</span>
                                        @enderror
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $cat)
                                            <option value="{{$cat['id']}}" @if($cat['id'] === $blogs['category_id']){ 'selected'} @endif>{{$cat['title']}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group has-success">
                                    <section>
                                        <label>Add Subcategory <span style="color:red;">*</span></label>
                                        @error('subcategory_id')
                                        <span style="color:red;"> {{$message}}</span>
                                        @enderror
                                        <select class="form-control" name="subcategory_id">
                                            <option value="">Select Category</option>
                                            @foreach($subcategories as $sub)
                                            <option value="{{$sub['id']}}">{{$sub['title']}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">discription<span
                                            style="color:red;">*</span></label>
                                    @error('discription')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <textarea name="discription" id="editor" class="form-control cc-name valid">{{$blogs['discription']}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Status</label>
                                    @error('status')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Photo<span
                                            style="color:red;">*</span></label>
                                    @error('photo')
                                    <span style="color:red;"> {{$message}}</span>
                                    @enderror
                                    <input name="photo" type="file" id="file" accept="image/png, image/jpeg" value="{{$blogs->photo}}" class="form-control cc-name valid">
                                </div>
                                <div class="form-group has-success">
                                    <div id="image"></div>
                                    <img src="{{asset('img/'.$blogs->photo)}}" id="img" width="80px" height="80px">
                                </div>
                                <div>
                                    <input type="submit" value="Save" name="save" class="btn btn-lg btn-info btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

    </script>
        @endsection

    