<?php 


function grainy_style() {
	wp_enqueue_style( 'grainy-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
}
add_action( 'wp_enqueue_scripts', 'grainy_style' );

if ( ! function_exists( 'grainy_support' ) ) :

	function grainy_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'grainy_support' );

/* Register Pattern Category */

function grainy_register_block_patterns() {

	register_block_pattern_category( 'grainy', array(
		'label'		=> esc_html__( 'Grainy Patterns', 'grainy' ),
	) );

}
add_action( 'init', 'grainy_register_block_patterns' );



?>