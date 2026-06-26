<!--Inner Banner-->
<div class="aboutbanner innerbanner">
	<div class="inner-breadcrumb">
		<div class="container">
			<div class="row align-items-center text-center">
				<div class="col-md-12 col-12 ">
					<h2 class="breadcrumb-title">Sản Phẩm</h2>
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Inner Banner-->

<!-- Blog  Section -->
<section class="blog-section">
	<div class="container">
		<div class="row">
			<?php foreach ($news as $index => $item) { ?>
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