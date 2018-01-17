$(document).ready(function(){

  $("span").on('click', function(){
    var commentID = $(this).attr('showEditedContent');
    $('#comment-content-old' + commentID).show();
    $('#comment-content-current' + commentID).show();
    $('#comment-content-edited' + commentID).show();
    $('#show-current-comment' + commentID).show();
  });

  $("button[name='showCurrentComment']").on('click', function(){
    var commentID = $(this).attr('showEditedContent');
    $('#comment-content-old' + commentID).hide();
    $('#comment-content-current' + commentID).hide();
    $('#comment-content-edited' + commentID).hide();
    $('#show-current-comment' + commentID).hide();
  });

});
