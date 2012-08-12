<?php
$this->breadcrumbs=array(
	'Quiz Infos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List QuizInfo', 'url'=>array('index')),
	array('label'=>'Create QuizInfo', 'url'=>array('create')),
	array('label'=>'View QuizInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage QuizInfo', 'url'=>array('admin')),
);
?>

<h1>Update QuizInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>