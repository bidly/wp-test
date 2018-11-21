<?php

/** Template Name: Last Posts
**/




get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

			<div id="header-announcements">
				<h3>Last ADded 5 Movie</h3>
				<?php
				$queryObject = new WP_Query( 'post_type=films&posts_per_page=5' );
				// The Loop!
				if ($queryObject->have_posts()) {
					?>
					<ul>
					<?php
					while ($queryObject->have_posts()) {
						$queryObject->the_post();
						?>

						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php
					}
					?>
					</ul>
					<div><a href="http://localhost/wp_test/wordpress/public-view/">View More</a></div>
					<?php
				}
				?>
			</div>

							
				

			
			
			

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
