<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        Dashboard
                    </h1>
                    <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="row">
        <div class="col-xxl-4 col-xl-12 mb-4">
            <div class="card h-100">
                <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                <h1 class="text-primary">Welcome to The Cloud Donations!</h1>
                                <p class="text-gray-700 mb-2">Set Aside Your Money to Help Others Who Are In Need!</p>
                                <hr>
                                <p class="text-gray-700 mb-2">
                                    If you want to see your campaign data, please go to the following link:
                                    <br>
                                    <a href="<?= site_url('user/campaigns'); ?>"><?= site_url('user/campaigns'); ?></a>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    If you want to see your transaction data or history, please go to the following link:
                                    <br>
                                    <a href="<?= site_url('user/transactions'); ?>"><?= site_url('user/transactions'); ?></a>
                                </p>
                                <p class="text-gray-700 mb-0">
                                    If you want to setting your account, please go to the following link:
                                    <br>
                                    <a href="<?= site_url('user/settings'); ?>"><?= site_url('user/settings'); ?></a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>