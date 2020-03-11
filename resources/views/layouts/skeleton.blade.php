<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>
<style>
    #textLogo {
        margin-right: 0.7rem;
        font-size: 14px;
        color: cornsilk;
        background-color: #374163;
        padding: 2px 10px;
        border-radius: 5px;
    }
    }
</style>

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
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    @include('includes.breadcrumb')

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <!-- begin:: Wrapper -->
                        @yield('content')
                        <!-- end:: Wrapper -->
                    </div>

                    <!-- end:: Content -->
                </div>
                @include('includes.footer')

            </div>
        </div>

    </div>
    <!-- end:: Page -->

    </div>
    <!-- end:: Root -->

</body>

<!-- begin::Global Config(global config for global JS sciprts) -->
@include('includes.script')
<!-- end::Global Config -->
@yield('script')

</html>