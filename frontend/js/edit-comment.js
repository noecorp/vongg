$(document).ready(function(){

  $("span").on('click', function(){
    var commentID = $(this).attr('editComment');
    $('#comment-content' + commentID).hide();
    $('#editComment' + commentID).show();
  });

  $("button[name='cancelEdit']").on('click', function(){
    var commentID = $(this).attr('editComment');
    $('#editComment' + commentID).hide();
    $('#comment-content' + commentID).show();
  });

});
