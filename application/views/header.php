<div id="wrap" class="site-shell">

	<header class="site-header">
		<nav class="navbar navbar-default site-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span><i class="fa fa-navicon"></i></span>
					</button>
					<a class="navbar-brand site-header__logo" href="<?php echo base_url() ?>">
						<img src="<?php echo base_url() ?>assets/frontend/img/compact_logo2.png" alt="Viet Compact">
					</a>
				</div>

				<div class="collapse navbar-collapse site-navbar__collapse" id="nav-open-btn">
					<ul class="nav navbar-nav site-navbar__menu">
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'home' ? 'active' : '')?>"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'about' ? 'active' : '')?>"><a href="<?php echo base_url().'gioi-thieu' ?>">Giới thiệu</a></li>
						<li class="dropdown megamenu <?php echo(strtolower($this->router->fetch_class()) == 'quotation' ? 'active' : '')?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Báo giá</a>
							<div class="dropdown-menu animated-2s fadeInUpHalf">
								<ul class="home-links home-links--text">
									<li>
										<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-tam-compact' ?>">
											<strong>Báo giá tấm Compact</strong>
											<span>Tổng hợp giải pháp, màu sắc và cấu hình cho công trình.</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>">
											<strong>Báo giá vách ngăn vệ sinh</strong>
											<span>Gợi ý cấu hình bền đẹp, tối ưu ngân sách và bảo trì.</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url() .'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>">
											<strong>Báo giá vách ngăn di động</strong>
											<span>Thiết kế linh hoạt cho hội trường, phòng họp và sự kiện.</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown <?php echo(strtolower($this->router->fetch_class()) == 'product' ? 'active' : '')?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
							<ul class="dropdown-menu multi-level">
								<?php foreach ($all_categories as $index => $item) { ?>
									<li><a href="<?php echo base_url() .'danh-muc-san-pham/'. $item['name_unsigned'] ?>"><?php echo $item['name'] ?></a></li>
								<?php } ?>
							</ul>
						</li>
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'news' ? 'active' : 'inactive')?>"><a href="<?php echo base_url().'tin-tuc' ?>">Tin tức</a></li>
						<li class="<?php echo(strtolower($this->router->fetch_class()) == 'contact' ? 'active' : 'inactive')?>"><a href="<?php echo base_url().'lien-he' ?>">Liên hệ</a></li>
					</ul>
					<div class="site-navbar__actions">
						<a class="site-header__hotline" href="tel:<?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?>">
							<span>Hotline</span>
							<strong><?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?></strong>
						</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
</div>