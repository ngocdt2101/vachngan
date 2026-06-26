<!-- add class "sidebar-collapsed" to close sidebar by default -->
<div class="sidebar-menu">

	<div class="sidebar-menu-inner">

		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo base_url() . 'admin' ?>">
					<!-- <img src="<?php echo base_url() ?>assets/neon/images/logo@2x.png" width="120" alt="" /> -->
					<span style="font-size: 22px; color: #fff; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN</span>
				</a>
			</div>

			<!-- logo collapse icon -->
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation">
					<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>

			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation">
					<!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

		</header>

		<ul id="main-menu" class="main-menu multiple-expanded auto-inherit-active-class">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- add class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<li>
				<a href="<?php echo base_url() ?>admin">
					<i class="entypo-gauge"></i>
					<span class="title">Trang chủ</span>
				</a>
			</li>
			<!-- <li class="has-sub<?php if ($this->uri->segment(2) == 'category') echo ' opened' ?>">
				<a href="#">
					<i class="entypo-window"></i>
					<span class="title">Danh mục sản phẩm</span>
				</a>
				<ul>
					<li class="<?php if ($this->uri->segment(2) == 'category' && strpos($this->uri->segment(3), 'level_0') !== false) echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/category/level_0">
							<i class="entypo-flow-line"></i>
							<span class="title">Danh mục cấp I</span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(2) == 'category' && strpos($this->uri->segment(3), 'level_1') !== false) echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/category/level_1">
							<i class="entypo-flow-parallel"></i>
							<span class="title">Danh mục cấp II</span>
						</a>
					</li>
				</ul>
			</li> -->
			<!-- <li class="<?php if ($this->uri->segment(2) == 'product') echo 'active' ?>">
				<a href="<?php echo base_url() ?>admin/product">
					<i class="entypo-bag"></i>
					<span class="title">Sản phẩm</span>
				</a>
			</li> -->
			<li class="has-sub<?php if (in_array($this->uri->segment(2), array("category", "product"))) echo ' opened' ?>">
				<a href="#">
					<i class="entypo-window"></i>
					<span class="title">Quản lý sản phẩm</span>
				</a>
				<ul>
					<li class="<?php if ($this->uri->segment(2) == 'category') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/category">
							<i class="entypo-flow-line"></i>
							<span class="title">Danh mục sản phẩm</span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(2) == 'product') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/product">
							<i class="entypo-bag"></i>
							<span class="title">Sản phẩm</span>
						</a>
					</li>
				</ul>
			</li>

			<li class="has-sub<?php if (in_array($this->uri->segment(2), array("postCategory", "post", "quotation", "quotation2", "quotation3"))) echo ' opened' ?>">
				<a href="#">
					<i class="entypo-vcard"></i>
					<span class="title">Quản lý bài viết</span>
				</a>
				<ul>
					<li class="<?php if ($this->uri->segment(2) == 'postCategory') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/postCategory">
							<i class="entypo-calendar"></i>
							<span class="title">Danh mục</span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(2) == 'quotation') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/quotation ">
							<i class="entypo-calendar"></i>
							<span class="title">Báo giá tấm compact</span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(2) == 'quotation2') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/quotation2 ">
							<i class="entypo-calendar"></i>
							<span class="title">Báo giá vách vệ sinh</span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(2) == 'quotation3') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/quotation3 ">
							<i class="entypo-calendar"></i>
							<span class="title">Báo giá vách di động</span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(2) == 'post' && $this->uri->segment(3) == 'news') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/post/news">
							<i class="entypo-docs"></i>
							<span class="title">Tin Tức</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="has-sub<?php if (in_array($this->uri->segment(2), array("slide", "banner"))) echo ' opened' ?>">
				<a href="">
					<i class="entypo-picture"></i>
					<span class="title">Hình ảnh</span>
				</a>
				<ul>
					<li class="<?php if ($this->uri->segment(2) == 'slide') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/slide">
							<i class="entypo-docs"></i>
							<span class="title">Slide</span>
						</a>
					</li>
					<!-- <li class="<?php if ($this->uri->segment(2) == 'banner') echo 'active' ?>">
						<a href="<?php echo base_url() ?>admin/banner">
							<i class="entypo-layout"></i>
							<span class="title">Banner</span>
						</a>
					</li> -->
				</ul>
			</li>
			<li class="<?php if ($this->uri->segment(2) == 'about') echo 'active' ?>">
				<a href="<?php echo base_url() ?>admin/about">
					<i class="entypo-info-circled"></i>
					<span class="title">Giới thiệu</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(2) == 'company') echo 'active' ?>">
				<a href="<?php echo base_url() ?>admin/company">
					<i class="entypo-shareable"></i>
					<span class="title">Thông tin công ty</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(2) == 'account') echo 'active' ?>">
				<a href="<?php echo base_url() ?>admin/account">
					<i class="entypo-cog"></i>
					<span class="title">Tài khoản</span>
				</a>
			</li>
		</ul>

	</div>

</div>