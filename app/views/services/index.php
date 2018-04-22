<?php  use yii\helpers\Url; ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<ol class="breadcrumb">
				<li><a href="<?= Url::home() ?>"><?= $this->params['home-page'] ?></a></li>
				<li><a><?= $this->params['services-page'] ?></a></li>
			</ol>
		</div>
	</div>
</div>
<!-- services banner-->
<section class="section section--slider">
	<div class="carousel bs-slider slide control-square indicators-line" id="service-slider" data-ride="carousel" data-pause="hover" data-interval="5000">
		<ol class="carousel-indicators">
			<?php $i = -1; ?>
			<?php foreach ( $content['banner'] as $model ) : $i+=1; ?>
				<?php if ( $i == 0 ): ?>
					<li class="active" data-target="#service-slider" data-slide-to="<?= $i; ?>"></li>
				<?php else: ?>
					<li data-target="#service-slider" data-slide-to="<?= $i; ?>"></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php $i = 1; ?>
			<?php foreach ( $content['banner'] as $model ) : ?>
				<?php if ( $i == 1 ): $i+=1;?>
					<div class="item clearfix active" style="background-image: url(<?= $model->bimg ?>);">
						<div class="bs-slider-overlay"></div>
					</div>
				<?php else: ?>
					<div class="item" style="background-image: url(<?= $model->bimg ?>);">
						<div class="bs-slider-overlay"></div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<a class="left carousel-control" href="#service-slider" role="button" data-slide="prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#service-slider" role="button" data-slide="next"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
	</div>
</section>
<!-- main content-->
<main class="main-content background-image">
	<div class="container container--bordered">
		<div class="row">
			<div class="col-sm-12">
				<!-- service section-->
				<section class="section section--services">
					<h2 class="section-title"><?= $this->params['title-index-service-section-service-page'] ?></h2>
					<div class="row equal equal-md-column">
						<?php foreach ($content['models'] as $model) : ?>
							<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0">
								<article class="widget widget--fluid">
									<div class="widget-background" style="background-image: url(<?=$model->bimg ?>);"></div>
									<header class="news-post--header">
										<h3 class="widget-title title--colored"><?=$model->info->title ?></h3>
									</header>
									<div class="widget-description"><?=$model->info->description ?></div><a class="widget-button widget-button--fluid" href="<?= Url::toRoute( '/services/'.$model->alias ) ?>"><?= $this->params['go-to-the-service-index'] ?></a>
								</article>
							</div>
						<?php endforeach; ?>
					</div>
				</section>
				<!-- seo text -->
				<section class="section section--services-post">
					<h3 class="section-title"><?= $this->params['services-page'] ?></h3>
					<div class="text">
						<?= $this->params['seo-text-index-service-page'] ?>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>