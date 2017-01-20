<?php
/* @var $this AnimaisManejadosController */
/* @var $model AnimaisManejados */

$this->breadcrumbs=array(
	'Animais Manejadoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AnimaisManejados', 'url'=>array('index')),
	array('label'=>'Create AnimaisManejados', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#animais-manejados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Animais Manejadoses</h1>

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
	'id'=>'animais-manejados-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'esp_ani_manejadas_id',
		'saf_id',
		'manejo_id',
		'nome_comum',
		'nome_cientifico',
		'familia',
		/*
		'funcao_ecologica_no_saf',
		'origem',
		'estrato',
		'utilidade',
		'densidade',
		'porte',
		'informacoes_adicionais',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
