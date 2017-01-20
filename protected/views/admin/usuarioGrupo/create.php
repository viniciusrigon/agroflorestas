<?php
/* @var $this UsuarioGrupoController */
/* @var $model UsuarioGrupo */

$this->breadcrumbs=array(
	'Usuario Grupos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioGrupo', 'url'=>array('index')),
	array('label'=>'Manage UsuarioGrupo', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioGrupo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>