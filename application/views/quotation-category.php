  <?php if (is_array($quotations) && !empty($quotations)) { ?>
    <section class="showcase-section">
      <div class="container">

        <!-- heading -->
        <div class="section-heading">
          <span>Báo giá</span>
          <h2><?php echo $section_header ?></h2>
          <p>Cập nhật mới nhất giá các loại tấm compact trên thị trường hiện nay</p>
          <hr>
        </div>
        <div class="list-blogs">
          <?php foreach ($quotations as $index => $item) { ?>
            <!-- Blog Post -->
            <div class="blog-post">
              <article>
                <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>" class="tittle-img"> <img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a>
                <span><i class="fa fa-bookmark"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></span>
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