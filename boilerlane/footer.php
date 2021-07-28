<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boilerlane
 */

?>

<footer id="colophon" class="site-footer container-fluid">

	<div class="container footer-columns">
		<div class="row">
			<div class="col">
				<h3>
					<?php if ( $heading = get_field( 'heading', 'options' ) ) : ?>
						<?php echo esc_html( $heading ); ?>
					<?php endif; ?>
				</h3>
				<?php if ( $content = get_field( 'content', 'options' ) ) : ?>
					<?php echo $content; ?>
				<?php endif; ?>
				<div class="content">
					<div class="company-details">
						<div class="phone">
							<a href="tel:<?php the_field('tel', 'options'); ?>">
									<span><?php echo __('<i class="fas fa-phone"></i> ','boilerlane'); ?><?php the_field('tel', 'options'); ?></span>
							</a>
						</div>
						<div class="email">
							<a href="mailto:<?php the_field('email', 'options'); ?>">
									<span><?php echo __('<i class="fas fa-envelope"></i> ','boilerlane'); ?><?php the_field('email', 'options'); ?></span>
							</a>
						</div>
					</div>
					<div class="company-address">
					<?php if ( $adress_subline = get_field( 'adress_subline', 'options' ) ) : ?>
						<div class="subline">
							<?php echo $adress_subline; ?>
						</div>
					<?php endif; ?>
						<?php the_field('adress', 'options'); ?>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="content page-links">
				<h3 class="heading"><?php the_field('heading_1', 'options'); ?></h3>
					<?php if ( $content = get_field( 'content', 'options' ) ) : ?>
						<?php echo $content; ?>
					<?php endif; ?>
					<div class="button-wrapper">
						<?php
							$link = get_field( 'button', 'options' );
							if ( $link ) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col">
				<h3 class="heading"><?php the_field('heading_2', 'options'); ?></h3>
				<div class="content page-links">
					<ul>
					<?php
						// check if the repeater field has rows of data
						if( have_rows('pages_links' , 'options') ):
								// loop through the rows of data
								while ( have_rows('pages_links' , 'options') ) : the_row();
								$link = get_sub_field('links' , 'options');
									if( $link ):
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
												?>
												<li>
												<i class="fas fa-arrow-right"></i>
														<a rel="noreferrer" href="<?php echo $link_url; ?>"><?php echo $link_title; ?></a>
												</li>
										<?php
										endif;
								endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
			<div class="col">
					<div class="newsletter-col">
						<div class="newsletter">
						<h3>
							<?php if ( $heading_newsletter = get_field( 'heading_newsletter', 'options' ) ) : ?>
								<?php echo esc_html( $heading_newsletter ); ?>
							<?php endif; ?>
						</h3>
						<?php if ( $content_newsletter = get_field( 'content_newsletter', 'options' ) ) : ?>
							<?php echo $content_newsletter; ?>
						<?php endif; ?>

						<?php if ( $form = get_field( 'form', 'options' ) ) : ?>
							<?php echo $form; ?>
						<?php endif; ?>


					</div>
				</div>
		</div>
	</div>

</footer><!-- #colophon -->

<div class="site-info container-fluid copyright">
	<div class="row">
		<div class="container">
			<div class="row wrapper">
				<a href="<?php echo esc_url( __( get_site_url(), 'boilerlane' ) ); ?>">
					&copy;<?php echo date("Y"); ?> Copyright - <?php esc_url(bloginfo('name')); ?>
				</a>
				<div class="copyright-links">
				<?php if ( have_rows( 'copyright_links', 'options' ) ) : ?>
					<?php while ( have_rows( 'copyright_links', 'options' ) ) :
						the_row(); ?>
						<?php
						$link = get_sub_field( 'link', 'options' );
						if ( $link ) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<span class="sep">  </span>
							<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<div class="social-icons">
					<div class="socials">
						<?php $i = 1; $d = 1;?>
							<?php if($social = get_field('social_media', 'options')): foreach($social as $channel): ?>
								<a aria-label="<?php echo $channel['sm_platform']; ?>" rel="noreferrer" href="<?php echo $channel['link']; ?>" class="social-div-<?php echo $i++; ?>" target="_blank">
										<i class="fab <?php echo $channel['sm_platform']; ?>"><div class="hide"><?php echo "Click to go to the social media page social-"; echo $i++; ?></div></i>
								</a>
						<?php endforeach; endif; ?>
				</div>
			</div>
				<!-- start socials -->
		</div>
	</div>
</div>
</div><!-- .site-info -->

</div><!-- #page -->


<?php wp_footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
