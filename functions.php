<?php
// Including Files
if (file_exists( dirname( __FILE__ ) . '/inc/avion-style-js.php' )) {
	require_once( get_template_directory() .'/inc/avion-style-js.php'  );
}

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/avion-options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/avion-options.php' );
}

// Removing Redux Framework From tools .The value must be over 10

add_action( 'admin_menu', 'remove_redux_menu',12 );
	function remove_redux_menu() {
	remove_submenu_page('tools.php','redux-about');
}

if (!function_exists('add_this_script_footer')) {
	function add_this_script_footer(){
		global $avion;
		$date     	= $avion['lunch-date'];
		$date_part 	= array();
		if (!empty($date)) {
		    $date_part = explode("/", $date);
		} else {
		    $date_part[0] = '6';//month
		    $date_part[1] = '10';//date
		    $date_part[2] = '2019';//year
		}

	?>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
			    $("#counter").countdown({
		        until: new Date(<?php echo $date_part[2]; ?>, <?php echo $date_part[0]; ?>-1, <?php echo $date_part[1]; ?>),
		        format: 'dHMS'
		        });

		        $("#counter_wrapper").fitText(1.2, {
		        minFontSize: '20px',
		        maxFontSize: '50px'
		        });
			});
		</script>
	<?php
	}
}
add_action('wp_head', 'add_this_script_footer');

?>