<?php

class admin_banner extends AdminTable {
	public $TABLE = 'banner';
	public $IMG_SIZE = 480; // макс высота
	public $IMG_VSIZE = 144;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 5000;
	public $IMG_BIG_VSIZE = 5000;
	public $IMG_NUM = 1;
	public $ECHO_NAME = 'title';
	public $SORT = 'sort DESC';
	public $RUBS_NO_UNDER = 1;
//    public $FIELD_UNDER         = 'parent_id';
	public $NAME = "баннеры";
	public $NAME2 = "баннер";
	public $MULTI_LANG = 1;//добавляем поле

	function __construct() {
		$this->fld[] = new Field( "title", "Заголовок", 1, array( 'multiLang' => 1 ) );//, array('multiLang'=>1) добавляем в переменной мультиязычная ли она
		$this->fld[] = new Field( "active", "Опубликовать", 6, array( 'showInList' => 1, 'editInList' => 1 ) );
		$this->fld[] = new Field( "text", "Текст", 2, array( 'multiLang' => 1 ) );//, array('multiLang'=>1) добавляем в переменной мультиязычная ли она
		$this->fld[] = new Field( "alias", "Alias (генерируеться, если не заполнен)", 1 );
		$this->fld[] = new Field( "url", "Адрес для прехода при нажатии на кнопку", 1 );
//		$this->fld[] = new Field( "date", "Дата", 13 );
		$this->fld[] = new Field( "sort", "SORT", 4 );
	}

	function afterEdit( $row ) {
		$this->afterAdd( $row );
	}

	function afterAdd( $row ) {
		if ( empty( $row['alias'] ) ) {
			$qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit( $row['title_1'] ) . "' WHERE id = " . $row['id'];
			pdoExec( $qup );
		}
		//YandexTranslate( $row, $this->TABLE );
	}
}

class admin_callback extends AdminTable {
	public $TABLE = 'callback';

	public $ECHO_NAME = 'name';
	public $SORT = 'id DESC';
	public $RUBS_NO_UNDER = 1;
//    public $FIELD_UNDER         = 'parent_id';
	public $NAME = "заказы на обратный звонок";
	public $NAME2 = "заказ на обратный звонок";
//	public $MULTI_LANG = 1;//добавляем поле

	function __construct() {
		$this->fld[] = new Field( "name", "Имя", 1, array( 'editInList' => 1 ) );//, array('multiLang'=>1) добавляем в переменной мультиязычная ли она
		$this->fld[] = new Field( "phone", "Номер телефона", 1, array( 'editInList' => 1 ) );

	}

//	function afterEdit( $row ) {
//		$this->afterAdd( $row );
//	}

//	function afterAdd( $row ) {
//		if ( empty( $row['alias'] ) ) {
//			$qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit( $row['title_1'] ) . "' WHERE id = " . $row['id'];
//			pdoExec( $qup );
//		}
//		//YandexTranslate( $row, $this->TABLE );
//	}
}