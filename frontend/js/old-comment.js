$(document).ready(function(){

  $("span").on('click', function(){
    if ( $(this).attr('showed') == '0' ) {
      $(this).attr('showed', 1);
      var commentID = $(this).attr('showEditedContent');
      $('#comment-content-old' + commentID).show();
      $('#comment-content-current' + commentID).show();
      $('#comment-content-edited' + commentID).show();
      $('#show-current-comment' + commentID).show();
    } else {
      $(this).attr('showed', 0);
      var commentID = $(this).attr('showEditedContent');
      $('#comment-content-old' + commentID).hide();
      $('#comment-content-current' + commentID).hide();
      $('#comment-content-edited' + commentID).hide();
      $('#show-current-comment' + commentID).hide();
    }
  });

  $("button[name='showCurrentComment']").on('click', function(){
    $("span").attr('showed', 0);
    var commentID = $(this).attr('showEditedContent');
    $('#comment-content-old' + commentID).hide();
    $('#comment-content-current' + commentID).hide();
    $('#comment-content-edited' + commentID).hide();
    $('#show-current-comment' + commentID).hide();
  });

});
