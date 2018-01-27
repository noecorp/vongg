<?php

  require_once 'backend/models/matches.class.php';
  $model = new MatchesModel();
  $model -> showAllMatchesVariables($_GET['type'], $_GET['content']);

?>
                <?php if ( $model -> matchesCount % 2 == 0 ) { ?>
                  <?php $index = 0; ?>
                  <?php $halfCount = $model -> matchesCount / 2; ?>
                  <?php for ( $i = 0; $i < $halfCount; $i++ ) { ?>
                  <?php $map0 = unserialize($model -> matchesMaps[$index]); ?>
                  <?php $score0 = unserialize($model -> matchesScore[$index]); ?>
                  <?php $team0 = unserialize($model -> matchesTeams[$index]); ?>
                  <div class="col-xs-12 matches-section-items">
                    <!-- Match Item #1 -->
                      <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                        <!-- First Row -->
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                            <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team0['teamLink1'] ?>"><?= $model -> matchesTeam1[$index]; ?></a></h1>
                          </div>
                          <div class="col-xs-4 match-score">
                            <h1><?= $score0['scoreFormat']; ?></h1>
                          </div>
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                            <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team0['teamLink2'] ?>"><?= $model -> matchesTeam2[$index]; ?></a></h1>
                          </div>
                        <!-- / First Row -->
                        <!-- Second Row -->
                          <div class="col-xs-12 match-name">
                            <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[$index]; ?>"><?php print_r($model -> matchesName[$index]); ?></a></h3>
                          </div>
                        <!-- / Second Row -->
                        <!-- Fourth Row -->
                          <div class="col-xs-3 match-date">
                            <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                          </div>
                          <div class="col-xs-3 match-type">
                            <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[$index]); ?>"><?php print_r($model -> matchesType[$index]); ?></a></h3>
                          </div>
                          <div class="col-xs-3 match-format">
                            <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[$index]); ?>"><?php print_r($model -> matchesFormat[$index]); ?></a></h3>
                          </div>
                          <div class="col-xs-3 match-time">
                            <h2><?php print_r($model -> matchesTime[$index]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                          </div>
                        <!-- / Fourth Row -->
                      </div>
                    <!-- / Match Item #1 -->
                    <?php $index++; ?>
                    <?php $map1 = unserialize($model -> matchesMaps[$index]); ?>
                    <?php $score1 = unserialize($model -> matchesScore[$index]); ?>
                    <?php $team1 = unserialize($model -> matchesTeams[$index]); ?>
                    <!-- Match Item #1 -->
                      <div class="col-xs-12 col-md-5 match-item">
                        <!-- First Row -->
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                            <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team1['teamLink1'] ?>"><?= $model -> matchesTeam1[$index]; ?></a></h1>
                          </div>
                          <div class="col-xs-4 match-score">
                            <h1><?= $score1['scoreFormat']; ?></h1>
                          </div>
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                            <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team1['teamLink2'] ?>"><?= $model -> matchesTeam2[$index]; ?></a></h1>
                          </div>
                        <!-- / First Row -->
                        <!-- Second Row -->
                          <div class="col-xs-12 match-name">
                            <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[$index]; ?>"><?php print_r($model -> matchesName[$index]); ?></a></h3>
                          </div>
                        <!-- / Second Row -->
                        <!-- Fourth Row -->
                          <div class="col-xs-3 match-date">
                            <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                          </div>
                          <div class="col-xs-3 match-type">
                            <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[$index]); ?>"><?php print_r($model -> matchesType[$index]); ?></a></h3>
                          </div>
                          <div class="col-xs-3 match-format">
                            <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[$index]); ?>"><?php print_r($model -> matchesFormat[$index]); ?></a></h3>
                          </div>
                          <div class="col-xs-3 match-time">
                            <h2><?php print_r($model -> matchesTime[$index]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                          </div>
                        <!-- / Fourth Row -->
                      </div>
                    <!-- / Match Item #1 -->
                    <?php $index++; ?>
                  </div>
                  <?php } ?>
                <?php } ?>

                <?php if ( $model -> matchesCount % 2 == 1 ) { ?>
                  <?php $index = 0; ?>
                  <?php $halfCount = ($model -> matchesCount - 1) / 2; ?>
                  <?php for ( $i = 0; $i < $halfCount; $i++ ) { ?>
                    <?php $map0 = unserialize($model -> matchesMaps[$index]); ?>
                    <?php $score0 = unserialize($model -> matchesScore[$index]); ?>
                    <?php $team0 = unserialize($model -> matchesTeams[$index]); ?>
                    <div class="col-xs-12 matches-section-items">
                      <!-- Match Item #1 -->
                        <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                          <!-- First Row -->
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                              <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team0['teamLink1'] ?>"><?= $model -> matchesTeam1[$index]; ?></a></h1>
                            </div>
                            <div class="col-xs-4 match-score">
                              <h1><?= $score0['scoreFormat']; ?></h1>
                            </div>
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                              <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team0['teamLink2'] ?>"><?= $model -> matchesTeam2[$index]; ?></a></h1>
                            </div>
                          <!-- / First Row -->
                          <!-- Second Row -->
                            <div class="col-xs-12 match-name">
                              <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[$index]; ?>"><?php print_r($model -> matchesName[$index]); ?></a></h3>
                            </div>
                          <!-- / Second Row -->
                          <!-- Fourth Row -->
                            <div class="col-xs-3 match-date">
                              <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                            </div>
                            <div class="col-xs-3 match-type">
                              <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[$index]); ?>"><?php print_r($model -> matchesType[$index]); ?></a></h3>
                            </div>
                            <div class="col-xs-3 match-format">
                              <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[$index]); ?>"><?php print_r($model -> matchesFormat[$index]); ?></a></h3>
                            </div>
                            <div class="col-xs-3 match-time">
                              <h2><?php print_r($model -> matchesTime[$index]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                            </div>
                          <!-- / Fourth Row -->
                        </div>
                      <!-- / Match Item #1 -->
                      <?php $index++; ?>
                      <?php $map1 = unserialize($model -> matchesMaps[$index]); ?>
                      <?php $score1 = unserialize($model -> matchesScore[$index]); ?>
                      <?php $team1 = unserialize($model -> matchesTeams[$index]); ?>
                      <!-- Match Item #1 -->
                        <div class="col-xs-12 col-md-5 match-item">
                          <!-- First Row -->
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                              <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team1['teamLink1'] ?>"><?= $model -> matchesTeam1[$index]; ?></a></h1>
                            </div>
                            <div class="col-xs-4 match-score">
                              <h1><?= $score1['scoreFormat']; ?></h1>
                            </div>
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                              <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team1['teamLink2'] ?>"><?= $model -> matchesTeam2[$index]; ?></a></h1>
                            </div>
                          <!-- / First Row -->
                          <!-- Second Row -->
                            <div class="col-xs-12 match-name">
                              <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[$index]; ?>"><?php print_r($model -> matchesName[$index]); ?></a></h3>
                            </div>
                          <!-- / Second Row -->
                          <!-- Fourth Row -->
                            <div class="col-xs-3 match-date">
                              <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                            </div>
                            <div class="col-xs-3 match-type">
                              <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[$index]); ?>"><?php print_r($model -> matchesType[$index]); ?></a></h3>
                            </div>
                            <div class="col-xs-3 match-format">
                              <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[$index]); ?>"><?php print_r($model -> matchesFormat[$index]); ?></a></h3>
                            </div>
                            <div class="col-xs-3 match-time">
                              <h2><?php print_r($model -> matchesTime[$index]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                            </div>
                          <!-- / Fourth Row -->
                        </div>
                      <!-- / Match Item #1 -->
                      <?php $index++; ?>
                      <?php $map2 = unserialize($model -> matchesMaps[$index]); ?>
                      <?php $score2 = unserialize($model -> matchesScore[$index]); ?>
                      <?php $team2 = unserialize($model -> matchesTeams[$index]); ?>
                    </div>
                  <?php } ?>
                  <div class="col-xs-12 matches-section-items">
                    <!-- Match Item #1 -->
                      <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                        <!-- First Row -->
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                            <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team2['teamLink1'] ?>"><?= $model -> matchesTeam1[$index]; ?></a></h1>
                          </div>
                          <div class="col-xs-4 match-score">
                            <h1><?= $score2['scoreFormat']; ?></h1>
                          </div>
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                            <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team2['teamLink2'] ?>"><?= $model -> matchesTeam2[$index]; ?></a></h1>
                          </div>
                        <!-- / First Row -->
                        <!-- Second Row -->
                          <div class="col-xs-12 match-name">
                            <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[$index]; ?>"><?php print_r($model -> matchesName[$index]); ?></a></h3>
                          </div>
                        <!-- / Second Row -->
                        <!-- Fourth Row -->
                          <div class="col-xs-3 match-date">
                            <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                          </div>
                          <div class="col-xs-3 match-type">
                            <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[$index]); ?>"><?php print_r($model -> matchesType[$index]); ?></a></h3>
                          </div>
                          <div class="col-xs-3 match-format">
                            <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[$index]); ?>"><?php print_r($model -> matchesFormat[$index]); ?></a></h3>
                          </div>
                          <div class="col-xs-3 match-time">
                            <h2><?php print_r($model -> matchesTime[$index]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                          </div>
                        <!-- / Fourth Row -->
                      </div>
                    </div>
                <?php } ?>
