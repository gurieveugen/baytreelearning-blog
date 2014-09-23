        
        <?php zilla_content_end(); ?>
		<!-- END #content -->
		</div>

		<?php zilla_footer_before(); ?>
			
		<!-- BEGIN #footer -->
		<div id="footer">
		    
		    <!-- BEGIN .footer-inner -->
		    <div class="footer-inner">
		    <div class="footer-inner2">
		    <?php zilla_footer_start(); ?>
		    
		        <?php get_sidebar('footer'); ?>
				    <?php zilla_footer_end(); ?>
		    
		    <!-- END .footer-inner -->
<div class="footer-inner2">
		            <p class="copyright">&copy; <?php echo date( 'Y' ); ?> Bay Tree Learning Inc.</br> 
All Rights Reserved</p></div>
		        </div>		   

		    </div>
 

		    <div class="footer-lower">
		       
		    </div>
		    
		<!-- END #footer -->
		</div>

		<a href="#" id="back-to-top"></a>
		
		<?php zilla_footer_after(); ?>
		
		
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	<?php zilla_body_end(); ?>
			
	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
<!-- END body-->
</body>
<!-- END html-->
</html>