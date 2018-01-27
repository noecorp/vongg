<?php

  class LineupModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function showLineupPlayersVariables() {

      $selectLineupPlayersQuery = $this -> db -> prepare('SELECT * FROM lineup ORDER BY id ASC');
      $selectLineupPlayersQuery->execute();

      if ( $selectLineupPlayersQuery->rowCount() > 0 ) {

        $lineupAvatar = [];
        $lineupName = [];

        while ( $lineup = $selectLineupPlayersQuery->fetch() ) {
            array_push($lineupAvatar, $lineup['avatar']);
            array_push($lineupName, $lineup['name']);
        }

        $this -> lineupPlayerAvatar = $lineupAvatar;
        $this -> lineupPlayerName = $lineupName;

      }

    }

    public function showLineupPlayers() {

      $selectLineupPlayersQuery = $this -> db -> prepare('SELECT * FROM lineup ORDER BY id ASC');
      $selectLineupPlayersQuery->execute();

      if ( $selectLineupPlayersQuery->rowCount() > 0 ) {

        $lineupAvatar = [];
        $lineupName = [];

        while ( $lineup = $selectLineupPlayersQuery->fetch() ) {
            array_push($lineupAvatar, $lineup['avatar']);
            array_push($lineupName, $lineup['name']);
        }

        $this -> lineupPlayerAvatar = $lineupAvatar;
        $this -> lineupPlayerName = $lineupName;

        include 'http://192.168.0.104/vongg/showHTML/showLineupPlayers';

      }

    }

    public function showLineupPlayersInfoVariables() {

      $selectLineupPlayersInfoQuery = $this -> db -> prepare('SELECT * FROM lineup ORDER BY id ASC');
      $selectLineupPlayersInfoQuery->execute();

      if ( $selectLineupPlayersInfoQuery->rowCount() > 0 ) {

        $lineupSlogan = [];
        $lineupInfo = [];
        $lineupAchievmentsTeam = [];
        $lineupAchievmentsIndividual = [];
        $lineupSettings = [];
        $lineupAvatar = [];
        $lineupSocials = [];
        $lineupFunFact = [];

        while ( $lineup = $selectLineupPlayersInfoQuery->fetch() ) {
            array_push($lineupSlogan, $lineup['slogan']);
            array_push($lineupInfo, $lineup['info']);
            array_push($lineupSettings, $lineup['settings']);
            array_push($lineupAchievmentsTeam, $lineup['achievmentsteam']);
            array_push($lineupAchievmentsIndividual, $lineup['achievmentsindividual']);
            array_push($lineupAvatar, $lineup['avatar']);
            array_push($lineupSocials, $lineup['socials']);
            array_push($lineupFunFact, $lineup['funfact']);
        }

        $this -> lineupPlayerInfoSlogan = $lineupSlogan;
        $this -> lineupPlayerInfoInfo = $lineupInfo;
        $this -> lineupPlayerInfoAchievmentsTeam = $lineupAchievmentsTeam;
        $this -> lineupPlayerInfoAchievmentsIndividual = $lineupAchievmentsIndividual;
        $this -> lineupPlayerInfoSettings = $lineupSettings;
        $this -> lineupPlayerInfoAvatar = $lineupAvatar;
        $this -> lineupPlayerInfoSocials = $lineupSocials;
        $this -> lineupPlayerInfoFunFact = $lineupFunFact;

      }

    }

    public function showLineupPlayersInfo() {

      $selectLineupPlayersInfoQuery = $this -> db -> prepare('SELECT * FROM lineup ORDER BY id ASC');
      $selectLineupPlayersInfoQuery->execute();

      if ( $selectLineupPlayersInfoQuery->rowCount() > 0 ) {

        $lineupSlogan = [];
        $lineupInfo = [];
        $lineupAchievmentsTeam = [];
        $lineupAchievmentsIndividual = [];
        $lineupSettings = [];
        $lineupAvatar = [];
        $lineupSocials = [];
        $lineupFunFact = [];

        while ( $lineup = $selectLineupPlayersInfoQuery->fetch() ) {
            array_push($lineupSlogan, $lineup['slogan']);
            array_push($lineupInfo, $lineup['info']);
            array_push($lineupSettings, $lineup['settings']);
            array_push($lineupAchievmentsTeam, $lineup['achievmentsteam']);
            array_push($lineupAchievmentsIndividual, $lineup['achievmentsindividual']);
            array_push($lineupAvatar, $lineup['avatar']);
            array_push($lineupSocials, $lineup['socials']);
            array_push($lineupFunFact, $lineup['funfact']);
        }

        $this -> lineupPlayerInfoSlogan = $lineupSlogan;
        $this -> lineupPlayerInfoInfo = $lineupInfo;
        $this -> lineupPlayerInfoAchievmentsTeam = $lineupAchievmentsTeam;
        $this -> lineupPlayerInfoAchievmentsIndividual = $lineupAchievmentsIndividual;
        $this -> lineupPlayerInfoSettings = $lineupSettings;
        $this -> lineupPlayerInfoAvatar = $lineupAvatar;
        $this -> lineupPlayerInfoSocials = $lineupSocials;
        $this -> lineupPlayerInfoFunFact = $lineupFunFact;

        include 'http://192.168.0.104/vongg/showHTML/showLineupPlayersInfo';

      }

    }

    public function showAllPlayersVariables() {

      $selectAllPlayersQuery = $this -> db -> prepare('SELECT * FROM lineup ORDER BY id ASC');
      $selectAllPlayersQuery->execute();

      if ( $selectAllPlayersQuery->rowCount() > 0 ) {

        $playersAvatar = [];
        $playersName = [];

        while ( $players = $selectAllPlayersQuery->fetch() ) {
            array_push($playersAvatar, $players['avatar']);
            array_push($playersName, $players['name']);
        }

        $this -> allPlayersCount = $selectAllPlayersQuery->rowCount();
        $this -> playersPlayerAvatar = $playersAvatar;
        $this -> playersPlayerName = $playersName;

      }

    }

    public function showAllPlayers() {

      $selectAllPlayersQuery = $this -> db -> prepare('SELECT * FROM lineup ORDER BY id ASC');
      $selectAllPlayersQuery->execute();

      if ( $selectAllPlayersQuery->rowCount() > 0 ) {

        $playersAvatar = [];
        $playersName = [];

        while ( $players = $selectAllPlayersQuery->fetch() ) {
            array_push($playersAvatar, $players['avatar']);
            array_push($playersName, $players['name']);
        }

        $this -> allPlayersCount = $selectAllPlayersQuery->rowCount();
        $this -> playersPlayerAvatar = $playersAvatar;
        $this -> playersPlayerName = $playersName;

        include 'http://192.168.0.104/vongg/showHTML/showAllPlayers';

      }

    }

    public function showPlayerProfileVariables($player) {

      $this -> request = $_GET['url'];
      $this -> request = rtrim($this -> request, '/');
      $this -> params = explode("/", $this -> request);

      $selectPlayerProfileQuery = $this -> db -> prepare('SELECT * FROM lineup WHERE name = :name ORDER BY id ASC');
      $selectPlayerProfileQuery->bindValue(':name', $player, PDO::PARAM_STR);
      $selectPlayerProfileQuery->execute();

      if ( $selectPlayerProfileQuery->rowCount() > 0 ) {

        $lineup = $selectPlayerProfileQuery->fetch();

            $this -> lineupPlayerInfoFullName = $lineup['fullname'];
            $this -> lineupPlayerInfoName = $lineup['name'];
            $this -> lineupPlayerInfoSlogan = $lineup['slogan'];
            $this -> lineupPlayerInfoInfo = $lineup['info'];
            $this -> lineupPlayerInfoSettings = $lineup['settings'];
            $this -> lineupPlayerInfoAchievmentsTeam = $lineup['achievmentsteam'];
            $this -> lineupPlayerInfoAchievmentsIndividual = $lineup['achievmentsindividual'];
            $this -> lineupPlayerInfoAvatar = $lineup['avatar'];
            $this -> lineupPlayerInfoSocials = $lineup['socials'];
            $this -> lineupPlayerInfoFunFact = $lineup['funfact'];

      }

    }

    public function showPlayerProfile($player) {

      $this -> request = $_GET['url'];
      $this -> request = rtrim($this -> request, '/');
      $this -> params = explode("/", $this -> request);

      $selectPlayerProfileQuery = $this -> db -> prepare('SELECT * FROM lineup WHERE name = :name ORDER BY id ASC');
      $selectPlayerProfileQuery->bindValue(':name', $player, PDO::PARAM_STR);
      $selectPlayerProfileQuery->execute();

      if ( $selectPlayerProfileQuery->rowCount() > 0 ) {

        $lineup = $selectPlayerProfileQuery->fetch();

            $this -> lineupPlayerInfoFullName = $lineup['fullname'];
            $this -> lineupPlayerInfoName = $lineup['name'];
            $this -> lineupPlayerInfoSlogan = $lineup['slogan'];
            $this -> lineupPlayerInfoInfo = $lineup['info'];
            $this -> lineupPlayerInfoSettings = $lineup['settings'];
            $this -> lineupPlayerInfoAchievmentsTeam = $lineup['achievmentsteam'];
            $this -> lineupPlayerInfoAchievmentsIndividual = $lineup['achievmentsindividual'];
            $this -> lineupPlayerInfoAvatar = $lineup['avatar'];
            $this -> lineupPlayerInfoSocials = $lineup['socials'];
            $this -> lineupPlayerInfoFunFact = $lineup['funfact'];

        include 'http://192.168.0.104/vongg/showHTML/showPlayerProfile?name=' . $player . '';

      }

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

  }
