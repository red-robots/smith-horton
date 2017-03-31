<?php
/**
 * Template Name: Practice Area
 *
 *
 */

get_header(); ?>

<div id="content-wrapper1"><div id="practice-header-photo">
<?php 
$image = get_field('top_photo');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>
</div>
<div id="content-wrapper-practice">



	<div id="primary" class="site-content">
		<div id="content" role="main">
        
        

				
				<div class="entry-content">
<?php while ( have_posts() ) : the_post(); ?>   

<div id="practice-left">              
<h1><?php the_title(); ?></h1>


<?php the_content(); ?>
<?php endwhile; // end of the loop. ?>




<!-- family law -->

<?php if ( is_page(8) ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 4,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->

<!-- family law -->

<?php if ( $post->post_parent == '8' ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 4,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->


<!--  criminal defense -->

<?php if ( is_page(6) ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 3,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->

<!-- criminal -->

<?php if ( $post->post_parent == '6' ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 3,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->



<!--  personal injury -->

<?php if ( is_page(10) ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 5,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->

<!-- personal injury -->

<?php if ( $post->post_parent == '10' ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 5,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->



<!--  civil litigation -->

<?php if ( is_page(13) ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 6,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->

<!-- civil litigation -->

<?php if ( $post->post_parent == '13' ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 6,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->

<!--  Estate Planning -->

<?php if ( is_page(15) ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 7,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->

<!-- estatae planning -->

<?php if ( $post->post_parent == '15' ) { ?>


	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'cat'=> 7,
		'posts_per_page' => 1,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>
<h3>FROM THE BLOG</h3>    

	<div class="home-news-entry">
    
<div class="home-news-entry-category"><h3><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(290); ?> </p>
        
  
        
	</div><!-- blogentry -->

<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<?php wp_reset_query(); ?>

<?php } ?>
<!---->




<?php while ( have_posts() ) : the_post(); ?>   

<?php

/*
*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
*/

$post_objects = get_field('button');

if( $post_objects ): ?>
   
    <?php foreach( $post_objects as $post_object): ?>
      
            <div class="blue-button"><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></div>
          
       
    <?php endforeach; ?>
  
<?php endif; ?>
<?php endwhile; // end of the loop. ?>
<!---->



</div>

<div id="practice-right">
<h3>Practice Areas</h3>
<?php wp_nav_menu( array( 'theme_location' => 'subnav', 'menu_class' => 'subnav' ) ); ?>

</div>



                </div><!-- entry content -->
                


		</div><!-- #content -->
	</div><!-- #primary -->
</div>
</div>

<!-- -->

<div id="footer-photo">

<div id="footer-photo-text">
<?php the_field("testimonial"); ?>
</div>


</div>


<!-- -->


<?php get_footer(); ?>