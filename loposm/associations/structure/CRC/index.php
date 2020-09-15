<?php
$documents = [
    [
        'file' => '../../../templates/site/img/newFile/svidetelstvo_1018.png',
        'img' => '../../../templates/site/img/newFile/document.png',
        'text' => 'Положение о КРК',
        'text-image' => true
    ]
]
?>

<?php
$managers = [
    [ 'img' =>'/loposm/templates/site/img/newFile/efimova_ev.png',
        'name' => 'Ефимова Екатерина Васильевна',
        'position' => 'Старшая медицинская сестра ГБУЗ ЛОКБ'],
]
?>

<?php
$managers_list = [
    [ 'img' => '',
        'name' => 'Тимофеева Марина Евгеньевна',
        'position' =>    'Член ревизионной комиссии 
Главная медицинская сестра ГКУЗ  ЛОПТД'],
    [ 'img' =>'',
        'name' => 'Мякишева Анна Анатольевна',
        'position' => 'Член ревизионной комиссии
Медицинская сестра ГБУЗ “Тосненская КМБ”'],
]
?>

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>Контрольно-ревизионный комитет</h1>
        </div>
    </section>

    <?php
include "../../../components/managers/template.php" ?>
    <?php
include "../../../components/managers-list/template.php" ?>

<?php include "../../../components/provision/template.php" ?>

<?php
include "../../../templates/site/footer.php" ?>