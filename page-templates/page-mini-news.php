<?php
/**
 * Template Name: Blog
 *
 *
 */

get_header(); ?>

<div id="content-wrapper">
			<div id="primary" class="site-content">
		<div id="content" role="main">
        
    
        

		
        
        <div class="entry-content">
 <div id="practice-left">   
               <h1><?php the_title(); ?></h1>
  	
	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'post',
		'posts_per_page' => 5,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(230); ?> </p>
        
  
        
	</div><!-- blogentry -->
	<?php endwhile; ?>
	<?php pagi_posts_nav(); ?>
	<?php endif; ?>
</div>

<div id="practice-right">   
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
<!-- sidebar -->
</div>
                	                            
      </div><!-- entry content -->
   </div><!-- #content -->
</div><!-- #primary -->
</div>
<?php get_footer(); ?>