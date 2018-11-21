<?php

/** Template Name: List
**/




get_header(); ?>



	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		
		
		
			<?php
			
			
			/* actions fired when listing/adding/editing posts or pages */
			/* admin_head-(hookname) */
			add_action( 'admin_head-post.php', 'admin_head_post_editing' );
			add_action( 'admin_head-post-new.php',  'admin_head_post_new' );
			add_action( 'admin_head-edit.php', 'admin_head_post_listing' );

			?>
			<table>
			<tr>
				<th>Title</th>
				<th>Genre</th>
				<th>Country</th>
				<th>Ticket Price</th>
				<th>Release Date</th>
			</tr>
			<?php
			function admin_head_post_listing($title, $genre, $country, $ticket_price, $release_date) {
				// sample code, handy for custom post types
				?>
				<tr>
					<td><?php echo $title;?></td>
					<td><?php echo $genre;?></td>
					<td><?php echo $country;?></td>
					<td><?php echo $ticket_price;?></td>
					<td><?php echo $release_date;?></td>
				</tr>
				<?php
			}
				/*foreach loop*/
				$args = array(
					'post_type' => 'films'
					);
					
					$the_query = new WP_Query($args);
					
				if($the_query->have_posts() ): while ($the_query->have_posts() ):$the_query->the_post();
				
				
				/*filling the table*/
				$genre = get_the_term_list( $post->ID, 'genre');
				$genre = strip_tags( $genre );
				
				$country = get_the_term_list( $post->ID, 'country');
				$country = strip_tags( $country );

				$title = get_the_title();
				$ticket_price = get_field('ticket_price');
				$release_date = get_field('release_date');
				
				admin_head_post_listing($title,$genre, $country, $ticket_price ,$release_date);
				?>
				<?php
				endwhile;
				endif;
			?>
			</table>

			
			
			

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
