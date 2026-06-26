<!-- Header -->
<header class="header">
	<div class="container">
		<nav class="navbar navbar-expand-lg header-nav">
			<div class="navbar-header">
				<a id="mobile_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				<a href="<?php echo base_url() ?>" class="navbar-brand logo">
					<img src="<?php echo base_url() ?>assets/listee/img/compact_logo.png" class="img-fluid" alt="Logo">
				</a>
			</div>
			<div class="main-menu-wrapper">
				<div class="menu-header">
					<a href="<?php echo base_url() ?>" class="menu-logo"><img src="<?php echo base_url() ?>assets/listee/img/compact_logo.png" class="img-fluid" alt="Logo"></a>
					<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
				</div>
				<ul class="main-nav">
					<li class="<?php echo(strtolower($this->router->fetch_class()) == 'home' ? 'active' : 'inactive')?>">
						<a href="<?php echo base_url() ?>"> Trang chủ </a>
					</li>
					<li class="<?php echo(strtolower($this->router->fetch_class()) == 'about' ? 'active' : 'inactive')?>">
						<a href="<?php echo base_url().'gioi-thieu' ?>"> Giới thiệu </a>
					</li>
					<li class="has-submenu <?php echo(strtolower($this->router->fetch_class()) == 'quotation' ? 'active' : 'inactive')?>">
						<a href="#"> Báo giá <i class="fas fa-chevron-down"></i></a>
						<ul class="submenu">
							<li>
								<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-tam-compact' ?>"> Báo giá tấm Compact </a>
							</li>
							<li>
								<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>"> Báo giá vách ngăn vệ sinh </a>
							</li>
							<li>
								<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>"> Báo giá vách ngăn di động </a>
							</li>
						</ul>
					</li>
					<li class="has-submenu <?php echo(strtolower($this->router->fetch_class()) == 'product' ? 'active' : 'inactive')?>">
						<a href="#"> Sản phẩm <i class="fas fa-chevron-down"></i></a>
						<ul class="submenu">
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
			<ul class="nav header-navbar-rht">
				<li class="nav-item">
					<a class="nav-link header-login" href="tel:<?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?>"> <i class="feather-phone-call"></i> <?php echo $company['hotline'] ?> </a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<!-- /Header -->