<!--=== page-title-section start ===-->
<section class="title-hero-bg parallax-effect" style="background-image: url(<?php echo $banner['banner4'] ? base_url() . BANNER_UPLOAD_PATH . $banner['banner4']['thumb'] : base_url() . 'assets/grandy/images/slides/title-bg-15.jpg' ?>);">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="page-title text-center white-color">
			<h1><?php echo $post_category['name'] ?></h1>
			<!-- <h4 class="text-uppercase mt-30">Recent Articles</h4> -->
		</div>
	</div>
</section>
<!--=== page-title-section end ===-->

<!--=== Blogs Start ======-->
<section>
	<div class="container-fluid" style="max-width: 1600px;">
		<div class="row">
			<?php foreach ($posts as $index => $item) { ?>
				<div class="col-md-3">
					<div class="post" style="margin-bottom: 30px">
						<div class="post-img"> <a href="<?php echo base_url().'bai-viet/'.$item['name_unsigned'] ?>"><img class="img-responsive" src="<?php echo $item['avatar'] ? base_url() . POST_UPLOAD_PATH . $item['avatar'] : base_url() . 'assets/grandy/images/post/post-01.jpg' ?>" alt="<?php echo $item['name'] ?>" /></a> </div>
						<div class="post-info">
							<div style="height: 43px; overflow: hidden;">
								<h3><a href="<?php echo base_url().'bai-viet/'.$item['name_unsigned'] ?>" style="font-weight: normal; font-size: 16px;"><?php echo $item['name'] ?></a></h3>
							</div>
							<!-- <h6><?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></h6> -->
							<!-- <hr> -->
							<!-- <p class="mt-10 mb-20"> <span> <a class="extras-wrap" href="#"><i class="ion-ios-eye-outline"></i><span><?php echo $item['view_count'] ?> lượt xem</span></a> <span class="extras-wrap"><i class="ion-ios-time-outline"></i><span><?php echo rand(1, 59) ?> phút trước</span></span> </span> </p> -->
							<div style="height: 30px;">
								<a class="readmore" href="<?php echo base_url().'bai-viet/'.$item['name_unsigned'] ?>"><span>Xem chi tiết</span></a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!--=== Blogs End ======-->