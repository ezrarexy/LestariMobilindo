<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LM Admin - {{ $pej->name }}</title>

    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{ asset('assets/css/admin/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">

    @yield('stylesheet')

    @yield('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin/layout/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                @include('admin/layout/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

                
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Prosum by SSD 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        

        

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Change Password Modal -->
    <div class="modal fade" id="CPModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ChangePasswordModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ganti Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="FcPass">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="oldPass" type="password" value="" class="input form-control" id="password0" placeholder="Password Lama" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide('0')">
                                    <i class="fas fa-eye" id="show_eye0"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye0"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="password" type="password" value="" class="input form-control" id="password1" placeholder="Password Baru" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide('1')">
                                    <i class="fas fa-eye" id="show_eye1"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="password" type="password" value="" class="input form-control" id="password2" placeholder="Ulangi Password Baru" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide('2')">
                                    <i class="fas fa-eye" id="show_eye2"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="chPassGo" class="btn btn-primary" disabled>Ganti</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LogOut</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda ingin mengakhiri sesi?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/admin/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>


    @yield('scripts')
    @yield('scriptInput')



    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#password1').on('keydown', function() {
            if ($('#password1').val() !== "") $('#chPassGo').attr('disabled',false) ;
            else $('#chPassGo').attr('disabled',true) ;
        });

        function password_show_hide(elem) {
            var x = document.getElementById("password"+elem);
            var show_eye = document.getElementById("show_eye"+elem);
            var hide_eye = document.getElementById("hide_eye"+elem);
            hide_eye.classList.remove("d-none");
            
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }

        $('#chPassGo').on('click', function() {
            var oldPass = $('#password0').val();
            var pass1 = $('#password1').val();
            var pass2 = $('#password2').val();

            if (pass1.length < 8) {
                toastr.error('Password harus berisikan minimum 8 karakter!');
                $('#password1').focus();
            } else {
                if (pass1 === pass2) {
                    
                    $.ajax({
                        type: "POST",
                        url: "{{ route('crPass') }}",
                        data: {oldPass:oldPass},
                        dataType: "json",
                        success: function (response) {
                            console.log(response);
                            if (response.status == 'ok') {
                                $.ajax({
                                    type: "PUT",
                                    url: "{{ route('chPass') }}",
                                    data: {password:pass1},
                                    dataType: "json",
                                    success: function (response) {
                                        if (response.status == 'ok') {
                                            toastr.success(response.msg);
                                            $('#CPModal').modal('hide');
                                        } else {
                                            toastr.error(response.msg);
                                        }
                                    }
                                });
                            } else {
                                toastr.error(response.msg);
                                $('#password0').focus();
                            }
                        }
                    });

                } else {
                    toastr.error('Password tidak sesuai!');
                    $('#password2').focus();
                }
            }
        });

        $('#CPModal').on('hidden.bs.modal', function () {
            $('#FcPass')[0].reset();
        });

        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>