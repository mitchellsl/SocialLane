<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 style="color:#133B7F"><?php the_title(); ?></h1>

    <!-- Heading -->
    <div class="heading">
        <?php if ( $heading = get_field( 'heading' ) ) : ?>
            <?php echo $heading; ?>
        <?php endif; ?>
    </div>

    <!-- Content -->
    <div class="content">
        <?php if ( $content = get_field( 'content' ) ) : ?>
            <?php echo $content; ?>
        <?php endif; ?>
    </div>

    <?php if ( have_rows( 'logos' ) ) : ?>
        <?php while ( have_rows( 'logos' ) ) :
            the_row(); ?>

    <div class="logo-repeater">
            <?php
            $image = get_sub_field( 'image' );
            if ( $image ) : ?>
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
    </div>

    <?php the_content(); ?>
</article>
