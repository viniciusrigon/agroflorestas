<?php
/* @var $this IntegracaoManejoController */
/* @var $model IntegracaoManejo */

$this->breadcrumbs=array(
	'Integracao Manejos'=>array('index'),
	$model->integracao_id,
);

$this->menu=array(
	array('label'=>'List IntegracaoManejo', 'url'=>array('index')),
	array('label'=>'Create IntegracaoManejo', 'url'=>array('create')),
	array('label'=>'Update IntegracaoManejo', 'url'=>array('update', 'id'=>$model->integracao_id)),
	array('label'=>'Delete IntegracaoManejo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->integracao_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IntegracaoManejo', 'url'=>array('admin')),
);
?>

<h1>View IntegracaoManejo #<?php echo $model->integracao_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'integracao_id',
		'manejo_id',
		'integracao_saf',
		'material_propativo',
		'mudas_semestes',
		'viveitos_proximos',
		'custos_estimados_saf',
	),
)); ?>
