<div class="row full">
     <div class="container">
       <div class="row">
        <div class="col">
          <div class="text">
            <?php echo the_field('heading'); ?>
            <?php echo the_field('content'); ?>
          </div>
          <div class="button-wrapper">
            <?php
              $link = get_field('link');
              if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" rel="noreferrer" href="<?php echo $link_url; ?>"><?php echo $link_title; ?></a>
                    <?php
             endif;
            ?>
          </div>
        </div>
       </div>
     </div>
   </div>