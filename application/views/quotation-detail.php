<!--Inner Banner-->
<div class="aboutbanner innerbanner">
	<div class="inner-breadcrumb">
		<div class="container">
			<div class="row align-items-center text-center">
				<div class="col-md-12 col-12 ">
					<h2 class="breadcrumb-title">Báo Giá</h2>
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Báo giá</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Inner Banner-->

<!-- Blog -->
<div class="bloglisting">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="blogdetail-content" style="padding-top: 0;">
					<h1 style="text-align: center; margin-bottom: 50px;"><?php echo $quotation['name'] ?></h1>
					<?php echo $quotation['content'] ?>
				</div>

			</div>
			<div class="col-lg-3 theiaStickySidebar">
				<div class="rightsidebar blogsidebar">
					<div class="card">
						<h4><img src="<?php echo base_url() ?>assets/listee/img/details-icon.svg" alt="details-icon"> Tìm kiếm </h4>
						<div class="filter-content looking-input form-group">
							<input type="text" class="form-control" placeholder="To Search type and hit enter">
						</div>
					</div>
					<div class="card">
						<h4><img src="<?php echo base_url() ?>assets/listee/img/icons/icons-3.png" alt="details-icon" width="20px"> Báo giá liên quan </h4>
						<ul class="blogcategories-list">
							<?php foreach ($related_quotations as $index => $item) { ?>
								<li> <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a> </li>
							<?php } ?>
						</ul>
					</div>
					<div class="card">
						<h4><img src="<?php echo base_url() ?>assets/listee/img/category-icon.svg" alt="details-icon"> Báo giá </h4>
						<ul class="blogcategories-list">
							<li> <a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-tam-compact'?>"> Báo giá tấm Compact </a> </li>
							<li> <a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh'?>"> Báo giá vách ngăn vệ sinh </a> </li>
							<li> <a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong'?>"> Báo giá vách ngăn di động </a> </li>
						</ul>
					</div>
					<div class="card tags-widget">
						<h4><i class="feather-tag"></i> Tags</h4>
						<ul class="tags">
							<?php foreach ($tags as $index => $item) { ?>
								<li><?php echo $item ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Blog -->