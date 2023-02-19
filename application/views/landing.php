<!doctype html>
<html lang="en">
	<?php $this->load->view('template/landing_head'); ?>
	<body>
		<header class="header_box">
			<?php $this->load->view('template/landing_menu'); ?>
			<div class="jumbotron jumbotron_header" style="padding-top: 150px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 maxw564" style="display: flex; justify-content: center; flex-direction: column;">
							<p class="txt_header1">Set Aside Your Money to Help Others Who Are In Need!</p>
							<p class="txt_header2">Help others who need your help, make others happy with your help, show your kindness to others, always contribute to spreading goodness in this world! Lets make a change!</p>
							<button class="btn_header">take me to goodness</button>
						</div>
						<div class="col-md-6 padl45">
							<img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" style="" class="img_landing_page">
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="headline_donasi">
				<p class="txt_list_donasi">List of Donations</p>
				<span class="txt_sub_list_donasi">Find a donation campaign for you today, spread kindness to them</span>
			</div>
			<div class="list_donasi">
				<div class="row display-flex" id="wrapper-list_donation">
					<!-- <div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card col_list_donasi">
							<img class="card-img-top card_img_donasi" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							<div class="card-body pad0">
								<p class="txt_judul_donasi">Wireboard</p>
								<p class="txt_sub_judul_donasi">The new era of mechanical keyboard</p>
								<div class="progress mb10">
								 	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
								</div>
								<div class="progres_box_donasi">
									<p class="txt_progres_percent">75%</p>
									<p class="txt_progres_nominal">Rp 40.000.000</p>
								</div>
								<button class="btn_submit_donasi">donate</button>
							</div>
						</div>
					</div> -->
				</div>
				<div class="row row_show_all_donasi" style="margin-top: 10px;">
					<a href="<?= site_url('donations'); ?>" style="display: block !important; width: 100%;">
						<button class="btn_see_all_donasi">
							see all donation list
						</button>
					</a>
				</div>
			</div>
		</div>
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
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?= base_url('assets/img/test1.jpg')?>" alt="Los Angeles" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>We had such a great time in LA!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('assets/img/test2.jpg')?>" alt="Chicago" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>We had such a great time in LA!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('assets/img/test1.jpg')?>" alt="New York" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>We had such a great time in LA!</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</section>
			<section class="box_faq">
				<center>
					<p class="headline_judul">Frequently Asked Questions</p>
					<p class="sub_headline_judul mb50">Find useful information for you, and find out more about us</p>
				</center>
				<!-- <div class="box_list_faq">
					<p class="txt_judul_faq">faq</p>
				</div>
				<div class="box_list_faq">
					<p class="txt_judul_faq">faq</p>
				</div>
				<div class="box_list_faq">
					<p class="txt_judul_faq">faq</p>
				</div>
				<div class="box_list_faq">
					<p class="txt_judul_faq">faq</p>
				</div>
				<div class="box_list_faq">
					<p class="txt_judul_faq">faq</p>
				</div> -->

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
		<?php $this->load->view('template/landing_footer'); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
					url: "<?= $_ENV['API_URL']; ?>/campaigns?limit=8&order_by=id&order_type=DESC",
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;
							let img = '';
							let percentage = 0;
							let description = '';

							for (let i = 0; i < data.length; i++) {
								if (data[i].images.length > 0) {
									img = `<img class="card-img-top card_img_donasi" style="height: 250px; object-fit: cover;" src="<?= $_ENV['API_BASE']; ?>/${data[i].images[0].file_location}" alt="">`;
								} else {
									img = `<img class="card-img-top card_img_donasi" style="height: 250px; object-fit: cover;" src="<?= base_url('assets/img/default_image.png'); ?>" alt="">`;
								}

								percentage = Math.round((data[i].current_amount / data[i].goal_amount) * 100);
								percentage = percentage > 100 ? "100" : percentage;

								description = data[i].description.length > 150 ? `${data[i].description.substring(0, 150)}...` : data[i].description;

								$('#wrapper-list_donation').append(`<div class="col-md-6 col-lg-4">
									<div class="card col_list_donasi" style="height: 100%;">
										${img}
										<div class="card-body pad0">
											<p class="txt_judul_donasi">${data[i].short_description}</p>
											<p class="txt_sub_judul_donasi">${description}</p>
										</div>
										<div class="card-footer" style="background-color: transparent; margin: 0; padding: 0; padding-top: 10px;">
											<div class="progress mb10">
												<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: ${percentage}%"></div>
											</div>
											<div class="progres_box_donasi">
												<p class="txt_progres_percent">${percentage}%</p>
												<p class="txt_progres_nominal">Rp ${data[i].goal_amount}</p>
											</div>
											<hr style="margin-top: -5px;">
											<button class="btn_submit_donasi">donate</button>
										</div>
									</div>
								</div>`);
							}
						}
					},
					error: function(xhr, error, code) {
						console.log(xhr, error, code);
					}
				});
			});

			$(window).scroll(function(){
				if ($(window).scrollTop() > 10) {
					$('nav').addClass('navbar-shadow');
				} else {
					$('nav').removeClass('navbar-shadow');
				}
			});
		</script>
	</body>
</html>