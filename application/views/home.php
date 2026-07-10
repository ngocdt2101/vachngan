<!-- Content -->
<div id="content">

  <section class="home-intro-shell">
    <div class="container">
      <div class="section-heading section-heading--compact text-center">
        <h2>Công trình tiêu biểu</h2>
        <p>Thi công nhanh, đồng bộ phụ kiện, bảo hành rõ ràng và tối ưu chi phí cho công trình.</p>
        <hr>
      </div>

      <?php if (is_array($home_banners) && !empty($home_banners)): ?>
        <div class="feature-grid">
          <?php foreach ($home_banners as $banner): ?>
            <div class="feature-card">
              <div class="feature-card__icon hexagon">
                <?php if (!empty($banner['link'])): ?>
                  <a href="<?php echo base_url() . $banner['link']; ?>" class="hexagon__link" target="_blank">
                <?php endif; ?>
                
                <?php if (!empty($banner['thumb'])): ?>
                  <img src="<?php echo base_url() . BANNER_UPLOAD_PATH . $banner['thumb'] ?>" 
                       alt="<?php echo !empty($banner['title']) ? strip_tags($banner['title']) : 'Banner' ?>" 
                       class="hexagon__img">
                <?php endif; ?>
                
                <?php if (!empty($banner['link'])): ?>
                  </a>
                <?php endif; ?>
              </div>
              <h3><?php echo !empty($banner['title']) ? $banner['title'] : 'Chuyên nghiệp'; ?></h3>
              <p><?php echo !empty($banner['description']) ? $banner['description'] : ''; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="home-intro-shell">
    <div class="container">
      <div class="section-heading section-heading--compact text-center">
        <span>Giải pháp thực tế</span>
        <h2>Tại sao chọn chúng tôi?</h2>
        <p>Thi công nhanh, đồng bộ phụ kiện, bảo hành rõ ràng và tối ưu chi phí cho công trình.</p>
        <hr>
      </div>

      <div class="feature-grid">
        <div class="feature-card">
          <div class="feature-card__icon"><i class="fa fa-tint"></i></div>
          <h3>Chịu nước tuyệt đối 100%</h3>
          <p>Lõi vách Compact HPL chống ẩm mốc, phù hợp môi trường ẩm ướt.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card__icon"><i class="fa fa-shield"></i></div>
          <h3>Độ bền cao &amp; an toàn</h3>
          <p>Chống va đập, chịu lực tốt và vận hành ổn định lâu dài.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card__icon"><i class="fa fa-cogs"></i></div>
          <h3>Thi công nhanh chóng</h3>
          <p>Quy trình gọn, đội ngũ chuyên nghiệp, bàn giao đúng tiến độ.</p>
        </div>
        <div class="feature-card">
          <div class="feature-card__icon"><i class="fa fa-medal"></i></div>
          <h3>Chất lượng đạt chuẩn</h3>
          <p>Nhập khẩu chính hãng, đồng bộ vật tư và bảo hành rõ ràng.</p>
        </div>
      </div>
    </div>
  </section>

  <?php if (is_array($quotations) && !empty($quotations)) { ?>
    <section class="showcase-section">
      <div class="container">

        <!-- heading -->
        <div class="section-heading">
          <span>Báo giá mới nhất</span>
          <h2>Báo giá tấm Compact</h2>
          <p>Khám phá các dòng báo giá cập nhật và lựa chọn phù hợp theo quy mô công trình.</p>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav">
          <?php foreach ($quotations as $index => $item) { ?>
            <!-- Blog Post -->
            <div class="blog-post">
              <article>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle-img"> <img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a>
                <span><i class="fa fa-bookmark-o"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></span>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle"> <?php echo $item['name'] ?> </a>
                <p><?php echo $item['description'] ?></p>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="read-more">XEM CHI TIẾT</a>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>


  <?php if (is_array($quotations2) && !empty($quotations2)) { ?>
    <section class="showcase-section">
      <div class="container">

        <!-- heading -->
        <div class="section-heading">
          <span>Báo giá mới nhất</span>
          <h2>Báo giá vách ngăn vệ sinh</h2>
          <p>Những cấu hình tối ưu cho khu vệ sinh công cộng, bền đẹp và dễ bảo trì.</p>
          <hr>
        </div>
        <div id="blog-slide-a" class="with-nav">
          <?php foreach ($quotations2 as $index => $item) { ?>
            <!-- Blog Post -->
            <div class="blog-post">
              <article>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle-img"> <img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a>
                <span><i class="fa fa-bookmark-o"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></span>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle"> <?php echo $item['name'] ?> </a>
                <p><?php echo $item['description'] ?></p>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="read-more">XEM CHI TIẾT</a>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php if (is_array($quotations3) && !empty($quotations3)) { ?>
    <section class="showcase-section">
      <div class="container">

        <!-- heading -->
        <div class="section-heading">
          <span>Báo giá mới nhất</span>
          <h2>Báo giá vách ngăn di động</h2>
          <p>Giải pháp không gian linh hoạt cho phòng họp, hội trường và khu chức năng.</p>
          <hr>
        </div>
        <div id="blog-slide-b" class="with-nav">
          <?php foreach ($quotations3 as $index => $item) { ?>
            <!-- Blog Post -->
            <div class="blog-post">
              <article>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle-img"> <img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a>
                <span><i class="fa fa-bookmark-o"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></span>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle"> <?php echo $item['name'] ?> </a>
                <p><?php echo $item['description'] ?></p>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="read-more">XEM CHI TIẾT</a>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <!-- Tab Section -->

  <section class="showcase-section showcase-section--alt">
    <div class="container">

      <!-- Nav tabs -->
      <div class="section-heading">
        <span>Danh mục sản phẩm</span>
        <h2>Sản phẩm</h2>
        <p>Tập trung vào các dòng sản phẩm chủ lực cho công trình vệ sinh và nội thất kỹ thuật.</p>
        <hr>
      </div>
      <ul class="nav nav-tabs nav-bars margin-bottom-40" role="tablist">
        <li role="presentation" class="active"><a href="#product" aria-controls="product" role="tab" data-toggle="tab">Sản Phẩm</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Featured -->
        <div role="tabpanel" class="tab-pane active fade in" id="product">
          <!-- Items Slider -->

          <div class="item-col-4">
            <?php foreach ($products_on_home as $index => $item) { ?>
              <!-- Product -->
              <div class="product">
                <article>
                  <a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>" class="tittle-img">
                    <img class="img-responsive" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $item['thumb'] ?>" alt="product-img">
                  </a>
                  <!-- Content -->
                  <span class="tag"><?php echo $item['category_name'] ?></span> <a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>" class="tittle"><?php echo $item['name'] ?></a>
                  <!-- Reviews -->
                  <div class="price"><?php echo ($item['price'] == '' ? "Liên hệ" : number_format($item['price'], 0, ',', '.') . " VND") ?> </div>
                </article>
              </div>
            <?php } ?>

          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="shipping-info shipping-info--modern">
    <div class="container">
      <ul>

        <!-- Free Shipping -->
        <li>
          <div class="media-left"> <i class="fa fa-truck"></i> </div>
          <div class="media-body">
            <h5>Giao hàng chuyên nghiệp</h5>
            <span>Đội ngũ giao hàng tận tâm và chuyên nghiệp</span>
          </div>
        </li>
        <!-- Money Return -->
        <li>
          <div class="media-left"> <i class="fa fa-credit-card"></i> </div>
          <div class="media-body">
            <h5>Thanh Toán</h5>
            <span>Các phương thức thanh toán linh hoạt và an toàn</span>
          </div>
        </li>
        <!-- Support 24/7 -->
        <li>
          <div class="media-left"> <i class="fa fa-headphones"></i> </div>
          <div class="media-body">
            <h5>Hỗ trợ 24/7</h5>
            <span>Đội ngũ hỗ trợ luôn sẵn sàng giúp đỡ bạn</span>
          </div>
        </li>
        <!-- Safe Payment -->
        <li>
          <div class="media-left"> <i class="fa fa-shield"></i> </div>
          <div class="media-body">
            <h5>An toàn</h5>
            <span>Thi công an toàn và bảo vệ môi trường</span>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <?php if (is_array($news_on_home) && !empty($news_on_home)) { ?>
    <section class="showcase-section">
      <div class="container">

        <!-- heading -->
        <div class="section-heading">
          <span>Tin tức &amp; cập nhật</span>
          <h2>Tin tức</h2>
          <p>Cập nhật xu hướng thi công, vật liệu và các bài viết hữu ích cho dự án của bạn.</p>
          <hr>
        </div>
        <div id="blog-slide-news" class="with-nav">
          <?php foreach ($news_on_home as $index => $item) { ?>
            <!-- Blog Post -->
            <div class="blog-post">
              <article>
                <a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>" class="tittle-img"> <img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a>
                <span><i class="fa fa-bookmark-o"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></span>
                <a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>" class="tittle"> <?php echo $item['name'] ?> </a>
                <p><?php echo $item['description'] ?></p>
                <a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>" class="read-more">XEM CHI TIẾT</a>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
</div>
<!-- End Content -->
<!-- End Page Wrapper -->