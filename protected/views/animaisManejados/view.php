<?php
/* @var $this AnimaisManejadosController */
/* @var $model AnimaisManejados */

?>

<h1><?php echo $model->nome_comum; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'esp_ani_manejadas_id',
		'saf_id',
		'manejo_id',
		'nome_comum',
		'nome_cientifico',
		'familia',
		'funcao_ecologica_no_saf',
		'origem',
		'estrato',
		'utilidade',
		'densidade',
		'porte',
		'informacoes_adicionais',
	),
)); ?>
