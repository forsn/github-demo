<div class="box">
      <div class="box-content">
    	<div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>

            <a style="display:none;" id="j-delete" class="btn" href="javascript:;" onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i class="fa fa-trash-o"></i>删除</a>
        
        </div><!--box-header end-->
        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                <label style="margin-right:10px;">
                    <span>关键字：</span>
                    <input style="width:200px;" class="input-text" type="text" name="keywords" value="<?php echo Yii::app()->request->getParam('keywords');?>">
                </label>
                <button class="btn btn-blue" type="submit">查询</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
               
                <tbody>
                  	<?php foreach($arclist as $v){ ?>
                    <tr>
                        
                        <th ><?php echo $model->getAttributeLabel('proposal_title');?></th>
                        <td ><?php echo $v->proposal_title; ?></td>

                        
                        <th style='width:100px;'><?php echo $model->getAttributeLabel('code');?></th>                
                        <td style='width:300px;'><?php echo $v->code; ?></td>
                        
                    </tr>

                    <tr>

                        <th style='width:500px;'><?php echo $model->getAttributeLabel('department');?></th>                                                  
                        <td style='width:500px;'><?php echo $v->department; ?></td>

                    </tr>

                    <tr>

                        <th style='width:100px;'><?php echo $model->getAttributeLabel('department_point');?></th>
                        <td style='width:300px;'><?php echo $v->department_point; ?></td>

                        <th style='width:100px;'><?php echo $model->getAttributeLabel('congress_point');?></th>       <td style='width:300px;'><?php echo $v->congress_point; ?></td>

                    </tr>

                    <tr>

                        <th style='width:100px;'><?php echo $model->getAttributeLabel('point');?></th>               
                        <td style='width:300px;'><?php echo $v->point; ?></td>
                        <th style='width:100px;'>操作</th>
                        <td style='width:300px;'>
            
            <a class="btn" href="<?php echo $this->createUrl('update', array('id'=>$v->id));?>" title="编辑"><i class="fa fa-edit"></i></a>

        <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id;?>', deleteUrl);" title="删除"><i class="fa fa-trash-o"></i></a>
                        </td>

                    </tr>
                    <tr>
                    <td>
                    </td>
                    </tr>

                    



					<?php } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
<script>
var deleteUrl = '<?php echo $this->createUrl('delete', array('id'=>'ID')); ?>';
</script>
