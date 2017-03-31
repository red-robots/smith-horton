<?php
/**
 * Template Name: Testimonials
 */

get_header(); ?>

<div id="content-wrapper">
                
                
                
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php
			/*
			*	Testimonials
			*/
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'testimonial',
				'posts_per_page' => 5
			));
				if ($wp_query->have_posts()) : ?>
    
			<section class="testimonials">
				<h2>Testimonials</h2>
				<div class="testi-wrap">
					<div class="flexslider">
						<ul class="slides">
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
								<li>
									<div class="testimonial">
										<?php the_content(); ?>
										<!-- <div class="signed">
											<?php //the_title(); ?>
										</div> -->
									</div>
								</li>
							<?php endwhile; ?>
						</ul>
					</div><!-- slider -->	
				</div><!-- wrap -->	
				
			</section>

			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>