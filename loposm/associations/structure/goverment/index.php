<?php
$documents = [
    [
        'file' => '../../../templates/site/img/newFile/svidetelstvo_1018.png',
        'img' => '../../../templates/site/img/newFile/document.png',
        'text' => 'ПОЛОЖЕНИЕ О ПРАВЛЕНИИ',
        'text-image' => true
    ]
]
?>

<?php
$managers = [
    [ 'img' =>'/loposm/templates/site/img/newFile/manager2.png',
        'name' => 'Глазкова Татьяна Васильевна',
        'position' => 'Президент'],
]
?>

<?php
$managers_list = [
    [ 'img' => '/loposm/templates/site/img/newFile/manager1.png',
        'name' => 'Коренева Татьяна Борисовна',
        'position' =>    'Исполнительный директор РООЛО “ПАССД”'],
    [ 'img' =>'/loposm/templates/site/img/newFile/manager2.png',
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

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>Правление</h1>
            <p class="document__head_text">Состав правления Региональной общественной организации Ленинградской области “Профессиональная ассоциация специалистов сестринского дела” на 2019 - 2023 г.</p>
        </div>
    </section>

    <?php
include "../../../components/managers/template.php" ?>
    <?php
include "../../../components/managers-list/template.php" ?>

<?php include "../../../components/provision/template.php" ?>

<?php
include "../../../templates/site/footer.php" ?>