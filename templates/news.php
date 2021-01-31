<h2>Новости</h2>
<?php foreach ($news as $item):?>
    <div>
        <a href="/newsone/?id=<?=$item['id']?>"><h2><?=$item['title']?></h2></a>
    </div>
<? endforeach;?>
