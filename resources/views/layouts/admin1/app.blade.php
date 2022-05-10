<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Icons -->
    <link rel="shortcut icon" href="../../../admin1/assets/images/colokan.png">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../../../admin1/plugins/morris/morris.css">

    <!-- Basic Css files -->
    <link href="../../../admin1/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../../admin1/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="../../../admin1/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../../../admin1/assets/css/style.css" rel="stylesheet" type="text/css">

    @yield('head')

</head>

<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>



    <!-- Begin page -->
    <div id="wrapper">
        @include('layouts.admin1.header')

        @include('layouts.admin1.sidebar')

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.admin1.footer')
    </div>

    <script src="../../../admin1/assets/js/jquery.min.js"></script>
    <script src="../../../admin1/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../../admin1/assets/js/modernizr.min.js"></script>
    <script src="../../../admin1/assets/js/metisMenu.min.js"></script>
    <script src="../../../admin1/assets/js/jquery.slimscroll.js"></script>
    <script src="../../../admin1/assets/js/waves.js"></script>

    <script src="../../../admin1/plugins/peity-chart/jquery.peity.min.js"></script>

    <!--Morris Chart-->
    <script src="../../../admin1/plugins/morris/morris.min.js"></script>
    <script src="../../../admin1/plugins/raphael/raphael-min.js"></script>

    <script src="../../../admin1/assets/pages/dashboard.js"></script>

    <!-- App js -->
    <script src="../../../admin1/assets/js/app.js"></script>

</body>

</html>