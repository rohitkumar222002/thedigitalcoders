@extends('admin-pro.admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">

                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <h1>About Us</h1>

                    @if(count($aboutus)>0)

                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Operations</th>

                                    <!-- <th>status</th>
                                    <th>price</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aboutus as $about)
                                <tr>
                                    <td>{{$about->id}}</td>
                                    <td>{{$about->title}}</td>
                                    <td>{{$about->description}}</td>
                                    <td>{{$about->status}}</td>
                                    <td>
                                        <a href="{{route('aboutus.edit',encrypt($about['id']))}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('aboutus-destroy',$about['id'])}}"
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