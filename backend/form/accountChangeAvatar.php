<?php

  require_once 'backend/models/settings.class.php';

  $settings = new SettingsModel();

  $settings -> changeAvatar($_FILES["newAvatar"], $_SESSION['loginUsername'], $_POST['passwordConfirmAvatar']);

?>
