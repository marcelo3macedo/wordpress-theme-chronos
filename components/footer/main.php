<?php
    include_once __DIR__ . '/../../helpers/content.php';
    include_once __DIR__ . '/../../elements/list/simple.php';

	global $lang;
?>
        
<footer>
    <div class="container">
        <div class="menu">
            <?php load_simple_list($lang->footer->links) ?>        
        </div>
        <div class="copyright">
            <h5 class="text-light">
                <?php getTextContent($lang->footer->title) ?>
            </h5>
        </div>
    </div>
</footer>

<?php
    include_once 'closing.php';
?>