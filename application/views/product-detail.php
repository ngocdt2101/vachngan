
  <!--Details Description  Section-->
  <section class="details-description">
  	<div class="container">
  		<div class="about-details">
  			<div class="about-headings">
  				<div class="author-img">
  					<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['thumb'] ?>" alt="authorimg">
  				</div>
  				<div class="authordetails">
  					<h5><?php echo $product['name'] ?></h5>
  					<p><?php echo $product['description'] ?></p>
  				</div>
  			</div>
  			<div class="rate-details">
  				<h2 style="color: #c10037;">
  					<?php if ($product['price']) { ?>
  						<?php echo number_format($product['price'], 0, ",", ".") ?> VND</span></span>
  					<?php } else { ?>
  						Liên hệ
  					<?php } ?>
  				</h2>
  			</div>
  		</div>
  		<div class="descriptionlinks">
  			<div class="row">
  				<div class="col-lg-9">
  					<ul>
  						<li><a href="javascript:void(0);"><i class="feather-share-2"></i> Chia sẻ</a></li>
  						<li><a href="javascript:void(0);"><i class="fa-regular fa-comment-dots"></i> Đánh giá</a></li>
  						<li><a href="javascript:void(0);"><i class="feather-flag"></i>Báo cáo </a></li>
  						<li><a href="javascript:void(0);"><i class="feather-heart"></i> Lưu</a></li>
  					</ul>
  				</div>
  				<div class="col-lg-3">
  					<div class="callnow">
  						<a href="tel:<?php echo $company['hotline'] ?>"> <i class="feather-phone-call"></i> Call Now</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!--/Details Description  Section-->

  <!--Details Main  Section-->
  <div class="details-main-wrapper">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-9">
  				<div class="card ">
  					<div class="card-header">
  						<span class="bar-icon">
  							<span></span>
  							<span></span>
  							<span></span>
  						</span>
  						<h4>Mô tả sản phẩm</h4>
  					</div>
  					<div class="card-body">
  						<?php echo $product['content'] ?>
  					</div>
  				</div>

  				<!--Gallery Section-->
  				<div class="card gallery-section ">
  					<div class="card-header ">
  						<img src="<?php echo base_url() ?>assets/listee/img/galleryicon.svg" alt="gallery">
  						<h4>Hình ảnh thực tế</h4>
  					</div>
  					<div class="card-body">
  						<div class="gallery-content">
  							<div class="row">
  								<div class="col-lg-3 col-md-3 col-sm-3">
  									<div class="gallery-widget">
  										<a href="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['avatar'] ?>" data-fancybox="gallery1">
  											<img class="img-fluid" alt="Image" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['thumb'] ?>">
  										</a>
  									</div>
  								</div>

  								<?php foreach ($images as $key => $image) { ?>

  									<div class="col-lg-3 col-md-3 col-sm-3">
  										<div class="gallery-widget">
  											<a href="<?php echo base_url() . IMAGE_UPLOAD_PATH . $image['name'] ?>" data-fancybox="gallery1">
  												<img class="img-fluid" alt="Image" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $image['thumb'] ?>">
  											</a>
  										</div>
  									</div>
  								<?php } ?>

  							</div>
  						</div>
  					</div>
  				</div>
  				<!--/Gallery Section-->


  				<!-- Related  Section-->
  				<div class="card related-sec  mb-0">
  					<div class="card-header  align-items-center">
  						<img src="<?php echo base_url() ?>assets/listee/img/icons/icons-11.png" alt="gallery">
  						<h4>Sản phẩm liên quan</h4>
  					</div>
  					<div class="card-body latestad-section grid-view featured-slider" style="background: white;">
  						<div class="container" style="max-width: 100%;">
  							<div class="lateestads-content">
  								<div class="row">
  									<?php foreach ($related_products as $item) { ?>
  										<div class="col-lg-4 col-md-6 col-sm-6 d-flex">
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
  															<h6 style="white-space: wrap;"><a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>"><?php echo $item['name'] ?></a></h6>
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
  					</div>
  				</div>
  				<!--/Review Section-->
  			</div>

  			<div class="col-lg-3 theiaStickySidebar">
  				<div class="rightsidebar">
  					<div class="card">
  						<h4><img src="<?php echo base_url() ?>assets/listee/img/details-icon.svg" alt="details-icon"> Thông tin sản phẩm</h4>
  						<ul>
  							<li>Giá
  								<span style="color: #c10037; font-size: 20px;">
  									<?php if ($product['price']) { ?>
  										<?php echo number_format($product['price'], 0, ",", ".") ?>
  									<?php } else { ?>
  										Liên hệ
  									<?php } ?>
  								</span>
  							</li>
  							<li>Đơn vị tiền <span>VNĐ</span></li>
  							<li>Đơn vị tính <span></span></li>
  							<li>Loại <span><?php echo $product['category_name'] ?></span></li>
  							<li>Quy cách <span></span></li>
  						</ul>
  					</div>
  					<div class="card">
  						<h4><img src="<?php echo base_url() ?>assets/listee/img/breifcase.svg" alt=""> Thông tin liên hệ</h4>
  						<div class="map-details">
  							<ul class="info-list">
  								<li><i class="feather-map-pin"></i> <?php echo $company['address'] ?></li>
  								<li><i class="feather-phone-call"></i> <?php echo $company['hotline'] ?></li>
  								<li><i class="feather-mail"></i> <?php echo $company['email'] ?></li>
  								<li><img src="<?php echo base_url() ?>assets/listee/img/website.svg" alt="website"> <?php echo $_SERVER['HTTP_HOST'] ?></li>
  								<li class="socialicons pb-0">
  									<a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
  									<a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
  									<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
  									<a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
  								</li>
  							</ul>
  						</div>
  					</div>
  					<div class="card mb-0">
  						<h4> <i class="feather-phone-call"></i> Đăng kí </h4>
  						<form class="contactbusinessform">
  							<div class="form-group">
  								<input type="text" class="form-control" placeholder="Name">
  							</div>
  							<div class="form-group">
  								<input type="email" class="form-control" placeholder="Email Address">
  							</div>
  							<div class="form-group">
  								<textarea rows="6" class="form-control" placeholder="Message"></textarea>
  							</div>
  							<div class="submit-section">
  								<button onclick="return false;" class="btn btn-primary submit-btn" type="submit">Send Message</button>
  							</div>
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <!-- /Details Main Section -->