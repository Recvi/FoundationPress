<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php foundationpress_mobile_under_nav(); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
