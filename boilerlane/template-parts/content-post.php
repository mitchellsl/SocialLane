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