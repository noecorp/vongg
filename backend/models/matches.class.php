<?php

  class MatchesModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function showPartnersVariables() {

      $selectPartnersQuery = $this -> db -> prepare('SELECT * FROM partners ORDER BY id ASC');
      $selectPartnersQuery->execute();

      if ( $selectPartnersQuery->rowCount() > 0 ) {

        $partnerPartner = [];
        $partnerDescription = [];
        $partnerLogo = [];
        $partnerDate = [];

        while ( $partner = $selectPartnersQuery->fetch() ) {
            array_push($partnerPartner, $partner['partner']);
            array_push($partnerDescription, $partner['description']);
            array_push($partnerLogo, $partner['logo']);
            array_push($partnerDate, $partner['date']);
        }

        $this -> partnersCount = $selectPartnersQuery->rowCount();

        $this -> partnerPartner = $partnerPartner;
        $this -> partnerDescription = $partnerDescription;
        $this -> partnerLogo = $partnerLogo;
        $this -> partnerDate = $partnerDate;

      }

    }

    public function showAllMatchesVariables($type = 'all', $content = null) {

      if ( $type == 'all' && $content == null ) {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches ORDER BY id DESC');
        $selectMatchesQuery->execute();

      } elseif ( $type == 'type' && $content != null ) {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches WHERE type = :type ORDER BY id DESC');
        $selectMatchesQuery->bindValue(':type', $content, PDO::PARAM_STR);
        $selectMatchesQuery->execute();

      } elseif ( $type == 'format' && $content != null ) {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches WHERE format = :format ORDER BY id DESC');
        $selectMatchesQuery->bindValue(':format', $content, PDO::PARAM_STR);
        $selectMatchesQuery->execute();

      }

        if ( $selectMatchesQuery->rowCount() > 0 ) {

          $matchesMatchID = [];
          $matchesScore = [];
          $matchesTeam1 = [];
          $matchesTeamAvatar1 = [];
          $matchesTeam2 = [];
          $matchesTeamAvatar2 = [];
          $matchesTeams = [];
          $matchesMaps = [];
          $matchesType = [];
          $matchesFormat = [];
          $matchesName = [];
          $matchesDate = [];
          $matchesTime = [];
          $matchesLink = [];

          while ( $match = $selectMatchesQuery->fetch() ) {
            array_push($matchesMatchID, $match['matchID']);
            array_push($matchesScore, $match['score']);
            array_push($matchesTeam1, $match['team1']);
            array_push($matchesTeamAvatar1, $match['teamavatar1']);
            array_push($matchesTeam2, $match['team2']);
            array_push($matchesTeamAvatar2, $match['teamavatar2']);
            array_push($matchesTeams, $match['teams']);
            array_push($matchesMaps, $match['maps']);
            array_push($matchesType, $match['type']);
            array_push($matchesFormat, $match['format']);
            array_push($matchesName, $match['name']);
            array_push($matchesDate, $match['date']);
            array_push($matchesTime, $match['time']);
            array_push($matchesLink, $match['link']);
          }

          $this -> matchesCount = $selectMatchesQuery->rowCount();
          $this -> matchesMatchID = $matchesMatchID;
          $this -> matchesScore = $matchesScore;
          $this -> matchesTeam1 = $matchesTeam1;
          $this -> matchesTeamAvatar1 = $matchesTeamAvatar1;
          $this -> matchesTeam2 = $matchesTeam2;
          $this -> matchesTeamAvatar2 = $matchesTeamAvatar2;
          $this -> matchesTeams = $matchesTeams;
          $this -> matchesMaps = $matchesMaps;
          $this -> matchesType = $matchesType;
          $this -> matchesFormat = $matchesFormat;
          $this -> matchesName = $matchesName;
          $this -> matchesDate = $matchesDate;
          $this -> matchesTime = $matchesTime;
          $this -> matchesLink = $matchesLink;

        }

    }

    public function showAllMatches($type = 'all', $content = null) {

      if ( $type == 'all' && $content == null ) {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches ORDER BY id DESC');
        $selectMatchesQuery->execute();

      } elseif ( $type == 'type' && $content != null ) {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches WHERE type = :type ORDER BY id DESC');
        $selectMatchesQuery->bindValue(':type', $content, PDO::PARAM_STR);
        $selectMatchesQuery->execute();

      } elseif ( $type == 'format' && $content != null ) {

        $selectMatchesQuery = $this -> db -> prepare('SELECT * FROM matches WHERE format = :format ORDER BY id DESC');
        $selectMatchesQuery->bindValue(':format', $content, PDO::PARAM_STR);
        $selectMatchesQuery->execute();

      } else {
        header('Location: http://192.168.0.104/vongg/notfound');
      }

      if ( $selectMatchesQuery->rowCount() > 0 ) {

        $matchesMatchID = [];
        $matchesScore = [];
        $matchesTeam1 = [];
        $matchesTeamAvatar1 = [];
        $matchesTeam2 = [];
        $matchesTeamAvatar2 = [];
        $matchesTeams = [];
        $matchesMaps = [];
        $matchesType = [];
        $matchesFormat = [];
        $matchesName = [];
        $matchesDate = [];
        $matchesTime = [];
        $matchesLink = [];

        while ( $match = $selectMatchesQuery->fetch() ) {
          array_push($matchesMatchID, $match['matchID']);
          array_push($matchesScore, $match['score']);
          array_push($matchesTeam1, $match['team1']);
          array_push($matchesTeamAvatar1, $match['teamavatar1']);
          array_push($matchesTeam2, $match['team2']);
          array_push($matchesTeamAvatar2, $match['teamavatar2']);
          array_push($matchesTeams, $match['teams']);
          array_push($matchesMaps, $match['maps']);
          array_push($matchesType, $match['type']);
          array_push($matchesFormat, $match['format']);
          array_push($matchesName, $match['name']);
          array_push($matchesDate, $match['date']);
          array_push($matchesTime, $match['time']);
          array_push($matchesLink, $match['link']);
        }

        $this -> matchesCount = $selectMatchesQuery->rowCount();
        $this -> matchesMatchID = $matchesMatchID;
        $this -> matchesScore = $matchesScore;
        $this -> matchesTeam1 = $matchesTeam1;
        $this -> matchesTeamAvatar1 = $matchesTeamAvatar1;
        $this -> matchesTeam2 = $matchesTeam2;
        $this -> matchesTeamAvatar2 = $matchesTeamAvatar2;
        $this -> matchesTeams = $matchesTeams;
        $this -> matchesMaps = $matchesMaps;
        $this -> matchesType = $matchesType;
        $this -> matchesFormat = $matchesFormat;
        $this -> matchesName = $matchesName;
        $this -> matchesDate = $matchesDate;
        $this -> matchesTime = $matchesTime;
        $this -> matchesLink = $matchesLink;

          require_once 'http://192.168.0.104/vongg/showHTML/showAllMatches?type=' . $type . '&content=' . $content . '';

        }

    }

  }
