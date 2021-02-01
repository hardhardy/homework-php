<h1>Новости</h1>
<?php foreach ($news as $item):?>
    <div class="h3-news-titel">
        <a href="/newsone/?id=<?=$item['id']?>"><h3><?=$item['title']?></h3></a>
    </div>
<? endforeach;?>
