<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/manage/assets/images/favicon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/">
    <!-- Bootstrap Core CSS -->
    <link href="/manage/assets/plugins/bootstrap-rtl/css/rtl/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/manage/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/manage/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">

        @yield('login')
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/manage/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/manage/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/manage/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/manage/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/manage/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/manage/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/manage/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/manage/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/manage/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


</body></html>