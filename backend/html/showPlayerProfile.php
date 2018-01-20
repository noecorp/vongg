<?php

  require_once 'backend/models/lineup.class.php';
  $model = new LineupModel();
  $model -> showPlayerProfileVariables($_GET['name']);

  $info = unserialize($model -> lineupPlayerInfoInfo);
  $achievmentsTeam = unserialize($model -> lineupPlayerInfoAchievmentsTeam);
  $achievmentsIndividual = unserialize($model -> lineupPlayerInfoAchievmentsIndividual);
  $settings = unserialize($model -> lineupPlayerInfoSettings);
  $social = unserialize($model -> lineupPlayerInfoSocials);
  $funfact = $model -> lineupPlayerInfoFunFact;


?>

              <div class="col-xs-12 col-md-10 col-md-offset-1">
                <!-- Lineup Info Player #1 -->
                  <div class="col-xs-12 lineup-player-info" id="lineup-player-info1">
                    <div class="col-xs-12 lineup-player-info-slogan">
                      <h1><?= $model -> lineupPlayerInfoSlogan; ?></h1>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <div class="lineup-player-info-short-info">
                        <h1>Short info</h1>
                        <p><?= $info['info']; ?></p>
                        <h3>Role<span><?= $info['role']; ?></span></h3>
                        <h3>Age<span><?= $info['years']; ?></span></h3>
                        <h3>From<span><?= $info['from']; ?></span></h3>
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <div class="lineup-player-info-achievments">
                          <h1>Achievments with team</h1>
                          <?php for ( $i = 1; $i <= $achievmentsTeam['count']; $i++ ) { ?>
                            <?php if ( $achievmentsTeam['achievmentPlace' . $i] ==  1 ) { ?>
                              <h3><span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place on</span> <?= $achievmentsTeam['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                            <?php if ( $achievmentsTeam['achievmentPlace' . $i] ==  2 ) { ?>
                              <h3><span class="second-place"><i class="fa fa-trophy"></i><span class="strong-place">2nd place on</span> <?= $achievmentsTeam['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                            <?php if ( $achievmentsTeam['achievmentPlace' . $i] ==  3 ) { ?>
                              <h3><span class="third-place"><i class="fa fa-trophy"></i><span class="strong-place">3rd place on</span> <?= $achievmentsTeam['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                            <?php if ( $achievmentsTeam['achievmentPlace' . $i] > 3 ) { ?>
                              <h3><span class="place"><i class="fa fa-trophy"></i><span class="strong-place"><?= $achievmentsTeam['achievmentPlace' . $i]; ?>th place on</span> <?= $achievmentsTeam['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <div class="lineup-player-info-achievments">
                          <h1>Achievments Individual</h1>
                          <?php for ( $i = 1; $i <= $achievmentsIndividual['count']; $i++ ) { ?>
                            <?php if ( $achievmentsIndividual['achievmentPlace' . $i] ==  1 ) { ?>
                              <h3><span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place on</span> <?= $achievmentsIndividual['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                            <?php if ( $achievmentsIndividual['achievmentPlace' . $i] ==  2 ) { ?>
                              <h3><span class="second-place"><i class="fa fa-trophy"></i><span class="strong-place">2nd place on</span> <?= $achievmentsIndividual['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                            <?php if ( $achievmentsIndividual['achievmentPlace' . $i] ==  3 ) { ?>
                              <h3><span class="third-place"><i class="fa fa-trophy"></i><span class="strong-place">3rd place on</span> <?= $achievmentsIndividual['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                            <?php if ( $achievmentsIndividual['achievmentPlace' . $i] > 3 ) { ?>
                              <h3><span class="place"><i class="fa fa-trophy"></i><span class="strong-place"><?= $achievmentsIndividual['achievmentPlace' . $i]; ?>th place on</span> <?= $achievmentsIndividual['achievmentContent' . $i]; ?></span></h3>
                            <?php } ?>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="lineup-player-info-game-settings">
                        <h1>In-game settings</h1>
                        <h3>Launch options<span><?= $settings['launch']; ?></span></h3>
                        <h3>Resolution<span><?= $settings['resolution']; ?></span></h3>
                        <h3>Sensitivity<span><?= $settings['sens']; ?></span></h3>
                        <h3>Crosshair<span><a href="<?= $settings['crosshair']; ?>">download</a></span></h3>
                        <h3>Config<span><a href="<?= $settings['exec']; ?>">download</a></span></h3>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                      <div class="col-xs-12 lineup-player-info-socials">
                        <h1>Follow him here</h1>
                        <div class="col-xs-8 col-xs-offset-2 lineup-player-info-avatar">
                          <img src="http://192.168.0.104/vongg/temp/<?= $model -> lineupPlayerInfoAvatar; ?>" />
                        </div>
                        <div class="col-xs-6 col-xs-offset-3 single-news-social">
                          <?php if ( $social['fb'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social['fb']; ?>"><i class="fa fa-facebook"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social['yt'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social['yt']; ?>"><i class="fa fa-youtube-play"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social['tw'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social['tw']; ?>"><i class="fa fa-twitter"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social['twitch'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social['twitch']; ?>"><i class="fa fa-twitch"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social['ig'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social['ig']; ?>"><i class="fa fa-instagram"></i></a>
                          </div>
                          <?php } ?>
                          <?php if ( $social['steam'] == true ) { ?>
                          <div class="col-xs-2 single-news-social-item">
                            <a href="<?= $social['steam']; ?>"><i class="fa fa-steam"></i></a>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-xs-12 lineup-player-info-funfact">
                        <h1>Fun fact</h1>
                        <p><?= $funfact; ?></p>
                      </div>
                    </div>
                  </div>
                <!-- / Lineup Info Player #1 -->
              </div>
