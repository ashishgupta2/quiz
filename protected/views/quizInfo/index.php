<?php
$this->breadcrumbs=array(
	'Quiz Infos',
);

$this->menu=array(
	array('label'=>'Create QuizInfo', 'url'=>array('create')),
	array('label'=>'Manage QuizInfo', 'url'=>array('admin')),
);
?>

<h1>Quiz Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
