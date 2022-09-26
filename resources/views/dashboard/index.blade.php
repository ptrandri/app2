<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ticket App</title>
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
    <!-- Begin page -->
    <div class="wrapper">
        <div class="leftside-menu">
            <a class="logo text-center logo-light"> Apps </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">
                <!--- sidemenu -->
                <ul class="side-nav">
                    <li class="side-nav-title side-nav-item">Main</li>

                    <!-- Dashboard -->
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end"></span>
                            <span> Dashboards </span>
                        </a>
                    </li>
                    <!-- End Dashboard -->

                    <!-- Ticket -->
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end"></span>
                            <span> Ticket </span>
                        </a>
                    </li>
                    <!-- End Ticket -->

                    <li class="side-nav-title side-nav-item">Admin</li>
                    <!-- Project -->
                    <li class="side-nav-item">
                        <a href="" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Project </span>
                        </a>
                    </li>
                    <!-- End Project -->

                    <!-- Report -->
                    <li class="side-nav-item">
                        <a href="apps-chat.html" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Report </span>
                        </a>
                    </li>
                    <!-- End Report -->

                    <!-- User -->
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="" aria-expanded="false"
                            aria-controls="sidebarEcommerce" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> User </span>
                        </a>
                    </li>
                    <!-- End User -->
                </ul>
            </div>
        </div>
        <!-- End Begin page -->

        <!-- Section 2 -->
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username" />
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <!-- Profile Section -->
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar"> </span>
                                <span>
                                    <span class="account-user-name">Andri Putra</span>
                                    <span class="account-position">L2 Engineer</span>
                                </span>
                            </a>
                            <!-- End Profile Section -->

                            <!-- Start Dropdown List -->
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                        <!-- End Dropdown List -->
                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..."
                                    id="top-search" />
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">1</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-8">
                            <!-- start page title -->
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <div class="app-search">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search..." />
                                                <span class="mdi mdi-magnify search-icon"></span>
                                                <button class="input-group-text btn-secondary dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="uil uil-sort-amount-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Due Date</a>
                                                    <a class="dropdown-item" href="#">Added Date</a>
                                                    <a class="dropdown-item" href="#">Assignee</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <h4 class="page-title">Tasks <a href="#"
                                        class="btn btn-success btn-sm ms-3">Add New</a></h4>
                            </div>
                            <!-- end page title -->

                            <!-- tasks panel -->
                            <div class="mt-2">
                                <h5 class="m-0 pb-2">
                                    <a class="text-dark" data-bs-toggle="collapse" href="#todayTasks" role="button"
                                        aria-expanded="false" aria-controls="todayTasks">
                                        <i class="uil uil-angle-down font-18"></i>Ticket List <span
                                            class="text-muted">(10)</span>
                                    </a>
                                </h5>

                                <div class="collapse show" id="todayTasks">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- task -->
                                            <div class="row justify-content-sm-between">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="task1" />
                                                        <label class="form-check-label" for="task1"> Monthly Server
                                                            Patching </label>
                                                    </div>
                                                    <!-- end checkbox -->
                                                </div>
                                                <!-- end col -->
                                                <div class="col-sm-6">
                                                    <!-- end .d-flex-->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end task -->
                                        </div>
                                        <!-- end card-body-->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end .collapse-->
                            </div>
                            <!-- end .mt-2-->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row-->
                </div>
                <!-- container -->
            </div>

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            © Ticket - nordicsolutions.asia
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- quill js -->
    <script src="assets/js/vendor/quill.min.js"></script>
    <!-- Init js-->
    <script src="assets/js/pages/demo.tasks.js"></script>
</body>

</html>
