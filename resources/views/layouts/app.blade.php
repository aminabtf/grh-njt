<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GRH') }}</title>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/sb-admin-2.min.css")}} " rel="stylesheet">
    <link href="{{asset("css/app.css")}} " rel="stylesheet">

    <link href="{{asset("fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css">


</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{asset("img/logo-white.png")}} " id="logo-sidebar" />
                </div>
            </a>

            <!-- Divider -->

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url("/")}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user"></i>
                    <span>Employees</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">manage employees:</h6>
                        <a class="collapse-item" href="{{url("users/newform")}}">New Employee</a>
                        <a class="collapse-item" href="{{url("users/list")}}"">List Employees</a>
                        <h6 class="collapse-header">manage children:</h6>
                        <a class="collapse-item" href="buttons.html">New child</a>
                        <a class="collapse-item" href="cards.html">List children</a>
                        <h6 class="collapse-header">manage spouses:</h6>
                        <a class="collapse-item" href="buttons.html">New spouse</a>
                        <a class="collapse-item" href="cards.html">List spouses</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>unities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">manage unities:</h6>
                        <a class="collapse-item" href="utilities-color.html">New Unity</a>
                        <a class="collapse-item" href="utilities-border.html">List Unities</a>
                        <h6 class="collapse-header">manage jobs:</h6>
                        <a class="collapse-item" href="utilities-color.html">New Job</a>
                        <a class="collapse-item" href="utilities-border.html">List jobs</a>
                        <h6 class="collapse-header">manage grades:</h6>
                        <a class="collapse-item" href="utilities-color.html">New grade</a>
                        <a class="collapse-item" href="utilities-border.html">list grades</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Parameters
            </div>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>TO DO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



        </ul>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow fixed-top ">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->first_name}}
                                    {{Auth::user()->last_name}} </span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url("logout")}}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


                <main class="py-4 components">
                    @yield('content')
                </main>


            </div>
            <!-- /.container-fluid -->

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
</script>

<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script src="{{asset("js/sb-admin-2.min.js")}}"></script>


<script src="https://use.fontawesome.com/fb5f32e787.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>



<script src="{{asset("datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("datatables/dataTables.bootstrap4.min.js")}}"></script>

<script src="{{asset("js/app.js")}}"></script>
</html>
