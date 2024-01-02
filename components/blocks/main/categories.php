<?php
    include_once __DIR__ . '/../../../helpers/category.php';
    include_once __DIR__ . '/../../../elements/headers/main.php';
    include_once __DIR__ . '/../../../elements/list/simple.php';

    global $lang;

    $categories = get_list_categories_by_childen(CONST_MAIN_CATEGORY);
?>

<div class="categories">
    <?php load_main_header($lang->categories->title) ?>
    <?php load_simple_list($categories) ?>
</div>