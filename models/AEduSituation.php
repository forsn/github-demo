<?php
class AEduSituation extends BaseModel {

    public function tableName() {
        return '{{edusituation}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            array('name', 'required', 'message' => '{attribute} 不能为空'),
            array('edudegree', 'required', 'message' => '{attribute} 不能为空'),
		
			array('name,edudegree','safe',), 
			//array($s1,'safe'),
		);
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array(
		 
		);
    }


    /**
     * 属性标签
     */
    public function attributeLabels() {
     
         return array(
             'id' => 'ID',
              'code' =>'编码',
              'name'  => '姓名',
              'edudegree'=>'文化程度',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

  
}
