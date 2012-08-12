<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ques_id'); ?>
		<?php echo $form->textField($model,'ques_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'option_text'); ?>
		<?php echo $form->textField($model,'option_text',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'option_type'); ?>
		<?php echo $form->textField($model,'option_type',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'option_info'); ?>
		<?php echo $form->textField($model,'option_info',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weightage'); ?>
		<?php echo $form->textField($model,'weightage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->