<?php

  require_once 'backend/models/settings.class.php';

  $settings = new SettingsModel();

  $settings -> changeInformations($_POST['newSlogan'], $_POST['newShortInfo'], $_POST['newRole'], $_POST['newAge'], $_POST['newFrom'], $_POST['newFunFact'], $_POST['newLaunchOptions'], $_POST['newResolution'], $_POST['newSensitivity'], $_POST['newCrosshair'], $_POST['newConfig'], $_SESSION['loginUsername'], $_POST['informationsConfirmPassword']);

?>
