<div id="app">
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Thêm báo giá
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
									<div class="fileinput-new thumbnail" style="width: 600px; height: 450px;" data-trigger="fileinput">
										<img src="http://placehold.it/600x450" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 600px; max-height: 450px"></div>
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
									<label>Hiện trên trang chủ</label>
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
							<div class="col-xs-12" style="display: flex; justify-content: center;">
								<a class="btn btn-default btn-sm" href="<?php echo base_url() ?>admin/quotation2" style="margin-right: 10px; font-size: 12px;">Trở về</a>
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
				name_unsigned: '',
				description: '',
				content: '',
				is_enable: true,
				is_on_home: true,
				is_hot: true,
				display_order: 1,
				meta_keyword: '',
				meta_description: '',
				view_count: 0,
			}
		},
		methods: {
			save() {
				let validator = this.validate();
				if (validator) {
					let formData = new FormData();
					this.post.content = CKEDITOR.instances["content"].getData()
					this.post.name_unsigned = this.normalizeString(this.post.name)

					formData.append('name', this.post.name == null ? '' : this.post.name);
					formData.append('name_unsigned', this.post.name_unsigned == null ? '' : this.post.name_unsigned);
					formData.append('description', this.post.description == null ? '' : this.post.description);
					formData.append('content', this.post.content == null ? '' : this.post.content);
					formData.append('is_enable', this.post.is_enable ? 1 : 0);
					formData.append('is_on_home', this.post.is_on_home ? 1 : 0);
					formData.append('is_hot', this.post.is_hot ? 1 : 0);
					formData.append('display_order', this.post.display_order == null ? '' : this.post.display_order);
					formData.append('meta_keyword', this.post.meta_keyword == null ? '' : this.post.meta_keyword);
					formData.append('meta_description', this.post.meta_description == null ? '' : this.post.meta_description);
					formData.append('view_count', this.post.view_count == null ? '' : this.post.view_count);

					const avatar = $('#avatar').prop('files');
					if (avatar)
						formData.append('avatar', avatar[0]);

					axios({
							method: 'POST',
							url: '<?php echo base_url() ?>admin/quotation2/insert',
							headers: {
								'Content-Type': 'multipart/form-data'
							},
							data: formData
						})
						.then((response) => {
							toastr.success("Thêm báo giá thành công", "Thành công !");
							window.location.replace("<?php echo base_url() ?>admin/quotation2");
						})
						.catch((response) => {
							console.log(response);
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
			},
			normalizeString(value) {
				value = value.trim();
				if (value) {
					const map = {
						'a': 'ă|â|A|Ă|Â|á|ắ|ấ|Á|Ắ|Ấ|à|ằ|ầ|À|Ằ|Ầ|ã|ẵ|ẫ|Ã|Ẵ|Ẫ|ả|ẳ|ẩ|Ả|Ẳ|Ẩ|ạ|ặ|ậ|Ạ|Ặ|Ậ',
						'e': 'ê|E|Ê|é|ế|É|Ế|è|ề|È|Ề|ẹ|ệ|Ẹ|Ệ|ẽ|ễ|Ẽ|Ễ|ẻ|ể|Ẻ|Ể',
						'i': 'I|í|Í|ì|Ì|ĩ|Ĩ|ỉ|Ỉ|ị|Ị',
						'o': 'ô|ơ|O|Ô|Ơ|ó|ố|ớ|Ó|Ố|Ớ|ò|ồ|ờ|Ò|Ồ|Ờ|ọ|ộ|ợ|Ọ|Ộ|Ợ|ỏ|ổ|ở|Ỏ|Ổ|Ở|õ|ỗ|ỡ|Õ|Ỗ|Ỡ',
						'u': 'ư|U|Ư|ú|ứ|Ú|Ứ|ù|ừ|Ù|Ừ|ũ|ữ|Ũ|Ữ|ử|ử|Ủ|Ử|ụ|ự|Ụ|Ự|ủ',
						'd': 'd|D|đ|Đ',
						'-': ' |	'
					};
					let str = value.toLowerCase();
					for (var pattern in map) {
						str = str.replace(new RegExp(map[pattern], 'g'), pattern);
					};
					str = str.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
					console.log(str);
					return str;
				} else
					return '';
			}
		}
	})
</script>