<footer>
	<div class="uk-background-cover">
		<svg preserveAspectRatio="none" 
				viewBox="0 0 100 102" 
				height="75" 
				width="100%" 
				version="1.1" 
				xmlns="http://www.w3.org/2000/svg">
				<path d="M0 0 L50 100 L100 0 Z" fill="#FAFAFA" stroke="#FAFAFA"></path>
		</svg>
		<div class="uk-flex uk-flex-center">
			<div class="footer-page-link-home uk-animation-toggle" href="#home" uk-scroll>
				<a class="uk-animation-slide-bottom-small" uk-icon="icon: arrow-up; ratio:1.5"></a>
			</div>
		</div>
	</div>
	<div class="uk-section uk-section-large uk-section-primary uk-flex uk-flex-center uk-flex-middle">
		<div class="uk-animation-toggle footer-page-link-instagram">
			<a target="_blank" href="<?php the_field('instagram'); ?>" class="uk-animation-slide-top-small" uk-icon="icon: instagram; ratio:1.5"></a>
		</div>
	</div>
	<div class="uk-flex uk-flex-column footer-credits">
		<div class="uk-flex uk-flex-center">
			<p>© <?php echo date('Y') ?> created and designed by <a target="_blank" href="">Alexander Rasputin</a></p>
		</div>
		<div class="uk-flex uk-flex-center">
			 <p>pictures taken by <a target="_blank" href="https://www.behance.net/chiaradollak">Chiara Dollak</a></p>
		</di>
	</div>
</footer>
