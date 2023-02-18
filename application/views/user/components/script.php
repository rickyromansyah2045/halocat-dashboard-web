<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/scripts.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/sweetalert/sweetalert2.all.min.js'); ?>"></script>

<?= @$custom_script; ?>

<script>
    $(function(){
        setTimeout(() => {
            $('.dataTable').each(function(){
                var dt = $(this);
                dt.parent().parent().css({'padding': '10px'});
                dt.parent().addClass('table-responsive').css({'border': '1px solid #e9ecef', 'border-radius': '5px', 'padding': '0'});
                dt.attr('style', "margin: 0 !important");
            });
        }, 1500);
    });
</script>