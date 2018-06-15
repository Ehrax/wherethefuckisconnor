<div id="<?php echo strtolower(wp_kses_post($instance['text'])); ?>" 
        class="uk-flex uk-flex-column uk-flex-middle section-header 
        <?php if(wp_kses_post($instance['checkbox'])) echo 'header-dark';?>">

    <h1><?php echo wp_kses_post($instance['text'] ); ?></h1>
    <div class="header-bar"></div>

</div>