<!doctype html>
<html lang="en">
@include('admin.partials.header')

<body data-bs-theme="dark" data-topbar="dark" data-sidebar="dark">
    <!-- <body data-layout="horizontal"> -->
    <div id="layout-wrapper">
        @include('admin.partials.topbar')
        @include('admin.partials.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('admin-content')
                </div>
            </div>
            @include('admin.partials.footbar')
        </div>
    </div>
    @include('admin.partials.footer')
</body>

</html>
