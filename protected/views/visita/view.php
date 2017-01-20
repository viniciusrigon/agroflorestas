<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->visita_id,
);

$this->menu=array(
	array('label'=>'List Visita', 'url'=>array('index')),
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'Update Visita', 'url'=>array('update', 'id'=>$model->visita_id)),
	array('label'=>'Delete Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->visita_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>

<h1>View Visita #<?php echo $model->visita_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'visita_id',
		'saf_id',
		'avaliacao_produtor',
		'observacoes',
	),
)); ?>
