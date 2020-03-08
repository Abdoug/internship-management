<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    @include('includes.head')

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-bg-light kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-error404-v1">
            <div class="kt-error404-v1__content">
                <div class="kt-error404-v1__title">505</div>
                <div class="kt-error404-v1__desc"><strong>OOPS!</strong> Server Error.</div>
            </div>
            <div class="kt-error404-v1__image">
                <img src="assets/media/misc/404-bg1.jpg" class="kt-error404-v1__image-content" alt="" title="" />
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    @include('includes.script')

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->

    <!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->

</html>