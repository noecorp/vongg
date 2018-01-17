<?php

  require_once 'backend/models/news.class.php';
  $model = new NewsModel();
  $model -> showLatestNewsVariables($_GET['link']);

?>

                <!-- Single News Last Articles -->
                <div class="row dark">
                  <div class="col-xs-12">
                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                      <div class="single-news-last-articles">
                        <!-- Heading Section -->
                          <div class="col-xs-12 col-md-12 heading-news">
                            <h1>Latest news</h1>
                          </div>
                        <!-- / Heading Section -->
                        <div class="col-xs-12 col-md-3 single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?php print_r($model -> newsLatestImg[0]); ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                          <div class="col-xs-12 single-news-last-article-box">
                            <div class="col-xs-12 single-news-latest-title">
                              <h1><a href="<?php print_r( $model -> newsLatestLink[0] ); ?>"><?php print_r( $model -> newsLatestTitle[0] ); ?></a></h1>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-md-offset-1 single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?php print_r($model -> newsLatestImg[1]); ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                          <div class="col-xs-12 single-news-last-article-box">
                            <div class="col-xs-12 single-news-latest-title">
                              <h1><a href="<?php print_r( $model -> newsLatestLink[1] ); ?>"><?php print_r( $model -> newsLatestTitle[1] ); ?></a></h1>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-3 col-md-offset-1 single-news-last-article-item" style="background: url('http://192.168.0.104/vongg/temp/<?php print_r($model -> newsLatestImg[2]); ?>'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
                          <div class="col-xs-12 single-news-last-article-box">
                            <div class="col-xs-12 single-news-latest-title">
                              <h1><a href="<?php print_r( $model -> newsLatestLink[2] ); ?>"><?php print_r( $model -> newsLatestTitle[2] ); ?></a></h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / Single News Last Articles -->
