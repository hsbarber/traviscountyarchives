
      <footer>
 
      	<div class="container footer">
      		<div class="row footer">

				<div class="col-md-4 footer">
                  <?php if ( dynamic_sidebar( 'footer-left' ) ); ?>   
				</div>
				
				<div class="col-md-4 footer">
					
					<!--QUICK LINKS and RELATED LINKS WIDGET -->
					<div class="quicklinks">
					<?php if ( dynamic_sidebar( 'footer-right' ) ); ?>
					</div>
				</div>
				<div class="col-md-4 footer">
					<!--NEWSLETTER WIDGET -->
					<?php if ( dynamic_sidebar( 'footer-center' ) ); ?>	
				
				</div>
				
				
					
				
        	</div>
				
				
			
        </div>
	
<div class="footer-copyright">
	<div class="container">
		<div class="row">
   			 <div class="col-md-12 footer">  
					<h3><span class="cop-symbol">&copy;</span> Travis County Archives, 2009 – <?php echo date('Y'); ?></h3>
			</div>
		</div>
	</div>
</div>
</footer>


    <?php wp_footer(); ?>
</body>   
</html>
