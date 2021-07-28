<div class="row boxed">
		 <div class="container">
			 <div class="row">
				<div class="col">
					<div class="image">
					<?php
						$image = get_field( 'image' );
						if ( $image ) : ?>
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<?php endif; ?>
					</div>
					<div class="text">
							<?php echo the_field('heading'); ?>
						<?php echo the_field('content'); ?>

					</div>
					<div class="contact-wrapper">
						<div class="phone">
							<?php
								$link = get_field( 'phone' );
								if ( $link ) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<i class="fas fa-phone"></i>
										<a class="phone-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									
									<?php endif; ?>
						</div>
					<div class="email">
						<?php
						$link = get_field( 'email' );
						if ( $link ) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<i class="fas fa-envelope"></i>
							<a class="email-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
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
	 </div>