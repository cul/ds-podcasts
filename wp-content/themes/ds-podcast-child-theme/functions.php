<?php

// enqueue child theme styles

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version')
    );
}

// add custom color picker to admin

function CULPodcast_customize_register( $wp_customize ) {

	$wp_customize->add_setting('cp_link_color', array(
		'default' => '#df003b',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cp_link_color_control', array(
		'label' => __('Link Color', 'CULPodcast'),
		'section' => 'colors', // this section is registered by parent theme
		'settings' => 'cp_link_color',
	) ) );

}

add_action('customize_register', 'CULPodcast_customize_register');

// custom color css

function CULPodcast_customize_css() { ?>

	<style type="text/css">

		a:link,
		a:visited,
    .page-template-team-page .entry-title a:hover,
    .page-template-team-page .entry-title a:focus,
    .page-template-team-page .entry-title a:active,
    .main-navigation a:hover,
	  .main-navigation a:focus,
	  .main-navigation a:active,
    .main-navigation .current-menu-item > a,
	  .main-navigation .current-menu-ancestor > a,
    .jetpack-testimonial .entry-inner .icon,
    .testimonial .entry-inner .icon,
    .before-footer-widgets-wrapper .icon,
    .checathlon_widget_pricing .icon,
    .highlight-color,
    .menu-toggle,
    .menu-toggle:hover,
    .menu-toggle:focus,
    .menu-toggle:active  {
			color: <?php echo get_theme_mod('cp_link_color'); ?>;
		}

    .archive-description:before,
    .page .entry-subtitle:before,
    .single .entry-subtitle:before {
	    border-bottom: 4px solid <?php echo get_theme_mod('cp_link_color'); ?>;
    }

    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    a.button,
    a.button:visited,
    a.button-secondary:hover,
    a.button-secondary:focus,
    a.button-secondary:active,
    a.edd-cart-saving-button.button:hover,
    a.edd-cart-saving-button.button:focus,
    a.edd-cart-saving-button.button:active,
    .edd-download-info .button.edd-demo-link:hover,
    .edd-download-info .button.edd-demo-link:focus,
    .edd-download-info .button.edd-demo-link:active,
    body .wp-core-ui .quicktags-toolbar input.button.button-small:hover,
    body .wp-core-ui .quicktags-toolbar input.button.button-small:focus,
    body .wp-core-ui .quicktags-toolbar input.button.button-small:active {
	    background-color: <?php echo get_theme_mod('cp_link_color'); ?>;
    }

	</style>

<?php }

add_action('wp_head', 'CULPodcast_customize_css');