<?php

  require_once 'backend/models/news.class.php';
  $model = new NewsModel();

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team VoN :: <?= $this -> pageTitle; ?></title>

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
              <div class="col-xs-12 col-md-offset-10 col-md-2">
                <!-- Social Items -->
                  <div class="col-xs-3 social-item">
                    <a href="#"><i class="fa fa-sign-in"></i></a>
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
                      <li class="current-item"><a href="http://192.168.0.104/vongg/news">News</a></li>
                      <li><a href="http://192.168.0.104/vongg/lineup">Players</a></li>
                      <li><a href="http://192.168.0.104/vongg/partners">Partners</a></li>
                      <li><a href="http://192.168.0.104/vongg/matches">Matches</a></li>
                      <li><a href="http://192.168.0.104/vongg/aboutus">About Us</a></li>
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
                      <li class="current-item"><a href="http://192.168.0.104/vongg/news">News</a></li>
                      <li><a href="http://192.168.0.104/vongg/lineup">Skład</a></li>
                      <li><a href="http://192.168.0.104/vongg/partners">Partnerzy</a></li>
                      <li><a href="http://192.168.0.104/vongg/matches">Mecze</a></li>
                      <li><a href="http://192.168.0.104/vongg/aboutus">O nas</a></li>
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

        <!-- Separator -->
          <div class="header-separator"></div>
        <!-- / Separator -->

        <!-- Single News Section -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 single-news-section">
                <?php $model -> showSingleNews($this -> newsLink); ?>
                <?php $model -> showLatestNews($this -> newsLink); ?>
                <?php $model -> showCommentsNews($this -> newsLink); ?>
              </div>
            </div>
          </div>
        <!-- / Single News Section -->

        <!-- Partners Bar -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 partners-bar">
                <h1>We currently don't have any partners. <a href="#">You are interested in?</a></h1>
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
      <script src="http://192.168.0.104/vongg/frontend/js/menu-line.js?<?= time(); ?>"></script> <!-- Menu Slide Line -->
    <!-- / JS Scripts -->

  </body>
</html>
