<!doctype html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
	<body>
		<header class="header_box hh300">
			<?php $this->load->view('template/menu'); ?>
			<div class="jumbotron jh200"></div>
		</header>
		<div class="container dd_container">
			<div class="row">
				<div class="col-md-7" id="dd_images">
					<?php if (count($data["images"]) > 1): ?>
						<div id="custCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false" align="center">
							<div class="carousel-inner dd_highlight_img">
								<?php for ($i = 0; $i < count($data['images']); $i++): ?>
									<div class="carousel-item<?= $i == 0 ? " active" : ""; ?>">
										<img src="<?= "{$_ENV['API_BASE']}/{$data['images'][$i]['file_location']}"; ?>" alt="">
									</div>
								<?php endfor; ?>
							</div>
							<ol class="carousel-indicators list-inline">
								<?php for ($i = 0; $i < count($data['images']); $i++): ?>
									<li class="list-inline-item<?= $i == 0 ? " active" : ""; ?>">
										<a id="carousel-selector-<?= $i; ?>" class="selected" data-slide-to="<?= $i; ?>" data-target="#custCarousel">
											<img src="<?= "{$_ENV['API_BASE']}/{$data['images'][$i]['file_location']}"; ?>" class="box_list_highlight">
										</a>
									</li>
								<?php endfor; ?>
							</ol>
						</div>
						<hr>
					<?php else: ?>
						<div class="dd_highlight_img mb-4">
							<img src="<?= count($data["images"]) == 0 ? base_url('assets/img/default_image_2.png') : "{$_ENV['API_BASE']}/{$data['images'][0]['file_location']}"; ?>" class="highlight_img" alt="">
						</div>
					<?php endif; ?>
					<div class="dd_description_donasi">
						<p class="dd_title_description"><?= $data['title']; ?></p>
						<p class="dd_sub_title_description"><?= $data['short_description']; ?></p>
						<div class="progress mb10">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $percentage; ?>%"></div>
						</div>
						<div class="progres_box_donasi">
							<p class="txt_progres_percent"><?= $percentage; ?>%</p>
							<p class="txt_progres_nominal">Rp <?= $data["goal_amount"]; ?></p>
						</div>
						<p class="description_donasi"><?= $data['description']; ?></p>
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
