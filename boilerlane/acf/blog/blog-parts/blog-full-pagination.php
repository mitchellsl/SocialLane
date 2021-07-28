<div class="row full-pagination">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="row blog-wrapper">
            <?php

              // WP_Query arguments
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              $args = array(
                'post_type'              => array( 'post' ),
                'paged'                  => $paged,
                'posts_per_page'         => '8',
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
            <div class="pagination">
              <?php 
                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $query->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => '?paged=%#%',
                      'show_all'     => true,
                      'type'         => 'plain',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next' => True,
                      'prev_text' => __('<i class="fas fa-chevron-left"></i>'),
                      'next_text' => __('<i class="fas fa-chevron-right"></i>'),
                      
                      'add_args'     => false,
                      'add_fragment' => '',
                  ) );
              ?>
            </div>
          </div>
      
        </div>
       