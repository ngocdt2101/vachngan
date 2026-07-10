  <?php if (is_array($news) && !empty($news)) { ?>
    <section class="showcase-section">
      <div class="container">

        <!-- heading -->
        <div class="section-heading">
          <span>Tin tức &amp; cập nhật</span>
          <h2>Tin tức</h2>
          <p>Cập nhật tin tức mới nhất hiện nay</p>
          <hr>
        </div>
        <div class="list-blogs">
          <?php foreach ($news as $index => $item) { ?>
            <!-- Blog Post -->
            <div class="blog-post">
              <article>
                <a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>" class="tittle-img"> <img class="img-responsive" src="<?php echo base_url() . POST_UPLOAD_PATH . $item['avatar'] ?>" alt=""> </a>
                <span><i class="fa fa-bookmark"></i> <?php echo date("M", strtotime($item['updated_at'])) ?> <?php echo date("d", strtotime($item['updated_at'])) ?>, <?php echo date("Y", strtotime($item['updated_at'])) ?></span>
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