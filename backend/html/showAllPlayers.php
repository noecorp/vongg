<?php

  require_once 'backend/models/lineup.class.php';
  $model = new LineupModel();
  $model -> showAllPlayersVariables();

?>

                <?php $index = 0; ?>
                <?php $row = 0; ?>
                <?php $count = $model -> allPlayersCount - 1; ?>
                <?php for ( $i = 0; $i < $model -> allPlayersCount; $i++ ) { ?>
                <!-- Lineup Player #<?= $index; ?> -->
                  <?php if ( $row == 0 ) { ?>
                  <div class="col-xs-12 col-md-10 col-md-offset-2">
                  <?php } ?>
                  <?php if ( $model -> playersPlayerName[$index] != '?' ) { ?>
                    <a href="http://192.168.0.104/vongg/lineup/player/<?= strtolower($model -> playersPlayerName[$index]); ?>">
                  <?php } ?>
                      <div class="col-xs-12 col-md-2 lineup-player">
                        <div class="lineup-avatar">
                          <img src="http://192.168.0.104/vongg/temp/<?php print_r($model -> playersPlayerAvatar[$index]); ?>" alt="<?php print_r($model -> playersPlayerName[$index]); ?> Avatar" class="img-circle" />
                        </div>
                        <div class="lineup-name">
                          <h1><?php print_r($model -> playersPlayerName[$index]); ?></h1>
                        </div>
                      </div>
                  <?php if ( $model -> playersPlayerName[$index] != '?' ) { ?>
                    </a>
                  <?php } ?>
                  <?php if ( $row == 4 || $count == $row ) { $row = 0; ?>
                  </div>
                <?php } else { $row++; } ?>
                <!-- / Lineup Player #<?= $index; ?> -->
                <?php $index++; ?>
                <?php } ?>
              </div>
