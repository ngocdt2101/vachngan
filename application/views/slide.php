<?php
$heroSlide = (is_array($slides) && !empty($slides)) ? $slides[0] : null;
$heroImage = $heroSlide ? base_url() . SLIDE_UPLOAD_PATH . $heroSlide['thumb'] : base_url() . 'assets/frontend/img/menu-vs.jpg';
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
    </div>
  </div>
</section>