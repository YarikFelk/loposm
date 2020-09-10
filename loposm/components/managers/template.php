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
    [ 'img' => '/frontend/loposm/templates/site/img/newFile/manager3.png',
        'name' => 'Варфоломеева Ирина Михайловна',
       'position' => 'Вице-президент
            Руководитель специализированной
            секции «Лечебное дело»'],
]
?>
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