<?php

  require_once 'backend/models/news.class.php';
  $model = new NewsModel();
  $model -> showCommentsNewsVariables($_GET['link']);

?>

                <!-- Single News Comments -->
                  <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="single-news-comments-section" count="<?= $model -> newsCommentsCount; ?>">
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
                        $commentNumber = 0;
                        for ( $i = 0; $i < $model -> newsCommentsCount; $i++ ) {
                        $commentNumber++;
                      ?>
                      <div class="col-xs-12 single-news-comment-item" id="comment<?= $i; ?>">
                        <div class="col-xs-12 single-news-comment-heading">
                          <h3>#<?= $commentNumber; ?></h3>
                        </div>
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
                          <h4 data-toggle="tooltip" data-placement="bottom" title="<?= $model -> newsCommentEditStatus[$i]; ?>" class="showEditedContent"><i class="fa fa-pencil"></i><span showEditedContent="<?= $model -> newsCommentID[$i]; ?>">Edited</span></h4>
                          <?php } ?>
                        </div>
                        <div class="col-xs-8 single-news-comment-content">
                          <div class="col-xs-12 single-news-comment-heading display-none" id="comment-content-old<?= $model -> newsCommentID[$i]; ?>">
                            <h3>Old comment</h3>
                          </div>
                          <p class="display-none" id="comment-content-edited<?= $model -> newsCommentID[$i]; ?>"><?= $model -> newsCommentEdited[$i]; ?></p>
                          <div class="col-xs-12 single-news-comment-heading display-none" id="comment-content-current<?= $model -> newsCommentID[$i]; ?>">
                            <h3>Current comment</h3>
                          </div>
                          <?php

                            if ( $model -> newsCommentReply[$i] == true ) {

                              $reply = unserialize($model -> newsCommentReply[$i]);

                              $selectNewsSaysCommentQuery = $this -> model -> db -> prepare('SELECT * FROM comments WHERE id = :id');
                              $selectNewsSaysCommentQuery->bindValue(':id', $reply['comment'], PDO::PARAM_STR);
                              $selectNewsSaysCommentQuery->execute();
                              $saysComment = $selectNewsSaysCommentQuery->fetch();

                          ?>
                            <div class="col-xs-12 single-news-comment-heading">
                              <h3><?= $reply['user']; ?> says...</h3>
                              <p><i><?= implode(' ', array_slice(explode(' ', $saysComment['content']), 0, 25)); ?>...</i></p>
                            </div>
                          <?php } ?>
                          <p id="comment-content<?= $model -> newsCommentID[$i]; ?>"><?= $model -> newsCommentContent[$i]; ?></p>
                          <button type="button" class="btn btn-default pull-right display-none" style="margin-bottom: 20px;" id="show-current-comment<?= $model -> newsCommentID[$i]; ?>" showEditedContent="<?= $model -> newsCommentID[$i]; ?>" name="showCurrentComment">Show only current comment</button>
                          <form method="post" action="http://192.168.0.104/vongg/form/editComment" class="col-xs-12 single-news-reply-add" id="editComment<?= $model -> newsCommentID[$i]; ?>">
                            <div class="col-xs-12 single-news-comment-heading">
                              <h3>Edit comment</h3>
                            </div>
                            <div class="form-group">
                              <textarea class="form-control" rows="5" id="editComment" name="editComment"><?= $model -> newsCommentContent[$i]; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-default pull-right" editComment="<?= $model -> newsCommentID[$i]; ?>" style="margin-left: 10px;" name="editComment">Edit comment</button>
                            <button type="button" class="btn btn-default pull-right" editComment="<?= $model -> newsCommentID[$i]; ?>" name="cancelEdit">Cancel</button>
                          </form>
                        </div>
                        <?php

                          $voteUp = unserialize($model -> newsCommentVoteUp[$i]);
                          $voteDown = unserialize($model -> newsCommentVoteDown[$i]);

                          // Napisac Voty dla userów. W pętli sprawdzic czy w tablicy z serialize jest użytkownik z obecnej sesji.
                          // count jest źle.

                        ?>
                        <div class="col-xs-11 col-xs-offset-1 single-news-comment-options">
                          <div class="col-xs-2 news-comment-vote-up">
                            <?php if ( $voteUp['count'] > 0 ) {  ?>
                            <span voteupComment="<?= $model -> newsCommentID[$i]; ?>" class="commentVotedUp"><i class="fa fa-chevron-up"></i><?= $voteUp['count']; ?></span>
                            <?php } else { ?>
                            <span voteupComment="<?= $model -> newsCommentID[$i]; ?>"><i class="fa fa-chevron-up"></i><?= $voteUp['count']; ?></span>
                            <?php } ?>
                          </div>
                          <div class="col-xs-2 news-comment-vote-down">
                            <?php if ( $voteDown['count'] > 0 ) {  ?>
                            <span votedownComment="<?= $model -> newsCommentID[$i]; ?>" class="commentVotedDown"><i class="fa fa-chevron-down"></i><?= $voteDown['count']; ?></span>
                            <?php } else { ?>
                            <span votedownComment="<?= $model -> newsCommentID[$i]; ?>"><i class="fa fa-chevron-down"></i><?= $voteDown['count']; ?></span>
                            <?php } ?>
                          </div>
                          <div class="col-xs-2 news-comment-reply" id="reply<?= $i; ?>">
                            <span replyComment="<?= $model -> newsCommentID[$i]; ?>"><i class="fa fa-reply"></i>Reply</span>
                          </div>
                          <div class="col-xs-2 news-comment-edit">
                            <span editComment="<?= $model -> newsCommentID[$i]; ?>"><i class="fa fa-pencil"></i>Edit</span>
                          </div>
                          <div class="col-xs-2 news-comment-delete">
                            <span deleteComment="<?= $model -> newsCommentID[$i]; ?>"><i class="fa fa-trash-o"></i>Delete</span>
                          </div>
                        </div>
                        <form method="post" action="http://192.168.0.104/vongg/form/addReply" class="col-xs-12 col-md-10 col-md-offset-1 single-news-comment-edit" id="replyComment<?= $model -> newsCommentID[$i]; ?>">
                          <div class="col-xs-12 single-news-comment-heading">
                            <h3>Reply to <?= $model -> newsCommentAuthor[$i]; ?></h3>
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" rows="5" name="reply"></textarea>
                          </div>
                          <button type="submit" class="btn btn-default pull-right" replyComment="<?= $model -> newsCommentID[$i]; ?>" style="margin-left: 10px;" name="addReply">Add reply</button>
                          <button type="button" class="btn btn-default pull-right" replyComment="<?= $model -> newsCommentID[$i]; ?>" name="cancelReply">Cancel</button>
                        </form>
                        <form method="post" action="http://192.168.0.104/vongg/form/addReply" class="col-xs-12 col-md-10 col-md-offset-1 single-news-comment-delete" id="deleteComment<?= $model -> newsCommentID[$i]; ?>">
                          <div class="col-xs-12 single-news-comment-heading">
                            <h3>Are you sure you want to delete this comment?</h3>
                          </div>
                          <button type="submit" class="btn btn-danger pull-right" deleteComment="<?= $model -> newsCommentID[$i]; ?>" style="margin-left: 10px;" name="deleteComment">Delete comment</button>
                          <button type="button" class="btn btn-default pull-right" deleteComment="<?= $model -> newsCommentID[$i]; ?>" name="cancelDelete">Cancel</button>
                        </form>
                      </div>
                      <?php

                          }
                        }

                      ?>
                    </div>
                  </div>
                <!-- / Single News Comments -->
