<div class="row">
        <div class="container">
            <div class="row">
               <div class="col-6 formulier"> 
                <?php
                    echo do_shortcode('[gravityform id=2 title=false description=false ajax=true]');
                ?>
               </div>
               <div class="col-6 image">
               <?php
                $image = get_field( 'image' );
                if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
               </div>
            </div>
        </div>
    </div>