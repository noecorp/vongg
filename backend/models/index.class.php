<?php

  class IndexModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function showNewsPinnedVariables() {

      $selectNewsPinnedQuery = $this -> db -> prepare('SELECT * FROM news WHERE pinned = :pinned ORDER BY id DESC LIMIT 1');
      $selectNewsPinnedQuery->bindValue(':pinned', 1, PDO::PARAM_STR);
      $selectNewsPinnedQuery->execute();

        if ( $selectNewsPinnedQuery->rowCount() == 1 ) {

          $pinned = 1;
          $newsPinned = $selectNewsPinnedQuery->fetch();
          $this -> newsImgPinned = $newsPinned['img'];
          $this -> newsLinkPinned = $newsPinned['link'];
          $this -> newsTitlePinned = $newsPinned['title'];
          $this -> newsTagPinned = $newsPinned['tag'];
          $this -> newsDatePinned = $newsPinned['date'];
          $this -> newsTimePinned = $newsPinned['time'];

        }

    }

    public function showNewsVariables() {

      $selectNewsQuery = $this -> db -> prepare('SELECT * FROM news ORDER BY id DESC');
      $selectNewsQuery->execute();

        if ( $selectNewsQuery->rowCount() > 0 ) {

          $newsImg = [];
          $newsLink = [];
          $newsTitle = [];
          $newsTag = [];
          $newsDate = [];
          $newsTime = [];

          $newsCount = 0;

          while ( $news = $selectNewsQuery->fetch() ) {
            if ( $news['pinned'] != 1 && $newsCount != 3 ) {
              array_push($newsImg, $news['img']);
              array_push($newsLink, $news['link']);
              array_push($newsTitle, $news['title']);
              array_push($newsTag, $news['tag']);
              array_push($newsDate, $news['date']);
              array_push($newsTime, $news['time']);
            }
          }

          $this -> newsImg = $newsImg;
          $this -> newsLink = $newsLink;
          $this -> newsTitle = $newsTitle;
          $this -> newsTag = $newsTag;
          $this -> newsDate = $newsDate;
          $this -> newsTime = $newsTime;

        }

    }

    public function showNews() {

      $selectNewsPinnedQuery = $this -> db -> prepare('SELECT * FROM news WHERE pinned = :pinned ORDER BY id DESC LIMIT 1');
      $selectNewsPinnedQuery->bindValue(':pinned', 1, PDO::PARAM_STR);
      $selectNewsPinnedQuery->execute();

        if ( $selectNewsPinnedQuery->rowCount() == 1 ) {

          $pinned = 1;
          $newsPinned = $selectNewsPinnedQuery->fetch();
          $this -> newsImgPinned = $newsPinned['img'];
          $this -> newsLinkPinned = $newsPinned['link'];
          $this -> newsTitlePinned = $newsPinned['title'];
          $this -> newsTagPinned = $newsPinned['tag'];
          $this -> newsDatePinned = $newsPinned['date'];
          $this -> newsTimePinned = $newsPinned['time'];

          require_once 'http://192.168.0.104/vongg/showHTML/showNewsPinned';

        }

      $selectNewsQuery = $this -> db -> prepare('SELECT * FROM news ORDER BY id DESC LIMIT 3');
      $selectNewsQuery->execute();

        if ( $selectNewsQuery->rowCount() > 0 ) {

          $newsImg = [];
          $newsLink = [];
          $newsTitle = [];
          $newsTag = [];
          $newsDate = [];
          $newsTime = [];
          
          $newsCount = 0;

          while ( $news = $selectNewsQuery->fetch() ) {
            if ( $news['pinned'] != 1 && $newsCount != 3 ) {
              array_push($newsImg, $news['img']);
              array_push($newsLink, $news['link']);
              array_push($newsTitle, $news['title']);
              array_push($newsTag, $news['tag']);
              array_push($newsDate, $news['date']);
              array_push($newsTime, $news['time']);
            }
          }

          $this -> newsImg = $newsImg;
          $this -> newsLink = $newsLink;
          $this -> newsTitle = $newsTitle;
          $this -> newsTag = $newsTag;
          $this -> newsDate = $newsDate;
          $this -> newsTime = $newsTime;

          require_once 'http://192.168.0.104/vongg/showHTML/showNews';

        }


    }

  }
