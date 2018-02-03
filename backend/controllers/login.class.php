<?php

  class Login extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/login.class.php';
        $this -> model = new LoginModel();

        if ( isset($params[0]) ) {
          if ( isset($params[1]) && $params[1] == 'logout' ) {
            $action = $params[1];
            $this -> $action($params[1]);
          } else {
            $this -> view -> controller = 'login';
            $this -> view -> model();
            $this -> view -> render();
          }
        }

    }

    public function login($username, $password) {

      // HTML Entities
      $username = htmlentities($username, ENT_QUOTES, "UTF-8");
      $password = htmlentities($password, ENT_QUOTES, "UTF-8");

      // Special Variables
      $errors = 0;

      // Queries
      if ( $username != null && $password != null ) {
        $selectUser = $this -> model -> db -> prepare('SELECT * FROM users WHERE username = :username');
        $selectUser->bindValue(':username', $username, PDO::PARAM_STR);
        $selectUser->execute();
        $user = $selectUser->fetch();
      }

      // Validation
      if ( $username == null ) {
        $errors++;
        $_SESSION['usernameError'] = 'Fill in the username field';
      }

      if ( $password == null ) {
        $errors++;
        $_SESSION['passwordError'] = 'Fill in the password field';
      }

      if ( $errors == 0 ) {

        if ( $selectUser->rowCount() == 0 ) {
          $errors++;
          $_SESSION['usernameError'] = 'The given user doesn\'t exist';
        }

        if ( ! password_verify($password, $user['password']) ) {
          $errors++;
          $_SESSION['passwordError'] = 'The given password is incorrect';
        }

      }

      // Logging in
      if ( $errors > 0 ) {
        header('Location: http://192.168.0.104/vongg/login');
      } else {

        $_SESSION['loginStatus'] = true;
        $_SESSION['loginUsername'] = $user['username'];
        $_SESSION['loginPassword'] = $user['password'];
        $_SESSION['loginAvatar'] = $user['avatar'];
        $_SESSION['loginPermissions'] = $user['permissions'];
        $_SESSION['loginPermissionsPower'] = $user['permissionsPower'];

        header('Location: http://192.168.0.104/vongg/');

      }

    }

    public function logout() {

      $_SESSION['loginStatus'] = false;
      unset($_SESSION['loginStatus']);
      session_destroy();
      header('Location: http://192.168.0.104/vongg/');

    }

  }
