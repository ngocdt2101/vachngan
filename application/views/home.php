<!-- Content -->
<div id="content">

  <?php if (is_array($quotations) && !empty($quotations)) { ?>
    <section class="padding-top-0 padding-bottom-60">
      <div class="container">

        <!-- heading -->
        <div class="heading">
          <h2>Báo giá tấm Compact</h2>
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
    <section class="padding-top-0 padding-bottom-60">
      <div class="container">

        <!-- heading -->
        <div class="heading">
          <h2>Báo giá vách ngăn vệ sinh</h2>
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
    <section class="padding-top-0 padding-bottom-60">
      <div class="container">

        <!-- heading -->
        <div class="heading">
          <h2>Báo giá vách ngăn di động</h2>
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

  <section class="featur-tabs padding-top-60 padding-bottom-30">
    <div class="container">

      <!-- Nav tabs -->
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

  <section class="shipping-info" style="margin-bottom: 60px;">
    <div class="container">
      <ul>

        <!-- Free Shipping -->
        <li>
          <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
          <div class="media-body">
            <h5>Giao hàng chuyên nghiệp</h5>
            <span>Đội ngũ giao hàng tận tâm và chuyên nghiệp</span>
          </div>
        </li>
        <!-- Money Return -->
        <li>
          <div class="media-left"> <i class="flaticon-arrows"></i> </div>
          <div class="media-body">
            <h5>Thanh Toán</h5>
            <span>Các phương thức thanh toán linh hoạt và an toàn</span>
          </div>
        </li>
        <!-- Support 24/7 -->
        <li>
          <div class="media-left"> <i class="flaticon-operator"></i> </div>
          <div class="media-body">
            <h5>Hỗ trợ 24/7</h5>
            <span>Đội ngũ hỗ trợ luôn sẵn sàng giúp đỡ bạn</span>
          </div>
        </li>
        <!-- Safe Payment -->
        <li>
          <div class="media-left"> <i class="flaticon-business"></i> </div>
          <div class="media-body">
            <h5>An toàn</h5>
            <span>Thi công an toàn và bảo vệ môi trường</span>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <?php if (is_array($news_on_home) && !empty($news_on_home)) { ?>
    <section class="padding-top-0 padding-bottom-60">
      <div class="container">

        <!-- heading -->
        <div class="heading">
          <h2>Tin tức</h2>
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