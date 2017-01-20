<?php
/* @var $this BeneficiamentoController */
/* @var $model Beneficiamento */

$this->breadcrumbs=array(
	'Beneficiamentos'=>array('index'),
	$model->beneficiamento_id,
);

$this->menu=array(
	array('label'=>'List Beneficiamento', 'url'=>array('index')),
	array('label'=>'Create Beneficiamento', 'url'=>array('create')),
	array('label'=>'Update Beneficiamento', 'url'=>array('update', 'id'=>$model->beneficiamento_id)),
	array('label'=>'Delete Beneficiamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->beneficiamento_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Beneficiamento', 'url'=>array('admin')),
);
?>

<h1>View Beneficiamento #<?php echo $model->beneficiamento_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'beneficiamento_id',
		'saf_id',
		'produto_beneficiado',
		'distancia',
		'tecnica',
		'produto_final',
		'tipo_producao',
		'escala_producao',
		'destino_principal',
		'dificuldades_beneficiamento',
		'dificuldades_legislacao',
		'local',
		'inicio_beneficiamento',
		'implantacao',
		'pontos_positivos',
		'entraves',
		'dados_brutos',
	),
)); ?>
