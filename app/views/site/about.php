<?php  use yii\helpers\Url; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="<?= Url::home() ?>"><?= $this->params['home-page'] ?></a></li>
                <li><a><?= $this->params['about-us-page'] ?></a></li>
            </ol>
        </div>
    </div>
</div>
<main class="main-content background-image">
    <div class="container container--bordered">
        <div class="row">
            <div class="col-sm-12">
                <!-- about us-->
                <section class="section section--about-us">
                    <h1 class="section-title section-title--about-us"><?= $this->params['about-us-page'] ?></h1>
                    <div class="text">
                        <?=$this->params['text-about-page'] ?>
                    </div>
                    <div class="gallery-slider">
                        <div class="owl-carousel owl-theme owl-wrapper" id="about-us-carousel">
	                        <?php foreach ($content['model']->bimgs as $img): ?>
                                <div class="item"><img src="<?=$img ?>" alt=""></div>
	                        <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>