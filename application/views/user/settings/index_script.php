<script>

    function verifikasi_data() 
    {
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();

        if (email != "" && password != "" && name != "") {
            proses_update(name, email, password);
        } else {
            if (name == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Name Cannot Be Empty")
                });
            }
            if (email == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Email Cannot Be Empty")
                });
            }
            if (password == "") {
                Swal.fire({
                    icon: 'error',
                    text: ("Password Cannot Be Empty")
                });
            }
        }
    }

    function proses_update(name, email, password)
    {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be update profile!",
            icon: 'warning',
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes',
            preConfirm: (login) => {
                return $.ajax({
                    url: `<?= $_ENV['API_URL']; ?>/transactionss/${id}`,
                    type: 'DELETE',
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                    },
                    success: function(response) {
                        if (response.success) {
                            tabel.ajax.reload(null, false);
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 3000
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                text: response.error
                            });
                        }
                    },
                    error: function(xhr, error, code) {
                        Swal.fire({
                            icon: 'error',
                            text: xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
                        });
                    },
                    complete: function() {}
                });
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {}
        })        
    }

</script>