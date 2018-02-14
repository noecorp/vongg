<?php

  require_once 'backend/models/settings.class.php';
  $model = new SettingsModel();
  $model -> showIndividualAchievmentsVariables($_GET['user']);
  $achievments = unserialize($model -> userIndividualAchievments);

?>
                <?php for ( $i = 0; $i < $achievments['count']; $i++ ) { ?>
                <tr>
                  <td>
                    <h1 id=""><?= $achievments['achievments'][$i]; ?></h1>
                    <div class="form-group col-xs-10 col-md-4 display-none" id="editAchievmentInput<?= $i; ?>">
                      <input type="text" class="form-control" value="<?= $achievments['achievments'][$i]; ?>" name="editIndividualAchievment<?= $i; ?>">
                    </div>
                  </td>
                  <?php if ( $achievments['places'][$i] == 1 ) { ?>
                  <td>
                    <h3><span class="first-place"><i class="fa fa-trophy"></i><span class="strong-place">1st place</span></span></h3>
                    <div class="form-group col-xs-10 col-md-4 display-none" id="editPlaceInput<?= $i; ?>">
                      <input type="number" class="form-control" name="editIndividualAchievmentPlace" value="<?= $achievments['places'][$i]; ?>" min="1" max="100">
                    </div>
                  </td>
                  <?php } ?>
                  <?php if ( $achievments['places'][$i] == 2 ) { ?>
                  <td>
                    <h3><span class="second-place"><i class="fa fa-trophy"></i><span class="strong-place">2nd place</span></span></h3>
                    <div class="form-group col-xs-10 col-md-4 display-none settings-input-padding" id="editPlaceInput<?= $i; ?>">
                      <input type="number" class="form-control" name="editIndividualAchievmentPlace" value="<?= $achievments['places'][$i]; ?>" min="1" max="100">
                    </div>
                  </td>
                  <?php } ?>
                  <?php if ( $achievments['places'][$i] == 3 ) { ?>
                  <td>
                    <h3><span class="third-place"><i class="fa fa-trophy"></i><span class="strong-place">3td place</span></span></h3>
                    <div class="form-group col-xs-10 col-md-4 display-none" id="editPlaceInput<?= $i; ?>">
                      <input type="number" class="form-control" name="editIndividualAchievmentPlace" value="<?= $achievments['places'][$i]; ?>" min="1" max="100">
                    </div>
                  </td>
                  <?php } ?>
                  <?php if ( $achievments['places'][$i] > 3 ) { ?>
                  <td>
                    <h3><span class="place"><i class="fa fa-trophy"></i><span class="strong-place"><?= $achievments['places'][$i]; ?>th place</span></span></h3>
                    <div class="form-group col-xs-10 col-md-4 display-none" id="editPlaceInput<?= $i; ?>">
                      <input type="number" class="form-control" name="editIndividualAchievmentPlace" value="<?= $achievments['places'][$i]; ?>" min="1" max="100">
                    </div>
                  </td>
                  <?php } ?>
                </tr>
                <?php } ?>
