<?php
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/gallery/posts.php';
    include_once __DIR__ . '/../../../helpers/posts.php';
    
    global $lang;

    $posts = get_latest_posts();
?>

<div class="news">
    <?php load_main_header($lang->news->title) ?>
    <?php load_post_gallery($posts) ?>
</div>