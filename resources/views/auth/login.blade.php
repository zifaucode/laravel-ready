<!DOCTYPE html>

<html>
<!--begin::Head-->

<head>
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="zifaucode | dev" />
    <link rel="shortcut icon" href="../../../fix-theme/assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../../../fix-theme/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../../fix-theme/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-body">

    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="../../demo1/dist/index.html" class="py-9 mb-5">
                            <img alt="Logo" src="../../../fix-theme/assets/media/code.png" class="h-100px" />
                        </a>
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Selamat Datang</h1>
                        <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic
                            <br />with great build tools
                        </p>
                        <!--end::Description-->
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(../../../fix-theme/assets/media/depan1.png"></div>

                </div>

            </div>

            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->

                        <form class="form w-100" novalidate="novalidate" action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Login</h1>




                                <div class="text-gray-400 fw-bold fs-4">Belum punya akun?
                                    <a href="/register" class="link-primary fw-bolder">Daftar</a>
                                </div>
                                <!--end::Link-->
                            </div>

                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if (Session::has('error'))
                            <div class="alert alert-danger mb-0" role="alert">
                                <span>{{ Session::get('error') }}</span>

                            </div>
                            @endif


                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Username</label>

                                <input name="username" value="{{ old('username') }}" placeholder="Username" class="form-control form-control-lg form-control-solid" type="text" autocomplete="off" />
                                @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>

                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>


                                </div>

                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" placeholder="Password" autocomplete="off" />
                                @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-flex flex-stack mb-2">


                                <a href="#" class="link-primary fs-6 fw-bolder">Lupa Password ?</a>

                            </div>
                            <br>

                            <div class="text-center">

                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    login
                                </button>
                                <!--                          
                                <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                  
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" src="../../../fix-theme/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
                               
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" src="../../../fix-theme/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a> -->

                            </div>

                        </form>

                    </div>

                </div>

                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">Kembali Kehalaman Depan</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <script src="../../../fix-theme/assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../../fix-theme/assets/js/scripts.bundle.js"></script>
    <script src="../../../fix-theme/assets/js/custom/authentication/sign-in/general.js"></script>

    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(300, function() {
                $(this).remove();
            });

        }, 3000);
    </script>

</body>

</html>