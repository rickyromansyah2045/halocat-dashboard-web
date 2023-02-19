<!doctype html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
	<style>
		.carousel-inner img {
      width: 100%;
      height: 100%;
	  border-radius: 20px;
  }

#custCarousel .carousel-indicators {
    position: static;
    margin-top: 20px;
	margin-bottom: 10px;
}

#custCarousel .carousel-indicators > li {
  width: 300px;
  height: auto;
}

.carousel-indicators li {
	opacity: 1;
}

 #custCarousel .carousel-indicators li img {
    display: block;
	opacity: 0.65;
 }

  #custCarousel .carousel-indicators li.active img {
    opacity: 1;
  }

  #custCarousel .carousel-indicators li:hover img {
    opacity: 0.85;
  }

  .carousel-indicators {
	justify-content: start;
	margin-left: 0;
	margin-right: 0;
  }
	</style>
	<body>
		<header class="header_box hh300">
			<?php $this->load->view('template/menu'); ?>
			<div class="jumbotron jh200"></div>
		</header>
		<div class="container dd_container">
			<div class="row">
				<div class="col-md-7">
					<!-- <div class="dd_highlight_img">
						<img class="highlight_img" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
					</div>
					<div class="row mt30">
						<div class="col-md-3">
							<div class="box_list_highlight">
								<img class="highlight_img" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							</div>
						</div>
						<div class="col-md-3">
							<div class="box_list_highlight">
								<img class="highlight_img" src="<?= base_url('assets/wireboard-detail2.jpg')?>" alt="Card image cap">
							</div>
						</div>
						<div class="col-md-3">
							<div class="box_list_highlight">
								<img class="highlight_img" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							</div>
						</div>
						<div class="col-md-3">
							<div class="box_list_highlight">
								<img class="highlight_img" src="<?= base_url('assets/Image-list-donasi.svg')?>" alt="Card image cap">
							</div>
						</div> -->
						<div id="custCarousel" class="carousel slide carousel-fade" data-ride="carousel" align="center">
							<!-- slides -->
							<div class="carousel-inner dd_highlight_img">
								<div class="carousel-item active">
									<img src="https://i.imgur.com/weXVL8M.jpg" alt="Hills">
								</div>
								<div class="carousel-item">
									<img src="https://i.imgur.com/Rpxx6wU.jpg" alt="Hills">
								</div>
								<div class="carousel-item">
									<img src="https://i.imgur.com/83fandJ.jpg" alt="Hills">
								</div>
								<div class="carousel-item">
									<img src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Hills">
								</div>
								<div class="carousel-item">
									<img src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Hills">
								</div>
							</div>

							<!-- Thumbnails -->
							<ol class="carousel-indicators list-inline">
							<li class="list-inline-item active">
								<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
									<img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid box_list_highlight">
								</a>
							</li>

							<li class="list-inline-item">
								<a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
									<img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid box_list_highlight">
								</a>
							</li>

							<li class="list-inline-item">
								<a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel">
									<img src="https://i.imgur.com/83fandJ.jpg"  class="img-fluid box_list_highlight">
								</a>
							</li>

							<li class="list-inline-item">
								<a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel">
									<img src="https://i.imgur.com/JiQ9Ppv.jpg"  class="img-fluid box_list_highlight">
								</a>
							</li>
							</ol>
					</div>
					<hr>
					<div class="dd_description_donasi">
						<p class="dd_title_description">Wireboard Fortune</p>
						<p class="dd_sub_title_description">Era terbaru untuk keyboard mekanik yang cocok untuk semua kalangan.</p>
						<div class="progress mb10">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
						</div>
						<div class="progres_box_donasi">
							<p class="txt_progres_percent">75%</p>
							<p class="txt_progres_nominal">Rp 40.000.000</p>
						</div>
						<p class="description_donasi">Designed to fit your dedicated typing experience. No matter what you like, linear, clicky or a little in between, we’ve got you covered with three Gateron switches options (Blue, Brown, Red). With a lifespan of 50 million keystroke lifespan we want to make sure that you experience same feedback for every keystroke.</p>
						<p class="description_donasi">With N-key rollover (NKRO on wired mode only) you can register as many keys as you can press at once without missing out characters. It allows to use all the same media keys as conventional macOS. </p>
						<p class="description_donasi mb0">This keyboard can last up to 72 hours typing, or up to 9 days of normal use (8 hrs/day) with a 4000 mAh big battery.</p>
						<p class="dd_title_description mt30 mb20">Activity</p>
						<form>
							<div class="form-group">
								<textarea class="form-control dd_textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="form-group">
								<textarea class="form-control dd_textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="form-group">
								<textarea class="form-control dd_textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<button class="dl_btn_search">load more</button>
						</form>
					</div>
				</div>
				<div class="col-md-5">
					<div class="box_donation">
						<form>
							<div class="form-group mb20">
								<label class="lbl_form_donation mb0 pb20">Form Donation</label>
								<textarea class="form-control dd_textarea h120" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<div class="form-group mb20">
								<input type="text" class="form-control form-control-lg">
							</div>
							<button class="dl_btn_search clr_btn_donate">DONATE NOW</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('template/footer'); ?>
		<?php $this->load->view('template/script'); ?>
	</body>
</html>
