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
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="../../../fix-theme/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../../../fix-theme/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../../fix-theme/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">

                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="../../demo1/dist/index.html" class="py-9 mb-5">
                            <img alt="Logo" src="../../../fix-theme/assets/media/code.png" class="h-60px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Selamat Datang</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic
                            <br />with great build tools
                        </p>
                        <!--end::Description-->
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(../../../fix-theme/assets/media/depan1.png"></div>
                </div>
            </div>
            <div id="app">
                <div class="d-flex flex-column flex-lg-row-fluid py-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column flex-column-fluid">

                        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                            <!--begin::Form-->

                            <form @submit.prevent="submitForm">



                                <div class="mb-10 text-center">

                                    <h1 class="text-dark mb-3">Buat Akun Baru</h1>
                                    <div class="text-gray-400 fw-bold fs-4">Sudah Punya Akun?
                                        <a href="/login" class="link-primary fw-bolder">Login</a>
                                    </div>

                                </div>
                                <!-- <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                                        <img alt="Logo" src="../../../fix-theme/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button>

                                        <div class="d-flex align-items-center mb-10">
                                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                        </div> -->

                                <div class="row fv-row mb-7">

                                    <div class="col-xl-12">
                                        <label class="form-label fw-bolder text-dark fs-6">Nama Lengkap</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{ old('name') }}" placeholder="Nama Lengkap" v-model="name" autocomplete="off" />
                                        @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>




                                </div>
                                <div class="row fv-row mb-7">

                                    <div class="col-xl-12">
                                        <label class="form-label fw-bolder text-dark fs-6">Username</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{ old('username') }}" placeholder="Username" v-model="username" autocomplete="off" />
                                        @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="fv-row mb-7">
                                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                    <input class="form-control form-control-lg form-control-solid" type="email" value="{{ old('email') }}" placeholder="Email" v-model="email" autocomplete="off" />
                                    @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="mb-10 fv-row" data-kt-password-meter="true">

                                    <div class="mb-1">
                                        <label class="form-label fw-bolder text-dark fs-6">Password</label>

                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" v-model="password" autocomplete="off" />
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                <i class="bi bi-eye-slash fs-2"></i>
                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>

                                            @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>


                                    </div>



                                </div>
                                <div class="fv-row mb-5">
                                    <label class="form-label fw-bolder text-dark fs-6">Konfirmasi Password</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password" value="{{ old('password_confirmation') }}" placeholder="" v-model="password_confirmation" autocomplete="off" />
                                    @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>

                                <!-- <div class="fv-row mb-10">
                                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                                    <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                                            </label>
                                        </div> -->

                                <div class="text-center">
                                    <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">Daftar
                                    </button>
                                </div>

                            </form>

                        </div>

                    </div>
                    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                        <!--begin::Links-->
                        <div class="d-flex flex-center fw-bold fs-6">
                            <a href="/" class="text-muted text-hover-primary px-2" target="_blank">Kembali Kehalaman Depan</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../fix-theme/assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../../fix-theme/assets/js/scripts.bundle.js"></script>
    <script src="../../../fix-theme/assets/js/custom/authentication/sign-up/general.js"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                name: '',
                username: '',
                password: '',
                email: '',
                created_at: '',
                updated_at: '',
                disabled: 0,

                loading: false,
            },
            methods: {
                saveSession() {
                    this.loading = !false

                    setTimeout(() => {
                        this.loading = !true
                    }, 4000)
                },

                submitForm: function() {
                    this.sendData();
                },

                sendData: function() {
                    // console.log('submitted');
                    let vm = this;

                    vm.loading = true;
                    axios.post('/register', {
                            name: this.name,
                            username: this.username,
                            password: this.password,
                            email: this.email,
                            created_at: this.created_at,
                            updated_at: this.updated_at,

                        })
                        .then(function(response) {
                            vm.loading = false;

                            Swal.fire({
                                title: 'Berhasil! Akun anda sudah terdaftar.',
                                text: 'Selamat Bergabung.',
                                icon: 'success',
                                allowOutsideClick: false,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = '/login';
                                }
                            })
                            // console.log(response);
                        })
                        .catch(function(error) {
                            vm.loading = false;
                            console.log(error);
                            if (this.nik == null) {
                                Swal.fire({
                                    title: 'Terjadi Kesalahan!',
                                    text: 'Harap isikan data dengan Benar.',
                                    icon: 'error',
                                    allowOutsideClick: true,
                                })
                            }

                        })
                },
            }
        })
    </script>


</body>

</html>