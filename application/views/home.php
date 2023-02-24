<!doctype html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
	<body>
		<header class="header_box">
			<?php $this->load->view('template/menu'); ?>
			<div class="jumbotron jumbotron_header" style="padding-top: 150px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 maxw564" style="display: flex; justify-content: center; flex-direction: column;">
							<p class="txt_header1">Set Aside Your Money to Help Others Who Are In Need!</p>
							<p class="txt_header2">Help others who need your help, make others happy with your help, show your kindness to others, always contribute to spreading goodness in this world! Lets make a change!</p>
							<a href="#list-donation" class="btn_header">
								take me to goodness
							</a>
						</div>
						<div class="col-md-6 padl45">
							<img src="<?= base_url('assets/lazyload.gif'); ?>" data-src="<?= base_url('assets/img/home-hero.jpeg'); ?>" class="img_home_page">
						</div>
					</div>
				</div>
			</div>
		</header>
		<section id="list-donation">
			<div class="container">
				<div class="headline_donasi">
					<p class="txt_list_donasi">List of Donations</p>
					<span class="txt_sub_list_donasi">Find a donation campaign for you today, spread kindness to them</span>
				</div>
				<div class="list_donasi">
					<div class="row display-flex" id="wrapper-list_donation"></div>
					<div class="row_show_all_donasi" style="margin-top: 10px;">
						<div id="btn-see-all" style="display: none;">
							<a href="<?= site_url('donations'); ?>" style="display: block !important; width: 100%;">
								<button class="btn_see_all_donasi">
									see all donation list
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="jumbotron jumbotron_ringkasan_donasi">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="d-flex justify-content-center" style="font-size: 55px;">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-donate fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-total_donation">-</p>
						<p class="txt_judul_ringkas_donasi2">total donation</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center" style="font-size: 55px;">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-check-double fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-donation_completed">-</p>
						<p class="txt_judul_ringkas_donasi2">donation completed</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center" style="font-size: 55px;">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-handshake fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-total_transaction">-</p>
						<p class="txt_judul_ringkas_donasi2">total transaction</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center" style="font-size: 55px;">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-users fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-user_registered">-</p>
						<p class="txt_judul_ringkas_donasi2">user registered</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt100">
			<section class="head_review tac">
				<p class="headline_judul">Heartwarming Stories</p>
				<p class="sub_headline_judul mb50">Here are some heartwarming stories of those who were helped</p>
			</section>
			<section class="slider_review mb50">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Berita tentang Sambo</p>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius
rutrum turpis, nec convallis elit ornare quis. Curabitur et fringilla lacus.
Etiam id metus non sapien egestas viverra. Nam interdum libero ligula,
ut lacinia sapien  porttitor ac. Praesent vel orci lectus. Etiam et nulla odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius
rutrum turpis, nec convallis elit ornare quis. Curabitur et fringilla lacus.
Etiam id metus non sapien egestas viverra. Nam interdum libero ligula,
ut lacinia sapien  porttitor ac. Praesent vel orci lectus. Etiam et nulla odio.</p>
										</div>
									</div>
									<div class="box_review_right">

									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Berita tentang Real Madrid</p>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius
rutrum turpis, nec convallis elit ornare quis. Curabitur et fringilla lacus.
Etiam id metus non sapien egestas viverra. Nam interdum libero ligula,
ut lacinia sapien  porttitor ac. Praesent vel orci lectus. Etiam et nulla odio. Etiam id metus non sapien egestas viverra. Nam interdum libero ligula,
ut lacinia sapien  porttitor ac. Praesent vel orci lectus. Etiam et nulla odio.</p>
										</div>
									</div>
									<div class="box_review_right">

									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Berita tentang Liverpool</p>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius
rutrum turpis, nec convallis elit ornare quis. Curabitur et fringilla lacus.
Etiam id metus non sapien egestas viverra. Nam interdum libero ligula,
ut lacinia sapien  porttitor ac. Praesent vel orci lectus. Etiam et nulla odio.</p>
										</div>
									</div>
									<div class="box_review_right">

									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Berita tentang Hotelmurah</p>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus varius
