<?php

  class News extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/news.class.php';
      $this -> model = new NewsModel();

        if ( isset($params[1]) ) {
          $this -> view -> newsLink = $params[1];
          $verifyNewsQuery = $this -> model -> db -> prepare('SELECT * FROM news WHERE link = :link ORDER BY id DESC LIMIT 1');
          $verifyNewsQuery->bindValue(':link', $this -> view -> newsLink, PDO::PARAM_STR);
          $verifyNewsQuery->execute();
          if ( $verifyNewsQuery->rowCount() == 1 ) {
            $this -> view -> controller = 'single-news';
          } else {
            $this -> view -> controller = 'notfound';
          }
        } else {
          $this -> view -> controller = 'news';
        }

        $this -> view -> render();

    }

  }
