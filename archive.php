<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
<div id="practice-left"> 

		<?php if ( have_posts() ) : ?>

				<h1><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h1>




			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
			?>
  
<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(230); ?> </p>
        
  
        
	</div>             
<?php endwhile; ?>            
           
   <?php pagi_posts_nav(); ?>   

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
        
        
        
        
        
        

		</div><!-- #content --><div id="practice-right">   
<!-- sidebar -->

	<h2>Categories</h2>
<?php wp_list_cats('sort_column=name&optioncount=1') ?>

    <div class="archives">
    	<h2>Archives</h2>
        <ul>
        	<?php wp_get_archives('type=yearly'); ?>
        </ul>
    </div><!-- archives-->
    

    
</div>
	</div><!-- #primary -->
</div>
<!--quick-links-page -->
</div>
</div>



<?php get_footer(); ?>