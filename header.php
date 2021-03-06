<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<?php wp_head(); ?>


<?php the_field('google_analytics', 'option'); ?>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "Smith Horton Law",
  "image" : "https://smithhorton.com/bw/wp-content/themes/smith-horton/images/smith-horton-law.png",
  "url" : "https://smithhorton.com",
  "parentOrganization": 
    [
        {
            "@type": "LocalBusiness",
            "name" : "Smith Horton Law",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Indian Trail",
                "addressRegion": "NC",
                "postalCode": "28079",
                "streetAddress": "118 Matthews-Indian Trail Rd"
            },
            "telephone" : "(704) 625-0691",
            "image" : "https://smithhorton.com/bw/wp-content/themes/smith-horton/images/smith-horton-law.png"
        },
        {
            "@type": "LocalBusiness",
            "name" : "Smith Horton Law",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Charlotte",
                "addressRegion": "NC",
                "postalCode": "28204",
                "streetAddress": "128 N McDowell St"
            },
            "telephone" : "(704) 625-0691 ",
            "image" : "https://smithhorton.com/bw/wp-content/themes/smith-horton/images/smith-horton-law.png"
        }
    ]
  
  
}
</script>

</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
    
		<div id="header-button">
			<a href="<?php bloginfo('url'); ?>/tell-us-your-legal-issue">Tell Us Your Legal Issue</a>
		</div>

	<div id="logo-space"></div>

     <?php if(is_home()) { ?>
          <h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } else { ?>
          <div class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
        <?php } ?>
    

	<div id="header-phone-mobile"><a href="tel:7046250691">704.625.0691</a></div>
	<div id="header-phone"><a href="tel:7046250691">704.625.0691</a></div>
	
	<div id="navigation">
		
		<nav id="site-navigation" class="main-navigation" role="navigation">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>


	<?php if(is_home()) { ?>
		<?php $recent = new WP_Query("page_id=107"); while($recent->have_posts()) : $recent->the_post();?>
			<div id="banner-wrapper">
				<div id="banner-text"><?php the_content(); ?></div>
			</div>
		<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
	<?php } ?>


	</header><!-- #masthead -->


<?php if(is_home()) { ?>
<div id="banner-photo">

<?php $recent = new WP_Query("page_id=107"); while($recent->have_posts()) : $recent->the_post();?>

<?php 
$image = get_field('photo');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>


<?php endwhile; wp_reset_postdata(); // end of the loop. ?>



</div>

<?php $recent = new WP_Query("page_id=107"); while($recent->have_posts()) : $recent->the_post();?>
<div id="banner-text-mobile"><?php the_content(); ?></div>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>


<!-- / banner photo -->


<div id="home-wrapper">

<div id="blog-title-wrapper"></div>
<div id="page" class="hfeed site">
	<div id="main" class="wrapper">
<?php } ?>
<!-- -->

