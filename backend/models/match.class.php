<?php

  class MatchModel extends Model {

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

    public function showMatchStatsVariables($matchLink) {

      $selectMatchStatsQuery = $this -> db -> prepare('SELECT * FROM matches WHERE link = :link');
      $selectMatchStatsQuery->bindValue(':link', $matchLink, PDO::PARAM_STR);
      $selectMatchStatsQuery->execute();

      if ( $selectMatchStatsQuery->rowCount() > 0 ) {

        $matchScore = [];
        $matchTeams = [];
        $matchMaps = [];
        $matchTeamStats1 = [];
        $matchTeamStats2 = [];

        while ( $match = $selectMatchStatsQuery->fetch() ) {
            $this -> matchTeam1 = $match['team1'];
            $this -> matchTeam2 = $match['team2'];
            $this -> matchTeamAvatar1 = $match['teamavatar1'];
            $this -> matchTeamAvatar2 = $match['teamavatar2'];
            array_push($matchScore, $match['score']);
            array_push($matchTeams, $match['teams']);
            array_push($matchMaps, $match['maps']);
            array_push($matchTeamStats1, $match['teamstats1']);
            array_push($matchTeamStats2, $match['teamstats2']);
        }

        $this -> matchScore = $matchScore;
        $this -> matchTeams = $matchTeams;
        $this -> matchMaps = $matchMaps;
        $this -> matchTeamStats1 = $matchTeamStats1;
        $this -> matchTeamStats2 = $matchTeamStats2;

      }

    }

    public function showMatchStats($matchLink) {

      $selectMatchStatsQuery = $this -> db -> prepare('SELECT * FROM matches WHERE link = :link');
      $selectMatchStatsQuery->bindValue(':link', $matchLink, PDO::PARAM_STR);
      $selectMatchStatsQuery->execute();

      if ( $selectMatchStatsQuery->rowCount() > 0 ) {

        $matchScore = [];
        $matchTeams = [];
        $matchMaps = [];
        $matchTeamStats1 = [];
        $matchTeamStats2 = [];

        while ( $match = $selectMatchStatsQuery->fetch() ) {
            $this -> matchTeam1 = $match['team1'];
            $this -> matchTeam2 = $match['team2'];
            $this -> matchTeamAvatar1 = $match['teamavatar1'];
            $this -> matchTeamAvatar2 = $match['teamavatar2'];
            array_push($matchScore, $match['score']);
            array_push($matchTeams, $match['teams']);
            array_push($matchMaps, $match['maps']);
            array_push($matchTeamStats1, $match['teamstats1']);
            array_push($matchTeamStats2, $match['teamstats2']);
        }

        $this -> matchScore = $matchScore;
        $this -> matchTeams = $matchTeams;
        $this -> matchMaps = $matchMaps;
        $this -> matchTeamStats1 = $matchTeamStats1;
        $this -> matchTeamStats2 = $matchTeamStats2;

      require_once 'http://192.168.0.104/vongg/showHTML/showMatchStats?name=' . $matchLink . '';

    }

  }

}
