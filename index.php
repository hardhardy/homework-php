<?php
$menu = renderTemplate('menu');
echo renderTemplate('layout', $menu);
$hw2 = renderTemplate('hw-2');
echo renderTemplate('layout', $hw2);
function renderTemplate($page, $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}