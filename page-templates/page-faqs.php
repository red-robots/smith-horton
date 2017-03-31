<?php
/**
 * Template Name: FAQs
 *
 * 
 */

get_header(); ?>

<div id="content-wrapper">

	<div id="primary" class="site-content">
		<div id="content" role="main">
        

				
				<div class="entry-content">
                <div id="practice-left">
<?php while ( have_posts() ) : the_post(); ?>                 
<h1><?php the_title(); ?></h1>
			<?php endwhile; // end of the loop. ?>
                
   <?php while ( have_posts() ) : the_post(); ?>                

                    <?php the_content(); ?>
                    
                    
                    <?php if( have_rows('faqs') ): ?>
                    <div class="faqs">
                    <?php while( have_rows('faqs') ): the_row(); 
					
							$question = get_sub_field('question');
							$answer = get_sub_field('answer');
							
					?>
                    <div class="faqrow">
                    	<div class="question">
                        <div class="question-image"></div><!--question-image-->
							<?php the_sub_field('question'); ?>
                        </div><!--question-->
               		<div class="answer"><?php the_sub_field('answer'); ?></div><!--answer-->
                    </div><!-- faqrow -->
                    
                    <?php endwhile; ?>
                    </div><!-- faqs -->
                    <?php endif; ?>

  </div>                  
                    
  <div id="practice-right">
<h3>Frequenty Asked Questions</h3>
<?php wp_nav_menu( array( 'theme_location' => 'subnav2', 'menu_class' => 'subnav' ) ); ?>

</div>                  
                    
                            
                </div><!-- entry content -->
                
                
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>