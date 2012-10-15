<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="google-site-verification" content="uvx7BhaUTNz29nQgydsFPRsErfqYBhPEV_svnHvW7H0" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
<?php do_action( 'before' ); ?>
	<header id="branding" role="banner">
      <div id="inner-header" class="clearfix">
		<hgroup id="site-heading">
            <img src="/wp-content/themes/living-journal/library/images/jt2.png" id="site-img" />
            <div id="site-verbage">
                <h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div>
		</hgroup>

		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'living-journal' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'living-journal' ); ?>"><?php _e( 'Skip to content', 'living-journal' ); ?></a></div>
			<?php livingjournal_main_nav(); // Adjust using Menus in Wordpress Admin ?>
			<?php get_search_form(); ?>
		</nav><!-- #access -->
        

      </div>

      
	</header><!-- #branding -->
