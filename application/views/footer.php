<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="stay-tuned">
			<h3>Hãy theo dõi chúng tôi</h3>
			<p>Đăng ký nhận thông tin mới nhất của chúng tôi để không bỏ lỡ các tin tức và chương trình khuyến mãi.</p>
			<form>
				<div class="form-group">
					<div class="group-img">
						<i class="feather-mail"></i>
						<input type="text" class="form-control" placeholder="Enter Email Address">
					</div>
				</div>
				<button onclick="return false;" class="btn btn-primary" type="submit"> Subscribe</button>
			</form>
		</div>
	</div>

	<!-- Footer Top -->
	<div class="footer-top aos" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<!-- Footer Widget -->
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="#"><img src="<?php echo base_url() ?>assets/listee/img/compact_logo2.png" alt="logo"></a>
						</div>
						<div class="footer-content">
							<p style="font-weight: bold;">
								CÔNG TY TNHH XNK & THƯƠNG MẠI BA MIỀN
							</p>

							<p>
								Địa chỉ: Số 256/16D, Khu Phố 2, phường Thạnh Xuân, Q.12, TP.HCM
							</p>

							<p>
								<span>Xưởng sản xuất HCM:</span>
								<span>280/112 Ấp 2 Đông Thạnh, Hóc Môn, Tp.HCM</span>
							</p>

							<p>
								<span>Xưởng sản xuất Đà Nẵng:</span>
								<span>Số 16 Hoàng Văn Thái, Liên Chiểu, Đà Nẵng</span>
							</p>

							<p>
								<span>Xưởng sản xuất Hà Nội:</span>
								<span>Số 158, đường Phan Trọng Tuệ, xã Thanh Liệt, huyện Thanh Trì, Hà Nội</span>
							</p>

							<p>
								<span>Điện thoại: </span>
								<span>0927 680 999</span> </br>
								<span style="margin-left: 72px;">0909 256 236</span> </br>
								<span style="margin-left: 72px;">0909 224 979</span> </br>
								<span style="margin-left: 72px;">0983 670 779</span>
							</p>
							<p>
								<span>Email: vachnganbamien@gmail.com</span>
							</p>
						</div>
						<div class="social-icon">
							<ul>
								<li>
									<a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Footer Widget -->
				</div>
				<div class="col-lg-3 col-md-6">
					<!-- Footer Widget -->
					<div class="footer-widget footer-menu">
						<h2 class="footer-title">DANH MỤC</h2>
						<ul>
							<li>
								<a href="<?php echo base_url() . 'gioi-thieu' ?>"> Giới thiệu </a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'bao-gia' ?>"> Báo giá chi tiết </a>
							</li>
							<?php foreach ($all_categories as $index => $item) { ?>
								<li>
									<a href="<?php echo base_url() . 'danh-muc-san-pham/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a>
								</li>
							<?php } ?>
							<li>
								<a href="<?php echo base_url() . 'tin-tuc' ?>"> Tin tức </a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'lien-he' ?>"> Liên hệ </a>
							</li>
						</ul>
					</div>
					<!-- /Footer Widget -->
				</div>
				<div class="col-lg-3 col-md-6">
					<!-- Footer Widget -->
					<div class="footer-widget footer-menu">
						<h2 class="footer-title">BÀI VIẾT</h2>
						<ul>
							<?php foreach ($quotations_on_home as $index => $item) { ?>
								<?php if ($index <= 3) { ?>
									<li> <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a></li>
								<?php } ?>
							<?php } ?>

							<?php foreach ($news_on_home as $index => $item) { ?>
								<?php if ($index <= 3) { ?>
									<li> <a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a></li>
								<?php } ?>
							<?php } ?>
						</ul>
					</div>
					<!-- /Footer Widget -->
				</div>
				<div class="col-lg-2 col-md-6">
					<!-- Footer Widget -->
					<div class="footer-widget">
						<h2 class="footer-title">LIÊN HỆ</h2>
						<div class="footer-contact-info">
							<div class="footer-address">
								<img src="<?php echo base_url() ?>assets/listee/img/call-calling.svg" alt="Callus">
								<p><span>Hotline</span> <br> <?php echo $company['hotline'] ?> </p>
							</div>
							<div class="footer-address">
								<img src="<?php echo base_url() ?>assets/listee/img/sms-tracking.svg" alt="Callus">
								<p><span>Email</span> <br> <?php echo $company['email'] ?> </p>
							</div>
						</div>
					</div>
					<!-- /Footer Widget -->
				</div>
			</div>

		</div>
	</div>
	<!-- /Footer Top -->

	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container">
			<!-- Copyright -->
			<div class="copyright">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright-text text-center">
							<p class="mb-0">All Copyrights Reserved &copy; <script>
									document.write(new Date().getFullYear());
								</script> - <script>
									document.write(window.location.hostname);
								</script>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /Copyright -->
		</div>
	</div>
	<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->