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
          (+100) 123 456 7890
        </span>
      </div>
    </div>
  </header>

  <!-- Nav Header -->
  <div class="big-nsv">
    <div class="container">
      <ul class="nav" role="tablist">
        <li><a href="#"><i class="flaticon-computer"></i> TV & Audios </a></li>
        <li><a href="#"><i class="flaticon-smartphone"></i>Smartphones </a></li>
        <li><a href="#"><i class="flaticon-laptop"></i>Desk & Laptop </a></li>
        <li><a href="#"><i class="flaticon-gamepad-1"></i>Game Console </a></li>
        <li><a href="#"><i class="flaticon-computer-1"></i>Watches </a></li>
        <li><a href="#"><i class="flaticon-keyboard"></i>Accessories </a></li>
      </ul>
    </div>
  </div>

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
          <h2>From our Blog</h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav">
          <?php foreach ($quotations as $index => $item) { ?>
          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/blog-img-1.jpg" alt=""> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a>
            </article>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <?php } ?>

    <!-- HOT DEAL -->
    <section class="padding-top-60">
      <div class="container">
        <div class="row">

          <!-- HOT DEAL -->
          <div class="col-md-3">
            <div class="like-bnr hotdeal-bnr">
              <div class="top-text">
                <h5>Ultra-portable Bluetooth</h5>
                <h4>A2 Speaker</h4>
                <span class="price">$170.00</span>
              </div>
            </div>
          </div>

          <!-- Weekly DEAL -->
          <div class="col-md-9">

            <!-- heading -->
            <div class="heading margin-bottom-10">
              <h2>Hot Deal Of the Week</h2>
            </div>

            <!-- Slide -->
            <div class="deal-slide">

              <!-- Weekly Deal Slide -->
              <div class="weekly-deal">
                <div class="media-left">
                  <div class="item-img"> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-17.jpg" alt=""> </div>
                  <div class="offer-time">
                    <div class="countdown">
                      <!-- Days -->

                      <article> <span class="days">00</span>
                        <p class="days_ref">Days</p>
                      </article>

                      <!-- Hours -->

                      <article> <span class="hours">00</span>
                        <p class="hours_ref">Hours</p>
                      </article>

                      <!-- Mintes -->

                      <article><span class="minutes">00</span>
                        <p class="minutes_ref">Minutes</p>
                      </article>

                      <!-- Seconds -->

                      <article><span class="seconds">00</span>
                        <p class="seconds_ref">Seconds</p>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="media-body"> <span class="tags">Desk & Laptop</span> <a href="#." class="tittle">Laptop Alienware 15” i7 Perfect For Gamer</a>
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="row">
                    <div class="col-sm-6"><span class="price">$480.00 <small>$780.00</small></span></div>
                    <div class="col-sm-6 margin-top-10">
                      <p>Availability: <span class="in-stock">In stock</span></p>
                    </div>
                  </div>
                  <ul>
                    <li>Screen: 1920 x 1080 pixels</li>
                    <li>Processor: 2.5 GHz None</li>
                    <li>RAM: 8 GB</li>
                    <li>Hard Drive: Flash memory solid state</li>
                    <li>Graphics : Intel HD Graphics 520 Integrated</li>
                  </ul>
                  <a href="#." class="btn-round">Add to Cart</a>
                </div>
              </div>

              <!-- Weekly Deal Slide -->
              <div class="weekly-deal">
                <div class="media-left">
                  <div class="item-img"> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-17.jpg" alt=""> </div>
                  <div class="offer-time">
                    <div class="countdown">
                      <!-- Days -->

                      <article> <span class="days">00</span>
                        <p class="days_ref">Days</p>
                      </article>

                      <!-- Hours -->

                      <article> <span class="hours">00</span>
                        <p class="hours_ref">Hours</p>
                      </article>

                      <!-- Mintes -->

                      <article><span class="minutes">00</span>
                        <p class="minutes_ref">Minutes</p>
                      </article>

                      <!-- Seconds -->

                      <article><span class="seconds">00</span>
                        <p class="seconds_ref">Seconds</p>
                      </article>
                    </div>
                  </div>
                </div>
                <div class="media-body"> <span class="tags">Desk & Laptop</span> <a href="#." class="tittle">Laptop Alienware 15” i7 Perfect For Gamer</a>
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="row">
                    <div class="col-sm-6"><span class="price">$480.00 <small>$780.00</small></span></div>
                    <div class="col-sm-6 margin-top-10">
                      <p>Availability: <span class="in-stock">In stock</span></p>
                    </div>
                  </div>
                  <ul>
                    <li>Screen: 1920 x 1080 pixels</li>
                    <li>Processor: 2.5 GHz None</li>
                    <li>RAM: 8 GB</li>
                    <li>Hard Drive: Flash memory solid state</li>
                    <li>Graphics : Intel HD Graphics 520 Integrated</li>
                  </ul>
                  <a href="#." class="btn-round">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






    <!-- Tab Section -->

    <section class="featur-tabs padding-top-60 padding-bottom-30">
      <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-bars margin-bottom-40" role="tablist">
          <li role="presentation" class="active"><a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a></li>
          <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">New arrivals</a></li>
          <li role="presentation"><a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Hot sale</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Featured -->
          <div role="tabpanel" class="tab-pane active fade in" id="featur">
            <!-- Items Slider -->

            <div class="singl-slide with-nav">
              <div class="item-col-4">
                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-1.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00 </div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>
                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-2.jpg" alt=""> <span class="sale-tag">-25%</span>

                    <!-- Content -->
                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00 <span>$200.00</span></div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-3.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-4.jpg" alt=""> <span class="new-tag">New</span>

                    <!-- Content -->
                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-5.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-6.jpg" alt=""> <span class="sale-tag">-25%</span>

                    <!-- Content -->
                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00 <span>$200.00</span></div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-7.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-8.jpg" alt=""> <span class="new-tag">New</span>

                    <!-- Content -->
                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>
              </div>

              <div class="item-col-4">
                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-1.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00 </div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>
                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-2.jpg" alt=""> <span class="sale-tag">-25%</span>

                    <!-- Content -->
                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00 <span>$200.00</span></div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-3.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-4.jpg" alt=""> <span class="new-tag">New</span>

                    <!-- Content -->
                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-5.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-6.jpg" alt=""> <span class="sale-tag">-25%</span>

                    <!-- Content -->
                    <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00 <span>$200.00</span></div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-7.jpg" alt="">
                    <!-- Content -->
                    <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>

                <!-- Product -->
                <div class="product">
                  <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-8.jpg" alt=""> <span class="new-tag">New</span>

                    <!-- Content -->
                    <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                    <!-- Reviews -->
                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                    <div class="price">$350.00</div>
                    <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                  </article>
                </div>
              </div>


            </div>


          </div>

          <!-- Special -->
          <div role="tabpanel" class="tab-pane fade" id="special">
            <!-- Items Slider -->
            <div class="item-col-4">

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-11.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00 </div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-9.jpg" alt=""> <span class="sale-tag">-25%</span>

                  <!-- Content -->
                  <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00 <span>$200.00</span></div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-8.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-7.jpg" alt=""> <span class="new-tag">New</span>

                  <!-- Content -->
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-6.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-8.jpg" alt=""> <span class="new-tag">New</span>

                  <!-- Content -->
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-7.jpg" alt=""> <span class="new-tag">New</span>

                  <!-- Content -->
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-10.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>
            </div>
          </div>

          <!-- on sale -->
          <div role="tabpanel" class="tab-pane fade" id="on-sal">
            <!-- Items Slider -->
            <div class="item-col-4">

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-3.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00 </div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-1.jpg" alt=""> <span class="sale-tag">-25%</span>

                  <!-- Content -->
                  <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00 <span>$200.00</span></div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-2.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-5.jpg" alt=""> <span class="new-tag">New</span>

                  <!-- Content -->
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-4.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-8.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-5.jpg" alt=""> <span class="new-tag">New</span>

                  <!-- Content -->
                  <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>

              <!-- Product -->
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-11.jpg" alt="">
                  <!-- Content -->
                  <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                  <!-- Reviews -->
                  <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                  <div class="price">$350.00</div>
                  <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="<?php echo base_url() ?>assets/smarttech/images/c-img-1.png" alt=""></li>
          <li><img src="<?php echo base_url() ?>assets/smarttech/images/c-img-2.png" alt=""></li>
          <li><img src="<?php echo base_url() ?>assets/smarttech/images/c-img-3.png" alt=""></li>
          <li><img src="<?php echo base_url() ?>assets/smarttech/images/c-img-4.png" alt=""></li>
          <li><img src="<?php echo base_url() ?>assets/smarttech/images/c-img-5.png" alt=""></li>
        </ul>
      </div>
    </section>

    <!-- Weekly Featured -->
    <section class="padding-top-60 padding-bottom-60">
      <div class="container">

        <!-- heading -->
        <div class="heading">
          <h2>Top Selling Products</h2>
          <hr>
        </div>
        <!-- Items Slider -->
        <div class="item-slide-5 with-nav">
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-1.jpg" alt="">
              <!-- Content -->
              <span class="tag">Latop</span> <a href="#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 </div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-2.jpg" alt=""> <span class="sale-tag">-25%</span>

              <!-- Content -->
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>

          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-3.jpg" alt="">
              <!-- Content -->
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>

          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-4.jpg" alt=""> <span class="new-tag">New</span>

              <!-- Content -->
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>

          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-5.jpg" alt="">
              <!-- Content -->
              <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>

          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-6.jpg" alt=""> <span class="sale-tag">-25%</span>

              <!-- Content -->
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>

          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-7.jpg" alt="">
              <!-- Content -->
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>

          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/item-img-1-8.jpg" alt=""> <span class="new-tag">New</span>

              <!-- Content -->
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Top Selling Week -->
    <section class="padding-top-0 padding-bottom-60">
      <div class="container">

        <!-- heading -->
        <div class="heading">
          <h2>From our Blog</h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav">

          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/blog-img-1.jpg" alt=""> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a>
            </article>
          </div>

          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/blog-img-2.jpg" alt=""> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">Get the power to take your business to the
                next level. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a>
            </article>
          </div>

          <!-- Blog Post -->
          <div class="blog-post">
            <article> <img class="img-responsive" src="<?php echo base_url() ?>assets/smarttech/images/blog-img-3.jpg" alt=""> <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a>
            </article>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer class="footer-dark">
    <div class="container">

      <!-- Newslatter -->
      <div class="newslatter">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3> <i class="fa fa-envelope-o"></i> Subscribe our Newsletter <small>Get 25% Off first purchase!</small></h3>
            </div>
            <div class="col-md-5">
              <form>
                <input type="email" placeholder="Your email address here...">
                <button type="submit">Subscribe!</button>
              </form>
            </div>
            <div class="col-md-3">
              <h3> <i class="fa fa-phone"></i> (+100) 123 456 7890 <small>Call us toll Free 24/7!</small></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- Contact -->
        <div class="col-md-4">
          <h4>Contact SmartTech!</h4>
          <p>Address: 45 Grand Central Terminal New York, NY 1017
            United State USA</p>
          <p>Phone: (+100) 123 456 7890</p>
          <p>Email: Support@smarttech.com</p>
          <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> <a href="#."><i class="fa fa-google"></i></a> </div>
        </div>

        <!-- Categories -->
        <div class="col-md-3">
          <h4>Categories</h4>
          <ul class="links-footer">
            <li><a href="#.">Home Audio & Theater</a></li>
            <li><a href="#."> TV & Video</a></li>
            <li><a href="#."> Camera, Photo & Video</a></li>
            <li><a href="#."> Cell Phones & Accessories</a></li>
            <li><a href="#."> Headphones</a></li>
            <li><a href="#."> Video Games</a></li>
            <li><a href="#."> Bluetooth & Wireless</a></li>
          </ul>
        </div>

        <!-- Categories -->
        <div class="col-md-3">
          <h4>Customer Services</h4>
          <ul class="links-footer">
            <li><a href="#.">Shipping & Returns</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> International Shipping</a></li>
            <li><a href="#."> Affiliates</a></li>
            <li><a href="#."> Contact </a></li>
          </ul>
        </div>

        <!-- Categories -->
        <div class="col-md-2">
          <h4>Information</h4>
          <ul class="links-footer">
            <li><a href="#.">Our Blog</a></li>
            <li><a href="#."> About Our Shop</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> Delivery infomation</a></li>
            <li><a href="#."> Store Locations</a></li>
            <li><a href="#."> FAQs</a></li>
          </ul>
        </div>
      </div>

      <!-- Shipping Info -->
      <section class="shipping-info">
        <div class="container">
          <ul>

            <!-- Free Shipping -->
            <li>
              <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
              <div class="media-body">
                <h5>Free Shipping</h5>
                <span>On order over $99</span>
              </div>
            </li>
            <!-- Money Return -->
            <li>
              <div class="media-left"> <i class="flaticon-arrows"></i> </div>
              <div class="media-body">
                <h5>Money Return</h5>
                <span>30 Days money return</span>
              </div>
            </li>
            <!-- Support 24/7 -->
            <li>
              <div class="media-left"> <i class="flaticon-operator"></i> </div>
              <div class="media-body">
                <h5>Support 24/7</h5>
                <span>Hotline: (+100) 123 456 7890</span>
              </div>
            </li>
            <!-- Safe Payment -->
            <li>
              <div class="media-left"> <i class="flaticon-business"></i> </div>
              <div class="media-body">
                <h5>Safe Payment</h5>
                <span>Protect online payment</span>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </footer>

  <!-- Rights -->
  <div class="rights dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Copyright © 2017 <a href="#." class="ri-li"> SmartTech </a>HTML5 template. All rights reserved</p>
        </div>
        <div class="col-sm-6 text-right"> <img src="<?php echo base_url() ?>assets/smarttech/images/card-icon.png" alt=""> </div>
      </div>
    </div>
  </div>

  <!-- End Footer -->

  <!-- GO TO TOP  -->
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
  <!-- GO TO TOP End -->
</div>
<!-- End Page Wrapper -->