<?php

/** Template Name: Reviews
**/




get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

			<?php
				$args = array(
					'post_type' => 'films'
					);
					
					$the_query = new WP_Query($args);
					
				if($the_query->have_posts() ): while ($the_query->have_posts() ):$the_query->the_post();
				?><h2><a><?php the_title(); ?></a></h2><?php
				?><a><?php the_excerpt(); ?></a><?php
				?>
				
				 <ul><?php echo get_the_term_list( $post->ID, 'country', '<li class="jobs_item">Country: ', ', ', '</li>' ) ?></ul>
				 <ul><?php echo get_the_term_list( $post->ID, 'genre', '<li class="jobs_item">Genre: ', ', ', '</li>' ) ?></ul>
				 <ul><li class="jobs_item"><?php echo "Ticket Price:"; echo the_field('ticket_price'); ?> </li></ul>
				 <ul><li class="jobs_item"><?php echo "Release Date:"; echo the_field('release_date'); ?> </li></ul>

			<?php
				
			
				endwhile;
				endif;
				
				
			?>
			
			
			

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
