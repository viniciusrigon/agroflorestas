<?php
/* @var $this PropriedadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propriedades',
);

$this->menu=array(
	array('label'=>'Create Propriedade', 'url'=>array('create')),
	array('label'=>'Manage Propriedade', 'url'=>array('admin')),
);
?>

<h1>Propriedades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
