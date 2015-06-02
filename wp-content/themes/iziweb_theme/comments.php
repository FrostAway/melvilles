<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Please do not load this page directly. Thanks!');

if (post_password_required()) {
    ?>
    This post is password protected. Enter the password to view comments.
    <?php
    return;
}
?>

<?php if (have_comments()) : ?>

    <h5 id="comments"><?php comments_number('0 Bình luận', '1 Bình luận', '% Bình luận'); ?></h5>

    <div class="navigation">
        <div class="next-posts"><?php previous_comments_link() ?></div>
        <div class="prev-posts"><?php next_comments_link() ?></div>
    </div>

    <div class="commentlist">
        <?php wp_list_comments(); ?>
    </div>

    <div class="navigation">
        <div class="next-posts"><?php previous_comments_link() ?></div>
        <div class="prev-posts"><?php next_comments_link() ?></div>
    </div>

<?php else : // this is displayed if there are no comments so far ?>

    <?php if (comments_open()) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed ?>
        <p>Comments are closed.</p>

    <?php endif; ?>

<?php endif; ?>

<?php if (comments_open()) : ?>

    <div id="respond">

        <!--<h2><?php //comment_form_title('Leave a Reply', 'Leave a Reply to %s'); ?></h2>-->

        <div class="cancel-comment-reply">
            <?php cancel_comment_reply_link(); ?>
        </div>

        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
            <p>Bạn phải  <a href="<?php echo wp_login_url(get_permalink()); ?>">Đăng nhập</a> Để viết bình luận.</p>
        <?php else : ?>

            <form autocomplete="off" id="contactform" name="contactform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form-part">
                <?php if (is_user_logged_in()) : ?>
                    <p>Đăng nhập với: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Đăng xuất &raquo;</a></p>
                <?php else : ?>
                <input type="text" title="Họ tên" size="30" id="name" name="author">
                <input type="text" title="Email" size="30" id="email" name="email">
                <?php endif; ?>
                <textarea title="Nội dung bình luận" id="comments" rows="3" cols="40" name="comment"></textarea>
                <div class="input-wrapper clearfix">
                    <input type="submit" name="submit" id="comment-submit" value="Gửi" class="send-btn">
                    <?php comment_id_fields(); ?>
                    <span id="message"></span>
                </div>
                <?php do_action('comment_form', $post->ID); ?>
            </form>

        <?php endif; // If registration required and not logged in ?>

    </div>

<?php endif; ?>
