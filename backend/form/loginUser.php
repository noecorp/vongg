<?php

  require_once 'backend/controllers/login.class.php';
  require_once 'backend/models/login.class.php';

  $model = new LoginModel();
  $login = new Login();

  $login -> login($_POST['username'], $_POST['password']);

?>
