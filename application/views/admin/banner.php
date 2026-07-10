<div id="app">
	<div>
		<div class="title-admin" style="float: left;">
			<h3 style="margin-top: 6px; font-size: 18px;">QUẢN LÝ BANNER</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật banner Trang Chủ 1
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">

					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner1', 500, 500)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner1)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner1['thumb'] ?>" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } else { ?>
							<img src="https://via.placeholder.com/200x200" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } ?>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Tiêu đề</label>
						<div class="col-sm-9">
							<textarea id="banner1-title" class="form-control" rows="2"><?php echo $banner1['title'] ?></textarea>
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Mô tả</label>
						<div class="col-sm-9">
							<textarea id="banner1-description" class="form-control" rows="2"><?php echo $banner1['description'] ?></textarea>
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Link</label>
						<div class="col-sm-9">
							<input id="banner1-link" type="text" class="form-control" value="<?php echo $banner1['link'] ?>">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-xs-12" style="display: flex; justify-content: center;">
							<button class="btn btn-success" style="margin-left: 10px;" onclick="UpdateBannerInfo('banner1', $('#banner1-link').val(), $('#banner1-title').val(), $('#banner1-description').val())">&nbsp Lưu &nbsp</button>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
					Cập nhật banner Trang Chủ 2
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">

					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner2', 500, 500)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner2)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner2['thumb'] ?>" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } else { ?>
							<img src="https://via.placeholder.com/200x200" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } ?>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Tiêu đề</label>
						<div class="col-sm-9">
							<textarea id="banner2-title" class="form-control" rows="4"><?php echo $banner2['title'] ?></textarea>
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Mô tả</label>
						<div class="col-sm-9">
							<textarea id="banner2-description" class="form-control" rows="4"><?php echo $banner2['description'] ?></textarea>
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Link</label>
						<div class="col-sm-9">
							<input id="banner2-link" type="text" class="form-control" value="<?php echo $banner2['link'] ?>">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-xs-12" style="display: flex; justify-content: center;">
							<button class="btn btn-success" style="margin-left: 10px;" onclick="UpdateBannerInfo('banner2', $('#banner2-link').val(), $('#banner2-title').val(), $('#banner2-description').val())">&nbsp Lưu &nbsp</button>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
					Cập nhật banner Trang Chủ 3
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">

					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner3', 500, 500)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner3)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner3['thumb'] ?>" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } else { ?>
							<img src="https://via.placeholder.com/200x200" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } ?>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Link</label>
						<div class="col-sm-9">
							<input id="banner3-link" type="text" class="form-control" value="<?php echo $banner3['link'] ?>">
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Tiêu đề</label>
						<div class="col-sm-9">
							<textarea id="banner3-title" class="form-control" rows="2"><?php echo $banner3['title'] ?></textarea>
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-3 control-label">Mô tả</label>
						<div class="col-sm-9">
							<textarea id="banner3-description" class="form-control" rows="2"><?php echo $banner3['description'] ?></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-xs-12" style="display: flex; justify-content: center;">
							<button class="btn btn-success" style="margin-left: 10px;" onclick="UpdateBannerInfo('banner3', $('#banner3-link').val(), $('#banner3-title').val(), $('#banner3-description').val())">&nbsp Lưu &nbsp</button>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật banner trang chủ 4
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">
					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner4', 500, 500)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner4)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner4['thumb'] ?>" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } else { ?>
							<img src="<?php echo base_url() . 'assets/ecome/img/banner/h5_b1.jpg' ?>" class="img-rounded" style="width: 200px; height: 200px;">
						<?php } ?>
					</div>
				</div>

				<div class="row form-group">
					<label class="col-sm-3 control-label">Link</label>
					<div class="col-sm-9">
						<input id="banner4-link" type="text" class="form-control" value="<?php echo $banner4['link'] ?>">
					</div>
				</div>

				<div class="row form-group">
					<label class="col-sm-3 control-label">Tiêu đề</label>
					<div class="col-sm-9">
						<textarea id="banner4-title" class="form-control" rows="2"><?php echo $banner4['title'] ?></textarea>
					</div>
				</div>

				<div class="row form-group">
					<label class="col-sm-3 control-label">Mô tả</label>
					<div class="col-sm-9">
						<textarea id="banner4-description" class="form-control" rows="2"><?php echo $banner4['description'] ?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-xs-12" style="display: flex; justify-content: center;">
						<button class="btn btn-success" style="margin-left: 10px;" onclick="UpdateBannerInfo('banner4', $('#banner4-link').val(), $('#banner4-title').val(), $('#banner4-description').val())">&nbsp Lưu &nbsp</button>
					</div>
				</div>
			</div>

			<!-- Cập nhật banner trang liên hệ -->
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật banner trang liên hệ
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">
					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner5', 1680, 900)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner5)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner5['thumb'] ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } else { ?>
							<img src="<?php echo base_url() . 'assets/ecome/img/banner/h5_b1.jpg' ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } ?>
					</div>
				</div>
			</div>

			<!-- Cập nhật banner trang sản phẩm -->
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật banner trang sản phẩm
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">
					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner6', 1680, 900)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner6)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner6['thumb'] ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } else { ?>
							<img src="<?php echo base_url() . 'assets/ecome/img/banner/h5_b1.jpg' ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } ?>
					</div>
				</div>
			</div>

			<!-- Cập nhật banner trang báo giá -->
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật banner trang báo giá
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">
					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner7', 1680, 900)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner7)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner7['thumb'] ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } else { ?>
							<img src="<?php echo base_url() . 'assets/ecome/img/banner/h5_b1.jpg' ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } ?>
					</div>
				</div>
			</div>

			<!-- Cập nhật banner trang tin tức-->
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Cập nhật banner trang tin tức
					</div>
					<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					</div>
				</div>
				<div class="panel-body" style="padding-left: 20px;">
					<div class="row" style="margin-bottom: 10px;">
						<input type="file" class="form-control file2 inline btn btn-success" onchange="UploadImage(this, 'banner8', 1680, 900)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Select Image" />
					</div>
					<div class="row" style="margin-bottom: 50px;">
						<?php if (isset($banner8)) { ?>
							<img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner8['thumb'] ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } else { ?>
							<img src="<?php echo base_url() . 'assets/ecome/img/banner/h5_b1.jpg' ?>" class="img-rounded" style="width: 840px; height: 450px;">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	let datatable;
	let selectedIds = new Array();
	$(document).ready(function() {
		// Initialize DataTable
		datatable = $('#slide-table').DataTable({
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			destroy: true,
			order: [0, "asc"],
			columnDefs: [{
					"targets": 1,
					"orderable": false
				},
				{
					"targets": 5,
					"orderable": false
				}
			]
		});

		$('#product-category-table').closest('.dataTables_wrapper').find('select').select2({
			minimumResultsForSearch: -1
		});
	});

	function UploadImage(el, type, width, height) {
		let formData = new FormData();
		const files = $(el).prop('files');
		console.log(files);
		if (files.length > 0) {
			formData.append("image", files[0]);
			formData.append("type", type);
			formData.append("width", width);
			formData.append("height", height);

			axios({
					method: 'POST',
					url: '<?php echo base_url() ?>admin/banner/UploadBannerImage',
					headers: {
						'Content-Type': 'multipart/form-data'
					},
					data: formData
				})
				.then((response) => {
					toastr.success("Cập nhật thành công", "Thành công !", this.toastrOpts);
					window.location.reload();
				})
				.catch((response) => {
					console.log(response);
					toastr.error("Cập nhật thất bại", "Thất bại !", toastrOptions);
				});
		}
	}

	function UpdateBannerInfo(type, link, title, description, is_enable = true) {
		let formData = new FormData();
		formData.append("type", type);
		formData.append("link", link);
		formData.append("title", title);
		formData.append("description", description);
		formData.append("is_enable", is_enable ? "1" : "0");

		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/banner/UpdateBannerInfo',
				headers: {
					'Content-Type': 'multipart/form-data'
				},
				data: formData
			})
			.then((response) => {
				toastr.success("Cập nhật thành công", "Thành công !", this.toastrOpts);
				window.location.reload();
			})
			.catch((response) => {
				console.log(response);
				toastr.error("Cập nhật thất bại", "Thất bại !", toastrOptions);
			});
	}
</script>