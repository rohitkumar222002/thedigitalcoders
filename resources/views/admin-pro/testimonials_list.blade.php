@extends('admin-pro.admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <h1>Category</h1>

                    @if(count($testimonials)>0)

                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>photo</th>
                                    <th>description</th>
                                    <th>Operations</th>
                                    <!-- <th>status</th>
                                    <th>price</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $test)
                                <tr>
                                    <td>{{$test->id}}</td>
                                    <td>{{$test->title}}</td>
                                    <td><img src="{{asset('img/'.$test->photo)}}" width="50px"></td>
                                    <td>{{$test->description}}</td>
                                    <td>
                                        <a href="{{route('testimonials.edit',$test['id'])}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('testimonials-destroy',$test['id'])}}"
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