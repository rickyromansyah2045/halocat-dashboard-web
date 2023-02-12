<?php $this->load->view('auth/header_auth'); ?>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="firstname" name="firstname"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="lastname" name="lastname"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="passwordRepeat" name="passwordRepeat" placeholder="Repeat Password">
                                        </div> -->
                                    </div>
                                    <a name="btn_register" id="btn_register" onclick="verifikasi_data()" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </a>
                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgot_password'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/login'); ?>">Already have an account? Login!</a>
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
        function verifikasi_data()
        {
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            
            if(email != "" && password != "" && firstname != "" && lastname != ""){
                proses_register(firstname, lastname, email, password)
            }else{

                if (firstname == "") {
                        {
                                Swal.fire({
                                icon: 'error',
                                text: ("First Name Tidak Boleh Kosong")
                            })
                        }
                }
                if (lastname == "") {
                        {
                                Swal.fire({
                                icon: 'error',
                                text: ("Last Name Tidak Boleh Kosong")
                            })
                        }
                }
                if (email == "") {
                        {
                                Swal.fire({
                                icon: 'error',
                                text: ("Email Tidak Boleh Kosong")
                            })
                        }
                }

                if (password == "") {
                        {
                                Swal.fire({
                                icon: 'error',
                                text: ("Password Tidak Boleh Kosong")
                            })
                        }
                }
            }
        }

        function proses_register(firstname, lastname, email, password) {

            $.ajax({

                type    : 'POST',
                url     : '<?= base_url("auth/proses_register")?>',
                dataType: 'JSON',

                beforeSend: function(){
                    $('#btn_register').prop('disabled', true);
                    $('#btn_register').html('Prosess');
                },
                complete: function() {
                    $('#btn_login').prop('disabled', false);
                    $('#btn_register').html('Login');
                },
                data    : {
                    firstname    : firstname,
                    lastname     : lastname,
                    email        : email,
                    password     : password
                },
                success: function (result) {
                    console.log(result);
                    if (result.status == true) {
                        Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Register Success',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        setTimeout(3000);
                        window.location.href='<?= base_url("auth/login")?>'
                    } else {
                        {
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: (result.error)
                        })
                        }
                    }
                    
                }
            });
         }
    </script>
