<?php

  require_once 'backend/models/news.class.php';
  $model = new NewsModel();
  $model -> showCommentsNewsVariables($_GET['link']);

?>

                <!-- Single News Comments -->
                  <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="single-news-comments-section">
                      <!-- Heading Section -->
                        <div class="col-xs-12 col-md-12 heading-section">
                          <h1>Comments (<?= $model -> newsCommentsCount; ?>)</h1>
                        </div>
                      <!-- / Heading Section -->
                      <form method="post" action="http://192.168.0.104/vongg/form/addComment" class="col-xs-12 col-md-10 col-md-offset-1 single-news-comment-add">
                        <div class="form-group">
                          <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right" name="addComment">Add comment</button>
                      </form>
                      <?php

                        if ( $model -> newsCommentsCount > 0 ) {
                        for ( $i = 0; $i < $model -> newsCommentsCount; $i++ ) {

                      ?>
                      <div class="col-xs-12 single-news-comment-item">
                      <?php

                        if ( $model -> newsCommentReply[$i] == true ) {

                          $reply = unserialize($model -> newsCommentReply[$i]);

                      ?>
                        <div class="col-xs-12 single-news-comment-heading">
                          <h3>Answer to the comment by <?= $reply['user']; ?></h3>
                        </div>
                      <?php } ?>
                        <div class="col-xs-3 single-news-comment-user">
                          <img src="http://192.168.0.104/vongg/temp/lineup-avatar.png" class="img-circle" />
                          <h3><?= $model -> newsCommentAuthor[$i]; ?></h3>
                          <h4><i class="fa fa-calendar-o"></i><?= $model -> newsCommentDate[$i]; ?></h4>
                          <h4><i class="fa fa-clock-o"></i><?= $model -> newsCommentTime[$i]; ?></h4>
                          <?php if ( $model -> newsCommentEditStatus[$i] != 0 ) { ?>
                          <h4 edit-date="<?= $model -> newsCommentEditStatus[$i]; ?>"><i class="fa fa-pencil"></i>Edited</h4>
                          <?php } ?>
                        </div>
                        <div class="col-xs-8 single-news-comment-content">
                          <p><?= $model -> newsCommentContent[$i]; ?></p>
                        </div>
                        <?php

                          $voteUp = unserialize($model -> newsCommentVoteUp[$i]);
                          $voteDown = unserialize($model -> newsCommentVoteDown[$i]);

                        ?>
                        <div class="col-xs-11 col-xs-offset-1 single-news-comment-options">
                          <div class="col-xs-2 news-comment-vote-up">
                            <i class="fa fa-chevron-up"></i><span><?= $voteUp['count']; ?></span>
                          </div>
                          <div class="col-xs-2 news-comment-vote-down">
                            <i class="fa fa-chevron-down"></i><span><?= $voteDown['count']; ?></span>
                          </div>
                          <div class="col-xs-2 news-comment-reply">
                            <i class="fa fa-reply"></i><span>Reply</span>
                          </div>
                          <div class="col-xs-2 news-comment-edit">
                            <i class="fa fa-pencil"></i><span>Edit</span>
                          </div>
                          <div class="col-xs-2 news-comment-delete">
                            <i class="fa fa-trash-o"></i><span>Delete</span>
                          </div>
                        </div>
                      </div>
                      <?php

                          }
                        }

                      ?>
                    </div>
                  </div>
                <!-- / Single News Comments -->
