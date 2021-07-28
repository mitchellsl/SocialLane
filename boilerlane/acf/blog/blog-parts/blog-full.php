<div class="row sidebar">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="row blog-wrapper">
            <?php

              // WP_Query arguments
              $args = array(
                'post_type'              => array( 'post' ),
                'posts_per_page'         => '6',
                'order'                  => 'DESC',
                'orderby'                => 'date',
              );

              // The Query
              $query = new WP_Query( $args );

              // The Loop
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
                  ?>

                <div id="post-<?php the_ID(); ?>" class="col-blog">
                  <div class="blog-card--thumbnail">
                    <?php if ( has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail();?>
                    <?php endif; ?>
                  </div>
                  <div class="blog-card--title">
                    <?php the_title(); ?>
                  </div>
                  <div class="blog-card--content">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="blog-card--button-wrapper">
                    <a class="button" href="<?php echo the_permalink() ?>">Lees meer</a>
                  </div>
                </div>
                <?php
                  }
                  ?>

                <?php
              
              } else {
                // no posts found
              }

              // Restore original Post Data
              wp_reset_postdata();
            ?>

          </div>
          <div class="row">
          <?php 
            // don't display the button if there are not enough posts
            if (  $query->max_num_pages > 1 )
              echo '<div id="loadmore" class="misha_loadmore">More posts</div>'; // you can use <a> as well
          ?>
          </div>
        </div>
      