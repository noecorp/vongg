<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Team VoN :: Login</title>

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

        <!-- Login -->

          <div class="col-xs-12 col-md-6 col-md-offset-3 login-logo">
            <a href="http://192.168.0.104/vongg/">
              <img src="http://192.168.0.104/vongg/frontend/img/logo.png" />
            </a>
          </div>

          <section id="login">
              <div class="container">
              	<div class="row">
              	    <div class="col-xs-12">
                  	    <div class="form-wrap">
                          <h1>Log in to VoNGG</h1>
                              <form role="form" action="http://192.168.0.104/vongg/form/loginUser" method="post" id="login-form" autocomplete="off">
                                  <div class="form-group">
                                      <?php if ( isset($_SESSION['usernameError']) ) { ?>
                                        <p><span class="error"><?= $_SESSION['usernameError']; ?></span></p>
                                        <?php unset($_SESSION['usernameError']); ?>
                                      <?php } ?>
                                      <label for="username" class="sr-only">Username</label>
                                      <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                  </div>
                                  <div class="form-group">
                                      <?php if ( isset($_SESSION['passwordError']) ) { ?>
                                        <p><span class="error"><?= $_SESSION['passwordError']; ?></span></p>
                                        <?php unset($_SESSION['passwordError']); ?>
                                      <?php } ?>
                                      <label for="password" class="sr-only">Password</label>
                                      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                  </div>
                                  <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                              </form>
                              <div class="forget">
                                <a href="http://192.168.0.104/vongg/login/forgot">Forgot your password?</a>
                              </div>
                              <hr>
                  	    </div>
              		</div>
              	</div>
              </div>
          </section>
        <!-- / Login -->

      </div>
    <!-- / Main Container -->

    <!-- JS Scripts -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> <!-- Bootstrap -->
      <script src="http://192.168.0.104/vongg/frontend/js/bootstrap-run.js?<?= time(); ?>"></script> <!-- Bootstrap Components Run -->
      <script src="http://192.168.0.104/vongg/frontend/js/menu-line.js?<?= time(); ?>"></script> <!-- Menu Slide Line -->
      <script src="http://192.168.0.104/vongg/frontend/js/reply-comment.js?<?= time(); ?>"></script> <!-- Reply Comment -->
      <script src="http://192.168.0.104/vongg/frontend/js/edit-comment.js?<?= time(); ?>"></script> <!-- Edit Comment -->
      <script src="http://192.168.0.104/vongg/frontend/js/delete-comment.js?<?= time(); ?>"></script> <!-- Delete Comment -->
      <script src="http://192.168.0.104/vongg/frontend/js/voteup-comment.js?<?= time(); ?>"></script> <!-- Vote Up Comment -->
      <script src="http://192.168.0.104/vongg/frontend/js/votedown-comment.js?<?= time(); ?>"></script> <!-- Vote Down Comment -->
      <script src="http://192.168.0.104/vongg/frontend/js/old-comment.js?<?= time(); ?>"></script> <!-- Show Edited Comment -->
      <script src="http://192.168.0.104/vongg/frontend/js/slick.js?<?= time(); ?>"></script> <!-- Slick.js -->
      <script src="http://192.168.0.104/vongg/frontend/js/partners-logo-slider.js?<?= time(); ?>"></script> <!-- Partners Logo Slider -->
      <script src="http://192.168.0.104/vongg/frontend/js/slide-up.js?<?= time(); ?>"></script> <!-- Slide UP -->
    <!-- / JS Scripts -->

  </body>
</html>
