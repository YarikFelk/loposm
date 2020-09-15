<?php
$documents = [
    [
        'file' => '../../templates/site/content/documents/charter.pdf',
        'img' => '../../templates/site/img/newFile/document.png',
        'text' => 'Заявление о вступлении',
        'text-image' => true
    ],
    [
        'file' => '../../templates/site/content/documents/charter.pdf',
        'img' => '../../templates/site/img/newFile/document.png',
        'text' => 'Заявление о перечислении членских взносов',
        'text-image' => true
    ],
    [
        'file' => '../../templates/site/content/documents/charter.pdf',
        'img' => '../../templates/site/img/newFile/document.png',
        'text' => 'Квитанция <br/> на оплатy <br/> вступительного <br/> взноса',
        'text-image' => true
    ],
]
?>


<?php include "../../templates/site/header.php" ?>

    <section>
        <div class="container__inner">
            <h1>ВСТУПИТЬ В АССОЦИАЦИЮ</h1>
        </div>
    </section>

    <section class="join">
        <div class="container__inner">
            <p>
                Этот раздел предназначен для тех специалистов, которые приняли решение вступить в РООЛО «ПАССД». Это решение подразумевает, что Вы познакомились с Уставом Ассоциации, деятельностью Ассоциации, образовательными мероприятиями. Документы, необходимые для вступления в Ассоциацию:
            </p>

            <div class="documents__row">
                <?php if(isset($documents)) :?>
                    <?php foreach($documents as $document) :?>
                        <div class="document__item">
                            <a href="<?=$document['file']?>"
                               data-fancybox data-caption="Caption #1">
                                <img src="<?=$document['img']?>"
                                     alt="" />
                                <p class="document_img--on-text">
                                    <?=$document['text']?>
                                </p>
                            </a>
                            <a href="<?=$document['file']?>" class="download">
                                скачать
                            </a>
                        </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>

            <p>
                <span class="bold">Если Вы работаете в медицинской организации Ленинградской области,</span>
                    то расскажите о своем решении главной медицинской сестре. Вам надо будет заполнить 2 заявления: о вступлении и о перечислении членских взносов, а также оплатить вступительный взнос. Ваши документы передаются в офис РООЛО «ПАССД» и рассматриваются на заседании правления. При положительном решении правления, Ваши данные вносятся в реестр членов Ассоциации, выписывается членский билет и вручается значок Ассоциации.
            </p>

            <p>
                <span class="bold">Если Вы работаете в организации, не подведомственной Комитету по здравоохранению Ленинградской области,</span> Вам необходимо написать о своем решении на эл. адрес исполнительного директора Кореневой Татьяны Борисовны tanya_koreneva@mail.ru с указанием Ваших данных: ФИО полностью и контактный мобильный телефон. С Вами обязательно свяжутся.
            </p>

            <div class="join_motivation">
                <div><i>10</i></div>
                <p>
                    <span style="color: #086fba;">ПРИЧИН </span> СТАТЬ ЧЛЕНОМ <br/>
                    ПРОФЕССИОНАЛЬНОЙ АССОЦИАЦИИ <br/>
                    СПЕЦИАЛИСТОВ СЕСТРИНСКОГО ДЕЛА
                </p>
            </div>

            <p>
                Вступив в Профессиональную ассоциацию специалистов сестринского дела, вы получаете массу новых возможностей и  гарантированных прав, среди которых:
            </p>

            <div class="join__opportunities opportunities-right">
                <h5>Защита прав специалиста на рабочем месте</h5>
                <ul>
                    <li>Достижение лучших условий труда, обеспечение профессиональной безопасности и здоровья, переговоры по вопросам заработной платы</li>
                    <li>Консультации по вопросам урегулирования трудовых конфликтов,  конфликтов в коллективе; помощь в трудных жизненных обстоятельствах</li>
                    <li>Юридические консультации и правовая поддержка; разрешение этически сложных ситуаций</li>
                    <li>Поддержка и защита в вопросах аттестации и сертификации; профессиональные консультации и поддержка по вопросам трудоустройства и развития карьеры</li>
                    <li>Профессиональные консультации и поддержка по вопросам трудоустройства и развития карьеры</li>
                </ul>
            </div>

            <div class="join__opportunities opportunities-development">
                <h5>Развитие профессионализма и повышение статуса специалиста</h5>

                <ul>
                    <li>Обеспечение методической литературой и рекомендациями на льготных условиях</li>
                    <li>Участие в конкурсах профессионального мастерства и возможность максимально проявить свои таланты на региональном, национальном и международном уровне, получить широкое общественное признание со стороны своих коллег и пациентов</li>
                    <li>Поддержка при проведении сестринских  исследований и участие в разработках современной документации; обмен опытом с коллегами из других регионов в ходе научно-практических конференций, приобретение новых знаний за счёт участия в учебных программах и семинарах</li>
                </ul>
            </div>

            <div class="join__opportunities opportunities-fluence">
                <h5>Влияние на организацию и на политику в области здравоохранения</h5>

                <ul>
                    <li>Посредством выборов ключевых членов организации, руководителей региональной и национальной Ассоциации, голосования по документам, определяющим стратегию деятельности Ассоциации;</li>
                    <li>Посредством письменных обращений и пожеланий в адрес ключевых членов, руководителей региональной и национальной Ассоциации;</li>
                </ul>
            </div>

            <div class="join-responsibility">
                <p>Ответственность и обязанности члена Ассоциации</p>
                <ul>
                    <li>- качественное выполнение профессиональных обязанностей</li>
                    <li>- строгое соблюдение положений Этического кодекса</li>
                    <li>- ориентация на непрерывное повышение квалификации</li>
                    <li>- своевременная уплата членских взносов</li>
                </ul>
            </div>

            <article>
                <h4>Вступив в Ассоциацию, вы становитесь полноправным членом команды единомышленников, патриотов своей профессии.</h4>
                <p>
                    От Вашего имени и с Вашим непосредственным участием Ассоциация добивается развития сестринского дела на национальном уровне, ведет борьбу за становление профессии медицинской сестры в качестве автономной, независимой и обладающей высоким профессиональным, общественным и социально-экономическим статусом.
                </p>
            </article>
        </div>
    </section>

<?php
include "../../templates/site/footer.php" ?>