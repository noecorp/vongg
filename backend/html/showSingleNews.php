<?php

  require_once 'backend/models/news.class.php';
  $model = new NewsModel();
  $model -> showSingleNewsVariables($_GET['link']);

?>

                <!-- Single News Item -->
                <!-- Single News TOP -->
                  <div class="col-xs-12 col-md-6 col-md-offset-3 single-news-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsImg; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                    <div class="col-xs-12 single-news-box">
                      <div class="col-xs-12 single-news-title">
                        <h1><?= $model -> newsTitle; ?></h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="col-xs-12 single-news-info">
                      <?php if ( $model -> newsPinnedStatus == 1 ) { ?>
                      <div class="col-xs-3 single-news-tags">
                        <i class="fa fa-tags"></i><span><a href="http://192.168.0.104/vongg/tag/<?= $model -> newsTag; ?>"><?= $model -> newsTag; ?></a></span>
                      </div>
                      <div class="col-xs-3 single-news-date">
                        <i class="fa fa-calendar-o"></i><span><?= $model -> newsDate; ?></span>
                      </div>
                      <div class="col-xs-3 single-news-time">
                        <i class="fa fa-clock-o"></i><span><?= $model -> newsTime; ?></span>
                      </div>
                      <div class="col-xs-3 single-news-pinned">
                        <i class="fa fa-thumb-tack"></i><span>Pinned</span>
                      </div>
                    <?php } else { ?>
                      <div class="col-xs-4 single-news-tags">
                        <i class="fa fa-tags"></i><span><a href="http://192.168.0.104/vongg/tag/<?= $model -> newsTag; ?>"><?= $model -> newsTag; ?></a></span>
                      </div>
                      <div class="col-xs-4 single-news-date">
                        <i class="fa fa-calendar-o"></i><span><?= $model -> newsDate; ?></span>
                      </div>
                      <div class="col-xs-4 single-news-time">
                        <i class="fa fa-clock-o"></i><span><?= $model -> newsTime; ?></span>
                      </div>
                    <?php } ?>
                    </div>
                  </div>
                <!-- / Single News TOP -->
                <!-- Single News Content -->
                  <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="single-news-content">
                      <p><?= $model -> newsContent; ?></p>
                    </div>
                  </div>
                <!-- / Single News Content -->
                <!-- Single News Footer -->
                  <div class="col-xs-12 col-md-6 col-md-offset-3" style="padding-bottom: 100px;">
                    <div class="single-news-footer">
                      <div class="col-xs-12 col-md-12 single-news-author">
                        <div class="col-xs-6 single-news-avatar">
                          <img src="http://192.168.0.104/vongg/temp/mateuszv1mpardomurad.png" alt="Mateusz Domurad" class="img-circle" />
                        </div>
                        <div class="col-xs-6 single-news-info">
                          <div class="col-xs-12 single-news-name">
                            <h1>Mateusz Domurad</h1>
                          </div>
                          <div class="col-xs-12 single-news-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                          <div class="col-xs-12 single-news-social">
                            <div class="col-xs-2 col-xs-offset-3 single-news-social-item">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="col-xs-2 single-news-social-item">
                              <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            <div class="col-xs-2 single-news-social-item">
                              <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- / Single News Footer -->
