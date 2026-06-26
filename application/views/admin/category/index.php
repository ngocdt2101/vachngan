<div class="clearfix" style="margin-bottom: 10px;">
	<div class="title-admin" style="float: left;">
		<h3 style="margin-top: 6px; font-size: 18px;">QUẢN LÝ DANH MỤC SẢN PHẨM</h3>
	</div>
	<div class="action-admin" style="float: right;">
		<a class="btn btn-success" href="<?php echo base_url() ?>admin/category/add">Thêm mới</a>
	</div>
</div>

<div class="table-wrapper">
	<table id="main-table" class="table table-bordered datatable">
		<thead onclick="renewDatatable()">
			<tr>
				<th class="text-center" width="50px" style="vertical-align: middle;">
					Thứ tự
				</th>
				<th style="vertical-align: middle;">
					Tên danh mục
				</th>
				<th class="text-center" width="115px" style="vertical-align: middle;">
					Ngày cập nhật
				</th>
				<th class="text-center" width="85px" style="vertical-align: middle;">
					Ẩn/Hiện
				</th>
				<!-- <th class="text-center" width="85px" style="vertical-align: middle;">
					Hiện trang chủ
				</th>
				<th class="text-center" width="85px" style="vertical-align: middle;">
					Nổi bật
				</th> -->
				<th class="text-center" width="90px" style="vertical-align: middle;">
					Thao tác
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categories as $item) { ?>
				<tr data-id="<?php echo $item['id'] ?>">
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['display_order'] ?></span>
						<input type="number" class="form-control" style="text-align: center;" value="<?php echo $item['display_order'] ?>" data-id="<?php echo $item['id'] ?>" onchange="updateDisplayOrder(this)" />
					</td>
					<td style="vertical-align: middle;">
						<a href="<?php echo base_url() ?>admin/category/edit/<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<?php echo substr($item['updated_at'], 0, 10) ?>
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['is_enable'] ?></span>
						<input type="checkbox" <?php if ($item['is_enable'] === 1) echo 'checked' ?> class="update-status" data-id="<?php echo $item['id'] ?>" onclick="updateStatus(this)" />
					</td>
					<!-- <td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['is_on_home'] ?></span>
						<input type="checkbox" <?php if ($item['is_on_home'] === 1) echo 'checked' ?> data-id="<?php echo $item['id'] ?>" onclick="updateShowOnHome(this)" />
					</td>
					<td class="text-center" style="vertical-align: middle;">
						<span class="hidden"><?php echo $item['is_hot'] ?></span>
						<input type="checkbox" <?php if ($item['is_hot'] === 1) echo 'checked' ?> data-id="<?php echo $item['id'] ?>" onclick="updateIsHot(this)" />
					</td> -->
					<td class="text-center" style="vertical-align: middle;">
						<a class="btn btn-blue btn-sm" href="<?php echo base_url() ?>admin/category/edit/<?php echo $item['id'] ?>">Xem</a>
						<a data-id="<?php echo $item['id'] ?>" data-name="<?php echo $item['name'] ?>" class="btn btn-danger btn-sm" onclick="showDeleteDialog(this)">Xóa</a>
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
				Xác nhận xóa danh mục
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button id="delete-confirm" class="btn btn-danger" data-id='' onclick="deleteCategory(this)">Delete</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	let datatable;
	let selectedIds;
	$(document).ready(function() {
		datatable = $('#main-table').DataTable({
			responsive: false,
			lengthMenu: [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			destroy: true,
			columnDefs: [{
					"targets": 0,
					"type": 'html-num'
				},
				{
					"targets": 4,
					"orderable": false
				}
			]
		});

		$('#main-table').closest('.dataTables_wrapper').find('select').select2({
			minimumResultsForSearch: -1
		});
	});

	function updateDisplayOrder(el) {
		const id = $(el).data('id');
		const display_order = $(el).val();
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/category/update_display_order',
				data: {
					id: id,
					display_order: display_order
				}
			})
			.then((response) => {
				toastr.success("Cập nhật thông tin thành công", "Thành công !");
			})
			.catch((response) => {
				toastr.error("Cập nhật thông tin thất bại", "Thất bại !");
			});
		$(el).parent().children('span').text(is_enable);
	}

	function updateIsHot(el) {
		const id = $(el).data('id');
		const is_hot = $(el).prop("checked") ? 1 : 0
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/category/update_is_hot',
				data: {
					id: $(el).data('id'),
					is_hot: is_hot
				}
			})
			.then((response) => {
				toastr.success("Cập nhật trạng thái thành công", "Thành công !");
			})
			.catch((response) => {
				toastr.error("Cập nhật trạng thái thất bại", "Thất bại !");
			});
		$(el).parent().children('span').text(is_hot);
	}

	function updateShowOnHome(el) {
		const id = $(el).data('id');
		const is_on_home = $(el).prop("checked") ? 1 : 0
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/category/update_show_on_home',
				data: {
					id: $(el).data('id'),
					is_on_home: is_on_home
				}
			})
			.then((response) => {
				toastr.success("Cập nhật trạng thái thành công", "Thành công !");
			})
			.catch((response) => {
				toastr.error("Cập nhật trạng thái thất bại", "Thất bại !");
			});
		$(el).parent().children('span').text(is_on_home);
	}

	function updateStatus(el) {
		const id = $(el).data('id');
		const is_enable = $(el).prop("checked") ? 1 : 0
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/category/update_status',
				data: {
					id: $(el).data('id'),
					is_enable: is_enable
				}
			})
			.then((response) => {
				toastr.success("Cập nhật trạng thái thành công", "Thành công !");
			})
			.catch((response) => {
				toastr.error("Cập nhật trạng thái thất bại", "Thất bại !");
			});
		$(el).parent().children('span').text(is_enable);
	}

	function showDeleteDialog(el) {
		selectedIds = new Array();
		selectedIds.push($(el).data('id'));
		$('.modal-body').html('Xác nhận xóa danh mục <b>' + $(el).data('name') + '</b>');
		$('#delete-confirm').attr('data-id', $(el).data('id'));
		$('#modal-delete').modal('show');
	}

	function deleteCategory(el) {
		$('#modal-delete').modal('hide');
		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/category/delete_category',
				data: {
					ids: selectedIds
				}
			})
			.then((response) => {
				toastr.success("Cập nhật trạng thái thành công", "Thành công !");
				window.location.reload();
			})
			.catch((response) => {
				toastr.error("Cập nhật trạng thái thất bại", "Thất bại !");
			});
	}

	function renewDatatable() {
		datatable.rows().invalidate().draw();
	}
</script>