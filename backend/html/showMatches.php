<?php

  require_once 'backend/models/index.class.php';
  $model = new IndexModel();
  $model -> showMatchesVariables();
  if ( isset ( $model -> matchesScore[0] ) ) {
    $score0 = unserialize($model -> matchesScore[0]);
    $map0 = unserialize($model -> matchesMaps[0]);
  }

  if ( isset ( $model -> matchesScore[1] ) ) {
    $score1 = unserialize($model -> matchesScore[1]);
    $map1 = unserialize($model -> matchesMaps[1]);
  }

  if ( isset ( $model -> matchesScore[2] ) ) {
    $score2 = unserialize($model -> matchesScore[2]);
    $map2 = unserialize($model -> matchesMaps[2]);
  }

  if ( isset ( $model -> matchesScore[3] ) ) {
    $score3 = unserialize($model -> matchesScore[3]);
    $map3 = unserialize($model -> matchesMaps[3]);
  }

?>
<?php if ( isset( $model -> matchesScore[0] ) ) { ?>
                <!-- Match Item #1 -->
                  <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[0]); ?>" alt="Team VoN" class="img-circle" />
                        <h1><?= $model -> matchesTeam1[0]; ?></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score0['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[0]); ?>" alt="Team PCW" class="img-circle" />
                        <h1><?= $model -> matchesTeam2[0]; ?></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><?php print_r($model -> matchesName[0]); ?></h3>
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
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[0]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><?php print_r($model -> matchesType[0]); ?></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><?php print_r($model -> matchesFormat[0]); ?></h3>
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
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[1]); ?>" alt="Team VoN" class="img-circle" />
                        <h1><?= $model -> matchesTeam1[1]; ?></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score1['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[1]); ?>" alt="Team PCW" class="img-circle" />
                        <h1><?= $model -> matchesTeam2[1]; ?></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><?php print_r($model -> matchesName[1]); ?></h3>
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
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[1]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><?php print_r($model -> matchesType[1]); ?></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><?php print_r($model -> matchesFormat[1]); ?></h3>
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
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[2]); ?>" alt="Team VoN" class="img-circle" />
                        <h1><?= $model -> matchesTeam1[2]; ?></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score2['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[2]); ?>" alt="Team PCW" class="img-circle" />
                        <h1><?= $model -> matchesTeam2[2]; ?></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><?php print_r($model -> matchesName[2]); ?></h3>
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
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[2]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><?php print_r($model -> matchesType[2]); ?></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><?php print_r($model -> matchesFormat[2]); ?></h3>
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
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar1[3]); ?>" alt="Team VoN" class="img-circle" />
                        <h1><?= $model -> matchesTeam1[3]; ?></h1>
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?= $score3['scoreFormat']; ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar match-team">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeamAvatar2[3]); ?>" alt="Team PCW" class="img-circle" />
                        <h1><?= $model -> matchesTeam2[3]; ?></h1>
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-12 match-name">
                        <h3><?php print_r($model -> matchesName[3]); ?></h3>
                      </div>
                    <!-- / Second Row -->
                    <!-- Third Row -->
                    <?php if ( $map3['mapCount'] == '1' ) { ?>
                      <div class="col-xs-12 match-map">
                        <h3><?= $map3['map1']; ?> (<?= $score3['scoreMap1']; ?>)</h3>
                      </div>
                    <?php } ?>
                    <?php if ( $map3['mapCount'] == '2' ) { ?>
                      <div class="col-xs-6 match-map">
                        <h3><?= $map3['map1']; ?> (<?= $score3['scoreMap1']; ?>)</h3>
                      </div>
                      <div class="col-xs-6 match-map">
                        <h3><?= $map3['map2']; ?> (<?= $score3['scoreMap2']; ?>)</h3>
                      </div>
                    <?php } ?>
                    <?php if ( $map3['mapCount'] == '3' ) { ?>
                      <div class="col-xs-4 match-map">
                        <h3><?= $map3['map1']; ?> (<?= $score3['scoreMap1']; ?>)</h3>
                      </div>
                      <div class="col-xs-4 match-map">
                        <h3><?= $map3['map2']; ?> (<?= $score3['scoreMap2']; ?>)</h3>
                      </div>
                      <div class="col-xs-4 match-map">
                        <h3><?= $map3['map3']; ?> (<?= $score3['scoreMap3']; ?>)</h3>
                      </div>
                    <?php } ?>
                    <?php if ( $map3['mapCount'] == '4' ) { ?>
                      <div class="col-xs-3 match-map">
                        <h3><?= $map3['map1']; ?> (<?= $score3['scoreMap1']; ?>)</h3>
                      </div>
                      <div class="col-xs-3 match-map">
                        <h3><?= $map3['map2']; ?> (<?= $score3['scoreMap2']; ?>)</h3>
                      </div>
                      <div class="col-xs-3 match-map">
                        <h3><?= $map3['map3']; ?> (<?= $score3['scoreMap3']; ?>)</h3>
                      </div>
                      <div class="col-xs-3 match-map">
                        <h3><?= $map3['map4']; ?> (<?= $score3['scoreMap4']; ?>)</h3>
                      </div>
                    <?php } ?>
                    <?php if ( $map0['mapCount'] == '5' ) { ?>
                      <div class="col-xs-2 col-xs-offset-2 match-map">
                        <h3><?= $map3['map1']; ?> (<?= $score3['scoreMap1']; ?>)</h3>
                      </div>
                      <div class="col-xs-2 match-map">
                        <h3><?= $map3['map2']; ?> (<?= $score3['scoreMap2']; ?>)</h3>
                      </div>
                      <div class="col-xs-2 match-map">
                        <h3><?= $map3['map3']; ?> (<?= $score3['scoreMap3']; ?>)</h3>
                      </div>
                      <div class="col-xs-2 match-map">
                        <h3><?= $map3['map4']; ?> (<?= $score3['scoreMap4']; ?>)</h3>
                      </div>
                      <div class="col-xs-2 match-map">
                        <h3><?= $map3['map5']; ?> (<?= $score3['scoreMap5']; ?>)</h3>
                      </div>
                    <?php } ?>
                    <!-- / Third Row -->
                    <!-- Fourth Row -->
                      <div class="col-xs-3 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[3]); ?></h2>
                      </div>
                      <div class="col-xs-3 match-type">
                        <h3><?php print_r($model -> matchesType[3]); ?></h3>
                      </div>
                      <div class="col-xs-3 match-format">
                        <h3><?php print_r($model -> matchesFormat[3]); ?></h3>
                      </div>
                      <div class="col-xs-3 match-time">
                        <h2><?php print_r($model -> matchesTime[3]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Fourth Row -->
                  </div>
                <!-- / Match Item #4 -->
<?php } ?>
