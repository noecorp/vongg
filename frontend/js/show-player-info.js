$(document).ready(function(){

  $('#lineup-avatar-player1').on('click', function(){

    $('#lineup-avatar-player1').addClass('lineup-avatar-player-active');
    $('#lineup-avatar-player2').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player3').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player4').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player5').removeClass('lineup-avatar-player-active');

    $('#lineup-player-info1').show();
    $('#lineup-player-info2').hide();
    $('#lineup-player-info3').hide();
    $('#lineup-player-info4').hide();
    $('#lineup-player-info5').hide();

  });

  $('#lineup-avatar-player2').on('click', function(){

    $('#lineup-avatar-player1').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player2').addClass('lineup-avatar-player-active');
    $('#lineup-avatar-player3').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player4').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player5').removeClass('lineup-avatar-player-active');

    $('#lineup-player-info1').hide();
    $('#lineup-player-info2').show();
    $('#lineup-player-info3').hide();
    $('#lineup-player-info4').hide();
    $('#lineup-player-info5').hide();

  });

  $('#lineup-avatar-player3').on('click', function(){

    $('#lineup-avatar-player1').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player2').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player3').addClass('lineup-avatar-player-active');
    $('#lineup-avatar-player4').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player5').removeClass('lineup-avatar-player-active');

    $('#lineup-player-info1').hide();
    $('#lineup-player-info2').hide();
    $('#lineup-player-info3').show();
    $('#lineup-player-info4').hide();
    $('#lineup-player-info5').hide();

  });

  $('#lineup-avatar-player4').on('click', function(){

    $('#lineup-avatar-player1').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player2').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player3').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player4').addClass('lineup-avatar-player-active');
    $('#lineup-avatar-player5').removeClass('lineup-avatar-player-active');

    $('#lineup-player-info1').hide();
    $('#lineup-player-info2').hide();
    $('#lineup-player-info3').hide();
    $('#lineup-player-info4').show();
    $('#lineup-player-info5').hide();

  });

  $('#lineup-avatar-player5').on('click', function(){

    $('#lineup-avatar-player1').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player2').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player3').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player4').removeClass('lineup-avatar-player-active');
    $('#lineup-avatar-player5').addClass('lineup-avatar-player-active');

    $('#lineup-player-info1').hide();
    $('#lineup-player-info2').hide();
    $('#lineup-player-info3').hide();
    $('#lineup-player-info4').hide();
    $('#lineup-player-info5').show();

  });

});
