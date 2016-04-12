<?php get_header(); ?>

<div class="portfolio-single">

    <!-- start of loop -->
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- title of the project -->
            <h1 class="entry-title"><?php the_title(); ?></h1>

        </div><!-- #post-## -->

       
        <?php 
            // repeater for the icons
        
            if(get_field('project-icons')): ?>
            
                <div class="port-icons-wrapper">
                    <?php while(the_repeater_field('project-icons')): ?>
                
                            <div class="port-icons">
                                <!-- This pulls in teh project icons -->
                                <?php $image = get_sub_field('project-icon-image'); ?>
                                <img src="<?php echo $image['sizes']['square'] ?>">
                               
                            </div>
                       
                       
                    <?php endwhile; ?>
                </div>
            
            <?php endif;
        ?>

        <!-- entry content -->
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- pulls in entry content for the post -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php 
            // portfolio item repeater
            if(get_field('project-item')): ?>

                <div class="single-portfolio-item">
                    <?php while(the_repeater_field('project-item')): ?>
                        <!-- This pulls in teh project icons -->
                        <h2><?php the_sub_field('project-title'); ?></h2>
                        <p><?php the_sub_field('project-description'); ?></p>
                       
                        <!-- image repeater field inside of the portfolio item repeater field -->
                        <div class="main-container ">
                            <div class="js-flickity" data-flickity-options='{ "imagesLoaded": true }'>
                                <?php  if( have_rows('project-image-gallery') ): ?>

                                    <?php while( have_rows('project-image-gallery') ): the_row();
                                        $image = get_sub_field('project-image');
                                    ?> 
                                        <div class="cell carousel-cell">
                                            <img src="<?php echo $image['sizes']['single-portfolio'] ?>">
                                        </div>
                                               
                                    <?php endwhile; ?>         
                                <?php endif;?>
                            </div>
                        </div> 
                   
                    <?php endwhile; ?>
                       
                </div>
                        
        <?php endif;?>
        <!-- end of portfolio item div-->
  
    <?php endwhile; // end of the loop. ?>

    <?php wp_reset_postdata(); ?>


<?php get_footer(); ?>