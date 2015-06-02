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
                <?php if (have_posts()):while (have_posts()):the_post(); ?>
                        <div class="element  clearfix col2-3 home auto">
                            <div class="col2-3 auto">
                                <figure class="images">
                                    <?php the_post_thumbnail('medium') ?>
                                </figure>
                            </div>
                            <div class="col2-3 auto white-bottom">
                                <h3> <strong><?php the_title(); ?></strong></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="element clearfix col1-3 home grey auto">
                            <h3><strong>Chi tiết bài viết</strong></h3>
                            <div class="ct-part">
                                <p class="small">Danh mục</p>
                                <p>
                                    <?php
                                    $cats = get_the_category();
                                    if ($cats) {
                                        $out = '';
                                        foreach ($cats as $cat) {
                                            $out .= $cat->name . ', ';
                                        }
                                        echo trim($out, ', ');
                                    }
                                    ?>
                                </p>
                                <p class="small">Ngày đăng</p>
                                <p><?php the_time('F j, Y'); ?></p>
                                <p class="small">Người đăng</p>
                                <p><?php the_author(); ?></p>
                            </div>
                            <div class="ft-part">
                                <ul class="social-list">
                                    <li><i>Share it:</i></li>
                                    <li><a href="#" class="soundcloud"></a></li>
                                    <li><a href="#" class="pinterest"></a></li>
                                    <li><a href="#" class="slack"></a></li>
                                    <li><a href="#" class="dribbble"></a></li>
                                    <li><a href="#" class="flickr"></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="element clearfix col1-3 home auto">
                            <div class="elem-content">
                                <h3><strong>Viết bình luận</strong></h3>
                                <?php comments_template(); ?>
                            </div>
                        </div>
                        <div class="element  clearfix col1-3 home background background08">
                            <div class="overlay"></div>
                            <div class="icons tags"></div>
                            <h4><strong>Tags</strong></h4>
                            <p> <a href="#" title=""><span class="tag">Slideshow&nbsp;<span class="tag-count">(2)</span></span></a> <a href="#" title=""><span class="tag">Video&nbsp;<span class="tag-count">(12)</span></span></a> <a href="#" title=""><span class="tag">Popup&nbsp;<span class="tag-count">(3)</span></span></a> <a href="#" title=""><span class="tag">Comments&nbsp;<span class="tag-count">(1)</span></span></a> <a href="#" title=""><span class="tag">Lists&nbsp;<span class="tag-count">(1)</span></span></a> <a href="#" title=""><span class="tag">Youtube&nbsp;<span class="tag-count">(1)</span></span></a> <a href="#" title=""><span class="tag">Vimeo&nbsp;<span class="tag-count">(4)</span></span></a> </p>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
            <!-- end #container -->
        </div>
        <!-- end .container -->
    </div>
    <!-- end content -->
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it  ?>
