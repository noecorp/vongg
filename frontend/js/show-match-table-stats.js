$(document).ready(function(){

  $('#allmaps').css('border-bottom', 'none');

  $('#allmaps').on('click', function(){

    $('.allmaps').show();
    $('.map1').hide();
    $('.map2').hide();
    $('.map3').hide();
    $('.map4').hide();
    $('.map5').hide();

    $('#allmaps').css('border-bottom', 'none');
    $('#map1').css('border-bottom', '2px solid #191d22');
    $('#map2').css('border-bottom', '2px solid #191d22');
    $('#map3').css('border-bottom', '2px solid #191d22');
    $('#map4').css('border-bottom', '2px solid #191d22');
    $('#map5').css('border-bottom', '2px solid #191d22');

  });

  $('#map1').on('click', function(){

    $('.allmaps').hide();
    $('.map1').show();
    $('.map2').hide();
    $('.map3').hide();
    $('.map4').hide();
    $('.map5').hide();

    $('#allmaps').css('border-bottom', '2px solid #191d22');
    $('#map1').css('border-bottom', 'none');
    $('#map2').css('border-bottom', '2px solid #191d22');
    $('#map3').css('border-bottom', '2px solid #191d22');
    $('#map4').css('border-bottom', '2px solid #191d22');
    $('#map5').css('border-bottom', '2px solid #191d22');

  });

  $('#map2').on('click', function(){

    $('.allmaps').hide();
    $('.map1').hide();
    $('.map2').show();
    $('.map3').hide();
    $('.map4').hide();
    $('.map5').hide();

    $('#allmaps').css('border-bottom', '2px solid #191d22');
    $('#map1').css('border-bottom', '2px solid #191d22');
    $('#map2').css('border-bottom', 'none');
    $('#map3').css('border-bottom', '2px solid #191d22');
    $('#map4').css('border-bottom', '2px solid #191d22');
    $('#map5').css('border-bottom', '2px solid #191d22');

  });

  $('#map3').on('click', function(){

    $('.allmaps').hide();
    $('.map1').hide();
    $('.map2').hide();
    $('.map3').show();
    $('.map4').hide();
    $('.map5').hide();

    $('#allmaps').css('border-bottom', '2px solid #191d22');
    $('#map1').css('border-bottom', '2px solid #191d22');
    $('#map2').css('border-bottom', '2px solid #191d22');
    $('#map3').css('border-bottom', 'none');
    $('#map4').css('border-bottom', '2px solid #191d22');
    $('#map5').css('border-bottom', '2px solid #191d22');

  });

  $('#map4').on('click', function(){

    $('.allmaps').hide();
    $('.map1').hide();
    $('.map2').hide();
    $('.map3').hide();
    $('.map4').show();
    $('.map5').hide();

    $('#allmaps').css('border-bottom', '2px solid #191d22');
    $('#map1').css('border-bottom', '2px solid #191d22');
    $('#map2').css('border-bottom', '2px solid #191d22');
    $('#map3').css('border-bottom', '2px solid #191d22');
    $('#map4').css('border-bottom', 'none');
    $('#map5').css('border-bottom', '2px solid #191d22');

  });

  $('#map5').on('click', function(){

    $('.allmaps').hide();
    $('.map1').hide();
    $('.map2').hide();
    $('.map3').hide();
    $('.map4').hide();
    $('.map5').show();

    $('#allmaps').css('border-bottom', '2px solid #191d22');
    $('#map1').css('border-bottom', '2px solid #191d22');
    $('#map2').css('border-bottom', '2px solid #191d22');
    $('#map3').css('border-bottom', '2px solid #191d22');
    $('#map4').css('border-bottom', '2px solid #191d22');
    $('#map5').css('border-bottom', 'none');

  });

});
