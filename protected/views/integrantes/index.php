<?php
/* @var $this IntegrantesController */
/* @var $model Integrantes */
/* @var $dataProvider CActiveDataProvider */

$familia_id = $_GET["familia_id"];

$this->menu=array(
	array('label'=>'Criar Integrante', 'url'=>array('/integrantes/create', 'familia_id'=>$familia_id)),	
);

 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'integrantes-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(		
		'nome::Nome',
		'ano_nasc::Nascimento',		
		'parentesco::Parentesco',
		'ocupacao::Ocupação',
		'tempo_residencia::Tempo de residência',		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
));


?>
