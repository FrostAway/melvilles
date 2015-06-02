<?php get_header(); ?>
<div class="content-wrapper">
    <div id="content">
        <div class="container">
            <div id="container" class="clearfix">
                
                <?php
                query_posts(array(
                    'post_type' => 'about',
                    'showposts' => -1,
                    'meta_key' => '_sort_order',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                ));
                ?>
                <?php $i=0; if (have_posts()):while (have_posts()):the_post(); $i++; ?>
                        <div class="<?php iz_post_class(get_the_ID()); if($i!=1) echo 'hybrid'; ?>" style='<?php iz_post_style(get_the_ID()) ?>'>
                            <?php if (has_term('background', 'attribute')) { ?>
                                <?php the_content(); ?>
                            <?php } else { ?>
                                <div class="images"> 
                                    <?php the_post_thumbnail('about'); ?>
                                </div>
                                <div class="elem-content">
                                    <p class="small"><?php iz_term_project_list(get_the_ID(), 'about_cat');  ?></p>
                                    <h3><strong><?php the_title(); ?></strong></h3>
                                    <?php the_content(); ?>
                                </div> 
                            <?php } ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
                ?>
                
                <?php
                query_posts(array(
                    'post_type' => 'iz_project',
                    'showposts' => -1,
                    'meta_key' => '_sort_order',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                ));
                ?>
                <?php if (have_posts()):while (have_posts()):the_post(); ?>
                        <div class="<?php iz_post_class(get_the_ID()) ?>" style='<?php iz_post_style(get_the_ID()) ?>'>
                            <?php if (has_term('menu', 'attribute')) { ?>
                                <?php the_content(); ?>
                            <?php } else { ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                    <figure class="images"> 
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </figure>
                                    <div class="description">
                                        <h4><?php the_title(); ?></h4>
                                        <p class="small"><span>in</span> <?php iz_term_project_list(get_the_ID(), 'iz_project_cat'); ?></p>
                                        <div class="arrow-wrapper">
                                            <p>Xem chi tiết</p>
                                            <span class="arrow">→</span> 
                                        </div>
                                    </div>
                                </a> 
                            <?php } ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
                ?>

                <?php
                query_posts(array(
                    'post_type' => 'post',
                    'showposts' => -1,
                    'meta_key' => '_sort_order',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                ));
                ?>
                <?php if (have_posts()):while (have_posts()):the_post(); ?>
                        <div class="<?php iz_post_class(get_the_ID()) ?>" style='<?php iz_post_style(get_the_ID()) ?>'>
                            <?php if (has_term('background', 'attribute')) { ?>
                                <?php the_content(); ?>
                            <?php } else { ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <figure class="images"> 
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </figure>
                                    <div class="description">
                                        <h4><?php the_title(); ?></h4>
                                        <p class="small"><span>Đăng bởi</span><?php the_author(); ?><br />
                                            <span>Ngày</span><?php the_time('F j, Y'); ?></p>
                                        <div class="arrow-wrapper">
                                            <p>Xem thêm</p>
                                            <span class="arrow">→</span> 
                                        </div>
                                    </div>
                                </a> 
                            <?php } ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
                ?>

                <?php
                query_posts(array(
                    'post_type' => 'services',
                    'showposts' => -1,
                    'meta_key' => '_sort_order',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                ));
                ?>
                <?php if (have_posts()):while (have_posts()):the_post(); ?>
                        <div class="<?php iz_post_class(get_the_ID()) ?>" style='<?php iz_post_style(get_the_ID()) ?>'>
                            <?php if (has_term('col2-3', 'attribute')) { ?>
                                <div class="col2-3 auto">
                                    <figure class="images"> 
                                        <?php the_post_thumbnail('medium'); ?>
                                    </figure>
                                </div>
                            <?php } else { ?>
                                <figure class="images">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </figure>
                            <?php } ?>
                            <?php the_content(); ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
                ?>

                <?php
                query_posts(array(
                    'post_type' => 'contact',
                    'showposts' => -1,
                    'meta_key' => '_sort_order',
                    'orderby' => 'meta_value',
                    'order' => 'ASC'
                ));
                ?>
                <?php if (have_posts()):while (have_posts()):the_post(); ?>
                        <div class="<?php iz_post_class(get_the_ID()) ?>" style='<?php iz_post_style(get_the_ID()) ?>'>
                            <?php the_content(); ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                endif;
                ?>
                
                
                <?php $hpage_id1 = 63; ?>
                <div class="element  clearfix col1-3 home background background02"> 
                    <?php echo apply_filters('the_content', get_post_field('post_content', $hpage_id1)); ?>
                </div>

                <?php $hpage_id2 = 60; ?>
                <div class="element  clearfix col1-3 home background background03"> 
                    <?php echo apply_filters('the_content', get_post_field('post_content', $hpage_id2)); ?>
                </div>

               

            </div>
            <!-- end #container -->
        </div>
        <!-- end .container -->
    </div>
    <!-- end content -->
</div>
<!-- end content-wrapper -->

<?php get_footer(); ?>