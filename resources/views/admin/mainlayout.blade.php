<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link href="{{asset('assets/images/icon.png')}}" rel="shortcut icon"/>
    <!-- Title Page-->
    <title>Shopmart</title>


    <!-- Fontfaces CSS-->
    <link href="{{asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">

     <link href="{{asset('assets/css/jquery.dataTables.min.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/css/jquery.dataTables.css')}}" rel="stylesheet" >

    <link href="{{asset('assets/css/data-table/bootstrap-table.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/css/data-table/bootstrap-editable.css')}}"rel="stylesheet" media="all">

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/slick/slick.css')}}" rel="stylesheet')}}" media="all">
    <link href="{{asset('assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="{{asset('assets/images/logo1.png')}}" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                         <li class="active has-sub">
                            <a class="js-arrow" href="{{route('mainlayout')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                            
                        </li>
                        <li>
                        <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Category</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addcategory') }}"><i class="fa fa-plus-square"></i>Add Category</a>
                                </li>
                                <li>
                                   <a href="{{ route('viewcategory') }}"><i class="fas fa-th-list"></i>View All</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                        <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-box"></i>Sub-Category</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addsubcategory') }}"> <i class="fa fa-plus-square"></i>Add Sub-Category</a>
                                </li>
                                <li>
                                    <a href="{{ route('viewsubcategory') }}"><i class="fas fa-th-list"></i>View All</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-cart-plus"></i>Products</a></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addproduct') }}">
                                        <i class="fa fa-plus-square"></i> Add Product</a>
                                </li>
                                <li>
                                    <a href="{{ route('viewproduct') }}"><i class="fas fa-th-list"></i>View All</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-briefcase"></i>Orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#"><i class="far fa-edit"></i>Pending Orders</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-ambulance"></i>Delivered</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('customers') }}">
                           <i class="fas fa-users"></i>Customers </a>
                        </li>
                        

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/images/logo1.png')}}" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('mainlayout')}}">
                                <i class="fas fa-home"></i>Dashboard</a>
                            
                        </li>
                        <li>
                        <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Category</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addcategory') }}"><i class="fa fa-plus-square"></i>Add Category</a>
                                </li>
                                <li>
                                   <a href="{{ route('viewcategory') }}"><i class="fas fa-th-list"></i>View All</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                        
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-cart-plus"></i>Products</a></i>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('addproduct') }}">
                                        <i class="fa fa-plus-square"></i> Add Product</a>
                                </li>
                                <li>
                                    <a href="{{ route('viewproduct') }}"><i class="fas fa-th-list"></i>View All</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('orderdetails') }}">
                                <i class="fas fa-ambulance"></i>Orders</a>
                            
                        </li>
                        <li>
                            <a href="{{ route('customers') }}">
                           <i class="fas fa-users"></i>Customers </a>
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-images"></i>Banner</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('banner')}}"><i class="fa fa-plus-square"></i>Add Banner</a>
                                </li>
                                <li>
                                    <a href="{{route('viewbanner')}}"><i class="fas fa-th-list"></i>View All</a>
                                </li>
                            </ul>
                        </li>

                         <li class="has-sub">
                            <a class="js-arrow" href="{{route('logo')}}">
                                <i class="fas fa-camera"></i>Logo</a>
                            
                        </li>

                        <li>
                            <a href="{{route('complaints')}}">
                           <i class="fas fa-envelope"></i>Complaints </a>
                        </li>

                         <li>
                            <a href="{{route('careerapp')}}">
                           <i class="fas fa-briefcase"></i>Career </a>
                        </li>




                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <form class="form-header" action="" method="POST">
                               
                               
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">

                                            <img src=" {{asset('assets/images/icon/admin.png')}}" />

                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('accountview') }}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                    
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                


                &nbsp;&nbsp;&nbsp; @yield('content')

            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->


    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.3.1.js')}}"></script>

    <!-- data table JS
        ============================================ -->
    <script src="{{asset('assets/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('assets/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('assets/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('assets/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('assets/js/data-table/bootstrap-table-export.js')}}"></script>
    


    <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}">
        
    </script>

    <!-- Main JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
