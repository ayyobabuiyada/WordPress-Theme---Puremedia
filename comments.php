<div id="comments">

    <h3><?= get_comments_number() ?> Comments</h3>
    <?php
    $comments_loop = new WP_Comment_Query();
    $comments = $comments_loop->query(array(
        'status' => 'approve',
        'post_id' => get_the_ID(),
        'orderby' => 'comment_date',
    ));
    if ($comments) :
    ?>

        <ol class="commentlist">
            <?php
            foreach ($comments as $comment) :
            ?>

                <li class="depth-1">

                    <div class="avatar">
                        <?= get_avatar($comment->comment_author_email, $size = '50') ?>
                    </div>

                    <div class="comment-content">

                        <div class="comment-info">
                            <cite><?= $comment->comment_author ?></cite>

                            <div class="comment-meta">
                                <time class="comment-time"><?= $comment->comments_date ?></time>
                                <span class="sep">/</span><a href="#" class="reply">Reply</a>
                            </div>
                        </div>

                        <div class="comment-text">
                            <p><?= $comment->comment_content ?></p>
                        </div>

                    </div>

                </li>
            <?php
            endforeach;
            ?>
        </ol> <!-- /commentlist -->

    <?php endif; ?>
    <!-- respond -->

    <?php
        if (comments_open()) :
            comment_form([
                'title_reply' => '<h3>Leave a Comment</h3>',
                'class_container' => 'respond',
                'id_form' => 'contactForm',
                'submit_button' => '<button class="stroke medium" type="submit">Submit</button>',
                'fields' => [
                    'author' => '<div class="group">
                                    <label for="author">Name <span class="required">*</span></label>
                                    <input type="text" value="" size="35" id="cName" name="author">
                                </div>',
                    'email' => '<div class="group">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input type="text" value="" size="35" id="cEmail" name="email">
                                </div>',
                    'url' => '  <div class="group">
                                    <label for="url">Website</label>
                                    <input type="text" value="" size="35" id="cWebsite" name="url">
                                </div>',
                ],
                'comment_field' => '<div class="message group">
                                        <label for="comment">Message <span class="required">*</span></label>
                                        <textarea cols="50" rows="10" id="cMessage" name="comment"></textarea>
                                    </div>',
            ]);
        endif;
        ?>
    <!-- /respond -->

</div>