<!DOCTYPE html>
<html lang="vi">

<head>

	<!-- Required Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="index, follow">
	<title><?php echo isset($title) ? $title : $company['meta_keyword'] ?></title>
	<meta name="keywords" content="<?php echo isset($meta_keyword) ? $meta_keyword : $company['meta_keyword'] ?>">
	<meta name="description" content="<?php echo isset($meta_description) ? $meta_description : $company['meta_description'] ?>">
	<meta property="og:type" content="<?php echo isset($meta_og['type']) ? $meta_og['type'] : 'article' ?>">
	<meta property="og:title" content="<?php echo isset($meta_og['title']) ? $meta_og['title'] : $company['meta_keyword'] ?>">
	<meta property="og:description" content="<?php echo isset($meta_og['description']) ? $meta_og['description'] : $company['meta_description'] ?>">
	<meta property="og:image" content="<?php echo isset($meta_og['image']) ? $meta_og['image'] : base_url() . 'assets/frontend/img/compact_logo.png' ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontend/img/favicon.svg" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url() ?>assets/frontend/img/favicon.svg" type="image/x-icon">

	<!-- StyleSheets -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/theme.css?v=1.0">


	<!-- Google Analytics -->
	<?php echo $company['google_analytics'] ?>

</head>

<body>

	<div class="main-wrapper site-shell">
		<?php $this->load->view('header')
		?>

		<?php
		if (isset($is_show_slide) && $is_show_slide == true) {
			$this->load->view('slide');
		}
		?>

		<?php $this->load->view($subview) ?>

		<?php $this->load->view('footer') ?>
	</div>

	<!-- scrollToTop start -->
	<div class="progress-wrap active-progress" style="display: none !important;">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
				style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
			</path>
		</svg>
	</div>
	<!-- scrollToTop end -->

	<!-- Call Now -->
	<a href="tel:<?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?>" class="phone-call">
		<img src="<?php echo base_url() ?>assets/frontend/img/call-now-200.png" width="32" alt="Call Now" title="Call Now">
	</a>

	<!-- Zalo Chat -->
	<a href="https://zalo.me/<?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['zalo_chat']))) ?>" target="_blank">
		<div class="zalo-chat">
			<img src="<?php echo base_url() ?>assets/frontend/img/zalo_icon.png" width="55" alt="zalo_icon">
		</div>
	</a>

	<!-- Facebook Chat -->
	<?php echo $company['facebook_chat'] ?>

	<!-- Footer Setting -->
	<?php echo $company['footer_setting'] ?>

	<!-- GO TO TOP  -->
	<!-- <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> -->
	<!-- GO TO TOP End -->

	<!-- JavaScripts -->
	<script src="<?php echo base_url() ?>assets/frontend/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/js/jquery.fancybox.min.js"></script>
	<script>
		(function($) {
			function isMobileMenu() {
				if (window.matchMedia) {
					return window.matchMedia('(max-width: 767px)').matches;
				}
				return window.innerWidth <= 767;
			}

			$(document).on('click', '.site-navbar__menu > li.dropdown > a.dropdown-toggle', function(e) {
				if (!isMobileMenu()) {
					return;
				}

				e.preventDefault();
				e.stopPropagation();
				if (e.stopImmediatePropagation) {
					e.stopImmediatePropagation();
				}

				var $trigger = $(this);
				var $parent = $trigger.parent('li.dropdown');
				var $submenu = $parent.children('.dropdown-menu');
				var willOpen = !$parent.hasClass('open');

				$parent
					.siblings('.dropdown.open')
					.removeClass('open')
					.children('.dropdown-menu')
					.stop(true, true)
					.slideUp(160);

				$parent.toggleClass('open', willOpen);
				$trigger.attr('aria-expanded', willOpen ? 'true' : 'false');
				$submenu.stop(true, true)[willOpen ? 'slideDown' : 'slideUp'](160);
			});

			$('#nav-open-btn').on('hide.bs.collapse', function() {
				$(this).find('li.dropdown.open').removeClass('open').children('.dropdown-menu').hide();
				$(this).find('a.dropdown-toggle').attr('aria-expanded', 'false');
			});

			$(window).on('resize', function() {
				if (!isMobileMenu()) {
					$('#nav-open-btn').find('li.dropdown.open').removeClass('open');
					$('#nav-open-btn').find('.dropdown-menu').removeAttr('style');
					$('#nav-open-btn').find('a.dropdown-toggle').attr('aria-expanded', 'false');
				}
			});
		})(jQuery);
	</script>

	<script>
		(function($) {
			var $slider = $('#heroSlider');
			if (!$slider.length) return;

			var $items = $slider.find('.hero-slider__item');
			var $dots = $slider.find('.hero-slider__dot');
			var $bar = $slider.find('.hero-slider__progress-bar');
			var total = $items.length;
			var current = 0;
			var DURATION = 5000;
			var timer, barAnim;

			function restartItemAnimations($item) {
				/* Force reflow so CSS animations replay on re-activation */
				$item.find('.hero-slider__bg, .hero-main__eyebrow, .hero-main__content h1, .hero-main__content p, .hero-main__actions').each(function() {
					this.style.animation = 'none';
					void this.offsetWidth; /* reflow */
					this.style.animation = '';
				});
			}

			function startProgressBar() {
				if (!$bar.length) return;
				$bar.css({
					transition: 'none',
					width: '0%'
				});
				void $bar[0].offsetWidth;
				$bar.css({
					transition: 'width ' + DURATION + 'ms linear',
					width: '100%'
				});
			}

			function goTo(index, dir) {
				if (index === current) return;
				var $outgoing = $items.eq(current);
				$dots.eq(current).removeClass('active');
				$outgoing.removeClass('active');

				current = (index + total) % total;
				var $incoming = $items.eq(current);

				restartItemAnimations($incoming);
				$incoming.addClass('active');
				$dots.eq(current).addClass('active');
				startProgressBar();
			}

			function startAuto() {
				startProgressBar();
				timer = setInterval(function() {
					goTo(current + 1);
				}, DURATION);
			}

			function resetAuto() {
				clearInterval(timer);
				startAuto();
			}

			$slider.find('.hero-slider__arrow--prev').on('click', function() {
				goTo(current - 1);
				resetAuto();
			});
			$slider.find('.hero-slider__arrow--next').on('click', function() {
				goTo(current + 1);
				resetAuto();
			});
			$dots.on('click', function() {
				goTo($(this).data('index'));
				resetAuto();
			});

			/* Touch / swipe */
			var touchStartX = 0;
			$slider[0].addEventListener('touchstart', function(e) {
				touchStartX = e.changedTouches[0].clientX;
			}, {
				passive: true
			});
			$slider[0].addEventListener('touchend', function(e) {
				var dx = e.changedTouches[0].clientX - touchStartX;
				if (Math.abs(dx) > 40) {
					goTo(dx < 0 ? current + 1 : current - 1);
					resetAuto();
				}
			}, {
				passive: true
			});

			startAuto();
		})(jQuery);
	</script>

</body>

</html>