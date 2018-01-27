<?php

  class Lineup extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/lineup.class.php';
      $this -> model = new LineupModel();

      if ( isset($params[0]) ) {
        if ( isset($params[1]) && $params[1] == 'all' ) {
          $action = $params[1];
          $this -> $action($params[1]);
        } elseif ( isset($params[1]) && $params[1] == 'player' ) {
          $this -> params = $params;
          $this -> player = $this -> params[2];
          $this -> view -> player = $this -> params[2];
          $action = $params[1];
          $this -> $action($params[1]);
        } else {
          $this -> view -> controller = 'lineup';
          $this -> view -> render();
        }
      }

    }

    private function all() {
      $this -> view -> controller = 'lineup-all';
      $this -> view -> render();
    }

    private function player() {
      $this -> view -> controller = 'lineup-player';
      $this -> view -> render();
    }

  }
