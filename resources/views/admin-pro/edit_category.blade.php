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

                            Category
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update/Edit-Category</h3>
                            </div>
                            <hr>
                            <form action="{{route('categories.update',[$categories->id])}}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                                @csrf
                                <input type="hidden" name="id" value="{{$categories->id}}" />

                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Add-Category</label>
                                    <input  name="category" type="text" class="form-control cc-name valid"
                                        value="{{$categories->title}}">
                                        <span>
                                        @error('category')
                                    {{$message}}
                                    @enderror</span>

                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
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




        @endsection