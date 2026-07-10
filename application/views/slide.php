<?php
$heroSlide = (is_array($slides) && !empty($slides)) ? $slides[0] : null;
$heroImage = $heroSlide ? base_url() . SLIDE_UPLOAD_PATH . $heroSlide['thumb'] : base_url() . 'assets/frontend/img/menu-vs.jpg';
$projectItems = (is_array($products_on_home) && !empty($products_on_home)) ? array_slice($products_on_home, 0, 4) : array();
?>

<section class="hero-showcase">
  <div class="container">
    <div class="hero-layout">
      <div class="hero-main" style="background-image:url('<?php echo $heroImage ?>');">
        <div class="hero-main__shade"></div>
        <div class="hero-main__content">
          <span class="hero-main__eyebrow">Viet Compact</span>
          <h1>CHUYÊN GIA THI CÔNG VÁCH NGĂN VỆ SINH COMPACT</h1>
          <p>Giải pháp bền bỉ, thẩm mỹ cao, chịu nước 100% cho mọi công trình.</p>
          <div class="hero-main__actions">
            <a class="btn btn-hero" href="<?php echo base_url() . 'lien-he' ?>">NHẬN BÁO GIÁ TRỌN GÓI</a>
            <a class="btn btn-hero btn-hero--ghost" href="<?php echo base_url() . 'gioi-thieu' ?>">XEM NĂNG LỰC</a>
          </div>
        </div>
      </div>

      <div class="hero-side">
        <div class="hero-panel">
          <div class="hero-panel__title">Giải Pháp &amp; Sản Phẩm</div>
          <div class="hero-solution-grid">
            <a class="solution-card" href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-tam-compact' ?>">
              <div class="solution-card__thumb" style="background-image:url('<?php echo base_url() ?>assets/frontend/img/menu-tc.jpg');"></div>
              <div class="solution-card__body">
                <strong>VÁCH NGĂN COMPACT HPL</strong>
                <span>Đa dạng màu sắc, phụ kiện, tối ưu không gian.</span>
              </div>
              <div class="solution-card__cta">Xem Chi Tiết</div>
            </a>
            <a class="solution-card" href="<?php echo base_url() . 'danh-muc-bao-gia/bao-gia-vach-ngan-ve-sinh' ?>">
              <div class="solution-card__thumb" style="background-image:url('<?php echo base_url() ?>assets/frontend/img/menu-vs.jpg');"></div>
              <div class="solution-card__body">
                <strong>PHỤ KIỆN VÁCH NGĂN</strong>
                <span>Bộ sưu tập phụ kiện cao cấp, đồng bộ, bền bỉ.</span>
              </div>
              <div class="solution-card__cta">Khám Phá Ngay</div>
            </a>
          </div>
        </div>

        <div class="hero-panel">
          <div class="hero-panel__title">Dự án đã thi công</div>
          <div class="project-mini-grid">
            <?php foreach ($projectItems as $item) { ?>
              <a class="project-mini" href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>">
                <img src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $item['thumb'] ?>" alt="<?php echo $item['name'] ?>">
              </a>
            <?php } ?>
          </div>
        </div>

        <div class="hero-panel hero-contact-card">
          <div class="hero-panel__title">Liên hệ &amp; báo giá</div>
          <div class="hero-contact-card__inner">
            <div>
              <strong><?php echo $company['name'] ?></strong>
              <span><?php echo $company['address'] ?></span>
            </div>
            <a href="tel:<?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?>">Hotline: <?php echo $company['hotline'] ?></a>
            <a class="hero-contact-card__button" href="<?php echo base_url() . 'lien-he' ?>">Gửi yêu cầu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>