<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Criar usuário', 'url'=>array('create')),
	);
?>

<h1>Usuarios</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agrofloresta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'Mostrando {start} - {end} de {count} resultados.',
	'columns'=>array(
		//'saf_id',
		'Nome::Nome',
		'Login::Login',			
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
