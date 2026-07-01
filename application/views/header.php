<div id="wrap" class="layout-4 red">

	<!-- Top bar -->
	<div class="top-bar">
		<div class="container">
			<ul class="pull-left right-sec">
				<li><a href="#.">Địa chỉ: Số 256/16D, Đường TX25 - P.Thạnh Xuân - Quận 12 - TP.HCM</a></li>
			</ul>
			<div class="right-sec">
				<ul>
					<li><a href="#.">Hotline: 0927-680-999</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Header -->
	<header class="header-style-3">
		<div class="container">
			<div class="logo"> <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/smarttech/images/compact_logo2.png" alt=""></a> </div>
			<nav class="navbar ownmenu">

				<!-- Categories -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
				</div>

				<!-- NAV -->
				<div class="collapse navbar-collapse" id="nav-open-btn">
					<ul class="nav">
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'home' ? 'active' : '')?>">
							<a href="<?php echo base_url() ?>">Trang chủ</a>
						</li>
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'about' ? 'active' : '')?>">
							<a href="<?php echo base_url().'gioi-thieu' ?>">Giới thiệu</a>
						</li>
						<li class="dropdown megamenu <?php echo(strtolower($this->router->fetch_class()) == 'quotation' ? 'active' : '')?>"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Báo giá </a>
							<div class="dropdown-menu animated-2s fadeInUpHalf">
								<div class="mega-inside scrn">
									<ul class="home-links">
										<li>
											<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-tam-compact' ?>"><img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/home-1.jpg" alt=""> <span>Báo giá tấm Compact</span></a>
										</li>
										<li>
											<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>"><img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/home-2.jpg" alt=""> <span>Báo giá vách ngăn vệ sinh</span></a>
										</li>
										<li>
											<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>"><img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/home-2.jpg" alt=""> <span>Báo giá vách ngăn di động</span></a>
										</li>
									</ul>
								</div>
							</div>
						</li>

						<li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm </a>
							<ul class="dropdown-menu multi-level">
								<?php foreach ($all_categories as $index => $item) { ?>
									<li>
										<a href="<?php echo base_url() .'danh-muc-san-pham/'. $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'news' ? 'active' : 'inactive')?>">
							<a href="<?php echo base_url().'tin-tuc' ?>"> Tin tức </a>
						</li>
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'contact' ? 'active' : 'inactive')?>">
							<a href="<?php echo base_url().'lien-he' ?>"> Liên hệ </a>
						</li>
					</ul>
				</div>
			</nav>

			<span class="call-mun">
				<i class="fa fa-phone"></i> <strong>Hotline</strong><br>
				<?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?>
			</span>


		</div>
	</header>
</div>

<!-- Nav Header -->
<div class="big-nsv">
	<div class="container">
		<ul class="nav" role="tablist">
			<li><a href="<?php echo base_url().'gioi-thieu' ?>"><span class="menu-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="8" r="3.2"></circle>
							<path d="M5.5 19c1.2-3.1 3.7-4.7 6.5-4.7s5.3 1.6 6.5 4.7"></path>
							<rect x="3" y="3" width="18" height="18" rx="2.5"></rect>
						</svg></span> Giới thiệu </a></li>
			<li><a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-tam-compact' ?>"><span class="menu-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M8 3h6l5 5v13H8z"></path>
							<path d="M14 3v5h5"></path>
							<path d="M11 13h5M11 16h5"></path>
						</svg></span> Báo giá tấm compact </a></li>
			<li><a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>"><span class="menu-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<rect x="4" y="4" width="16" height="16" rx="2"></rect>
							<path d="M10 4v16M14.5 9.5h0"></path>
						</svg></span> Báo giá vách vệ sinh </a></li>
			<li><a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>"><span class="menu-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="5" width="5" height="14" rx="1"></rect>
							<rect x="10" y="5" width="5" height="14" rx="1"></rect>
							<rect x="17" y="5" width="4" height="14" rx="1"></rect>
							<path d="M8 12h2M15 12h2"></path>
						</svg></span> Báo giá vách di động </a></li>
			<li><a href="<?php echo base_url() .'lien-he' ?>"><span class="menu-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M15.5 16.5c-3.7 0-8-4.3-8-8V6.8c0-.9.7-1.6 1.6-1.6h2c.7 0 1.4.5 1.5 1.2l.4 2c.1.5-.1 1.1-.6 1.4l-1.3.9c.7 1.4 1.8 2.5 3.2 3.2l.9-1.3c.3-.4.9-.7 1.4-.6l2 .4c.7.1 1.2.8 1.2 1.5v2c0 .9-.7 1.6-1.6 1.6z"></path>
						</svg></span> Liên hệ </a></li>
		</ul>
	</div>
</div>