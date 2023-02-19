<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">
		<a class="navbar-brand" href="#"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<a class="nav-link nav_link_menu" href="<?= base_url(); ?>">Home</a>
				<a class="nav-link nav_link_menu" href="<?= base_url('donations'); ?>">List of Donations</a>
				<a class="nav-link nav_link_menu" href="<?= base_url('about'); ?>">About Us</a>
			</ul>
			<ul class="navbar-nav mr0">
				<?php if ($this->session->has_userdata('id')): ?>
					<?php if ($this->session->userdata('role') == "user"): ?>
						<a class="nav-link nav_link_menu" href="<?= base_url('user/dashboard'); ?>" style="margin-right: 0; padding-right: 0;">User Area</a>
					<?php else: ?>
						<a class="nav-link nav_link_menu" href="<?= base_url('admin/dashboard'); ?>" style="margin-right: 0; padding-right: 0;">Admin Area</a>
					<?php endif; ?>
				<?php else: ?>
					<a class="nav-link nav_link_menu" href="<?= base_url('auth/register'); ?>">Register</a>
					<a class="nav-link nav_link_menu" href="<?= base_url('auth/login'); ?>" style="margin-right: 0; padding-right: 0;">Login</a>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>