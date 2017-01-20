<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	$model->familia_id,
);
/*
$this->menu=array(
	array('label'=>'List Familia', 'url'=>array('index')),
	array('label'=>'Create Familia', 'url'=>array('create')),
	array('label'=>'Update Familia', 'url'=>array('update', 'id'=>$model->familia_id)),
	array('label'=>'Delete Familia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->familia_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Familia', 'url'=>array('admin')),
);*/
?>

<h1>Familia</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'familia_id',
		'saf_id',
		'local_origem',
		'composicao_renda',
		'dados_brutos',
	),
)); ?>
