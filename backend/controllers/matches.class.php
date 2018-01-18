<?php

  class Matches extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/matches.class.php';
      $this -> model = new MatchesModel();

        $this -> view -> controller = 'matches';
        $this -> view -> render();

    }

  }
