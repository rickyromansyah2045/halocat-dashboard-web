<script>
    var table;

    $(document).ready(function() {
        table = $('#dataTable_theCloud').DataTable({
            order: [],
            stateSave: false,
            processing: true,
            serverSide: true,
            responsive: true,
            pageLength: 20,
            searchDelay: 500,
            language: {
                lengthMenu: "_MENU_"
            },
            ajax: {
                url: "<?= $_ENV['API_URL']; ?>/admin/datatables/categories",
                type: 'GET',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                },
                error: function(xhr, error, code) {
                    $('#dataTable_theCloud_processing').hide();
                    $('#dataTable_theCloud > tbody').html(`<tr><td colspan="3" class="dataTables_empty">${(xhr?.responseJSON?.message || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`)}</td></tr>`);
                }
            },
            columnDefs: [{
                targets: [0, 2],
                searchable: false,
                orderable: false
            }],
            lengthMenu: [
                [10, 20, 50, 100, 200, 500],
                [10, 20, 50, 100, 200, 500]
            ],
            drawCallback: function(_) {
                $('.dataTables_filter input').attr('placeholder','Type and enter...');
            },
            initComplete: function(_, _) {},
            columns: [
                {
                    data: "no",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "category",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "id",
                    render: function(data, type, row) {
                        return `
                            <span class="dropdown">
                                <button class="btn btn-dark btn-sm dropdown-toggle" id="dropdownNoAnimation" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions&nbsp;
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownNoAnimation">
                                    <a class="dropdown-item" href="javascript:openFormUpdateCategory(${data})">
                                        <div class="dropdown-item-icon">
                                            <i class="fa fa-pen fa-fw"></i>
                                        </div>
                                        Edit Data
                                    </a>
                                    <a class="dropdown-item" href="javascript:deleteCategory(${data})">
                                        <div class="dropdown-item-icon">
                                            <i class="fa fa-trash fa-fw"></i>
                                        </div>
                                        Delete
                                    </a>
                                </div>
                            </span>
                        `;
                    }
                }
            ]
        });

        $('.dataTables_filter input').unbind().bind('keyup',function(e) {
            if (e.keyCode == 13 || this.value == '') {
                if (this.value == '') {
                    if (!empty) {
                        table.search(this.value).draw();
                        empty = true;
                    }
                } else {
                    table.search(this.value).draw();
                    empty = false;
                }
            }
        });

        $('#form-create').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "<?= $_ENV['API_URL']; ?>/contents/categories",
                type: 'POST',
                data: JSON.stringify({
                    category: $('#category').val()
                }),
                contentType: "application/json",
                dataType: 'json',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                    $('#btn-create-submit').html('Processing...');
                    $('#btn-create-submit').prop('disabled', true);
                },
                success: function(response) {
                    if (response.success) {
                        table.ajax.reload(null, false);
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 3000
                        });
                        $('#modal-create').modal('hide');
                        setTimeout(() => {
                            $('#form-create').trigger('reset');
                        }, 2500);
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
                complete: function() {
                    $('#btn-create-submit').prop('disabled', false);
                    $('#btn-create-submit').html('Create Category');
                }
            });
        });
    });

    function openFormUpdateCategory(id) {
        $('#modal-edit').modal('show');
        $.ajax({
            url: `<?= $_ENV['API_URL']; ?>/contents/categories/${id}`,
            type: 'GET',
            success: function(response) {
                if (response.success) {
                    $("#edit-id").val(response?.data?.id || "");
                    $("#edit-category").val(response?.data?.category || "");
                } else {
                    $('#modal-edit').modal('hide');
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
    }

    $('#form-edit').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: `<?= $_ENV['API_URL']; ?>/contents/categories/${$('#edit-id').val()}`,
            type: 'PUT',
            data: JSON.stringify({
                category: $('#edit-category').val()
            }),
            contentType: "application/json",
            dataType: 'json',
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                $('#btn-edit-submit').html('Processing...');
                $('#btn-edit-submit').prop('disabled', true);
            },
            success: function(response) {
                if (response.success) {
                    table.ajax.reload(null, false);
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    $('#modal-edit').modal('hide');
                    setTimeout(() => {
                        $('#form-edit').trigger('reset');
                    }, 2500);
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
            complete: function() {
                $('#btn-edit-submit').prop('disabled', false);
                $('#btn-edit-submit').html('Update');
            }
        });
    });

    function deleteCategory(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes',
            preConfirm: () => {
                return $.ajax({
                    url: `<?= $_ENV['API_URL']; ?>/contents/categories/${id}`,
                    type: 'DELETE',
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                    },
                    success: function(response) {
                        if (response.success) {
                            table.ajax.reload(null, false);
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