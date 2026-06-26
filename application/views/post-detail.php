<!--=== page-title-section start ===-->
<section class="title-hero-bg parallax-effect" style="background-image: url(<?php echo $banner['banner4'] ? base_url() . BANNER_UPLOAD_PATH . $banner['banner4']['thumb'] : base_url() . 'assets/grandy/images/slides/title-bg-15.jpg' ?>);">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="page-title text-center white-color">
			<h1><?php echo $post['name'] ?></h1>
			<!-- <h4 class="text-uppercase mt-30">Recent Articles</h4> -->
		</div>
	</div>
</section>
<!--=== page-title-section end ===-->

<!--=== Blogs Start ======-->
<section style="padding-top: 60px; padding-bottom: 60px;">
	<div class="container-fluid" style="max-width: 1366px;">
		<div class="row" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 30%); background: #fff;">
			<div class="col-md-9" style="border-right: 1px solid #eeeeee;">
				<div class="post">
					<div class="post-info" style="padding-left: 0; padding-right: 0;">
						<?php echo $post['content'] ?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget sidebar_widget widget_categories" style="padding-top: 30px;">
					<h5 class="widget-title" style="font-size: 20px; margin-top: 5px;">Bài viết liên quan</h5>
					<?php foreach ($related_posts as $index => $item) { ?>
						<?php if ($item['name_unsigned'] != $post['name_unsigned']) { ?>
							<div class="row related_posts">
								<div class="col-xs-4" style="padding-right: 5px">
									<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>"><img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="<?php echo $item['name'] ?>" /></a>
								</div>
								<div class="col-xs-8" style="padding-left: 5px">
									<a href="<?php echo base_url() . 'bai-viet/' . $item['name_unsigned'] ?>"><?php echo $item['name'] ?></a>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
					<img class="img-responsive" src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner['banner7']['thumb'] ?>" alt="banner" style="margin-top: 34px; border-radius: 6px;" />
				</div>
			</div>
			<!--=== Right Side End ===-->
		</div>
	</div>
</section>
<!--=== Blogs End ======-->


<script src="<?php echo base_url() ?>assets/grandy/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/grandy/js/magiczoomplus.js"></script>
<script src="<?php echo base_url() ?>assets/grandy/js/jquery.carouFredSel-6.2.0-packed.js"></script>
<script>
	$(document).ready(function() {
		$('#images').carouFredSel({
			height: 'auto',
			prev: '#prev13',
			next: '#next13',
			auto: false,
			scroll: 1
		});
	});
</script>