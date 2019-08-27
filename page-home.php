<?php
/**
 * Template Name: Home Page
 *
 * @package yourweblayout
 */

get_header(); ?>
</div><!-- end container -->
<?php
    if(has_post_thumbnail()){
        echo '<div class="leaderboard-image">';
        the_post_thumbnail('full');
        echo '</div>';
    }

    else{
        echo '<div class="leaderboard-without-image"></div>';
    }
?>
<!-- --------------------  OR ----------------------------- -->
<?php 
    echo do_shortcode("[metaslider id=39]"); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
						<?php endwhile; // end of the loop. ?>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- end container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- code for button with hover effect on font wawesome icon -->	
<div><a href="#" class="btn-primary hvr-icon-forward">Learn More <i class="fas fa-chevron-right hvr-icon"></i></a></div>

<!-- code for tooltip with hover effect -->
<div class="text-right">
<div class="tooltip">Hover over this text to activate the custom tooltip.
      <span class="tooltiptext">put popup content here<img src="https://articulate-solution.com/main/wp-content/uploads/2018/11/AdobeStock_170860988-Converted.jpg" alt="lock in the internet" width="696" height="435" class="alignnone size-full wp-image-50" /></span>
</div>
</div>

     <div class="mid-section">
    	<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo esc_url( home_url( 'page-name/' ) ); ?>"><?php 
                    $image = get_field('image_1');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="hvr-grow" />
                    <?php endif; ?></a>
                    <h2><?php the_field('heading_1'); ?></h2>
					<?php the_field('content_1'); ?>
				</div><!-- .col -->
                <div class="col-sm-4">
					<a href="<?php echo esc_url( home_url( 'page-name/' ) ); ?>"><?php 
                    $image = get_field('image_2');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="hvr-grow" />
                    <?php endif; ?></a>
                    <h2><?php the_field('heading_2'); ?></h2>
					<?php the_field('content_2'); ?>
				</div><!-- .col -->
                <div class="col-sm-4">
					<a href="<?php echo esc_url( home_url( 'page-name/' ) ); ?>"><?php 
                    $image = get_field('image_3');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="hvr-grow" />
                    <?php endif; ?></a>
                    <h2><?php the_field('heading_3'); ?></h2>
					<?php the_field('content_3'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- end container -->
    </div><!-- end mid-section -->


<!-------------------------------OR ------------------------------------- -->

<div class="icon-section">
    	<div class="container">
			<div class="row">
				<div class="col-sm-6">
                    <a href="<?php the_field('image_1_link'); ?>">
                    	<div <?php if ( get_field('image_1') ) { echo 'style="background-image: url(' . get_field('image_1') . ')"'; } ?> class="col-sm-4 collage"> <!--use this to apply a class to bg image don't need col-sm-4 if already in column https://trac.imhtech.net/IMW/ticket/2203 -->
						<div <?php if ( get_field('image_1') ) { echo 'style="background-image: url(' . get_field('image_1') . '); background-repeat: no-repeat;"'; } ?>>
							<h3 class="farming-heading"><?php the_field('heading_1'); ?></h3>
						</div><!-- .col -->
					</a>
				</div><!-- .col -->
                <div class="col-sm-6">
                    <a href="<?php the_field('image_2_link'); ?>">
						<div <?php if ( get_field('image_2') ) { echo 'style="background-image: url(' . get_field('image_2') . '); background-repeat: no-repeat;"'; } ?>>
							<h3 class="farming-heading"><?php the_field('heading_2'); ?></h3>
						</div><!-- .col -->
					</a>
				</div><!-- .col --> 
			</div><!-- .row -->
		</div><!-- end container -->
    </div><!-- end icon-section -->
    
<div class="container">        
<?php get_footer(); ?>