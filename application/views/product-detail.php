
<!-- Breadcrumb Navigation -->
<div class="breadcrumb-section">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Trang chủ</a></li>
				<li><a href="<?php echo base_url() . $product['category_name_unsigned'] ?>"><i class="fa fa-cube"></i> <?php echo $product['category_name'] ?></a></li>
				<li class="active"><?php echo $product['name'] ?></li>
			</ol>
		</nav>
	</div>
</div>

<!-- Product Hero Section -->
<section class="product-hero">
	<div class="container">
		<div class="product-hero-content">
			<!-- Product Image -->
			<div class="product-hero__image">
				<div class="product-image-wrapper">
					<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['thumb'] ?>" alt="<?php echo $product['name'] ?>" class="img-responsive">
				</div>
			</div>

			<!-- Product Info -->
			<div class="product-hero__info">
				<div class="product-badge">
					<span class="badge-category"><i class="fa fa-tag"></i> <?php echo $product['category_name'] ?></span>
				</div>

				<h1><?php echo $product['name'] ?></h1>
				
				<p class="product-description"><?php echo $product['description'] ?></p>

				<!-- Price Section -->
				<div class="product-price-section">
					<div class="price-label">Giá:</div>
					<div class="price-value">
						<?php if ($product['price']) { ?>
							<span class="price-number"><?php echo number_format($product['price'], 0, ",", ".") ?></span>
							<span class="price-currency">VND</span>
						<?php } else { ?>
							<span class="price-contact">Liên hệ</span>
						<?php } ?>
					</div>
				</div>

				<!-- Action Buttons -->
				<div class="product-actions">
					<a href="tel:<?php echo isset($company['hotline']) ? $company['hotline'] : '#' ?>" class="btn btn-primary-gradient">
						<i class="fa fa-phone"></i> Liên hệ ngay
					</a>
					<a href="<?php echo base_url() . 'lien-he' ?>" class="btn btn-secondary-outline">
						<i class="fa fa-envelope"></i> Gửi yêu cầu
					</a>
				</div>

				<!-- Share & Favorite -->
				<div class="product-meta">
					<a href="javascript:void(0);" class="meta-link"><i class="fa fa-share-alt"></i> Chia sẻ</a>
					<a href="javascript:void(0);" class="meta-link"><i class="fa fa-heart"></i> Lưu</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Main Content Section -->
<section class="product-details padding-top-60 padding-bottom-60">
	<div class="container">
		<div class="row">
			<!-- Main Content -->
			<div class="col-md-9">
				<!-- Description Card -->
				<div class="detail-content-card">
					<div class="card-header-custom">
						<h3><i class="fa fa-file-text"></i> Mô tả sản phẩm</h3>
					</div>
					<div class="post-content">
						<?php echo $product['content'] ?>
					</div>
				</div>

				<!-- Gallery Section -->
				<?php if (!empty($images)) { ?>
					<div class="detail-content-card">
						<div class="card-header-custom">
							<h3><i class="fa fa-images"></i> Hình ảnh thực tế</h3>
						</div>
						<div class="gallery-section-wrapper">
							<div class="gallery-grid">
								<!-- Main featured image -->
								<div class="gallery-item gallery-featured">
									<a href="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['avatar'] ?>" data-fancybox="product-gallery">
										<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['avatar'] ?>" alt="<?php echo $product['name'] ?>" class="img-responsive">
										<div class="gallery-overlay">
											<i class="fa fa-search-plus"></i>
										</div>
									</a>
								</div>

								<!-- Thumbnail images -->
								<?php foreach ($images as $image) { ?>
									<div class="gallery-item">
										<a href="<?php echo base_url() . IMAGE_UPLOAD_PATH . $image['name'] ?>" data-fancybox="product-gallery">
											<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $image['thumb'] ?>" alt="<?php echo $product['name'] ?>" class="img-responsive">
											<div class="gallery-overlay">
												<i class="fa fa-search-plus"></i>
											</div>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- Sidebar -->
			<div class="col-md-3">
				<!-- Product Info Card -->
				<div class="sidebar-card">
					<div class="sidebar-card__header">
						<i class="fa fa-info-circle"></i>
						<h5>Thông tin sản phẩm</h5>
					</div>
					<div class="sidebar-card__body">
						<div class="info-list-custom">
							<div class="info-item">
								<span class="info-label">Giá:</span>
								<span class="info-value">
									<?php if ($product['price']) { ?>
										<?php echo number_format($product['price'], 0, ",", ".") ?> VND
									<?php } else { ?>
										Liên hệ
									<?php } ?>
								</span>
							</div>
							<div class="info-item">
								<span class="info-label">Loại:</span>
								<span class="info-value"><?php echo $product['category_name'] ?></span>
							</div>
							<div class="info-item">
								<span class="info-label">Đơn vị tiền:</span>
								<span class="info-value">VND</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Contact Info Card -->
				<div class="sidebar-card">
					<div class="sidebar-card__header">
						<i class="fa fa-phone"></i>
						<h5>Thông tin liên hệ</h5>
					</div>
					<div class="sidebar-card__body">
						<div class="contact-list-custom">
							<a href="tel:<?php echo $company['hotline'] ?>" class="contact-item">
								<i class="fa fa-phone"></i> <?php echo $company['hotline'] ?>
							</a>
							<a href="mailto:<?php echo $company['email'] ?>" class="contact-item">
								<i class="fa fa-envelope"></i> <?php echo $company['email'] ?>
							</a>
							<div class="contact-item">
								<i class="fa fa-map-marker"></i> <?php echo $company['address'] ?>
							</div>
						</div>
					</div>
				</div>

				<!-- CTA Card -->
				<div class="sidebar-card cta-card">
					<div class="sidebar-card__header">
						<i class="fa fa-comments"></i>
						<h5>Liên hệ ngay</h5>
					</div>
					<div class="sidebar-card__body">
						<a href="tel:<?php echo isset($company['hotline']) ? $company['hotline'] : '#' ?>" class="btn btn-primary-gradient btn-block" style="display: block; text-align: center; width: 100%; margin-bottom: 10px;">
							<i class="fa fa-phone"></i> Gọi ngay
						</a>
						<a href="<?php echo base_url() . 'lien-he' ?>" class="btn btn-secondary-gradient btn-block" style="display: block; text-align: center; width: 100%;">
							<i class="fa fa-envelope"></i> Gửi yêu cầu
						</a>
					</div>
				</div>
			</div>
		</div>

						<!-- Related Products Section -->
				<?php if (!empty($related_products)) { ?>
					<div class="detail-content-card">
						<div class="card-header-custom">
							<h3><i class="fa fa-cubes"></i> Sản phẩm liên quan</h3>
						</div>
						<div class="related-products-wrapper">
							<div class="item-col-4">
								<?php foreach ($related_products as $item) { ?>
									<div class="product">
										<article>
											<a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>" class="tittle-img">
												<img class="img-responsive" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $item['thumb'] ?>" alt="<?php echo $item['name'] ?>">
											</a>
											<span class="tag"><?php echo $item['category_name'] ?></span>
											<a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>" class="tittle"><?php echo $item['name'] ?></a>
											<div class="price"><?php echo ($item['price'] == '' ? "Liên hệ" : number_format($item['price'], 0, ',', '.') . " VND") ?></div>
										</article>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
	</div>
</section>