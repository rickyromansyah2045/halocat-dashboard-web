<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?= site_url(); ?>">
			<img class="logo_brand" src="<?= base_url('assets/img/halocat_logo.png')?>" alt="Logo Halocat">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<a class="nav-link nav_link_menu" href="<?= site_url(); ?>">Beranda</a>
				<a class="nav-link nav_link_menu" href="<?= site_url('contents'); ?>">List Artikel</a>
				<a class="nav-link nav_link_menu" href="<?= site_url('about'); ?>">Tentang Kami</a>
				<?php if ($this->session->has_userdata('id')): ?>
					<?php if ($this->session->userdata('role') == "user"): ?>
						<a class="nav-link" style="" href="<?= site_url('user/chat'); ?>">Chat Dokter</a>
					<?php endif; ?>
				<?php else: ?>
					<a class="nav-link" style="" href="<?= site_url('user/chat'); ?>">Chat Dokter</a>
				<?php endif; ?>
			</ul>
			<ul class="navbar-nav mr0">
				<?php if ($this->session->has_userdata('id')): ?>
					<?php if ($this->session->userdata('role') == "user"): ?>
						<a class="nav-link nav_link_menu" href="<?= site_url('user/dashboard'); ?>">User Area</a>
					<?php else: ?>
						<a class="nav-link nav_link_menu" href="<?= site_url('admin/dashboard'); ?>"><?= ucfirst($this->session->userdata('role')); ?> Area</a>
					<?php endif; ?>
				<?php else: ?>
					<a class="nav-link nav_link_menu" href="<?= site_url('auth/register'); ?>">Register</a>
					<a class="nav-link nav_link_menu" href="<?= site_url('auth/login'); ?>">Login</a>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>