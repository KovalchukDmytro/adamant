<?php

/*
 * Словарь
 * */

class admin_slovar extends AdminTable
{
    public $TABLE           = 'slovar';
    public $ECHO_NAME       = 'title';
    public $NAME            = "Настройки сайта";
    public $NAME2           = "настройку";
    public $MULTI_LANG      = 1;
    public $SORT            = "sort";
    public $FIELD_UNDER     = 'parent_id';

	public $IMG_SIZE = 480; // макс высота
	public $IMG_VSIZE = 144;
	public $IMG_RESIZE_TYPE = 1;
	public $IMG_BIG_SIZE = 1500;
	public $IMG_BIG_VSIZE = 1500;
	public $IMG_NUM = 25;

    function __construct()
    {
        $this->fld[] = new Field("title","Название",1);
        $this->fld[] = new Field("alias","Алиас",1, array('showInList'=>1));
        $this->fld[] = new Field("value","Значение",2, ['showInList'=>1,'multiLang'=>1]);
//        $this->fld[] = new Field("parent_id","В разделе", 9, array(
//                                'showInList'=>0, 'editInList'=>0, 'valsFromTable'=>'text_categories', 'valsFromCategory'=>-1, 
//                                'valsEchoField'=>'name'));
        $this->fld[] = new Field("creation_time","Date of creation",4);
        $this->fld[] = new Field("update_time","Date of update",4);
        $this->fld[] = new Field("sort","SORT",4);
    }
//
//    public function afterAdd($row){
//        YandexTranslate($row, $this->TABLE);
//    }
//
//    public function afterEdit($row){
//        YandexTranslate($row, $this->TABLE);
//    }
}