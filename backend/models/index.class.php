<?php

  class IndexModel extends Model {

    function __construct() {

      parent::__construct();

    }

    /* News Models */

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
                $newsCount++;
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
                $newsCount++;
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

    /* Matches Models */

      public function showMatchesVariables() {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches ORDER BY id DESC');
        $selectMatchesQuery->execute();

          if ( $selectMatchesQuery->rowCount() > 0 ) {

            $matchesMatchID = [];
            $matchesScore = [];
            $matchesTeam1 = [];
            $matchesTeam2 = [];
            $matchesMap = [];
            $matchesType = [];
            $matchesName = [];
            $matchesDate = [];
            $matchesTime = [];
            $matchesLink = [];

            $matchesCount = 0;

            while ( $match = $selectMatchesQuery->fetch() ) {
              if ( $matchesCount != 4 ) {
                array_push($matchesMatchID, $match['matchID']);
                array_push($matchesScore, $match['score']);
                array_push($matchesTeam1, $match['team1']);
                array_push($matchesTeam2, $match['team2']);
                array_push($matchesMap, $match['map']);
                array_push($matchesType, $match['type']);
                array_push($matchesName, $match['name']);
                array_push($matchesDate, $match['date']);
                array_push($matchesTime, $match['time']);
                array_push($matchesLink, $match['link']);
                $matchesCount++;
              }
            }

            $this -> matchesMatchID = $matchesMatchID;
            $this -> matchesScore = $matchesScore;
            $this -> matchesTeam1 = $matchesTeam1;
            $this -> matchesTeam2 = $matchesTeam2;
            $this -> matchesMap = $matchesMap;
            $this -> matchesType = $matchesType;
            $this -> matchesName = $matchesName;
            $this -> matchesDate = $matchesDate;
            $this -> matchesTime = $matchesTime;
            $this -> matchesLink = $matchesLink;

          }

      }

      public function showMatches() {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches ORDER BY id DESC');
        $selectMatchesQuery->execute();

          if ( $selectMatchesQuery->rowCount() > 0 ) {

            $matchesMatchID = [];
            $matchesScore = [];
            $matchesTeam1 = [];
            $matchesTeam2 = [];
            $matchesMap = [];
            $matchesType = [];
            $matchesName = [];
            $matchesDate = [];
            $matchesTime = [];
            $matchesLink = [];

            $matchesCount = 0;

            while ( $match = $selectMatchesQuery->fetch() ) {
              if ( $matchesCount != 4 ) {
                array_push($matchesMatchID, $match['matchID']);
                array_push($matchesScore, $match['score']);
                array_push($matchesTeam1, $match['team1']);
                array_push($matchesTeam2, $match['team2']);
                array_push($matchesMap, $match['map']);
                array_push($matchesType, $match['type']);
                array_push($matchesName, $match['name']);
                array_push($matchesDate, $match['date']);
                array_push($matchesTime, $match['time']);
                array_push($matchesLink, $match['link']);
                $matchesCount++;
              }
            }

            $this -> matchesMatchID = $matchesMatchID;
            $this -> matchesScore = $matchesScore;
            $this -> matchesTeam1 = $matchesTeam1;
            $this -> matchesTeam2 = $matchesTeam2;
            $this -> matchesMap = $matchesMap;
            $this -> matchesType = $matchesType;
            $this -> matchesName = $matchesName;
            $this -> matchesDate = $matchesDate;
            $this -> matchesTime = $matchesTime;
            $this -> matchesLink = $matchesLink;

            require_once 'http://192.168.0.104/vongg/showHTML/showMatches';

          }

      }

  }
