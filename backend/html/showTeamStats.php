<?php

  require_once 'backend/models/teams.class.php';
  $model = new TeamsModel();
  $model -> showTeamStatsVariables($_GET['name']);

  $maps = unserialize($model -> teamsMaps[0]);
  $score = unserialize($model -> matchScore[0]);
  $mapList = ['cache', 'mirage', 'inferno', 'nuke', 'train', 'cobblestone', 'overpass', 'dust2'];

?>

                <div class="col-xs-12 col-md-4 team-left-box">
                  <div class="col-xs-12 team-logo">
                    <img src="http://192.168.0.104/vongg/temp/<?= $model -> teamsLogo[0]; ?>" />
                  </div>
                  <div class="col-xs-12 team-name">
                    <h1><?= $model -> teamsName[0]; ?></h1>
                  </div>
                </div>
                <div class="col-xs-12 col-md-8">
                  <!-- Heading Section -->
                  <div class="col-xs-12 heading-section">
                    <h1>Last match</h1>
                  </div>
                  <!-- / Heading Section -->
                  <div class="col-xs-12 team-last-match-info">
                    <div class="col-xs-12 col-md-2 team-last-match-score">
                      <?php if ( $_GET['name'] == 'team-von' ) { ?>
                        <h1><?= $score['scoreFormat']; ?></h1>
                      <?php } else { ?>
                        <h1><?= $score['scoreFormatEnemy']; ?></h1>
                      <?php }  ?>
                    </div>
                    <div class="col-xs-12 col-md-5 team-last-match-teams">
                      <?php if ( $_GET['name'] == 'team-von' ) { ?>
                        <h1><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchLink[0]; ?>"><?= $model -> matchTeam1[0]; ?> vs <?= $model -> matchTeam2[0]; ?></a></h1>
                      <?php } else { ?>
                        <h1><a href="http://192.168.0.104/vongg/matches/matchstats/<?= $model -> matchLink[0]; ?>"><?= $model -> matchTeam2[0]; ?> vs <?= $model -> matchTeam1[0]; ?></a></h1>
                      <?php }  ?>
                    </div>
                    <div class="col-xs-12 col-md-5 team-last-match-date">
                      <h1><i class="fa fa-calendar-o"></i><?= $model -> matchDate[0]; ?><i class="fa fa-clock-o"></i><?= $model -> matchTime[0]; ?></h1>
                    </div>
                  </div>
                  <!-- Heading Section -->
                  <div class="col-xs-12 heading-section">
                    <h1>Statistics</h1>
                  </div>
                  <!-- / Heading Section -->
                  <div class="col-xs-12 team-statistics-info">
                    <div class="col-xs-12 col-md-5 team-statistics-matches-count">
                      <h2><?= $model -> teamsMatchesCount[0]; ?></h2>
                      <h1>Matches</h1>
                    </div>
                    <div class="col-xs-12 col-md-5 col-md-offset-2 team-statistics-win-rate">
                      <h2><?= $model -> teamsMatchesWinrate[0]; ?>%</h2>
                      <h1>Win rate</h1>
                    </div>
                    <div style="padding-top: 150px;"></div>
                    <div class="col-xs-12 col-md-5 team-statistics-matches-count">
                      <h2><?= $model -> teamsMapsCount[0]; ?></h2>
                      <h1>Maps</h1>
                    </div>
                    <div class="col-xs-12 col-md-5 col-md-offset-2 team-statistics-win-rate">
                      <h2><?= $model -> teamsMapsWinrate[0]; ?>%</h2>
                      <h1>Win rate</h1>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 team-statistics-maps-slider">
                    <?php for ( $i = 0; $i < 8; $i++ ) { ?>
                    <div class="slide">
                      <div class="col-xs-12 team-statistics-map" style="background: url('http://192.168.0.104/vongg/frontend/img/<?= $mapList[$i]; ?>.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                        <div class="col-xs-12 team-statistics-map-box">
                          <div class="col-xs-4 team-statistics-map-name">
                            <h1><?= ucfirst($mapList[$i]); ?></h1>
                          </div>
                          <div class="col-xs-4 team-statistics-map-win-rate">
                            <h1><?= $maps[$mapList[$i]]['winrate']; ?>% Win rate</h1>
                          </div>
                          <div class="col-xs-4 team-statistics-map-matches-count">
                            <h1><?= $maps[$mapList[$i]]['count']; ?> matches</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
