<?php
$menu = renderTemplate('menu');
$main = renderTemplate('main');
echo renderTemplate('layout', $menu, $main);
function renderTemplate($page, $menu = "", $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}