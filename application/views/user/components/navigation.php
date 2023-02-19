<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-dark bg-dark" id="sidenavAccordion">
    <a class="navbar-brand" href="<?= base_url('admin/dashboard'); ?>">The Cloud Donation</a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle"><i data-feather="menu"></i></button>
    <ul class="navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown no-caret mr-3 d-md-none">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100">
                    <div class="input-group input-group-joined input-group-solid">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                        <div class="input-group-append">
                            <div class="input-group-text"><i data-feather="search"></i></div>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url() ?>/assets/test-img.png" /></a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="<?= base_url() ?>/assets/test-img.png" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name"><?= $this->session->userdata('name'); ?></div>
                        <div class="dropdown-user-details-email"><?= $this->session->userdata('email'); ?></div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('user/settings'); ?>">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Account Setting
                </a>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                    <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>