<?php if( is_active_sidebar( 'sidebar-main' ) ) { ?>
    
    <?php zilla_sidebar_before(); ?>
		<!-- BEGIN #sidebar .aside-->
		<div id="sidebar" class="aside">
			
		<?php 
		    zilla_sidebar_start();
			
			/* Widgetised Area */ 
			dynamic_sidebar( 'sidebar-main' );
			
			zilla_sidebar_end();
		?>
		
		<!-- END #sidebar .aside-->
		</div>
		<?php zilla_sidebar_after(); ?>
		
		<div class="second-sidebar-section">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Post Sidebar 2')) : ?>
	
		<?php endif; ?>
		</div>
<?php } ?>