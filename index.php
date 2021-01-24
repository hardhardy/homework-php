<?php
$menu = renderTemplate('menu');
$hw3 = renderTemplate('hw-3');
echo renderTemplate('layout', $menu, $hw3);
function renderTemplate($page, $menu = "", $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}