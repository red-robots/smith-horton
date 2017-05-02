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
            <div class="entry-content staff-entry-content">

				<?php while ( have_posts() ) :
				the_post(); ?>


                <div id="single-staff-photo"><?php
					$image   = get_field( 'photo' );
					$image   = get_field( 'photo' );
					$url     = $image['url'];
					$title   = $image['title'];
					$alt     = $image['alt'];
					$caption = $image['caption'];

					// thumbnail or custom size that will go
					// into the "thumb" variable.
					$size   = 'single-staff';
					$thumb  = $image['sizes'][ $size ];
					$width  = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];
					if ( ! empty( $image ) ): ?>
                        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>


					<?php endif; ?>


                    <!-- -->

					<?php

					$someField = get_field( 'practice_areas' );

					if ( $someField != "" ) { ?>


                        <div id="single-practice-box">
                            <h2>PRACTICE AREAS</h2>

							<?php

							/*
							*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
							*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
							*/

							$post_objects = get_field( 'practice_areas' );

							if ( $post_objects ): ?>
                                <ul>
									<?php foreach ( $post_objects as $post_object ): ?>
                                        <li>
                                            <a href="<?php echo get_permalink( $post_object->ID ); ?>"><?php echo get_the_title( $post_object->ID ); ?></a>

                                        </li>
									<?php endforeach; ?>
                                </ul>
							<?php endif; ?>
                        </div>

					<?php } ?>
                    <!-- -->
	                <?php $id = get_the_id();
	                if($id === 318 || $id === 320){?>
                        <img src="<?php bloginfo( 'template_url' ); ?>/images/LEGALELITELOGO.jpg" alt="Legal Elite Logo" class="legalelite">
	                <?php }?>

                </div>


                <div id="single-content">

                    <h1><?php the_title(); ?></h1>
                    <h3><?php the_field( "title" ); ?></h3>

					<?php the_content(); ?>

                    <div class="single-staff-email">
                        <a href="mailto:<?php the_field( "email" ); ?>">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/email.png" alt="" border="0"></a>
                    </div>

                    <!-- -->

                    <div class="single-staff-email">
                        <a href="<?php the_field( "linkedin" ); ?>"><img
                                    src="<?php bloginfo( 'template_url' ); ?>/images/linkedin2.png" alt=""
                                    border="0"></a></div>

                    <!-- -->
					<?php endwhile; // end of the loop. ?>

                </div>
            </div>


        </div><!-- #content -->
    </section><!-- #primary -->

    <!--quick-links-page -->


<?php get_footer(); ?>