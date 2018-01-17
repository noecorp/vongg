<?php

  require_once 'backend/models/index.class.php';
  $model = new IndexModel();
  $model -> showNewsVariables();

?>

                <!-- Second News -->
                  <div class="col-xs-12 col-md-offset-1 col-md-4 news-item news-small">
                    <div class="col-xs-12 news-info-small">
                      <div class="col-xs-12 news-title">
                        <h1><a href="http://192.168.0.104/vongg/news/<?php print_r($model -> newsLink[0]); ?>"><?php print_r($model -> newsTitle[0]); ?></a></h1>
                      </div>
                      <div class="col-xs-4 news-tags">
                        <i class="fa fa-tags"></i><span><a href="http://192.168.0.104/vongg/tag/<?php print_r($model -> newsTag[0]); ?>"><?php print_r($model -> newsTag[0]); ?></a></span>
                      </div>
                      <div class="col-xs-4 news-date">
                        <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsDate[0]); ?></span>
                      </div>
                      <div class="col-xs-4 news-time">
                        <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsTime[0]); ?></span>
                      </div>
                    </div>
                  </div>
                <!-- / Second News -->
                <!-- Third News -->
                  <div class="col-xs-12 col-md-offset-1 col-md-4 news-item news-small">
                    <div class="col-xs-12 news-info-small">
                      <div class="col-xs-12 news-title">
                        <h1><a href="http://192.168.0.104/vongg/news/<?php print_r($model -> newsLink[1]); ?>"><?php print_r($model -> newsTitle[1]); ?></a></h1>
                      </div>
                      <div class="col-xs-4 news-tags">
                        <i class="fa fa-tags"></i><span><a href="http://192.168.0.104/vongg/tag/<?php print_r($model -> newsTag[1]); ?>"><?php print_r($model -> newsTag[1]); ?></a></span>
                      </div>
                      <div class="col-xs-4 news-date">
                        <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsDate[1]); ?></span>
                      </div>
                      <div class="col-xs-4 news-time">
                        <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsTime[1]); ?></span>
                      </div>
                    </div>
                  </div>
                <!-- / Third News -->
                <!-- Fourth News -->
                  <div class="col-xs-12 col-md-offset-1 col-md-4 news-item news-small">
                    <div class="col-xs-12 news-info-small">
                      <div class="col-xs-12 news-title">
                        <h1><a href="http://192.168.0.104/vongg/news/<?php print_r($model -> newsLink[2]); ?>"><?php print_r($model -> newsTitle[2]); ?></a></h1>
                      </div>
                      <div class="col-xs-4 news-tags">
                        <i class="fa fa-tags"></i><span><a href="http://192.168.0.104/vongg/tag/<?php print_r($model -> newsTag[2]); ?>"><?php print_r($model -> newsTag[2]); ?></a></span>
                      </div>
                      <div class="col-xs-4 news-date">
                        <i class="fa fa-calendar-o"></i><span><?php print_r($model -> newsDate[2]); ?></span>
                      </div>
                      <div class="col-xs-4 news-time">
                        <i class="fa fa-clock-o"></i><span><?php print_r($model -> newsTime[2]); ?></span>
                      </div>
                    </div>
                  </div>
                <!-- / Fourth News -->
