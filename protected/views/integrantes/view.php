<?php
/* @var $this IntegrantesController */
/* @var $model Integrantes */



?>

<h1>Integrantes</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'integrantes_id',
		'familia_id',
		'nome',
		'ano_nasc',
		'parentesco',
		'ocupacao',
		'tempo_residencia',
	),
)); ?>
