<?php
/* @var $this AgroflorestaController */
/* @var $model Agrofloresta */

$this->breadcrumbs=array(
	'Agroflorestas',
);

$this->menu=array(
	array('label'=>'Criar Agrofloresta', 'url'=>array('create')),	
);
?>

<h1>Agroflorestas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agrofloresta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(
		//'saf_id',
		'municipio::Município',
		'uf::Estado',		
		'cep::CEP',
		'telefone',
		'email',
		/*
		'webpage',
		'lat',
		'lng',
		*/
		array(
			'class'=>'CButtonColumn',			
		),
	),
)); ?>
