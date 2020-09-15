<?php
$documents = [
    [
        'file' => '../../templates/site/content/documents/charter.pdf',
        'img' => '../../templates/site/img/newFile/document.png',
        'text' => 'КОМИТЕТ ПО ЗДРАВООХРАНЕНИЮ',
        'text-image' => true
    ],
    [
        'file' => '../../templates/site/content/documents/charter.pdf',
        'img' => '../../templates/site/img/newFile/document.png',
        'text' => 'ОРГАНИЗАЦИЯ ПРОФСОЮЗА',
        'text-image' => true
    ],
    [
        'file' => '../../templates/site/content/documents/charter.pdf',
        'img' => '../../templates/site/img/newFile/document.png',
        'text' => 'АКАДЕМИЯ МЕДИЦИНСКОГО ОБРАЗОВАНИЯ ИМ. <br/> Ф. И. ИНОЗЕМЦЕВА',
        'text-image' => true
    ],
]
?>


<?php include "../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>СОГЛАШЕНИЯ</h1>
        </div>
    </section>

<?php include "../../components/documents/template.php" ?>

<?php
include "../../templates/site/footer.php" ?>