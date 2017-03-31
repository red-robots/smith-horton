<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>







</div>


	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info"><div class="site-info-content">
        
<div id="footer1text1">
<a href="<?php bloginfo('url'); ?>/legal-disclaimer">Legal Disclaimer</a>
<br>
&copy;<?php echo date('Y'); ?> <?php the_field('footer_content', 'option'); ?></div>
        
<div id="creds"><a href="<?php bloginfo('url'); ?>/sitemap">Sitemap</a> | Site by <a href="http://www.bellaworksweb.com" target="_blank">Bellaworks</a></div>
        
	  </div></div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>