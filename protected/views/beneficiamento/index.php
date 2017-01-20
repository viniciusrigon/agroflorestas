<?php
/* @var $this BeneficiamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Beneficiamentos',
);

$this->menu=array(
	array('label'=>'Create Beneficiamento', 'url'=>array('create')),
	array('label'=>'Manage Beneficiamento', 'url'=>array('admin')),
);
?>

<h1>Beneficiamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
