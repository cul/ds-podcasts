<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Checathlon
 */

 /* EDIT: adds CUL banner and Matomo tracking code */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php
	if(str_ends_with($_SERVER['SERVER_NAME'], 'podcasts.library.columbia.edu')) {
	    ?>

    <!-- Matomo -->
    <script>
      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="https://columbia-libraries.matomo.cloud/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '47']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src='https://cdn.matomo.cloud/columbia-libraries.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->

<?php } ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-top-banner">
  <div class="cul-logo">
    <a href="<?php echo network_home_url()?>"><img src="<?php echo get_theme_file_uri('/assets/logo-cul-podcasts.png'); ?>" alt="Columbia University Libraries Podcasts"></a>
  </div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'checathlon' ); ?></a>

	<div class="site-header-wrap">
		<header id="masthead" class="site-header main-padding" role="banner">
			<div class="wrapper main-width">

				<?php
					// Custom logo.
					checathlon_the_custom_logo();

					do_action( 'checathlon_after_the_custom_logo' );
				?>

				<div class="site-branding">
					<?php
					// Site title.
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title title-font no-margin-bottom"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title title-font no-margin-bottom"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
						endif;
					?>
				</div><!-- .site-branding -->

				<?php
					get_template_part( 'menus/menu', 'primary' ); // Loads the menus/menu-primary.php template.
				?>

			</div><!-- .wrapper -->
			<?php do_action( 'checathlon_inside_header' ); ?>
		</header><!-- .site-header -->
	</div><!-- .site-header-wrap -->

	<?php do_action( 'checathlon_after_header' ); ?>

	<div id="content" class="site-content">
