<!-- <?php
    //   $attachmentID = 1538;
    //   $imageSizeName = "full";
    //   $img = wp_get_attachment_image_src($attachmentID, $imageSizeName);
?> -->

<!-- <?php echo $img[0]; ?> -->
<footer>
	<section class="container-fluid newsletter" style="background: linear-gradient(
	        rgba(45, 49, 70, 0.85),
	        rgba(45, 49, 70, 0.85)),
    		url('./wp-content/themes/archives/backgroundImg/travis_county-1932-map-bw.jpg') 50% 30% no-repeat; background-size: cover;" >
		<div class="container newsletter-container">
    		<div class="row">
			<?php if ( dynamic_sidebar( 'newsletter' ) ); ?>
			</div>
		</div>
	</section>
	<section class="container-fluid footer">
		<div class="container ">
			<div class="row footer--container">
				<div class="col-md-6 col-lg-5">
					<div class="footer--address">
						<?php if ( dynamic_sidebar( 'footer-left' ) ); ?>
					</div>
				</div>

				<div class="col-md-6 col-lg-7">
					<!--QUICK LINKS and RELATED LINKS WIDGET -->
					<div class="footer--quickLinks">

					<?php if ( dynamic_sidebar( 'footer-right' ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<h3><span class="cop-symbol">&copy;</span> Travis County Archives, 2009 – <?php echo date('Y'); ?></h3>
				</div>
			</div>
		</div>
	</div>
</footer>


    <?php wp_footer(); ?>
</body>
</html>
