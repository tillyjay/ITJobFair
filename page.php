<?php
//display header
get_header();

//enqueue CSS file
wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/styles.css');
?>

<?php
    //get ID of current page
    $current_page_id = get_the_ID();

    //check if current page has a featured image
    if (has_post_thumbnail($current_page_id)) {
        //display featured image
        echo get_the_post_thumbnail($current_page_id, 'full', array('class' => 'featuredImage'));
    }
?>

    <div class="page-content">
        <?php
        //display content of current page
        the_content();
        ?>
    </div>


<?php
//reset post data
wp_reset_postdata();

//display footer
get_footer();
?>
