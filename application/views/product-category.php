<!--Inner Banner-->
<div class="aboutbanner innerbanner">
	<div class="inner-breadcrumb">
		<div class="container">
			<div class="row align-items-center text-center">
				<div class="col-md-12 col-12 ">
					<h1 class="breadcrumb-title">Sản Phẩm</h1>
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page"><h2 class=""><?php echo $category['name']?></h2></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Inner Banner-->

<!-- Latest Ads Section -->
<section class="latestad-section grid-view featured-slider">
	<div class="container">
		<div class="lateestads-content">
			<div class="row">
				<?php foreach ($products as $index => $item) { ?>
					<div class="col-lg-3 col-md-4 col-sm-6 d-flex">
						<div class="card aos flex-fill" data-aos="fade-up">
							<div class="blog-widget">
								<div class="blog-img">
									<a href="<?php echo base_url().'san-pham/'.$item['name_unsigned'] ?>">
										<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $item['thumb'] ?>" class="img-product" alt="blog-img">
									</a>
								</div>
								<div class="bloglist-content">
									<div class="card-body" style="padding: 15px;">
										<div class="blogfeaturelink" style="margin: 0px 0 15px 0;">
											<div class="blog-features">
												<a href="javascript:void(0)"><span> <i class="fa-regular fa-circle-stop"></i> <?php echo $item['category_name']?> </span></a>
											</div>
										</div>
										<h3 style="white-space: wrap;"><a href="<?php echo base_url().'san-pham/'.$item['name_unsigned'] ?>"><?php echo $item['name']?></a></h3>
										<div class="amount-details">
											<div class="amount">
												<span class="validrate"><?php echo ($item['price'] == '' ? "Liên hệ" : number_format($item['price'], 0, ',', '.'))?></span>
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