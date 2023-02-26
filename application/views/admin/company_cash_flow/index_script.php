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
                url: "<?= $_ENV['API_URL']; ?>/admin/datatables/company/cashflow",
                type: 'GET',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
                },
                error: function(xhr, error, code) {
                    $('#dataTable_theCloud_processing').hide();
                    $('#dataTable_theCloud > tbody').html(`<tr><td colspan="5" class="dataTables_empty">${(xhr?.responseJSON?.message || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`)}</td></tr>`);
                }
            },
            columnDefs: [{
                targets: [0, 4],
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
                    data: "amount",
                    render: function(data, type, row) {
                        return formatRupiah(data);
                    }
                },
                {
                    data: "note",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "status",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "id",
                    render: function(data, type, row) {
                        return "-";
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
                }else{
                    table.search(this.value).draw();
                    empty = false;
                }
            }
        });
    });

    $('#form-create').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: "<?= $_ENV['API_URL']; ?>/company/cashflow",
            type: 'POST',
            data: JSON.stringify({
                amount: parseInt($('#amount').val()),
                note: $('#note').val(),
                status: $('#status').val()
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
                $('#btn-create-submit').html('Submit');
            }
        });
    });
</script>