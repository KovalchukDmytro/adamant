<?php use yii\helpers\Url; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="<?= Url::home() ?>"><?= $this->params['home-page'] ?></a></li>
                <li><a href="<?= Url::toRoute( '/services' ) ?>"><?= $this->params['services-page'] ?></a></li>
                <li>
                    <a href="<?= Url::toRoute( '/services/' . $content['category']->alias ) ?>"><?= $content['category']->info->title ?></a>
                </li>
                <li><a><?= $content['model']->info->title ?></a></li>
            </ol>
        </div>
    </div>
</div>
<main class="main-content background-image">
    <div class="container container--bordered">
        <div class="row">
            <div class="col-sm-12">
                <!-- news-post-->
                <section class="section section--news-post">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="post-gallery">
								<?php foreach ( $content['model']->bimgs as $img ): ?>
                                    <img class="gallery-image" src="<?= $img ?>" alt="">
								<?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8">
                            <h3 class="post-title"><?= $content['model']->info->title ?></h3>
                            <div class="text"><?= $content['model']->info->text ?></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>