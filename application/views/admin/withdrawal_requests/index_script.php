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
            url: "<?= $_ENV['API_URL']; ?>/admin/datatables/withdrawal",
            type: 'GET',
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
            },
            error: function(xhr, error, code) {
                $('#dataTable_theCloud_processing').hide();
                $('#dataTable_theCloud > tbody').html(`<tr><td colspan="6" class="dataTables_empty">${(xhr?.responseJSON?.message || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`)}</td></tr>`);
            }
        },
        columnDefs: [{
            targets: [0, 5],
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
                data: "user_name",
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
                    return `
                        <span class="dropdown">
                            <button class="btn btn-dark btn-sm dropdown-toggle" id="dropdownNoAnimation" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions&nbsp;
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownNoAnimation">
                                <a class="dropdown-item" href="javascript:openModalViewMore(${data})">
                                    <div class="dropdown-item-icon">
                                        <i class="fa fa-eye fa-fw"></i>
                                    </div>
                                    View More
                                </a>
                                <a class="dropdown-item" href="javascript:deleteTransaction(${data})">
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
            }else{
                table.search(this.value).draw();
                empty = false;
            }
        }
    });
});
</script>