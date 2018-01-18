<?php

  require_once 'backend/models/matches.class.php';
  $model = new MatchesModel();
  $model -> showAllMatchesVariables();

?>
                <?php if ( $model -> matchesCount % 2 == 0 ) { ?>
                  <?php $index = 0; ?>
                  <?php $halfCount = $model -> matchesCount / 2; ?>
                  <?php for ( $i = 0; $i < $halfCount; $i++ ) { ?>
                  <?php $map0 = unserialize($model -> matchesMaps[$index]); ?>
                  <?php $score0 = unserialize($model -> matchesScore[$index]); ?>
                  <div class="col-xs-12 matches-section-items">
                    <!-- Match Item #1 -->
                      <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                        <!-- First Row -->
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                            <h1><?= $model -> matchesTeam1[$index]; ?></h1>
                          </div>
                          <div class="col-xs-4 match-score">
                            <h1><?= $score0['scoreFormat']; ?></h1>
                          </div>
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                            <h1><?= $model -> matchesTeam2[$index]; ?></h1>
                          </div>
                        <!-- / First Row -->
                        <!-- Second Row -->
                          <div class="col-xs-12 match-name">
                            <h3><?php print_r($model -> matchesName[$index]); ?></h3>
                          </div>
                        <!-- / Second Row -->
                        <!-- Third Row -->
                        <?php if ( $map0['mapCount'] == '1' ) { ?>
                          <div class="col-xs-12 match-map">
                            <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map0['mapCount'] == '2' ) { ?>
                          <div class="col-xs-6 match-map">
                            <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-6 match-map">
                            <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map0['mapCount'] == '3' ) { ?>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map0['map3']; ?> (<?= $score0['scoreMap3']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map0['mapCount'] == '4' ) { ?>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map0['map3']; ?> (<?= $score0['scoreMap3']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map0['map4']; ?> (<?= $score0['scoreMap4']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map0['mapCount'] == '5' ) { ?>
                          <div class="col-xs-2 col-xs-offset-2 match-map">
                            <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map0['map3']; ?> (<?= $score0['scoreMap3']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map0['map4']; ?> (<?= $score0['scoreMap4']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map0['map5']; ?> (<?= $score0['scoreMap5']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <!-- / Third Row -->
                        <!-- Fourth Row -->
                          <div class="col-xs-3 match-date">
                            <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                          </div>
                          <div class="col-xs-3 match-type">
                            <h3><?php print_r($model -> matchesType[$index]); ?></h3>
                          </div>
                          <div class="col-xs-3 match-format">
                            <h3><?php print_r($model -> matchesFormat[$index]); ?></h3>
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
                    <!-- Match Item #1 -->
                      <div class="col-xs-12 col-md-5 match-item">
                        <!-- First Row -->
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                            <h1><?= $model -> matchesTeam1[$index]; ?></h1>
                          </div>
                          <div class="col-xs-4 match-score">
                            <h1><?= $score1['scoreFormat']; ?></h1>
                          </div>
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                            <h1><?= $model -> matchesTeam2[$index]; ?></h1>
                          </div>
                        <!-- / First Row -->
                        <!-- Second Row -->
                          <div class="col-xs-12 match-name">
                            <h3><?php print_r($model -> matchesName[$index]); ?></h3>
                          </div>
                        <!-- / Second Row -->
                        <!-- Third Row -->
                        <?php if ( $map1['mapCount'] == '1' ) { ?>
                          <div class="col-xs-12 match-map">
                            <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map1['mapCount'] == '2' ) { ?>
                          <div class="col-xs-6 match-map">
                            <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-6 match-map">
                            <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map1['mapCount'] == '3' ) { ?>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map1['map3']; ?> (<?= $score1['scoreMap3']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map1['mapCount'] == '4' ) { ?>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map1['map3']; ?> (<?= $score1['scoreMap3']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map1['map4']; ?> (<?= $score1['scoreMap4']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map1['mapCount'] == '5' ) { ?>
                          <div class="col-xs-2 col-xs-offset-2 match-map">
                            <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map1['map3']; ?> (<?= $score1['scoreMap3']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map1['map4']; ?> (<?= $score1['scoreMap4']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map1['map5']; ?> (<?= $score1['scoreMap5']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <!-- / Third Row -->
                        <!-- Fourth Row -->
                          <div class="col-xs-3 match-date">
                            <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                          </div>
                          <div class="col-xs-3 match-type">
                            <h3><?php print_r($model -> matchesType[$index]); ?></h3>
                          </div>
                          <div class="col-xs-3 match-format">
                            <h3><?php print_r($model -> matchesFormat[$index]); ?></h3>
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
                    <div class="col-xs-12 matches-section-items">
                      <!-- Match Item #1 -->
                        <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                          <!-- First Row -->
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                              <h1><?= $model -> matchesTeam1[$index]; ?></h1>
                            </div>
                            <div class="col-xs-4 match-score">
                              <h1><?= $score0['scoreFormat']; ?></h1>
                            </div>
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                              <h1><?= $model -> matchesTeam2[$index]; ?></h1>
                            </div>
                          <!-- / First Row -->
                          <!-- Second Row -->
                            <div class="col-xs-12 match-name">
                              <h3><?php print_r($model -> matchesName[$index]); ?></h3>
                            </div>
                          <!-- / Second Row -->
                          <!-- Third Row -->
                          <?php if ( $map0['mapCount'] == '1' ) { ?>
                            <div class="col-xs-12 match-map">
                              <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map0['mapCount'] == '2' ) { ?>
                            <div class="col-xs-6 match-map">
                              <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-6 match-map">
                              <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map0['mapCount'] == '3' ) { ?>
                            <div class="col-xs-4 match-map">
                              <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-4 match-map">
                              <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                            </div>
                            <div class="col-xs-4 match-map">
                              <h3><?= $map0['map3']; ?> (<?= $score0['scoreMap3']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map0['mapCount'] == '4' ) { ?>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                            </div>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map0['map3']; ?> (<?= $score0['scoreMap3']; ?>)</h3>
                            </div>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map0['map4']; ?> (<?= $score0['scoreMap4']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map0['mapCount'] == '5' ) { ?>
                            <div class="col-xs-2 col-xs-offset-2 match-map">
                              <h3><?= $map0['map1']; ?> (<?= $score0['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map0['map2']; ?> (<?= $score0['scoreMap2']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map0['map3']; ?> (<?= $score0['scoreMap3']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map0['map4']; ?> (<?= $score0['scoreMap4']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map0['map5']; ?> (<?= $score0['scoreMap5']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <!-- / Third Row -->
                          <!-- Fourth Row -->
                            <div class="col-xs-3 match-date">
                              <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                            </div>
                            <div class="col-xs-3 match-type">
                              <h3><?php print_r($model -> matchesType[$index]); ?></h3>
                            </div>
                            <div class="col-xs-3 match-format">
                              <h3><?php print_r($model -> matchesFormat[$index]); ?></h3>
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
                      <!-- Match Item #1 -->
                        <div class="col-xs-12 col-md-5 match-item">
                          <!-- First Row -->
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                              <h1><?= $model -> matchesTeam1[$index]; ?></h1>
                            </div>
                            <div class="col-xs-4 match-score">
                              <h1><?= $score1['scoreFormat']; ?></h1>
                            </div>
                            <div class="col-xs-4 match-avatar match-team">
                              <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                              <h1><?= $model -> matchesTeam2[$index]; ?></h1>
                            </div>
                          <!-- / First Row -->
                          <!-- Second Row -->
                            <div class="col-xs-12 match-name">
                              <h3><?php print_r($model -> matchesName[$index]); ?></h3>
                            </div>
                          <!-- / Second Row -->
                          <!-- Third Row -->
                          <?php if ( $map1['mapCount'] == '1' ) { ?>
                            <div class="col-xs-12 match-map">
                              <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map1['mapCount'] == '2' ) { ?>
                            <div class="col-xs-6 match-map">
                              <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-6 match-map">
                              <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map1['mapCount'] == '3' ) { ?>
                            <div class="col-xs-4 match-map">
                              <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-4 match-map">
                              <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                            </div>
                            <div class="col-xs-4 match-map">
                              <h3><?= $map1['map3']; ?> (<?= $score1['scoreMap3']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map1['mapCount'] == '4' ) { ?>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                            </div>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map1['map3']; ?> (<?= $score1['scoreMap3']; ?>)</h3>
                            </div>
                            <div class="col-xs-3 match-map">
                              <h3><?= $map1['map4']; ?> (<?= $score1['scoreMap4']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <?php if ( $map1['mapCount'] == '5' ) { ?>
                            <div class="col-xs-2 col-xs-offset-2 match-map">
                              <h3><?= $map1['map1']; ?> (<?= $score1['scoreMap1']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map1['map2']; ?> (<?= $score1['scoreMap2']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map1['map3']; ?> (<?= $score1['scoreMap3']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map1['map4']; ?> (<?= $score1['scoreMap4']; ?>)</h3>
                            </div>
                            <div class="col-xs-2 match-map">
                              <h3><?= $map1['map5']; ?> (<?= $score1['scoreMap5']; ?>)</h3>
                            </div>
                          <?php } ?>
                          <!-- / Third Row -->
                          <!-- Fourth Row -->
                            <div class="col-xs-3 match-date">
                              <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                            </div>
                            <div class="col-xs-3 match-type">
                              <h3><?php print_r($model -> matchesType[$index]); ?></h3>
                            </div>
                            <div class="col-xs-3 match-format">
                              <h3><?php print_r($model -> matchesFormat[$index]); ?></h3>
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
                    </div>
                  <?php } ?>
                  <div class="col-xs-12 matches-section-items">
                    <!-- Match Item #1 -->
                      <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                        <!-- First Row -->
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[$index]); ?>" alt="Team VoN" class="img-circle" />
                            <h1><?= $model -> matchesTeam1[$index]; ?></h1>
                          </div>
                          <div class="col-xs-4 match-score">
                            <h1><?= $score2['scoreFormat']; ?></h1>
                          </div>
                          <div class="col-xs-4 match-avatar match-team">
                            <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[$index]); ?>" alt="Team PCW" class="img-circle" />
                            <h1><?= $model -> matchesTeam2[$index]; ?></h1>
                          </div>
                        <!-- / First Row -->
                        <!-- Second Row -->
                          <div class="col-xs-12 match-name">
                            <h3><?php print_r($model -> matchesName[$index]); ?></h3>
                          </div>
                        <!-- / Second Row -->
                        <!-- Third Row -->
                        <?php if ( $map2['mapCount'] == '1' ) { ?>
                          <div class="col-xs-12 match-map">
                            <h3><?= $map2['map1']; ?> (<?= $score2['scoreMap1']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map2['mapCount'] == '2' ) { ?>
                          <div class="col-xs-6 match-map">
                            <h3><?= $map2['map1']; ?> (<?= $score2['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-6 match-map">
                            <h3><?= $map2['map2']; ?> (<?= $score2['scoreMap2']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map2['mapCount'] == '3' ) { ?>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map2['map1']; ?> (<?= $score2['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map2['map2']; ?> (<?= $score2['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-4 match-map">
                            <h3><?= $map2['map3']; ?> (<?= $score2['scoreMap3']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map2['mapCount'] == '4' ) { ?>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map2['map1']; ?> (<?= $score2['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map2['map2']; ?> (<?= $score2['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map2['map3']; ?> (<?= $score2['scoreMap3']; ?>)</h3>
                          </div>
                          <div class="col-xs-3 match-map">
                            <h3><?= $map2['map4']; ?> (<?= $score2['scoreMap4']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <?php if ( $map2['mapCount'] == '5' ) { ?>
                          <div class="col-xs-2 col-xs-offset-2 match-map">
                            <h3><?= $map2['map1']; ?> (<?= $score2['scoreMap1']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map2['map2']; ?> (<?= $score2['scoreMap2']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map2['map3']; ?> (<?= $score2['scoreMap3']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map2['map4']; ?> (<?= $score2['scoreMap4']; ?>)</h3>
                          </div>
                          <div class="col-xs-2 match-map">
                            <h3><?= $map2['map5']; ?> (<?= $score2['scoreMap5']; ?>)</h3>
                          </div>
                        <?php } ?>
                        <!-- / Third Row -->
                        <!-- Fourth Row -->
                          <div class="col-xs-3 match-date">
                            <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[$index]); ?></h2>
                          </div>
                          <div class="col-xs-3 match-type">
                            <h3><?php print_r($model -> matchesType[$index]); ?></h3>
                          </div>
                          <div class="col-xs-3 match-format">
                            <h3><?php print_r($model -> matchesFormat[$index]); ?></h3>
                          </div>
                          <div class="col-xs-3 match-time">
                            <h2><?php print_r($model -> matchesTime[$index]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                          </div>
                        <!-- / Fourth Row -->
                      </div>
                    </div>
                <?php } ?>
