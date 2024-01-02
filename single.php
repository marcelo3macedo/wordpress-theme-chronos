<?php
	include_once 'components/header/main.php';
	include_once 'constants/loader.php';
	include_once 'helpers/category.php';
	include_once 'helpers/content.php';
	include_once 'helpers/posts.php';
	include_once 'elements/gallery/categories.php';
    
	global $lang;

	$json = file_get_contents(get_template_directory() . '/assets/translations/pt.json');
	$lang = json_decode($json);

    $current_post_id = get_the_ID();
    $current_post = get_posts_by_id($current_post_id);
    $post_categories = get_main_complement_category($current_post->id);
    
	include_once 'constants/loader.php';
	include_once 'components/header/main.php';
	include_once 'components/menu/main.php';
	include_once 'components/blocks/actions/more.php';
?>

<div class="single container">
    <div class="header">
        <h1><?php getTextContent($current_post->post_title) ?></h1>
        <?php load_category_gallery($post_categories) ?>
    </div>
    <div class="content">
        <?php getTextContent($current_post->post_content) ?>
    </div>
</div>

<?php
	include_once 'components/footer/main.php';
?>