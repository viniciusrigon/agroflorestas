<?php
/* @var $this PerspectivaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perspectivas',
);

$this->menu=array(
	array('label'=>'Create Perspectiva', 'url'=>array('create')),
	array('label'=>'Manage Perspectiva', 'url'=>array('admin')),
);
?>

<h1>Perspectivas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
