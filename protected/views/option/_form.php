<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'option-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ques_id'); ?>
		<?php echo $form->textField($model,'ques_id'); ?>
		<?php echo $form->error($model,'ques_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'option_text'); ?>
		<?php echo $form->textField($model,'option_text',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'option_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'option_type'); ?>
		<?php echo $form->textField($model,'option_type',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'option_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'option_info'); ?>
		<?php echo $form->textField($model,'option_info',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'option_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weightage'); ?>
		<?php echo $form->textField($model,'weightage'); ?>
		<?php echo $form->error($model,'weightage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by'); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->