<?php
/* @var $this PermissaoController */
/* @var $model Permissao */


$this->menu=array(
	array('label'=>'Criar Permissao', 'url'=>array('create')),	
);
?>

<h1>Permissao</h1>

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agrofloresta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(
		//'saf_id',
		'Permissao::Permissão',		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
