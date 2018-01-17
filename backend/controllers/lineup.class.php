<?php

  class Lineup extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/lineup.class.php';
      $this -> model = new LineupModel();

        $this -> view -> controller = 'lineup';
        $this -> view -> render();

    }

    private function player() {
      $this -> view -> controller = 'player';
      $this -> view -> render();
    }

  }
