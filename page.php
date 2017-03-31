<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="content-wrapper">

	<div id="primary" class="site-content">
		<div id="content" role="main">
        
        
        
        
			       
        


				
				<div class="entry-content">
<?php while ( have_posts() ) : the_post(); ?>                 
<h1><?php the_title(); ?></h1>
			<?php endwhile; // end of the loop. ?>
                
                
<?php if(is_page( 'Criminal Defense' ) ) { ?>
<div id="sidebar-feed">
<h2>Header</h2>
<ul><?php /* Custom Query pulling category, "Volunteer Resources" */  
       	$args = array( 
        	
        	'posts_per_page' => '5', // # of posts to show use -1 for all posts.
   'category_name' => 'Criminal Defense'	
        	);
        	$query = new WP_Query( $args );  // Query all of your arguments from above
       	?>
       	
 	
 	<?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
  
      	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
       	
    
    <?php endwhile; // end while_have posts ?>
    <?php endif; // end have_posts loop query ?>
 </ul>       
 <?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?> 
 
<p><a href="<?php bloginfo('url'); ?>/category/criminal-defense">see more ></a></p>

<!-- / content -->




</div>      


<!-- --><?php } else { ?><!-- -->



<!-- --><?php } ?><!-- -->              
                
                
   <?php while ( have_posts() ) : the_post(); ?>                
                
                	 <?php if(is_page('sitemap')) {
								the_content(); 
								wp_nav_menu( array( 'theme_location' => 'sitemap' ) );
							} else {
                    		 	the_content();
							} ?>
                            
                </div><!-- entry content -->
                
                
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>