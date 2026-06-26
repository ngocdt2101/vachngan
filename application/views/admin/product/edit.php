<div id="app">
	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Thêm danh mục sản phẩm
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<form id="form-main" role="form" class="form-horizontal form-groups-bordered">
						<div class="row form-group">
							<label class="col-sm-3 control-label">Tên sản phẩm</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="product.name">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Danh mục</label>
							<div class="col-sm-9">
								<select class="form-control" v-model="product.category_id">
									<option value=""></option>
									<?php foreach ($categories as $key => $category) { ?>
										<option value="<?php echo $category['id'] ?>"> <?php echo $category['name'] ?> </option>
									<?php }  ?>
								</select>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Giá</label>
							<div class="col-sm-2">
								<input type="number" min="0" step="10000" class="form-control" v-model="product.price" @change='changePrice'>
							</div>
							<!-- <label class="col-sm-2 control-label">Giá khuyến mãi</label>
							<div class="col-sm-2">
								<input type="number" min="0" step="10000" class="form-control" v-model="product.promotion_price" @change='changePromotionPrice'>
							</div>
							<label class="col-sm-1 control-label" style="text-align: right !important; padding-right: 0;" @change='changePromotionPrice'>%</label>
							<div class="col-sm-2">
								<input type="number" min="0" max="100" class="form-control" v-model="promotionPercent" @change='changepromotionPercent'>
							</div> -->
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Ảnh đại diện</label>
							<div class="col-sm-12">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 350px; height: <?php echo (int)(350 * PRODUCT_IMAGE_HEIGHT / PRODUCT_IMAGE_WIDTH) ?>px;" data-trigger="fileinput">
										<img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $product['thumb'] ?>" alt="avatar">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 350px; max-height: <?php echo (int)(350 * PRODUCT_IMAGE_HEIGHT / PRODUCT_IMAGE_WIDTH) ?>px"></div>
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
							<label class="col-sm-3 control-label">Ảnh kèm theo</label>
							<div class="col-sm-12">
								<div id="dZUpload" class="dropzone">
									<div class="dz-default dz-message">
									</div>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Mô tả</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="product.description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Nội dung</label>
							<div class="col-sm-12">
								<textarea id='content' class="form-control ckeditor" v-model="product.content"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-2 control-label">Số thứ tự</label>
							<div class="col-sm-3">
								<div class="input-spinner">
									<button type="button" class="btn btn-default" @click="displayOrderDown">-</button>
									<input type="text" class="form-control size-1" v-model="product.display_order" />
									<button type="button" class="btn btn-default" @click="displayOrderUp">+</button>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-3">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="product.is_enable">
									<label>Ẩn / Hiện</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="product.is_on_home">
									<label>Hiện trên trang chủ</label>
								</div>
							</div>
							<!-- <div class="col-sm-4">
								<div class="checkbox checkbox-replace color-primary">
									<input type="checkbox" v-model="product.is_hot">
									<label>Sản phẩm Hot</label>
								</div>
							</div> -->
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Keywords</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" v-model="product.meta_keyword">
							</div>
						</div>

						<div class="row form-group">
							<label class="col-sm-3 control-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" v-model="product.meta_description"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-xs-12" style="display: flex; justify-content: center;">
								<a class="btn btn-default btn-sm" href="<?php echo base_url() ?>admin/product" style="margin-right: 10px; font-size: 12px;">Trở về</a>
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
			product: {
				id: '',
				name: '',
				name_unsigned: '',
				description: '',
				content: '',
				category_id: '',
				is_enable: true,
				is_on_home: true,
				is_on_menu: true,
				is_new: true,
				is_hot: true,
				is_included_vat: true,
				display_order: 1,
				price: 0,
				promotion_price: 0,
				quantity: 0,
				warranty: 0,
				meta_keyword: '',
				meta_description: '',
				view_count: 0,
				image_ids: [],
			},
			promotionPercent: 0,
			dropzone: null
		},
		mounted() {
			this.initData();
			this.initDropzone();
		},
		methods: {
			initData() {
				let data = <?php echo json_encode($product) ?>;
				if (data) {
					this.product.id = data.id;
					this.product.name = data.name;
					this.product.name_unsigned = data.name_unsigned;
					this.product.description = data.description;
					this.product.content = data.content;
					this.product.category_id = data.category_id;
					this.product.is_enable = data.is_enable === 1 ? true : false;
					this.product.is_on_home = data.is_on_home === 1 ? true : false;
					this.product.is_on_menu = data.is_on_menu === 1 ? true : false;
					this.product.is_new = data.is_new === 1 ? true : false;
					this.product.is_hot = data.is_hot === 1 ? true : false;
					this.product.is_included_vat = data.is_included_vat === 1 ? true : false;
					this.product.display_order = data.display_order;
					this.product.price = data.price;
					this.product.promotion_price = data.promotion_price;
					this.product.quantity = data.quantity;
					this.product.warranty = data.warranty;
					this.product.meta_keyword = data.meta_keyword;
					this.product.meta_description = data.meta_description;
					this.product.avatar = data.avatar;
				}
			},
			save() {
				let formData = new FormData();
				this.product.content = CKEDITOR.instances["content"].getData();
				formData.append('id', this.product.id);
				formData.append('name', this.product.name == null ? '' : this.product.name);
				formData.append('name_unsigned', this.product.name_unsigned == null ? '' : this.product.name_unsigned);
				formData.append('description', this.product.description == null ? '' : this.product.description);
				formData.append('content', this.product.content == null ? '' : this.product.content);
				formData.append('category_id', this.product.category_id == null ? '' : this.product.category_id);
				formData.append('is_enable', this.product.is_enable ? 1 : 0);
				formData.append('is_on_home', this.product.is_on_home ? 1 : 0);
				formData.append('is_on_menu', this.product.is_on_menu ? 1 : 0);
				formData.append('is_new', this.product.is_new ? 1 : 0);
				formData.append('is_hot', this.product.is_hot ? 1 : 0);
				formData.append('is_included_vat', this.product.is_included_vat ? 1 : 0);
				formData.append('display_order', this.product.display_order == null ? '' : this.product.display_order);
				formData.append('price', this.product.price == null ? '' : this.product.price);
				formData.append('promotion_price', this.product.promotion_price == null ? '' : this.product.promotion_price);
				formData.append('quantity', this.product.quantity == null ? '' : this.product.quantity);
				formData.append('warranty', this.product.warranty == null ? '' : this.product.warranty);
				formData.append('meta_keyword', this.product.meta_keyword == null ? '' : this.product.meta_keyword);
				formData.append('meta_description', this.product.meta_description == null ? '' : this.product.meta_description);
				formData.append('image_ids', this.product.image_ids == null ? '' : this.product.image_ids);

				const avatar = $('#avatar').prop('files');
				if (avatar)
					formData.append('avatar', avatar[0]);

				axios({
						method: 'POST',
						url: '<?php echo base_url() ?>admin/product/update',
						headers: {
							'Content-Type': 'multipart/form-data'
						},
						data: formData
					})
					.then((response) => {
						toastr.success("Cập nhật sản phẩm thành công", "Thành công !");
						window.location.replace("<?php echo base_url() ?>admin/product");
					})
					.catch((response) => {
						console.log(response);
					});
			},
			displayOrderDown() {
				if (this.product.display_order > 0)
					this.product.display_order -= 1;
			},
			displayOrderUp() {
				this.product.display_order += 1;
			},
			initDropzone() {
				let vm = this;
				Dropzone.autoDiscover = false;
				vm.dropzone = new Dropzone('#dZUpload', {
					url: '<?php echo base_url() ?>admin/product/insert_image',
					paramName: 'image',
					maxFiles: 40,
					parallelUploads: 40,
					addRemoveLinks: true,
					autoProcessQueue: true,
					maxFilesize: 10,
					acceptedFiles: 'image/*',
					dictRemoveFile: 'Delete',
					dictFileTooBig: 'Image is larger than 10MB',
					timeout: 1000000,
					init() {
						axios({
								method: 'POST',
								url: '<?php echo base_url() ?>admin/product/select_image',
								data: {
									id: vm.product.id,
								}
							})
							.then((response) => {
								let images = response.data.images;
								$.each(images, (key, image) => {
									var mockFile = {
										id: image.id,
										name: image.name,
										path: "<?php echo base_url() . IMAGE_UPLOAD_PATH ?>" + image.thumb,
										size: '512'
									};
									vm.dropzone.displayExistingFile(mockFile, mockFile.path);
								});
							})
							.catch((error) => {
								console.log(error);
							});

						this.on("removedfile", (file) => {
							axios({
									method: 'POST',
									url: '<?php echo base_url() ?>admin/product/delete_image',
									data: {
										id: file.id
									}
								})
								.then((response) => {
									vm.product.image_ids.pop(file.id);
									toastr.success("Xóa hình ảnh thành công", "Thành công !");
								})
								.catch((error) => {
									console.log(error);
								});
						});
					},
					success(file, response) {
						let data = JSON.parse(response);
						vm.product.image_ids.push(data.id);
						file.id = data.id;
						file.previewElement.classList.add("dz-success");
					},
					error(file, error) {
						console.log(error);
						file.previewElement.classList.add("dz-error");
						$(file.previewElement).find('.dz-error-message').remove();
						// $(file.previewElement).find('.dz-error-message').text('Upload Fail!');
					}
				})
			},
			changePrice() {
				if (this.product.price && this.product.promotion_price) {
					this.promotionPercent = Math.round((this.product.price - this.product.promotion_price) * 100 / this.product.price)
				}
			},
			changePromotionPrice() {
				if (this.product.price && this.product.promotion_price) {
					this.promotionPercent = Math.round((this.product.price - this.product.promotion_price) * 100 / this.product.price)
				}
			},
			changepromotionPercent() {
				if (this.product.price) {
					this.product.promotion_price = Math.round(this.product.price - this.product.price * this.promotionPercent / 100);
				}
			}
		}
	})
</script>