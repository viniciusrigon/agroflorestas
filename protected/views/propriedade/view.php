<?php
/* @var $this PropriedadeController */
/* @var $model Propriedade */

$this->breadcrumbs=array(
	'Propriedades'=>array('index'),
	$model->propriedade_id,
);

$this->menu=array(
	array('label'=>'List Propriedade', 'url'=>array('index')),
	array('label'=>'Create Propriedade', 'url'=>array('create')),
	array('label'=>'Update Propriedade', 'url'=>array('update', 'id'=>$model->propriedade_id)),
	array('label'=>'Delete Propriedade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->propriedade_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propriedade', 'url'=>array('admin')),
);
?>

<h1>View Propriedade #<?php echo $model->propriedade_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'propriedade_id',
		'saf_id',
		'area_total',
		'num_areas_saf',
		'praticas_agroflorestais',
		'perc_saf',
		'perc_cultivo',
		'perc_hortas',
		'perc_app',
		'perc_reservalegal',
		'dados_brutos',
	),
)); ?>
