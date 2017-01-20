<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->breadcrumbs=array(
	'Grupos',
);

$this->menu=array(
	array('label'=>'Criar Grupo', 'url'=>array('create')),
	
);
?>

<h1>Grupos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grupo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(
		//'saf_id',
		'Nome::Nome',		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
