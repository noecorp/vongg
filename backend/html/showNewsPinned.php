<?php

  require_once 'backend/models/index.class.php';
  $model = new IndexModel();
  $model -> showNewsPinnedVariables();

?>

                <!-- Newest or Pinned News -->
                  <div class="col-xs-12 col-md-offset-1 col-md-5 news-item news-big" style="background: url('http://192.168.0.104/vongg/temp/<?= $model -> newsImgPinned; ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                    <div class="col-xs-12 news-info-big">
                      <div class="col-xs-12 news-title">
                        <h1><a href="http://192.168.0.104/vongg/news/<?= $model -> newsLinkPinned; ?>"><?= $model -> newsTitlePinned; ?></a></h1>
                      </div>
                      <div class="col-xs-3 news-tags">
                        <i class="fa fa-tags"></i><span><a href="http://192.168.0.104/vongg/tag/<?= $model -> newsTagPinned; ?>"><?= $model -> newsTagPinned; ?></a></span>
                      </div>
                      <div class="col-xs-3 news-date">
                        <i class="fa fa-calendar-o"></i><span><?= $model -> newsDatePinned; ?></span>
                      </div>
                      <div class="col-xs-3 news-time">
                        <i class="fa fa-clock-o"></i><span><?= $model -> newsTimePinned; ?></span>
                      </div>
                      <div class="col-xs-3 news-pinned">
                        <i class="fa fa-thumb-tack"></i><span>Pinned</span>
                      </div>
                    </div>
                  </div>
                <!-- / Newest or Pinned News -->
