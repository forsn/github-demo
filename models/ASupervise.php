<?php
class ASupervise extends BaseModel {

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
            array('proposal_time', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_update', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_action', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_execute', 'required', 'message' => '{attribute} 不能为空'),
            array('proposal_supervisor', 'required', 'message' => '{attribute} 不能为空'),
    
		
			array('code, proposal_title, proposal_time, proposal_action, proposal_execute, proposal_supervisor','safe',), 
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
              'proposal_time'=>'交办时间',
              'proposal_update'=>'进度更新时间',
              'proposal_action'=>'议案落实进度',
              'proposal_execute'=>'议案执行人',
              'proposal_supervisor'=>'执行监督人',
);
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

  
}
