<!--Inner Banner-->
<div class="aboutbanner innerbanner">
	<div class="inner-breadcrumb">
		<div class="container">
			<div class="row align-items-center text-center">
				<div class="col-md-12 col-12 ">
					<h2 class="breadcrumb-title">Giới Thiệu</h2>
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Inner Banner-->

<!--About Content-->
<section class="about-content">
	<div class="container">
		<div class="about-listee">
			<div class="about-img">
				<img src="<?php echo base_url() . POST_UPLOAD_PATH . $about['banner'] ?>" class="img-fluid" alt="">
			</div>
			<div class="about-info">
				<h4> <span>Về </span> Chúng Tôi</h4>
				<p> <?php echo $about['description'] ?></p>
			</div>
		</div>
	</div>
</section>
<!--/About Content-->

<!--How It Works-->
<section class="howitworks">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="post-content"><?php echo $about['content'] ?></div>
			</div>
		</div>
	</div>
</section>
<!--/How It Works-->