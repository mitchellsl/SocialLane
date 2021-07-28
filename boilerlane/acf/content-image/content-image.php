<?php
/**
 * Content Image Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'content-image-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'content-image';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }
if( $is_preview ) {
  $className .= ' is-admin';
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid" style="<?php echo block_background(); ?><?php echo advanced_acf_settings(); ?>">
  <div class="row">
    <div class="container">
      <div class="row">
        <?php 
        if( get_field('image_position') == 'right' ) {
            ?>
            <div class="col-sl-6 content-image-img <?php echo the_field('image_position'); ?>">
            <?php
        } else if( get_field('image_position') == 'left' ) {
            ?>
            <div class="col-sl-6 content-image-img <?php echo the_field('image_position'); ?>">
            <?php
        }
        ?>

        <?php
          $image_content_image = get_field( 'image_content_image' );
          $size = 'full';
          if ( $image_content_image ) {
            $url = wp_get_attachment_url( $image_content_image );
            echo wp_get_attachment_image( $image_content_image, $size,  );
            get_post_meta($image_content_image, '_wp_attachment_image_alt', TRUE);
          }; 
        ?>
          
        </div>
        <?php
        if( get_field('image_position') == 'right' ) {
            ?>
            <div class="col-sl-6 content-image-content">
            <?php
        } else if( get_field('image_position') == 'left' ) {
            ?>
            <div class="col-sl-6 content-image-content">
            <?php
        }
        ?>

          <?php
          $content = get_field('content');
          if( !empty( $content ) ): ?>
            <div class="content  <?php echo the_field('image_position'); ?>">
              <?php if($heading = get_field('heading')): ?>
               <?php echo $heading; ?>
              <?php endif; ?>
              <?php if($content = get_field('content')): ?>
                <div class="text">
                  <?php echo $content; ?>
                </div>
              <?php endif; ?>

                <?php
                  // check if the repeater field has rows of data
                  if( have_rows('button_repeater_content_image') ):
                      // loop through the rows of data
                      ?>
                      <div class="button-wrapper">
                      <?php
                      while ( have_rows('button_repeater_content_image') ) : the_row();
                        $button_style = get_sub_field('button_style');
                        $link = get_sub_field('link');
                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                              ?>
                              <a class="button <?php echo $button_style; ?>" rel="noreferrer" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_title; ?></a>
                              <?php
                      endif;
                      endwhile;
                      ?>
                      </div>
                      <?php
                  endif;
                  ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
