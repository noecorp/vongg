<?php

  class Account extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/account.class.php';
        $this -> model = new AccountModel();

        if ( isset($params[0]) ) {
          if ( isset($params[1]) && $params[1] == 'settings' ) {
            $action = $params[1];
            $this -> $action($params[1]);
          } else {
            if ( isset($_SESSION['loginStatus']) ) {
              header('Location: http://192.168.0.104/vongg/user/' . $_SESSION['loginUsername']);
            } else {
              header('Location: http://192.168.0.104/vongg/login');
            }
          }
        }

    }

    public function settings() {
      $this -> view -> controller = 'settings';
      $this -> view -> model();
      $this -> view -> render();
    }

  }
