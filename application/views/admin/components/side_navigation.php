<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Main Menu</div>
                <a class="nav-link" href="<?= site_url('admin/dashboard'); ?>">
                    <div class="nav-link-icon"><i data-feather="home"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="<?= site_url('admin/users'); ?>">
                    <div class="nav-link-icon">
                        <i data-feather="users"></i>
                    </div>
                    Users
                </a>
                <a class="nav-link" href="<?= site_url('admin/categories'); ?>">
                    <div class="nav-link-icon">
                        <i data-feather="tag"></i>
                    </div>
                    Categories
                </a>
                <a class="nav-link" href="<?= site_url('admin/contents') ?>">
                    <div class="nav-link-icon">
                        <i data-feather="gift"></i>
                    </div>
                    Contents
                </a>
                <a class="nav-link" href="<?= site_url('admin/settings'); ?>">
                    <div class="nav-link-icon"><i data-feather="settings"></i></div>
                    Account Setting
                </a>
                <a class="nav-link" href="<?= site_url('admin/logs/activity'); ?>">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Activity Logs
                </a>
                <div class="sidenav-menu-heading">Front Page Menu</div>
                <a class="nav-link" href="<?= site_url(); ?>">
                    <div class="nav-link-icon"><i data-feather="home"></i></div>
                    Home Page
                </a>
                <a class="nav-link" href="<?= site_url('contents'); ?>">
                    <div class="nav-link-icon"><i data-feather="gift"></i></div>
                    List of Contents
                </a>
                <a class="nav-link" href="<?= site_url('about'); ?>">
                    <div class="nav-link-icon"><i data-feather="info"></i></div>
                    About Us
                </a>
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title"><?= $this->session->userdata('name'); ?></div>
            </div>
        </div>
    </nav>
</div>