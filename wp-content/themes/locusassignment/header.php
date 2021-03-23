<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locusAssignment
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'locusassignment'); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="main-header-container">
				<div class="header-content">
					<div class="logo-column">
						<?php the_custom_logo(); ?>
					</div>

				<div class="navigation-column">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
</button>
						<?php
							wp_nav_menu(array(
							    'theme_location' => 'menu-1',
							    'menu_id' => 'primary-menu',
							));
						?>
					</nav>
				</div>
				<!-- #language bar -->
				<div class="header-right-column">
					<div class="country-block">
						<a href="javascript:void(0)" class="lang-btn"></a>
						
							<div class="lang-list">
							<?php echo do_shortcode('[glt language="English" label="English"  text="yes" image_size="24"]'); ?>
							<?php echo do_shortcode('[glt language="German" label="German"  text="yes" image_size="24"]'); ?>
							<?php echo do_shortcode('[glt language="French" label="French"  text="yes" image_size="24"]'); ?>
							</div>
				      
						
					</div>
					<div class="schedule-demo-column">
						<button class="schedule secondary">Schedule Demo</button>
					</div>
				</div> 
				</div>
			</div>
		<!-- #site-navigation -->
	</header><!-- #masthead -->
