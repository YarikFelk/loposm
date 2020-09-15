
<div class="container">
    <section class="managers">

        <?php foreach ( $managers as $manager):?>
            <article class="manager">
                <div class="manager__img">
                    <img src="<?=$manager['img']?>" alt="<?=$manager['name']?>">
                </div>

                <p class="manager__name"><?=$manager['name']?></p>
                <p class="manager__position"><?=$manager['position']?></p>
                <?php if($manager['phone']) :?>
                    <p class="manager__phone">
                        <span class="manager__phone_title">Телефон:</span>
                        <?= $manager['phone']?>
                    </p>
                <?php endif; ?>
                <?php if($manager['email']) :?>
                    <p class="manager__email">
                        <span class="manager__email_title">e-mail:</span>
                        <?= $manager['email']?>
                    </p>
                <?php endif; ?>
            </article>
        <?php endforeach;?>
    </section>
</div>