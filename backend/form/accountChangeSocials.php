<?php

  require_once 'backend/models/settings.class.php';

  $settings = new SettingsModel();

  $settings -> changeSocials($_POST['newFacebook'], $_POST['newYouTube'], $_POST['newTwitter'], $_POST['newTwitch'], $_POST['newInstagram'], $_POST['newSteam'], $_SESSION['loginUsername'], $_POST['socialsConfirmPassword']);

?>
