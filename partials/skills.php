<div id="skills" class="skills">
	<div class="body-wrapper">
		<h2><?php the_field('skills-title'); ?></h2>
		<div class="skills-description">
			<?php the_field('skills-description'); ?>
		</div>
		<div class="skills-wrapper">
			<?php 
				// about main title
				if(get_field('skills-item')): ?>

				    <?php while(the_repeater_field('skills-item')): ?>
						<div class="skills-item">
					    	<!-- skill image -->
					        <?php $image = get_sub_field('skill-image'); ?>
					        <img src="<?php echo $image['sizes']['square'] ?>">
							<!-- skill title  -->
							<h2><?php the_sub_field('skill-item-title'); ?></h2>
							<!-- skill content -->
							<p><?php the_sub_field('skill-item-content'); ?></p>

						</div>

				    <?php endwhile; ?>

				 <?php endif;
			 ?>
		</div>
	</div>
</div>