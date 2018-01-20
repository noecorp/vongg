<?php

  class showHTML extends Controller {

    function __construct($params) {
      parent::__construct();

        require_once 'backend/models/index.class.php';
        $this -> model = new IndexModel();

        $this -> request = $_GET['url'];
        $this -> request = rtrim($this -> request, '/');
        $this -> params = explode("/", $this -> request);

        if ( $params[1] != false ) {
          require_once 'backend/html/' . $params[1] . '.php';
        } else {
          echo 'Type HTML File';
        }

    }

  }
