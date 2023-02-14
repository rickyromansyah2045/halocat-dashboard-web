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
                beforeSend: function() {}
            },
            columnDefs: [{
                targets: [0, 5],
                searchable: false,
                orderable: false
            }],
            lengthMenu: [
                [20, 50, 100, 200, 1000],
                [20, 50, 100, 200, 1000]
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