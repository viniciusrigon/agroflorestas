<?php
/* @var $this AgroflorestaController */
/* @var $model Agrofloresta */

$this->breadcrumbs=array(
	'Agroflorestas'=>array('index'),
	$model->saf_id=>array('view','id'=>$model->saf_id),	
);

/*
$this->menu=array(
	array('label'=>'List Agrofloresta', 'url'=>array('index')),
	array('label'=>'Create Agrofloresta', 'url'=>array('create')),
	array('label'=>'View Agrofloresta', 'url'=>array('view', 'id'=>$model->saf_id)),
	array('label'=>'Manage Agrofloresta', 'url'=>array('admin')),
);*/
?>

<h1>Agrofloresta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
