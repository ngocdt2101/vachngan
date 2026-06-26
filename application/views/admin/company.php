<div id="app">
	<div>
		<div class="title-admin" style="float: left;">
			<h3 style="margin-top: 6px; font-size: 18px;">THÔNG TIN CÔNG TY</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật thông tin công ty
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<form id="form-main" role="form" class="form-horizontal form-groups-bordered">
						<div class="row form-group">
							<label class="col-sm-3 control-label">Tên công ty</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.name">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Mã số thuế</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.tax_code">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.sologan">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Hotline</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" v-model="company.hotline">
							</div>
							<label class="col-sm-3 control-label">Điện thoại</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" v-model="company.phone_number">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.email">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Địa chỉ</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.address">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Google Map</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="company.coordinate"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Keywords</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.meta_keyword">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="company.meta_description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Fanpage</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="company.facebook">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Facebook Chat</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="company.facebook_chat"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Zalo Chat</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="company.zalo_chat"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Script head</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="company.google_analytics"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Script body</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="15" v-model="company.footer_setting"></textarea>
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
</div>

<script>
	var app = new Vue({
		el: '#app',
		data: {
			company: {
				id: '',
				name: '',
				sologan: '',
				logo: '',
				banner: '',
				favicon: '',
				hotline: '',
				phone_number: '',
				mobile_number: '',
				tax_code: '',
				email: '',
				address: '',
				coordinate: '',
				description: '',
				footer_setting: '',
				content: '',
				facebook: '',
				zalo: '',
				twitter: '',
				youtube: '',
				google_analytics: '',
				zalo_chat: '',
				facebook_chat: '',
				chat: '',
				meta_keyword: '',
				meta_description: ''
			},
		},
		mounted() {
			this.initData();
		},
		methods: {
			initData() {
				let data = <?php echo json_encode($company) ?>;
				if (data) {
					this.company.id = data.id;
					this.company.name = data.name;
					this.company.sologan = data.sologan;
					this.company.hotline = data.hotline;
					this.company.phone_number = data.phone_number;
					this.company.mobile_number = data.mobile_number;
					this.company.tax_code = data.tax_code;
					this.company.email = data.email;
					this.company.address = data.address;
					this.company.coordinate = data.coordinate;
					this.company.description = data.description;
					this.company.footer_setting = data.footer_setting;
					this.company.content = data.content;
					this.company.facebook = data.facebook;
					this.company.zalo = data.zalo;
					this.company.twitter = data.twitter;
					this.company.youtube = data.youtube;
					this.company.google_analytics = data.google_analytics;
					this.company.zalo_chat = data.zalo_chat;
					this.company.facebook_chat = data.facebook_chat;
					this.company.chat = data.chat;
					this.company.meta_keyword = data.meta_keyword;
					this.company.meta_description = data.meta_description;
				}
			},
			save() {
				let formData = new FormData();
				formData.append('id', this.company.id);
				formData.append('name', this.company.name == null ? '' : this.company.name);
				formData.append('sologan', this.company.sologan == null ? '' : this.company.sologan);

				const logo_file = $('#logo').prop('files');
				if (logo_file) {
					formData.append('logo', logo_file[0]);
				}

				const banner_file = $('#banner').prop('files');
				if (banner_file) {
					formData.append('banner', banner_file[0]);
				}

				formData.append('hotline', this.company.hotline == null ? '' : this.company.hotline);
				formData.append('phone_number', this.company.phone_number == null ? '' : this.company.phone_number);
				formData.append('mobile_number', this.company.mobile_number == null ? '' : this.company.mobile_number);
				formData.append('tax_code', this.company.tax_code == null ? '' : this.company.tax_code);
				formData.append('email', this.company.email == null ? '' : this.company.email);
				formData.append('address', this.company.address == null ? '' : this.company.address);
				formData.append('coordinate', this.company.coordinate == null ? '' : this.company.coordinate);
				formData.append('description', this.company.description == null ? '' : this.company.description);
				formData.append('footer_setting', this.company.footer_setting == null ? '' : this.company.footer_setting);
				formData.append('content', this.company.content == null ? '' : this.company.content);
				formData.append('facebook', this.company.facebook == null ? '' : this.company.facebook);
				formData.append('zalo', this.company.zalo == null ? '' : this.company.zalo);
				formData.append('twitter', this.company.twitter == null ? '' : this.company.twitter);
				formData.append('youtube', this.company.youtube == null ? '' : this.company.youtube);
				formData.append('google_analytics', this.company.google_analytics == null ? '' : this.company.google_analytics);
				formData.append('zalo_chat', this.company.zalo_chat == null ? '' : this.company.zalo_chat);
				formData.append('facebook_chat', this.company.facebook_chat == null ? '' : this.company.facebook_chat);
				formData.append('chat', this.company.chat == null ? '' : this.company.chat);
				formData.append('meta_keyword', this.company.meta_keyword == null ? '' : this.company.meta_keyword);
				formData.append('meta_description', this.company.meta_description == null ? '' : this.company.meta_description);

				axios({
						method: 'POST',
						url: '<?php echo base_url() ?>admin/company/update',
						headers: {
							'Content-Type': 'multipart/form-data'
						},
						data: formData
					})
					.then((response) => {
						toastr.success("Cập nhật thông tin thành công", "Thành công !");
						window.location.reload();
					})
					.catch((error) => {
						console.log(error);
					});
			}
		}
	})
</script>