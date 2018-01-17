<?php

  class View {

    function __construct() {

    }

    public function model() {
      require_once 'backend/models/' . $this -> controller . '.class.php';
    }

    public function render() {
      require_once 'backend/views/' . $this -> controller . '.php';
    }

  }
