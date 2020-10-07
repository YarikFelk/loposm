<article class="event__item">
    <div class="event__item_img <?= $event['img'] ? '' : 'insteadphoto' ?>">
        <?php if ($event['img']):?>
            <img src="<?=$event['img']?>" alt="<?=$event['title']?>">
        <?php endif;?>

    </div>
    <div class="event__item_text">
        <a href="#!" class="event__item_title"><?=$event['title']?></a>
        <p class=""><?=$event['text']?></p>
        <div class="event__item_add">
            <span class="event__item_date">опубликовано:<?=$event['date']?></span>
            <a href="#!" class="read-more">читать полностью</a>
        </div>
    </div>
</article>