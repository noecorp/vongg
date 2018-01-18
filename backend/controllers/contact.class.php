<?php

  class Contact extends Controller {

    function __construct($params) {
      parent::__construct();

        $this -> view -> controller = 'contact';
        $this -> view -> render();

    }

  }
