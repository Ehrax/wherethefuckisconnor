<?php
/**
 * @var $args array
 * @var $items array
 * @var $layouts array
 */
?>

<?php if( !empty( $instance['widget_title'] ) ) echo $args['before_title'] . esc_html( $instance['widget_title'] ) . $args['after_title'] ?>

<div class="sow-masonry-grid" uk-lightbox="animation:slide"
	 data-layouts="<?php echo esc_attr( json_encode( $layouts ) ) ?>">
	<?php
	if( ! empty( $items ) ) {
		foreach ( $items as $item ) {
			$src        = wp_get_attachment_image_src( $item['image'], 'full' );
			$src        = empty( $src ) ? '' : $src[0];
			$title      = empty( $item['title'] ) ? '' : $item['title'];
			$url        = empty( $item['url'] ) ? '' : $item['url'];
			?>
			<div class="sow-masonry-grid-item" data-col-span="<?php echo esc_attr( $item['column_span'] ) ?>"
				 data-row-span="<?php echo esc_attr( $item['row_span'] ) ?>">
				 <a href="<?php echo wp_get_attachment_url( $item['image'] ) ?>" >
					<?php echo wp_get_attachment_image( $item['image'], 'full', false, array( 'title' => esc_attr( $title ) ) ); ?>
				 </a>
			</div>
			<?php
		}
	}
	?>

</div>
