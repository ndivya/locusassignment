<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locusAssignment
 */

?>

<footer id="colophon" class="site-footer" style="background-size: red;">
      <div class="container footer-main">
		 <div class="footer-first">
	       <?php dynamic_sidebar( 'footer-top' ); ?>
	    </div>
	   <div class="footer-second">
	   	<?php dynamic_sidebar( 'footer-bottom' ); ?>
	   </div>
</div>
<div class="footer-copyright">
	 <div class="footer-cop">
	   	<?php dynamic_sidebar( 'footer-copyright' ); ?>
	   </div>
</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
