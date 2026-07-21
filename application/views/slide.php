<?php
$fallbackImage = base_url() . 'assets/frontend/img/menu-vs.jpg';
$slideList = (is_array($slides) && !empty($slides)) ? $slides : [];
?>

<section class="hero-showcase">
  <div class="container">
    <div class="hero-slider" id="heroSlider">

      <?php foreach ($slideList as $i => $slide): ?>
        <?php $img = !empty($slide['thumb']) ? base_url() . SLIDE_UPLOAD_PATH . $slide['thumb'] : $fallbackImage; ?>
        <div class="hero-slider__item<?php echo $i === 0 ? ' active' : ''; ?>">
          <div class="hero-slider__bg" style="background-image:url('<?php echo $img ?>');">
          </div>
          <div class="hero-main__shade"></div>
          <div class="hero-main__content">
            <span class="hero-main__eyebrow">Tấm Compact</span>
            <h1>CHUYÊN GIA THI CÔNG VÁCH NGĂN VỆ SINH COMPACT</h1>
            <p>Giải pháp bền bỉ, thẩm mỹ cao, chịu nước 100% cho mọi công trình.</p>
            <div class="hero-main__actions">
              <a class="btn btn-hero" href="<?php echo base_url() . 'bao-gia' ?>">NHẬN BÁO GIÁ TRỌN GÓI</a>
              <a class="btn btn-hero btn-hero--ghost" href="<?php echo base_url() . 'gioi-thieu' ?>">XEM NĂNG LỰC</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <?php if (count($slideList) > 1): ?>
        <button class="hero-slider__arrow hero-slider__arrow--prev" aria-label="Slide trước">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="hero-slider__arrow hero-slider__arrow--next" aria-label="Slide tiếp">
          <i class="fa fa-chevron-right"></i>
        </button>

        <div class="hero-slider__dots">
          <?php foreach ($slideList as $i => $slide): ?>
            <button class="hero-slider__dot<?php echo $i === 0 ? ' active' : ''; ?>"
                    data-index="<?php echo $i ?>" aria-label="Slide <?php echo $i + 1 ?>"></button>
          <?php endforeach; ?>
        </div>

        <div class="hero-slider__progress">
          <div class="hero-slider__progress-bar"></div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>