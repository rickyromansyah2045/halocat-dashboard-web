<!doctype html>
<html lang="en">
	<?php $this->load->view('template/landing_head'); ?>
	<body>
		<header class="header_box hh300">
			<?php $this->load->view('template/landing_menu'); ?>
			<div class="jumbotron jh200"></div>
		</header>
		<div class="container dd_container">
			<div class="row">
				<div class="col-md-7">
					<div class="dd_highlight_img">
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
						</div>
					</div>
					<div class="dd_description_donasi">
						<p class="dd_title_description mt30">Wireboard Fortune</p>
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
		<?php $this->load->view('template/landing_footer'); ?>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</body>
</html>
