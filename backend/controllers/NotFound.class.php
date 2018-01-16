<?php

  class NotFound extends Controller {

    function __construct($params) {
      parent::__construct();

        $this -> view -> controller = 'notfound';
        $this -> view -> render();

    }

  }
