<!-- Breadcrumb Navigation -->
<div class="breadcrumb-section">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Trang chủ</a></li>
				<li><i class="fa fa-newspaper-o"></i> Tin tức</li>
				<li class="active"><?php echo $news['name'] ?></li>
			</ol>
		</nav>
	</div>
</div>

<section class="detail-hero">
	<div class="container">
		<div class="detail-header">
			<div class="detail-badge">
				<span class="badge-category"><i class="fa fa-newspaper-o"></i> Tin tức</span>
			</div>
			<h1><?php echo $news['name'] ?></h1>
			<div class="detail-meta">
				<span><i class="fa fa-calendar-o"></i> <?php echo date("M d, Y", strtotime($news['updated_at'])) ?></span>
			</div>
		</div>
	</div>
</section>

<section class="quotation-single padding-top-60 padding-bottom-60">
	<div class="container">
		<div class="row">
			<!-- Main Content -->
			<div class="col-md-9">
				<div class="detail-content-card">
					<div class="post-content" style="all: revert; padding: 20px;">
						<?php echo $news['content'] ?>
					</div>

					<div class="detail-cta">
						<div class="cta-content">
							<h3>Bạn cần tư vấn thêm?</h3>
							<p>Liên hệ với chúng tôi để nhận thông tin chi tiết và hỗ trợ nhanh chóng</p>
						</div>
						<div class="cta-actions">
							<a href="<?php echo base_url() . 'lien-he' ?>" class="btn btn-primary-gradient">
								<i class="fa fa-envelope"></i> Gửi yêu cầu
							</a>
							<a href="<?php echo base_url() . 'tin-tuc' ?>" class="btn btn-secondary-gradient">
								<i class="fa fa-list"></i> Xem thêm tin
							</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-md-3">
				<div class="sidebar-card">
					<div class="sidebar-card__header">
						<i class="fa fa-folder-open"></i>
						<h5>Danh mục tin tức</h5>
					</div>
					<div class="sidebar-card__body">
						<ul class="category-list">
							<li><a href="<?php echo base_url() . 'tin-tuc' ?>"><i class="fa fa-chevron-right"></i> Tất cả tin tức</a></li>
							<li><a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-tam-compact' ?>"><i class="fa fa-chevron-right"></i> Báo giá tấm Compact</a></li>
							<li><a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>"><i class="fa fa-chevron-right"></i> Báo giá vách ngăn vệ sinh</a></li>
							<li><a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>"><i class="fa fa-chevron-right"></i> Báo giá vách ngăn di động</a></li>
							<li><a href="<?php echo base_url() . 'lien-he' ?>"><i class="fa fa-chevron-right"></i> Liên hệ tư vấn</a></li>
						</ul>
					</div>
				</div>

				<?php if (!empty($related_news)) { ?>
					<div class="sidebar-card">
						<div class="sidebar-card__header">
							<i class="fa fa-link"></i>
							<h5>Tin tức liên quan</h5>
						</div>
						<div class="sidebar-card__body">
							<div class="related-items">
								<?php foreach ($related_news as $index => $item) { ?>
									<div class="related-item">
										<div class="related-item__image">
											<a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>">
												<img src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="<?php echo $item['name'] ?>" class="img-responsive">
											</a>
										</div>
										<div class="related-item__content">
											<a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>" class="related-item__title"><?php echo $item['name'] ?></a>
											<p class="related-item__date"><i class="fa fa-calendar"></i> <?php echo date("M d, Y", strtotime($item['updated_at'])) ?></p>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>