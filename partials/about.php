<div id="about" class="about ">
	<!-- about title -->
	<div class="body-wrapper">
		<h2><?php the_field('about-title'); ?></h2>
		<div class="about-interest-wrapper">
			<?php 
				// about main title
				if(get_field('about-interest')): ?>

				    <?php while(the_repeater_field('about-interest')): ?>
						<div class="about-topic">
					    	<!-- interest-image -->
					        <?php $image = get_sub_field('about-interest-image'); ?>
					        <img src="<?php echo $image['sizes']['square'] ?>">
							<!-- interest topic -->
							<p><?php the_sub_field('about-interest-topic'); ?></p>

						</div>

				    <?php endwhile; ?>

				<?php endif;
			?>
		</div>
		 <div class="about-content-wrapper">
		 	<div class="about-description">
		 		
		 		<?php the_field('about-description'); ?>
		 	</div>
		 	<div class="about-content">
		 		<?php the_field('about-content'); ?>
		 	</div>
		 </div>
	</div>
</div>


