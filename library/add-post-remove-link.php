<?php
function wp_delete_post_link($link = 'Delete This', $before = '', $after = '')

{

	global $post;

	if ( $post->post_type == 'page' ) {

		if ( !current_user_can( 'edit_page', $post->ID ) )

			return;

	} else {

		if ( !current_user_can( 'edit_post', $post->ID ) )

			return;

	}

	$link = "<a href='" . wp_nonce_url( get_bloginfo('url') . "/wp-admin/post.php?action=delete&amp;post=" . $post->ID, 'delete-post_' . $post->ID) . "'>".$link."</a>";

	echo $before . $link . $after;

}

?>
