
<div class="container">
    <section class="managers">

        <?php foreach ( $managers as $manager):?>
            <article class="manager">
                <div class="manager__img">
                    <img src="<?=$manager['img']?>" alt="<?=$manager['name']?>">
                </div>

                <p class="manager__name"><?=$manager['name']?></p>
                <p class="manager__position"><?=$manager['position']?></p>
            </article>
        <?php endforeach;?>
    </section>
</div>