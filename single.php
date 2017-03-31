<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="content-wrapper">


	<section id="primary" class="site-content">
		<div id="content" role="main">

        
<div class="entry-content">
 <div id="practice-left">   

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
                
                

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->


			<?php endwhile; // end of the loop. ?>
            
            </div>
            <div id="practice-right">
            

	<h2>Most Recent Posts</h2>
<?php 
	$the_query = new WP_Query( 'showposts=5' ); 
	if( $the_query->have_posts() ) :
	while( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<div>
        <a href="<?php the_permalink() ?>">
        	<?php the_title(); ?>
        </a>
    </div><!-- quicklink -->

 <?php endwhile; endif; wp_reset_postdata(); ?><p>&nbsp;
	<h2>Categories</h2>
<?php wp_list_cats('sort_column=name&optioncount=1') ?>

    <div class="archives">
    	<h2>Archives</h2>
        <ul>
        	<?php wp_get_archives('type=yearly'); ?>
        </ul>
    </div><!-- archives-->
    



            
            </div>
                
</div>

		</div><!-- #content -->
	</section><!-- #primary -->
    
    <!--quick-links-page -->


<?php get_footer(); ?>