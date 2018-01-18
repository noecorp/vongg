<?php

  class About extends Controller {

    function __construct($params) {
      parent::__construct();

        $this -> view -> controller = 'aboutus';
        $this -> view -> render();

    }

  }
