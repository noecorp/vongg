<?php

  class News extends Controller {

    function __construct($params) {
      parent::__construct();

        

        $this -> view -> controller = 'news';
        $this -> view -> render();

    }

  }
