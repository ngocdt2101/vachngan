	<div class="row">
		<!-- Profile Info and Notifications -->
		<div class="col-md-6 col-sm-8 clearfix">
			<ul class="user-info pull-left pull-none-xsm">
				<!-- Profile Info -->
				<li class="profile-info dropdown">
					<!-- add class "pull-right" if you want to place this from right -->
					<a href="<?php echo base_url() ?>admin/account">
						<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $_SESSION['avatar'] ?>" alt="" class="img-circle" width="44" />
						<?php echo $_SESSION['full_name'] ?>
					</a>
				</li>
			</ul>
		</div>

		<!-- Raw Links -->
		<div class="col-md-6 col-sm-4 clearfix hidden-xs">
			<ul class="list-inline links-list pull-right">
				<li>
					<a href="<?php echo base_url() ?>" target="_blank">
						Website <i class="entypo-globe right"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url() ?>admin/login/logout">
						Đăng xuất <i class="entypo-logout right"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<hr />