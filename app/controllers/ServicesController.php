<?php

namespace app\controllers;

use app\models\Banner;
use Yii;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use app\models\ServiceCategory;
use app\models\ServiceItem;
use app\components\Seo;
use yii\data\Pagination;


class ServicesController extends \app\components\BaseController {

	public function behaviors() {
		return [
			'verbs' => [
				'class'   => VerbFilter::className(),
				'actions' => [
					'index' => [ 'get' ],

				]
			],
		];
	}

	public function beforeAction( $action ) {
		$this->enableCsrfValidation = false;

		return parent::beforeAction( $action );
	}

	public function actionIndex() {
		Seo::setByTemplate( 'default', [

			'name' => 'Sartorius',
		] );

		$content['models'] = ServiceCategory::find()->where( [ 'parent_category_id' => '-1' ] )->joinWith( 'info' )->orderBy( 'sort DESC' )->all();
		$content['banner'] = Banner::find()->where( [ 'active' => 1 ] )->joinWith( 'info' )->orderBy( 'sort DESC' )->all();

		return $this->render( 'index', [
			'content' => $content,
		] );
	}

	public function actionCategory() {
		Seo::setByTemplate( 'default', [

			'name' => 'Sartorius',
		] );
		$content['model']  = ServiceCategory::find()->where( [ 'alias' => $_GET['category'] ] )->joinWith( 'info' )->one();
		$content['models'] = ServiceItem::find()->where( [ 'parent_category_id' => $content['model']->id ] )->joinWith( 'info' )->orderBy( 'sort DESC' )->all();
		$content['banner'] = Banner::find()->where( [ 'active' => 1 ] )->joinWith( 'info' )->orderBy( 'sort DESC' )->all();

		return $this->render( 'category', [
			'content' => $content,
		] );
	}

	public function actionView() {
		Seo::setByTemplate( 'default', [

			'name' => 'Sartorius',
		] );
		$content['category'] = ServiceCategory::find()->where( [ 'alias' => $_GET['category'] ] )->joinWith( 'info' )->one();
		$content['model']    = ServiceItem::find()->where( [ 'alias' => $_GET['alias'] ] )->joinWith( 'info' )->one();

		return $this->render( 'view', [
			'content' => $content
		] );
	}
}