<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Set Aside Your Money to Help Others Who Are In Need! - The Cloud Donation">
    <meta name="author" content="M Saleh Solahudin, Ricky Romansyah, M Rifki Hikmawan">
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
	<link rel="stylesheet" href="<?= base_url('assets/custom-style.css')?>">
	<title><?= $title; ?> - The Cloud Donation</title>
	<link rel="shortcut icon" href="<?= base_url('assets/favicon.ico'); ?>" type="image/x-icon">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" data-search-pseudo-elements defer crossorigin="anonymous"></script>
</head>
<style>
	/* CSS untuk perangkat mobile home */
	@media (max-width: 767px) {

		/* Sesuaikan style header */
		.jumbotron_header {
			padding-top: 100px !important;
			text-align: center;
		}

		.logo_brand {
			margin-left: 20px;
		}

		.navbar-toggler {
			margin-right: 10px;
		}

		.header_box {
			height: 550px;
		}

		.headline_donasi {
			text-align: center;
			margin-bottom: -20px;
		}

		.btn_header{
			width: 190px;
		}
		.padl45 {
			visibility: hidden;
		}

		.txt_header1 {
			font-size: 22px !important;
		}

		.txt_header2 {
			font-size: 15px !important;
		}

		/* Sesuaikan style list donation */
		.list_donasi {
			margin-top: 40px !important;
		}

		.btn_see_all_donasi {
			font-size: 14px !important;
		}

		/* Sesuaikan style jumbotron ringkasan donasi */
		.jumbotron_ringkasan_donasi {
			padding: 50px 0 !important;
		}

		.txt_judul_ringkas_donasi1 {
			font-size: 24px !important;
		}

		.txt_judul_ringkas_donasi2 {
			font-size: 12px !important;
		}

		/* Sesuaikan style heartwarming stories */
		.headline_judul {
			font-size: 24px !important;
		}

		.sub_headline_judul {
			font-size: 16px !important;
		}

		.box_review  {
			width: 250px;
			height: 300px;
		}

		.txt_judul_review {
			font-size: 15px;
		}

		.box_review_right {
			width: auto;
			/* height: 200px; */
			visibility: hidden;
		}

		.txt_description_review {
			font-size: 15px;
		}
	}
</style>