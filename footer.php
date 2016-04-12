
<div id="contact" class="contact">
	<div class="body-wrapper">
		<h2><?php the_field('contact-title', 'option'); ?></h2>
		<div class="contact-description">
			<p><?php the_field('contact-description', 'option'); ?></p>
		</div>
		<div class="contact-content">
			<!-- phone -->
			<a href="tel:<?php the_field('phone', 'option'); ?>">
				<p><?php the_field('phone', 'option'); ?></p>
			</a>
			<!-- email -->
			<a href="mailto:<?php the_field('email', 'option'); ?>?" target="_top">
				<p>
				<?php the_field('email', 'option'); ?>
				</p>
			</a>
			
		</div>
	</div>
</div>


<footer>
	<div class="body-wrapper">
		<div class="footer-wrapper">	

			<?php if( have_rows('footer-icons', 'option') ): ?>

				<div class="social">
				    <?php while( have_rows('footer-icons', 'option') ): the_row(); ?>
				
						<a href="<?php the_sub_field('social-link', 'option'); ?>">    
					  		<p> 
					  		<?php the_sub_field('social-icon', 'option'); ?>
					  		</p>
				  		</a> 
				  	
				    <?php endwhile; ?>

				</div>

			<?php endif; ?>
		</div>
	</div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>