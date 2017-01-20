<?php
/* @var $this PerspectivaController */
/* @var $model Perspectiva */

$this->breadcrumbs=array(
	'Perspectivas'=>array('index'),
	$model->perspectiva_id,
);

$this->menu=array(
	array('label'=>'List Perspectiva', 'url'=>array('index')),
	array('label'=>'Create Perspectiva', 'url'=>array('create')),
	array('label'=>'Update Perspectiva', 'url'=>array('update', 'id'=>$model->perspectiva_id)),
	array('label'=>'Delete Perspectiva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->perspectiva_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perspectiva', 'url'=>array('admin')),
);
?>

<h1>View Perspectiva #<?php echo $model->perspectiva_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'perspectiva_id',
		'saf_id',
		'imagina',
		'rede_apoio',
		'visitas',
		'dados_brutos',
	),
)); ?>
