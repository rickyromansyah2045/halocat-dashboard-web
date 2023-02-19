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
				<div class="row" id="wrapper-list_donation">
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
				<div class="row row_show_all_donasi">
					<button class="btn_see_all_donasi">see all donation list</button>
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
		<div class="container" style="margin-top: 100px;">
			<section class="head_review" style="text-align: center;">
				<p style="font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    line-height: 52px;
    text-align: center;
    color: #222222;
    margin-bottom: 0px;">Heartwarming Stories</p>
				<p style="    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 30px;
    color: #222222;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</section>
			<section class="slider_review">

			</section>
			<section class="box_faq">
				<p style="font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 35px;
    line-height: 52px;
    text-align: center;
    color: #222222;
    margin-bottom: 0px;">Frequently Asked Questions</p>
				<div class="box_list_faq" style="width: 100%;
    height: 80px;
    background: #F5F5F5;
    border: 1px solid #000000;
    display: flex;
    justify-content: start;
    align-items: center;
    padding: 0 40px;margin-bottom: 5px;">
					<p style="font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
    line-height: 38px;
    color: #000000;
    margin: 0px;
    text-transform: uppercase;">faq</p>
				</div>
				<div class="box_list_faq" style="width: 100%;
    height: 80px;
    background: #F5F5F5;
    border: 1px solid #000000;
    display: flex;
    justify-content: start;
    align-items: center;
    padding: 0 40px;margin-bottom: 5px;">
					<p style="font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
    line-height: 38px;
    color: #000000;
    margin: 0px;
    text-transform: uppercase;">faq</p>
				</div>
				<div class="box_list_faq" style="width: 100%;
    height: 80px;
    background: #F5F5F5;
    border: 1px solid #000000;
    display: flex;
    justify-content: start;
    align-items: center;
    padding: 0 40px;margin-bottom: 5px;">
					<p style="font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
    line-height: 38px;
    color: #000000;
    margin: 0px;
    text-transform: uppercase;">faq</p>
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
					url: "<?= $_ENV['API_URL']; ?>/campaigns?limit=8",
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;
							for (let i = 0; i < data.length; i++) {
								let img = '';
								let percentage = 0;

								if (data[i].images.length > 0) {
									img = `<img class="card-img-top card_img_donasi" style="height: 250px; object-fit: cover;" src="<?= $_ENV['API_BASE']; ?>/${data[i].images[0].file_location}" alt="">`;
								} else {
									img = `<img class="card-img-top card_img_donasi" style="height: 250px; object-fit: cover;" src="<?= base_url('assets/img/default_image.png'); ?>" alt="">`;
								}

								percentage = Math.round((data[i].current_amount / data[i].goal_amount) * 100);
								percentage = percentage > 100 ? "100" : percentage;

								$('#wrapper-list_donation').append(`<div class="col-md-4">
									<div class="card col_list_donasi">
										${img}
										<div class="card-body pad0">
											<p class="txt_judul_donasi">${data[i].short_description}</p>
											<p class="txt_sub_judul_donasi">${data[i].description}</p>
											<div class="progress mb10">
												<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: ${percentage}%"></div>
											</div>
											<div class="progres_box_donasi">
												<p class="txt_progres_percent">${percentage}%</p>
												<p class="txt_progres_nominal">Rp ${data[i].goal_amount}</p>
											</div>
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
		</script>
	</body>
</html>