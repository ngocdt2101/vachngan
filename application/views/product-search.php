<section class="all-s">
	<div class="releases v2">
		<div class="container container-240">
			<div class="title-icon t-column mg-50">
				<div class="t-inside">
					<img src="<?php echo base_url() ?>assets/ecome/img/real.png" alt="">
				</div>
				<h1>Kết quả tìm kiếm</h1>
			</div>
			<div class="e-product">
				<div class="product-collection-grid product-grid spc1">
					<div class="row">
						<?php foreach ($products as $product) { ?>
							<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 product-item">
								<div class="pd-bd product-inner">
									<div class="product-img">
										<a href="<?php echo base_url() . 'san-pham/' . $product['name_unsigned'] ?>"><img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['thumb'] ?>" alt="<?php echo $product['thumb'] ?>" class="img-reponsive"></a>
										<?php if ($product['promotion_price'] && $product['price']) { ?>
											<div class="ribbon-price red"><span>- <?php echo round((1 - $product['promotion_price'] / $product['price']) * 100) ?>% </span></div>
										<?php } ?>
									</div>
									<div class="product-info">
										<div class="element-list element-list-middle">
											<p class="product-cate"><?php echo $product['category_name'] ?></p>
											<h3 class="product-title"><a href="<?php echo base_url() . 'san-pham/' . $product['name_unsigned'] ?>"><?php echo $product['name'] ?></a></h3>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>