<?php
class AExecute extends BaseModel {

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
            array('proposal_article', 'required', 'message' => '{attribute} 不能为空'),
            array('handup_time', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_pointer', 'required', 'message' => '{attribute} 不能为空'),
            array('exe_department', 'required', 'message' => '{attribute} 不能为空'),
			array('code,proposal_title, proposal_article, handup_time, proposal_pointer, exe_department','safe',), 
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
              'proposal_title'  => '议案名称',
              'proposal_article'=>'议案内容',             
              'handup_time'=>'议案提交时间',
              'proposal_pointer'=>'提案人',             
              'exe_department'=>'执行方',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

  
}
