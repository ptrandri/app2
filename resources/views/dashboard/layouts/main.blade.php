<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TicketAPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <!-- Start wrapper -->
    <div class="wrapper">
        <!-- Left Sidebar Start -->
        @include('dashboard.layouts.slidebar')
        <!-- Left Sidebar End -->

        <div class="content-page">
            <!-- Topbar Start -->
            @include('dashboard.layouts.header')
            <!-- end Topbar -->
            <div>@yield('container')</div>
        </div>
    </div>
    <!-- END wrapper -->

    {{-- Footer --}}
    @include('dashboard.layouts.footer')

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
</body>

</html>
