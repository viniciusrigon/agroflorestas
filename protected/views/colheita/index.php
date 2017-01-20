<?php
/* @var $this ColheitaController */
/* @var $model Colheita */
/* @var $dataProvider CActiveDataProvider */

$vegetais_id = $_GET["vegetais_id"];

$this->menu=array(
	array('label'=>'Criar', 'url'=>array('/Colheita/create', 'vegetais_id'=>$vegetais_id)),	
);
?>

<h1>Colheitas</h1>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'animais-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(		
		'produto',
		'quantidade',		
		'forma_colheita',
		'ferramentas',
		'frequencia',
		'periodo_do_ano',		
		array(
			'class'=>'CButtonColumn',
		),
	),
));

?>
