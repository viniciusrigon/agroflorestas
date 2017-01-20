<?php
/* @var $this ComercializacaoController */
/* @var $model Comercializacao */

$this->breadcrumbs=array(
	'Comercializacaos'=>array('index'),
	$model->comercializacao_id,
);

$this->menu=array(
	array('label'=>'List Comercializacao', 'url'=>array('index')),
	array('label'=>'Create Comercializacao', 'url'=>array('create')),
	array('label'=>'Update Comercializacao', 'url'=>array('update', 'id'=>$model->comercializacao_id)),
	array('label'=>'Delete Comercializacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->comercializacao_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comercializacao', 'url'=>array('admin')),
);
?>

<h1>View Comercializacao #<?php echo $model->comercializacao_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comercializacao_id',
		'saf_id',
		'produto_escoado',
		'transporte',
		'forma_escoamento',
		'tipo_mercado',
		'estrutura_comerc',
		'local_comerc',
		'consumidor_final',
		'dificuldade_comerc',
		'dificuldades_legislacao',
		'inicializacao',
		'implantacao',
		'pontos_positivos',
		'dificuldade',
		'receita_total',
		'perc_receita_saf',
		'dados_brutos',
	),
)); ?>
