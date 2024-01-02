<?php
function load_simple_list($items) {
    $topicsHTML = '';

    foreach ($items as $item) {
        $topicsHTML.= <<<EOL
            <li>
                <a href="{$item->url}">
                    <h4>{$item->title}</h4>
                </a>
            </li>
        EOL;
    }
    
    echo "<ul class='no-select'>{$topicsHTML}</ul>";
}
?>