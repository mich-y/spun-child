<?php
// Enqueque Google Webfonts
  function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700,700italic|Alegreya:400italic,700italic,400,700');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

// Remove Mobile Menu Toggle
    function spun_deactivate_menu() {
   			wp_dequeue_script( 'spun-toggle' );
		}
	add_action( 'wp_print_scripts', 'spun_deactivate_menu' );

?>

