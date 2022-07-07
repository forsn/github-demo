<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>课程信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c"> 
                <li class="current">课程信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
        <div style="display:block;" class="box-detail-tab-item">
            <table>

        <tr >
            <td rowspan="2"><?php echo $form->labelEx($model, 'proposal_title'); ?></td>
            <td rowspan="2">
                <?php echo $form->textField($model, 'proposal_title', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'proposal_title', $htmlOptions = array()); ?>
            </td>

            <td><?php echo $form->labelEx($model, 'department'); ?></td>
            <td>
                <?php echo $form->textField($model, 'department', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'department' , $htmlOptions = array()); ?>
        <tr>    
            <td ><?php echo $form->labelEx($model, 'code'); ?></td>
            <td >
                <?php echo $form->textField($model, 'code', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'code', $htmlOptions = array()); ?>
            </td>
        </tr>

        </tr>
        
        
        <tr>

            <td><?php echo $form->labelEx($model, 'department_point'); ?></td>
            <td>
            <?php echo $form->textField($model, 'department_point', array('class' => 'input-text')); ?>
            <?php echo $form->error($model, 'department_point', $htmlOptions = array()); ?>
            </td> 
            
             <td rowspan='2'><?php echo $form->labelEx($model, 'point'); ?></td>
            <td rowspan="2">
                <?php echo $form->textField($model, 'point', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'point', $htmlOptions = array()); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model, 'congress_point'); ?></td>
            <td>
                <?php echo $form->textField($model, 'congress_point', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'congress_point', $htmlOptions = array()); ?>
            </td>
        </tr>
        
                    
         
                </table>
                 
            </div><!--box-detail-tab-item end   style="display:block;"-->
            
        </div><!--box-detail-bd end-->
        
        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>
       
    <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
