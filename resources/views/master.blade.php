
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link href="{{ asset('hrm/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('hrm/dist/css/style.min.css') }}" rel="stylesheet">

    @stack('css')
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
             @include('backend.include.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
             @include('backend.include.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
            <!-- footer -->
            <footer class="footer text-center" style="margin-top:250px;">
                <div style="background:#fff;" class="page-wrapper">
                  All Rights Reserved by setcolbd. Designed and Developed by <a href="https://setcolbd.com">setcolbd</a>.
                </div>
            </footer>
            <!-- End footer -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->   
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('hrm/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('hrm/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('hrm/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('hrm/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('hrm/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('hrm/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('hrm/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('hrm/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('hrm/dist/js/pages/chart/chart-page-init.js') }}"></script>
     @stack('js')

</body>

</html>