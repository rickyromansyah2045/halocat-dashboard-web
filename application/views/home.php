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
							<p class="txt_header1">Kucing Sehat, Pemilik Ceria!</p>
							<p class="txt_header2">Informasi Kesehatan Kucing untuk memudahkan Anda memelihara kucing kesayangan Anda!</p>
							<a href="#list-donation" class="btn_header">
								Artikel Kesehatan
							</a>
						</div>
						<div class="col-md-6 padl45">
							<img src="<?= base_url('assets/lazyload.gif'); ?>" data-src="<?= base_url('assets/img/home_image.jpg'); ?>" class="img_home_page" alt="Halocat - Hero Image">
						</div>
					</div>
				</div>
			</div>
		</header>
		<section id="list-donation">
			<div class="container">
				<div class="headline_donasi">
					<center>
						<p class="headline_judul">List Artikel</p>
						<span class="sub_headline_judul">Temukan Konten tentang kucing untuk Anda hari ini</span>
					</center>
				</div>
				<div class="list_donasi">
					<div class="row display-flex" id="wrapper-list_donation"></div>
					<div class="row_show_all_donasi mt10">
						<div id="btn-see-all" class="dn">
							<a href="<?= site_url('contents'); ?>" class="db wfull">
								<button class="btn_see_all_donasi">
									see all content list
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
						<p class="txt_judul_ringkas_donasi2 mt-3">Harga Langganan Terjangkau</p>
						<p class="txt_judul_ringkas_donasi3" id="statistics-total_donation-">Mulai dari 20 ribu aja kamu bisa langsung konsultasi online dengan dokter hewan</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center fs55">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-check-double fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi2 mt-3">Dokter Hewan Berpengalaman</p>
						<p class="txt_judul_ringkas_donasi3" id="statistics-donation_completed-">Yang pastinya siap membantumu dan hewan kesayanganmu</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center fs55">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-handshake fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi2 mt-3">Memberikan yang Terbaik</p>
						<p class="txt_judul_ringkas_donasi3" id="statistics-total_transaction-">Hanya pelayanan terbaik untukmu dan hewan kesayanganmu</p>
					</div>
					<div class="col-md-3">
						<div class="d-flex justify-content-center fs55">
							<div class="img_ringkas_donasi d-flex justify-content-center align-items-center">
								<i class="fa fa-users fa-fw"></i>
							</div>
						</div>
						<p class="txt_judul_ringkas_donasi2 mt-3">Komunitas Pecinta Kucing</p>
						<p class="txt_judul_ringkas_donasi3" id="statistics-user_registered-">Kami memiliki komunitas sesama pecinta kucing di Telegram</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt100">
			<section class="head_review tac">
				<p class="headline_judul">Kata Mereka Tentang Halocat</p>
				<p class="sub_headline_judul mb50">Berikut beberapa testimoni mengharukan dari Cat Lovers</p>
			</section>
			<section class="slider_review mb50">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Philippina Tyche</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Philippina Tyche</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">
											 Halocat telah menjadi platform yang sangat membantu bagi saya sebagai pecinta kucing. Mereka menyediakan berbagai sumber daya dan informasi tentang perawatan kucing, nutrisi, dan kesehatan.
											</p>
											<p class="txt_description_review mb-0">
											 Saya merasa lebih percaya diri dan teredukasi dalam merawat kucing saya berkat Halocat.
											</p>
										</div>
									</div>
									<div class="box_review_right" style="background-image: url('<?= base_url('assets/img/heartwarming_stories/lover9.webp'); ?>');"></div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Adolph Alexander</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Adolph Alexander</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">
											Saya sangat terima kasih kepada Halocat karena telah menyediakan komunitas yang begitu ramah dan mendukung bagi pecinta kucing. Saya bisa berbagi pengalaman, meminta saran, dan bertukar cerita dengan orang-orang yang memiliki minat yang sama. 
											</p>
											<p class="txt_description_review mb-0">
											Ini benar-benar membuat pengalaman saya sebagai pemilik kucing lebih bermakna.
											</p>
										</div>
									</div>
									<div class="box_review_right" style="background-image: url('<?= base_url('assets/img/heartwarming_stories/lover4.webp'); ?>');"></div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Iudithu Vênus</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Iudithu Vênus</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">
											 	Halocat telah menghubungkan saya dengan para ahli dan dokter hewan yang dapat saya konsultasikan secara online. Saya bisa mendapatkan nasihat langsung mengenai kesehatan kucing saya tanpa harus pergi ke klinik.
											</p>
											<p class="txt_description_review mb-0">
												Ini sangat membantu, terutama dalam situasi darurat atau ketika saya membutuhkan jawaban cepat.
											</p>
										</div>
									</div>
									<div class="box_review_right" style="background-image: url('<?= base_url('assets/img/heartwarming_stories/lover10.webp'); ?>');"></div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Elov Saverio</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Elov Saverio</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">
												Halocat adalah platform yang peduli terhadap kesejahteraan kucing. Saya sangat menghargai upaya mereka dalam menggalang dana untuk menyelamatkan kucing-kucing yang membutuhkan bantuan medis. 
											</p>
											<p class="txt_description_review mb-0">
												Saya senang dapat berkontribusi dan mendukung inisiatif mereka.
											</p>
										</div>
									</div>
									<div class="box_review_right" style="background-image: url('<?= base_url('assets/img/heartwarming_stories/4.jpg'); ?>');"></div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Tifi Liu</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Tifi Liu</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">
												Halocat telah membuat pengalaman saya sebagai pecinta kucing lebih berarti dan terhubung dengan komunitas yang lebih luas. Saya merasa didukung dan diinspirasi oleh banyak orang yang berbagi cinta dan kasih sayang terhadap kucing.
											</p>
											<p class="txt_description_review mb-0">
												Terima kasih, Halocat, atas dedikasi Anda dalam mendorong kehidupan yang lebih baik bagi kucing di seluruh dunia.
											</p>
										</div>
									</div>
									<div class="box_review_right" style="background-image: url('<?= base_url('assets/img/heartwarming_stories/lover2.webp'); ?>');"></div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="box_review card-shadow">
								<div class="sub_box_review">
									<div class="box_review_left">
										<div class="box_judul_review">
											<p class="txt_judul_review">Darlin Valentine</p>

											<div class="m_judul_left_review dn">
												<svg class="m_svg_icon_user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
												<i class="fa-thin fa-user"></i>
											</div>
											<div class="m_judul_right_review dn">
												<p class="m_txt_judul_review">Darlin Valentine</p>
											</div>
										</div>
										<div class="desription_review">
											<p class="txt_description_review">
												Saya suka menggunakan fitur pencarian Halocat. Ketika saya memiliki pertanyaan atau masalah kesehatan dengan kucing saya, saya dapat dengan mudah menemukan artikel yang relevan dan solusi yang diusulkan. 
											</p>
											<p class="txt_description_review mb-0">
												Ini sangat memudahkan saya dalam mencari informasi yang saya butuhkan.
											</p>
										</div>
									</div>
									<div class="box_review_right" style="background-image: url('<?= base_url('assets/img/heartwarming_stories/lover7.webp'); ?>');"></div>
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
					<p class="sub_headline_judul mb50">Temukan informasi yang berguna untuk Anda, dan cari tahu lebih banyak tentang kami</p>
				</center>

				<div id="accordion">
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<p class="txt_judul_faq">Apa itu Halocat?</p>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
							Halocat (singkatan dari Halo Cat, Hallo Kucing) adalah sebuah super-platform untuk memudahkan Pet Owner mendapatkan solusi untuk pemeliharaan kucing kesayangan yang meliputi Konsultasi Online Dokter Kucing.
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<p class="txt_judul_faq">Apa saja layanan yang dimiliki oleh Halocat?</p>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<ol style="padding-left: 20px; padding-right: 20px; margin-bottom: 0;">
									<li>Vet Telehealth: Layanan konsultasi online dokter hewan yang menghubungkan pet owner dengan dokter kucing terpercaya.</li>
									<li>List Artikel: Berbagai macam konten kesehatan tentang kucing.</li>
									<li>Komunitas Cat Lovers: Menghubungkan pecinta kucing dari berbagai penjuru Indonesia.</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<p class="txt_judul_faq">Saya ingin berkolaborasi dengan Halocat, kepada siapa saya harus menghubungi?</p>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
							Halocat yakin bahwa kolaborasi adalah sebuah kunci untuk membuka setiap peluang dan mempercepat pertumbuhan demi mencapai visi bersama. Oleh karena itu, Halocat sangat terbuka untuk setiap kolaborasi dengan berbagai pihak. Untuk keperluan kolaborasi, Anda dapat menghubungi Halocat melalui email di rickyromansyah54@gmail.com
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<p class="txt_judul_faq">Bagaimana Halocat mengelola data pribadi saya?</p>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
							 Kebijakan Privasi ini akan melingkupi penjelasan mengenai bagaimana informasi pengguna Halocat (“PENGGUNA”) dikumpulkan, digunakan, dan dijaga kerahasiaannya oleh PT Halocat Karya Anak Bangsa (“KAMI”) dengan tetap menghormati Hak PENGGUNA dalam menggunakan Situs dan Aplikasi Halocat (“APLIKASI”) KAMI.
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							<p class="txt_judul_faq">Apa itu Komunitas Halocat?</p>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body">
							 Komunitas Halocat merupakan komunitas yang dibuat khusus guna membantu para Pet Owner untuk dapat memiliki akses lebih akan edukasi, layanan kesehatan, dan Product yang terbaik bagi kucing kesayangan anda.
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
							<p class="txt_judul_faq">Bagaimana cara bergabung Komunitas Halocat?</p>
						</div>
						<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
							<div class="card-body">
								Untuk menjadi bagian dari Komunitas Halocat sangatlah mudah, cukup daftarkan diri anda dan kucing kesayangan kalian di <a href="https://t.me/+XKcykkmaYLIyZDI9">Telegram Halocat</a>.</li>
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading8" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
							<p class="txt_judul_faq">Keuntungan apa saja yang didapatkan jika gabung komunitas Halocat?</p>
						</div>
						<div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
							<div class="card-body">
							Jika anda bergabung Komunitas Halocat, anda bisa mendapatkan benefit berupa:
								<ol style="padding-left: 20px; padding-right: 20px; margin-bottom: 0;">
									<li>Bergabung Group Komunitas Halocat Untuk mendapatkan info-info terbaru</li>
									<li>Dapat mengikuti Webinar Eksklusif Halocat</li>
									<li>Kesempatan mendapatkan Special Gift</li>
									<li>Free konsultasi online</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading9" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
							<p class="txt_judul_faq">Bagaimana cara menjadi mitra dokter Halocat?</p>
						</div>
						<div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
							<div class="card-body">
							 Halocat yakin bahwa dokter memiliki passion untuk berbagi informasi dan mengedukasi masyarakat Indonesia tentang kesehatan hewan. Bayangkan kalau kita berkolaborasi, pasti akan menjadi tim yang luar biasa! Halocat selalu membuka kesempatan bagi dokter hewan di seluruh Indonesia untuk menjadi mitra dokter Halocat. Dokter dapat mengisi <a href="https://bit.ly/daftarDokterHalocat">Form Registrasi Mitra Dokter Halocat</a>, kemudian Halocat akan segera menghubungi dokter. Untuk pertanyaan lebih lanjut, dokter dapat menghubungi Ricky Romansyah (rickyromansyah54@gmail.com)
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading10" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
							<p class="txt_judul_faq">Saya ingin konsultasi sekarang juga karena kucing saya sedang emergency, apakah bisa?</p>
						</div>
						<div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
							<div class="card-body">
							 Layanan Kami tidak disarankan untuk kasus emergency. Kasus emergency memerlukan berbagai tindakan cepat dan tepat yang hanya dapat dilakukan oleh dokter hewan secara langsung. Untuk kasus emergency, disarankan untuk segera membawa hewan kesayangan Anda ke dokter hewan terdekat untuk pemeriksaan langsung.
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading11" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
							<p class="txt_judul_faq">Apa saja keuntungan yang didapatkan dengan menjadi mitra dokter Halocat?</p>
						</div>
						<div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
							<div class="card-body">
								<ol style="padding-left: 20px; padding-right: 20px; margin-bottom: 0;">
									<li>Akses ke platform aplikasi Halocat Sebagai Dokter</li>
									<li>Melayani konsultasi online dokter hewan serta mengedukasi pet owners tentang kesehatan Kucing</li>
									<li>Berkesempatan untuk menulis artikel dan konten di website dan social media Halocat</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading13" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
							<p class="txt_judul_faq">Dapatkah saya menonaktifkan akun saya?</p>
						</div>
						<div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
							<div class="card-body">
								Bisa, silahkan hubungi +62877-8582-3188 (text/whatsapp only).
							</div>
						</div>
					</div>
					<div class="card mb5">
						<div class="card-header box_list_faq" id="heading14" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
							<p class="txt_judul_faq">Bisakah saya membuat konten tanpa harus mendaftar terlebih dahulu?</p>
						</div>
						<div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
							<div class="card-body">
								Bisa, silahkan hubungi +62877-8582-3188 (text/whatsapp only).
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
					url: "<?= $_ENV['API_URL']; ?>/contents?status=active&limit=9&order_by=id&order_type=DESC",
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
									console.log(img)
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

											<a href="<?= site_url('donate'); ?>/${data[i].id}">
												<button class="btn_submit_donasi">
													lihat
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