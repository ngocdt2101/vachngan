<!-- Breadcrumb Navigation -->
<div class="breadcrumb-section">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb-list">
				<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Trang chủ</a></li>
				<li><a href="<?php echo base_url() . 'bao-gia' ?>"><i class="fa fa-file-text"></i> Báo giá</a></li>
				<li class="active"><?php echo $quotation['name'] ?></li>
			</ol>
		</nav>
	</div>
</div>

<section class="detail-hero">
	<div class="container">
		<div class="detail-header">
			<div class="detail-badge">
				<span class="badge-category"><i class="fa fa-tag"></i> Báo giá</span>
			</div>
			<h1><?php echo $quotation['name'] ?></h1>
			<div class="detail-meta">
				<span><i class="fa fa-calendar-o"></i> <?php echo date("M d, Y", strtotime($quotation['updated_at'])) ?></span>
			</div>
			<div class="detail-actions">
				<a href="tel:<?php echo isset($company['hotline']) ? $company['hotline'] : '#' ?>" class="btn btn-primary-gradient">
					<i class="fa fa-phone"></i> Liên hệ ngay
				</a>
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

					<!-- Content -->
					<div class="post-content">
						<?php echo $quotation['content'] ?>
					</div>

					<!-- CTA Section -->
					<div class="detail-cta">
						<div class="cta-content">
							<h3>Bạn quan tâm đến báo giá này?</h3>
							<p>Hãy liên hệ với chúng tôi để nhận thêm thông tin chi tiết và tư vấn</p>
						</div>
						<div class="cta-actions">
							<a href="tel:<?php echo isset($company['hotline']) ? $company['hotline'] : '#' ?>" class="btn btn-primary-gradient">
								<i class="fa fa-phone"></i> Gọi ngay
							</a>
							<a href="<?php echo base_url() . 'lien-he' ?>" class="btn btn-secondary-gradient">
								<i class="fa fa-envelope"></i> Gửi yêu cầu
							</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-md-3">
				<!-- Categories Card -->
				<div class="sidebar-card">
					<div class="sidebar-card__header">
						<i class="fa fa-folder-open"></i>
						<h5>Danh mục báo giá</h5>
					</div>
					<div class="sidebar-card__body">
						<ul class="category-list">
							<li><a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-tam-compact' ?>"><i class="fa fa-chevron-right"></i> Báo giá tấm Compact</a></li>
							<li><a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>"><i class="fa fa-chevron-right"></i> Báo giá vách ngăn vệ sinh</a></li>
							<li><a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>"><i class="fa fa-chevron-right"></i> Báo giá vách ngăn di động</a></li>
						</ul>
					</div>
				</div>

				<!-- Related Quotations Card -->
				<?php if (!empty($related_quotations)) { ?>
					<div class="sidebar-card">
						<div class="sidebar-card__header">
							<i class="fa fa-link"></i>
							<h5>Báo giá liên quan</h5>
						</div>
						<div class="sidebar-card__body">
							<div class="related-items">
								<?php foreach ($related_quotations as $index => $item) { ?>
									<div class="related-item">
										<div class="related-item__image">
											<a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>">
												<img src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt="<?php echo $item['name'] ?>" class="img-responsive">
											</a>
										</div>
										<div class="related-item__content">
											<a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="related-item__title"><?php echo $item['name'] ?></a>
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