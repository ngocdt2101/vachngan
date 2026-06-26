<div id="app">
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Thêm bài viết
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<form id="form-main" role="form" class="form-horizontal form-groups-bordered" class="validate">
						<div class="row form-group">
							<label class="col-sm-3 control-label">Tiêu đề</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" v-model="post.name">
							</div>
						</div>

						<!-- <div class="row form-group">
							<label class="col-sm-3 control-label">Danh mục</label>
							<div class="col-sm-9">
								<select class="form-control" v-model="post.category_id">
									<option value=""></option>
									<?php foreach ($categories as $key => $category) { ?>
										<?php if ($category['name_unsigned'] != 'san-pham') { ?>
											<option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
										<?php }  ?>
									<?php }  ?>
								</select>
							</div>
						</div> -->

						<div class="row form-group">
							<label class="col-sm-3 control-label">Mô tả</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="post.description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Nội dung</label>
							<div class="col-sm-12">
								<textarea id='content' class="form-control ckeditor" v-model="post.content"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Ảnh đại diện</label>
							<div class="col-sm-12">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 350px; height: <?php echo (int)(350 * POST_IMAGE_HEIGHT / POST_IMAGE_WIDTH) ?>px;" data-trigger="fileinput">
										<img src="https://via.placeholder.com/350x<?php echo (int)(350 * POST_IMAGE_HEIGHT / POST_IMAGE_WIDTH) ?>" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 350px; max-height: <?php echo (int)(350 * POST_IMAGE_HEIGHT / POST_IMAGE_WIDTH) ?>px"></div>
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
						</div>

						<div class="row form-group">
							<label class="col-sm-2 control-label">Số thứ tự</label>
							<div class="col-sm-3">
								<div class="input-spinner">
									<button type="button" class="btn btn-default" @click="displayOrderDown">-</button>
									<input type="text" class="form-control size-1" v-model="post.display_order" />
									<button type="button" class="btn btn-default" @click="displayOrderUp">+</button>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-3">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="post.is_enable">
									<label>Ẩn / Hiện</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="post.is_on_home">
									<label>Hiện trang chủ</label>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Keywords</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="post.meta_keyword">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="post.meta_description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Tags</label>
							<div class="col-sm-9">
								<textarea id='content' class="form-control" v-model="post.tags"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-xs-12" style="display: flex; justify-content: center;">
								<a class="btn btn-default btn-sm" href="<?php echo base_url() ?>admin/news" style="margin-right: 10px; font-size: 12px;">Trở về</a>
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
			post: {
				id: '',
				name: '',
				category_id: '',
				description: '',
				content: '',
				is_enable: true,
				is_on_home: false,
				is_hot: true,
				display_order: 1,
				meta_keyword: '',
				meta_description: '',
				tags: ''
			}
		},
		methods: {
			save() {
				let validator = this.validate();
				if (validator) {
					let formData = new FormData();
					this.post.content = CKEDITOR.instances["content"].getData()
					formData.append('name', this.post.name == null ? '' : this.post.name);
					formData.append('category_id', this.post.category_id == null ? '' : this.post.category_id);
					formData.append('description', this.post.description == null ? '' : this.post.description);
					formData.append('content', this.post.content == null ? '' : this.post.content);
					formData.append('is_enable', this.post.is_enable ? 1 : 0);
					formData.append('is_on_home', this.post.is_on_home ? 1 : 0);
					formData.append('is_hot', this.post.is_hot ? 1 : 0);
					formData.append('display_order', this.post.display_order == null ? '' : this.post.display_order);
					formData.append('meta_keyword', this.post.meta_keyword == null ? '' : this.post.meta_keyword);
					formData.append('meta_description', this.post.meta_description == null ? '' : this.post.meta_description);
					formData.append('tags', this.post.tags == null ? '' : this.post.tags);

					const params = new URLSearchParams(window.location.search)
					const type = params.get('type');
					formData.append('type', type);

					const avatar = $('#avatar').prop('files');
					if (avatar)
						formData.append('avatar', avatar[0]);

					axios({
							method: 'POST',
							url: '<?php echo base_url() ?>admin/post/insert',
							headers: {
								'Content-Type': 'multipart/form-data'
							},
							data: formData
						})
						.then((response) => {
							toastr.success("Thêm bài viết thành công", "Thành công !");
							window.location.replace("<?php echo base_url() ?>admin/post/" + type);
						})
						.catch((error) => {
							console.log(error);
						});
				}
			},
			validate() {
				$("#form-main").validate({
					rules: {
						"name": {
							required: true,
							maxlength: 512
						}
					},
					messages: {
						"name": {
							required: "Bắt buộc nhập Tiêu đề",
							maxlength: "Hãy nhập tối đa 512 ký tự"
						}
					}
				});
				return $("#form-main").valid();
			},
			displayOrderDown() {
				if (this.post.display_order > 0)
					this.post.display_order -= 1;
			},
			displayOrderUp() {
				this.post.display_order += 1;
			}
		}
	})
</script>