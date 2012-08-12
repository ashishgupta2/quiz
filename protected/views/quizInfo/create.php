<?php
$this->breadcrumbs=array(
	'Quiz Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List QuizInfo', 'url'=>array('index')),
	array('label'=>'Manage QuizInfo', 'url'=>array('admin')),
);
?>

<h1>Create QuizInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>