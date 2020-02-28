<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Header Mobile -->
    @include('includes.headerMobile')
    <!-- end:: Header Mobile -->

    <!-- begin:: Root -->
    <div class="kt-grid kt-grid--hor kt-grid--root">

        <!-- begin:: Page -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            @include('includes.aside')
            <!-- end:: Aside -->

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                @include('includes.header')
                <!-- end:: Header -->

                <!-- begin:: Wrapper -->
                @yield('content')
                <!-- end:: Wrapper -->

            </div>

        </div>
        <!-- end:: Page -->

    </div>
    <!-- end:: Root -->

</body>

<!-- begin::Global Config(global config for global JS sciprts) -->
@include('includes.script')
<!-- end::Global Config -->

</html>