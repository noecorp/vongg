<?php

  class Matches extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/matches.class.php';
      $this -> model = new MatchesModel();

      if ( isset($params[0]) ) {
        if ( isset($params[1]) && $params[1] == 'teamstats' ) {
          $action = $params[1];
          $this -> team = $params[2];
          $this -> $action($params[1]);
        } elseif ( isset($params[1]) && $params[1] == 'matchstats' ) {
          $action = $params[1];
          $this -> match = $params[2];
          $this -> $action($params[1]);
        } else {
          $this -> view -> controller = 'matches';
          $this -> view -> render();
        }
      }

    }

    private function teamstats() {
      $this -> view -> controller = 'teamstats';
      $this -> view -> team = $this -> team;
      $this -> view -> render();
    }

    private function matchstats() {
      $this -> view -> controller = 'matchstats';
      $this -> view -> match = $this -> match;
      $this -> view -> render();
    }

  }
