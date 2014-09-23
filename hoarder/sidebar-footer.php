<!-- BEGIN .footer-col-1 -->
<div class="footer-col-1" style="width:470px;">

    <?php 
        if( is_active_sidebar( 'footer-column' ) ) {
            dynamic_sidebar( 'footer-column' ); 
        }
    ?>
    
<!-- END .footer-col-1 -->
</div>

<!-- BEGIN .footer-col-2 -->
<div class="footer-col-2" style="margin-right: 0px; padding-left: 30px; width: 121px; padding-right:10px">

    <?php 
        if( is_active_sidebar( 'footer-column-2' ) ) {
            dynamic_sidebar( 'footer-column-2' ); 
        }
    ?>

<!-- END .footer-col-2 -->
</div>

<!-- BEGIN .footer-col-3 -->
<div class="footer-col-3" style="width:263px; margin-left:22px; padding:"0px;">

    <?php 
        if( is_active_sidebar( 'footer-column-3' ) ) {
            dynamic_sidebar( 'footer-column-3' ); 
        }
    ?>

<!-- END .footer-col-3 -->
</div>