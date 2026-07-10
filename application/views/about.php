<section class="about-sec">
	<div class="container">
		<div class="section-heading text-center">
			<h2>Giới Thiệu</h2>
			<p>Khám phá câu chuyện, tầm nhìn và giá trị cốt lõi của công ty</p>
			<hr>
		</div>
		<img src="<?php echo base_url() . POST_UPLOAD_PATH . $about['banner'] ?>" class="img-fluid" alt="About Banner">
	</div>
</section>


<!--About Content-->
<section class="about-content">
	<div class="container">
		<div class="about-listee">
			<div class="about-info">
				<h4><span>Về</span> Chúng Tôi</h4>
				<p><?php echo $about['description'] ?></p>
			</div>
		</div>
	</div>
</section>
<!--/About Content-->

<!--How It Works-->
<section class="about-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="post-content"><?php echo $about['content'] ?></div>
			</div>
		</div>
	</div>
</section>
<!--/How It Works-->