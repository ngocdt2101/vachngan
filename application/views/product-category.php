  <section class="featur-tabs padding-top-60 padding-bottom-30">
    <div class="container">

		<h1 class="breadcrumb-title" style="font-size: 30px; text-align: center;"><?php echo $category['name']?></h1>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-bars margin-bottom-40" role="tablist">
        <li role="presentation" class="active"><a href="#product" aria-controls="product" role="tab" data-toggle="tab"><?php echo $category['name']?></a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Featured -->
        <div role="tabpanel" class="tab-pane active fade in" id="product">
          <!-- Items Slider -->

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