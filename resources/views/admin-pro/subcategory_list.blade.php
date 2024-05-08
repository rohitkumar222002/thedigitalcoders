@extends('admin-pro.admin')
@section('content')


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <h1>Subcategory</h1>
                    @if(count($subcategories)>0)
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Operations</th>
                                    <!-- <th>status</th>
                                    <th>price</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subcategories as $subcategory)
                                <tr>
                                    <td>{{$subcategory->id}}</td>
                                    <td>{{$subcategory->category->title}}</td>
                                    <td>{{$subcategory->title}}</td>
                                    <td>{{$subcategory->status}}</td>
                                    <td>
                                        <a href="{{route('subcategories.edit',encrypt($subcategory['id']))}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('subcategories-destroy',$subcategory['id'])}}"
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