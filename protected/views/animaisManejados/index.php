<?php
/* @var $this AnimaisManejadosController */
/* @var $model AnimaisManejados */
/* @var $dataProvider CActiveDataProvider */

$manejo_id = $_GET["manejo_id"];

$this->menu=array(
	array('label'=>'Criar', 'url'=>array('/AnimaisManejados/create', 'manejo_id'=>$manejo_id)),	
);
?>

<h1>Animais Manejados</h1>

<?php 

 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'animais-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(		
		'nome_comum',
		'nome_cientifico',		
		'familia',
		'funcao_ecologica_no_saf',
		'origem',		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
));


?>
