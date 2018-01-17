<?php

  class Tag extends Controller {

    function __construct($params) {
      parent::__construct();

      require_once 'backend/models/tag.class.php';
      $this -> model = new TagModel();

        if ( isset($params[1]) ) {
          $this -> view -> tag = $params[1];
          $verifyTagQuery = $this -> model -> db -> prepare('SELECT * FROM news WHERE tag = :tag');
          $verifyTagQuery->bindValue(':tag', $this -> view -> tag, PDO::PARAM_STR);
          $verifyTagQuery->execute();
          if ( $verifyTagQuery->rowCount() > 0 ) {
            $this -> view -> controller = 'tag';
          } else {
            $this -> view -> controller = 'notfound';
          }
        } else {
          $this -> view -> controller = 'notfound';
        }

        $this -> view -> render();

    }

  }
