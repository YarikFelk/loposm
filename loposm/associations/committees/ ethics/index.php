<?php
$documents = [
    [
        'file' => '../../../templates/site/img/newFile/svidetelstvo_1018.png',
        'img' => '../../../templates/site/img/newFile/document.png',
        'text' => 'Положение оБ ЭТИЧЕСКОМ комитете',
        'text-image' => true
    ]
]
?>

<?php
$managers = [
    [ 'img' =>'/loposm/templates/site/img/newFile/emelyanova_vs.png',
        'name' => 'Емельянова Валентина Сиволотовна',
        'position' => 'Главная медицинская сестра ЛОГБУЗ ВМНД',
        'phone' => '8-921-778-37-61',
        'email' => 'valya-psiholog@yandex.ru',
    ],
]
?>

<?php
$managers_list = [
    [ 'img' => '',
        'name' => 'Абрамова Ольга Александровна',
        'position' => 'Главная медицинская сестра <br/> ГБУЗ ЛО «Волосовская МБ»'],
    [ 'img' =>'',
        'name' => 'Мурашова Людмила Федоровна',
        'position' => 'Заместитель главного врача по работе с сестринским персоналом <br/> ГБУЗ ЛО «Выборгская МБ»'],
    [ 'img' => '',
        'name' => 'Нуромская Ирина Геннадьевна',
        'position' => 'Старшая медицинская сестра <br/> ГБУЗ ЛО «Сланцевская МБ»'],
    [ 'img' => '',
        'name' => 'Соловьева Оксана Леонидовна',
        'position' => 'Главная медицинская сестра <br/> ГБУЗ ЛО «Рощинская МБ»'],
    [ 'img' =>'',
        'name' => 'Талимонова Елена Анатольевна',
        'position' => 'Медицинская сестра <br/> ГКУЗ ЛО «Свирская психиатрическая больница»'],
]
?>

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>ЭТИЧЕСКИЙ КОМИТЕТ</h1>
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