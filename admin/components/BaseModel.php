<?php

class BaseModel extends CActiveRecord {

    public $select_id='';
    public $select_code='';
    public $select_title='';
    public $select_item1='';
    public $select_item2='';
    public $select_item3='';
    
    protected function afterSave() {
        parent::afterSave();
    }
    
    protected function afterDelete() {
        parent::afterDelete();
    }

    protected function safeField() {
       $dm=$this->attributeLabels();
       $s1='';$b1='';
       foreach($dm as $k=>$v)
       {
         $s1.=$b1.$k;
         $b1=',';
       }
       return $s1;
    }
}
