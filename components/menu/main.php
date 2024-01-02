<?php
	include_once 'mobile.php';
	include_once 'search.php';
    include_once __DIR__ . '/../../helpers/category.php';
    include_once __DIR__ . '/../../elements/gallery/categories.php';

    global $lang;

    $categories = get_list_categories_by_childen_with_initial(CONST_MAIN_CATEGORY, $lang->menu->initial);
?>

<div class="main-menu">
	<div class="principal">
        <a>
            <div class="image">
                <img src="<?php getImageUri('/assets/images/full_logo.png') ?>" alt="<?php getTextContent($lang->blog->name) ?>" />
            </div>
        </a>
    </div>
	<div class="header">
    	<?php load_simple_list($categories) ?>
	</div>
</div>