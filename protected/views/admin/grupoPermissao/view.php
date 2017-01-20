<?php
/* @var $this GrupoPermissaoController */
/* @var $model GrupoPermissao */

$this->breadcrumbs=array(
	'Grupo Permissaos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List GrupoPermissao', 'url'=>array('index')),
	array('label'=>'Create GrupoPermissao', 'url'=>array('create')),
	array('label'=>'Update GrupoPermissao', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete GrupoPermissao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GrupoPermissao', 'url'=>array('admin')),
);
?>

<h1>View GrupoPermissao #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'IdUsuarioGrupo',
		'IdPermissao',
	),
)); ?>
