<?php
function load_category_gallery($items) {
    $categories = '';

    foreach ($items as $item) {
        $categories.= load_category($item);
    }
    
    echo <<<EOL
        <div class="gallery no-select">{$categories}</div>
    EOL;
}

function load_category($category) {
    return <<<EOL
        <div class="category">
            <a href="/category/$category->slug">
                <div class="container noselect">
                    <h4>$category->name</h4>
                </div>
            </a>
        </div>
    EOL;
}
?>