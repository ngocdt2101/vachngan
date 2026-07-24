  <!-- Footer -->
  <footer class="footer-dark site-footer">
  	<div class="container">

  		<div class="row">

  			<!-- Contact -->
  			<div class="col-md-5">
  				<h4>CÔNG TY TNHH XNK & THƯƠNG MẠI BA MIỀN</h4>
  				<p>Địa chỉ: Số 256/16D, Đường TX25, P.Thới An, TP.HCM</p>
  				<p>Xưởng sản xuất HCM: 280/112 Ấp 2, Đông Thạnh, Hóc Môn, Tp.HCM</p>
  				<p>Xưởng sản xuất Đà Nẵng: Số 16 Hoàng Văn Thái, Liên Chiểu, Đà Nẵng</p>
  				<p>Xưởng sản xuất Hà Nội: KM01, đường Phan Trọng Tuệ, xã Đại Thanh, TP HN</p>
  				<p>Phone: 0927 680 999 <br>
				 0909 256 236 &nbsp;&nbsp; - &nbsp;&nbsp; 0326 025 871 <br>
				 0909 224 979 &nbsp;&nbsp; - &nbsp;&nbsp; 0979 138 618<br>
				 0983 670 779</p>
  				<p>Email: compactbamienchaogia@gmail.com</p>
  			</div>

  			<!-- Categories -->
  			<div class="col-md-3">
  				<h4>Danh mục</h4>
  				<ul class="links-footer">
  					<li>
  						<a href="<?php echo base_url() . 'gioi-thieu' ?>"> Giới thiệu </a>
  					</li>
  					<li>
  						<a href="<?php echo base_url() . 'bao-gia' ?>"> Báo giá chi tiết </a>
  					</li>
  					<?php foreach ($all_categories as $index => $item) { ?>
  						<li>
  							<a href="<?php echo base_url() . 'danh-muc-san-pham/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a>
  						</li>
  					<?php } ?>
  					<li>
  						<a href="<?php echo base_url() . 'tin-tuc' ?>"> Tin tức </a>
  					</li>
  					<li>
  						<a href="<?php echo base_url() . 'lien-he' ?>"> Liên hệ </a>
  					</li>
  				</ul>
  			</div>

  			<!-- Customer Services -->
  			<div class="col-md-4">
  				<h4>Bài viết</h4>
  				<ul class="links-footer">
  					<?php foreach ($quotations_on_home as $index => $item) { ?>
  						<?php if ($index <= 3) { ?>
  							<li> <a href="<?php echo base_url() . 'bao-gia/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a></li>
  						<?php } ?>
  					<?php } ?>

  					<?php foreach ($news_on_home as $index => $item) { ?>
  						<?php if ($index <= 3) { ?>
  							<li> <a href="<?php echo base_url() . 'tin-tuc/' . $item['name_unsigned'] ?>"> <?php echo $item['name'] ?> </a></li>
  						<?php } ?>
  					<?php } ?>
  				</ul>
  			</div>
  		</div>
  	</div>
  </footer>

  <!-- Rights -->
  <div class="rights dark site-rights">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-6">
  				<p>Copyright © 2026 <a href="#." class="ri-li"> tongkhocompact.vn </a>. All rights reserved</p>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- End Footer -->