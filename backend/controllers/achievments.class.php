<?php

  class Achievments extends Controller {

    function __construct($params) {
      parent::__construct();

        $this -> view -> controller = 'achievments';
        $this -> view -> render();

    }

  }
