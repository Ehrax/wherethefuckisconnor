<header id="home">
	<div class="uk-position-relative">
		<div class="uk-position-top">
			<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
				<div class="uk-navbar-right">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'top_menu',
							'container' => false,
							'items_wrap' => '<ul class="uk-navbar-nav uk-visible@m" uk-scrollspy-nav="closest: li; scroll: true" uk-scroll>%3$s</ul>',
						));
					?>
					<a uk-navbar-toggle-icon="" 
						href="#offcanvas-menu" 
						uk-toggle="" 
						class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon"></a>
				</div>
			</nav>
		</div>
		<?php 
		$img = get_field('hero_image');
		if(!empty($img)):?>
			<div class="uk-height-viewport uk-flex uk-flex-column uk-flex-center uk-flex-middle uk-background-cover"
				data-src="<?php echo $img['url']?>"
				data-srcset="<?php echo $img['sizes']['medium_large'] ?> 768w,
							<?php echo $img['url']?> 1300w" 
				sizes="(max-width: 768px) 768px, 100vw"
				uk-img>
				<div class="header-content uk-flex uk-flex-column uk-flex-middle uk-width-1-1" 
					uk-scrollspy="cls:uk-animation-slide-top">
					<h1 class="hero-title"><?php the_field('hero_title') ?></h1>
					<h2 class="hero-subtitle"><?php the_field('hero_subtitle') ?></h2>
				</div>
			</div>
		<?php else: ?>
			<div class="uk-height-viewport uk-flex uk-flex-column uk-flex-center uk-flex-middle uk-background-secondary">
		<?php endif; ?>
			</div>
	</div>
</header>