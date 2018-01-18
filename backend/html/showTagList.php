<?php

  require_once 'backend/models/tag.class.php';
  $model = new TagModel();
  $model -> showTagNewsListVariables($_GET['tag']);

?>
                <?php if ( $model -> newsListCount % 2 == 0 ) { ?>
                  <?php $index = 0; ?>
                  <?php $halfCount = $model -> newsListCount / 2; ?>
                  <?php for ( $i = 0; $i < $halfCount; $i++ ) { ?>
                  <div class="col-xs-12 col-md-8 col-md-offset-2 tags-section-items">
                    <div class="col-xs-12 col-md-5 tags-section-item single-tags-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-tags-last-article-box">
                        <div class="col-xs-12 single-tags-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                        <div class="col-xs-6 news-tag-list-date">
                          <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsListDate[$index]); ?></span>
                        </div>
                        <div class="col-xs-6 news-tag-list-time">
                          <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsListTime[$index]); ?></span>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                    <div class="col-xs-12 col-md-5 col-md-offset-2 tags-section-item single-tags-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-tags-last-article-box">
                        <div class="col-xs-12 single-tags-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                        <div class="col-xs-6 news-tag-list-date">
                          <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsListDate[$index]); ?></span>
                        </div>
                        <div class="col-xs-6 news-tag-list-time">
                          <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsListTime[$index]); ?></span>
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
                  <div class="col-xs-12 col-md-8 col-md-offset-2 tags-section-items">
                    <div class="col-xs-12 col-md-5 tags-section-item single-tags-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-tags-last-article-box">
                        <div class="col-xs-12 single-tags-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                        <div class="col-xs-6 news-tag-list-date">
                          <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsListDate[$index]); ?></span>
                        </div>
                        <div class="col-xs-6 news-tag-list-time">
                          <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsListTime[$index]); ?></span>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                    <div class="col-xs-12 col-md-5 col-md-offset-2 tags-section-item single-tags-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-tags-last-article-box">
                        <div class="col-xs-12 single-tags-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                        <div class="col-xs-6 news-tag-list-date">
                          <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsListDate[$index]); ?></span>
                        </div>
                        <div class="col-xs-6 news-tag-list-time">
                          <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsListTime[$index]); ?></span>
                        </div>
                      </div>
                    </div>
                    <?php $index++; ?>
                  </div>
                  <?php } ?>
                  <div class="col-xs-12 col-md-8 col-md-offset-2 tags-section-items" style="margin-top: 60px">
                    <div class="col-xs-12 col-md-12 tags-section-item single-tags-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsListImg[$index]; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                      <div class="col-xs-12 single-tags-last-article-box">
                        <div class="col-xs-12 single-tags-latest-title">
                          <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsListLink[$index]; ?>"><?= $model -> newsListTitle[$index]; ?></a></h1>
                        </div>
                        <div class="col-xs-6 news-tag-list-date">
                          <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsListDate[$index]); ?></span>
                        </div>
                        <div class="col-xs-6 news-tag-list-time">
                          <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsListTime[$index]); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
