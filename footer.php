    
   <div id="footer">
   <?php  
		if ( is_active_sidebar( 'sidebar-left' ) ) { 
			?><div id="footerLeft"><?php 
			dynamic_sidebar( 'sidebar-left' );
			?></div><?php
		} 
		
		if ( is_active_sidebar( 'sidebar-center' ) ) {
			?><div id="footerMiddle"><?php
			dynamic_sidebar( 'sidebar-center' );
			?></div><?php
		}
					
		if ( is_active_sidebar( 'sidebar-right' ) ) {
			?><div id="footerRight"><?php
			dynamic_sidebar( 'sidebar-right' );
			?></div><?php
		}
		?>
   </div><!-- footer -->
    
</div><!-- wrapper -->

<?php wp_footer(); ?>
    
    
</body>
</html>