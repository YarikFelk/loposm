<?php
$documents = [
    [
        'file' => '../../../templates/site/img/newFile/svidetelstvo_1018.png',
        'img' => '../../../templates/site/img/newFile/document.png',
        'text' => 'ПОЛОЖЕНИЕ OБ ИНФОРМАЦИОННО-АНАЛИТИЧЕСКОМ КОМИТЕТЕ',
        'text-image' => true
    ]
]
?>

<?php
$managers = [
    [ 'img' =>'/loposm/templates/site/img/newFile/desyatnichenko_en.png',
        'name' => 'Десятниченко Елена Николаевна',
        'position' => 'Старшая медицинская сестра приёмного отделения ГБУЗ ЛО «Волховская МБ»',
        'phone' => '8-921-790-66-46',
        'email' => 'chir-len@mail.ru',
    ],
]
?>

<?php
$managers_list = [
    [ 'img' => '',
        'name' => 'Ефимова Екатерина Васильевна',
        'position' =>    'Старшая медицинская сестра ГБУЗ ЛОКБ'],
    [ 'img' =>'',
        'name' => 'Кондрашова Оксана Эдуардовна',
        'position' => 'Медицинская сестра-анестезист ГБУЗ ЛО «Волховская МБ»'],
    [ 'img' => '',
        'name' => 'Талимонова Елена Анатольевна',
        'position' => 'Медицинская сестра ЛОГКУЗ «Свирская психиатрическая больница»'],
]
?>

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>Информационно-аналитический комитет</h1>
            <img class="main-img" src="/loposm/templates/site/img/newFile/analinform.jpg" />
        </div>
    </section>

    <?php
include "../../../components/managers/template.php" ?>
    <?php
include "../../../components/managers-list/template.php" ?>

<?php include "../../../components/provision/template.php" ?>

<?php
include "../../../templates/site/footer.php" ?>