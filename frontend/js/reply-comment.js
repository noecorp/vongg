$(document).ready(function(){

  $("span").on('click', function(){
    var replyID = $(this).attr('replyComment');
    $('#replyComment' + replyID).show();
  });

  $("button[name='cancelReply']").on('click', function(){
    var replyID = $(this).attr('replyComment');
    $('#replyComment' + replyID).hide();
  });

});
