<?php
/* @var $this ComercializacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comercializacaos',
);

$this->menu=array(
	array('label'=>'Create Comercializacao', 'url'=>array('create')),
	array('label'=>'Manage Comercializacao', 'url'=>array('admin')),
);
?>

<h1>Comercializacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
