<?php

  require_once 'backend/models/settings.class.php';

  $settings = new SettingsModel();

  $settings -> changeEmail($_POST['newEmail'], $_SESSION['loginUsername'], $_POST['emailConfirmPassword']);

?>
