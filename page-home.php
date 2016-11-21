<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main">

  <div class="container">

    <div class="port-container clearfix">

    	<?php 
		$photo_item_args = array(
			'post_type' => 'photo_item',
			'posts_per_page' => -1,
			'meta_key' => 'order_number',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'category_name' => 'one',
			);
		$photo_post_query = new WP_Query($photo_item_args);
		if( $photo_post_query->have_posts() ) {
			while( $photo_post_query->have_posts() ) {
				$photo_post_query->the_post();

				// Get Fields 
				$image = get_field('image');
				$title = get_field('title');
				$description = get_field('description');

				?>

				<figure class="grid-item">

					<img src="<?php echo $image['url'] ?>">

					<a href="#" class="item-overlay">
						<p>- View -</p>
					</a>
				</figure>
				
				<?php
			}
		}
		wp_reset_postdata();
		?>

    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>