<div class="row">
        <div class="container">
            <div class="row">
            <?php if ( $heading = get_field( 'heading' ) ) : ?>
                <?php echo $heading; ?>
            <?php endif; ?>
            <?php if ( $content = get_field( 'content' ) ) : ?>
                <?php echo $content; ?>
            <?php endif; ?>
            </div>
            <div class="row">
               <div class="col-12 formulier">
               <?php
                    echo do_shortcode('[gravityform id=2 title=false description=false ajax=true]');
                ?>
               </div>
            </div>
        </div>
    </div>