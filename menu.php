<?php
$menu = [
  [
    "title" => "Главная",
    "href" => "../"
  ],
  [
    "title" => "Домашняя работа",
    "href" => "../",
    "subitems" => [
      [
        "title" => "Домашняя работа №1",
        "href" => "../hw-1.php"
      ],
      [
        "title" => "Домашняя работа №2",
        "href" => "../hw-2.php",
      ],
      [
        "title" => "Домашняя работа №3",
        "href" => "../hw-3.php",
      ]
    ]
  ],
  [
    "title" => "О нас",
    "href" => "../about.php"
  ],
];

$result = "<ul>";
$result .= menuRender($menu);
$result .= "</ul>";

echo $result;


function menuRender($menu_array)
{
  $result = "";

  foreach ($menu_array as $item) {
    $result .= "<li><a href='{$item['href']}'>{$item['title']}</a>";

    if (isset($item["subitems"])) {
      $result .= "<ul>";
      $result .= menuRender($item["subitems"]);
      $result .= "</ul>";
    }

    $result .= "</li>";
  }

  return $result;
}



