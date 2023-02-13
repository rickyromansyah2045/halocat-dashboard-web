<footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>assets/demo/chart-area-demo.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>assets/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/'); ?>assets/demo/date-range-picker-demo.js"></script>

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
                        url: "<?= $_ENV['API_URL']; ?>/admin/datatables/campaigns",
                        type: 'GET',
                        beforeSend: function() {}
                    },
                    columnDefs: [{
                        targets: [0, 6],
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
                            data: "title",
                            render: function(data, type, row) {
                                return data;
                            }
                        },
                        {
                            data: "goal_amount",
                            render: function(data, type, row) {
                                return data;
                            }
                        },
                        {
                            data: "current_amount",
                            render: function(data, type, row) {
                                return data;
                            }
                        },
                        {
                            data: "is_exclusive",
                            render: function(data, type, row) {
                                return data;
                            }
                        },
                        {
                            data: "donor_count",
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
    </body>
</html>