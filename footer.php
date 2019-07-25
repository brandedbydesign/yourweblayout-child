<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package yourweblayout
 */
?>

		</div><!-- .container -->
	</div><!-- .site-content -->
	<!--<footer id="colophon" class="site-footer navbar-fixed-bottom"> use this for footer fixed to bottom of browser -->
	<footer id="colophon" class="site-footer">
		<div class="container">
        	<div class="row">
				<nav id="footer-navigation" class="nav">
					<?php wp_nav_menu( array(
						'menu'              => 'secondary',
						'theme_location'    => 'secondary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'nav',
						'container_id'      => 'secondary-nav',
						'menu_class'        => 'nav nav-pills nav-justified dropup',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</nav><!-- #footer-navigation -->
            </div><!-- .row -->
        	 <div class="row">
        		<div class="col-sm-4">
                	<div class="footer-col-1">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-col-1') ) : endif; ?>
                    </div><!-- footer-col-1 -->
            	</div><!-- .col -->
                <div class="col-sm-4">
                	<div class="footer-col-2">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-col-2') ) : endif; ?>
                    </div><!-- footer-col-3 -->
            	</div><!-- .col -->
                <div class="col-sm-4">
                	<div class="footer-col-3">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-col-3') ) : endif; ?>
                        <!-- <a href="#" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a> -->
                    </div><!-- footer-col-3 -->
					<div class="footer-social">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-social') ) : endif; ?>
                        <!-- <a href="#" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a> -->
                    </div><!-- footer-social -->
            	</div><!-- .col -->
            </div><!-- .row -->
		</div><!-- .container -->
        
        <!--  back top top button -->
        <a href="#" class="topbutton"><i class="fas fa-angle-up"></i></a>
        <!--  end back top top button -->
        
		<div class="attribution">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                        Web Hosting and Design by <a href="http://www.inmotionhosting.com/" rel="nofollow" target="_blank">InMotion Hosting</a>
                        <!--Web Hosting and Design by Web Hosting Hub.--></p>
                    </div><!-- .col -->
                </div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .attribution -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>