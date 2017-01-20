<?php
/* @var $this VegetaisManejadosController */
/* @var $model VegetaisManejados */

$this->breadcrumbs=array(
	'Vegetais Manejadoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VegetaisManejados', 'url'=>array('index')),
	array('label'=>'Create VegetaisManejados', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vegetais-manejados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vegetais Manejadoses</h1>

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
	'id'=>'vegetais-manejados-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'esp_veg_manejadas_id',
		'saf_id',
		'manejo_id',
		'nome_comum',
		'nome_cientifico',
		'familia_botanica',
		/*
		'funcao_ecologica_no_saf',
		'origem_plantio',
		'estrato',
		'utilidade',
		'espacamento',
		'habito',
		'informacoes_adicionais',
		'meio_implantacao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
