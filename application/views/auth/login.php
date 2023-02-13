<?php $this->load->view('auth/header_auth'); ?>

<div class="container">
    <div class="row d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back, Please Login!</h1>
                                </div>
                                <form class="user" id="form-login">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    </div>
                                    <button name="btn_login" type="submit" id="btn_login" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <form action="<?= base_url('auth/dashboard'); ?>" method="post" id="dashboard">
                                    <input value="" id="dataEmail" name="dataEmail" type="hidden">
                                    <input value="" id="token" name="token" type="hidden">
                                    <input value="" id="name" name="name" type="hidden">
                                    <input value="" id="id" name="id" type="hidden">
                                </form>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgot_password'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/register'); ?>">Don't have an account? Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('auth/footer_auth'); ?>

<script>
    $("#form-login").submit(function(e) {
        e.preventDefault();
        verifikasi_data();
    });

    function verifikasi_data() {
        var email = $('#email').val();
        var password = $('#password').val();

        if (email != "" && password != "") {
            proses_login(email, password)
        } else {
            if (email == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Email Tidak Boleh Kosong")
                })
            }
            if (password == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Password Tidak Boleh Kosong")
                })
            }
        }
    }

    function proses_login(email, password) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url("auth/proses_login")?>',
            dataType: 'JSON',
            beforeSend: function() {
                $('#btn_login').prop('disabled', true);
                $('#btn_login').html('Processing...');
            },
            complete: function() {
                $('#btn_login').prop('disabled', false);
                $('#btn_login').html('Login');
            },
            data: {
                email: email,
                password: password
            },
            success: function (result) {
                if (result.status == true) {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Login Success',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    $('#dataEmail').val(result.email);
                    $('#token').val(result.token);
                    $('#name').val(result.name);
                    $('#id').val(result.id);
                    $("#dashboard").submit();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: (result.error)
                    });
                }
            }
        });
    }
</script>