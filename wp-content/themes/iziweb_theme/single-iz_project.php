<?php
/**
 * The template for displaying any single post.
 *
 */
get_header(); // This fxn gets the header.php file and renders it 
?>

<div class="content-wrapper">
    <div id="content">
        <div class="container">
            <div id="container" class="clearfix">
                <?php if(have_posts()):while(have_posts()):the_post(); ?>
                <?php $postid = get_the_ID(); ?>
                <div class="element clearfix col3-3 home"> 
                    <?php the_content(); ?>
                </div>
                <div class="element clearfix col1-3 home grey auto">
                    <h3 class="uppercase"><strong><?php the_title(); ?></strong></h3>
                    <div class="ct-part">
                        <p class="small">Danh mục</p>
                        <p>
                            <?php echo get_the_term_list(get_the_ID(), 'iz_project_cat', ' ', ',  '); ?>
                        </p>
                        <p class="small">Ngày đăng</p>
                        <p><?php the_time('F j, Y'); ?></p>
<!--                        <p class="small">Client</p>
                        <p>Apple Inc.</p>
                        <p class="small">Links</p>
                        <p><a href="#">Download PDF</a></p>-->
                    </div>
                    <div class="ft-part">
                        <ul class="social-list">
                            <li><i>Share it:</i></li>
                            <li><a href="#" class="git"></a></li>
                            <li><a href="#" class="pinterest"></a></li>
                            <li><a href="#" class="instagram"></a></li>
                            <li><a href="#" class="dribbble"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="element  clearfix col1-3 home grey auto">
                    <blockquote>
                        <?php $comments = get_comments(array('post_id'=>  get_the_ID(), 'posts_per_page'=>2)); ?>
                        <?php foreach ($comments as $comment){ ?>
                        <p><?php echo $comment->comment_content; ?></p>
                        <p class="small"><?php echo $comment->comment_author ?></p>
                        <?php } ?>
                    </blockquote>
                </div>
                
                <?php 
                query_posts(array(
                    'post_type' => 'iz_project',
                    'post__not_in' => array($postid),
                    'showposts' => 2
                ));
                ?>
                <?php if(have_posts()):while(have_posts()):the_post(); ?>
                <div class="element  clearfix col1-3 home"> 
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <figure class="images"> <?php the_post_thumbnail('thumbnail'); ?> </figure>
                        <div class="description">
                            <h4><?php the_title(); ?></h4>
                            <p class="small"><span>previous in</span> <?php iz_term_project_list(get_the_ID(), 'iz_project_cat'); ?></p>
                            <div class="arrow-wrapper">
                                <p>Xem Thêm</p>
                                <span class="arrow">→</span> 
                            </div>
                        </div>
                    </a> 
                </div>
                <?php endwhile; wp_reset_query(); endif; ?>
                
                <div class="element  clearfix col1-3 home background background05"> 
                    <a href="<?php echo home_url(); ?>#portfolio" data-title="" class="whole-tile">
                        <div class="overlay"></div>
                        <p class="small">All Projects</p>
                        <h3>Portfolio overview here!</h3>
                        <div class="bottom">
                            <div class="icons network"></div>
                            <p class="alignleft">Go back</p>
                            <span class="arrow">→</span>
                        </div>
                    </a> 
                </div>
                
                <?php endwhile; wp_reset_query(); wp_reset_postdata(); endif; ?>
            </div>
            <!-- end #container -->
        </div>
        <!-- end .container -->
    </div>
    <!-- end content -->
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it  ?>
