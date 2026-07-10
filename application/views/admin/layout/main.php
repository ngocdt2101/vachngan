<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="noindex">
	<meta name="description" content="Admin System" />
	<meta name="author" content="Ngoc Developer" />
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/frontend/img/story.png">
	<title><?php echo isset($title) ? $title : 'Admin System' ?></title>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/js/dropzone-5.7.0/dist/dropzone.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/js/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/js/datatables/jquery.dataTables.min.css">

	<script src="<?php echo base_url() ?>assets/neon/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/dropzone-5.7.0/dist/dropzone.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/toastr.js"></script>

	<!-- development version, includes helpful console warnings -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->

	<!-- product version -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

	<!-- Axios -->
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body class="page-body">
	<div class="page-container">

		<!-- Sidebar -->
		<?php $this->load->view('admin/layout/sidebar'); ?>

		<div class="main-content">
			<!-- Header -->
			<?php $this->load->view('admin/layout/header'); ?>

			<!-- Sub view -->
			<?php $this->load->view($subview); ?>

			<!-- Footer -->
			<footer class="main">
				&copy; 2021 Admin Theme by <a href="#">DTN</a>
			</footer>
		</div>
	</div>

	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url() ?>assets/neon/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/joinable.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/resizeable.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/fileinput.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/neon-api.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url() ?>assets/neon/js/neon-custom.js"></script>

	<!-- My Settings -->
	<script src="<?php echo base_url() ?>assets/neon/js/my-script.js"></script>

</body>

</html>