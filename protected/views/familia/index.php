<?php
/* @var $this FamiliaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Familias',
);

$this->menu=array(
	array('label'=>'Criar Familia', 'url'=>array('create')),
	//array('label'=>'Manage Familia', 'url'=>array('admin')),
);
?>

<h1>Familias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
