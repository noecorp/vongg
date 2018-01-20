<?php

  class TeamsModel extends Model {

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

    public function showTeamStats($teamLink) {

      $selectTeamStatsQuery = $this -> db -> prepare('SELECT * FROM teams WHERE link = :link');
      $selectTeamStatsQuery->bindValue(':link', $teamLink, PDO::PARAM_STR);
      $selectTeamStatsQuery->execute();

        if ( $selectTeamStatsQuery->rowCount() > 0 ) {

          $teamsName = [];
          $teamsLogo = [];
          $teamsMatchesCount = [];
          $teamsMatchesWinCount = [];
          $teamsMatchesWinrate = [];
          $teamsMapsCount = [];
          $teamsMapsWinCount = [];
          $teamsMapsWinrate = [];
          $teamsMaps = [];

          while ( $team = $selectTeamStatsQuery->fetch() ) {
            array_push($teamsName, $team['name']);
            array_push($teamsLogo, $team['logo']);
            array_push($teamsMatchesCount, $team['matchescount']);
            array_push($teamsMatchesWinCount, $team['matcheswincount']);
            array_push($teamsMatchesWinrate, $team['matcheswinrate']);
            array_push($teamsMapsCount, $team['mapscount']);
            array_push($teamsMapsWinCount, $team['mapswincount']);
            array_push($teamsMapsWinrate, $team['mapswinrate']);
            array_push($teamsMaps, $team['maps']);
          }

          $this -> teamsName = $teamsName;
          $this -> teamsLogo = $teamsLogo;
          $this -> teamsMatchesCount = $teamsMatchesCount;
          $this -> teamsMatchesWinCount = $teamsMatchesWinCount;
          $this -> teamsMatchesWinrate = $teamsMatchesWinrate;
          $this -> teamsMapsCount = $teamsMapsCount;
          $this -> teamsMapsWinCount = $teamsMapsWinCount;
          $this -> teamsMapsWinrate = $teamsMapsWinrate;
          $this -> teamsMaps = $teamsMaps;

          $selectLastMatchQuery = $this -> db -> prepare('SELECT * FROM matches WHERE team1 = "' . $this -> teamsName[0] . '" OR team2 = "' . $this -> teamsName[0] . '" ORDER BY id DESC LIMIT 1');
          $selectLastMatchQuery->execute();

            if ( $selectLastMatchQuery->rowCount() == 1 ) {

              $matchScore = [];
              $matchTeam1 = [];
              $matchTeam2 = [];
              $matchDate = [];
              $matchTime = [];
              $matchLink = [];

              while ( $match = $selectLastMatchQuery->fetch() ) {
                array_push($matchScore, $match['score']);
                array_push($matchTeam1, $match['team1']);
                array_push($matchTeam2, $match['team2']);
                array_push($matchDate, $match['date']);
                array_push($matchTime, $match['time']);
                array_push($matchLink, $match['link']);
              }

              $this -> matchScore = $matchScore;
              $this -> matchTeam1 = $matchTeam1;
              $this -> matchTeam2 = $matchTeam2;
              $this -> matchDate = $matchDate;
              $this -> matchTime = $matchTime;
              $this -> matchLink = $matchLink;

          }

          require_once 'http://192.168.0.104/vongg/showHTML/showTeamStats?name=' . $teamLink . '';

      } else {
        header('Location: http://192.168.0.104/vongg/notfound');
      }

    }

    public function showTeamStatsVariables($team) {
      $selectTeamStatsQuery = $this -> db -> prepare('SELECT * FROM teams WHERE link = :link');
      $selectTeamStatsQuery->bindValue(':link', $team, PDO::PARAM_STR);
      $selectTeamStatsQuery->execute();

        if ( $selectTeamStatsQuery->rowCount() > 0 ) {

          $teamsName = [];
          $teamsLogo = [];
          $teamsMatchesCount = [];
          $teamsMatchesWinCount = [];
          $teamsMatchesWinrate = [];
          $teamsMapsCount = [];
          $teamsMapsWinCount = [];
          $teamsMapsWinrate = [];
          $teamsMaps = [];

          while ( $team = $selectTeamStatsQuery->fetch() ) {
            array_push($teamsName, $team['name']);
            array_push($teamsLogo, $team['logo']);
            array_push($teamsMatchesCount, $team['matchescount']);
            array_push($teamsMatchesWinCount, $team['matcheswincount']);
            array_push($teamsMatchesWinrate, $team['matcheswinrate']);
            array_push($teamsMapsCount, $team['mapscount']);
            array_push($teamsMapsWinCount, $team['mapswincount']);
            array_push($teamsMapsWinrate, $team['mapswinrate']);
            array_push($teamsMaps, $team['maps']);
          }

          $this -> teamsName = $teamsName;
          $this -> teamsLogo = $teamsLogo;
          $this -> teamsMatchesWinCount = $teamsMatchesWinCount;
          $this -> teamsMatchesCount = $teamsMatchesCount;
          $this -> teamsMatchesWinrate = $teamsMatchesWinrate;
          $this -> teamsMapsCount = $teamsMapsCount;
          $this -> teamsMapsWinCount = $teamsMapsWinCount;
          $this -> teamsMapsWinrate = $teamsMapsWinrate;
          $this -> teamsMaps = $teamsMaps;

          $selectLastMatchQuery = $this -> db -> prepare('SELECT * FROM matches WHERE team1 = "' . $this -> teamsName[0] . '" OR team2 = "' . $this -> teamsName[0] . '" ORDER BY id DESC LIMIT 1');
          $selectLastMatchQuery->execute();

            if ( $selectLastMatchQuery->rowCount() == 1 ) {

              $matchScore = [];
              $matchTeam1 = [];
              $matchTeam2 = [];
              $matchDate = [];
              $matchTime = [];
              $matchLink = [];

              while ( $match = $selectLastMatchQuery->fetch() ) {
                array_push($matchScore, $match['score']);
                array_push($matchTeam1, $match['team1']);
                array_push($matchTeam2, $match['team2']);
                array_push($matchDate, $match['date']);
                array_push($matchTime, $match['time']);
                array_push($matchLink, $match['link']);
              }

              $this -> matchScore = $matchScore;
              $this -> matchTeam1 = $matchTeam1;
              $this -> matchTeam2 = $matchTeam2;
              $this -> matchDate = $matchDate;
              $this -> matchTime = $matchTime;
              $this -> matchLink = $matchLink;

        }
    }

  }

}
