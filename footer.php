
<footer>
	<section class="container-fluid newsletter">
		<div class="container newsletter-container">
			<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
					/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
						We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
					<form action="https://traviscountyhistory.us5.list-manage.com/subscribe/post?u=efda8be26caeeeb8655fa761d&amp;id=4e0cd019f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
						<h2>Subscribe to our Newsletter</h2>
					<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">First Name </label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-LNAME">Last Name </label>
						<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
					</div>
						<div id="mce-responses" class="clear foot">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_efda8be26caeeeb8655fa761d_4e0cd019f0" tabindex="-1" value=""></div>
									<div class="optionalParent">
											<div class="clear foot">
													<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
											</div>
									</div>
							</div>
					</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
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
