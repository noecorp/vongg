<?php

  require_once 'backend/models/achievments.class.php';
  require_once 'backend/models/login.class.php';
  $model = new AchievmentsModel();
  $login = new LoginModel();

  $model -> showPartnersVariables();
  if ( isset($_SESSION['loginStatus']) ) {
    $login -> showNotifications($_SESSION['loginUsername']);
    $login -> showPermissions($_SESSION['loginUsername']);
    $login -> showPermissionsAdd($_SESSION['loginUsername']);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team VoN :: Account Settings</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- CSSs -->
    <link href="http://192.168.0.104/vongg/frontend/css/main.css?<?php echo time(); ?>" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro:700&amp;subset=latin-ext" rel="stylesheet" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://192.168.0.104/vongg/frontend/js/js.cookie.js"></script>

    <script src="http://192.168.0.104/vongg/frontend/js/change-lang.js?<?= time(); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- Main Container -->
      <div id="main-container">

        <!-- Social Bar -->
          <div class="container-fluid">
            <div class="row social-bar">
              <?php if ( ! isset($_SESSION['loginStatus']) ) { ?>
              <div class="col-xs-12 col-md-offset-10 col-md-2">
                <!-- Social Items -->
                  <div class="col-xs-3 social-item">
                    <a href="http://192.168.0.104/vongg/login"><i class="fa fa-sign-in"></i></a>
                  </div>
                  <div class="col-xs-3 social-item">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </div>
                  <div class="col-xs-3 social-item">
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                  </div>
                  <div class="col-xs-3 social-item">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </div>
                <!-- / Social Items -->
              </div>
            <?php } else { ?>
              <div class="col-xs-12 col-md-offset-7 col-md-3">
                <div class="col-xs-4 social-login-username">
                  <a href="http://192.168.0.104/vongg/user/<?= $_SESSION['loginUsername']; ?>"><h1><?= $_SESSION['loginUsername']; ?></h1></a>
                </div>
                <div class="col-xs-2 social-item dropdown">
                  <button type="button" class="social-item dropdown-toggle" id="loginNotificationsButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-globe"></i><span><?= $login -> notificationsCount; ?></span></button>
                  <ul class="dropdown-menu" aria-labelledby="loginNotificationsButton">
                    <?php for ( $i = 0; $i < $login -> notificationsCount; $i++ ) { ?>
                      <li><a href="<?= $login -> notificationsLink[$i]; ?>"><?= $login -> notificationsContent[$i]; ?></a><i class="fa fa-trash" id="notificationDelete" notificationId="<?= $i; ?>"></i></li>
                    <?php } ?>
                  </ul>
                </div>
                <?php if ( $_SESSION['loginPermissionsPower'] >= 50 ) { ?>
                  <div class="col-xs-2 social-item dropdown">
                    <button type="button" class="social-item dropdown-toggle" id="loginAddButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-plus"></i></button>
                    <ul class="dropdown-menu" aria-labelledby="loginAddButton">
                      <?php for ( $i = 0; $i < $login -> permissionsAddCount; $i++ ) { ?>
                        <li><a href="<?= $login -> permissionsAddLink[$i]; ?>"><?= $login -> permissionsAddPermission[$i]; ?></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                <?php } ?>
                <div class="col-xs-2 social-item dropdown">
                  <button type="button" class="social-item dropdown-toggle" id="loginSettingsButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog"></i></button>
                  <ul class="dropdown-menu" aria-labelledby="loginSettingsButton">
                    <?php for ( $i = 0; $i < $login -> permissionsCount; $i++ ) { ?>
                      <li><a href="<?= $login -> permissions[$i]; ?>"><?= $login -> permissionsPermission[$i]; ?></a></li>
                    <?php } ?>
                      <li role="separator" class="divider"></li>
                      <li><a href="http://192.168.0.104/vongg/account/settings">Show all settings</a></li>
                  </ul>
                </div>
                <div class="col-xs-2 social-item">
                  <a href="http://192.168.0.104/vongg/login/logout"><i class="fa fa-sign-out"></i></a>
                </div>
              </div>
              <div class="col-xs-12 col-md-2">
                <!-- Social Items -->
                  <div class="col-xs-4 social-item">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </div>
                  <div class="col-xs-4 social-item">
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                  </div>
                  <div class="col-xs-4 social-item">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </div>
                <!-- / Social Items -->
              </div>
            <?php } ?>
            </div>
          </div>
        <!-- / Social Bar -->

        <!-- Header Bar -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 header-bar">
                <!-- Header Logo -->
                  <div class="col-xs-12 col-md-5 header-logo">
                    <img src="http://192.168.0.104/vongg/frontend/img/logo.png" alt="Team VoN" />
                  </div>
                <!-- / Header Logo -->
                <?php if ( ! isset($_COOKIE['lang']) || $_COOKIE['lang'] == 'en' ) { ?>
                <!-- Header Menu EN -->
                  <div class="col-xs-12 col-md-7 header-menu" id="navigation">
                    <ul class="header-menu-list list-inline">
                      <li><a href="http://192.168.0.104/vongg">Home</a></li>
                      <li><a href="http://192.168.0.104/vongg/news">News</a></li>
                      <li><a href="http://192.168.0.104/vongg/lineup">Lineup</a></li>
                      <li><a href="http://192.168.0.104/vongg/partners">Partners</a></li>
                      <li><a href="http://192.168.0.104/vongg/matches">Matches</a></li>
                      <li><a href="http://192.168.0.104/vongg/achievments">Achievments</a></li>
                      <li><a href="http://192.168.0.104/vongg/about">About Us</a></li>
                      <li><a href="http://192.168.0.104/vongg/contact">Contact</a></li>
                      <span id="en" class="change-lang lang-active">EN</span> <span id="pl" class="change-lang">PL</span>
                    </ul>
                    <span id="slide-line"></span>
                  </div>
                <!-- / Header Menu EN -->
                <?php } ?>
                <?php if ( isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'pl' ) { ?>
                <!-- Header Menu PL -->
                  <div class="col-xs-12 col-md-7 header-menu" id="navigation">
                    <ul class="header-menu-list list-inline">
                      <li><a href="http://192.168.0.104/vongg">Home</a></li>
                      <li><a href="http://192.168.0.104/vongg/news">News</a></li>
                      <li><a href="http://192.168.0.104/vongg/lineup">Skład</a></li>
                      <li><a href="http://192.168.0.104/vongg/partners">Partnerzy</a></li>
                      <li><a href="http://192.168.0.104/vongg/matches">Mecze</a></li>
                      <li><a href="http://192.168.0.104/vongg/achievments">Osiągnięcia</a></li>
                      <li><a href="http://192.168.0.104/vongg/about">O nas</a></li>
                      <li><a href="http://192.168.0.104/vongg/contact">Kontakt</a></li>
                      <span id="en" class="change-lang">EN</span> <span id="pl" class="change-lang lang-active">PL</span>
                    </ul>
                    <span id="slide-line"></span>
                  </div>
                <!-- / Header Menu PL -->
                <?php } ?>
              </div>
            </div>
          </div>
        <!-- / Header Bar -->

        <!-- Account Settings Section -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 account-settings-section">
                <!-- Heading Section -->
                <div class="col-xs-12 col-md-11 col-md-offset-1 heading-section">
                  <h1>Account Settings</h1>
                </div>
                <!-- / Heading Section -->
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active" id="settings"><a>Settings</a></li>
                    <?php for ( $i = 0; $i < $login -> permissionsCount; $i++ ) { ?>
                      <li id="<?= $login -> permissions[$i]; ?>"><a><?= $login -> permissionsPermission[$i]; ?></a></li>
                    <?php } ?>
                  </ul>
                </div>
                <div class="col-xs-12 col-md-7 col-md-offset-1" id="settingsContent">
                  <div class="account-settings-heading">
                    <h1>Settings</h1>
                  </div>
                  <div class="account-settings-content">
                    <p></p>
                  </div>
                </div>
                <?php if ( $_SESSION['loginPermissionsPower'] > 0 ) { ?>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="changeEmailContent">
                    <div class="account-settings-heading">
                      <h1>Change E-mail</h1>
                    </div>
                    <div class="account-settings-content">
                      <form method="post" action="http://192.168.0.104/vongg/form/accountChangeEmail" class="col-xs-12">
                        <div class="form-group col-xs-10 col-md-4" id="changeEmailInput">
                          <label for="email">New e-mail address</label>
                          <input type="email" class="form-control" name="newEmail" id="email">
                        </div>
                        <div class="form-group col-xs-10 col-md-4 display-none" id="changeEmailPassword">
                          <label for="password">Confirm the action with your password</label>
                          <input type="password" name="confirmPassword" class="form-control">
                        </div>
                        <div class="col-xs-12">
                          <button type="button" class="btn btn-default" name="changeEmail" id="changeEmailBtn">Change e-mail</button>
                        </div>
                        <div class="col-xs-12">
                          <button type="button" class="btn btn-default display-none" name="accountChangeEmail" id="accountChangeEmailBtn">Are you sure?</button>
                        </div>
                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-default display-none" name="accountChangeEmailConfirm" id="accountChangeEmailConfirmBtn">Confirm</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="changePasswordContent">
                    <div class="account-settings-heading">
                      <h1>Change Password</h1>
                    </div>
                    <div class="account-settings-content">
                      <form method="post" action="http://192.168.0.104/vongg/form/accountChangePassword" class="col-xs-12">
                        <div class="form-group col-xs-10 col-md-4" id="changePasswordInput">
                          <label for="password">New password</label>
                          <input type="password" name="newPassword" class="form-control">
                        </div>
                        <div class="form-group col-xs-10 col-md-4 display-none" id="changePasswordPassword">
                          <label for="password">Confirm the action with your CURRENT password</label>
                          <input type="password" name="confirmPassword" class="form-control">
                        </div>
                        <div class="col-xs-12">
                          <button type="button" class="btn btn-default" name="changePassword" id="changePasswordBtn">Change password</button>
                        </div>
                        <div class="col-xs-12">
                          <button type="button" class="btn btn-default display-none" name="accountChangePassword" id="accountChangePasswordBtn">Are you sure?</button>
                        </div>
                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-default display-none" name="accountChangePasswordConfirm" id="accountChangePasswordConfirmBtn">Confirm</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="changeAvatarContent">
                    <div class="account-settings-heading">
                      <h1>Change Avatar</h1>
                    </div>
                    <div class="account-settings-content">
                      <form method="post" action="http://192.168.0.104/vongg/form/accountChangeAvatar" class="col-xs-12">
                        <div class="currentAvatar col-xs-12 col-md-4" id="currentAvatar">
                          <h1>Current avatar</h1>
                          <img src="http://192.168.0.104/vongg/temp/<?= $_SESSION['loginAvatar']; ?>" />
                        </div>
                        <div class="form-group col-xs-12 col-md-12" id="changeAvatarInput">
                          <input type="file" name="newAvatar" accept="image/*">
                        </div>
                        <div class="form-group col-xs-10 col-md-4 display-none" id="changeAvatarPassword">
                          <label for="password">Confirm the action with your password</label>
                          <input type="password" name="confirmAvatar" class="form-control">
                        </div>
                        <div class="col-xs-12">
                          <button type="button" class="btn btn-default" name="changeAvatar" id="changeAvatarBtn">Change avatar</button>
                        </div>
                        <div class="col-xs-12">
                          <button type="button" class="btn btn-default display-none" name="accountChangeAvatar" id="accountChangeAvatarBtn">Are you sure?</button>
                        </div>
                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-default display-none" name="accountChangeAvatarConfirm" id="accountChangeAvatarConfirmBtn">Confirm</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="changeSocialsContent">
                    <div class="account-settings-heading">
                      <h1>Change Socials</h1>
                    </div>
                    <div class="account-settings-content">
                      <p>Change socials</p>
                    </div>
                  </div>
                <?php } ?>
                <?php if ( $_SESSION['loginPermissionsPower'] >= 60 ) { ?>
                <div class="col-xs-12 col-md-7 col-md-offset-1" id="changeInformationsContent">
                  <div class="account-settings-heading">
                    <h1>Change Informations</h1>
                  </div>
                  <form method="post" action="http://192.168.0.104/vongg/form/accountChangeInformations" class="col-xs-12">
                    <div class="form-group col-xs-10 col-md-4" id="changeSloganInput">
                      <label for="slogan">Slogan</label>
                      <input type="text" class="form-control" name="newSlogan" id="slogan">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeShortInfoInput">
                      <label for="shortInfo">Short Info</label>
                      <input type="text" class="form-control" name="newShortInfo" id="shortInfo">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeFunFactInput">
                      <label for="funFact">Fun Fact</label>
                      <input type="text" class="form-control" name="newFunFact" id="funFact">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeLaunchOptionsInput">
                      <label for="launchOptions">Launch Options</label>
                      <input type="text" class="form-control" name="newLaunchOptions" id="launchOptions">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeResolutionInput">
                      <label for="resolution">Resolution</label>
                      <input type="text" class="form-control" name="newResolution" id="resolution">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeSensitivityInput">
                      <label for="sensitivity">Sensitivity</label>
                      <input type="text" class="form-control" name="newSensitivity" id="sensitivity">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeCrosshairInput">
                      <label for="crosshair">Crosshair</label>
                      <input type="text" class="form-control" name="newCrosshair" id="crosshair">
                    </div>
                    <div class="form-group col-xs-10 col-md-4" id="changeConfigInput">
                      <label for="config">Config</label>
                      <input type="text" class="form-control" name="newConfig" id="config">
                    </div>
                    <div class="form-group col-xs-10 col-md-4 display-none" id="changeInformationsPassword">
                      <label for="password">Confirm the action with your password</label>
                      <input type="password" name="confirmPassword" class="form-control">
                    </div>
                    <div class="col-xs-12">
                      <button type="button" class="btn btn-default" name="changeEmail" id="changeInformationsBtn">Change informations</button>
                    </div>
                    <div class="col-xs-12">
                      <button type="button" class="btn btn-default display-none" name="accountChangeInformations" id="accountChangeInformationsBtn">Are you sure?</button>
                    </div>
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-default display-none" name="accountChangeInformationsConfirm" id="accountChangeInformationsConfirmBtn">Confirm</button>
                    </div>
                  </form>
                </div>
                <div class="col-xs-12 col-md-7 col-md-offset-1" id="changeIndividualAchievmentsContent">
                  <div class="account-settings-heading">
                    <h1>Change Individual Achievments</h1>
                  </div>
                  <div class="account-settings-content">
                    <form method="post" action="http://192.168.0.104/vongg/form/accountChangeIndividualAchievments" class="col-xs-12">
                      <div class="form-group col-xs-10 col-md-4" id="changeAchievmentInput">
                        <label for="achievment">Achievment</label>
                        <input type="text" class="form-control" name="newAchievment" id="achievment">
                      </div>
                      <div class="form-group col-xs-10 col-md-2" id="FirstPlaceInput">
                        <!-- <span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place on</span> ESEA MDL League Season 30</span> -->
                        <span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place</span></span>
                        <input type="checkbox" class="form-control" name="FirstPlace" id="FirstPlace">
                      </div>
                      <div class="form-group col-xs-10 col-md-2" id="SecondPlaceInput">
                        <!-- <span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place on</span> ESEA MDL League Season 30</span> -->
                        <span class="second-place"><i class="fa fa-trophy"></i><span class="strong-place">2nd place</span></span>
                        <input type="checkbox" class="form-control" name="SecondPlace" id="SecondPlace">
                      </div>
                      <div class="form-group col-xs-10 col-md-2" id="ThirdPlaceInput">
                        <!-- <span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place on</span> ESEA MDL League Season 30</span> -->
                        <span class="third-place"><i class="fa fa-trophy"></i><span class="strong-place">3td place</span></span>
                        <input type="checkbox" class="form-control" name="ThirdPlace" id="ThirdPlace">
                      </div>
                      <div class="form-group col-xs-10 col-md-2" id="AnotherPlaceInput">
                        <!-- <span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place on</span> ESEA MDL League Season 30</span> -->
                        <span class="place"><i class="fa fa-trophy"></i><span class="strong-place">Another place</span></span>
                        <input type="number" class="form-control" name="AnotherPlace" id="AnotherPlace" min="4" max="100">
                      </div>
                      <div class="form-group col-xs-10 col-md-2" id="addAchievmentInput">
                        <span><i class="fa fa-plus"></i></span>
                      </div>
                      <div class="form-group col-xs-10 col-md-4 display-none" id="changeInformationsPassword">
                        <label for="password">Confirm the action with your password</label>
                        <input type="password" name="confirmPassword" class="form-control">
                      </div>
                      <div class="col-xs-12">
                        <button type="button" class="btn btn-default" name="changeEmail" id="changeInformationsBtn">Change informations</button>
                      </div>
                      <div class="col-xs-12">
                        <button type="button" class="btn btn-default display-none" name="accountChangeInformations" id="accountChangeInformationsBtn">Are you sure?</button>
                      </div>
                      <div class="col-xs-12">
                        <button type="submit" class="btn btn-default display-none" name="accountChangeInformationsConfirm" id="accountChangeInformationsConfirmBtn">Confirm</button>
                      </div>
                    </form>
                  </div>
                </div>
              <?php } ?>
                <?php if ( $_SESSION['loginPermissionsPower'] >= 100 ) { ?>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="editLineupContent">
                    <div class="account-settings-heading">
                      <h1>Edit Lineup</h1>
                    </div>
                    <div class="account-settings-content">
                      <p>Edit lineup</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="editPartnersContent">
                    <div class="account-settings-heading">
                      <h1>Edit Partners</h1>
                    </div>
                    <div class="account-settings-content">
                      <p>Edit partners</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-7 col-md-offset-1" id="editAchievmentsContent">
                    <div class="account-settings-heading">
                      <h1>Edit Achievments</h1>
                    </div>
                    <div class="account-settings-content">
                      <p>Edit achievments</p>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <!-- / Achievments Section -->

        <!-- Partners Bar -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 partners-bar">
                <?php if ( $model -> partnersCount != 0 ) { ?>
                  <?php for ( $i = 0; $i < $model -> partnersCount; $i++ ) { ?>
                    <div class="slide">
                      <img src="http://192.168.0.104/vongg/temp/<?= $model -> partnerLogo[$i]; ?>" class="img-responsive" />
                    </div>
                  <?php } ?>
                <?php } else { ?>
                  <h1>We currently don't have any partners. <a href="http://192.168.0.104/vongg/contact">You are interested in?</a></h1>
                <?php } ?>
              </div>
            </div>
          </div>
        <!-- / Partners Bar -->

        <!-- BIG Footer -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 big-footer">
                <!-- BIG Footer Item #1 -->
                  <div class="col-xs-12 col-md-3 col-md-offset-1 big-footer-about-us">
                    <!-- Heading Footer -->
                      <div class="col-xs-12 heading-footer">
                        <h1>About Us</h1>
                      </div>
                    <!-- / Heading Footer -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                <!-- / BIG Footer Item #1 -->
                <!-- BIG Footer Item #2 -->
                  <div class="col-xs-12 col-md-4 big-footer-logo-socials">
                    <!-- UP Circle Slide -->
                      <div class="col-xs-4 col-xs-offset-4 circle-slide-item">
                        <span class="circle-slide" id="slide-up">
                          <i class="fa fa-chevron-up"></i>
                        </span>
                      </div>
                    <!-- / UP Circle Slide -->
                    <div class="col-xs-12 big-footer-logo">
                      <img src="http://192.168.0.104/vongg/frontend/img/logo-white.png" alt="Team VoN" />
                    </div>
                    <!-- Social Items -->
                      <div class="col-xs-12 big-footer-socials">
                        <div class="col-xs-offset-4 col-xs-1 big-footer-social">
                          <a href="#"><i class="fa fa-sign-in"></i></a>
                        </div>
                        <div class="col-xs-1 big-footer-social">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="col-xs-1 big-footer-social">
                          <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <div class="col-xs-1 big-footer-social">
                          <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                      </div>
                    <!-- / Social Items -->
                  </div>
                <!-- / BIG Footer Item #2 -->
                <!-- BIG Footer Item #3 -->
                  <div class="col-xs-12 col-md-4 big-footer-contact">
                    <!-- Heading Footer -->
                      <div class="col-xs-12 heading-footer">
                        <h1>Contact</h1>
                      </div>
                    <!-- / Heading Footer -->
                    <p>
                      <strong>Team VoN</strong><br />
                      Mateusz Domurad<br /><br />
                      <strong>E-mail:</strong> mdomurad@vongg.com
                    </p>
                  </div>
                <!-- / BIG Footer Item #3 -->
              </div>
            </div>
          </div>
        <!-- / BIG Footer -->

        <!-- Footer -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 footer">
                <p>&copy; Copyright <?= date('Y'); ?> | Team VoN | Designed by <a href="#">V1MPAR Dev</a></p>
              </div>
            </div>
          </div>
        <!-- / Footer -->

      </div>
    <!-- / Main Container -->

    <!-- JS Scripts -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> <!-- Bootstrap -->
      <script src="http://192.168.0.104/vongg/frontend/js/bootstrap-run.js?<?= time(); ?>"></script> <!-- Bootstrap Components Run -->
      <script src="http://192.168.0.104/vongg/frontend/js/menu-line.js?<?= time(); ?>"></script> <!-- Menu Slide Line -->
      <script src="http://192.168.0.104/vongg/frontend/js/slick.js?<?= time(); ?>"></script> <!-- Slick.js -->
      <script src="http://192.168.0.104/vongg/frontend/js/settingsMenu.js?<?= time(); ?>"></script> <!-- Settings Menu -->
      <script src="http://192.168.0.104/vongg/frontend/js/settingsBtns.js?<?= time(); ?>"></script> <!-- Settings Buttons -->
      <script src="http://192.168.0.104/vongg/frontend/js/partners-logo-slider.js?<?= time(); ?>"></script> <!-- Partners Logo Slider -->
      <script src="http://192.168.0.104/vongg/frontend/js/slide-up.js?<?= time(); ?>"></script> <!-- Slide UP -->
    <!-- / JS Scripts -->

  </body>
</html>
