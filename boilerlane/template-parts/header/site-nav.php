<?php
/**
 * Displays the site navigation.
 *
 * @package SocialLane
 * @subpackage BoilerLane
 * @since 1.0.0
 */

?>

<header id="masttophead" class="topbar">
			<nav id="top-site-navigation" class="top-main-navigation">
				<div class="container">

						<div class="socials">
							<?php $i = 1; $d = 1;?>
								<?php if($social = get_field('social_media', 'options')): foreach($social as $channel): ?>
										<a aria-label="<?php echo $channel['sm_platform']; ?>" rel="noreferrer" href="<?php echo $channel['link']; ?>" class="social-div-<?php echo $i++; ?>" target="_blank">
												<i class="fab <?php echo $channel['sm_platform']; ?>"><div class="hide"><?php echo "Click to go to the social media page social-"; echo $i++; ?></div></i>
										</a>
								<?php endforeach; endif; ?>
						</div>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'top',
									'menu_id'        => 'top-menu-id',
								)
							);
						?>
								<?php
								$menu = wp_get_nav_menu_object('Top');

								$button = get_field('button', $menu);
								if( $button ):
										$button_url = $button['url'];
										$button_title = $button['title'];
										$button_target = $button['target'] ? $button['target'] : '_self';
										?>
										<a class="button" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
								<?php endif; ?>
				</div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<header id="masthead" class="site-header container-fluid">
			<div class="row">
				<div class="container">
					<div class="row">

					<nav class="navbar navbar-expand-lg navbar-light">
					<?php if ( get_theme_mod( 'site_logo' ) ): ?>
						<a class="navbar-brand site-branding" href="<?php echo esc_url( home_url( '/' )); ?>">
							<img src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="167" height="125">
						</a>
					<?php else : ?>
						<a class="navbar-brand site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
					<?php endif; ?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<?php
						wp_nav_menu(
							array(
									'walker' => new Nav_Footer_Walker(), 
									'container'=>false, 
									'menu_id'   => '',
									'menu_class' => 'navbar-nav mr-auto', 
									'theme_location'=>'menu-1', 
									'fallback_cb'=>false 
								)
							);
						?>
						</div>
					</nav>
			</div>
			</div>
			</div>
		</header><!-- #masthead -->
