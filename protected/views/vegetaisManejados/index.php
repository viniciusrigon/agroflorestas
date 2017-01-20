<?php
/* @var $this VegetaisManejadosController */
/* @var $model VegetaisManejados */
/* @var $dataProvider CActiveDataProvider */

$manejo_id = $_GET["manejo_id"];

$this->menu=array(
	array('label'=>'Criar vegetal manejado', 'url'=>array('/VegetaisManejados/Create', 'manejo_id'=>$manejo_id)),	
);
?>

<h1>Vegetais Manejados</h1>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'animais-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(		
		'nome_comum',
		'nome_cientifico',		
		'familia_botanica',
		'funcao_ecologica_no_saf',
		'origem_plantio',		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
));

?>
