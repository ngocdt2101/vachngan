<section class="blog-single padding-top-30 padding-bottom-60">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<!-- Blog Post -->
				<div class="blog-post">
					<article>
						<div>
							<span>By: <strong>Administrator</strong></span>
							<span><i class="fa fa-bookmark-o"></i> <?php echo date("M", strtotime($quotation['updated_at'])) ?> <?php echo date("d", strtotime($quotation['updated_at'])) ?>, <?php echo date("Y", strtotime($quotation['updated_at'])) ?></span>
						</div>
						<h5><?php echo $quotation['name'] ?></h5>
					<div class="post-content" style="all: revert;">
							<?php echo $quotation['content'] ?>
						</div>
					</article>
				</div>
			</div>

			<!-- Side Bar -->
			<div class="col-md-3">
				<div class="shop-side-bar">

					<!-- Search -->
					<div class="search">
						<form>
							<label>
								<input type="email" placeholder="Search here">
							</label>
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					<!-- Categories -->
					<h6><img src="<?php echo base_url() ?>assets/listee/img/details-icon.svg" alt="details-icon"> Danh mục</h6>
					<div class="checkbox checkbox-primary">
						<ul>
							<li> <a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-tam-compact' ?>"> Báo giá tấm Compact </a> </li>
							<li> <a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>"> Báo giá vách ngăn vệ sinh </a> </li>
							<li> <a href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-di-dong' ?>"> Báo giá vách ngăn di động </a> </li>
						</ul>
					</div>

					<!-- Recent Posts -->
					<h6><img src="<?php echo base_url() ?>assets/listee/img/category-icon.svg" alt="details-icon"> Báo giá liên quan</h6>
					<div class="recent-post">
						<?php foreach ($related_quotations as $index => $item) { ?>
							<div class="media">
								<div class="media-left"> <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"><img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a> </div>
								<div class="media-body"> <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"><?php echo $item['name'] ?></a> <span><?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?> </span></div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>