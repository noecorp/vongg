$(document).ready(function(){

  $('#en').on('click', function(){

    $(this).removeClass('lang-active').addClass('lang-active');
    $('#pl').removeClass('lang-active');

    $.ajax({
      type: "POST",
      url: "http://192.168.0.104/vongg/ajax/showEnglishContent",
      dataType : 'json',
      data: {
          ajax : 'showEnglishContent'
      },
      success: function(json) {
        location.reload();
      },
      complete: function() {
      },
      error: function() {
      }
    });

  });

  $('#pl').on('click', function(){

    $(this).removeClass('lang-active').addClass('lang-active');
    $('#en').removeClass('lang-active');

    $.ajax({
      type: "POST",
      url: "http://192.168.0.104/vongg/ajax/showPolishContent",
      dataType : 'json',
      data: {
          ajax : 'showPolishContent'
      },
      success: function(json) {
        location.reload();
      },
      complete: function() {
      },
      error: function() {
      }
    });

  });

});
