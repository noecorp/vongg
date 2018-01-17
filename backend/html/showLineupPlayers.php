<?php

  require_once 'backend/models/lineup.class.php';
  $model = new LineupModel();
  $model -> showLineupPlayersVariables();

?>

              <div class="col-xs-12">
                <!-- Lineup Player #1 -->
                  <div class="col-xs-12 col-md-2 col-md-offset-1 lineup-player lineup-avatar-player-active" id="lineup-avatar-player1">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[0]); ?>" alt="<?php print_r($model -> lineupPlayerName[0]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[0]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #1 -->
                <!-- Lineup Player #2 -->
                  <div class="col-xs-12 col-md-2 lineup-player" id="lineup-avatar-player2">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[1]); ?>" alt="<?php print_r($model -> lineupPlayerName[1]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[1]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #2 -->
                <!-- Lineup Player #3 -->
                  <div class="col-xs-12 col-md-2 lineup-player" id="lineup-avatar-player3">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[2]); ?>" alt="<?php print_r($model -> lineupPlayerName[2]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[2]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #3 -->
                <!-- Lineup Player #4 -->
                  <div class="col-xs-12 col-md-2 lineup-player" id="lineup-avatar-player4">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[3]); ?>" alt="<?php print_r($model -> lineupPlayerName[3]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[3]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #4 -->
                <!-- Lineup Player #5 -->
                  <div class="col-xs-12 col-md-2 lineup-player" id="lineup-avatar-player5">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupPlayerAvatar[4]); ?>" alt="<?php print_r($model -> lineupPlayerName[4]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupPlayerName[4]); ?></h1>
                    </div>
                  </div>
                <!-- / Lineup Player #5 -->
              </div>
