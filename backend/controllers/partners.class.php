<?php

  class Partners extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/partners.class.php';
      $this -> model = new PartnersModel();

        $this -> view -> controller = 'partners';
        $this -> view -> render();

    }

  }
