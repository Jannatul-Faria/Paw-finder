<head>

    <meta charset="utf-8" />
    <title>Admin |
        @if (Route::currentRouteName('login') == 'login')
            Login
        @elseif (Route::currentRouteName('register') == 'register')
            Register
        @else
            @yield('title')
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Code " name="description" />
    <meta content="Khayrul Shanto" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ setting()->site_favicon }}">
    <!-- Sweetalert2 -->
    <link href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- choices css -->
    <link href="{{ asset('backend') }}/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet"
        type="text/css" />
    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/preloader.min.css" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    @stack('per_page_css')


</head>
