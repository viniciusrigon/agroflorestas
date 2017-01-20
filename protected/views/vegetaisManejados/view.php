<?php
/* @var $this VegetaisManejadosController */
/* @var $model VegetaisManejados */

$this->menu=array(
	array('label'=>'Colheita', 'url'=>array('/colheita/edit', 'vegetais_id'=>$model->esp_veg_manejadas_id)),
	);
?>

<h1><?php echo $model->nome_comum; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'esp_veg_manejadas_id',		
		'manejo_id',
		'nome_comum',
		'nome_cientifico',
		'familia_botanica',
		'funcao_ecologica_no_saf',
		'origem_plantio',
		'estrato',
		'utilidade',
		'espacamento',
		'habito',
		'informacoes_adicionais',
		'meio_implantacao',
	),
)); ?>
