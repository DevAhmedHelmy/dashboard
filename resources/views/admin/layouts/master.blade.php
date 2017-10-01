<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>AdminLTE 2 | Starter</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- Styles -->
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
            <!-- Ionicons -->
            <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
            <!-- Theme style -->
            <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
            <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
                page. However, you can choose any other skin. Make sure you
                apply the skin class to the body tag so the changes take effect. -->
            <link href="{{ asset('css/skin-blue.min.css') }}" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

            <!-- Google Font -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        <body class="hold-transition skin-blue sidebar-mini">
        @include('admin/layouts.nav')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- <h1>
                    Members
                    <small>Show All Members</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Members</li>
                </ol> -->
                @yield('content-header')
            </section>
            
            <!-- Main content -->
            <section class="content container-fluid">
                @include('flash::message')
                @yield('content')
                

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        </div>
        @extends('admin/layouts.footer')
        <!-- jQuery 3 -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
         <script>
    $('div.alert').not('.alert-important').delay(3000).slideUp();
    $('#flash-overlay-modal').modal();
</script
    </body>
</html>