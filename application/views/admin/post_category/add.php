<div id="app">
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Thêm danh mục cho bài viết
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<form id="form-main" role="form" class="form-horizontal form-groups-bordered" class="validate">
						<div class="row form-group">
							<label class="col-sm-3 control-label">Tên danh mục</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" v-model="category.name">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Mô tả</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="category.description"></textarea>
							</div>
						</div>

						<!-- <div class="row form-group">
							<label class="col-sm-3 control-label">Ảnh đại diện</label>
							<div class="col-sm-12">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 350px; height: <?php echo (int)(350 * POST_CATEGORY_IMAGE_HEIGHT / POST_CATEGORY_IMAGE_WIDTH) ?>px;" data-trigger="fileinput">
										<img src="https://via.placeholder.com/350x<?php echo (int)(350 * POST_CATEGORY_IMAGE_HEIGHT / POST_CATEGORY_IMAGE_WIDTH) ?>" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 350px; max-height: <?php echo (int)(350 * POST_CATEGORY_IMAGE_HEIGHT / POST_CATEGORY_IMAGE_WIDTH) ?>px"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Select image</span>
											<span class="fileinput-exists">Change</span>
											<input id="avatar" type="file" name="..." accept="image/*">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div>
							</div>
						</div> -->

						<div class="row form-group">
							<label class="col-sm-2 control-label">Số thứ tự</label>
							<div class="col-sm-3">
								<div class="input-spinner">
									<button type="button" class="btn btn-default" @click="category.display_order > 0 ? category.display_order -= 1 : category.display_order = 0">-</button>
									<input type="text" class="form-control size-1" v-model="category.display_order" />
									<button type="button" class="btn btn-default" @click="category.display_order += 1">+</button>
								</div>
							</div>
							<!-- <div class="col-sm-3">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="category.is_enable">
									<label>Ẩn / Hiện</label>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="category.is_on_home">
									<label>Hiện trang chủ</label>
								</div>
							</div> -->
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Keyword</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="category.meta_keyword">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="category.meta_description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-xs-12" style="display: flex; justify-content: center;">
								<button class="btn btn-default" style="margin-right: 10px;" @click.prevent="back">&nbsp; Trở về &nbsp;</button>
								<button class="btn btn-success" style="margin-left: 10px;" @click.prevent="save">&nbsp;&nbsp; Lưu &nbsp;&nbsp;</button>
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
			category: {
				id: '',
				name: '',
				level: 0,
				parent_id: 0,
				description: '',
				display_order: 1,
				is_enable: true,
				is_on_home: true,
				is_hot: true,
				meta_keyword: '',
				meta_description: '',
			}
		},
		methods: {
			save() {
				const validator = this.validate();
				if (validator) {
					let formData = new FormData();
					formData.append('name', this.category.name);
					formData.append('level', this.category.level);
					formData.append('parent_id', this.category.parent_id == null ? '' : this.category.parent_id);
					formData.append('description', this.category.description == null ? '' : this.category.description);
					formData.append('display_order', this.category.display_order == null ? '' : this.category.display_order);
					formData.append('is_enable', this.category.is_enable ? 1 : 0);
					formData.append('is_on_home', this.category.is_on_home ? 1 : 0);
					formData.append('is_hot', this.category.is_hot ? 1 : 0);
					formData.append('meta_keyword', this.category.meta_keyword == null ? '' : this.category.meta_keyword);
					formData.append('meta_description', this.category.meta_description == null ? '' : this.category.meta_description);

					// const avatar = $('#avatar').prop('files');
					// if (avatar)
					// 	formData.append('avatar', avatar[0]);

					axios({
							method: 'POST',
							url: '<?php echo base_url() ?>admin/postCategory/insert',
							headers: {
								'Content-Type': 'multipart/form-data'
							},
							data: formData
						})
						.then((response) => {
							toastr.success("Thêm danh mục thành công", "Thành công !");
							window.location.replace("<?php echo base_url() ?>admin/postCategory");
						})
						.catch((error) => {
							console.log(error);
							toastr.error("Thêm danh mục thất bại", "Thất bại !");
						});
				}
			},
			back() {
				window.location.replace("<?php echo base_url() ?>admin/postCategory");
			},
			validate() {
				$("#form-main").validate({
					rules: {
						"name": {
							required: true,
							maxlength: 255
						}
					},
					messages: {
						"name": {
							required: "Bắt buộc nhập tên Danh mục",
							maxlength: "Hãy nhập tối đa 255 ký tự"
						}
					}
				});
				return $("#form-main").valid();
			}
		}
	})
</script>