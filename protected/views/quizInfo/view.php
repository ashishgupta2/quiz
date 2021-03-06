<?php
$this->breadcrumbs=array(
	'Quiz Infos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List QuizInfo', 'url'=>array('index')),
	array('label'=>'Create QuizInfo', 'url'=>array('create')),
	array('label'=>'Update QuizInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete QuizInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage QuizInfo', 'url'=>array('admin')),
);
?>

<h1>View QuizInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'time_limit',
		'create_time',
		'created_by',
		'update_time',
		'updated_by',
	),
)); ?>
