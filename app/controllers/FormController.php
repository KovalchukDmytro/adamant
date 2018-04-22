<?php

namespace app\controllers;

use app\models\Banner;
use app\models\Callback;
use app\models\Feedback;
use app\models\Nashi_raboty;
use app\models\Novosti;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\Vacansii;
use app\models\Seo;
use app\models\Service_1;
use app\models\Service_2;
use app\models\Service_3;
use app\models\Service_4;

class FormController extends \app\components\BaseController {
	public function actionSave() {
		//$general_url="http://1168422.forcecrm.web.hosting-test.net";
		//$to = "kovalchuk.online@gmail.com";
		//$from = "test31@memori.com.ua";

		$model  = new Callback();
		$method = $_SERVER['REQUEST_METHOD'];
		if ( $method == 'GET' ) {
			//$page  = $_GET['page'];
			$name  = $_GET['name'];
			$phone = $_GET['phone'];
		}

		if ( $method == 'POST' ) {
			//$page  = $_POST['page'];
			$name  = $_POST['name'];
			$phone = $_POST['phone'];
		}

		//$model->page=$page;
		$model->name  = $name;
		$model->phone = $phone;


		$model->save();


//
//		$subject = "Заполнена контактная форма с ".$_SERVER['HTTP_REFERER'].". ".$page;
//
//
//		$message = "Имя: ".$name
//		           ."<br/>Телефон: ".$phone
//		           ."<br/>Email: ".$mail
//		           ."<br/>Комментарий: ".$text
//		           ."<br/>Страница заполнения: ".$page;
//
//		if (!empty($_FILES['file']['name'])){
//			$m=Yii::$app->mailer->compose()
//			                    ->setFrom($from)
//			                    ->setTo($to)
//			                    ->setSubject($subject)
//			                    ->setTextBody('Текст сообщения')
//			                    ->setHtmlBody($message)
//			                    ->attach($general_url.$model->file);
//			$m->send();
//		}
//		else{
//			$m=Yii::$app->mailer->compose()
//			                    ->setFrom($from)
//			                    ->setTo($to)
//			                    ->setSubject($subject)
//			                    ->setTextBody('Текст сообщения')
//			                    ->setHtmlBody($message);
//			$m->send();
//		}


	}

}
