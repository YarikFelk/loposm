
<div class="container__inner">
    <section class="managers-list">

        <?php foreach ( $managers_list as $manager):?>
            <article class="managers-list__item">
                <div class="managers-list__item__img <?= $manager['img'] ? '' : 'insteadphoto' ?>">
                    <?php if ($manager['img']):?>
                        <img src="<?=$manager['img']?>" alt="<?=$manager['name']?>">
                    <?php endif;?>

                </div>
                <div class="managers-list__item_text">
                    <p class="manager__name"><?=$manager['name']?></p>
                    <p class=""><?=$manager['position']?></p>
                </div>
            </article>
        <?php endforeach;?>
    </section>
</div>