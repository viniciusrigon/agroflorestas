<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->menu=array(
	array('label'=>'Criar Menu', 'url'=>array('create')),	
);
?>

<h1>Menus</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agrofloresta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(
		//'saf_id',
		'nomeMenu::Nome',
		'urlMenu::URL',			
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
