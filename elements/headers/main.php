<?php
function load_main_header($name) {
    echo <<<EOL
        <div class="header">
            <h1>$name</h1>
        </div>        
    EOL;
}
?>