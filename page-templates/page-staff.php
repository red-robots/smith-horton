<?php
/**
 * Template Name: Attorneys & Staff
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="content-wrapper">

	<div id="primary" class="site-content">

				
				<div class="entry-content">
          

<div id="staff-content">
<?php while ( have_posts() ) : the_post(); ?>       
<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php endwhile; // end of the loop. ?>
</div>
                
       
<!-- custom post type feed -->
<div id="staff-featured">  
  <?php /* Second Custom Query pulling the post type, "Staff" */ 
   	 $args = array(
    	 'post_type' => array('staff'), // In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
    	 'posts_per_page' => '-1', 'orderby'=> 'title', 'order' => 'Desc' // # of posts to show use -1 for all posts. 
    	 );
    	 $query = new WP_Query( $args );  // Query all of your arguments from above
   	 ?>
   	 <?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>


<?php if( get_field('featured') == 'Featured' ): ?>
 
<div class="featured-staff-box">

<div class="featured-staff-box-image">
<?php
$image = get_field('photo');
  $image = get_field('photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'featured-staff';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<a href="<?php the_permalink() ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></a>
    

<?php endif; ?>
</div>

<div class="staff-box-content"><div class="staff-email">
<a href="mailto:<?php the_field("email"); ?>">
<img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Email" border="0"></a></div>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<h3><a href="<?php the_permalink() ?>"><?php the_field("title"); ?> ></a></h3>


  </div>

</div>

<?php endif; ?>
   	 
	 <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
</div>  
<!-- / custom post type feed -->      


<!-- custom post type feed -->
<div id="staff-staff"> 
  <?php /* Second Custom Query pulling the post type, "Staff" */ 
   	 $args = array(
    	 'post_type' => array('staff'), // In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
    	 'posts_per_page' => '-1', 'orderby'=> 'title', 'order' => 'Desc' // # of posts to show use -1 for all posts. 
    	 );
    	 $query = new WP_Query( $args );  // Query all of your arguments from above
   	 ?>
   	 <?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>


<?php if( get_field('featured') == 'Staff' ): ?>


<?php if( get_field('full_bio') == 'Yes' ): ?>

<div class="staff-box">

<div class="staff-box-image">
<?php
$image = get_field('photo');
  $image = get_field('photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'staff';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<a href="<?php the_permalink() ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></a>
<?php endif; ?>
</div>

<div class="staff-box-content"><div class="staff-email">
<a href="mailto:<?php the_field("email"); ?>">
<img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Email" border="0"></a></div><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<h3><a href="<?php the_permalink() ?>"><?php the_field("title"); ?> ></a></h3></div>
</div>
<?php else : ?> 

<div class="staff-box">

<div class="staff-box-image">
<?php
$image = get_field('photo');
  $image = get_field('photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'staff';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>
</div>

<div class="staff-box-content"><h2><?php the_title(); ?></h2>
<h3><?php the_field("title"); ?></h3></div>
</div>
<?php endif; ?>

 


<?php endif; ?>
   	 
	 <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
     
     <div class="staff-box2"><div class="staff-box-image"><div id="staff-contact-padding"><a href="<?php bloginfo('url'); ?>/contact-us">Contact us today to schedule a consultation ></a></div></div></div>
     
     
</div>  
<!-- / custom post type feed -->        

                            
                </div><!-- entry content -->
                
                


		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>