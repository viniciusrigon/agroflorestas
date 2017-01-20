<?php
/* @var $this AgroflorestaController */
/* @var $model Agrofloresta */

$this->breadcrumbs=array(
	'Agroflorestas'=>array('index'),
	'Criar',
);
/*
$this->menu=array(
	array('label'=>'List Agrofloresta', 'url'=>array('index')),
	array('label'=>'Manage Agrofloresta', 'url'=>array('admin')),
);*/
?>

<h1>Agrofloresta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
