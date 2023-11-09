<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('/') }}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin/assets/css/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    {{-- toster msg --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @stack('styles')

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route('dashboard') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                {{-- <img src="{{ asset('/') }}admin/assets/images/logo.svg" alt=""
                                    height="22"> --}}
                                    <p class="mt-3 text-white">Admin Panel</p>
                            </span>
                            <span class="logo-lg">
                                {{-- <img src="{{ asset('/') }}admin/assets/images/logo-dark.png" alt=""
                                    height="17"> --}}
                                    <p class="mt-3 text-white">Admin Panel</p>
                            </span>
                        </a>

                        <a href="{{ route('dashboard') }}" class="logo logo-light">
                            <span class="logo-sm">
                                {{-- <img src="{{ asset('/') }}admin/assets/images/logo-light.svg" alt=""
                                    height="22"> --}}
                                    <h3 class="mt-3 text-white">Admin Panel</h3>
                            </span>
                            <span class="logo-lg">
                                {{-- <img src="{{ asset('/') }}admin/assets/images/logo-light.png" alt=""
                                    height="19"> --}}
                                    <h3 class="mt-3 text-white">Admin Panel</h3>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <a href="{{ url('/') }}" target="_blank" class="btn mt-3 text-white" style="background: #2A3042">
                            Visit website
                        </a>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('admin/profile/'. Auth::user()->image) }}" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('profile.index') }}"><i
                                    class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"
                                onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header> <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{ route('dashboard') }}" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span
                                    class="badge badge-pill badge-info float-right"></span>
                                <span>Dashboards</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="waves-effect">
                                <i class="bx bx-add-to-queue"></i><span
                                    class="badge badge-pill badge-info float-right"></span>
                                <span>Orders</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.contact.message') }}" class="waves-effect">
                                <i class="bx bx-add-to-queue"></i><span
                                    class="badge badge-pill badge-info float-right"></span>
                                <span>Messages</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('user.admin.manage') }}" class="waves-effect">
                                <i class="bx bx-add-to-queue"></i><span
                                    class="badge badge-pill badge-info float-right"></span>
                                <span>Users Control</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-add-to-queue"></i>
                                <span>Categories</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('category.add') }}">Add Category</a></li>
                                <li><a href="{{ route('category.manage') }}">Manage Category</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-add-to-queue"></i>
                                <span>Brands</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('brand.add') }}">Add Brand</a></li>
                                <li><a href="{{ route('brand.manage') }}">Manage Brand</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-add-to-queue"></i>
                                <span>Products</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('product.add') }}">Add Product</a></li>
                                <li><a href="{{ route('product.manage') }}">Manage Product</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-add-to-queue"></i>
                                <span>Cupon Code</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('product.add') }}">Create Cupon</a></li>
                                <li><a href="{{ route('product.manage') }}">Manage Cupon</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-add-to-queue"></i>
                                <span>Blogs</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('blog.category.add') }}">Add Category</a></li>
                                <li><a href="{{ route('blog.category.manage') }}">Manage Category</a></li>
                                <li><a href="{{ route('blog.add') }}">Add Blog</a></li>
                                <li><a href="{{ route('blog.manage') }}">Manage Blog</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('banner.add') }}"" class="waves-effect">
                                <i class="bx bx-add-to-queue"></i><span
                                    class="badge badge-pill badge-info float-right"></span>
                                <span>Banner</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-add-to-queue"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('blog.category.add') }}">Logo & Social Links</a></li>
                                <li><a href="{{ route('blog.category.manage') }}">About Us</a></li>
                                <li><a href="{{ route('blog.add') }}">Contact Us</a></li>
                                <li><a href="{{ route('blog.add') }}">Privacy Policy</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->


        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('body')
                </div>
            </div>
        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/') }}admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/libs/node-waves/waves.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('/') }}admin/assets/js/app.js"></script>
        <script src="{{ asset('/') }}admin/assets/js/toastr.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Summernote js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        {{-- select2 --}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            @if (Session::has('message'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.success("{{ session('message') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                }
                toastr.warning("{{ session('warning') }}");
            @endif
        </script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
                {!! Toastr::message() !!}
        @stack('scripts')
</body>


</html>
