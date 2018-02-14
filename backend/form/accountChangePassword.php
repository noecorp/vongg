<?php

  require_once 'backend/models/settings.class.php';

  $settings = new SettingsModel();

  $settings -> changePassword($_POST['newPassword'], $_SESSION['loginUsername'], $_POST['passwordConfirmPassword']);

?>
