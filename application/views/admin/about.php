<div id="app">
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						GIỚI THIỆU CÔNG TY
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<form id="form-main" role="form" class="form-horizontal form-groups-bordered">
						<div class="row form-group">
							<label class="col-sm-3 control-label">Tiêu đề</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="about.name">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Banner</label>
							<div class="col-sm-9">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: <?php echo ABOUT_IMAGE_WIDTH/2?>px; height: <?php echo ABOUT_IMAGE_HEIGHT/2?>px;" data-trigger="fileinput">
										<img src="<?php echo base_url() . POST_UPLOAD_PATH . $about['banner'] ?>" alt="banner">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%;"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Select image</span>
											<span class="fileinput-exists">Change</span>
											<input id="banner" type="file" name="..." accept="image/*">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Mô tả</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="about.description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Nội dung</label>
							<div class="col-sm-12">
								<textarea id='content' class="form-control ckeditor" v-model="about.content"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Keywords</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="about.meta_keyword">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="about.meta_description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-xs-12" style="display: flex; justify-content: center;">
								<a class="btn btn-default btn-sm" href="<?php echo base_url() ?>admin/about" style="margin-right: 10px; font-size: 12px;">Trở về</a>
								<button class="btn btn-success" style="margin-left: 10px;" @click.prevent="save">&nbsp Lưu &nbsp</button>
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
			about: {},
		},
		mounted() {
			this.initData();
		},
		methods: {
			initData() {
				this.about = <?php echo json_encode($about) ?>;
				console.log(this.about)
			},
			save() {
				let formData = new FormData();
				this.about.content = CKEDITOR.instances["content"].getData()
				formData.append('id', this.about.id);
				formData.append('name', this.about.name);
				formData.append('description', this.about.description);
				formData.append('content', this.about.content);
				formData.append('meta_keyword', this.about.meta_keyword);
				formData.append('meta_description', this.about.meta_description);
				const banner = $('#banner').prop('files');
				if (banner)
					formData.append('banner', banner[0]);

				axios({
						method: 'POST',
						url: '<?php echo base_url() ?>admin/about/update_about',
						headers: {
							'Content-Type': 'multipart/form-data'
						},
						data: formData
					})
					.then((response) => {
						toastr.success("Cập nhật thông tin thành công", "Thành công !", this.toastrOpts);
						window.location.reload();
					})
					.catch((response) => {
						console.log(response);
					});
			},
		}
	})
</script>