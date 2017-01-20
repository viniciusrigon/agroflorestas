<?php
/* @var $this IntegracaoManejoController */
/* @var $model IntegracaoManejo */

$this->breadcrumbs=array(
	'Integracao Manejos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List IntegracaoManejo', 'url'=>array('index')),
	array('label'=>'Create IntegracaoManejo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#integracao-manejo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Integracao Manejos</h1>

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
	'id'=>'integracao-manejo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'integracao_id',
		'manejo_id',
		'integracao_saf',
		'material_propativo',
		'mudas_semestes',
		'viveitos_proximos',
		/*
		'custos_estimados_saf',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
