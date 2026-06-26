<!--Inner Banner-->
<div class="aboutbanner innerbanner" style="margin-bottom: 70px;">
	<div class="inner-breadcrumb">
		<div class="container">
			<div class="row align-items-center text-center">
				<div class="col-md-12 col-12 ">
					<h2 class="breadcrumb-title">Báo Giá</h2>
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Báo giá</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Inner Banner-->

<!--=== Blogs Start ======-->
<?php if (isset($quotations) && is_array($quotations) && !empty($quotations)) { ?>
	<section class="blog-section" style="padding-top: 10px; padding-bottom: 90px;">
		<div class="section-heading">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
						<h2><span class="title-right">Báo</span> giá tấm Compact</h2>
						<p>Cập nhật mới nhất giá các loại tấm compact trên thị trường hiện nay</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="gap: 30px 0;">
				<?php foreach ($quotations as $index => $item) { ?>
					
					<div class="col-lg-4 col-md-4 d-flex">
						<div class="blog grid-blog aos flex-fill" data-aos="fade-up">
							<div class="blog-image">
								<a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"><img class="img-fluid" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="Post Image"></a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<div class="post-author-img">
												<img src="<?php echo base_url() ?>assets/listee/img/profiles/avatar-14.jpg" alt="Post Author">
											</div>
											<a href="javascript:void(0);" class="mb-0"> <span> Admin </span></a>
										</div>
									</li>
									<li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?> </li>
								</ul>
								<h3 class="blog-title"><a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a>
								</h3>
								<p class="blog-description"><?php echo $item['description'] ?></p>
								<p class="viewlink"><a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> Xem Chi Tiết <i class="feather-arrow-right"></i></a></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>

<?php if (isset($quotations2) && is_array($quotations2) && !empty($quotations2)) { ?>
	<section class="blog-section" style="padding-top: 10px; padding-bottom: 90px;">
		<div class="section-heading">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
						<h2><span class="title-right">Báo</span> giá vách ngăn vệ sinh</h2>
						<p>Cập nhật mới nhất giá các loại vách ngăn di vệ sinh lượng cao nhất</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="gap: 30px 0;">
				<?php foreach ($quotations2 as $index => $item) { ?>
					<div class="col-lg-4 col-md-4 d-flex">
						<div class="blog grid-blog aos flex-fill" data-aos="fade-up">
							<div class="blog-image">
								<a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"><img class="img-fluid" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="Post Image"></a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<div class="post-author-img">
												<img src="<?php echo base_url() ?>assets/listee/img/profiles/avatar-14.jpg" alt="Post Author">
											</div>
											<a href="javascript:void(0);" class="mb-0"> <span> Admin </span></a>
										</div>
									</li>
									<li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?> </li>
								</ul>
								<h3 class="blog-title"><a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a>
								</h3>
								<p class="blog-description"><?php echo $item['description'] ?></p>
								<p class="viewlink"><a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> Xem Chi Tiết <i class="feather-arrow-right"></i></a></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>

<?php if (isset($quotations3) && is_array($quotations3) && !empty($quotations3)) { ?>
	<section class="blog-section" style="padding-top: 10px; padding-bottom: 90px;">
		<div class="section-heading">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
						<h2><span class="title-right">Báo</span> giá vách ngăn di động</h2>
						<p>Cập nhật mới nhất giá các loại vách ngăn di động trên thị trường hiện nay</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="gap: 30px 0;">
				<?php foreach ($quotations3 as $index => $item) { ?>
					<div class="col-lg-4 col-md-4 d-flex">
						<div class="blog grid-blog aos flex-fill" data-aos="fade-up">
							<div class="blog-image">
								<a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"><img class="img-fluid" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="Post Image"></a>
							</div>
							<div class="blog-content">
								<ul class="entry-meta meta-item">
									<li>
										<div class="post-author">
											<div class="post-author-img">
												<img src="<?php echo base_url() ?>assets/listee/img/profiles/avatar-14.jpg" alt="Post Author">
											</div>
											<a href="javascript:void(0);" class="mb-0"> <span> Admin </span></a>
										</div>
									</li>
									<li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?> </li>
								</ul>
								<h3 class="blog-title"><a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a>
								</h3>
								<p class="blog-description"><?php echo $item['description'] ?></p>
								<p class="viewlink"><a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> Xem Chi Tiết <i class="feather-arrow-right"></i></a></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>
<!--=== Blogs End ======-->