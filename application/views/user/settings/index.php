<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                       Account Setting
                    </h1>
                    <div class="page-header-subtitle">
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Update Your Account</div>
        <div class="card-body">
            <div class="col-10">
                    <div class="form-group"><label for="firstname">First Name</label><input class="form-control" id="firstname" type="text" placeholder="Ricky"></div>
                    <div class="form-group"><label for="lastname">Last Name</label><input class="form-control" id="lastname" type="text" placeholder="Romansyah"></div>
                    <div class="form-group"><label for="email">Email Address</label><input class="form-control" id="email" type="email" placeholder="name@example.com"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" id="password" type="password" placeholder="**********"></div>
                    <button tipe="submit" onclick="verifikasi_data()" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<script>

function verifikasi_data() {
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var password = $('#password').val();

        if (email != "" && password != "" && firstname != "" && lastname != "") {
            proses_update(firstname, lastname, email, password);
        } else {
            if (firstname == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("First Name Tidak Boleh Kosong")
                });
            }
            if (lastname == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Last Name Tidak Boleh Kosong")
                });
            }
            if (email == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Email Tidak Boleh Kosong")
                });
            }
            if (password == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Password Tidak Boleh Kosong")
                });
            }
        }
    }


</script>