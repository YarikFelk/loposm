<?php
$documents = [
    [
        'file' => '../../../templates/site/img/newFile/svidetelstvo_1018.png',
        'img' => '../../../templates/site/img/newFile/document.png',
        'text' => 'Положение о профессиональном комитете',
        'text-image' => true
    ]
]
?>

<?php
$managers = [
    [ 'img' =>'/loposm/templates/site/img/newFile/manager2.png',
        'name' => 'Глазкова Татьяна Васильевна',
        'position' => 'Президент РООЛО «ПАССД»',
        'phone' => '8-999-034-43-80',
        'email' => 'tatyana.glazkova@mail.ru',
    ],
]
?>

<?php
$managers_list = [
    [ 'img' => '',
        'name' => 'Архипова Анна Александровна',
        'position' =>    'Старшая медицинская сестра <br/> ГБУЗ ЛОКБ'],
    [ 'img' =>'',
        'name' => 'Афанасьева Светлана Леонидовна',
        'position' => 'Старшая медицинская сестра <br/> ГКУЗ ЛО «Дружносельская психиатрическая больница»'],
    [ 'img' => '',
        'name' => 'Белочкина Алла Васильевна',
        'position' => 'главная медицинская сестра <br/> ЛОГБУЗ ДКБ'],
    [ 'img' => '',
        'name' => 'Варфоломеева Ирина Михайловна',
        'position' => 'заместитель главного врача по работе с сестринским персоналом <br/> ГБУЗ ЛО «Тосненская КМБ»'],
    [ 'img' => '',
        'name' => 'Десятниченко Елена Николаевна',
        'position' => 'Медицинская сестра <br/> ГБУЗ ЛО «Волховская МБ»'],
    [ 'img' => '',
        'name' => 'Егорова Римма Александровна',
        'position' => 'Главная медицинская сестра <br/> ГКУЗ ЛОПНД'],
    [ 'img' => '',
        'name' => 'Белочкина Алла Васильевна',
        'position' => 'главная медицинская сестра <br/> ЛОГБУЗ ДКБ'],
    [ 'img' => '',
        'name' => 'Белочкина Алла Васильевна',
        'position' => 'главная медицинская сестра <br/> ЛОГБУЗ ДКБ'],
    [ 'img' => '',
        'name' => 'Белочкина Алла Васильевна',
        'position' => 'главная медицинская сестра <br/> ЛОГБУЗ ДКБ'],
]
?>

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>Профессиональный комитет</h1>
            <img class="main-img" src="/loposm/templates/site/img/newFile/0rnttjbf39k.jpg" />
        </div>
    </section>

    <?php
include "../../../components/managers/template.php" ?>
    <?php
include "../../../components/managers-list/template.php" ?>

<?php include "../../../components/provision/template.php" ?>

<?php
include "../../../templates/site/footer.php" ?>