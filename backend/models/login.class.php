<?php

  class LoginModel extends Model {

    function __construct() {

      parent::__construct();

    }

    public function showNotifications($username) {

      $selectUser = $this -> db -> prepare('SELECT * FROM users WHERE username = :username');
      $selectUser->bindValue(':username', $username, PDO::PARAM_STR);
      $selectUser->execute();
      $user = $selectUser->fetch();
      $notificationsSerialize = unserialize($user['notifications']);

      $notificationsLink = [];
      $notificationsContent = [];

      for ( $i = 0; $i < $notificationsSerialize['countNotifications']; $i++ ) {
        array_push($notificationsLink, $notificationsSerialize['links'][$i]);
        array_push($notificationsContent, $notificationsSerialize['contents'][$i]);
      }

      $this -> notificationsLink = $notificationsLink;
      $this -> notificationsContent = $notificationsContent;
      $this -> notificationsCount = $notificationsSerialize['countNotifications'];

    }

    public function showPermissions($username) {

      $selectUser = $this -> db -> prepare('SELECT * FROM users WHERE username = :username');
      $selectUser->bindValue(':username', $username, PDO::PARAM_STR);
      $selectUser->execute();
      $user = $selectUser->fetch();
      $permissionsSerialize = unserialize($user['permissionsUser']);

      $permissions = [];
      $permissionsPermission = [];

      for ( $i = 0; $i < $permissionsSerialize['countPermissions']; $i++ ) {
        array_push($permissions, $permissionsSerialize['permissions'][$i]);
        array_push($permissionsPermission, $permissionsSerialize['permissionsNames'][$i]);
      }

      $this -> permissions = $permissions;
      $this -> permissionsPermission = $permissionsPermission;
      $this -> permissionsCount = $permissionsSerialize['countPermissions'];

    }

    public function showPermissionsAdd($username) {

      $selectUser = $this -> db -> prepare('SELECT * FROM users WHERE username = :username');
      $selectUser->bindValue(':username', $username, PDO::PARAM_STR);
      $selectUser->execute();
      $user = $selectUser->fetch();
      $permissionsSerialize = unserialize($user['permissionsUser']);

      $permissionsAddLink = [];
      $permissionsAddPermission = [];

      for ( $i = 0; $i < $permissionsSerialize['countPermissionsAdd']; $i++ ) {
        array_push($permissionsAddLink, $permissionsSerialize['permissionsAdd'][$i]);
        array_push($permissionsAddPermission, $permissionsSerialize['permissionsAddNames'][$i]);
      }

      $this -> permissionsAddLink = $permissionsAddLink;
      $this -> permissionsAddPermission = $permissionsAddPermission;
      $this -> permissionsAddCount = $permissionsSerialize['countPermissionsAdd'];

    }

  }
