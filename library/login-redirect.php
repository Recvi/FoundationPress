<?php
/**
 * Set the URL to redirect to on login.
 *
 * @return string URL to redirect to on login. Must be absolute.
 **/
function my_forcelogin_redirect() {
  return site_url( '/' );
}
add_filter('v_forcelogin_redirect', 'my_forcelogin_redirect', 10, 1);

?>
