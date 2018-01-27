$(document).ready(function(){

  $('#slide-up').click(function() {
    $('html, body').animate({
         scrollTop: $(".social-bar").offset().top
     }, 1000);
  });

});
