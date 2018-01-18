<?php

  class TagModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function showTagNewsListVariables($tag) {

      $selectTagNewsListQuery = $this -> db -> prepare('SELECT * FROM news WHERE tag = :tag ORDER BY id DESC');
      $selectTagNewsListQuery->bindValue(':tag', $tag, PDO::PARAM_STR);
      $selectTagNewsListQuery->execute();

      $this -> newsListCount = $selectTagNewsListQuery->rowCount();

      if ( $this -> newsListCount > 0 ) {

        $listImg = [];
        $listLink = [];
        $listTitle = [];

        while ( $list = $selectTagNewsListQuery->fetch() ) {
          array_push($listImg, $list['img']);
          array_push($listLink, $list['link']);
          array_push($listTitle, $list['title']);
        }

        $this -> newsListImg = $listImg;
        $this -> newsListLink = $listLink;
        $this -> newsListTitle = $listTitle;

      }

    }

    public function showTagNewsList($tag) {

      $selectTagNewsListQuery = $this -> db -> prepare('SELECT * FROM news WHERE tag = :tag ORDER BY id DESC');
      $selectTagNewsListQuery->bindValue(':tag', $tag, PDO::PARAM_STR);
      $selectTagNewsListQuery->execute();

      $this -> newsListCount = $selectTagNewsListQuery->rowCount();

      if ( $this -> newsListCount > 0 ) {

        $listImg = [];
        $listLink = [];
        $listTitle = [];

        while ( $list = $selectTagNewsListQuery->fetch() ) {
          array_push($listImg, $list['img']);
          array_push($listLink, $list['link']);
          array_push($listTitle, $list['title']);
        }

        $this -> listImg = $listImg;
        $this -> listLink = $listLink;
        $this -> listTitle = $listTitle;

        include 'http://192.168.0.104/vongg/showHTML/showTagList?tag=' . $tag . '';

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
