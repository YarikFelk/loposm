<?php
$documents = [
    [
        'file' => '../../../templates/site/img/newFile/svidetelstvo_1018.png',
        'img' => '../../../templates/site/img/newFile/document.png',
        'text' => 'Положение о <br/> КОМИТЕТЕ <br/> ПО КАЧЕСТВУ',
        'text-image' => true
    ]
]
?>

<?php
$managers = [
    [ 'img' =>'/loposm/templates/site/img/newFile/zemko_na.png',
        'name' => 'Земко Наталия Алексеевна',
        'position' => 'Главная медицинская сестра ГБУЗ ЛО «Гатчинская КМБ»',
        'phone' => '8-921-577-85-23',
        'email' => 'zemko1179@mail.ru',
    ],
]
?>

<?php
$managers_list = [
    [ 'img' => '',
        'name' => 'Казакова Надежда Владимировна',
        'position' =>    'Старшая медицинская сестра <br/> ГБУЗ ЛО «Всеволожская КМБ»'],
    [ 'img' =>'',
        'name' => 'Кравцова Ирина Глебовна',
        'position' => 'Главная медицинская сестра <br/> ГБУЗ ЛО «Тихвинская МБ»'],
    [ 'img' => '',
        'name' => 'Ручина Лилия Петровна',
        'position' => 'Заведующая отделом менеджмента качества <br/> ГБУЗ ЛО «Гатчинская КМБ»'],
]
?>

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>Комитет по качеству</h1>
            <img class="main-img" src="/loposm/templates/site/img/newFile/leningradskaya_oblast.jpg" />
        </div>
    </section>

    <?php
include "../../../components/managers/template.php" ?>
    <?php
include "../../../components/managers-list/template.php" ?>

<?php include "../../../components/provision/template.php" ?>

<?php
include "../../../templates/site/footer.php" ?>