<div class="pushmenu menu-home5">
	<div class="menu-push">
		<span class="close-left js-close"><i class="icon-close f-20" style="font-size: 28px;"></i></span>
		<div class="clearfix"></div>
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo base_url() ?>tim-kiem" onsubmit="if ($('#mobile-keyword').val().trim() == '') return false">
			<div>
				<label class="screen-reader-text" for="mobile-keyword"></label>
				<input id="mobile-keyword" type="text" placeholder="Nhập từ khóa tìm kiếm" value="" name="tukhoa" autocomplete="off">
				<button id="searchsubmit" type="submit"><i class="ion-ios-search-strong"></i></button>
			</div>
		</form>
		<ul class="nav-home5 js-menubar">
			<li class="level1"><a href="<?php echo base_url() ?>">Trang Chủ</a></li>
			<li class="level1"><a href="<?php echo base_url() . 'gioi-thieu' ?>">Giới Thiệu</a></li>
			<li class="level1 dropdown"><a href="#">Sản Phẩm</a>
				<span class="icon-sub-menu"></span>
				<div class="menu-level1 js-open-menu">
					<ul class="level1">
						<?php foreach ($categories as $category) { ?>
							<li class="level2">
								<a href="<?php echo base_url() . 'danh-muc-san-pham/' . $category['name_unsigned'] ?>"><?php echo $category['name'] ?></a>
								<ul class="menu-level-2">
									<?php foreach ($category['sub_categories'] as $sub_category) { ?>
										<li class="level3"><a href="<?php echo base_url() . 'danh-muc-san-pham/' . $sub_category['name_unsigned'] ?>" title=""><?php echo $sub_category['name'] ?></a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
					<div class="clearfix"></div>
				</div>
			</li>
			<li class="level1"><a href="<?php echo base_url() . 'bao-gia' ?>">Báo Giá</a></li>
			<li class="level1"><a href="<?php echo base_url() . 'tin-tuc' ?>">Tin Tức</a></li>
			<li class="level1"><a href="<?php echo base_url() . 'lien-he' ?>">Liên Hệ</a></li>
		</ul>
	</div>
</div>