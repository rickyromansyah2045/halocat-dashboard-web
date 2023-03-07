<!doctype html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
	<body>
		<header class="header_box">
			<?php $this->load->view('template/menu'); ?>
			<div class="jumbotron jumbotron_header paddingt150">
				<div class="container">
					<div class="row">
						<div class="col-md-6 maxw564 box_txt_jumbotron">
							<p class="txt_header1">Set Aside Your Money to Help Others Who Are In Need!</p>
							<p class="txt_header2">Help others who need your help, make others happy with your help, show your kindness to others, always contribute to spreading goodness in this world! Lets make a change!</p>
							<a href="#list-donation" class="btn_header">
								take me to goodness
							</a>
						</div>
						<div class="col-md-6 padl45">
							<img src="<?= base_url('assets/lazyload.gif'); ?>" data-src="<?= base_url('assets/img/home-hero.jpeg'); ?>" class="img_home_page" alt="The Cloud Donation - Hero Image">
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
					<div class="row_show_all_donasi mt10">
						<div id="btn-see-all" class="dn">
							<a href="<?= site_url('donations'); ?>" class="db wfull">
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
						<div class="d-flex justify-content-center fs55">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-donate fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-total_donation">-</p>
						<p class="txt_judul_ringkas_donasi2">total donation</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center fs55">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-check-double fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-donation_completed">-</p>
						<p class="txt_judul_ringkas_donasi2">donation completed</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center fs55">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-handshake fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi1" id="statistics-total_transaction">-</p>
						<p class="txt_judul_ringkas_donasi2">total transaction</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center fs55">
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
											<p class="txt_judul_review">Good People</p>
											<p class="txt_minute">a minute ago...</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>

												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Good People</p>
												<p class="m_txt_minute">a minute ago...</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">Bismillahirrahmanirrahim, may it be useful. May my parents, myself and those who read this always be healthy, have their sustenance and always be happy in the world and in the world, Aamiin</p>
										</div>
									</div>
									<div class="box_review_right">
										<svg width="50%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Good People</p>
											<p class="txt_minute">2 minutes ago...</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>

												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Good People</p>
												<p class="m_txt_minute">2 minutes ago...</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">Oh my God.. Hopefully, you can get pregnant again soon after the child dies and miscarriages. Aamiin...</p>
										</div>
									</div>
									<div class="box_review_right">
										<svg width="50%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Good People</p>
											<p class="txt_minute">3 minutes ago...</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>

												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Good People</p>
												<p class="m_txt_minute">3 minutes ago...</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">God gives peace, joy and hope to this elderly2. In the name of the Lord Jesus. Amen.</p>
										</div>
									</div>
									<div class="box_review_right">
										<svg width="50%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev icon_review" data-target="#demo" data-slide="prev">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
						 	<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
						</svg>
					</a>
					<a class="carousel-control-next icon_review" data-target="#demo" data-slide="next">
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
							<p class="txt_judul_faq">What currency used on the Cloud donation website?</p>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								The currency used is Indonesia Rupiah, we are using local symbol: <b>Rp (Rupiah)</b>.
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<p class="txt_judul_faq">Why do you have to make a donation at The Cloud Donation?</p>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<ol style="padding-left: 20px; padding-right: 20px; margin-bottom: 0;">
									<li>You can donate without having to create an account first</li>
									<li>You can easily donate here</li>
									<li>You can have the opportunity to get a prize if donating in an exclusive campaign</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<p class="txt_judul_faq">Can I make a donation campaign?</p>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								Yes, you can make your own donation campaign
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<p class="txt_judul_faq">How do I make my own campaign?</p>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
								<ol style="padding-left: 20px; padding-right: 20px; margin-bottom: 0;">
									<li>You first register at The Cloud Donation</li>
									<li>You Login to the User Area</li>
									<li>Select the Campaigs menu</li>
									<li>Click the Create New Campaign button</li>
									<li>Fill in the New Campaign Form</li>
									<li>Submit and wait for confirmation from our team</li>
								</ol>
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

				$('#wrapper-list_donation').html(`<div class="col-12"><h1 class="text-center"><i class="fa fa-spinner fa-pulse"></i></h1></div>`);

				$.ajax({
					url: "<?= $_ENV['API_URL']; ?>/campaigns?status=active&limit=9&order_by=id&order_type=DESC",
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;

							if (data.length == 0) {
								$('#wrapper-list_donation').html('<div class="col-12"><h2 class="text-center">THERE IS CURRENTLY NO ONGOING DONATION CAMPAIGN</h2></div>');
								return;
							}

							if (data.length >= 9) {
								$('#btn-see-all').show();
							}

							$('#wrapper-list_donation').html('');

							for (let i = 0; i < data.length; i++) {
								let img = '';
								let tooltip = '';
								let exclusive = '';
								let percentage = 0;
								let description = '';

								if (data[i].images.length > 0) {
									img = `<img data-src="<?= $_ENV['API_BASE']; ?>/${data[i].images[0].file_location}" class="card-img-top card_img_donasi" alt="Image ${data[i].short_description}">`;
								} else {
									img = `<img data-src="<?= base_url('assets/img/default_image.png'); ?>" class="card-img-top card_img_donasi" alt="Image ${data[i].short_description}">`;
								}

								percentage = Math.round((data[i].current_amount / data[i].goal_amount) * 100);
								percentage = percentage > 100 ? "100" : percentage;

								description = data[i].description.length > 150 ? `${data[i].description.substring(0, 150)}...` : data[i].description;

								if (data[i].short_description.length > 30) {
									tooltip = ` data-toggle="tooltip" data-placement="top" title="${data[i].short_description}"`;
								}

								if (data[i].is_exclusive) {
									exclusive = `<hr><div class="mt-0 mb-2 box_ex_campaign">
										<span class="badge badge-dark db">EXCLUSIVE CAMPAIGN</span>
									</div>`;
								}

								$('#wrapper-list_donation').append(`<div class="col-md-6 col-lg-4">
									<div class="card col_list_donasi hfull">
										${img}
										<div class="card-body pad0">
											<p class="txt_judul_donasi" style="cursor: help;"${tooltip}>${data[i].short_description}</p>
											<p class="txt_sub_judul_donasi">${description}</p>
											${exclusive}
										</div>
										<div class="card-footer box_footer">
											<div class="progress mb10">
												<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: ${percentage}%"></div>
											</div>
											<div class="progres_box_donasi">
												<p class="txt_progres_percent">${percentage}%</p>
												<p class="txt_progres_nominal">${formatRupiah(data[i].goal_amount)}</p>
											</div>
											<hr class="mtm5">
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
						let errorMsg = xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
						$('#wrapper-list_donation').html(`<div class="col-12"><h3 class="text-center">${errorMsg}</h3></div>`);
						console.log(xhr, error, code);
					}
				});
			});
		</script>
	</body>
</html>