<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        Dashboard
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container mt-n10">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card h-100">
                <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="px-4 mb-4 mb-xl-0 mb-xxl-4">
                                <h1 class="text-primary">Selamat Datang di Halocat!</h1>
                                <p class="text-gray-700 mb-2">Kucing Sehat, Pemilik Ceria !</p>
                                <hr>
                                <p class="text-gray-700 mb-2">
                                    Jika Anda ingin melihat konten yang Anda buat, silakan buka tautan berikut:
                                    <br>
                                    <a href="<?= site_url('user/contents'); ?>"><?= site_url('user/contents'); ?></a>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    Jika Anda ingin mengatur akun Anda, silakan buka tautan berikut:
                                    <br>
                                    <a href="<?= site_url('user/settings'); ?>"><?= site_url('user/settings'); ?></a>
                                </p>
                                <hr>
                                <p class="text-gray-700 mb-2">
                                    Jika ingin melihat artikel tentang kucing, silahkan menuju link berikut:
                                    <br>
                                    <a href="<?= site_url('contents'); ?>"><?= site_url('contents'); ?></a>
                                </p>
                                <p class="text-gray-700 mb-2">
                                    Jika Anda ingin mengetahui tentang Halocat, silakan kunjungi tautan berikut:
                                    <br>
                                    <a href="<?= site_url('about'); ?>"><?= site_url('about'); ?></a>
                                </p>
                                <div id="reward-notification"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>