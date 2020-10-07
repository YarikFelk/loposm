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
    [ 'img' => '/loposm/templates/site/img/newFile/talimonova_elena_anatolevna.png',
        'name' => 'Талимонова Елена Анатольевна',
        'position' =>    'Секретарь Правления
Медицинская сестра ЛОГКУЗ «Свирская психиатрическая больница»'],
    [ 'img' => '/loposm/templates/site/img/newFile/belochkina_alla_vasilevna.png',
        'name' => 'Белочкина Алла Васильевна',
        'position' =>    'Вице-президент
Главная медицинская сестра ЛОГБУЗ «Детская клиническая больница»'],
    [ 'img' => '/loposm/templates/site/img/newFile/Varfolomeeva_Irina_Mikhaylovna.png',
        'name' => 'Варфоломеева Ирина Михайловна',
        'position' =>    'Вице-президент
Заместитель главного врача по работе с сестринским персоналом  ГБУЗ ЛО
«Тосненская КМБ»'],
    [ 'img' => '/loposm/templates/site/img/newFile/emelyanova_vs.png',
        'name' => 'Емельянова Валентина Сиволотовна',
        'position' =>    'Главная медицинская сестра
ЛОГБУЗ ВМНД'],
    [ 'img' => '/loposm/templates/site/img/newFile/egorova_rimma_aleksandrovna.png',
        'name' => 'Егорова Римма Александровна',
        'position' =>    'Главная медицинская сестра
ГКУЗ ЛОПНД'],
    [ 'img' => '/loposm/templates/site/img/newFile/zemko_na.png',
        'name' => 'Земко Натлия Алексеевна',
        'position' =>    'Главная медицинская сестра
ГБУЗ ЛО «Гатчинская КМБ»'],
    [ 'img' => '/loposm/templates/site/img/newFile/kazakova_nadezhda_vladimirovna.png',
        'name' => 'Казакова Надежда Владимировна',
        'position' =>    'Старшая медицинская сестра
ГБУЗ ЛО «Всеволожская КМБ»'],
    [ 'img' => '/loposm/templates/site/img/newFile/sukhina_elena_nikolaevna.png',
        'name' => 'Сухина Елена Николаевна',
        'position' =>    'главная медицинская сестра
ГБУЗ ЛО «Сланцевская МБ»'],
    [ 'img' => '/loposm/templates/site/img/newFile/kravtsova_irina_glebovna.png',
        'name' => 'Кравцова Ирина Глебовна',
        'position' =>    'Главная медицинская сестра
ГБУЗ ЛО «Тихвинская МБ»'],
    [ 'img' => '/loposm/templates/site/img/newFile/desyatnichenko_en.png',
        'name' => 'Десятниченко Елена Николаевна',
        'position' =>    'Старшая медицинская сестра
ГБУЗ ЛО «Волховская МБ»'],
    [ 'img' => '/loposm/templates/site/img/newFile/shcherbakova_olga_vitalevna.png',
        'name' => 'Щербакова Ольга Витальевна',
        'position' =>    'Главная медицинская сестра
ГБУЗ ЛОКБ'],

]
?>

<?php include "../../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>Правление</h1>
            <p class=" goverment__head_text">Состав правления Региональной общественной организации Ленинградской области “Профессиональная ассоциация специалистов сестринского дела” на 2019 - 2023 г.</p>
        </div>
    </section>

    <?php
include "../../../components/managers/template.php" ?>
    <?php
include "../../../components/managers-list/template.php" ?>

<?php include "../../../components/provision/template.php" ?>

<?php
include "../../../templates/site/footer.php" ?>