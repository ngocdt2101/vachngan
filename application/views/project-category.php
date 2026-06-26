<!--=== page-title-section start ===-->
<section class="title-hero-bg parallax-effect" style="background-image: url(<?php base_url() . BANNER_UPLOAD_PATH . $banner['banner4']['thumb'] ?>);">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="page-title text-center white-color">
			<h1>Dự án tiêu biểu</h1>
			<!-- <h4 class="text-uppercase mt-30">Recent Articles</h4> -->
		</div>
	</div>
</section>
<!--=== page-title-section end ===-->

<!--=== Blogs Start ======-->
<section style="background: white; padding-top: 40px; padding-bottom: 50px;">
	<div class="container">
		<?php foreach ($posts as $index => $item) { ?>
			<?php if ($index % 2 == 0) { ?>
				<div class="row project-category-hot" style="border-radius: 5px;">
					<div class="col-md-6 project-category-image">
						<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>">
							<img src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="<?php echo $item['name'] ?>" style="border-radius: 5px;" />
						</a>
					</div>
					<div class="col-md-6">
						<div class="project-item">
							<div class="project-menu-text-content">
								<div class="row">
									<div class="col-md-8">
										<h3><?php echo $item['name'] ?></h3>
									</div>
								</div>
							</div>
							<p><?php echo $item['description'] ?></p>
							<div class="mt-20">
								<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>">
									<span class="btn btn-md project-read-more-btn">XEM CHI TIẾT</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<div class="row project-category-hot" style="border-radius: 5px">
					<div class="col-md-6 project-category-image visible-xs">
						<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>">
							<img src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="<?php echo $item['name'] ?>" style="border-radius: 5px;" />
						</a>
					</div>
					<div class="col-md-6">
						<div class="project-item">
							<div class="project-menu-text-content">
								<div class="row">
									<div class="col-md-8">
										<h3><?php echo $item['name'] ?></h3>
									</div>
								</div>
							</div>
							<p><?php echo $item['description'] ?></p>
							<div class="mt-20">
								<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>">
									<span class="btn btn-md project-read-more-btn">XEM CHI TIẾT</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 project-category-image hidden-xs">
						<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>">
							<img src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="<?php echo $item['name'] ?>" style="border-radius: 5px;" />
						</a>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</section>
<!--=== Blogs End ======-->