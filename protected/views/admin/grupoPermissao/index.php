<?php
/* @var $this GrupoPermissaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupo Permissaos',
);

$this->menu=array(
	array('label'=>'Create GrupoPermissao', 'url'=>array('create')),
	array('label'=>'Manage GrupoPermissao', 'url'=>array('admin')),
);
?>

<h1>Grupo Permissaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
