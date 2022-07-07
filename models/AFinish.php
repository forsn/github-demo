<?php
class AFinish extends BaseModel {

    public function tableName() {
        return '{{department}}';
    }

    /**
     * 模型验证规则
     */
    public function rules() {
      
        return array(
            array('code', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_title', 'required', 'message' => '{attribute} 不能为空'),
            array('exe_department', 'required', 'message' => '{attribute} 不能为空'),
            array('department_point', 'required', 'message' => '{attribute} 不能为空'),		
            array('congress_point', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_article', 'required', 'message' => '{attribute} 不能为空'),
            array('finish_time', 'required', 'message' => '{attribute} 不能为空'),
            array('point', 'required', 'message' => '{attribute} 不能为空'),
			array('code,proposal_title,department_point,exe_department,congress_point,point,finish_time,proposal_article','safe',), 
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
              //new!!
              'proposal_article'=>'议案内容',
              //new!!
              'exe_department'=>'执行部门',
              'department_point'=>'部门结案意见',
              'congress_point'=>'人大结案意见',
              'point'=>'是否结案',
              'finish_time'=>'结案日期',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

  
}
