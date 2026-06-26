<div id="app">
	<div>
		<div class="title-admin" style="float: left;">
			<h3 style="margin-top: 6px; font-size: 18px;">THÔNG TIN TÀI KHOẢN</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật thông tin tài khoản
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<form id="form-main" role="form" class="form-horizontal form-groups-bordered">
						<div class="row form-group">
							<?php if ($user['permission'] == 1) { ?>
								<label class="col-sm-3 control-label">Chọn tài khoản</label>
								<div class="col-sm-5">
									<select class="form-control" v-model="user_id" @change="changeUser()">
										<option v-for="(user, key) in users" :key="key" :value="user.id">{{ user.username }}</option>
									</select>
								</div>
							<?php } else { ?>
								<label class="col-sm-3 control-label">Tài khoản</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" v-model="user.username" readonly>
								</div>
							<?php } ?>

							<div class="col-sm-5">
								<span class="btn btn-danger" @click="showChangePasswordDialog()">Đổi mật khẩu</span>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Tên đầy đủ</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="user.full_name">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Điện thoại</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="user.phone_number">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Ảnh đại diện</label>
							<div class="col-sm-12">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 200px; height: 200px;" data-trigger="fileinput">
										<img :src="'<?php echo base_url() . IMAGE_UPLOAD_PATH ?>' + user.avatar" alt="avatar">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Chọn</span>
											<span class="fileinput-exists">Thay đổi</span>
											<input id="avatar" type="file" name="avatar" accept="image/*">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Xóa</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-xs-12" style="display: flex; justify-content: center;">
								<a class="btn btn-default btn-sm" href="<?php echo base_url() ?>admin" style="margin-right: 10px; font-size: 12px;">Trở về</a>
								<button class="btn btn-success" style="margin-left: 10px;" @click.prevent="save">&nbsp; Lưu &nbsp;</button>
							</div>
						</div>
					</form>
				</div>

			</div>

		</div>
	</div>

	<!-- Modal User -->
	<div class="modal fade" id="modal-user">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Đổi mật khẩu</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-1" class="control-label">Mật khẩu hiện tại</label>
								<input type="password" class="form-control" id="old-password">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-2" class="control-label">Mật khẩu mới</label>
								<input type="password" class="form-control" id="new-password">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="field-3" class="control-label">Nhập lại mật khẩu</label>
								<input type="password" class="form-control" id="re-password">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Trở về</button>
					<button @click="changePassword()" type="button" class="btn btn-info">Lưu</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var app = new Vue({
		el: '#app',
		data: {
			user_id: '',
			user: {
				id: '',
				username: '',
				full_name: '',
				phone_number: '',
				avatar: '',
			},
			users: []
		},
		mounted() {
			this.initData();
		},
		methods: {
			initData() {
				let data = <?php echo json_encode($user) ?>;
				if (data) {
					this.user_id = data.id;
					this.user.id = data.id;
					this.user.username = data.username;
					this.user.full_name = data.full_name;
					this.user.phone_number = data.phone_number;
					this.user.avatar = data.avatar;
				}
				this.users = <?php echo json_encode($users) ?>;
			},
			changeUser() {
				this.user = this.users.find(x => x.id == this.user_id);
			},
			save() {
				let formData = new FormData();
				formData.append('id', this.user.id);
				formData.append('username', this.user.username == null ? '' : this.user.username);
				formData.append('full_name', this.user.full_name == null ? '' : this.user.full_name);
				formData.append('phone_number', this.user.phone_number == null ? '' : this.user.phone_number);

				const avatar_file = $('#avatar').prop('files');
				if (avatar_file) {
					formData.append('avatar', avatar_file[0]);
				}

				axios({
						method: 'POST',
						url: '<?php echo base_url() ?>admin/account/update',
						headers: {
							'Content-Type': 'multipart/form-data'
						},
						data: formData
					})
					.then((response) => {
						toastr.success("Cập nhật thông tin thành công", "Thành công !", this.toastrOpts);
						window.location.reload();
					})
					.catch((error) => {
						console.log(error);
					});
			},
			showChangePasswordDialog() {
				$('#old-password').val('');
				$('#new-password').val('');
				$('#re-password').val('');
				jQuery('#modal-user').modal('show', {
					backdrop: 'static'
				});
			},
			changePassword() {
				let old_password = $('#old-password').val();
				let new_password = $('#new-password').val();
				let re_password = $('#re-password').val();
				if (!old_password || !new_password || !re_password) {
					toastr.error("Hãy nhập đầy đủ các mục!", "Thất bại !");
					return false;
				}
				if (new_password !== re_password) {
					toastr.error("Mật khẩu mới và xác nhận khác nhau!", "Thất bại !");
					return false;
				}
				let formData = new FormData();
				formData.append('id', this.user.id);
				formData.append('username', this.user.username == null ? '' : this.user.username);
				formData.append('old_password', old_password);
				formData.append('new_password', new_password);
				formData.append('re_password', re_password);

				axios({
						method: 'POST',
						url: '<?php echo base_url() ?>admin/account/update_password',
						headers: {
							'Content-Type': 'multipart/form-data'
						},
						data: formData
					})
					.then((response) => {
						if (response.data.success) {
							toastr.success("Cập nhật mật khẩu thành công!", "Thành công !");
							jQuery('#modal-user').modal('hide');
						} else
							toastr.error(response.data.message, "Thất bại !");
					})
					.catch((error) => {
						console.log(error);
					});
			}
		}
	})
</script>