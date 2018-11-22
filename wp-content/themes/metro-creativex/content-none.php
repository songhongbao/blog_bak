<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package metro-creativex
 */
?>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'metro-creativex' ), admin_url( 'post-new.php' ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'metro-creativex' ); ?></p>
	<?php else : ?>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'metro-creativex' ); ?></p>
	<?php endif; ?>
