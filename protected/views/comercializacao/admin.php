<?php
/* @var $this ComercializacaoController */
/* @var $model Comercializacao */

$this->breadcrumbs=array(
	'Comercializacaos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Comercializacao', 'url'=>array('index')),
	array('label'=>'Create Comercializacao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comercializacao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Comercializacaos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comercializacao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'comercializacao_id',
		'saf_id',
		'produto_escoado',
		'transporte',
		'forma_escoamento',
		'tipo_mercado',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
