@extends('admin-pro.admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <h1>Category</h1>

                    @if(count($categories)>0)

                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Operations</th>

                                    <!-- <th>status</th>
                                    <th>price</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <a href="{{route('categories.edit',encrypt($category['id']))}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('categories-destroy',$category['id'])}}"
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