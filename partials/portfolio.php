<div class="portfolio">
	<div class="body-wrapper">
		<div class="portfolio-description">
			<h2><?php the_field('portfolio-title'); ?></h2>
			<p><?php the_field('portfolio-description'); ?></p>
		</div>
		<div class="portfolio-item">
			
			<?php 
				$params = array(
					'posts_per_page' => 3,
					'orderby' => 'title',
					'post_type' => 'portfolio',
					// this pulls in the custom taxonomy that pulls in the featured image
					'tax_query' => array(
						array(
							// taxonomy term of whats it pulling in
							'terms' => 'featured-image',
							// slug name of the taxonomy
							'taxonomy' => 'portfoliocategories',
							// this specifies the format of the terms value
							'field' => 'slug',
	 					),
					),
					);

				// this passes the parameter
				$portfolio = new WP_Query($params);
				// This is a custom query loop
				if($portfolio->have_posts()) while($portfolio->have_posts()) : $portfolio->the_post(); ?>

					<!-- this make the image a link -->
				<div class="portfolio-small-image">
					<a href="<?php the_permalink() ?> ">
						<div class="port-filter"></div>
						<h3><?php the_title(); ?> </h3>
						<?php the_post_thumbnail('portfolio' ); ?>
					</a>
				</div>
				
			<?php endwhile; ?>
			<!-- MUST ALWAYS USE AFTER CUSTOM QUERY -->
			<?php wp_reset_postdata(); ?>

		</div>
		<!-- button -->
		<a class="button" href="<?php the_field('portpagelink'); ?>">
			<h4>
				view more
			</h4>
		</a>
	
	</div>
</div>