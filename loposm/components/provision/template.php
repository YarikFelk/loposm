<section>
    <div class="container__inner">
        <div class="documents__row">
            <?php if(isset($documents)) :?>
            <?php foreach($documents as $document) :?>
            <div class="document__item">
                <a href="<?=$document['file']?>"
                   data-fancybox data-caption="Caption #1">
                    <img src="<?=$document['img']?>"
                         alt="" />
                    <?php if ($document['text-image']):?>
                        <p class="document_img--on-text">
                            <?=$document['text']?>
                        </p>
                    <?php endif;?>
                </a>
                <p>
                    <?=$documents['text']?>
                </p>
            </div>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>