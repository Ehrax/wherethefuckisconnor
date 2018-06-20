<?php
    $img_left_id = wp_kses_post($instance['picture_left']);
    $img_middle_id = wp_kses_post($instance['picture_middle']);
    $img_right_id = wp_kses_post($instance['picture_right']);
?>

<div class="uk-section uk-section-default section-about">
    <div class="uk-container">
        <div class="uk-child-width-expand@s uk-grid-small" uk-grid >
            <div class="section-about-left">
                <div class="uk-flex uk-flex-middle">
                    <h1><?php echo wp_kses_post($instance['heading_left']); ?></h1>
                </div>
                <div>
                    <div data-src="<?php echo wp_get_attachment_url( $img_left_id ); ?>" uk-img></div>
                </div>
            </div>
            <div class="section-about-middle">
                <div>
                    <div data-src="<?php echo wp_get_attachment_url( $img_middle_id ); ?>" uk-img></div>
                </div>
            </div>
            <div class="section-about-right">
                <div>
                    <div data-src="<?php echo wp_get_attachment_url( $img_right_id ); ?>" uk-img></div>
                </div>
                <div class="section-about-right-text uk-flex uk-flex-middle">
                    <p><?php echo wp_kses_post($instance['about_description']) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>