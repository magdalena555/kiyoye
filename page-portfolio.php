<?php

/*
  Template Name: portfolio
*/

get_header();  ?>

<section class="portfolio-page">
    <h2><?php the_title(); ?></h2>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="portfolio-page-description">
            <?php echo the_content();?>
        </div>
        <?php endwhile; endif; ?>
    <div class="image-wrapper">    
    <?php 


      $params = array(
        'post_per_page' => -1,
        'post_type' => 'portfolio', 
        'orderby' => 'menu_order'

        );
      // this passes the parameter
      $portfolio = new WP_Query($params);

      // This is a custom query loop
      if($portfolio->have_posts()) while($portfolio->have_posts()) : $portfolio->the_post(); ?>



        <div class="portfolio-small-image">
            <a href="<?php the_permalink() ?> ">
                <div class="port-filter"></div>
                <h3><?php the_title(); ?> </h3>
                <?php the_post_thumbnail('portfolio' ); ?>
            </a>
        </div>
    

    <?php endwhile; ?>
    </div>   
</section>


<?php get_footer(); ?>