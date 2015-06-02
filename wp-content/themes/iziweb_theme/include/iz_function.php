<?php
add_action('add_meta_boxes', 'iz_add_metabox');

$post_types = array('iz_project', 'post', 'services', 'about', 'contact');

function iz_add_metabox() {
    $post_types = array('iz_project', 'post', 'services', 'about', 'contact');
    foreach ($post_types as $post) {
        add_meta_box('iz-metabox', 'Thông tin thêm', 'iz_show_metabox', $post, 'normal', 'high', array());
    }
}

function iz_show_metabox($post) {
    $sort_order = get_post_meta($post->ID, '_sort_order', true);
    ?>
    <table id="list-table">
        <tr>
            <td> Thứ tự:  </td>
            <td>
                <?php
                $order = 1000;
                if ($sort_order != '') {
                    $order = $sort_order;
                }
                ?>
                <input name="_sort_order" value="<?= $order ?>" type="number" style="width: 100%;" />
            </td>
        </tr>
    </table>
    <?php
}

add_action('save_post', 'iz_update_metabox');

function iz_update_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check the user's permissions.  
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    // Make sure that it is set.
    if (isset($_POST['_sort_order'])) {
        update_post_meta($post_id, '_sort_order', $_POST['_sort_order']);
    } else {
        update_post_meta($post_id, '_sort_order', 10000);
    }
}

add_action('wp_ajax_contact_submit', 'iz_contact_submit');
add_action('wp_ajax_nopriv_contact_submit', 'iz_contact_submit');

function iz_contact_submit() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];

    $content = 'Họ tên: ' . $name . ' <br />' .
            'Email: ' . $email . '<br />' .
            'Điên thoại: ' . $phone . '<br />' .
            'Nội dung: ' . $comments . '<br />';
    $post = array(
        'post_title' => 'Liên hệ của - ' . $name,
        'post_content' => $content,
        'post_status' => 'pending',
        'post_type' => 'iz_contact'
    );
    $post_id = wp_insert_post($post);
    if ($post_id) {
        echo 'Nội dung của bạn đã được gửi, Cám ơn bạn!';
    } else {
        echo 'Có lỗi xảy ra! xin vui lòng thử lại sau!';
    }
    die();
}

function show_pending_number($menu) {
    $types = array('iz_contact');
    $status = "pending";
    foreach ($types as $type) {
        $num_posts = wp_count_posts($type, 'readable');
        $pending_count = 0;
        if (!empty($num_posts->$status))
            $pending_count = $num_posts->$status;

        if ($type == 'post') {
            $menu_str = 'edit.php';
        } else {
            $menu_str = 'edit.php?post_type=' . $type;
        }

        foreach ($menu as $menu_key => $menu_data) {
            if ($menu_str != $menu_data[2])
                continue;
            $menu[$menu_key][0] .= " <span class='update-plugins count-$pending_count'><span class='plugin-count'>" . number_format_i18n($pending_count) . '</span></span>';
        }
    }
    return $menu;
}

add_filter('add_menu_classes', 'show_pending_number');

//shortcode

add_shortcode('filter_porftolio', 'iz_filter_porftolio');

function iz_filter_porftolio() {
    ?> 
    <div class="overlay"></div>
    <h3>Filter Porftolio:</h3>
    <?php
    $terms = get_terms('iz_project_cat', array('hide_empty' => false));
    if ($terms) {
        ?>
        <ul class="unordered-list">
            <?php foreach ($terms as $term) {
                ?>
                <li><a href="#<?php echo $term->slug ?>,.menu"><?php echo $term->name ?></a></li>
                <?php
            }
            ?>
            <li><a href="#portfolio">Xem tất cả</a></li>
        </ul>
        <?php
    }
}

add_shortcode('post_tags', 'iz_post_tags');

function iz_post_tags() {
    ?> 
    <div class="overlay"></div>
    <div class="icons tags"></div>
    <h4><strong>Tags</strong></h4>
    <p>
    <?php
    $tags = get_tags();
    if ($tags) {
        ?>
        
            <?php foreach ($tags as $term) {
                ?>
                <a title="" href="#<?php echo $term->slug ?>,.menu"><span class="tag"><?php echo $term->name ?> <span class="tag-count">(<?php echo $term->count; ?>)</span></span></a>
                <?php
            }
            ?>
                <a title="" href="#blog"><span class="tag">Xem tất cả</span></a>
        
        <?php
    }
    ?>
    </p>
            <?php
}


add_filter('comment_post_redirect', 'iz_custom_redirect');
function iz_custom_redirect($location, $comment){
    $location = split('#', $location)[0];
    return $location;
}
