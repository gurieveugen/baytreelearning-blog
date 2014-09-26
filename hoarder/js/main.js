jQuery(document).ready(function(){
	
	window.stickyTop = jQuery('.widget_edd_cart_widget').parent().offset().top - 66;

	jQuery(window).scroll(function(){ sidebarUpdate() });
	jQuery(window).resize(function(){ sidebarUpdate() });
});

function sidebarUpdate()
{
	var sidebar   = jQuery('.widget_edd_cart_widget').parent();
	var right     = 0;
	var content   = jQuery('#content').offset().left + jQuery('#content').width();
	var windowTop = jQuery(window).scrollTop();

	right = jQuery(window).width() - content;
	 
    if (window.stickyTop < windowTop) 
    {
    	sidebar.css({ position: 'fixed', top: '97px', right: right + 'px' });
    }
    else 
    {
    	sidebar.css({position:'relative', right: 0, top: 0});
    }

}