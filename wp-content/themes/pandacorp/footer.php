<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rommel
 * @subpackage PandaCorp
 * @since 1.0.0
 */

?>

	</div>
	<div id="custom-footer">
        <div class="section-wrap footer-widget-gallery">
            <div class="section">
                <div class='footer-widgets footer-menu widget-custom'>
                    <!-- Display footer widgets Image-->
                    <?php dynamic_sidebar('footer_widgets_img'); ?>
                </div>
            </div>
        </div>
    </div> 
	<div id="site-footer">
        <div class="section-wrap footer-widget-area">
            <div class="section">
                <div class='footer-widgets copyrights widget-1'>
                    <!-- Display footer widgets 1-->
                    <?php dynamic_sidebar('footer_widgets_1'); ?>
                </div>
                <div class='footer-widgets footer-menu widget-2'>
                    <!-- Display footer widgets 2-->
                    <?php dynamic_sidebar('footer_widgets_2'); ?>
                </div>
            </div>
        </div>
    </div>        
        
<?php wp_footer(); ?>

</body>
</html>
