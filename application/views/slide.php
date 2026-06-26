<!-- Slide -->
<section class="car-rental-slider-section aos" data-aos="fade-up" style="margin-top: 85px;">
    <div class="car-rental-carousel">
        <div class="car-rental-slider owl-carousel owl-theme">
            <?php foreach ($slides as $slide) { ?>
                <div class="car-rental-slider-item">
                    <img src="<?php echo base_url() . SLIDE_UPLOAD_PATH . $slide['thumb'] ?>" class="img-fluid" alt="">
                    <!-- <div class="container">
                        <div class="car-rental-carousel-content">
                            <h6>Về chúng tôi</h6>
                            <h3 class=" aos" data-aos="fade-up" data-aos-delay="200">Compactbamien.com</h3>
                            <h5 class=" aos" data-aos="fade-up" data-aos-delay="300"><span>Giải pháp tối ưu cho không gian hiện đại</span></h5>
                            <p class=" aos" data-aos="fade-up" data-aos-delay="400"> Là đơn vị chuyên cung cấp - Thi công vách ngăn vệ sinh</br>Compact HPL, Compact Formica, Compact Polytec, phụ kiện Inox-304 tại thị trường Việt Nam.</p>
                        </div>
                    </div> -->
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- /Slide -->
