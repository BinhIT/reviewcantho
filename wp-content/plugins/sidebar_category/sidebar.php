<?php
/**
* Plugin Name: Sidebar chuyên mục
* Description: plugin get chuyên mục bài viết
* Author: Phương Bình
**/
function get_cate() {
    ?>
    <ul>
    <?php
    $args = array(
        'child_of'  => 0,
        '<strong>orderby</strong>'    => 'íd',
    );
    $categories = get_categories( $args );
    foreach ( $categories as $category ) { ?>
    <li>
       <a href="<?php echo get_term_link($category->slug, 'category');?>">
          <?php echo $category->name ; ?>
       </a>
    </li>
    <?php } ?>
    </ul>
    <?php } ?>
<?php
add_shortcode( 'get_cate', 'get_cate' );
