<?php
 // Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2');
		wp_enqueue_script('jquery');
		
		// Custom Theme scripts...
		wp_register_script(
			'custom',
			get_bloginfo('template_directory') . '/js/custom.js',
			array('jquery'), '1.0'  );
		wp_enqueue_script('custom');
		
		
		// Homepage slider 'flexslider' scripts...
		wp_register_script(
			'flexslider',
			get_bloginfo('template_directory') . '/js/flexslider.js',
			array('jquery') , '1.0' , true );
		wp_enqueue_script('flexslider');
		
		// Isotpope...
		wp_register_script(
			'isotope',
			get_bloginfo('template_directory') . '/js/isotope.js',
			array('jquery') );
		wp_enqueue_script('isotope');
		
		
		// Images loaded...
		wp_register_script(
			'imagesloaded',
			get_bloginfo('template_directory') . '/js/images-loaded.js',
			array('jquery') );
		wp_enqueue_script('imagesloaded');
		
		// Equal heights div...
		wp_register_script(
			'blocks',
			get_bloginfo('template_directory') . '/js/blocks.js',
			array('jquery') );
		wp_enqueue_script('blocks');
		
		// Colorbox...
		wp_register_script(
			'colorbox',
			get_bloginfo('template_directory') . '/js/colorbox.js',
			array('jquery') );
		wp_enqueue_script('colorbox');

		// Colorbox...
		wp_register_script(
			'navigation',
			get_bloginfo('template_directory') . '/js/navigation.js',
			array('jquery') );
		wp_enqueue_script('navigation');
		
	}
}
add_action('wp_enqueue_scripts', 'ineedmyjava');