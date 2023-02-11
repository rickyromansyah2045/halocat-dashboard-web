<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<a class="nav-link nav_link_menu" href="<?= base_url(); ?>">Home</a>
				<a class="nav-link nav_link_menu" href="<?= base_url('donation'); ?>">Donation List</a>
				<a class="nav-link nav_link_menu" href="<?= base_url('about'); ?>">About Us</a>
			</ul>
			<ul class="navbar-nav mr0">
			<a class="nav-link nav_link_menu" href="<?= base_url('auth/register'); ?>">Register</a>
				<a class="nav-link nav_link_menu" href="<?= base_url('auth/login'); ?>">Login</a>
			</ul>
		</div>
	</nav>
</div>