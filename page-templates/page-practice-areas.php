<?php
/**
 * Template Name: Practice Areas Main
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


<?php the_content(); ?>


<div id="practice-main">              

<div class="practice-main1">
  <div class="practice-main-text1">
    <a href="#" class="practice-title">
      <h2 class="up">CRIMINAL DEFENSE</h2>
    </a>
    <div class="practice-main-text2">
      <h2 class="over">CRIMINAL DEFENSE</h2>
      <?php the_field("criminal_defense"); ?>
      <div class="practice-more-link">
        <a class="link" href="<?php bloginfo('url'); ?>/criminal-defense">Learn More ></a>
      </div>
    </div>  
  </div>
</div>

<div class="practice-main1">
<div class="practice-main-text1">
  <a href="#" class="practice-title">
  <h2 class="up">FAMILY LAW</h2>
  </a>
  
  
<div class="practice-main-text2">
 <h2 class="over">FAMILY LAW</h2>
<?php the_field("family_law"); ?>

<div class="practice-more-link"><a class="link"  href="<?php bloginfo('url'); ?>/family-law">Learn More ></a></div>
</div>  
  </div>


</div>

<div class="practice-main2">

<div class="practice-main-text1">
  <a href="#" class="practice-title">
  <h2 class="up">PERSONAL INJURY</h2>
  </a>
  
  
<div class="practice-main-text2">
  <h2 class="over">PERSONAL INJURY</h2>
<?php the_field("personal_injury"); ?>

<div class="practice-more-link"><a class="link"  href="<?php bloginfo('url'); ?>/personal-injury">Learn More ></a></div>
</div>  
  </div>
</div>

<!-- -->
<div class="practice-main1">
<div class="practice-main-text1">
  <a href="#" class="practice-title">
  <h2 class="up">CIVIL LITIGATION</h2>
  </a>
  
  
<div class="practice-main-text2">
  <h2 class="over">CIVIL LITIGATION</h2>
<?php the_field("civil_litigation"); ?>

<div class="practice-more-link"><a class="link"  href="<?php bloginfo('url'); ?>/civil-litigation">Learn More ></a></div>
</div>  
  </div>
</div>
<!-- -->

<div class="practice-main1">

<div class="practice-main-text1">
  <a href="#" class="practice-title">
  <h2 class="up">ESTATE PLANNING</h2>
  </a>
  
  
<div class="practice-main-text2">
 <h2 class="over">ESTATE PLANNING</h2>
<?php the_field("estate_planning"); ?>

<div class="practice-more-link"><a class="link"  href="<?php bloginfo('url'); ?>/practice-areas/estate-planningprobate/">Learn More ></a></div>
</div>  
  </div>
</div>



</div>





<?php endwhile; // end of the loop. ?>
                </div><!-- entry content -->
                


		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>