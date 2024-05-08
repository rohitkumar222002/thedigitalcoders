@extends('admin-pro.admin')
@section('content')


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">  Export </button>
                    <h1>Courses</h1>
                    @if(count($courses)>0)

                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <!-- <th>Subcategory</th> -->
                                    <!-- <th>discription</th> -->
                                    <th> price</th>
                                    <th> discount_price</th>
                                    <th>photo</th>
                                    <th>Status</th>
                                    
                                    <th>Operations</th>
                                    <!-- <th>status</th>
                                    <th>price</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $cours)
                                <tr>
                                    <td>{{$cours->id}}</td>
                                    <td>{{$cours->title}}</td>
                                    <td>{{$cours->category->title}}</td>
                                    <!-- <td>{{$cours->subcategory_id}}</td> -->
                                    <!-- <td>{{$cours->discription}}</td> -->
                                    <td>{{$cours->price}}</td>
                                    <td>{{$cours->discount_price}}</td>
                                    <td><img src="{{asset('img/'.$cours->photo)}}" ></td>
                                    <td>{{$cours->status}}</td>
                                    <td>
                                        <a href="{{route('courses.edit',$cours['id'])}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('courses-destroy',$cours['id'])}}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p>Not Found any data</p>
                        @endif
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>






















            @endsection