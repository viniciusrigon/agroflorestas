<?php
/* @var $this GrupoPermissaoController */
/* @var $model GrupoPermissao */

$this->breadcrumbs=array(
	'Grupo Permissaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GrupoPermissao', 'url'=>array('index')),
	array('label'=>'Manage GrupoPermissao', 'url'=>array('admin')),
);
?>

<h1>Create GrupoPermissao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>