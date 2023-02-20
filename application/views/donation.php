<!doctype html>
<html lang="en">
	<?php $this->load->view('template/head'); ?>
  	<body>
		<header class="header_box dl_header">
			<?php $this->load->view('template/menu'); ?>
			<div class="jumbotron jhabout" style="padding-top: 150px;">
				<p class="all_judul_header">List of Donations</p>
			</div>
			<div class="container dl_box_search" style="padding: 25px;">
				<form id="form-filter">
					<div class="row">
						<div class="col-md-4">
							<p class="dl_txt_header">Search</p>
							<input type="text" class="form-control dl_input_txt_header" id="filter-search">
						</div>
						<div class="col-md-4">
							<p class="dl_txt_header">Category</p>
							<select class="form-control dl_input_txt_header" id="filter-category_id">
								<option value=""></option>
							</select>
						</div>
						<div class="col-md-4">
							<p class="dl_txt_header">Sort By</p>
							<select class="form-control dl_input_txt_header" id="filter-sort_by">
								<option value=""></option>
								<option value="oldest">Oldest Campaigns</option>
								<option value="newest">Newest Campaigns</option>
								<option value="smallest_income">Smallest Collection Amount</option>
								<option value="biggest_income">Biggest Collection Amount</option>
							</select>
						</div>
					</div>
					<button class="dl_btn_search" type="submit" style="margin-top: 25px;">search</button>
				</form>
			</div>
		</header>
		<div class="container mt190">
			<div class="list_donasi">
				<div class="row display-flex" id="wrapper-list_donation"></div>
				<div class="row row_show_all_donasi" style="margin-top: 10px;">
					<button class="btn_see_all_donasi">
						load more
					</button>
				</div>
			</div>
		</div>
		<?php $this->load->view('template/footer'); ?>
	    <?php $this->load->view('template/script'); ?>
		<script>
			let search = "";
			let category_id = "";
			let limit = "8";
			let offset = "8";
			let sortBy = "";
			let orderBy = "id";
			let orderType = "DESC";

			$('#form-filter').submit(function(e){
				e.preventDefault();

				search = $('#filter-search').val();
				sortBy = $('#filter-sort_by').val();
				category_id = $('#filter-category_id').val();

				if (sortBy != "") {
					switch (sortBy) {
						case "newest":
							orderBy = "id";
							orderType = "DESC";
							break;
						case "oldest":
							orderBy = "id";
							orderType = "ASC";
							break;
						case "biggest_income":
							orderBy = "current_amount";
							orderType = "DESC";
							break;
						case "smallest_income":
							orderBy = "current_amount";
							orderType = "ASC";
							break;
						default:
							break;
					}
				}

				newRequest(search, category_id, limit, orderBy, orderType);
			});

			function newRequest(search = "", category_id = "", limit = "8", offset = "0", orderBy = "id", orderType = "DESC") {
				let query = "?";

				if (search != "") {
					query += `search=${search}`;
				}

				if (category_id != "") {
					query += (query == "?" ? "" : "&") + `category=${category_id}`;
				}

				query += (query == "?" ? "" : "&") + `limit=${limit}&order_by=${orderBy}&order_type=${orderType}`;

				query += '&status=active';

				$('#wrapper-list_donation').html('');

				$.ajax({
					url: `<?= $_ENV['API_URL']; ?>/campaigns${query}`,
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;
							let img = '';
							let tooltip = '';
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

								if (data[i].short_description.length > 30) {
									tooltip = ` data-toggle="tooltip" data-placement="top" title="${data[i].short_description}"`;
								}

								$('#wrapper-list_donation').append(`<div class="col-md-6 col-lg-4">
									<div class="card col_list_donasi" style="height: 100%;">
										${img}
										<div class="card-body pad0">
											<p class="txt_judul_donasi" style="cursor: help;"${tooltip}>${data[i].short_description}</p>
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
											<a href="<?= site_url('donate'); ?>/${data[i].id}" target="_blank">
												<button class="btn_submit_donasi">
													donate
												</button>
											</a>
										</div>
									</div>
								</div>`);
							}

							renderTooltip();
						}
					},
					error: function(xhr, error, code) {
						console.log(xhr, error, code);
					}
				});
			}

			$(function(){
				newRequest();

				$.ajax({
					url: "<?= $_ENV['API_URL']; ?>/campaigns/categories",
					type: 'GET',
					success: function(response) {
						if (response.success) {
							let data = response.data;
							for (let i = 0; i < data.length; i++) {
								$("#filter-category_id").append(`<option value="${data[i].id}">${data[i].category}</option>`);
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