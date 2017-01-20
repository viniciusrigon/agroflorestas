<?php
/* @var $this GrupoPermissaoController */
/* @var $model GrupoPermissao */

$this->breadcrumbs=array(
	'Grupo Permissaos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GrupoPermissao', 'url'=>array('index')),
	array('label'=>'Create GrupoPermissao', 'url'=>array('create')),
	array('label'=>'View GrupoPermissao', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage GrupoPermissao', 'url'=>array('admin')),
);
?>

<h1>Update GrupoPermissao <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>