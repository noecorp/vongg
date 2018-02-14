<?php

  class SettingsModel extends Model {

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

    public function showPartners() {

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

        include 'http://192.168.0.104/vongg/showHTML/showPartners';

      }

    }

    public function showInformationsVariables($user) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM lineup WHERE name = :user');
      $selectSingleNewsQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();

        if ( $selectSingleNewsQuery->rowCount() == 1 ) {

          $info = $selectSingleNewsQuery->fetch();
          $this -> userSlogan = $info['slogan'];
          $this -> userInformations = $info['info'];
          $this -> userSettings = $info['settings'];
          $this -> userFunFact = $info['funfact'];

        }

    }

    public function showIndividualAchievmentsVariables($user) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectSingleNewsQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();

        if ( $selectSingleNewsQuery->rowCount() == 1 ) {

          $news = $selectSingleNewsQuery->fetch();
          $this -> userIndividualAchievments = $news['individualAchievments'];

        }

    }

    public function showIndividualAchievments($user) {

      $selectSingleNewsQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectSingleNewsQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectSingleNewsQuery->execute();

        if ( $selectSingleNewsQuery->rowCount() == 1 ) {

          $news = $selectSingleNewsQuery->fetch();
          $this -> userIndividualAchievments = $news['individualAchievments'];

          include 'http://192.168.0.104/vongg/showHTML/showSettingsIndividualAchievments?user=' . $user . '';

        }

    }

    public function showSocialsVariables($user) {

      $selectSocialsQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectSocialsQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectSocialsQuery->execute();

        if ( $selectSocialsQuery->rowCount() == 1 ) {

          $info = $selectSocialsQuery->fetch();
          $this -> userSocials = $info['socials'];

        }

    }

    public function changeEmail($email, $user, $password) {

      $errors = 0;

      $email = htmlentities($email, ENT_QUOTES, "UTF-8");

      $selectEmailQuery = $this -> db -> prepare('SELECT * FROM users WHERE email = :email');
      $selectEmailQuery->bindValue(':email', $email, PDO::PARAM_STR);
      $selectEmailQuery->execute();
      $emailDb = $selectEmailQuery->fetch();

      $selectEmailUserQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectEmailUserQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectEmailUserQuery->execute();
      $userDb = $selectEmailUserQuery->fetch();

      if ( ! $email ) {
        $error++;
        $_SESSION['accountSettingsAlertError'] = 'The field with the e-mail address is empty';
      }

      if ( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $error++;
        $_SESSION['accountSettingsAlertError'] = 'The email address provided isn\'t valid';
      }

      if ( $email == $emailDb['email'] ) {
        $error++;
        $_SESSION['accountSettingsAlertError'] = 'The e-mail address provided is already in use';
      }

      if ( $email == $userDb['email'] ) {
        $error++;
        $_SESSION['accountSettingsAlertError'] = 'You are already using the e-mail address provided';
      }

      if ( ! $password ) {
        $error++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The field with the password is empty';
      }

      if ( ! password_verify($password, $userDb['password']) ) {
        $error++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The password provided is incorrect';
      }

      if ( $errors > 0 ) {
        header('Location: http://192.168.0.104/vongg/account/settings');
      } else {
        $updateEmailQuery = $this -> db -> prepare('UPDATE users SET email = :email WHERE username = :user');
        $updateEmailQuery->bindValue(':email', $email, PDO::PARAM_STR);
        $updateEmailQuery->bindValue(':user', $user, PDO::PARAM_STR);
        $updateEmailQuery->execute();
        $_SESSION['accountSettingsAlertSuccess'] = 'Your email has been successfully changed';
        header('Location: http://192.168.0.104/vongg/account/settings');
      }

    }

    public function changePassword($passwordNew, $user, $password) {

      $errors = 0;

      $passwordNew = htmlentities($passwordNew, ENT_QUOTES, "UTF-8");

      $selectPasswordUserQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectPasswordUserQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectPasswordUserQuery->execute();
      $userDb = $selectPasswordUserQuery->fetch();

      if ( ! $passwordNew ) {
        $errors++;
        $_SESSION['accountSettingsAlertError'] = 'The field with the password is empty';
      }

      if ( strlen($passwordNew) < 8 ) {
        $errors++;
        $_SESSION['accountSettingsAlertError'] = 'The password should contain a minimum of 8 characters';
      }

      if ( ! $password ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The field with the password is empty';
      }

      if ( ! password_verify($password, $userDb['password']) ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The password provided is incorrect';
      }

      if ( $errors > 0 ) {
        header('Location: http://192.168.0.104/vongg/account/settings');
      } else {
        $passwordHash = password_hash($passwordNew, PASSWORD_DEFAULT);
        $updatePasswordQuery = $this -> db -> prepare('UPDATE users SET password = :password WHERE username = :user');
        $updatePasswordQuery->bindValue(':password', $passwordHash, PDO::PARAM_STR);
        $updatePasswordQuery->bindValue(':user', $user, PDO::PARAM_STR);
        $updatePasswordQuery->execute();
        $_SESSION['accountSettingsAlertSuccess'] = 'Your password has been successfully changed';
        header('Location: http://192.168.0.104/vongg/account/settings');
      }

    }

    public function changeAvatar($photo, $user, $password) {

      $errors = 0;
      $targetDir = "temp/";
      $photoName = date('YmdHis') . '_' . $photo["name"];
      $targetFile = $targetDir . basename(date('YmdHis') . '_' . $photo["name"]);
      $photoType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

      $selectPasswordUserQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectPasswordUserQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectPasswordUserQuery->execute();
      $userDb = $selectPasswordUserQuery->fetch();

      $check = getimagesize($photo["tmp_name"]);
      if($check !== false) {

      } else {
          $_SESSION['accountSettingsAlertError'] = 'The file you uploaded isn\'t a photo';
          $errors++;
      }

      if (file_exists($targetFile)) {
          $_SESSION['accountSettingsAlertError'] = 'The uploaded file already exists';
          $errors++;
      }

      if ($photo["size"] > 500000) {
          $_SESSION['accountSettingsAlertError'] = 'The uploaded file is too big. The maximum avatar size is 5MB';
          $errors++;
      }

      if($photoType != "jpg" && $photoType != "png" && $photoType != "jpeg" ) {
          $_SESSION['accountSettingsAlertError'] = 'The allowed file formats are JPG, JPEG, PNG';
          $errors++;
      }

      if ( ! $password ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The field with the password is empty';
      }

      if ( ! password_verify($password, $userDb['password']) ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The password provided is incorrect';
      }

      if ( $errors > 0 ) {
        header('Location: http://192.168.0.104/vongg/account/settings');
      } else {
        if (move_uploaded_file($photo["tmp_name"], $targetFile)) {
          $_SESSION['loginAvatar'] = $photoName;
          $updateAvatarQuery = $this -> db -> prepare('UPDATE users SET avatar = :avatar WHERE username = :user');
          $updateAvatarQuery->bindValue(':avatar', $photoName, PDO::PARAM_STR);
          $updateAvatarQuery->bindValue(':user', $user, PDO::PARAM_STR);
          $updateAvatarQuery->execute();
          $_SESSION['accountSettingsAlertSuccess'] = 'Your avatar has been successfully changed';
          header('Location: http://192.168.0.104/vongg/account/settings');
        } else {
            $_SESSION['accountSettingsAlertError'] = 'An error occurred while uploading your file';
            header('Location: http://192.168.0.104/vongg/account/settings');
        }
      }

    }

    public function changeInformations($slogan, $shortInfo, $role, $age, $from, $funFact, $launchOptions, $resolution, $sensitivity, $crosshair, $config, $user, $password) {

      $errors = 0;

      $slogan = htmlentities($slogan, ENT_QUOTES, "UTF-8");
      $shortInfo = htmlentities($shortInfo, ENT_QUOTES, "UTF-8");
      $role = htmlentities($role, ENT_QUOTES, "UTF-8");
      $age = htmlentities($age, ENT_QUOTES, "UTF-8");
      $from = htmlentities($from, ENT_QUOTES, "UTF-8");
      $funFact = htmlentities($funFact, ENT_QUOTES, "UTF-8");
      $launchOptions = htmlentities($launchOptions, ENT_QUOTES, "UTF-8");
      $resolution = htmlentities($resolution, ENT_QUOTES, "UTF-8");
      $sensitivity = htmlentities($sensitivity, ENT_QUOTES, "UTF-8");
      $crosshair = htmlentities($crosshair, ENT_QUOTES, "UTF-8");
      $config = htmlentities($config, ENT_QUOTES, "UTF-8");

      $selectEmailUserQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectEmailUserQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectEmailUserQuery->execute();
      $userDb = $selectEmailUserQuery->fetch();

      $info = serialize(['info' => $shortInfo, 'role' => $role, 'years' => $age, 'from' => $from]);
      $settings = serialize(['launch' => $launchOptions, 'resolution' => $resolution, 'crosshair' => $crosshair, 'sens' => $sensitivity, 'exec' => $config]);

      if ( ! $password ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The field with the password is empty';
      }

      if ( ! password_verify($password, $userDb['password']) ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The password provided is incorrect';
      }

      if ( $errors > 0 ) {
        header('Location: http://192.168.0.104/vongg/account/settings');
      } else {
        $updateInformationsQuery = $this -> db -> prepare('UPDATE lineup SET slogan = :slogan, info = :info, settings = :settings, funfact = :funfact WHERE name = :user');
        $updateInformationsQuery->bindValue(':slogan', $slogan, PDO::PARAM_STR);
        $updateInformationsQuery->bindValue(':info', $info, PDO::PARAM_STR);
        $updateInformationsQuery->bindValue(':settings', $settings, PDO::PARAM_STR);
        $updateInformationsQuery->bindValue(':funfact', $funFact, PDO::PARAM_STR);
        $updateInformationsQuery->bindValue(':user', $user, PDO::PARAM_STR);
        $updateInformationsQuery->execute();
        $_SESSION['accountSettingsAlertSuccess'] = 'Your informations has been successfully changed';
        header('Location: http://192.168.0.104/vongg/account/settings');
      }

    }

    public function changeSocials($fb, $yt, $tw, $twitch, $ig, $steam, $user, $password) {

      $errors = 0;

      $fb = htmlentities($fb, ENT_QUOTES, "UTF-8");
      $yt = htmlentities($yt, ENT_QUOTES, "UTF-8");
      $tw = htmlentities($tw, ENT_QUOTES, "UTF-8");
      $twitch = htmlentities($twitch, ENT_QUOTES, "UTF-8");
      $ig = htmlentities($ig, ENT_QUOTES, "UTF-8");
      $steam = htmlentities($steam, ENT_QUOTES, "UTF-8");

      $selectEmailUserQuery = $this -> db -> prepare('SELECT * FROM users WHERE username = :user');
      $selectEmailUserQuery->bindValue(':user', $user, PDO::PARAM_STR);
      $selectEmailUserQuery->execute();
      $userDb = $selectEmailUserQuery->fetch();

      $socials = serialize(['fb' => $fb, 'yt' => $yt, 'tw' => $tw, 'twitch' => $twitch, 'ig' => $ig, 'steam' => $steam]);

      if ( ! $password ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The field with the password is empty';
      }

      if ( ! password_verify($password, $userDb['password']) ) {
        $errors++;
        $_SESSION['accountSettingsAlertPasswordConfirmError'] = 'The password provided is incorrect';
      }

      if ( $errors > 0 ) {
        header('Location: http://192.168.0.104/vongg/account/settings');
      } else {
        $updateSocialsQuery = $this -> db -> prepare('UPDATE users SET socials = :socials WHERE username = :user');
        $updateSocialsQuery->bindValue(':socials', $socials, PDO::PARAM_STR);
        $updateSocialsQuery->bindValue(':user', $user, PDO::PARAM_STR);
        $updateSocialsQuery->execute();
        $_SESSION['accountSettingsAlertSuccess'] = 'Your socials has been successfully changed';
        header('Location: http://192.168.0.104/vongg/account/settings');
      }

    }

  }
