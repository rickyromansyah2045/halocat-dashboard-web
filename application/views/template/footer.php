<footer class="footer_home">
    <div class="container" style="padding: 100px 15px 100px;">
        <div class="row">
            <div class="col-xl-6">
                <div class="box_footer_description">
                    <a class="navbar-brand" href="<?= site_url(); ?>">
                        <img class="logo_brand_footer" src="<?= base_url('assets/img/halocat_logo.png')?>" alt="Logo Halocat">
                    </a>
                    <p class="txt_footer_brand">halocat.</p>
                </div>
                <p class="footer_description">
                    Kucing Sehat, Pemilik Ceria.
                </p>
                <p style="color: white; margin-right: 70px" class="footer_description_2">
                    Informasi Kesehatan Kucing untuk memudahkan Anda memelihara kucing kesayangan Anda!
                </p>
            </div>
            <div class="col-xl-2">
                <p class="head_menu_footer">EXPLORE</p>
                <div class="box_sub_menu_footer">
                    <?php if ($this->session->has_userdata('id')): ?>
                        <?php if ($this->session->userdata('role') == "user"): ?>
                            <a class="link_menu_footer" href="<?= site_url(); ?>">Beranda</a>
                            <a class="link_menu_footer" href="<?= site_url('contents'); ?>">Artikel</a>
                            <a class="link_menu_footer" href="<?= site_url('about'); ?>">Tentang Kami</a>
                            <a class="link_menu_footer" href="<?= site_url('user/dashboard'); ?>">User Area</a>
                            <a class="link_menu_footer" href="<?= site_url('auth/logout'); ?>">Logout</a>
                        <?php else: ?>
                            <a class="link_menu_footer" href="<?= site_url(); ?>">Beranda</a>
                            <a class="link_menu_footer" href="<?= site_url('contents'); ?>">Artikel</a>
                            <a class="link_menu_footer" href="<?= site_url('about'); ?>">Tentang Kami</a>
                            <a class="link_menu_footer" href="<?= site_url('admin/dashboard'); ?>">Admin Area</a>
                            <a class="link_menu_footer" href="<?= site_url('auth/logout'); ?>">Logout</a>
                        <?php endif; ?>
                    <?php else: ?>
                        <a class="link_menu_footer" href="https://bit.ly/daftarDokterHalocat">Daftar Jadi Dokter Hewan</a>
                        <a class="link_menu_footer" href="<?= site_url(); ?>">Beranda</a>
                        <a class="link_menu_footer" href="<?= site_url('contents'); ?>">Artikel</a>
                        <a class="link_menu_footer" href="<?= site_url('about'); ?>">Tentang Kami</a>
                        <a class="link_menu_footer" href="<?= site_url('auth/register'); ?>">Register</a>
                        <a class="link_menu_footer" href="<?= site_url('auth/login'); ?>">Login</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xl-4">
                <p class="head_menu_footer">OFFICE & SOCIAL MEDIA</p>
                <div class="dflex">
                    <span class="address_footer">
                    Jl. Gapura Menteng No.22B, Jurang Mangu Barat, Kec. Pd. Aren, Kota Tangerang Selatan, Banten, Indonesia 15412.
                    </span>
                </div>
                <div class="wrapper-link_socmed_footer">
                    <a class="link_socmed_footer" data-toggle="tooltip" data-placement="top" title="Ricky`s Instagram" href="https://www.instagram.com/romansyah.official/" targe="_blank">
                        <i class="fab fa-instagram fa-fw" style="color: white;"></i>
                    </a>
                    <a class="link_socmed_footer" data-toggle="tooltip" data-placement="top" title="Ricky`s Linkedin" href="https://www.linkedin.com/in/ricky-romansyah-47831518b" targe="_blank">
                        <i class="fab fa-linkedin fa-fw" style="color: white;"></i>
                    </a>
                    <a class="link_socmed_footer" data-toggle="tooltip" data-placement="top" title="Ricky`s Facebook" href="https://www.facebook.com/rickyromansyah2045/" targe="_blank">
                        <i class="fab fa-facebook fa-fw" style="color: white;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #E2632B !important; padding: 5px; text-align: center; color: white;">
        &copy; <?= date('Y') ?> &middot; Halocat &middot; created by Ricky Romansyah &middot; All Right Reserved
    </div>
</footer>