<!-- Page Wrapper -->
<div id="wrap" class="layout-4 red">

  <!-- Top bar -->
  <div class="top-bar">
    <div class="container">
      <ul class="pull-left right-sec">
        <li><a href="#.">Địa chỉ: Số 256/16D, Đường TX25 - P.Thạnh Xuân - Quận 12 - TP.HCM</a></li>
      </ul>
      <div class="right-sec">
        <ul>
          <li><a href="#.">Hotline: 0927-680-999</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="header-style-4">
    <div class="container">
      <div class="logo"> <a href="index.html"><img src="<?php echo base_url() ?>assets/smarttech/images/logo-4.png" alt=""></a> </div>
      <div class="go-right">

        <!-- search -->
        <div class="search-cate">
          <select class="selectpicker">
            <option> All Categories</option>
            <option> Home Audio & Theater</option>
            <option> TV & Video</option>
            <option> Camera, Photo & Video</option>
            <option> Cell Phones & Accessories</option>
            <option> Headphones</option>
            <option> Video Games</option>
            <option> Bluetooth & Wireless </option>
            <option> Gaming Console</option>
            <option> Computers & Tablets</option>
            <option> Monitors </option>
          </select>
          <input type="search" placeholder="Search entire store here...">
          <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
        </div>

        <span class="call-mun">
          <i class="fa fa-phone"></i> <strong>Hotline:</strong><br>
          <?php echo str_replace(' ', '', str_replace('-', '', str_replace('.', '', $company['hotline']))) ?>
        </span>
      </div>
    </div>
  </header>

  <!-- Nav Header -->
  <div class="big-nsv">
    <div class="container">
      <ul class="nav" role="tablist">
        <li><a href="#"><i class="flaticon-keyboard"></i> Giới thiệu </a></li>
        <li><a href="#"><i class="flaticon-computer"></i> Báo giá tấm compact </a></li>
        <li><a href="#"><i class="flaticon-smartphone"></i> Báo giá vách vệ sinh </a></li>
        <li><a href="#"><i class="flaticon-laptop"></i> Báo giá vách di động </a></li>
        <li><a href="#"><i class="flaticon-gamepad-1"></i> Sản phẩm </a></li>
        <li><a href="#"><i class="flaticon-computer-1"></i> Liên hệ </a></li>
      </ul>
    </div>
  </div>`

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