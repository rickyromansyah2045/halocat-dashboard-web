<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading d-sm-none">Account</div>
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Alerts
                    <span class="badge badge-warning-soft text-warning ml-auto">4 New!</span>
                </a>
                <a class="nav-link d-sm-none" href="#!">
                    <div class="nav-link-icon"><i data-feather="mail"></i></div>
                    Messages
                    <span class="badge badge-success-soft text-success ml-auto">2 New!</span>
                </a>
                <div class="sidenav-menu-heading">Main Menu</div>
                <a class="nav-link collapsed" href="<?= base_url('admin/dashboard'); ?>" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="charts.html">
                    <div class="nav-link-icon">
                        <i data-feather="gift"></i>
                    </div>
                    Users
                </a>
                <a class="nav-link" href="charts.html">
                    <div class="nav-link-icon">
                        <i data-feather="gift"></i>
                    </div>
                    Categories
                </a>
                <a class="nav-link" href="<?= site_url('admin/campaigns') ?>">
                    <div class="nav-link-icon">
                        <i data-feather="gift"></i>
                    </div>
                    Campaigns
                </a>
                <a class="nav-link collapsed" href="<?= base_url('admin/dashboard'); ?>" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Transactions
                </a>
                <a class="nav-link collapsed" href="<?= base_url('admin/dashboard'); ?>" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Activity Logs
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