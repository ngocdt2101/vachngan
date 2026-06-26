<!-- <div class="row">
	<div class="col-sm-4">
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="{{}}" data-postfix="" data-duration="1500" data-delay="0">0</div>
			<h3>Lượt truy cập</h3>
			<p>Tổng số lượt truy cập Website của bạn trong tháng</p>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="400" data-postfix="" data-duration="1500" data-delay="500">0</div>
			<h3>Đơn hàng</h3>
			<p>Tổng số đơn hàng mới trong tháng</p>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="100" data-postfix="" data-duration="1500" data-delay="1000">0</div>
			<h3>Liện hệ mới</h3>
			<p>Tổng số liên hệ mới từ khách hàng</p>
		</div>
	</div>
</div> -->
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default panel-shadow">
			<div class="panel-heading">
				<div id="panel-title" class="panel-title">Biểu đồ thống kê số lượt truy cập trong tháng</div>
			</div>
			<div class="panel-body">
				<div class="graph-container">
					<div id="hero-bar" class="graph"></div>
				</div>
			</div>
		</div>

	</div>
</div>

<script src="<?php echo base_url() ?>assets/neon/js/raphael-min.js"></script>
<script src="<?php echo base_url() ?>assets/neon/js/morris.min.js"></script>
<script>
	$(document).ready(function() {
		const now = new Date();
		const year = now.getFullYear();
		const month = now.getMonth() + 1;
		const title = 'Thống kê lượng truy cập Website của bạn trong tháng ' + month +'/' + year;
		$('#panel-title').text(title);

		axios({
				method: 'POST',
				url: '<?php echo base_url() ?>admin/home/count_visiter',
				data: {
					year: year,
					month: month
				}
			})
			.then((response) => {
				const charData = response.data.charData
				Morris.Bar({
					element: 'hero-bar',
					data: charData,
					xkey: 'key',
					ykeys: ['value'],
					labels: ['Lượt truy cập'],
					barRatio: 0.4,
					xLabelAngle: 35,
					hideHover: 'auto',
					// barColors:['#485671']
				})
			})
			.catch((error) => {
				console.log(error);
			});
	})
</script>