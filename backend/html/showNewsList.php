<?php

  require_once 'backend/models/news.class.php';
  $model = new NewsModel();
  $model -> showNewsListVariables();

?>
                <?php if ( $model -> newsListCount % 2 == 0 ) { ?>
                  <?php $index = 0; ?>
                  <?php $halfCount = $model -> newsListCount / 2; ?>
                  <?php for ( $i = 0; $i < $halfCount; $i++ ) { ?>
                  <div class="col-xs-12 col-md-8 col-md-offset-2 news-section-items">
                    <div class="col-xs-12 col-md-5 news-section-item single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-news-last-article-box">
                        <div class="col-xs-12 single-news-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                    <div class="col-xs-12 col-md-5 col-md-offset-2 news-section-item single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-news-last-article-box">
                        <div class="col-xs-12 single-news-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                  </div>
                  <?php } ?>
                <?php } ?>

                <?php if ( $model -> newsListCount % 2 == 1 ) { ?>
                  <?php $index = 0; ?>
                  <?php $halfCount = ($model -> newsListCount - 1) / 2; ?>
                  <?php for ( $i = 0; $i < $halfCount; $i++ ) { ?>
                  <div class="col-xs-12 col-md-8 col-md-offset-2 news-section-items">
                    <div class="col-xs-12 col-md-5 news-section-item single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-news-last-article-box">
                        <div class="col-xs-12 single-news-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                    <div class="col-xs-12 col-md-5 col-md-offset-2 news-section-item single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-news-last-article-box">
                        <div class="col-xs-12 single-news-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                  </div>
                  <?php } ?>
                  <div class="col-xs-12 col-md-8 col-md-offset-2 news-section-items">
                    <div class="col-xs-12 col-md-12 news-section-item single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-news-last-article-box">
                        <div class="col-xs-12 single-news-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
