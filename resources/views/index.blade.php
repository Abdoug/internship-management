<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
    <base href="../../">
    <meta charset="utf-8" />
    <title>Keen | Login - v1</title>
    <meta name="description" content="User login example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body style="background-image: url(assets/media/misc/bg_1.jpg)" class="kt-login-v1--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid__item  kt-grid__item--fluid kt-grid kt-grid--hor kt-login-v1" id="kt_login_v1">

            <!--begin::Item-->
            <div class="kt-grid__item">

                <!--begin::Heade-->
                <div class="kt-login-v1__head">
                    <div class="kt-login-v1__logo">
                        <a href="#">
                            <img src="assets/media/logos/logo-4.png" alt="" />
                        </a>
                    </div>
                    <!-- <div class="kt-login-v1__signup">
                        <h4 class="kt-login-v1__heading">Don't have an account?</h4>
                        <a href="#">Sign Up</a>
                    </div> -->
                </div>

                <!--begin::Head-->
            </div>

            <!--end::Item-->

            <!--begin::Item-->
            <div class="kt-grid__item  kt-grid kt-grid--ver  kt-grid__item--fluid">

                <!--begin::Body-->
                <div class="kt-login-v1__body">

                    <!--begin::Section-->
                    <div class="kt-login-v1__section">
                        <div class="kt-login-v1__info">
                            <h3 class="kt-login-v1__intro">Welcome to </h3>
                            <p>An application which can improve and enhance your internship management</p>
                        </div>
                    </div>

                    <!--begin::Section-->

                    <!--begin::Separator-->
                    <div class="kt-login-v1__seaprator"></div>

                    <!--end::Separator-->

                    <!--begin::Wrapper-->
                    <div class="kt-login-v1__wrapper">
                        <div class="kt-login-v1__container">
                            <h3 class="kt-login-v1__title">
                                Sign To Account
                            </h3>

                            <!--begin::Form-->
                            <form class="kt-login-v1__form kt-form" method="POST" action="{{ route('login') }}" autocomplete="off" id="kt_login_form">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                </div>
                                <div class="kt-login-v1__actions">
                                    <a href="#" class="kt-login-v1__forgot">
                                        <!-- Forgot Password ? -->
                                    </a>
                                    <button type="submit" class="btn btn-pill btn-elevate" id="kt_login_submit">Sign In</button>
                                </div>
                            </form>

                            <!--end::Form-->

                            <!--begin::Divider-->
                            <!-- <div class="kt-login-v1__divider">
                                <div class="kt-divider">
                                    <span></span>
                                    <span>OR</span>
                                    <span></span>
                                </div>
                            </div> -->

                            <!--end::Divider-->

                            <!--begin::Options-->
                            <!-- <div class="kt-login-v1__options">
                                <a href="#" class="btn">
                                    <i class="fab fa-facebook-f"></i>
                                    Fcebook
                                </a>
                                <a href="#" class="btn">
                                    <i class="fab fa-twitter"></i>
                                    Twitter
                                </a>
                                <a href="#" class="btn">
                                    <i class="fab fa-google"></i>
                                    Google
                                </a>
                            </div> -->

                            <!--end::Options-->
                        </div>
                    </div>

                    <!--end::Wrapper-->
                </div>

                <!--begin::Body-->
            </div>

            <!--end::Item-->

            <!--begin::Item-->
            <div class="kt-grid__item">
                <div class="kt-login-v1__footer">
                    <!-- <div class="kt-login-v1__menu">
                        <a href="#">Privacy</a>
                        <a href="#">Legal</a>
                        <a href="#">Contact</a>
                    </div> -->
                    <div class="kt-login-v1__copyright">
                        <a href="#">&copy; 2020 Developed by Abdoug</a>
                    </div>
                </div>
            </div>

            <!--end::Item-->
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "metal": "#c4c5d6",
                    "light": "#ffffff",
                    "accent": "#00c5dc",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995",
                    "focus": "#9816f4"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>