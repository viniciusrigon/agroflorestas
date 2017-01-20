<?php
/* @var $this UsuarioGrupoController */
/* @var $model UsuarioGrupo */

$this->breadcrumbs=array(
	'Usuario Grupos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioGrupo', 'url'=>array('index')),
	array('label'=>'Create UsuarioGrupo', 'url'=>array('create')),
	array('label'=>'View UsuarioGrupo', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage UsuarioGrupo', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioGrupo <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>