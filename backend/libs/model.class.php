<?php

  class Model {

    function __construct() {

      if ( ! isset($_COOKIE['lang']) || $_COOKIE['lang'] == 'en' ) {

        $config = [
          'host' => 'localhost',
          'user' => 'root',
          'pass' => '',
          'db' => 'vongg'
        ];

      } else {

        $config = [
          'host' => 'localhost',
          'user' => 'root',
          'pass' => '',
          'db' => 'vonggpl'
        ];

      }

      try {

        $this -> db = new PDO("mysql:host={$config['host']};dbname={$config['db']};charset=utf8", $config['user'], $config['pass'], [
          PDO::ATTR_EMULATE_PREPARES => false,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

      } catch (PDOException $error) {
        exit('Database Error');
      }

      $this -> request = $_GET['url'];
      $this -> request = rtrim($this -> request, '/');
      $this -> params = explode("/", $this -> request);

    }

  }
