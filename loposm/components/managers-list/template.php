<?php
$managers = [
    [ 'img' => '/frontend/loposm/templates/site/img/newFile/manager1.png',
       'name' => 'Коренева Татьяна Борисовна',
        'position' =>    'Исполнительный директор РООЛО “ПАССД”'],
    [ 'img' =>'/frontend/loposm/templates/site/img/newFile/manager2.png',
        'name' => 'Глазкова Татьяна Васильевна',
        'position' => 'Президент ассоциации
            Руководитель специализированных секций
            «Сестринское дело в стоматологии»,
            «Сестринское дело во фтизиатрии»'],
    [ 'img' => '',
        'name' => 'Варфоломеева Ирина Михайловна',
       'position' => 'Вице-президент
            Руководитель специализированной
            секции «Лечебное дело»'],
]
?>
<div class="container__inner">
    <section class="managers-list">

        <?php foreach ( $managers as $manager):?>
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