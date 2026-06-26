<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="<?php echo base_url() ?>assets/grandy/images/favicon.png">

	<title>Login</title>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/neon/css/custom.css">

	<script src="<?php echo base_url() ?>assets/neon/js/jquery-1.11.3.min.js"></script>
</head>

<body class="page-body login-page login-form-fall">

	<!-- This is needed when you send requests via Ajax -->
	<script type="text/javascript">
		var baseurl = '<?php echo base_url() ?>';
	</script>

	<div class="login-container">

		<div class="login-header login-caret">

			<div class="login-content">
				<h1>
					<a href="#" class="logo">
						<span style="color: #f7f5f5;">ADMIN</span>
					</a>
				</h1>
				<p class="description">Dear user, log in to access the admin area!</p>

				<!-- progress bar indicator -->
				<div class="login-progressbar-indicator">
					<h3>43%</h3>
					<span>logging in...</span>
				</div>
			</div>

		</div>

		<div class="login-progressbar">
			<div></div>
		</div>

		<div class="login-form">

			<div class="login-content">

				<div class="form-login-error">
					<h3>Invalid login</h3>
					<p>The username or password you entered is incorrect. <br /> Please try again.</p>
				</div>

				<form method="post" role="form" id="form_login">

					<div class="form-group">

						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>

							<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
						</div>

					</div>

					<div class="form-group">

						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>

							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
						</div>

					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Login In
						</button>
					</div>

				</form>

			</div>

		</div>

	</div>


	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url() ?>assets/neon/js/gsap/TweenMax.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/joinable.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/resizeable.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/neon-api.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url() ?>assets/neon/js/neon-login.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url() ?>assets/neon/js/neon-custom.js"></script>

	<!-- Demo Settings -->
	<script src="<?php echo base_url() ?>assets/neon/js/neon-demo.js"></script>

</body>

</html>