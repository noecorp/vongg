<?php

  require_once 'backend/models/lineup.class.php';
  $model = new LineupModel();
  $model -> showLineupPlayersInfoVariables();

  $info0 = unserialize($model -> lineupPlayerInfoInfo[0]);
  $settings0 = unserialize($model -> lineupPlayerInfoSettings[0]);
  $social0 = unserialize($model -> lineupPlayerInfoSocials[0]);
  $funfact0 = $model -> lineupPlayerInfoFunFact[0];

  $info1 = unserialize($model -> lineupPlayerInfoInfo[1]);
  $settings1 = unserialize($model -> lineupPlayerInfoSettings[1]);
  $social1 = unserialize($model -> lineupPlayerInfoSocials[1]);
  $funfact1 = $model -> lineupPlayerInfoFunFact[1];

?>

              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <!-- Lineup Info Player #1 -->
                  <div class="col-xs-12 lineup-player-info" id="lineup-player-info1">
                    <div class="col-xs-12 lineup-player-info-slogan">
                      <h1><?= $model -> lineupPlayerInfoSlogan[0]; ?></h1>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <div class="lineup-player-info-short-info">
                        <h1>Short info</h1>
                        <p><?= $info0['info']; ?></p>
                        <h3>Role<span><?= $info0['role']; ?></span></h3>
                        <h3>Age<span><?= $info0['years']; ?></span></h3>
                        <h3>From<span><?= $info0['from']; ?></span></h3>
                      </div>
                      <div class="lineup-player-info-game-settings">
                        <h1>In-game settings</h1>
                        <h3>Launch options<span><?= $settings0['launch']; ?></span></h3>
                        <h3>Resolution<span><?= $settings0['resolution']; ?></span></h3>
                        <h3>Sensitivity<span><?= $settings0['sens']; ?></span></h3>
                        <h3>Crosshair<span><a href="<?= $settings0['crosshair']; ?>">download</a></span></h3>
                        <h3>Config<span><a href="<?= $settings0['exec']; ?>">download</a></span></h3>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                      <div class="col-xs-12 lineup-player-info-socials">
                        <h1>Follow him here</h1>
                        <div class="col-xs-8 col-xs-offset-2 lineup-player-info-avatar">
                          <img src="http://192.168.0.104/vongg/temp/<?= $model -> lineupPlayerInfoAvatar[0]; ?>" />
                        </div>
                        <div class="col-xs-6 col-xs-offset-3 single-news-social">
                          <?php if ( $social0['fb'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social0['fb']; ?>"><i class="fa fa-facebook"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social0['yt'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social0['yt']; ?>"><i class="fa fa-youtube-play"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social0['tw'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social0['tw']; ?>"><i class="fa fa-twitter"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social0['twitch'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social0['twitch']; ?>"><i class="fa fa-twitch"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social0['ig'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social0['ig']; ?>"><i class="fa fa-instagram"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social0['steam'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social0['steam']; ?>"><i class="fa fa-steam"></i></a>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 lineup-player-info-funfact">
                        <h1>Fun fact</h1>
                        <p><?= $funfact0; ?></p>
                      </div>
                    </div>
                  </div>
                <!-- / Lineup Info Player #1 -->
                <!-- Lineup Info Player #2 -->
                  <div class="col-xs-12 lineup-player-info display-none" id="lineup-player-info2">
                    <div class="col-xs-12 lineup-player-info-slogan">
                      <h1><?= $model -> lineupPlayerInfoSlogan[1]; ?></h1>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <div class="lineup-player-info-short-info">
                        <h1>Short info</h1>
                        <p><?= $info1['info']; ?></p>
                        <h3>Role<span><?= $info1['role']; ?></span></h3>
                        <h3>Age<span><?= $info1['years']; ?></span></h3>
                        <h3>From<span><?= $info1['from']; ?></span></h3>
                      </div>
                      <div class="lineup-player-info-game-settings">
                        <h1>In-game settings</h1>
                        <h3>Launch options<span><?= $settings1['launch']; ?></span></h3>
                        <h3>Resolution<span><?= $settings1['resolution']; ?></span></h3>
                        <h3>Sensitivity<span><?= $settings1['sens']; ?></span></h3>
                        <h3>Crosshair<span><a href="<?= $settings1['crosshair']; ?>">download</a></span></h3>
                        <h3>Config<span><a href="<?= $settings1['exec']; ?>">download</a></span></h3>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                      <div class="col-xs-12 lineup-player-info-socials">
                        <h1>Follow him here</h1>
                        <div class="col-xs-8 col-xs-offset-2 lineup-player-info-avatar">
                          <img src="http://192.168.0.104/vongg/temp/<?= $model -> lineupPlayerInfoAvatar[1]; ?>" />
                        </div>
                        <div class="col-xs-6 col-xs-offset-3 single-news-social">
                          <?php if ( $social1['fb'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social1['fb']; ?>"><i class="fa fa-facebook"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social1['yt'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social1['yt']; ?>"><i class="fa fa-youtube-play"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social1['tw'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social1['tw']; ?>"><i class="fa fa-twitter"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social1['twitch'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social1['twitch']; ?>"><i class="fa fa-twitch"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social1['ig'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social1['ig']; ?>"><i class="fa fa-instagram"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social1['steam'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social1['steam']; ?>"><i class="fa fa-steam"></i></a>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 lineup-player-info-funfact">
                        <h1>Fun fact</h1>
                        <p><?= $funfact1; ?></p>
                      </div>
                    </div>
                  </div>
                <!-- / Lineup Info Player #2 -->
                <!-- Lineup Player #3 -->
                  <div class="col-xs-12 lineup-player-info display-none">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[2]); ?>" alt="<?php print_r($model -> lineupPlayerName[2]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[2]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #3 -->
                <!-- Lineup Player #4 -->
                  <div class="col-xs-12 lineup-player-info display-none">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[3]); ?>" alt="<?php print_r($model -> lineupPlayerName[3]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[3]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #4 -->
                <!-- Lineup Player #5 -->
                  <div class="col-xs-12 lineup-player-info display-none">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[4]); ?>" alt="<?php print_r($model -> lineupPlayerName[4]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[4]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #5 -->
              </div>
