<script>
    $(document).ready(function() {
        var tabel = $('#dataTable_test').DataTable({
            order: [],
            stateSave: false,
            processing: true,
            serverSide: true,
            responsive: true,
            pageLength: 50,
            searchDelay: 500,
            language: {
                lengthMenu: "_MENU_"
            },
            ajax: {
                url: "<?= $_ENV['API_URL']; ?>/admin/datatables/users",
                type: 'GET',
                beforeSend: function() {},
                error: function(xhr, error, code) {
                    $('#dataTable_test_processing').hide();
                    $('#dataTable_test > tbody').html(`<tr><td colspan="6" class="dataTables_empty">${(xhr?.responseJSON?.message || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`)}</td></tr>`);
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
            drawCallback: function(_) {},
            initComplete: function(_, _) {},
            columns: [
                {
                    data: "no",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "name",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "email",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "role",
                    render: function(data, type, row) {
                        return data;
                    }
                },
                {
                    data: "e_money",
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
                    tabel.search(this.value).draw();
                    empty = true;
                    }
                }else{
                    tabel.search(this.value).draw();
                    empty = false;
                }
            }
        });
    });
</script>