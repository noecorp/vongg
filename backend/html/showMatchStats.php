<?php

  require_once 'backend/models/match.class.php';
  $model = new MatchModel();

  $model -> showMatchStatsVariables($_GET['name']);
  $model -> showPartnersVariables();

  $statsTeam1 = unserialize($model -> matchTeamStats1[0]);
  $statsTeam2 = unserialize($model -> matchTeamStats2[0]);
  $maps = unserialize($model -> matchMaps[0]);

?>

                <div class="col-xs-12 matchstats-match-box">
                  <div class="col-xs-4 matchstats-team-box">
                    <img src="http://192.168.0.104/vongg/temp/von.png" class="img-circle" />
                    <h1>Team VoN</h1>
                  </div>
                  <div class="col-xs-4 matchstats-score">
                    <h1>2-1</h1>
                    <h2>15:00</h2>
                    <h2>27.01.2018</h2>
                  </div>
                  <div class="col-xs-4 matchstats-team-box">
                    <img src="http://192.168.0.104/vongg/temp/pcw.png" class="img-circle" />
                    <h1>Team PCW</h1>
                  </div>
                  <div class="col-xs-12 col-md-10 col-md-offset-1 matchstats-maps">
                    <ul class="col-xs-12 matchstats-type list-inline">
                      <li><span id="allmaps">All maps</span></li>
                      <li><span id="map1">Mirage</span></li>
                      <li><span id="map2">Overpass</span></li>
                      <li><span id="map3">Nuke</span></li>
                    </ul>
                    <div class="col-xs-12 col-md-5 col-md-offset-1 matchstats-team">
                      <h1>Team VoN</h1>
                      <table class="col-xs-12 table table-hover allmaps">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map1">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map2">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map3">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map4">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map5">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-xs-12 col-md-5 col-md-offset-1 matchstats-team">
                      <h1>Team PCW</h1>
                      <table class="col-xs-12 table table-hover allmaps">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map1">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map2">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map3">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map4">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <table class="col-xs-12 table table-hover map5">
                        <thead>
                          <tr>
                            <th></th>
                            <th>K/D</th>
                            <th>+/-</th>
                            <th>HLTV Rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ( $i = 0; $i < $statsTeam1['playersCount']; $i++ ) { ?>
                          <tr>
                            <td><?= $statsTeam1['name' . $i]; ?></td>
                            <td><?= $statsTeam1['stats' . $i]; ?></td>
                            <td><?= $statsTeam1['result' . $i]; ?></td>
                            <td><?= $statsTeam1['rating' . $i]; ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 matchstats-maps-results">
                      <div class="col-xs-12 col-md-4 team-statistics-map" style="background: url('http://192.168.0.104/vongg/frontend/img/mirage.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                        <div class="col-xs-12 col-md-12 team-statistics-map-box">
                          <div class="col-xs-6 team-statistics-map-name">
                            <h1>Mirage</h1>
                          </div>
                          <div class="col-xs-6 team-statistics-map-win-rate">
                            <h1>16-5</h1>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-3 col-md-offset-1 team-statistics-map" style="background: url('http://192.168.0.104/vongg/frontend/img/cache.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                        <div class="col-xs-12 col-md-12 team-statistics-map-box">
                          <div class="col-xs-6 team-statistics-map-name">
                            <h1>Cache</h1>
                          </div>
                          <div class="col-xs-6 team-statistics-map-win-rate">
                            <h1>9-16</h1>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-3 col-md-offset-1 team-statistics-map" style="background: url('http://192.168.0.104/vongg/frontend/img/nuke.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                        <div class="col-xs-12 col-md-12 team-statistics-map-box">
                          <div class="col-xs-6 team-statistics-map-name">
                            <h1>Nuke</h1>
                          </div>
                          <div class="col-xs-6 team-statistics-map-win-rate">
                            <h1>16-10</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 matchstats-more-info">
                      <div class="col-xs-12 col-md-12 matchstats-lineup">
                        <div class="col-xs-12 matchstats-lineup-team">
                          <h1>Team VoN</h1>
                          <div class="col-md-2 col-md-offset-1 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/pl.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/pl.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/pl.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/pl.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/pl.png" class="flag" />Player</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 matchstats-lineup">
                        <div class="col-xs-12 matchstats-lineup-team">
                          <h1>Team PCW</h1>
                          <div class="col-md-2 col-md-offset-1 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/ru.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/ru.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/ru.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/ru.png" class="flag" />Player</h3>
                          </div>
                          <div class="col-md-2 matchstats-lineup-player">
                            <div class="col-xs-12 matchstats-lineup-player-avatar">
                              <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" width="100px" height="100px" />
                            </div>
                            <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/ru.png" class="flag" />Player</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-4 matchstats-map-veto">
                        <h1>Map veto</h1>
                        <ol class="col-xs-12">
                          <li>
                            Team VoN removed Overpass
                          </li>
                          <li>
                            Team PCW removed Train
                          </li>
                          <li>
                            Team VoN picked Mirage
                          </li>
                          <li>
                            Team PCW picked Cache
                          </li>
                          <li>
                            Team PCW removed Cobblestone
                          </li>
                          <li>
                            Team VoN removed Inferno
                          </li>
                          <li>
                            Nuke was left over
                          </li>
                        </ol>
                      </div>
                      <div class="col-xs-12 col-md-4 matchstats-player-of-match">
                        <h1>Player of the match</h1>
                        <div class="matchstats-player-of-match-avatar">
                          <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" />
                        </div>
                        <h3><img src="http://192.168.0.104/vongg/frontend/img/flags/pl.png" class="flag" />Player</h3>
                        <div class="col-xs-3 matchstats-player-of-match-stat">
                          <p>27-12</p>
                        </div>
                        <div class="col-xs-3 matchstats-player-of-match-stat">
                          <p>+15</p>
                        </div>
                        <div class="col-xs-3 matchstats-player-of-match-stat">
                          <p>145.3</p>
                        </div>
                        <div class="col-xs-3 matchstats-player-of-match-stat">
                          <p>1.752</p>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-4 matchstats-head-to-head">
                        <h1>Head to head</h1>
                        <div class="col-xs-12 col-md-5 col-md-offset-1 matchstats-head-to-head-team">
                          <h1>Team VoN</h1>
                          <ul class="col-xs-12">
                            <li>Nuke <span>16-10</span></li>
                            <li>Cache <span>9-16</span></li>
                            <li>Mirage <span>16-5</span></li>
                          </ul>
                        </div>
                        <div class="col-xs-12 col-md-5 col-md-offset-1 matchstats-head-to-head-team">
                          <h1>Team PCW</h1>
                          <ul class="col-xs-12">
                            <li>Nuke <span>10-16</span></li>
                            <li>Cache <span>16-9</span></li>
                            <li>Mirage <span>5-16</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
