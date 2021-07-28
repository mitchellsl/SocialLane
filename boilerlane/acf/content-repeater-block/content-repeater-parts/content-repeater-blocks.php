<div class="row blocks">
        <div class="container">
            <div class="row">
            <div class="wrapper--repeater-block">
                    
              
                <div class="row repeater-block--wrapper">
                    <?php if ( have_rows( 'repeater' ) ) : ?>
                        <?php while ( have_rows( 'repeater' ) ) :
                            the_row(); ?>
                            <div class="col-sl-2 wrapper--types">
                            <?php
                                    $image = get_sub_field( 'image' );
                                    if ( $image ) : ?>
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php endif; ?>
                                <div class="wrapper-types--heading">
                                    <?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
                                        <?php echo $heading; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="wrapper-types--content">
                                    <?php if ( $content = get_sub_field( 'content' ) ) : ?>
                                        <?php echo $content; ?>
                                    <?php endif; ?>
                                </div>
                                <?php
                                $link = get_sub_field( 'button' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <div class="content--button-wrapper">
                                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>