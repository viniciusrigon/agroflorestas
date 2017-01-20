<?php
/* @var $this PermissaoController */
/* @var $model Permissao */


$this->menu=array(
	array('label'=>'List Permissao', 'url'=>array('index')),
	array('label'=>'Create Permissao', 'url'=>array('create')),
	array('label'=>'Update Permissao', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Permissao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Permissao', 'url'=>array('admin')),
);
?>

<h1>Permissao</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Permissao',
	),
)); ?>
