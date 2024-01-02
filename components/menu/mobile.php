<?php 
    include_once __DIR__ . '/../../helpers/actions.php';
    include_once __DIR__ . '/../../helpers/content.php';
	include_once 'sidebar.php';
?>

<div class="menu-mobile">
    <div class="principal">
        <a class="menu-action">
            <div class="menu">
                <?php getImage('/assets/images/icons/menu.svg') ?>
            </div>
        </a>
        <a href="/">
            <div class="image">
                <img src="<?php getImageUri('/assets/images/full_logo.png') ?>" alt="<?php getTextContent($lang->blog->name) ?>" />
            </div>
        </a>
    </div>
    <div class="search">
        <a>
            <?php getImage('/assets/images/icons/search.svg') ?>
        </a>
    </div>
</div>

<?php
    load_actions();
?>