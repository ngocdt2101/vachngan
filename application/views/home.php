<!-- Quotations Section -->
<?php if (is_array($quotations) && !empty($quotations)) { ?>
	<section class="blog-section" style="padding-top: 70px; padding-bottom: 0px;">
		<div class="section-heading">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
						<h2><span class="title-right">Báo</span> giá tấm Compact</h2>
						<p>Cập nhật mới nhất giá các loại tấm compact trên thị trường hiện nay</p>
					</div>
					<div class="col-md-6 text-md-end aos aos-init aos-animate" data-aos="fade-up">
						<a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-tam-compact' ?>" class="btn  btn-view">Xem tất cả</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
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

<?php if (is_array($quotations2) && !empty($quotations2)) { ?>
	<section class="blog-section" style="padding-top: 70px; padding-bottom: 0px;">
		<div class="section-heading">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
						<h2><span class="title-right">Báo</span> giá vách ngăn vệ sinh</h2>
						<p>Cập nhật mới nhất giá các loại vách ngăn di vệ sinh lượng cao nhất</p>
					</div>
					<div class="col-md-6 text-md-end aos aos-init aos-animate" data-aos="fade-up">
						<a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>" class="btn  btn-view">Xem tất cả</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
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

<?php if (is_array($quotations3) && !empty($quotations3)) { ?>
	<section class="blog-section" style="padding-top: 70px; padding-bottom: 0px;">
		<div class="section-heading">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
						<h2><span class="title-right">Báo</span> giá vách ngăn di động</h2>
						<p>Cập nhật mới nhất giá các loại vách ngăn di động trên thị trường hiện nay</p>
					</div>
					<div class="col-md-6 text-md-end aos aos-init aos-animate" data-aos="fade-up">
						<a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>" class="btn  btn-view">Xem tất cả</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
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
<!-- Quotations Section -->

<!-- Latest Ads Section -->
<section class="latestad-section grid-view featured-slider" style="margin-top: 50px;">
	<div class="container">
		<div class="section-heading">
			<div class="row align-items-center">
				<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
					<h2><span class="title-right">Sản</span> phẩm</h2>
					<p>Vách ngăn compact của chúng tôi được sản xuất từ chất liệu bền bỉ, chịu nước, chống ẩm mốc, và dễ dàng bảo trì, mang lại sự tiện nghi và vẻ đẹp tinh tế cho mọi không gian.</p>
				</div>
				<div class="col-md-6 text-md-end aos aos-init aos-animate" data-aos="fade-up">
					<a href="<?php echo base_url() . 'san-pham' ?>" class="btn btn-view"> Xem tất cả</a>
				</div>
			</div>
		</div>
		<div class="lateestads-content">
			<div class="row">
				<?php foreach ($products_on_home as $index => $item) { ?>
					<div class="col-lg-3 col-md-4 col-sm-6 d-flex">
						<div class="card aos flex-fill" data-aos="fade-up">
							<div class="blog-widget">
								<div class="blog-img">
									<a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>">
										<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $item['thumb'] ?>" class="img-product" alt="blog-img">
									</a>
								</div>
								<div class="bloglist-content">
									<div class="card-body" style="padding: 15px;">
										<div class="blogfeaturelink" style="margin: 0px 0 15px 0;">
											<div class="blog-features">
												<a href="javascript:void(0)"><span> <i class="fa-regular fa-circle-stop"></i> <?php echo $item['category_name'] ?> </span></a>
											</div>
										</div>
										<h3 style="white-space: wrap;"><a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>"><?php echo $item['name'] ?></a></h3>
										<div class="amount-details">
											<div class="amount">
												<span class="validrate"><?php echo ($item['price'] == '' ? "Liên hệ" : number_format($item['price'], 0, ',', '.')) ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- /Latest Ads Section -->


<!-- CTA Section -->
<section class="cta-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="cta-content">
					<h3>Giải pháp <span>tối ưu</span> <br> cho không gian hiện đại </h3>
					<p>Hãy để chúng tôi cùng bạn kiến tạo những không gian sống và làm việc hiện đại, tiện nghi hơn với vách ngăn compact chất lượng cao!</p>
					<div class="cta-btn">
						<a href="<?php echo base_url() . 'gioi-thieu' ?>" class="btn-primary postad-btn"> Về chúng tôi</a>
						<a href="<?php echo base_url() . 'bao-gia' ?>" class="browse-btn">Báo giá</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<!-- <div class="cta-img">
					<img src="assets/img/cta-img.png" class="img-fluid" alt="CTA">
				</div> -->
			</div>
		</div>
	</div>
</section>
<!-- /CTA Section -->

<!-- Blog  Section -->
<section class="blog-section">
	<div class="section-heading">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
					<h2><span class="title-right">Tin</span> tức</h2>
					<p>Cập nhật những thông tin mới nhất về tấm compact trong nước và quốc tế</p>
				</div>
				<div class="col-md-6 text-md-end aos aos-init aos-animate" data-aos="fade-up">
					<a href="<?php echo base_url() . 'tin-tuc' ?>" class="btn btn-view">View All</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($news_on_home as $index => $item) { ?>
				<div class="col-lg-4 col-md-4 d-flex">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>"><img class="img-fluid" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="Post Image"></a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li>
									<div class="post-author">
										<div class="post-author-img">
											<img src="<?php echo base_url() ?>assets/listee/img/profiles/avatar-12.jpg" alt="Post Author">
										</div>
										<a href="javascript:void(0);" class="mb-0"><span> Admin </span></a>
									</div>
								</li>
								<li class="date-icon"><i class="fa-solid fa-calendar-days"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></li>
							</ul>
							<h3 class="blog-title"><a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>"><?php echo $item['name'] ?></a></h3>
							<p class="blog-description"><?php echo $item['description'] ?></p>
							<p class="viewlink"><a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>">View Details <i class="feather-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- /Blog  Section -->