<div>
	<div class="title-admin" style="float: left;">
		<h3 style="margin-top: 6px; font-size: 18px;">QUẢN LÝ HÌNH ẢNH</h3>
	</div>
	<div class="action-admin" style="float: right;">
		<input type="file" class="form-control file2 inline btn btn-success" multiple="1" onchange="uploadSlide(this)" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Upload Files" />
		<!-- <a class="btn btn-success" href="<?php echo base_url() ?>admin/slide/add">Thêm mới</a> -->
	</div>
</div>

<div class="table-wrapper">
	<table id="slide-table" class="table table-bordered datatable">
		<thead onclick="renewDatatable()">
			<tr>
				<th class="text-center" width="50px" style="vertical-align: middle;">
					Thứ tự
				</th>
				<th class="text-center" width="200px" style="vertical-align: middle;">
					Hình ảnh
				</th>
				<th style="vertical-align: middle;">
					Tên ảnh
				</th>
				<th class="text-center" width="100px" style="vertical-align: middle;">
					Ngày tạo
				</th>
				<th class="text-center" width="85px" style="vertical-align: middle;">
					Ẩn/Hiện
				</th>
				<th class="text-center" width="90px" style="vertical-align: middle;">
					Thao tác
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($slides as &$slide) { ?>
				<tr data-id="<?php echo $slide['id'] ?>">
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $slide['display_order'] ?></span>
						<input type="number" class="form-control" style="text-align: center;" value="<?php echo $slide['display_order'] ?>" data-id="<?php echo $slide['id'] ?>" onchange="updateDisplayOrder(this)" />
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<img src="<?php echo base_url() . SLIDE_UPLOAD_PATH . $slide['thumb'] ?>" class="img-rounded" style="width: 180px; height: 100px;">
					</td>
					<td style="vertical-align: middle;">
						<?php echo $slide['name'] ?>
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<?php echo substr($slide['created_at'], 0, 10) ?>
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $slide['is_enable'] ?></span>
						<input type="checkbox" <?php if ($slide['is_enable'] == 1) echo 'checked' ?> data-id="<?php echo $slide['id'] ?>" onclick="updateStatus(this)" />
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<a class="btn btn-danger btn-sm" data-id="<?php echo $slide['id'] ?>" data-name="<?php echo $slide['name'] ?>" onclick="showDeleteDialog(this)">Xóa</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<!-- Modal Confirm-->
<div class="modal fade" id="modal-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Xác nhận xóa</h4>
			</div>
			<div class="modal-body">
				Xác nhận xóa hình ảnh
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button id="delete-confirm" class="btn btn-danger" data-id='' onclick="deleteImages(this)">Delete</button>
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

	function uploadSlide(el) {
		let formData = new FormData();
		const files = $(el).prop('files');

		for (var i = 0; i < files.length; i++) {
			formData.append("files[]", files[i]);
		}

		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/slide/insert',
				headers: {
					'Content-Type': 'multipart/form-data'
				},
				data: formData
			})
			.then((response) => {
				toastr.success("Thêm hình ảnh thành công", "Thành công !", this.toastrOpts);
				window.location.reload();
			})
			.catch((response) => {
				console.log(response);
				toastr.error("Thêm hình ảnh thất bại", "Thất bại !", toastrOptions);
			});
	}

	function updateDisplayOrder(el) {
		const id = $(el).data('id');
		const display_order = $(el).val();
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/slide/update_display_order',
				data: {
					id: id,
					display_order: display_order
				}
			})
			.then((response) => {
				toastr.success("Cập nhật thông tin thành công", "Thành công !", toastrOptions);
			})
			.catch((response) => {
				toastr.error("Cập nhật thông tin thất bại", "Thất bại !", toastrOptions);
			});

		// Used sort 
		$(el).parent().children('span').text(display_order);
	}

	function updateStatus(el) {
		const id = $(el).data('id');
		const is_enable = $(el).prop("checked") ? 1 : 0
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/slide/update_status',
				data: {
					id: $(el).data('id'),
					is_enable: is_enable
				}
			})
			.then((response) => {
				toastr.success("Cập nhật trạng thái thành công", "Thành công !", toastrOptions);
			})
			.catch((response) => {
				toastr.error("Cập nhật trạng thái thất bại", "Thất bại !", toastrOptions);
			});

		// Used sort 
		$(el).parent().children('span').text(is_enable);
	}

	function showDeleteDialog(el) {
		selectedIds = new Array();
		selectedIds.push($(el).data('id'));
		$('.modal-body').html('Xác nhận xóa hình ảnh <b>' + $(el).data('name') + '</b>');
		$('#delete-confirm').attr('data-id', $(el).data('id'));
		$('#modal-delete').modal('show');
	}

	function deleteImages(el) {
		$('#modal-delete').modal('hide');
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/slide/delete',
				data: {
					ids: selectedIds
				}
			})
			.then((response) => {
				toastr.success("Xóa sản phẩm thành công", "Thành công !", toastrOptions);
				window.location.reload();
			})
			.catch((response) => {
				toastr.error("Xóa sản phẩm thất bại", "Thất bại !", toastrOptions);
			});
	}

	function renewDatatable() {
		datatable.rows().invalidate().draw();
	}
</script>

<style>
	#slide-table input[type="checkbox"] {
		width: 16px;
		height: 16px;
	}

	@media (max-width: 767px) {
		.table-wrapper {
			width: 100%;
			overflow: scroll;
		}

		.table-wrapper>.dataTables_wrapper {
			width: max-content;
		}
	}
</style>