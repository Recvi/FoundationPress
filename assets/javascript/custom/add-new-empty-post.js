$( "#create-empty-post" ).click( function() {
  var post = new wp.api.models.Post({
      title: $( "#new-post-title" ).val()
  });
  post.save().done( function(res) {
    window.location.replace("http://"+window.location.hostname+"/?p="+res.id+"&preview=true");
  });
});
