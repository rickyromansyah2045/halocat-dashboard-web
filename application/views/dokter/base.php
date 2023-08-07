<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('dokter/components/head'); ?>
    <body class="nav-fixed">
        <?php $this->load->view('dokter/components/navigation'); ?>
        <div id="layoutSidenav">
            <?php $this->load->view('dokter/components/side_navigation'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <?= @$content; ?>
                </main>
                <?php $this->load->view('dokter/components/footer'); ?>
            </div>
        </div>
        <?php $this->load->view('dokter/components/script'); ?>
    </body>
</html>