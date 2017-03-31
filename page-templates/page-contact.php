<?php
/**
 * Template Name: Contact Us
 *
 *
 */

get_header(); ?>


<div id="content-wrapper">

	<div id="primary" class="site-content">
		<div id="content" role="main">
        
        

				
<div class="entry-content">
  <?php while ( have_posts() ) : the_post(); ?>                 
  <h1><?php the_title(); ?></h1>

  <?php endwhile; // end of the loop. ?>

<div id="contact-box">
  <div id="contact-box-phone">
  T: 704.625.0691
  <br>F: 704.625.0692
  </div><!-- contact-box phone -->
<div id="contact-box-content">

<div id="contact-box1">
<!-- -->
  <?php /* Second Custom Query pulling the post type, "Staff" */ 
   	 $args = array(
    	 'post_type' => array('staff'), // In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
    	 'posts_per_page' => '-1', 'orderby'=> 'title', 'order' => 'Desc' // # of posts to show use -1 for all posts. 
    	 );
    	 $query = new WP_Query( $args );  // Query all of your arguments from above
   	 ?>
   	 <?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>


<?php if( get_field('featured') == 'Featured' ): ?>
	<div class="staff-email">
<a href="mailto:<?php the_field("email"); ?>">
<img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="" border="0"> <?php the_title(); ?>
</a></div>		

<?php endif; ?>
<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<!-- -->
</div>

<div id="contact-box2">
<!-- -->
  <?php /* Second Custom Query pulling the post type, "Staff" */ 
   	 $args = array(
    	 'post_type' => array('staff'), // In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
    	 'posts_per_page' => '-1', 'orderby'=> 'title', 'order' => 'Desc' // # of posts to show use -1 for all posts. 
    	 );
    	 $query = new WP_Query( $args );  // Query all of your arguments from above
   	 ?>
	 <?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>


<?php if( get_field('featured') == 'Staff' ): ?>
<div class="staff-email">
<a href="mailto:<?php the_field("email"); ?>">
<img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="" border="0"> <?php the_title(); ?>
</a></div>	

<?php endif; ?>

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<!-- -->
</div><!-- contact box 2 -->

</div>
<!-- contact box content-->

</div>
<!-- contact box -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="contact-left"><?php the_field("left_content"); ?></div>

<div id="contact-right"><?php the_field("right_content"); ?></div>

<?php endwhile; endif; ?>

                </div><!-- entry content -->
                


		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>