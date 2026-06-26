<section class="contactusform-section" style="padding-top: 120px;">
	<div class="container" style="margin-bottom: 60px;">
		<div class="contact-info">
			<h2>Liên <span>Hệ</span></h2>
			<p>Hãy liên hệ với chung tôi để nhận được thông tin mới nhất</p>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-5">
				<div class="contactform-img">
					<img width="300px" src="<?php echo base_url()?>assets/listee/img/contactform-img.svg" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-lg-7 col-md-7">
				<div class="contactinfo-content">
					<div class="contact-hours">
						<h6>Liên hệ:</h6>
						<ul>
							<li>Địa Chỉ: <?php echo $company['address'] ?></li>
							<li>Điện Thoại: <?php echo $company['hotline'] ?> </li>
							<li>Email: <?php echo $company['email'] ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--=== Google Maps Start ======-->
	<div class="map-area">
		<div class="container-fluid m-0 p-0">
			<?php echo $company['coordinate'] ?>
		</div>
	</div>
	<!--=== Google Maps End ======-->
</section>