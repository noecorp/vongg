$(document).ready(function(){

  $('#changeEmailBtn').on('click', function(){
    $(this).hide();
    $('#accountChangeEmailBtn').show();
  });

  $('#accountChangeEmailBtn').on('click', function(){
    $('#changeEmailInput').hide();
    $(this).hide();
    $('#changeEmailPassword').show();
    $('#accountChangeEmailConfirmBtn').show();
  });

  $('#changePasswordBtn').on('click', function(){
    $(this).hide();
    $('#accountChangePasswordBtn').show();
  });

  $('#accountChangePasswordBtn').on('click', function(){
    $('#changePasswordInput').hide();
    $(this).hide();
    $('#changePasswordPassword').show();
    $('#accountChangePasswordConfirmBtn').show();
  });

  $('#changeAvatarBtn').on('click', function(){
    $(this).hide();
    $('#accountChangeAvatarBtn').show();
  });

  $('#accountChangeAvatarBtn').on('click', function(){
    $('#changeAvatarInput').hide();
    $('#currentAvatar').hide();
    $(this).hide();
    $('#changeAvatarPassword').show();
    $('#accountChangeAvatarConfirmBtn').show();
  });

  $('#changeInformationsBtn').on('click', function(){
    $(this).hide();
    $('#accountChangeInformationsBtn').show();
  });

  $('#accountChangeInformationsBtn').on('click', function(){
    $('#changeSloganInput').hide();
    $('#changeShortInfoInput').hide();
    $('#changeFunFactInput').hide();
    $('#changeLaunchOptionsInput').hide();
    $('#changeResolutionInput').hide();
    $('#changeSensitivityInput').hide();
    $('#changeCrosshairInput').hide();
    $('#changeConfigInput').hide();
    $(this).hide();
    $('#changeInformationsPassword').show();
    $('#accountChangeInformationsConfirmBtn').show();
  });

});
