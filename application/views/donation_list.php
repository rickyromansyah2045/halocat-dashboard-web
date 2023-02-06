<!doctype html>
<html lang="en">
	<?php $this->load->view('template/head_landingpage'); ?>
	<body>
		<header class="header_box">
			<?php $this->load->view('template/menu_landingpage'); ?>
			<div class="jumbotron jumbotron_header">
				<div class="container">
					<div class="row">
						<div class="col-md-6 maxw564">
							<p class="txt_header1">Spend Your Money to Help Others Who Need Help</p>
							<p class="txt_header2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Phasellus varius rutrum turpis, nec convallis elit ornare quis. 
							Curabitur et fringilla lacus. 
							Etiam id metus non sapien egestas viverra. 
							Nam interdum libero ligula,
							ut lacinia sapien  porttitor ac. 
							Praesent vel orci lectus. Etiam et nulla odio.</p>
							<button class="btn_header">take me to goodness</button>
						</div>
						<div class="col-md-6 padl45">
							<img src="<?= base_url() ?>/assets/test-img.png" style="" class="img_landing_page">
						</div>
					</div>
				</div>
			</div>
		</header>


<!-- Isi -->



<!-- Akhir Isi -->

    <?php $this->load->view('template/footer_landingpage'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>
</html>