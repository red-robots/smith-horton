<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>




	<div id="primary" class="">
		<div id="content" role="main">


	
<div id="row1">

<div id="row1-box1">



<div id="row1-box1-content">
	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'post',
		'posts_per_page' => 2,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>

	<div class="home-news-entry js-blocks">
    
<div class="home-news-entry-category"><h3>BLOG</h3></div><div class="home-news-entry-date-wrapper"><div class="home-news-entry-date"><?php the_date('m/d'); ?></div></div>
    
<div class="home-news-entry-heading"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<p><?php  echo get_excerpt(110); ?> </p>
        
  
        
	</div><!-- blogentry -->

	<?php endwhile; ?>

	<?php endif; ?>

</div>
</div>

<div id="row1-box2">
<h2>Recently Tweeted</h2>
<div id="row1-box2-content">
<a class="twitter-timeline" href="https://twitter.com/LawCLT" data-widget-id="633326083002208256" data-chrome="noheader nofooter noborders" data-tweet-limit="2">Tweets by @LawCLT</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

</div>

<!-- / row1 box3 --> 

</div> <!-- / row1 -->  


 

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
</div>

<div id="row2">
<div id="row2-box1-wrapper" class="js-blocks">
<div id="row2-box1">
<h2>Get In Touch</h2>

<div id="row2-box1-left">
<h2>Union County</h2>

118 Matthews-Indian Trail Rd.<br>
Indian Trail, NC 28079

<div class="get-directions"><a href="https://www.google.com/maps/dir//118+Matthews-Indian+Trail+Rd,+Indian+Trail,+NC+28079/@35.079947,-80.6679879,17z/data=!4m13!1m4!3m3!1s0x885424fc9d419cd1:0x687f6ea9d8cdbb81!2s118+Matthews-Indian+Trail+Rd,+Indian+Trail,+NC+28079!3b1!4m7!1m0!1m5!1m1!1s0x885424fc9d419cd1:0x687f6ea9d8cdbb81!2m2!1d-80.6679879!2d35.079947" target="_blank">Get Directions +</a></div>
</div>

<div id="row2-box1-right">
<h2>Mecklenburg County</h2>
128 N. McDowell St.<br>
Charlotte, NC 28204

<div class="get-directions"><a href="https://www.google.com/maps/dir//128+N+McDowell+St,+Charlotte,+NC+28204/@35.2204564,-80.8352916,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x8856a020321d135f:0x565a9e299b37ec0b!2m2!1d-80.8329849!2d35.220452" target="_blank">Get Directions +</a></div></div>


<div id="row2-box1-right2">
PHONE: 704.625.0691<br>
FAX: 704.625.0692
</div>

<div id="row2-box1-right2">
<div id="quicklinks-social"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-lg-facebook.png" alt="" border="0"></a><!-- twitter--><a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-lg-twitter.png" alt="" border="0"></a>

<!--<div class="linkedin-link"><a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="" border="0"></a><div class="linkedin-link-text"><a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank">D. Horton</a></div></div>

<div class="linkedin-link"><a href="<?php the_field('linkedin_link2', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" alt="" border="0"></a><div class="linkedin-link-text"><a href="<?php the_field('linkedin_link2', 'option'); ?>" target="_blank">J. Smith</a></div></div>


gcal link<a href="<?php the_field('linkedin_link2', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-lg-gcal.png" alt="" border="0"></a>--><!--email link <a href="<?php the_field('email_address', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-lg-email.png" alt="" border="0"></a>--></div>
</div>


</div>
</div>

<div id="row2-box2-wrapper" class="js-blocks">
<div id="row2-box2">
<h2>Tell Us About Your Legal Issue</h2>
	<div class="form-wrap">
	<?php $recent = new WP_Query("page_id=107"); while($recent->have_posts()) : $recent->the_post();?>
	<?php the_field('legal_issue_form'); ?>
	<?php endwhile; wp_reset_postdata(); // end of the loop. ?>
	</div>
</div>
</div>
</div> <!-- / row2 -->  
<?php get_footer(); ?>