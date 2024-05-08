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
                                <h3 class="text-center title-2">Add-Category</h3>
                            </div>
                            <hr>
                            <form action="{{route('categories.store')}}" method="post">
                                @csrf
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Add-Category</label>
                                    <input id="cc-name" name="category" type="text" class="form-control cc-name valid"
                                        data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                        aria-describedby="cc-name-error">
                                    
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