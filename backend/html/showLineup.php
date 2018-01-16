<?php

  require_once 'backend/models/index.class.php';
  $model = new IndexModel();
  $model -> showLineupVariables();

?>

                <!-- Lineup Player #1 -->
                  <div class="col-xs-12 col-md-2 col-md-offset-1 lineup-player">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupAvatar[0]); ?>" alt="<?php print_r($model -> lineupFullname[0]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupFullname[0]); ?></h1>
                    </div>
                    <div class="lineup-role">
                      <h2><?php print_r($model -> lineupRole[0]); ?></h2>
                    </div>
                    <div class="lineup-years">
                      <h3><?php print_r($model -> lineupYears[0]); ?> years old</h3>
                    </div>
                  </div>
                <!-- / Lineup Player #1 -->
                <!-- Lineup Player #2 -->
                  <div class="col-xs-12 col-md-2 lineup-player">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupAvatar[1]); ?>" alt="<?php print_r($model -> lineupFullname[1]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupFullname[1]); ?></h1>
                    </div>
                    <div class="lineup-role">
                      <h2><?php print_r($model -> lineupRole[1]); ?></h2>
                    </div>
                    <div class="lineup-years">
                      <h3><?php print_r($model -> lineupYears[1]); ?> years old</h3>
                    </div>
                  </div>
                <!-- / Lineup Player #2 -->
                <!-- Lineup Player #3 -->
                  <div class="col-xs-12 col-md-2 lineup-player">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupAvatar[2]); ?>" alt="<?php print_r($model -> lineupFullname[2]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupFullname[2]); ?></h1>
                    </div>
                    <div class="lineup-role">
                      <h2><?php print_r($model -> lineupRole[2]); ?></h2>
                    </div>
                    <div class="lineup-years">
                      <h3><?php print_r($model -> lineupYears[2]); ?> years old</h3>
                    </div>
                  </div>
                <!-- / Lineup Player #3 -->
                <!-- Lineup Player #4 -->
                  <div class="col-xs-12 col-md-2 lineup-player">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupAvatar[3]); ?>" alt="<?php print_r($model -> lineupFullname[3]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupFullname[3]); ?></h1>
                    </div>
                    <div class="lineup-role">
                      <h2><?php print_r($model -> lineupRole[3]); ?></h2>
                    </div>
                    <div class="lineup-years">
                      <h3><?php print_r($model -> lineupYears[3]); ?> years old</h3>
                    </div>
                  </div>
                <!-- / Lineup Player #4 -->
                <!-- Lineup Player #5 -->
                  <div class="col-xs-12 col-md-2 lineup-player">
                    <div class="lineup-avatar">
                      <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> lineupAvatar[4]); ?>" alt="<?php print_r($model -> lineupFullname[4]); ?> Avatar" class="img-circle" />
                    </div>
                    <div class="lineup-name">
                      <h1><?php print_r($model -> lineupFullname[4]); ?></h1>
                    </div>
                    <div class="lineup-role">
                      <h2><?php print_r($model -> lineupRole[4]); ?></h2>
                    </div>
                    <div class="lineup-years">
                      <h3><?php print_r($model -> lineupYears[4]); ?> years old</h3>
                    </div>
                  </div>
                <!-- / Lineup Player #5 -->
