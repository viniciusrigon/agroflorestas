<?php
/* @var $this PraticasManejoController */
/* @var $model PraticasManejo */

$this->breadcrumbs=array(
	'Praticas Manejos'=>array('index'),
	$model->manejo_id,
);

$this->menu=array(
	array('label'=>'List PraticasManejo', 'url'=>array('index')),
	array('label'=>'Create PraticasManejo', 'url'=>array('create')),
	array('label'=>'Update PraticasManejo', 'url'=>array('update', 'id'=>$model->manejo_id)),
	array('label'=>'Delete PraticasManejo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->manejo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PraticasManejo', 'url'=>array('admin')),
);
?>

<h1>View PraticasManejo #<?php echo $model->manejo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'manejo_id',
		'saf_id',
		'propriedade_id',
		'area_manejada',
		'APP',
		'reserva_legal',
		'historico',
		'antes_saf',
		'adubacao',
		'num_pessoas_manejo',
		'terceirizado',
		'mutirao',
		'dados_brutos',
	),
)); ?>
