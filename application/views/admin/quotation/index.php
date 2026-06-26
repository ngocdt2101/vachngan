<div>
	<div class="title-admin" style="float: left;">
		<h3 style="margin-top: 6px; font-size: 18px;">QUẢN LÝ BÁO GIÁ</h3>
	</div>
	<div class="action-admin" style="float: right;">
		<a class="btn btn-success" href="<?php echo base_url() ?>admin/quotation/add">Thêm mới</a>
		<button id="delete-all" class="btn btn-danger" style="margin-left: 5px; width: 80px;" onclick="deleteSelected()">Xóa</button>
	</div>
</div>

<div class="table-wrapper">
	<table id="posts-table" class="table table-bordered datatable">
		<thead onclick="renewDatatable()">
			<tr>
				<th class="text-center" width="50px" style="padding-right: 10px; vertical-align: middle;">
					<input type="checkbox" id="select-all" onchange="selectAll(this)">
				</th>
				<th class="text-center" width="50px" style="vertical-align: middle;">
					Thứ tự
				</th>
				<th style="vertical-align: middle;">
					Tiêu đề
				</th>
				<th class="text-center" width="85px" style="vertical-align: middle;">
					Ẩn/Hiện
				</th>
				<th class="text-center" width="100px" style="vertical-align: middle;">
					Hiện Trang Chủ
				</th>
				<th class="text-center" width="90px" style="vertical-align: middle;">
					Thao tác
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($quotations as &$item) { ?>
				<tr data-id="<?php echo $item['id'] ?>">
					<td class="text-center" style="vertical-align: middle;">
						<input type="checkbox" class="select-item" data-id="<?php echo $item['id'] ?>">
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['display_order'] ?></span>
						<input type="number" class="form-control" style="text-align: center;" value="<?php echo $item['display_order'] ?>" data-id="<?php echo $item['id'] ?>" onchange="updateDisplayOrder(this)" />
					</td>
					<td style="vertical-align: middle;">
						<a href="<?php echo base_url() ?>admin/quotation/edit/<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['is_enable'] ?></span>
						<input type="checkbox" <?php if ($item['is_enable'] == 1) echo 'checked' ?> data-id="<?php echo $item['id'] ?>" onclick="updateStatus(this)" />
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['is_on_home'] ?></span>
						<input type="checkbox" <?php if ($item['is_on_home'] == 1) echo 'checked' ?> data-id="<?php echo $item['id'] ?>" onclick="updateShowOnHome(this)" />
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<a class="btn btn-blue btn-sm" href="<?php echo base_url() ?>admin/quotation/edit/<?php echo $item['id'] ?>">Xem</a>
						<a class="btn btn-danger btn-sm" data-id="<?php echo $item['id'] ?>" data-name="<?php echo $item['name'] ?>" onclick="showDeleteDialog(this)">Xóa</a>
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
				Xác nhận xóa báo giá
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button id="delete-confirm" class="btn btn-danger" data-id='' onclick="deletePost(this)">Delete</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	let datatable;
	let selectedIds = new Array();
	$(document).ready(function() {
		// Initialize DataTable
		datatable = $('#posts-table').DataTable({
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			destroy: true,
			order: [1, "asc"],
			columnDefs: [{
					"targets": 0,
					"orderable": false
				},
				{
					"targets": 1,
					"type": 'html-num'
				},
				{
					"targets": 5,
					"orderable": false
				}
			]
		});
	});

	function updateDisplayOrder(el) {
		const id = $(el).data('id');
		const display_order = $(el).val();
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/quotation/update_display_order',
				data: {
					id: id,
					display_order: display_order
				}
			})
			.then((response) => {
				toastr.success("Cập nhật số thứ tự thành công", "Thành công !", toastrOptions);
			})
			.catch((response) => {
				toastr.error("Cập nhật số thứ tự thất bại", "Thất bại !", toastrOptions);
			});

		// Used sort 
		$(el).parent().children('span').text(display_order);
	}

	function updateStatus(el) {
		const id = $(el).data('id');
		const is_enable = $(el).prop("checked") ? 1 : 0
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/quotation/update_status',
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

	function updateShowOnHome(el) {
		let id = $(el).data('id');
		let is_on_home = $(el).prop("checked") ? 1 : 0
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/quotation/update_show_on_home',
				data: {
					id: $(el).data('id'),
					is_on_home: is_on_home
				}
			})
			.then((response) => {
				toastr.success("Cập nhật trạng thái thành công", "Thành công !", toastrOptions);
			})
			.catch((response) => {
				toastr.error("Cập nhật trạng thái thất bại", "Thất bại !", toastrOptions);
			});

		// Used sort
		$(el).parent().children('span').text(is_on_home);
	}

	function showDeleteDialog(el) {
		selectedIds = new Array();
		selectedIds.push($(el).data('id'));
		$('.modal-body').html('Xác nhận xóa <b>' + $(el).data('name') + '</b>');
		$('#delete-confirm').attr('data-id', $(el).data('id'));
		$('#modal-delete').modal('show');
	}

	function deletePost(el) {
		$('#modal-delete').modal('hide');
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/quotation/delete',
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

		// // Remove html
		// selectedIds.forEach((id) => {
		// 	let row = $('#posts-table tr[data-id="' + id + '"]').remove();
		// })
	}

	function selectAll(el) {
		// Uncheck checkboxes for all rows (all Page)
		datatable.rows({
			page: 'all'
		}).nodes().each((tr) => {
			$(tr).find('.select-item').prop("checked", false)
		})

		// Check/uncheck checkboxes for all rows in the table
		if ($(el).prop("checked"))
			datatable.rows({
				page: 'current',
				search: 'applied'
			}).nodes().each((tr) => {
				$(tr).find('.select-item').prop("checked", true)
			})
	}

	// Click Multi Delete Button
	function deleteSelected() {
		selectedIds = new Array();

		datatable.rows({
			page: 'all'
		}).nodes().each((tr) => {
			const el = $(tr).find('.select-item')
			if (el.prop("checked")) {
				selectedIds.push(el.data('id'))
			}
		})

		// Show Delete Dialog
		if (selectedIds.length > 0) {
			$('.modal-body').html('Xác nhận xóa sản phẩm');
			$('#modal-delete').modal('show');
		}
	}

	function renewDatatable() {
		datatable.rows().invalidate().draw();
	}
</script>

<style>
	#posts-table input[type="checkbox"] {
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