<?php

  require_once 'backend/models/partners.class.php';
  $model = new PartnersModel();
  $model -> showPartnersVariables();

  $index = 0;

?>
            <?php if ( $model -> partnersCount != 0 ) { ?>
              <div class="col-xs-12 col-md-8 col-md-offset-2 partner-items">
              <?php if ( $model -> partnersCount % 2 == 0 ) { ?>
                <?php for ( $i = 0; $i < $model -> partnersCount / 2; $i++ ) { ?>
                    <div class="col-xs-12 partner-item">
                      <div class="col-xs-12 partner-partner-left">
                        <h1><?= $model -> partnerPartner[$index]; ?></h1>
                      </div>
                      <div class="col-xs-12 col-md-4 partner-logo">
                        <img src="http://192.168.0.104/vongg/temp/<?= $model -> partnerLogo[$index]; ?>" class="img-responsive" />
                      </div>
                      <div class="col-xs-12 col-md-8 partner-description">
                        <p><?= $model -> partnerDescription[$index]; ?></p>
                        <div class="partner-link-right">
                          <a href="<?= $model -> partnerLink[$index]; ?>">Visit website</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 partner-item">
                      <?php $index++; ?>
                      <div class="col-xs-12 partner-partner-right">
                        <h1><?= $model -> partnerPartner[$index]; ?></h1>
                      </div>
                      <div class="col-xs-12 col-md-8 partner-description">
                        <p><?= $model -> partnerDescription[$index]; ?></p>
                        <div class="partner-link-left">
                          <a href="<?= $model -> partnerLink[$index]; ?>">Visit website</a>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-4 partner-logo">
                        <img src="http://192.168.0.104/vongg/temp/<?= $model -> partnerLogo[$index]; ?>" class="img-responsive" />
                      </div>
                    </div>
                    <?php $index++; ?>
                <?php } ?>
              <?php } else { ?>
                <?php for ( $i = 0; $i < ($model -> partnersCount - 1) / 2; $i++ ) { ?>
                    <div class="col-xs-12 partner-item">
                      <div class="col-xs-12 partner-partner-left">
                        <h1><?= $model -> partnerPartner[$index]; ?></h1>
                      </div>
                      <div class="col-xs-12 col-md-4 partner-logo">
                        <img src="http://192.168.0.104/vongg/temp/<?= $model -> partnerLogo[$index]; ?>" class="img-responsive" />
                      </div>
                      <div class="col-xs-12 col-md-8 partner-description">
                        <p><?= $model -> partnerDescription[$index]; ?></p>
                        <div class="partner-link-right">
                          <a href="<?= $model -> partnerLink[$index]; ?>">Visit website</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 partner-item">
                      <?php $index++; ?>
                      <div class="col-xs-12 partner-partner-right">
                        <h1><?= $model -> partnerPartner[$index]; ?></h1>
                      </div>
                      <div class="col-xs-12 col-md-8 partner-description">
                        <p><?= $model -> partnerDescription[$index]; ?></p>
                        <div class="partner-link-left">
                          <a href="<?= $model -> partnerLink[$index]; ?>">Visit website</a>
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-4 partner-logo">
                        <img src="http://192.168.0.104/vongg/temp/<?= $model -> partnerLogo[$index]; ?>" class="img-responsive" />
                      </div>
                    </div>
                      <?php $index++; ?>
                <?php } ?>
                <div class="col-xs-12 partner-item">
                  <div class="col-xs-12 partner-partner-left">
                    <h1><?= $model -> partnerPartner[$index]; ?></h1>
                  </div>
                  <div class="col-xs-12 col-md-4 partner-logo">
                    <img src="http://192.168.0.104/vongg/temp/<?= $model -> partnerLogo[$index]; ?>" class="img-responsive" />
                  </div>
                  <div class="col-xs-12 col-md-8 partner-description">
                    <p><?= $model -> partnerDescription[$index]; ?></p>
                    <div class="partner-link-right">
                      <a href="<?= $model -> partnerLink[$index]; ?>">Visit website</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
            <?php } ?>
