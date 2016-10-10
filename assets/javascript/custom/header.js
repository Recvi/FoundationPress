// $("#offCanvasToggle").bind("opened.zf.offcanvas closed.zf.offcanvas", function(e) {
//   $("#offCanvasToggle").toggleClass("fi-x menu-icon");
// });
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}
