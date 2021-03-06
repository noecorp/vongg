<?php

  require_once 'backend/models/index.class.php';
  $model = new IndexModel();
  $model -> showMatchesVariables();
  if ( isset ( $model -> matchesScore[0] ) ) {
    $score0 = unserialize($model -> matchesScore[0]);
    $map0 = unserialize($model -> matchesMaps[0]);
    $team0 = unserialize($model -> matchesTeams[0]);
  }

  if ( isset ( $model -> matchesScore[1] ) ) {
    $score1 = unserialize($model -> matchesScore[1]);
    $map1 = unserialize($model -> matchesMaps[1]);
    $team1 = unserialize($model -> matchesTeams[1]);
  }

  if ( isset ( $model -> matchesScore[2] ) ) {
    $score2 = unserialize($model -> matchesScore[2]);
    $map2 = unserialize($model -> matchesMaps[2]);
    $team2 = unserialize($model -> matchesTeams[2]);
  }

  if ( isset ( $model -> matchesScore[3] ) ) {
    $score3 = unserialize($model -> matchesScore[3]);
    $map3 = unserialize($model -> matchesMaps[3]);
    $team3 = unserialize($model -> matchesTeams[3]);
  }

?>
<?php if ( isset( $model -> matchesScore[0] ) ) { ?>
                <!-- Match Item #1 -->
                  <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[0]); ?>" alt="<?= $model -> matchesTeam1[0]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team0['teamLink1'] ?>"><?= $model -> matchesTeam1[0]; ?></a></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score0['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[0]); ?>" alt="<?= $model -> matchesTeam2[0]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team0['teamLink2'] ?>"><?= $model -> matchesTeam2[0]; ?></a></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[0]; ?>"><?php print_r($model -> matchesName[0]); ?></a></h3>
                      </div>
                    <!-- / Second Row -->
                    <!-- Fourth Row -->
                      <div class="col-xs-3 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[0]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[0]); ?>"><?php print_r($model -> matchesType[0]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[0]); ?>"><?php print_r($model -> matchesFormat[0]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-time">
                        <h2><?php print_r($model -> matchesTime[0]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Fourth Row -->
                  </div>
                <!-- / Match Item #1 -->
<?php } ?>
<?php if ( isset( $model -> matchesScore[1] ) ) { ?>
                <!-- Match Item #2 -->
                  <div class="col-xs-12 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[1]); ?>" alt="<?= $model -> matchesTeam1[1]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team1['teamLink1'] ?>"><?= $model -> matchesTeam1[1]; ?></a></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score1['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[1]); ?>" alt="<?= $model -> matchesTeam2[1]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team1['teamLink2'] ?>"><?= $model -> matchesTeam2[1]; ?></a></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[1]; ?>"><?php print_r($model -> matchesName[1]); ?></a></h3>
                      </div>
                    <!-- / Second Row -->
                    <!-- Fourth Row -->
                      <div class="col-xs-3 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[1]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[1]); ?>"><?php print_r($model -> matchesType[1]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[1]); ?>"><?php print_r($model -> matchesFormat[1]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-time">
                        <h2><?php print_r($model -> matchesTime[1]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Fourth Row -->
                  </div>
                <!-- / Match Item #2 -->
<?php } ?>
<?php if ( isset( $model -> matchesScore[2] ) ) { ?>
                <!-- Match Item #3 -->
                  <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[2]); ?>" alt="<?= $model -> matchesTeam1[2]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team2['teamLink1'] ?>"><?= $model -> matchesTeam1[2]; ?></a></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score2['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[2]); ?>" alt="<?= $model -> matchesTeam2[2]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team2['teamLink2'] ?>"><?= $model -> matchesTeam2[2]; ?></a></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[2]; ?>"><?php print_r($model -> matchesName[2]); ?></a></h3>
                      </div>
                    <!-- / Second Row -->
                    <!-- Fourth Row -->
                      <div class="col-xs-3 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[2]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[2]); ?>"><?php print_r($model -> matchesType[2]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[2]); ?>"><?php print_r($model -> matchesFormat[2]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-time">
                        <h2><?php print_r($model -> matchesTime[2]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Fourth Row -->
                  </div>
                <!-- / Match Item #3 -->
<?php } ?>
<?php if ( isset( $model -> matchesScore[3] ) ) { ?>
                <!-- Match Item #4 -->
                  <div class="col-xs-12 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[3]); ?>" alt="<?= $model -> matchesTeam1[3]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team3['teamLink1'] ?>"><?= $model -> matchesTeam1[3]; ?></a></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score3['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[3]); ?>" alt="<?= $model -> matchesTeam2[3]; ?>" class="img-circle" />
                        <h1><a href="http://192.168.0.104/vongg/matches/teamstats/<?= $team3['teamLink2'] ?>"><?= $model -> matchesTeam2[3]; ?></a></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchesLink[3]; ?>"><?php print_r($model -> matchesName[3]); ?></a></h3>
                      </div>
                    <!-- / Second Row -->
                    <!-- Fourth Row -->
                      <div class="col-xs-3 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[3]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><a href="http://192.168.0.104/vongg/matches/type/<?= strtolower($model -> matchesType[3]); ?>"><?php print_r($model -> matchesType[3]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><a href="http://192.168.0.104/vongg/matches/format/<?= strtolower($model -> matchesFormat[3]); ?>"><?php print_r($model -> matchesFormat[3]); ?></a></h3>
                      </div>
                      <div class="col-xs-3 match-time">
                        <h2><?php print_r($model -> matchesTime[3]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Fourth Row -->
                  </div>
                <!-- / Match Item #4 -->
<?php } ?>
