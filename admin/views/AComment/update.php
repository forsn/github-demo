<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>议案评价</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c"> 
                <li class="current">议案评价</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
        <div style="display:block;" class="box-detail-tab-item">
            <table>
        <tr>
        <td ><?php echo $form->labelEx($model, 'proposal_title'); ?></td>
        <td >
        <?php echo $form->textField($model, 'proposal_title', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'proposal_title', $htmlOptions = array()); ?>
        </td>
        
        <td ><?php echo $form->labelEx($model, 'code'); ?></td>
        <td >
        <?php echo $form->textField($model, 'code', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'code', $htmlOptions = array()); ?>
        </td>
        </tr>
       
        <tr>
            <td><?php echo $form->labelEx($model, 'proposal_pointer'); ?></td>
            <td>
                <?php echo $form->textField($model, 'proposal_pointer', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'proposal_pointer', $htmlOptions = array()); ?>
            </td>
            <td><?php echo $form->labelEx($model, 'exe_department'); ?></td>
            <td>
                <?php echo $form->textField($model, 'exe_department', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'exe_department', $htmlOptions = array()); ?>
            </td>
        </tr>
        
        <tr>
            <td colspan="4" style='text-align: center;'><?php echo $form->labelEx($model, 'proposal_article'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="height:150px;">
                <?php echo $form->textArea($model, 'proposal_article', array('class' => 'input-text', 'style'=>'width:97%;height:100px','maxlength' => '2000','placeholder'=>"本栏目限填2000字")); ?>
                <?php echo $form->error($model, 'proposal_article', $htmlOptions = array()); ?>
            </td>
        </tr>
        
        <tr>     
             <td colspan="4" style="text-align: center;"><?php echo $form->labelEx($model, 'p_comment'); ?></td>
        </tr>
        <tr>
                <td colspan="4" height="100px">
                <?php echo $form->textArea($model, 'p_comment', array('class' => 'input-text','style'=>'width:97%;height:100px','maxlength' => '2000','placeholder'=>"本栏目限填2000字")); ?>
                <?php echo $form->error($model, 'p_comment', $htmlOptions = array()); ?>
                </td>
        </tr>

                    
         
                </table>
                 
            </div><!--box-detail-tab-item end   style="display:block;"-->
            
        </div><!--box-detail-bd end-->
        
        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>
       
    <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
