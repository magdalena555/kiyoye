<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
        <?php
        //get the image
        $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
    <?php endif;  ?>
    <!-- show the featured image  -->
    <section id="home" class="hero" style="background-image: url('<?php echo $feat_image_url ;?>')">
        <div class="body-wrapper">
            <div class="hero-content">
                <h2><?php the_field('home-page-title'); ?></h2>
                <p><?php the_field('home-page-subtitle'); ?> </p>  
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>   