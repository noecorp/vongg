<?php

  require_once 'backend/models/index.class.php';
  $model = new IndexModel();
  $model -> showMatchesVariables();

?>
<?php if ( isset( $model -> matchesScore[0] ) ) { ?>
                <!-- Match Item #1 -->
                  <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam1[0]); ?>" alt="Team VoN" class="img-circle" />
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?php print_r($model -> matchesScore[0]); ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam2[0]); ?>" alt="Team PCW" class="img-circle" />
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-6 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[0]); ?></h2>
                      </div>
                      <div class="col-xs-6 match-time">
                        <h2><?php print_r($model -> matchesTime[0]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Second Row -->
                    <!-- Third Row -->
                      <div class="col-xs-12 match-type">
                        <h3><?php print_r($model -> matchesType[0]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-map">
                        <h3><?php print_r($model -> matchesMap[0]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-name">
                        <h3><?php print_r($model -> matchesName[0]); ?></h3>
                      </div>
                    <!-- / Third Row -->
                  </div>
                <!-- / Match Item #1 -->
<?php } ?>
<?php if ( isset( $model -> matchesScore[1] ) ) { ?>
                <!-- Match Item #2 -->
                  <div class="col-xs-12 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam1[1]); ?>" alt="Team VoN" class="img-circle" />
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?php print_r($model -> matchesScore[1]); ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam2[1]); ?>" alt="Team PCW" class="img-circle" />
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-6 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[1]); ?></h2>
                      </div>
                      <div class="col-xs-6 match-time">
                        <h2><?php print_r($model -> matchesTime[1]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Second Row -->
                    <!-- Third Row -->
                      <div class="col-xs-12 match-type">
                        <h3><?php print_r($model -> matchesType[1]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-map">
                        <h3><?php print_r($model -> matchesMap[1]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-name">
                        <h3><?php print_r($model -> matchesName[1]); ?></h3>
                      </div>
                    <!-- / Third Row -->
                  </div>
                <!-- / Match Item #2 -->
<?php } ?>
<?php if ( isset( $model -> matchesScore[2] ) ) { ?>
                <!-- Match Item #3 -->
                  <div class="col-xs-12 col-md-offset-1 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam1[2]); ?>" alt="Team VoN" class="img-circle" />
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?php print_r($model -> matchesScore[2]); ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam2[2]); ?>" alt="Team PCW" class="img-circle" />
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-6 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[2]); ?></h2>
                      </div>
                      <div class="col-xs-6 match-time">
                        <h2><?php print_r($model -> matchesTime[2]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Second Row -->
                    <!-- Third Row -->
                      <div class="col-xs-12 match-type">
                        <h3><?php print_r($model -> matchesType[2]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-map">
                        <h3><?php print_r($model -> matchesMap[2]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-name">
                        <h3><?php print_r($model -> matchesName[2]); ?></h3>
                      </div>
                    <!-- / Third Row -->
                  </div>
                <!-- / Match Item #3 -->
<?php } ?>
<?php if ( isset( $model -> matchesScore[3] ) ) { ?>
                <!-- Match Item #4 -->
                  <div class="col-xs-12 col-md-5 match-item">
                    <!-- First Row -->
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam1[3]); ?>" alt="Team VoN" class="img-circle" />
                      </div>
                      <div class="col-xs-4 match-score">
                        <h1><?php print_r($model -> matchesScore[3]); ?></h1>
                      </div>
                      <div class="col-xs-4 match-avatar">
                        <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> matchesTeam2[3]); ?>" alt="Team PCW" class="img-circle" />
                      </div>
                    <!-- / First Row -->
                    <!-- Second Row -->
                      <div class="col-xs-6 match-date">
                        <h2><i class="fa fa-calendar-o" style="padding-right: 10px;"></i><?php print_r($model -> matchesDate[3]); ?></h2>
                      </div>
                      <div class="col-xs-6 match-time">
                        <h2><?php print_r($model -> matchesTime[3]); ?><i class="fa fa-clock-o" style="padding-left: 10px;"></i></h2>
                      </div>
                    <!-- / Second Row -->
                    <!-- Third Row -->
                      <div class="col-xs-12 match-type">
                        <h3><?php print_r($model -> matchesType[3]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-map">
                        <h3><?php print_r($model -> matchesMap[3]); ?></h3>
                      </div>
                      <div class="col-xs-6 match-name">
                        <h3><?php print_r($model -> matchesName[3]); ?></h3>
                      </div>
                    <!-- / Third Row -->
                  </div>
                <!-- / Match Item #4 -->
<?php } ?>
