  <section class="showcase-section">
    <div class="container">

      <div class="section-heading">
        <span>Danh mục sản phẩm</span>
        <h2><?php echo $category['name']?></h2>
        <p>Khám phá các sản phẩm phù hợp cho dự án của bạn.</p>
        <hr>
      </div>

      <!-- Products Grid -->
      <?php if (is_array($products) && !empty($products)) { ?>
        <div class="item-col-4">
          <?php foreach ($products as $index => $item) { ?>
            <!-- Product -->
            <div class="product">
              <article>
                <a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>" class="tittle-img">
                  <img class="img-responsive" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $item['thumb'] ?>" alt="product-img">
                </a>
                <!-- Content -->
                <span class="tag"><?php echo $item['category_name'] ?></span> <a href="<?php echo base_url() . 'san-pham/' . $item['name_unsigned'] ?>" class="tittle"><?php echo $item['name'] ?></a>
                <!-- Price -->
                <div class="price"><?php echo ($item['price'] == '' ? "Liên hệ" : number_format($item['price'], 0, ',', '.') . " VND") ?> </div>
              </article>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>