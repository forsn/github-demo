<?php
class AComment extends BaseModel {

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
            array('proposal_pointer', 'required', 'message' => '{attribute} 不能为空'),
            array('exe_department', 'required', 'message' => '{attribute} 不能为空'),
            array('p_comment', 'required', 'message' => '{attribute} 不能为空'),
			array('code,proposal_title,proposal_article,proposal_pointer,exe_department,p_comment','safe',), 
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
              'proposal_pointer'=>'提案人',
              //new!!
              'exe_department'=>'执行部门',
              'p_comment'=>'人大评价',
 );
}

    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
	
	

  
}
