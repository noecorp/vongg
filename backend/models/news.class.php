<?php

  class NewsModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function showSingleNewsVariables($link) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM news WHERE link = :link ORDER BY id DESC LIMIT 1');
      $selectSingleNewsQuery->bindValue(':link', $link, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();

        if ( $selectSingleNewsQuery->rowCount() == 1 ) {

          $news = $selectSingleNewsQuery->fetch();
          $this -> newsImg = $news['img'];
          $this -> newsLink = $news['link'];
          $this -> newsTitle = $news['title'];
          $this -> newsContent = $news['content'];
          $this -> newsAuthor = $news['author'];
          $this -> newsTag = $news['tag'];
          $this -> newsDate = $news['date'];
          $this -> newsTime = $news['time'];
          $this -> newsPinnedStatus = $news['pinned'];

        }

    }

    public function showSingleNews($link) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM news WHERE link = :link ORDER BY id DESC LIMIT 1');
      $selectSingleNewsQuery->bindValue(':link', $link, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();

        if ( $selectSingleNewsQuery->rowCount() == 1 ) {

          $news = $selectSingleNewsQuery->fetch();
          $this -> newsImg = $news['img'];
          $this -> newsLink = $news['link'];
          $this -> newsTitle = $news['title'];
          $this -> newsContent = $news['content'];
          $this -> newsAuthor = $news['author'];
          $this -> newsTag = $news['tag'];
          $this -> newsDate = $news['date'];
          $this -> newsTime = $news['time'];
          $this -> newsPinnedStatus = $news['pinned'];

          include 'http://192.168.0.104/vongg/showHTML/showSingleNews?link=' . $link . '';

        }

    }

    public function showLatestNewsVariables($withoutLink) {

      $selectLatestNewsQuery = $this -> db -> prepare('SELECT * FROM news ORDER BY id DESC');
      $selectLatestNewsQuery->execute();

      if ( $selectLatestNewsQuery->rowCount() > 0 ) {

        $newsImg = [];
        $newsLink = [];
        $newsTitle = [];
        $newsContent = [];
        $newsAuthor = [];
        $newsTag = [];
        $newsDate = [];
        $newsTime = [];

        $newsCount = 0;

        while ( $news = $selectLatestNewsQuery->fetch() ) {
          if ( $newsCount != 3 && $withoutLink != $news['link'] ) {
            array_push($newsImg, $news['img']);
            array_push($newsLink, $news['link']);
            array_push($newsTitle, $news['title']);
            array_push($newsContent, $news['content']);
            array_push($newsAuthor, $news['author']);
            array_push($newsTag, $news['tag']);
            array_push($newsDate, $news['date']);
            array_push($newsTime, $news['time']);
            $newsCount++;
          }
        }

        $this -> newsLatestImg = $newsImg;
        $this -> newsLatestLink = $newsLink;
        $this -> newsLatestTitle = $newsTitle;
        $this -> newsLatestContent = $newsContent;
        $this -> newsLatestAuthor = $newsAuthor;
        $this -> newsLatestTag = $newsTag;
        $this -> newsLatestDate = $newsDate;
        $this -> newsLatestTime = $newsTime;

      }

    }

    public function showLatestNews($withoutLink) {

      $selectLatestNewsQuery = $this -> db -> prepare('SELECT * FROM news ORDER BY id DESC');
      $selectLatestNewsQuery->execute();

        if ( $selectLatestNewsQuery->rowCount() > 0 ) {

          $newsImg = [];
          $newsLink = [];
          $newsTitle = [];
          $newsContent = [];
          $newsAuthor = [];
          $newsTag = [];
          $newsDate = [];
          $newsTime = [];

          $newsCount = 0;

          while ( $news = $selectLatestNewsQuery->fetch() ) {
            if ( $newsCount != 3 && $withoutLink != $news['link'] ) {
              array_push($newsImg, $news['img']);
              array_push($newsLink, $news['link']);
              array_push($newsTitle, $news['title']);
              array_push($newsContent, $news['content']);
              array_push($newsAuthor, $news['author']);
              array_push($newsTag, $news['tag']);
              array_push($newsDate, $news['date']);
              array_push($newsTime, $news['time']);
              $newsCount++;
            }
          }

          $this -> newsLatestImg = $newsImg;
          $this -> newsLatestLink = $newsLink;
          $this -> newsLatestTitle = $newsTitle;
          $this -> newsLatestContent = $newsContent;
          $this -> newsLatestAuthor = $newsAuthor;
          $this -> newsLatestTag = $newsTag;
          $this -> newsLatestDate = $newsDate;
          $this -> newsLatestTime = $newsTime;

          include 'http://192.168.0.104/vongg/showHTML/showLatestNews?link=' . $withoutLink . '';

        }

    }

    public function showCommentsNewsVariables($link) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM news WHERE link = :link ORDER BY id DESC');
      $selectSingleNewsQuery->bindValue(':link', $link, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();
      $news = $selectSingleNewsQuery->fetch();

      $this -> newsCommentsNewsID = $news['id'];

      $selectCommentsNewsQuery = $this -> db -> prepare('SELECT * FROM comments WHERE newsID = :newsID ORDER BY id ASC');
      $selectCommentsNewsQuery->bindValue(':newsID', $this -> newsCommentsNewsID, PDO::PARAM_STR);
      $selectCommentsNewsQuery->execute();

      $this -> newsCommentsCount = $selectCommentsNewsQuery->rowCount();

      if ( $this -> newsCommentsCount > 0 ) {

        $commentID = [];
        $commentContent = [];
        $commentAuthor = [];
        $commentDate = [];
        $commentTime = [];
        $commentEdited = [];
        $commentEditStatus = [];
        $commentVoteUp = [];
        $commentVoteDown = [];
        $commentReply = [];

        while ( $comment = $selectCommentsNewsQuery->fetch() ) {
          array_push($commentID, $comment['id']);
          array_push($commentContent, $comment['content']);
          array_push($commentAuthor, $comment['author']);
          array_push($commentDate, $comment['date']);
          array_push($commentTime, $comment['time']);
          array_push($commentEdited, $comment['edited']);
          array_push($commentEditStatus, $comment['editStatus']);
          array_push($commentVoteUp, $comment['voteup']);
          array_push($commentVoteDown, $comment['votedown']);
          array_push($commentReply, $comment['reply']);
        }

        $this -> newsCommentID = $commentID;
        $this -> newsCommentContent = $commentContent;
        $this -> newsCommentAuthor = $commentAuthor;
        $this -> newsCommentDate = $commentDate;
        $this -> newsCommentTime = $commentTime;
        $this -> newsCommentEdited = $commentEdited;
        $this -> newsCommentEditStatus = $commentEditStatus;
        $this -> newsCommentVoteUp = $commentVoteUp;
        $this -> newsCommentVoteDown = $commentVoteDown;
        $this -> newsCommentReply = $commentReply;

      }

    }

    public function showCommentsNews($link) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM news WHERE link = :link ORDER BY id DESC');
      $selectSingleNewsQuery->bindValue(':link', $link, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();
      $news = $selectSingleNewsQuery->fetch();

      $this -> newsCommentsNewsID = $news['id'];

      $selectCommentsNewsQuery = $this -> db -> prepare('SELECT * FROM comments WHERE newsID = :newsID ORDER BY id ASC');
      $selectCommentsNewsQuery->bindValue(':newsID', $this -> newsCommentsNewsID, PDO::PARAM_STR);
      $selectCommentsNewsQuery->execute();

      $this -> newsCommentsCount = $selectCommentsNewsQuery->rowCount();

      if ( $this -> newsCommentsCount == 0 ) {
        include 'http://192.168.0.104/vongg/showHTML/showCommentsNews?link=' . $link . '';
      }

      if ( $this -> newsCommentsCount > 0 ) {

        $commentID = [];
        $commentContent = [];
        $commentAuthor = [];
        $commentDate = [];
        $commentTime = [];
        $commentEdited = [];
        $commentEditStatus = [];
        $commentVoteUp = [];
        $commentVoteDown = [];
        $commentReply = [];

        while ( $comment = $selectCommentsNewsQuery->fetch() ) {
          array_push($commentID, $comment['id']);
          array_push($commentContent, $comment['content']);
          array_push($commentAuthor, $comment['author']);
          array_push($commentDate, $comment['date']);
          array_push($commentTime, $comment['time']);
          array_push($commentEdited, $comment['edited']);
          array_push($commentEditStatus, $comment['editStatus']);
          array_push($commentVoteUp, $comment['voteup']);
          array_push($commentVoteDown, $comment['votedown']);
          array_push($commentReply, $comment['reply']);
        }

        $this -> newsCommentID = $commentID;
        $this -> newsCommentContent = $commentContent;
        $this -> newsCommentAuthor = $commentAuthor;
        $this -> newsCommentDate = $commentDate;
        $this -> newsCommentTime = $commentTime;
        $this -> newsCommentEdited = $commentEdited;
        $this -> newsCommentEditStatus = $commentEditStatus;
        $this -> newsCommentVoteUp = $commentVoteUp;
        $this -> newsCommentVoteDown = $commentVoteDown;
        $this -> newsCommentReply = $commentReply;

        include 'http://192.168.0.104/vongg/showHTML/showCommentsNews?link=' . $link . '';

      }

    }

    public function showNewsListVariables() {

      $selectNewsListQuery = $this -> db -> prepare('SELECT * FROM news ORDER BY id DESC');
      $selectNewsListQuery->execute();

      $this -> newsListCount = $selectNewsListQuery->rowCount();

      if ( $this -> newsListCount > 0 ) {

        $listImg = [];
        $listLink = [];
        $listTitle = [];

        while ( $list = $selectNewsListQuery->fetch() ) {
          array_push($listImg, $list['img']);
          array_push($listLink, $list['link']);
          array_push($listTitle, $list['title']);
        }

        $this -> newsListImg = $listImg;
        $this -> newsListLink = $listLink;
        $this -> newsListTitle = $listTitle;

      }

    }

    public function showNewsList() {

      $selectNewsListQuery = $this -> db -> prepare('SELECT * FROM news ORDER BY id DESC');
      $selectNewsListQuery->execute();

      $this -> newsListCount = $selectNewsListQuery->rowCount();

      if ( $this -> newsListCount > 0 ) {

        $listImg = [];
        $listLink = [];
        $listTitle = [];

        while ( $list = $selectNewsListQuery->fetch() ) {
          array_push($listImg, $list['img']);
          array_push($listLink, $list['link']);
          array_push($listTitle, $list['title']);
        }

        $this -> listImg = $listImg;
        $this -> listLink = $listLink;
        $this -> listTitle = $listTitle;

        include 'http://192.168.0.104/vongg/showHTML/showNewsList';

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
