<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>议案处理跟进</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c"> 
                <li class="current">议案处理跟进</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
        <div style="display:block;" class="box-detail-tab-item">
            <table>
    <tr>

        <td rowspan="2"><?php echo $form->labelEx($model, 'proposal_title'); ?></td>
        <td rowspan="2">
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
            <td><?php echo $form->labelEx($model, 'proposal_time'); ?></td>
            <td>
                <?php echo $form->textField($model, 'proposal_time', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'proposal_time', $htmlOptions = array()); ?>
            </td>
        </tr>

        <tr>
            <td><?php echo $form->labelEx($model, 'proposal_execute'); ?></td>
            <td>
                <?php echo $form->textField($model, 'proposal_execute', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'proposal_execute', $htmlOptions = array()); ?>
            </td>

            <td><?php echo $form->labelEx($model, 'proposal_supervisor'); ?></td>
            <td>
                <?php echo $form->textField($model, 'proposal_supervisor', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'proposal_supervisor', $htmlOptions = array()); ?>
            </td>
        </tr>

         <tr>
             <td colspan="4" style="text-align: center;"><?php echo $form->labelEx($model, 'proposal_action'); ?></td>
        </tr>
        <tr>
            <td colspan="4" style="height:150px;">
                <?php echo $form->textField($model, 'proposal_action', array('class' => 'input-text', 'style'=>'width:97%;height:100px','maxlength' => '2000','placeholder'=>"本栏目限填2000字")); ?>
                <?php echo $form->error($model, 'proposal_action', $htmlOptions = array()); ?>
            </td>
        </tr>


        <tr>
        <td><?php echo $form->labelEx($model, 'proposal_update'); ?></td>
            <td colspan="3">
                <?php echo $form->textField($model, 'proposal_update', array('class' => 'input-text')); ?>
                <?php echo $form->error($model, 'proposal_update', $htmlOptions = array()); ?>
        </td>
        </tr>

          
         
                </table>
                 
            </div><!--box-detail-tab-item end   style="display:block;"-->
            
        </div><!--box-detail-bd end-->
        
        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>
       
    <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->

<script>
    $(function(){
        var proposal_time=$('#ASupervise_proposal_time');
        var proposal_update=$('#ASupervise_proposal_update');
        proposal_time.on('click', function(){
            WdatePicker({startDate:'%y-%M-%D 00:00:00',dateFmt:'yyyy-MM-dd HH:mm:ss'});});
        proposal_update.on('click', function(){
            WdatePicker({startDate:'%y-%M-%D 00:00:00',dateFmt:'yyyy-MM-dd HH:mm:ss'});});

    });
</script>
