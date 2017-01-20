<?php
/* @var $this BeneficiamentoController */
/* @var $model Beneficiamento */

$this->breadcrumbs=array(
	'Beneficiamentos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Beneficiamento', 'url'=>array('index')),
	array('label'=>'Create Beneficiamento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#beneficiamento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Beneficiamentos</h1>

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
	'id'=>'beneficiamento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'beneficiamento_id',
		'saf_id',
		'produto_beneficiado',
		'distancia',
		'tecnica',
		'produto_final',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
