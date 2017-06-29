<?php

if (!function_exists('avion_style_js')) {
    function avion_style_js() {
    	// Styles
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all'  );
        wp_enqueue_style( 'googleapis', 'http://fonts.googleapis.com/css?family=Cabin:400,700', array(), '1.0', 'all'  );
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all'  );

        //scripts 
        wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/3db7fc1628.js', array('jquery'), '1.0.0', false );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/jquery.plugin.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'countdown', get_template_directory_uri() . '/js/jquery.countdown.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'mailchimp', get_template_directory_uri() . '/js/mailchimp.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );

    }
    add_action( 'wp_enqueue_scripts', 'avion_style_js' );
}

// IE Support

if (!function_exists('avion_ie_support')) {
    function avion_ie_support(){
    	?>
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    	<?php
    }
    add_action('wp_head', 'avion_ie_support');
}

?>