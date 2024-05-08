<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('asset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('asset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('asset/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{asset('asset/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('asset/css/theme.css')}}" rel="stylesheet" media="all">
<style>
    button#payment-button {
    WIDTH: 100PX;
}
</style>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('admin-inc.header')
        @include('admin-inc.sidebar')
        <div class="page-container">
            @yield('content')
            @include('admin-inc.footer')
        </div>
    </div>
</body>
     <script>
          ClassicEditor
          .create( document.querySelector( '#editor' ) )
                .then( editor => {
                console.log( editor );
                      } )
                           .catch( error => {
                     console.error( error );
                           } );
                </script>
</html>