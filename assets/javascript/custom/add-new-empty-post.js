$( "#create-empty-post" ).click( function() {
  var post = new wp.api.models.Post({
      title: $( "#new-post-title" ).val()
  });
  post.save().done( function(res) {
    window.location.replace("http://"+window.location.hostname+"/?p="+res.id+"&preview=true");
  });
});

$( "#menu-sidebar-left" ).append("<li id=\"menu-item-new-post\" class=\"menu-item menu-item-type-taxonomy\" role=\"menuitem\"><a data-open=\"createNewPost\"><img src=\"//"+window.location.hostname+"/wp-content/themes/FoundationPress/assets/images/carlson/links.png\" alt=\"Create New Post\"><br>Create New Post</a></li>")
