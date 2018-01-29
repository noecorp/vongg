<?php

  class Admin extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/admin.class.php';
        $this -> model = new AdminModel();

        $this -> view -> controller = 'admin';
        $this -> view -> model();
        $this -> view -> render();

    }

  }
