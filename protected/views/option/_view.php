<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ques_id')); ?>:</b>
	<?php echo CHtml::encode($data->ques_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_text')); ?>:</b>
	<?php echo CHtml::encode($data->option_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_type')); ?>:</b>
	<?php echo CHtml::encode($data->option_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_info')); ?>:</b>
	<?php echo CHtml::encode($data->option_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weightage')); ?>:</b>
	<?php echo CHtml::encode($data->weightage); ?>
	<br />


</div>