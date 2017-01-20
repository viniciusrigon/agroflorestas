<?php
/* @var $this UsuarioGrupoController */
/* @var $model UsuarioGrupo */

$this->breadcrumbs=array(
	'Usuario Grupos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List UsuarioGrupo', 'url'=>array('index')),
	array('label'=>'Create UsuarioGrupo', 'url'=>array('create')),
	array('label'=>'Update UsuarioGrupo', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete UsuarioGrupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioGrupo', 'url'=>array('admin')),
);
?>

<h1>View UsuarioGrupo #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdGrupo',
		'IdUsuario',
	),
)); ?>
