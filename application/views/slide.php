<!-- Slid Sec -->
<section class="slid-sec with-bg-wide">
  <!-- Main Slider Start -->
  <div class="tp-banner-container">
    <div class="tp-banner-full">
      <ul>
        <?php foreach ($slides as $slide) { ?>
          <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
            <img src="<?php echo base_url() . SLIDE_UPLOAD_PATH . $slide['thumb'] ?>" alt="slider" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>