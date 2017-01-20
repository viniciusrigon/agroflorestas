<?php
/* @var $this UsuarioGrupoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Grupos',
);

$this->menu=array(
	array('label'=>'Create UsuarioGrupo', 'url'=>array('create')),
	array('label'=>'Manage UsuarioGrupo', 'url'=>array('admin')),
);
?>

<h1>Usuario Grupos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
