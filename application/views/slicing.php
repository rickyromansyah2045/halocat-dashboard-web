<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Moul&display=swap">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url('assets/landing.css')?>">
		<title><?= $title; ?></title>
	</head>
  <body>
	<header class="header_box">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<a class="nav-link nav_link_menu" href="<?= base_url(); ?>">Home</a>
						<a class="nav-link nav_link_menu" href="<?= base_url('alldonation'); ?>">Donation List</a>
						<a class="nav-link nav_link_menu" href="<?= base_url('about'); ?>">About Us</a>
					</ul>
					<ul class="navbar-nav mr0">
					<a class="nav-link nav_link_menu" href="<?= site_url('auth/register'); ?>">Register</a>
						<a class="nav-link nav_link_menu" href="<?= site_url('auth/login'); ?>">Login</a>
					</ul>
				</div>
			</nav>
		</div>
		<div class="jumbotron jumbotron_header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mw564">
						<p class="txt_header1">Spend Your Money to Help Others Who Need Help</p>
						<p class="txt_header2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Phasellus varius rutrum turpis, nec convallis elit ornare quis.
						Curabitur et fringilla lacus.
						Etiam id metus non sapien egestas viverra.
						Nam interdum libero ligula,
						ut lacinia sapien  porttitor ac.
						Praesent vel orci lectus. Etiam et nulla odio.</p>
						<button class="btn_header">take me to goodness</button>
					</div>
					<div class="col-md-6 pl45">
						<img src="<?= base_url() ?>/assets/test-img.png" style="" class="img_landing_page">
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="headline_donasi">
			<p class="txt_list_donasi">List Donasi</p>
			<span class="txt_sub_list_donasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
		</div>
		<div class="list_donasi">
			<div class="row row_list_donasi">
				<div class="col-md-4">
					<div class="card col_list_donasi">
						<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card col_list_donasi">
						<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card col_list_donasi">
						<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card col_list_donasi">
						<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card col_list_donasi">
						<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>