rutrum turpis, nec convallis elit ornare quis. Curabitur et fringilla lacus.
Etiam id metus non sapien egestas viverra. Nam interdum libero ligula,
ut lacinia sapien  porttitor ac. Praesent vel orci lectus. Etiam et nulla odio.</p>
										</div>
									</div>
									<div class="box_review_right">

									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" data-target="#demo" data-slide="prev" style="color: black;width: auto;">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
						 	<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
						</svg>
					</a>
					<a class="carousel-control-next" data-target="#demo" data-slide="next" style="color: black;width: auto;">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						  	<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
						</svg>
					</a>
				</div>
			</section>
			<section class="box_faq">
				<center>
					<p class="headline_judul">Frequently Asked Questions</p>
					<p class="sub_headline_judul mb50">Find useful information for you, and find out more about us</p>
				</center>

				<div id="accordion">
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<p class="txt_judul_faq">faq</p>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								faq pertama
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<p class="txt_judul_faq">faq</p>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								faq kedua
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<p class="txt_judul_faq">faq</p>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								faq ketiga
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<p class="txt_judul_faq">faq</p>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
								faq keempat
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<p class="txt_judul_faq">faq</p>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body">
								faq kelima
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php $this->load->view('template/footer'); ?>
		<?php $this->load->view('template/script'); ?>
		<script>
			$(function(){
				$.ajax({
					url: "<?= $_ENV['API_URL']; ?>/web/home/statistics",
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;
							$('#statistics-total_donation').html(data.total_donation);
							$('#statistics-donation_completed').html(data.donation_completed);
							$('#statistics-total_transaction').html(data.total_transaction);
							$('#statistics-user_registered').html(data.user_registered);
						}
					},
					error: function(xhr, error, code) {
						console.log(xhr, error, code);
					}
				});

				$.ajax({
					url: "<?= $_ENV['API_URL']; ?>/campaigns?status=active&limit=9&order_by=id&order_type=DESC",
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;
							let img = '';
							let tooltip = '';
							let percentage = 0;
							let description = '';

							if (data.length >= 9) {
								$('#btn-see-all').show();
							}

							for (let i = 0; i < data.length; i++) {
								let exclusive = '';

								if (data[i].images.length > 0) {
									img = `<img data-src="<?= $_ENV['API_BASE']; ?>/${data[i].images[0].file_location}" class="card-img-top card_img_donasi" style="height: 250px; object-fit: cover;" alt="">`;
								} else {
									img = `<img data-src="<?= base_url('assets/img/default_image.png'); ?>" class="card-img-top card_img_donasi" style="height: 250px; object-fit: cover;" alt="">`;
								}

								percentage = Math.round((data[i].current_amount / data[i].goal_amount) * 100);
								percentage = percentage > 100 ? "100" : percentage;

								description = data[i].description.length > 150 ? `${data[i].description.substring(0, 150)}...` : data[i].description;

								if (data[i].short_description.length > 30) {
									tooltip = ` data-toggle="tooltip" data-placement="top" title="${data[i].short_description}"`;
								}

								if (data[i].is_exclusive) {
									exclusive = `<hr><div style="font-size: 17px; margin-top: -7.5px !important;" class="mt-0 mb-2">
										<span class="badge badge-dark" style="display: block;">EXCLUSIVE CAMPAIGN</span>
									</div>`;
								}

								$('#wrapper-list_donation').append(`<div class="col-md-6 col-lg-4">
									<div class="card col_list_donasi" style="height: 100%;">
										${img}
										<div class="card-body pad0">
											<p class="txt_judul_donasi" style="cursor: help;"${tooltip}>${data[i].short_description}</p>
											<p class="txt_sub_judul_donasi">${description}</p>
											${exclusive}
										</div>
										<div class="card-footer" style="background-color: transparent; margin: 0; padding: 0; padding-top: 10px;">
											<div class="progress mb10">
												<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: ${percentage}%"></div>
											</div>
											<div class="progres_box_donasi">
												<p class="txt_progres_percent">${percentage}%</p>
												<p class="txt_progres_nominal">${formatRupiah(data[i].goal_amount)}</p>
											</div>
											<hr style="margin-top: -5px;">
											<a href="<?= site_url('donate'); ?>/${data[i].id}" target="_blank">
												<button class="btn_submit_donasi">
													donate
												</button>
											</a>
										</div>
									</div>
								</div>`);
							}

							lazyLoading();
							renderTooltip();
						}
					},
					error: function(xhr, error, code) {
						console.log(xhr, error, code);
					}
				});
			});
		</script>
	</body>
</html>