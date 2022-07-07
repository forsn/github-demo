<?php
class AAA extends BaseModel {

    public function tableName() {
        return '{{aaa}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            array('code', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_title', 'required', 'message' => '{attribute} 不能为空'),
            array('department', 'required', 'message' => '{attribute} 不能为空'),
            array('department_point', 'required', 'message' => '{attribute} 不能为空'),		
            array('congress_point', 'required', 'message' => '{attribute} 不能为空'),
            array('point', 'required', 'message' => '{attribute} 不能为空'),
			array('code,value','safe',), 
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
              'code' =>'议案编码',
              'proposal_title'=>'议案标题',
              'department'=>'执行部门',
              'department_point'=>'部门结案意见',
              'congress_point'=>'人大结案意见',
              'point'=>'是否结案',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

  
}
