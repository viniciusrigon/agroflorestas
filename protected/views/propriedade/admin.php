<?php
/* @var $this PropriedadeController */
/* @var $model Propriedade */

$this->breadcrumbs=array(
	'Propriedades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Propriedade', 'url'=>array('index')),
	array('label'=>'Create Propriedade', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#propriedade-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Propriedades</h1>

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
	'id'=>'propriedade-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'propriedade_id',
		'saf_id',
		'area_total',
		'num_areas_saf',
		'praticas_agroflorestais',
		'perc_saf',
		/*
		'perc_cultivo',
		'perc_hortas',
		'perc_app',
		'perc_reservalegal',
		'dados_brutos',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
