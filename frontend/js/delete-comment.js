$(document).ready(function(){

  $("span").on('click', function(){
    var commentID = $(this).attr('deleteComment');
    $('#deleteComment' + commentID).show();
  });

  $("button[name='cancelDelete']").on('click', function(){
    var commentID = $(this).attr('deleteComment');
    $('#deleteComment' + commentID).hide();
  });

});
