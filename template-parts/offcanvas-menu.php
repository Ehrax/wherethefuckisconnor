<!-- offcanvas menu -->
<div id="offcanvas-menu" uk-offcanvas="mode: slide; overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'top_menu',
                'container' => false,
                'items_wrap' => '<ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical" uk-scrollspy-nav="closest: li; scroll: true;">%3$s</ul>',
            ));
        ?>
    </div>
</div>