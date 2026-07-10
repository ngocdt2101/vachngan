<section class="contactusform-section">
	<!-- Header Section -->
	<div class="contact-hero">
		<div class="container">
			<div class="contact-header">
				<h2><span>Liên</span> Hệ Với Chúng Tôi</h2>
				<p>Chúng tôi luôn sẵn sàng hỗ trợ và trả lời các câu hỏi của bạn</p>
			</div>
		</div>
	</div>

	<!-- Contact Cards Section -->
	<div class="container">
		<div class="contact-cards-wrapper">
			<!-- Address Card -->
			<div class="contact-card">
				<div class="contact-card__icon">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M24 2C15.2 2 8 9.2 8 18C8 28 24 46 24 46S40 28 40 18C40 9.2 32.8 2 24 2ZM24 25C19.6 25 16 21.4 16 17C16 12.6 19.6 9 24 9C28.4 9 32 12.6 32 17C32 21.4 28.4 25 24 25Z" fill="currentColor"/>
					</svg>
				</div>
				<div class="contact-card__content">
					<h4>Địa Chỉ</h4>
					<p><?php echo $company['address'] ?></p>
				</div>
			</div>

			<!-- Phone Card -->
			<div class="contact-card">
				<div class="contact-card__icon">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M41 4H7C4.8 4 3 5.9 3 8.1V39.9C3 42.1 4.8 44 7 44H41C43.2 44 45 42.1 45 39.9V8.1C45 5.9 43.2 4 41 4ZM24 40C21.9 40 20.25 38.35 20.25 36.25C20.25 34.15 21.9 32.5 24 32.5C26.1 32.5 27.75 34.15 27.75 36.25C27.75 38.35 26.1 40 24 40ZM43 36H5V8H43V36Z" fill="currentColor"/>
					</svg>
				</div>
				<div class="contact-card__content">
					<h4>Điện Thoại</h4>
					<p><a href="tel:<?php echo $company['hotline'] ?>"><?php echo $company['hotline'] ?></a></p>
				</div>
			</div>

			<!-- Email Card -->
			<div class="contact-card">
				<div class="contact-card__icon">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M42 8H6C3.8 8 2.1 9.9 2.1 12L2 36C2 38.1 3.8 40 6 40H42C44.2 40 46 38.1 46 36V12C46 9.9 44.2 8 42 8ZM42 12L24 21.5L6 12H42ZM42 36H6V16L24 25.5L42 16V36Z" fill="currentColor"/>
					</svg>
				</div>
				<div class="contact-card__content">
					<h4>Email</h4>
					<p><a href="mailto:<?php echo $company['email'] ?>"><?php echo $company['email'] ?></a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- Maps Section -->
	<div class="map-section">
		<div class="map-area">
			<div class="container-fluid m-0 p-0">
				<?php echo $company['coordinate'] ?>
			</div>
		</div>
	</div>
</section>